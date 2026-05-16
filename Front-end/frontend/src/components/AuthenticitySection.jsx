import React from 'react';
import { Link } from 'react-router-dom';
import './AuthenticitySection.css';

const AuthenticitySection = () => {
  return (
    <section className="authenticity-section container">
      <div className="auth-header">
        <div className="auth-icon-gold">
          <svg width="60" height="60" viewBox="0 0 24 24" fill="#d4af37" stroke="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h2 className="auth-title">Original ou Rien</h2>
        <p className="auth-description">
          Notre garantie d'authenticité à 100%. Tous nos parfums proviennent directement des maisons de parfumerie officielles.
        </p>
      </div>

      <div className="auth-grid">
        <div className="auth-item">
          <div className="item-icon">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#d4af37" strokeWidth="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
          </div>
          <h3>Certificat d'Authenticité</h3>
          <p>Chaque parfum est accompagné de son certificat</p>
        </div>
        <div className="auth-item">
          <div className="item-icon">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#d4af37" strokeWidth="2"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><polyline points="3 3 3 8 8 8"></polyline></svg>
          </div>
          <h3>Remboursement Garanti</h3>
          <p>Si ce n'est pas original, on vous rembourse</p>
        </div>
        <div className="auth-item">
          <div className="item-icon">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#d4af37" strokeWidth="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
          </div>
          <h3>Livraison Sécurisée</h3>
          <p>Emballage protégé et traçabilité complète</p>
        </div>
      </div>

      <div className="auth-footer">
        <Link to="/authenticite">
          <button className="gold-outline-btn">En Savoir Plus sur Notre Authenticité</button>
        </Link>
      </div>
    </section>
  );
};

export default AuthenticitySection;
