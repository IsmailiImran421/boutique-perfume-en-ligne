import React from 'react';
import './SectionTitle.css';

const SectionTitle = ({ title, subtitle, showAllLink }) => {
  return (
    <div className="section-header container">
      <div className="title-group">
        <h2 className="section-title">{title}</h2>
        {subtitle && <p className="section-subtitle">{subtitle}</p>}
      </div>
      {showAllLink && (
        <a href={showAllLink} className="view-all">
          VOIR TOUT <span className="arrow">→</span>
        </a>
      )}
    </div>
  );
};

export default SectionTitle;
