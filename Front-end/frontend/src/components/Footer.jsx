import React from 'react';
import './Footer.css';

const Footer = () => {
  return (
    <footer className="footer">
      <div className="footer-container container">
        <div className="footer-brand">
          <img src="/Logo.png" alt="Sillage Logo" className="footer-logo" />
          <p className="footer-tagline">L'art de la parfumerie authentique au Maroc.</p>
          <div className="social-icons">
            <a href="#"><img src="/social-icon-1.png" alt="" width={20} height={20} /></a>
            <a href="#"><img src="/social-icon-2.png" alt="" width={20} height={20} /></a>
            <a href="#"><img src="/social-icon-3.png" alt="" width={20} height={20} /></a>
          </div>
        </div>

        <div className="footer-links">
          <div className="footer-col">
            <h3>Navigation</h3>
            <ul>
              <li><a href="/">Accueil</a></li>
              <li><a href="/catalogue">Catalogue</a></li>
              <li><a href="/authenticite">Authenticité</a></li>
              <li><a href="/conseiller">Conseiller personnel</a></li>
            </ul>
          </div>
          <div className="footer-col">
            <h3>Service Client</h3>
            <ul>
              <li><a href="/contact">Contact</a></li>
              <li><a href="/livraison">Livraison</a></li>
              <li><a href="/retours">Retours</a></li>
              <li><a href="/faq">FAQ</a></li>
            </ul>
          </div>
          <div className="footer-col">
            <h3>Paiement</h3>
            <div className="payment-methods">
              <span className="payment-icon"><img src="/payment-icon-1.png" alt="" width={30} height={20} /></span>
              <span className="payment-icon"><img src="/payment-icon-2.png" alt="" width={30} height={20} /></span>
              <span className="payment-icon"><img src="/payment-icon-3.png" alt="" width={30} height={20} /></span>
            </div>
            <p>Paiement sécurisé et livraison à domicile</p>
          </div>
        </div>
      </div>
      <div className="footer-bottom">
        <p>© 2025 Sillage. Tous droits réservés.</p>
      </div>
    </footer>
  );
};

export default Footer;
