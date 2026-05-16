import React, { useState, useEffect } from "react";
import ProductCard from "./ProductCard";
import "./CollectionPromotion.css";

const CollectionPromotion = ({ apiUrl, genre }) => {
  const [products, setProducts] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const fetchPromotions = async () => {
      try {
        const response = await fetch(apiUrl);
        if (!response.ok) {
          throw new Error("Erreur lors de la récupération des promotions");
        }
        const data = await response.json();
        const filtered = data.filter((p) => p.genre === genre).slice(0, 4);
        setProducts(filtered);
      } catch (error) {
        console.error("Error fetching promotions:", error);
      } finally {
        setLoading(false);
      }
    };
    fetchPromotions();
  }, [apiUrl, genre]);

  if (loading) return null;
  if (products.length === 0) return null;

  return (
    <section className="collection-promo">
      <div className="container">
        <h2 className="promo-section-title">Promotions</h2>
        <div className="promo-grid">
          {products.map((product) => (
            <ProductCard key={product.id} product={product} isPromotion={true} />
          ))}
        </div>
      </div>
    </section>
  );
};

export default CollectionPromotion;
