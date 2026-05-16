import React, { useState, useEffect } from 'react';
import ProductCard from './ProductCard';
import SectionTitle from './SectionTitle';
import './ProductSection.css';

const ProductSection = ({ title, subtitle, apiUrl, showAllLink }) => {
  const [products, setProducts] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchProducts = async () => {
      try {
        setLoading(true);
        // Using fetch as requested in "Important" section
        const response = await fetch(apiUrl);
        if (!response.ok) {
          throw new Error('Erreur lors de la récupération des données');
        }
        const data = await response.json();
        setProducts(data);
      } catch (err) {
        setError(err.message);
        // Fallback for demo if API is not running
        setProducts([
          { id: 1, nom: "Élégance Suprême", notes: "Rose, Jasmin, Vanille", prix: 850, image: "/product1.png", genre: "femme" },
          { id: 2, nom: "Mystère Oriental", notes: "Oud, Ambre, Safran", prix: 920, image: "/product2.png", genre: "femme" },
          { id: 3, nom: "Essence Royale", notes: "Bergamote, Patchouli", prix: 1050, image: "/product3.png", genre: "femme" },
          { id: 4, nom: "Lumière Dorée", notes: "Mandarine, Fleur d'oranger", prix: 780, image: "/product4.png", genre: "femme" }
        ]);
      } finally {
        setLoading(false);
      }
    };

    fetchProducts();
  }, [apiUrl]);

  if (loading) return <div className="loader container">Chargement...</div>;
  if (error && products.length === 0) return <div className="error container">{error}</div>;

  return (
    <section className="product-section container">
      <SectionTitle title={title} subtitle={subtitle} showAllLink={showAllLink} />
      <div className="product-grid">
        {products.slice(0, 4).map(product => (
          <ProductCard key={product.id} product={product} />
        ))}
      </div>
    </section>
  );
};

export default ProductSection;
