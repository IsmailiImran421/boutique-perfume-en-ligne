import React, { useState, useEffect } from "react";
import "./PromotionSlider.css";

const PromotionSlider = () => {
  const [currentSlide, setCurrentSlide] = useState(0);

  const slides = [
    "/Publicite-22.png",
    "/Publicite-11.png",
    "/Publicite-33.png",
  ];

  useEffect(() => {
    const interval = setInterval(() => {
      setCurrentSlide((prev) => (prev + 1) % slides.length);
    }, 3000);

    return () => clearInterval(interval);
  }, [slides.length]);

  const goToSlide = (index) => {
    setCurrentSlide(index);
  };

  return (
    <div className="promotion-slider-container">
      <div className="promotion-slider">
        {slides.map((slide, index) => (
          <div
            key={index}
            className={`slider-slide ${index === currentSlide ? "active" : ""}`}
            style={{
              backgroundImage: `url(${slide})`,
            }}
          />
        ))}
      </div>

      {/* Dots Navigation */}
      <div className="slider-dots">
        {slides.map((_, index) => (
          <button
            key={index}
            className={`slider-dot ${index === currentSlide ? "active" : ""}`}
            onClick={() => goToSlide(index)}
            aria-label={`Go to slide ${index + 1}`}
          />
        ))}
      </div>
    </div>
  );
};

export default PromotionSlider;
