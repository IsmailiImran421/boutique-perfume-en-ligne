import React, { useState, useEffect } from 'react';
import { useSearchParams } from 'react-router-dom';
import ProductCard from './ProductCard';
import SectionTitle from './SectionTitle';
import Footer from './Footer';
import Navbar from './Navbar';
import './CollectionPage.css'; // Reusing styles for consistency

const SearchPage = () => {
    const [searchParams] = useSearchParams();
    const query = searchParams.get('q');
    const [products, setProducts] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        const fetchSearchResults = async () => {
            setLoading(true);
            try {
                const response = await fetch(`http://localhost:8000/api/parfums/search?q=${query}`);
                const data = await response.json();
                setProducts(data);
            } catch (error) {
                console.error("Error fetching search results:", error);
            } finally {
                setLoading(false);
            }
        };

        if (query) {
            fetchSearchResults();
        }
    }, [query]);

    return (
        <div className="collection-page">
            <Navbar />
            
            <div className="search-header" style={{ paddingTop: '160px', paddingBottom: '40px', textAlign: 'center', background: '#000' }}>
                <SectionTitle 
                    title={query ? `Résultats pour "${query}"` : "Recherche"}
                    subtitle={products.length > 0 ? `${products.length} produits trouvés` : "Aucun produit trouvé"}
                />
            </div>

            <main className="container" style={{ minHeight: '60vh', padding: '40px 0' }}>
                {loading ? (
                    <div className="loading">Chargement...</div>
                ) : products.length > 0 ? (
                    <div className="product-grid" style={{ 
                        display: 'grid', 
                        gridTemplateColumns: 'repeat(4, 1fr)', 
                        gap: '30px' 
                    }}>
                        {products.map(product => (
                            <ProductCard key={product.id} product={product} />
                        ))}
                    </div>
                ) : (
                    <div className="no-results" style={{ textAlign: 'center', color: '#888', marginTop: '100px' }}>
                        <p>Désolé, nous n'avons trouvé aucun parfum correspondant à votre recherche.</p>
                    </div>
                )}
            </main>

            <Footer />
        </div>
    );
};

export default SearchPage;
