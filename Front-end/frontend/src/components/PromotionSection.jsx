import React, { useState, useEffect } from "react";
import ProductCard from "./ProductCard";
import "./PromotionSection.css";

const promoImages = [
  "/Publicite-1.jfif",
  "/Publicite-2.jfif",
  "/Publicite-3.jfif",
];

const PromotionSection = ({ apiUrl }) => {
  const [currentSlide, setCurrentSlide] = useState(0);
  const [products, setProducts] = useState([]);

  useEffect(() => {
    const timer = setInterval(() => {
      setCurrentSlide((prev) =>
        prev === promoImages.length - 1 ? 0 : prev + 1,
      );
    }, 4000);
    return () => clearInterval(timer);
  }, []);

  useEffect(() => {
    const fetchPromos = async () => {
      try {
        const response = await fetch(apiUrl);
        if (!response.ok) {
          throw new Error("Erreur lors de la récupération des promotions");
        }
        const data = await response.json();
        setProducts(data);
      } catch (err) {
        console.error("Promotion fetch failed:", err);
        setProducts([
          {
            id: 10,
            nom: "Oud Impérial",
            notes: "Oud Noir, Santal",
            prix: 950,
            old_prix: 1200,
            image: "/product1.png",
            promo: true,
            reduction: 15,
          },
          {
            id: 11,
            nom: "Nuit Intense",
            notes: "Ambre Gris, Patchouli",
            prix: 880,
            old_prix: 1100,
            image: "/product2.png",
            promo: true,
            reduction: 10,
          },
          {
            id: 12,
            nom: "Rose Noire",
            notes: "Rose de Damas, Cuir",
            prix: 1020,
            old_prix: 1350,
            image: "/product3.png",
            promo: true,
            reduction: 20,
          },
          {
            id: 13,
            nom: "Soleil d'Orient",
            notes: "Vanille, Musc",
            prix: 750,
            old_prix: 950,
            image: "/product4.png",
            promo: true,
            reduction: 15,
          },
        ]);
      }
    };
    fetchPromos();
  }, [apiUrl]);

  return (
    <section className="promotion-section container">
      <div className="promo-layout">
        <div className="promo-slider">
          {promoImages.map((img, idx) => (
            <div
              key={idx}
              className={`promo-slide ${idx === currentSlide ? "active" : ""}`}
              style={{ backgroundImage: `url(${img})` }}
            ></div>
          ))}
          <div className="promo-dots">
            {promoImages.map((_, idx) => (
              <span
                key={idx}
                className={`p-dot ${idx === currentSlide ? "active" : ""}`}
                onClick={() => setCurrentSlide(idx)}
              ></span>
            ))}
          </div>
        </div>

        <div className="promo-products">
          <div className="promo-grid">
            {products.slice(0, 4).map((product) => (
              <ProductCard key={product.id} product={product} />
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default PromotionSection;
