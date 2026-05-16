import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";
import Navbar from "./Navbar";
import Footer from "./Footer";
import ProductCard from "./ProductCard";
import SectionTitle from "./SectionTitle";
import AuthenticitySection from "./AuthenticitySection";
import PersonalAdvisor from "./PersonalAdvisor";
import CollectionPromotion from "./CollectionPromotion";
import PromotionSlider from "./PromotionSlider";
import "./CollectionPage.css";

const CollectionPage = () => {
  const { genre } = useParams();
  const [products, setProducts] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    window.scrollTo(0, 0);
    fetchProducts();
  }, [genre]);

  const fetchProducts = async () => {
    setLoading(true);
    try {
      const response = await fetch(
        `http://localhost:8000/api/parfums/${genre}`,
      );
      if (!response.ok) throw new Error("Erreur réseau");
      const data = await response.json();
      setProducts(data);
    } catch (error) {
      console.error("Erreur lors du chargement des produits:", error);
    } finally {
      setLoading(false);
    }
  };

  const winterProducts = products.filter(
    (p) => p.saison && p.saison.toLowerCase() === "hiver",
  );
  const summerProducts = products.filter(
    (p) => p.saison && p.saison.toLowerCase() === "ete",
  );

  const title = genre === "homme" ? "HOMME" : "FEMME";
  const bgImage =
    genre === "homme" ? "/hero-section-2.png" : "/hero-section-3.png";

  return (
    <div className="collection-page">
      <Navbar />

      <div className="collection-hero-container">
        <header
          className="collection-banner"
          style={{
            backgroundImage: `linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(${bgImage})`,
          }}
        >
          <div className="banner-content">
            <h1 className="banner-title">{title}</h1>
            <p className="banner-subtitle">Parfums</p>
          </div>
        </header>
      </div>

      <main className="collection-content">
        <div className="container gold-titles">
          <SectionTitle title="Nos Collections de Parfums" subtitle="" />
        </div>

        {/* Winter Section */}
        <section className="season-section container">
          <h3 className="season-title">Parfum d'hiver</h3>
          <div className="horizontal-scroll">
            {winterProducts.length > 0 ? (
              winterProducts.map((product) => (
                <div className="scroll-item" key={product.id}>
                  <ProductCard product={product} />
                </div>
              ))
            ) : (
              <p className="no-products">Bientôt disponible...</p>
            )}
          </div>
        </section>

        {/* Promotion Slider - Between Seasons */}
        <div className="container">
          <PromotionSlider />
        </div>

        {/* Summer Section */}
        <section className="season-section container">
          <h3 className="season-title">Parfum d'été</h3>
          <div className="horizontal-scroll">
            {summerProducts.length > 0 ? (
              summerProducts.map((product) => (
                <div className="scroll-item" key={product.id}>
                  <ProductCard product={product} />
                </div>
              ))
            ) : (
              <p className="no-products">Bientôt disponible...</p>
            )}
          </div>
        </section>

        <div className="spacer-50"></div>
        <PersonalAdvisor />

        {/* New Specialized Promotion Section */}
        <CollectionPromotion
          apiUrl="http://localhost:8000/api/parfums/promotions"
          genre={genre}
        />

        <AuthenticitySection />
      </main>

      <Footer />
    </div>
  );
};

export default CollectionPage;
