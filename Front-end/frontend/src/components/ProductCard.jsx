import React from 'react';
import './ProductCard.css';

const ProductCard = ({ product, isPromotion }) => {
  if (!product) return null;
  const { nom, notes, prix, image, old_prix, promo, reduction } = product;

  return (
    <div className="product-card">
      <div className="product-image-container">
        {promo && (
          <span className="promo-badge">
            {isPromotion ? `Promotion -${reduction}%` : `-${reduction}%`}
          </span>
        )}
        <img src={image} alt={nom} className="product-image" />
      </div>
      <div className="product-info">
        <h3 className="product-name">{nom}</h3>
        <p className="product-notes">{notes}</p>
        <div className="price-container">
          <span className="product-price">{prix} MAD</span>
          {old_prix && <span className="old-price">{old_prix} MAD</span>}
        </div>
      </div>
    </div>
  );
};

export default ProductCard;
