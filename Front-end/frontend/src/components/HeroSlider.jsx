import React, { useState, useEffect } from 'react';
import './HeroSlider.css';

const slides = [
  {
    image: '/hero-section-1.png',
    title: 'VOTRE PERSONNEL',
    subtitle: 'Parfums',
    buttonText: 'CONSEIL PERSONNALISÉ'
  },
  {
    image: '/hero-section-2.png',
    title: 'Homme',
    subtitle: 'Parfums',
    buttonText: 'DÉCOUVRIR'
  },
  {
    image: '/hero-section-3.png',
    title: 'Femme',
    subtitle: 'Parfums',
    buttonText: 'EN SAVOIR PLUS'
  }
];

const HeroSlider = () => {
  const [current, setCurrent] = useState(0);

  useEffect(() => {
    const timer = setInterval(() => {
      setCurrent((prev) => (prev === slides.length - 1 ? 0 : prev + 1));
    }, 3000);
    return () => clearInterval(timer);
  }, []);

  const nextSlide = () => {
    setCurrent(current === slides.length - 1 ? 0 : current + 1);
  };

  const prevSlide = () => {
    setCurrent(current === 0 ? slides.length - 1 : current - 1);
  };

  return (
    <section className="hero-slider">
      <div className="slider-container">
        {slides.map((slide, index) => (
          <div
            key={index}
            className={`slide ${index === current ? 'active' : ''}`}
            style={{ backgroundImage: `url(${slide.image})` }}
          >
            <div className="overlay"></div>
            <div className="slide-content container">
              <h2 className="slide-title animate-text">{slide.title}</h2>
              <h1 className="slide-subtitle animate-text-delay">{slide.subtitle}</h1>
              <button className="gold-btn animate-btn">{slide.buttonText}</button>
            </div>
          </div>
        ))}

        <button className="nav-btn prev" onClick={prevSlide}>
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="m15 18-6-6 6-6" /></svg>
        </button>
        <button className="nav-btn next" onClick={nextSlide}>
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="m9 18 6-6-6-6" /></svg>
        </button>

        <div className="dots">
          {slides.map((_, index) => (
            <span
              key={index}
              className={`dot ${index === current ? 'active' : ''}`}
              onClick={() => setCurrent(index)}
            ></span>
          ))}
        </div>
      </div>
    </section>
  );
};

export default HeroSlider;
