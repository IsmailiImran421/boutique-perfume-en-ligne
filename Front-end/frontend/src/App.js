import React from 'react';
import { Routes, Route } from 'react-router-dom';
import Home from './components/Home';
import CollectionPage from './components/CollectionPage';
import SearchPage from './components/SearchPage';
import AuthenticityPage from './components/AuthenticityPage';
import './App.css';

function App() {
  return (
    <div className="App">
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/collection/:genre" element={<CollectionPage />} />
        <Route path="/search" element={<SearchPage />} />
        <Route path="/authenticite" element={<AuthenticityPage />} />
      </Routes>
    </div>
  );
}

export default App;
