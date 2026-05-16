import React from 'react';
import './PersonalAdvisor.css';

const PersonalAdvisor = () => {
  return (
    <section className="personal-advisor container">
      <div className="advisor-banner" style={{ backgroundImage: 'url(/img-1.png)' }}>
        <div className="advisor-overlay"></div>
        <div className="advisor-content">
          <div className="advisor-icon">
            {/* Updated icon to match mockup (single gold profile) */}
            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#d4af37" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <h2 className="advisor-title">Besoin d'aide pour trouver votre signature olfactive ?</h2>
          <p className="advisor-subtitle">Notre conseiller personnel vous guide vers la fragrance parfaite</p>
          <button className="gold-btn-large">CONSEIL PERSONNALISÉ</button>
        </div>
      </div>
    </section>
  );
};

export default PersonalAdvisor;
