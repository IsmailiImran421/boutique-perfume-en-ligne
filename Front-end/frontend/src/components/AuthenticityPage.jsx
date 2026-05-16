import React, { useState, useEffect } from 'react';
import Navbar from './Navbar';
import Footer from './Footer';
import './AuthenticityPage.css';
import PersonalAdvisor from './PersonalAdvisor';

const AuthenticityPage = () => {
    const [activeFaq, setActiveFaq] = useState(null);

    useEffect(() => {
        window.scrollTo(0, 0);
    }, []);

    const faqData = [
        {
            question: "Comment sourcez-vous vos parfums ?",
            answer: "Tous nos parfums proviennent directement des maisons de parfumerie officielles ou de distributeurs agréés en Europe. Nous garantissons une traçabilité totale pour chaque flacon vendu."
        },
        {
            question: "Pourquoi vos prix sont-ils parfois plus bas ?",
            answer: "Grâce à notre modèle de vente directe et à nos partenariats stratégiques avec des fournisseurs européens, nous parvenons à réduire les intermédiaires et à vous offrir des tarifs compétitifs sans jamais compromettre la qualité."
        },
        {
            question: "S'agit-il de 'Testeurs' ?",
            answer: "Non, sauf mention explicite contraire. La grande majorité de nos produits sont des versions commerciales scellées dans leur emballage d'origine. Si un testeur est proposé, il sera clairement identifié comme tel."
        }
    ];

    const [testimonials, setTestimonials] = useState([
        {
            name: "Hassna M.",
            stars: 5,
            text: "Je viens juste d'acheter du Creed Aventus en ligne au Maroc, mais le Batch code correspond parfaitement à celui d'Aventure sur Marrakech.",
            avatar: "HM"
        },
        {
            name: "Leila B.",
            stars: 5,
            text: "J'avais des doutes au début, mais la qualité du flacon et du jus me rassure énormément. Je commanderai sans aucun doute chez vous à nouveau.",
            avatar: "LB"
        },
        {
            name: "Karim O.",
            stars: 5,
            text: "Enfin une boutique sérieuse au Maroc. Parfums 100% authentiques. Tout est vérifié. Merci Sillage !",
            avatar: "KO"
        }
    ]);

    const [reviewName, setReviewName] = useState('');
    const [reviewText, setReviewText] = useState('');
    const [showSuccess, setShowSuccess] = useState(false);

    const handleReviewSubmit = (e) => {
        e.preventDefault();
        if (reviewName.trim() === '' || reviewText.trim() === '') return;

        // Create simple initials for the avatar
        const words = reviewName.trim().split(' ');
        let initials = '';
        if (words.length > 1) {
            initials = words[0][0] + words[1][0];
        } else {
            initials = words[0].substring(0, 2);
        }
        initials = initials.toUpperCase();

        const newReview = {
            name: reviewName,
            stars: 5, // Default to 5 stars
            text: reviewText,
            avatar: initials
        };

        // Add the new review at the beginning of the list
        setTestimonials([newReview, ...testimonials]);
        setReviewName('');
        setReviewText('');
        setShowSuccess(true);
        
        // Hide success message after 3 seconds
        setTimeout(() => setShowSuccess(false), 3000);
    };

    return (
        <div className="authenticity-page">
            <Navbar />

            {/* Hero Section */}
            <section className="auth-hero" style={{ backgroundImage: 'url(/auth.png)' }}>
            </section>

            {/* Key Features */}
            <section className="auth-features">
                <div className="container">
                    <div className="features-grid">
                        <div className="feature-card">
                            <div className="feature-icon">🔍</div>
                            <h3>Batch Code</h3>
                            <p>Vérifiez la date de fabrication directement sur les plateformes officielles comme Checkfresh.</p>
                        </div>
                        <div className="feature-card">
                            <div className="feature-icon">📦</div>
                            <h3>Emballage Scellé</h3>
                            <p>Tous nos produits sont livrés dans leur cellophane d'origine avec les gravures intactes.</p>
                        </div>
                        <div className="feature-card">
                            <div className="feature-icon">💳</div>
                            <h3>Garantie Totale</h3>
                            <p>Remboursement immédiat à 200% si un défaut d'authenticité est prouvé par un expert.</p>
                        </div>
                    </div>
                </div>
            </section>

            {/* FAQ Section */}
            <section className="auth-faq">
                <div className="container">
                    <h2 className="faq-section-title">Questions Fréquentes</h2>
                    <div className="faq-list">
                        {faqData.map((item, index) => (
                            <div key={index} className={`faq-item ${activeFaq === index ? 'active' : ''}`}>
                                <div className="faq-question" onClick={() => setActiveFaq(activeFaq === index ? null : index)}>
                                    {item.question}
                                    <span className="faq-toggle">{activeFaq === index ? '−' : '+'}</span>
                                </div>
                                <div className="faq-answer">
                                    {item.answer}
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            <PersonalAdvisor />

            {/* Testimonials */}
            <section className="auth-testimonials container">
                <h2 className="faq-section-title" style={{ textDecoration: 'none' }}>La Voix de nos Clients</h2>
                <div className="testimonials-grid">
                    {testimonials.map((t, idx) => (
                        <div key={idx} className="testimonial-card">
                            <span className="stars">★★★★★</span>
                            <p className="testimonial-text">"{t.text}"</p>
                            <div className="testimonial-author">
                                <div className="author-avatar">{t.avatar}</div>
                                <div className="author-info">
                                    <h4>{t.name}</h4>
                                    <span className="verified">
                                        <span className="verified-check">✓</span> Acheteur vérifié
                                    </span>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </section>

            {/* Feedback Form */}
            <section className="auth-feedback container">
                <h2 className="faq-section-title" style={{ textDecoration: 'none' }}>Partagez votre expérience</h2>
                <form className="feedback-form" onSubmit={handleReviewSubmit}>
                    <input 
                        type="text" 
                        placeholder="Votre Nom" 
                        value={reviewName}
                        onChange={(e) => setReviewName(e.target.value)}
                        required
                    />
                    <textarea 
                        placeholder="Votre avis sur votre parfum..."
                        value={reviewText}
                        onChange={(e) => setReviewText(e.target.value)}
                        required
                    ></textarea>
                    <button type="submit" className="submit-btn">PUBLIER MON AVIS</button>
                    {showSuccess && <p style={{ color: '#4CAF50', marginTop: '15px', fontWeight: '500' }}>Merci ! Votre avis a été publié avec succès.</p>}
                </form>
            </section>

            <Footer />
        </div>
    );
};

export default AuthenticityPage;
