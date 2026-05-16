import React from 'react';
import Navbar from '../components/Navbar';
import HeroSlider from '../components/HeroSlider';
import SearchBar from '../components/SearchBar';
import ProductSection from '../components/ProductSection';
import AuthenticitySection from '../components/AuthenticitySection';
import PromotionSection from '../components/PromotionSection';
import PersonalAdvisor from '../components/PersonalAdvisor';
import SectionTitle from '../components/SectionTitle';
import Footer from '../components/Footer';

const Home = () => {
  return (
    <div className="home-page">
      <Navbar />

      <main>
        <HeroSlider />
        <SearchBar />

        <SectionTitle
          title="Nouveautés"
          subtitle="Les dernières acquisitions de notre collection exclusive"
        />
        <ProductSection
          title="Pour Femme"
          apiUrl="http://localhost:8000/api/parfums/femme"
          showAllLink="/collection/femme"
        />

        {/* Pour Homme Section */}
        <ProductSection
          title="Pour Homme"
          apiUrl="http://localhost:8000/api/parfums/homme"
          showAllLink="/collection/homme"
        />

        <AuthenticitySection />

        <PromotionSection apiUrl="http://localhost:8000/api/parfums/promotions" />

        <PersonalAdvisor />
      </main>

      <Footer />
    </div>
  );
};

export default Home;
