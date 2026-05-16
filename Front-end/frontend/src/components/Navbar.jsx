import React, { useState, useEffect } from 'react';
import { Link, useLocation } from 'react-router-dom';
import './Navbar.css';

const Navbar = () => {
  const [scrolled, setScrolled] = useState(false);
  const [menuOpen, setMenuOpen] = useState(false);
  const location = useLocation();

  useEffect(() => {
    const handleScroll = () => {
      setScrolled(window.scrollY > 50);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  // Close menu when route changes
  useEffect(() => {
    setMenuOpen(false);
  }, [location]);

  const isActive = (path) => location.pathname === path;
  const isCatalogueActive = location.pathname.startsWith('/collection');

  return (
    <nav className={`navbar ${scrolled ? 'scrolled' : ''} ${menuOpen ? 'menu-open' : ''}`}>
      <div className="navbar-container">
        <div className="navbar-logo">
          <Link to="/">
            <img src="/Logo.png" alt="Sillage Logo" className="logo-img" />
          </Link>
        </div>

        <button className="mobile-toggle" onClick={() => setMenuOpen(!menuOpen)}>
          <span className="bar"></span>
          <span className="bar"></span>
          <span className="bar"></span>
        </button>

        <ul className={`navbar-menu ${menuOpen ? 'active' : ''}`}>
          <li>
            <Link to="/" className={isActive('/') ? 'active' : ''}>
              ACCUEIL
            </Link>
          </li>
          <li className="dropdown">
            <span className={`dropdown-trigger ${isCatalogueActive ? 'active' : ''}`}>
              CATALOGUE <span className="arrow">▾</span>
            </span>
            <ul className="dropdown-menu">
              <li><Link to="/collection/femme">POUR FEMME</Link></li>
              <li><Link to="/collection/homme">POUR HOMME</Link></li>
            </ul>
          </li>
          <li>
            <Link to="/authenticite" className={isActive('/authenticite') ? 'active' : ''}>
              AUTHENTICITÉ
            </Link>
          </li>
          <li>
            <Link to="/conseiller" className={isActive('/conseiller') ? 'active' : ''}>
              CONSEILLER PERSONNEL
            </Link>
          </li>
        </ul>

        <div className="navbar-icons">
          <button className="icon-btn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
          </button>
          <button className="icon-btn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path><path d="M3 6h18"></path><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
          </button>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;
