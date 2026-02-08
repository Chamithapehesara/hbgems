<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HB Gems | Authentic Ceylon Gemstones</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <style>

        /* --- CINEMATIC GLOBAL STYLES --- */

/* 1. Film Grain & Vignette (ෆිල්ම් ලුක් එක) */
.cinematic-grain {
    position: fixed;
    top: 0; left: 0; width: 100%; height: 100%;
    pointer-events: none; /* මවුස් එකට අහු නොවෙන්න */
    z-index: 9998;
    background-image: url("https://upload.wikimedia.org/wikipedia/commons/7/76/Noise.png"); /* Noise Image */
    opacity: 0.05; /* බොහොම සියුම්ව පේන්න */
    mix-blend-mode: overlay;
}

/* වටේ අඳුරු කිරීම (Vignette) */
body::after {
    content: "";
    position: fixed;
    top: 0; left: 0; width: 100%; height: 100%;
    background: radial-gradient(circle, transparent 60%, rgba(0,0,0,0.4) 100%);
    pointer-events: none;
    z-index: 9997;
}

/* 2. Custom Luxury Cursor (රත්තරන් රවුම) */
.cursor-dot, .cursor-outline {
    position: fixed;
    top: 0; left: 0;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    z-index: 9999;
    pointer-events: none;
}

.cursor-dot {
    width: 8px; height: 8px;
    background-color: #D4AF37; /* රත්තරන් මැද තිත */
}

.cursor-outline {
    width: 40px; height: 40px;
    border: 1px solid rgba(212, 175, 55, 0.5); /* වටේ රවුම */
    transition: width 0.2s, height 0.2s, background-color 0.2s;
}

/* Hover Effect (ලින්ක් උඩට ගියාම රවුම ලොකු වෙන්න) */
body.hovering .cursor-outline {
    width: 60px; height: 60px;
    background-color: rgba(212, 175, 55, 0.1);
    border-color: transparent;
}

/* 3. Smooth Scrolling & Typography */
html {
    scroll-behavior: smooth;
}

body {
    /* අකුරු ටිකක් ලස්සන කරන්න */
    letter-spacing: 0.5px; 
}

h1, h2, h3 {
    letter-spacing: 1px; /* මාතෘකා වල අකුරු ඈත් කිරීම */
}

/* 4. Hero Image "Slow Zoom" Animation (Ken Burns Effect) */
.hero-image-box img {
    /* කලින් තිබුණ style එකට මේක එකතු කරන්න */
    animation: slowZoom 20s infinite alternate ease-in-out !important;
}

@keyframes slowZoom {
    0% { transform: scale(1); }
    100% { transform: scale(1.1); } /* හෙමින් සූම් වෙනවා */
}

        /* පසුබිම සහ වටපිටාව */
        .luxury-review-section {
            background: linear-gradient(135deg, #050a14 0%, #0b1c3c 100%) !important;
            padding: 80px 0;
            color: white;
            overflow: hidden;
        }

        /* Slider එකේ පෙට්ටිය (වැදගත්ම කොටස - මේකෙන් තමයි පැත්තට යන්නේ) */
        .testimonial-carousel {
            max-width: 800px;
            margin: 0 auto;
            overflow: hidden; /* වටේ තියෙන කාඩ් හංගනවා */
            position: relative;
        }

        .testimonial-track {
            display: flex; /* කාඩ් ටික පේළියට ගන්නවා */
            transition: transform 0.5s ease-in-out; /* මාරු වෙද්දි ස්මූත් වෙන්න */
        }

        .review-card {
            min-width: 100%; /* එක කාඩ් එකක් සම්පූර්ණ ඉඩ ගන්නවා */
            box-sizing: border-box;
            padding: 20px;
        }

        /* කාඩ් එකේ හැඩය */
        .glass-card-inner {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 215, 0, 0.3);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
        }

        /* පින්තූරය */
        .reviewer-img {
            width: 80px !important;
            height: 80px !important;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #ffd700;
            display: inline-block;
        }

        /* නම සහ විස්තර */
        .reviewer-details {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .reviewer-info h4 {
            color: #ffd700;
            margin: 0;
            font-size: 1.2rem;
        }

        .reviewer-info span {
            color: #ccc;
            font-size: 0.9rem;
        }

        .review-text {
            color: #e0e0e0;
            font-style: italic;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .section-title.gold-text {
            color: #D4AF37 !important;
        }

        @media screen and (max-width: 768px) {
            
            /* --- 1. NAVBAR FIX --- */
            .navbar {
                padding: 15px 20px; /* වටේ ඉඩ අඩු කිරීම */
            }
            .logo h1 {
                font-size: 22px; /* ලෝගෝ එක පොඩ්ඩක් පොඩි කිරීම */
            }
            #currencySelect {
                padding: 3px 8px;
                font-size: 0.9rem;
                margin-left: 10px;
            }

            /* --- 2. HERO SECTION FIX --- */
            .hero-text-box h2 {
                font-size: 2.5rem !important; /* මාතෘකාව ෆෝන් එකට ගැලපෙන්න */
                line-height: 1.2;
            }
            .hero-text-box p {
                font-size: 1rem !important;
            }
            .hero-split {
                padding-top: 40px !important; /* උඩින් ඉඩ */
                padding-bottom: 40px !important;
                flex-direction: column-reverse; /* ෆෝන් එකේදි පින්තූරේ උඩට */
            }
            .hero-image-box {
                margin-bottom: 30px;
            }

            /* --- 3. REVIEWS SECTION FIX --- */
            .testimonial-carousel {
                padding: 0 10px !important; /* වටේ ඉඩ අඩු කිරීම */
            }
            /* Review Card එකේ ඇතුලත ඉඩ අඩු කිරීම */
            .review-card > div { 
                padding: 30px 20px !important; 
            }
            /* Review Text එක පොඩි කිරීම */
            .review-card p {
                font-size: 1rem !important;
                line-height: 1.5 !important;
            }
            /* Quote Icon එක පොඩි කිරීම */
            .review-card i {
                font-size: 2.5rem !important;
                top: 15px !important;
                right: 15px !important;
            }
            /* Arrows (ඊතල) ෆෝන් එකේදි පාට වැඩි කිරීම (පේන්න) */
            #prevBtn, #nextBtn {
                background: rgba(0,0,0,0.6) !important;
                color: #D4AF37 !important;
                font-size: 2rem !important;
                width: 40px !important; /* ටච් කරන්න ලේසි වෙන්න */
                height: 40px !important;
                display: flex !important;
                align-items: center;
                justify-content: center;
            }

            /* --- 4. CONTACT SECTION FIX (වැදගත්ම කොටස) --- */
            .contact-wrapper {
                flex-direction: column; /* එකකට යටින් එකක් */
                gap: 30px; /* Map එකයි Form එකයි අතර පරතරය */
            }
            
            .map-container iframe {
                height: 300px; /* Map එකේ උස ෆෝන් එකට හරි යන්න */
            }

            .contact-form-box {
                padding: 25px !important; /* Form එකේ ඇතුලේ ඉඩ */
            }

            .input-group label {
                font-size: 0.9rem;
            }

            /* Input Box උස වැඩි කිරීම (ටච් කරන්න ලේසි වෙන්න) */
            .contact-form-box input, 
            .contact-form-box select, 
            .contact-form-box textarea {
                padding: 12px 0; 
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 2rem !important; /* මාතෘකා පොඩි කිරීම */
                margin-bottom: 30px !important;
            }
        }
    @media screen and (max-width: 768px) {
            
            /* 1. පොදු පරතරය (Global Spacing) */
            .container {
                padding-left: 20px !important;
                padding-right: 20px !important;
                width: 100% !important;
                box-sizing: border-box !important;
            }
            
            .section-padding {
                padding: 50px 0 !important; /* උඩින් යටින් ඉඩ අඩු කිරීම */
            }

            /* 2. Hero Section (Home) */
            .hero-split {
                padding-top: 100px !important; /* Navbar එකට යටින් පටන් ගන්න */
                flex-direction: column-reverse !important;
                text-align: center !important;
                min-height: auto !important; /* උස අවශ්‍ය ප්‍රමාණයට */
            }
            
            .hero-text-box {
                padding: 0 20px !important;
            }

            .hero-text-box h2 {
                font-size: 2.2rem !important; /* මාතෘකාව ෆෝන් එකට ගානට */
                line-height: 1.2 !important;
            }

            .hero-image-box img {
                max-width: 80% !important; /* පින්තූරේ ඕනවට වඩා ලොකු වීම වැළැක්වීම */
                margin-bottom: 30px !important;
            }

            /* 3. Journey Section (අර දිග පින්තූර ප්‍රශ්නය) */
            .journey-row, .journey-row.reverse {
                flex-direction: column !important;
                gap: 30px !important;
                margin-bottom: 50px !important;
            }

            .journey-img {
                width: 100% !important;
                height: 250px !important; /* ෆෝන් එකේදි උස ෆික්ස් කරනවා */
            }

            .journey-img img {
                width: 100% !important;
                height: 100% !important;
                object-fit: cover !important; /* පින්තූරේ ඇදෙන්නේ නැතුව කපලා ගන්නවා */
            }

            .step-number {
                font-size: 3rem !important; /* අංකය ටිකක් පොඩි කිරීම */
            }

            /* 4. Contact Section (Map & Form) */
            .contact-wrapper {
                flex-direction: column !important;
                display: flex !important;
                gap: 40px !important;
            }

            .contact-info-box, .contact-form-box {
                width: 100% !important;
                min-width: auto !important;
            }

            .contact-form-box {
                padding: 20px !important;
            }

            .map-container iframe {
                height: 250px !important; /* Map එකේ උස */
            }
        }

        @media screen and (max-width: 768px) {
            
            /* Slider එකේ වටේ ඉඩ */
            .slider-wrapper {
                padding: 0 10px !important;
                margin: 0 auto !important;
                width: 100% !important;
            }

            /* Scroll වෙන කොටස */
            .scroll-container {
                gap: 15px !important; /* කාඩ් අතර පරතරය අඩු කිරීම */
                padding-bottom: 20px !important;
                justify-content: flex-start !important; /* වම් පැත්තේ සිට පටන් ගන්න */
            }

            /* කාඩ් එකේ සයිස් එක හැදීම (වැදගත්ම කොටස) */
            .product-card {
                min-width: 260px !important; /* 300px තිබ්බ එක 260px කළා */
                max-width: 280px !important; /* ඕනවට වඩා ලොකු වෙන්න දෙන්නෙ නෑ */
                width: 75vw !important; /* ස්ක්‍රීන් එකෙන් 75% ක් ගන්න */
            }

            /* පින්තූරේ උස හැදීම */
            .img-container {
                height: 200px !important; /* උස අඩු කළා */
            }

            /* අකුරු සයිස් පොඩි කිරීම */
            .product-info {
                padding: 15px !important;
            }

            .product-info h3 {
                font-size: 1.2rem !important;
            }
            
            .price {
                font-size: 1.1rem !important;
            }
            
            /* 'View Details' බටන් එක ලස්සනට පෙන්නන්න */
            .btn-secondary {
                padding: 8px 15px !important;
                font-size: 0.9rem !important;
                width: 100% !important;
            }
        }

        /* --- 1. TRUST BADGES STRIP --- */
.trust-strip {
    background: #0b1c3c;
    padding: 30px 0;
    border-bottom: 1px solid rgba(212, 175, 55, 0.2);
    text-align: center;
}
.badges-container {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
}
.badge-item {
    color: #D4AF37;
    border: 1px solid #D4AF37;
    padding: 10px 20px;
    border-radius: 5px;
    font-family: 'Playfair Display', serif;
    font-size: 1.1rem;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: 0.3s;
}
.badge-item:hover {
    background: rgba(212, 175, 55, 0.1);
    transform: translateY(-3px);
}

/* --- 2. BIRTHSTONE FINDER --- */
.birthstone-section {
    padding: 80px 0;
    background: #fff;
    text-align: center;
}
.month-selector {
    margin: 30px 0;
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
}
.month-btn {
    padding: 10px 20px;
    border: 1px solid #ddd;
    background: white;
    cursor: pointer;
    transition: 0.3s;
    font-family: 'Poppins', sans-serif;
}
.month-btn:hover, .month-btn.active {
    background: #D4AF37;
    color: white;
    border-color: #D4AF37;
}
.gem-result {
    margin-top: 30px;
    display: none; /* JS එකෙන් පෙන්නනකම් හංගනවා */
    animation: fadeIn 0.5s ease;
}
.gem-result.show {
    display: block;
}
.gem-result img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #D4AF37;
    margin-bottom: 15px;
}

/* --- 3. FAQ SECTION (ACCORDION) --- */
.faq-section {
    padding: 80px 0;
    background: #f9f9f9;
}
.faq-container {
    max-width: 800px;
    margin: 0 auto;
}
.faq-item {
    background: white;
    margin-bottom: 15px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    overflow: hidden;
}
.faq-question {
    padding: 20px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: 600;
    color: #333;
}
.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
    padding: 0 20px;
    color: #666;
}
.faq-item.active .faq-answer {
    max-height: 200px; /* උස ඇරෙනවා */
    padding-bottom: 20px;
}
.faq-item.active .faq-question {
    color: #D4AF37;
}

/* --- 4. FLOATING WHATSAPP BUTTON --- */
.whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 30px;
    right: 30px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: 0.3s;
    animation: pulse 2s infinite;
}
.whatsapp-float:hover {
    background-color: #128C7E;
    transform: scale(1.1);
}
@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
    70% { box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
    100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
}

/* Mobile Adjustments */
@media screen and (max-width: 768px) {
    .badges-container { flex-direction: column; align-items: center; gap: 15px; }
    .whatsapp-float { width: 50px; height: 50px; font-size: 25px; bottom: 20px; right: 20px; }
}

/* --- LUXURY BIRTHSTONE SECTION --- */
.birthstone-section {
    padding: 80px 0;
    background: #ffffff; /* සුදු පසුබිම */
    text-align: center;
}

/* 1. Month Buttons (රවුම් සහ රත්තරන් පාට) */
.month-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
    margin-bottom: 50px;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
}

.month-btn {
    padding: 10px 25px;
    border: 1px solid #D4AF37; /* රත්තරන් ඉර */
    background: transparent;
    color: #333;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 0.9rem;
    border-radius: 50px; /* Pill Shape (කැප්සියුල් හැඩය) */
    text-transform: uppercase;
    letter-spacing: 1px;
}

.month-btn:hover {
    background: rgba(212, 175, 55, 0.1); /* මවුස් එක ගෙනිච්චම ලා රත්තරන් පාට */
    transform: translateY(-2px);
}

.month-btn.active-month {
    background: #D4AF37; /* Active වුනාම තද රත්තරන් */
    color: white;
    box-shadow: 0 5px 15px rgba(212, 175, 55, 0.4); /* Glow effect */
    transform: scale(1.05);
}

/* 2. Result Box (Premium Card Design) */
.gem-result-box {
    display: none;
    max-width: 800px;
    margin: 0 auto;
    animation: fadeInGem 0.6s ease;
}

.gem-card-inner {
    display: flex;
    align-items: center;
    background: #fff;
    padding: 40px;
    border-radius: 20px;
    /* Premium Shadow & Border */
    box-shadow: 0 20px 50px rgba(0,0,0,0.08); 
    border: 1px solid rgba(212, 175, 55, 0.3);
    position: relative;
    overflow: hidden;
}

/* පොඩි සැරසිලි ඉරක් (Decoration Line) */
.gem-card-inner::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 5px; height: 100%;
    background: #D4AF37;
}

/* Image Style */
.gem-card-inner img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid #f9f9f9; /* පින්තූරේ වටේට සුදු රවුමක් */
    box-shadow: 0 10px 25px rgba(0,0,0,0.15); /* පින්තූරේ පාවෙනවා වගේ */
    margin-right: 40px;
    transition: transform 0.3s;
}

.gem-card-inner img:hover {
    transform: rotate(5deg) scale(1.02);
}

/* Text Details */
.gem-details {
    text-align: left;
    flex: 1;
}

.gem-details h3 {
    color: #D4AF37;
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem; /* නම ලොකු කළා */
    margin-bottom: 5px;
    line-height: 1.1;
}

.gem-subtitle {
    display: inline-block;
    background: rgba(212, 175, 55, 0.1);
    color: #b5922b;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 25px;
}

.detail-row {
    margin-bottom: 15px;
    font-size: 1.05rem;
    color: #555;
    display: flex;
    align-items: flex-start;
    gap: 10px;
}

.detail-row i {
    color: #D4AF37;
    font-size: 1.2rem;
    margin-top: 3px;
}

.detail-row strong {
    color: #222;
    font-weight: 600;
    min-width: 90px; /* Text එක කෙලින් තියාගන්න */
}

/* Animation */
@keyframes fadeInGem {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Mobile Responsive */
@media screen and (max-width: 768px) {
    .gem-card-inner {
        flex-direction: column;
        padding: 30px 20px;
        text-align: center;
    }
    
    .gem-card-inner img {
        margin-right: 0;
        margin-bottom: 25px;
        width: 150px;
        height: 150px;
    }

    .gem-details {
        text-align: center;
    }
    
    .gem-card-inner::before {
        width: 100%; height: 5px; /* ෆෝන් එකේදි ඉර උඩට එනවා */
    }

    .detail-row {
        flex-direction: column;
        align-items: center;
    }
}

/* Result Box Style */
.gem-result-box {
    display: none; /* මුලින් පේන්නේ නෑ */
    max-width: 700px;
    margin: 0 auto;
    animation: slideUp 0.5s ease;
}

.gem-card-inner {
    display: flex;
    align-items: center;
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border: 1px solid rgba(212, 175, 55, 0.2);
    gap: 30px;
}

.gem-card-inner img {
    width: 180px;
    height: 180px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #D4AF37;
    padding: 5px;
}

.gem-details h3 {
    color: #D4AF37;
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    margin-bottom: 5px;
}

.gem-subtitle {
    color: #999;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 0.9rem;
    margin-bottom: 20px;
}

.detail-row {
    margin-bottom: 15px;
    line-height: 1.6;
    color: #555;
    text-align: left;
}

.detail-row strong {
    color: #333;
    display: block; /* මාතෘකාව උඩ පේළියට */
    margin-bottom: 3px;
}

/* Animation */
@keyframes slideUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Mobile Fix */
@media screen and (max-width: 768px) {
    .gem-card-inner {
        flex-direction: column;
        text-align: center;
    }
    .detail-row {
        text-align: center;
    }
}

/* --- CLEAN LUXURY CONTACT SECTION --- */
.clean-contact-section {
    padding: 100px 0;
    background-color: #fdfdfd; /* ඉතාම ලා අළු/සුදු */
}

.section-header-center {
    text-align: center;
    margin-bottom: 60px;
}

.gold-subtitle {
    color: #D4AF37;
    letter-spacing: 3px;
    font-size: 0.9rem;
    font-weight: 600;
    display: block;
    margin-bottom: 10px;
}

.section-header-center h2 {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    color: #222;
    margin-bottom: 15px;
}

.section-header-center p {
    color: #777;
    font-size: 1.1rem;
}

/* Wrapper Grid */
.contact-clean-wrapper {
    display: flex;
    max-width: 1000px;
    margin: 0 auto;
    gap: 60px;
    align-items: flex-start;
}

/* --- Left Side: Info --- */
.clean-info-box {
    flex: 1;
    padding-top: 20px;
}

.info-item-clean {
    display: flex;
    gap: 20px;
    margin-bottom: 40px;
}

.info-item-clean i {
    font-size: 1.5rem;
    color: #D4AF37;
    margin-top: 5px;
}

.info-item-clean h4 {
    font-family: 'Playfair Display', serif;
    font-size: 1.3rem;
    margin-bottom: 5px;
    color: #222;
}

.info-item-clean p {
    color: #666;
    line-height: 1.6;
    font-size: 0.95rem;
}

.mini-map {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    border: 1px solid #eee;
    margin-top: 20px;
}

/* --- Right Side: Gold Form --- */
.clean-form-box {
    flex: 1.2;
    background: #fff;
    padding: 50px;
    border: 1px solid #D4AF37; /* රත්තරන් පාට සිහින් ඉරක් */
    border-radius: 5px; /* පොඩි රවුම් කිරීමක් */
    box-shadow: 0 10px 40px rgba(212, 175, 55, 0.05); /* රත්තරන් හෙවනැල්ලක් */
    position: relative;
}

/* ද්විත්ව බෝඩර් එකක් (Double Border Effect) */
.clean-form-box::before {
    content: '';
    position: absolute;
    top: 5px; left: 5px; right: 5px; bottom: 5px;
    border: 1px solid rgba(212, 175, 55, 0.3);
    pointer-events: none;
}

.input-clean-group {
    margin-bottom: 25px;
}

.input-clean-group label {
    display: block;
    font-size: 0.9rem;
    color: #222;
    font-weight: 600;
    margin-bottom: 8px;
    letter-spacing: 0.5px;
}

.input-clean-group input, 
.input-clean-group textarea {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #e0e0e0;
    background: #fcfcfc;
    font-family: 'Poppins', sans-serif;
    font-size: 1rem;
    transition: 0.3s;
    outline: none;
}

.input-clean-group input:focus, 
.input-clean-group textarea:focus {
    border-color: #D4AF37;
    background: #fff;
}

/* Button */
.btn-outline-gold {
    width: 100%;
    padding: 15px;
    background: #222; /* කළු පාට බටන් එක */
    color: #D4AF37; /* රත්තරන් අකුරු */
    border: 1px solid #222;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    cursor: pointer;
    transition: 0.3s;
}

.btn-outline-gold:hover {
    background: #D4AF37;
    color: #fff;
    border-color: #D4AF37;
}

/* Mobile Responsive */
@media screen and (max-width: 768px) {
    .contact-clean-wrapper {
        flex-direction: column-reverse; /* Form එක උඩට, Info යටට */
        gap: 40px;
    }
    
    .clean-form-box {
        padding: 30px 20px;
    }
    
    .section-header-center h2 {
        font-size: 2.2rem;
    }
}

/* --- PRODUCT MODAL STYLES --- */

/* 1. පසුබිම Blur කිරීම */
.modal-overlay {
    display: none; /* මුලින් පේන්නේ නෑ */
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.6); /* කළු පාටට හුරු පසුබිම */
    backdrop-filter: blur(8px); /* Screen එක බොඳ කරනවා */
    z-index: 10000; /* හැමදේටම උඩින් */
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.modal-overlay.show {
    display: flex;
    opacity: 1;
}

/* 2. මැද තියෙන Box එක */
.modal-content {
    background: #fff;
    width: 90%;
    max-width: 900px;
    border-radius: 15px;
    position: relative;
    box-shadow: 0 25px 50px rgba(0,0,0,0.3);
    border: 1px solid #D4AF37; /* රත්තරන් බෝඩර් එක */
    transform: scale(0.8);
    transition: transform 0.3s ease;
    overflow: hidden;
}

/* --- PARALLAX PHOTO FIX FOR MOBILE --- */
            .parallax-break {
                background-attachment: scroll !important; /* පින්තූරේ හිර නොවී Scroll වෙන්න හදනවා */
                background-position: center center !important; /* පින්තූරේ මැදට ගන්නවා */
                background-size: cover !important;
                height: 350px !important; /* ෆෝන් එකට ගැලපෙන උස */
                margin: 40px 0 !important; /* වටේ ඉඩ හදනවා */
                display: flex !important;
                align-items: center !important;
            }

            .creative-content h3 {
                font-size: 2rem !important; /* අකුරු ටිකක් පොඩි කරනවා ෆෝන් එකට */
            }
            
            .btn-outline-gold {
                margin-top: 15px !important;
                padding: 10px 25px !important;
            }

.modal-overlay.show .modal-content {
    transform: scale(1);
}

.close-btn {
    position: absolute;
    top: 15px; right: 20px;
    font-size: 2rem;
    color: #333;
    cursor: pointer;
    z-index: 10;
    transition: 0.3s;
}

.close-btn:hover { color: red; }

.modal-body {
    display: flex;
    flex-wrap: wrap;
}

/* 3. පින්තූර කොටස */
.modal-img-box {
    flex: 1;
    min-width: 300px;
    background: #f4f4f4;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    max-height: 500px;
}

/* 4. විස්තර කොටස */
.modal-info-box {
    flex: 1;
    padding: 40px;
    min-width: 300px;
}

.modal-category {
    color: #999;
    text-transform: uppercase;
    font-size: 0.9rem;
    letter-spacing: 1px;
}

#mTitle {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    color: #222;
    margin: 10px 0;
}

.modal-price {
    color: #D4AF37;
    font-size: 1.8rem;
    margin-bottom: 20px;
}

.modal-desc {
    color: #666;
    line-height: 1.6;
    margin-bottom: 25px;
}

/* Specifications List */
.modal-specs {
    list-style: none;
    margin-bottom: 30px;
    padding: 0;
}

.modal-specs li {
    margin-bottom: 10px;
    border-bottom: 1px solid #eee;
    padding-bottom: 5px;
    display: flex;
    justify-content: space-between;
    color: #444;
}

/* WhatsApp Button */
.whatsapp-buy-btn {
    display: block;
    background: #25d366;
    color: white;
    text-align: center;
    padding: 15px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    font-size: 1.1rem;
    transition: 0.3s;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.whatsapp-buy-btn:hover {
    background: #128c7e;
    box-shadow: 0 5px 15px rgba(37, 211, 102, 0.4);
}

/* Mobile Fix */
@media screen and (max-width: 768px) {
    .modal-content {
        height: 90vh; /* ෆෝන් එකේදි Screen එකෙන් 90% ක් */
        overflow-y: auto; /* Scroll කරන්න දෙනවා */
    }
    .modal-body { flex-direction: column; }
    .modal-img-box img { max-height: 250px; }
}

/* --- SOCIAL MEDIA LINKS (BELOW MAP) --- */
.social-connect-box {
    margin-top: 30px;
    text-align: left;
    padding-top: 20px;
    border-top: 1px solid #eee; /* මැප් එකට උඩින් පොඩි ඉරක් */
}

.social-connect-box h4 {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 15px;
}

.social-icons-row {
    display: flex;
    gap: 15px;
}

/* අයිකන් ඩිසයින් එක */
.social-btn {
    width: 45px;
    height: 45px;
    border: 1px solid #D4AF37; /* රත්තරන් බෝඩර් එක */
    border-radius: 50%; /* රවුම් හැඩය */
    display: flex;
    align-items: center;
    justify-content: center;
    color: #D4AF37;
    font-size: 1.2rem;
    transition: all 0.3s ease;
    background: transparent;
}

/* මවුස් එක ගෙනිච්චම (Hover Effect) */
.social-btn:hover {
    background: #D4AF37;
    color: white;
    transform: translateY(-3px); /* උඩට පාවෙනවා */
    box-shadow: 0 5px 15px rgba(212, 175, 55, 0.4); /* Glow එකක් */
}

/* Mobile Fix (ෆෝන් එකේදි මැදට ගන්න) */
@media screen and (max-width: 768px) {
    .social-connect-box {
        text-align: center;
    }
    .social-icons-row {
        justify-content: center;
    }
}

/* --- PRODUCT MODAL STYLES --- */

/* 1. පසුබිම Blur කිරීම */
.modal-overlay {
    display: none; /* මුලින් පේන්නේ නෑ */
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.6); /* කළු පාටට හුරු පසුබිම */
    backdrop-filter: blur(8px); /* Screen එක බොඳ කරනවා */
    z-index: 10000; /* හැමදේටම උඩින් */
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.modal-overlay.show {
    display: flex;
    opacity: 1;
}

/* 2. මැද තියෙන Box එක */
.modal-content {
    background: #fff;
    width: 90%;
    max-width: 900px;
    border-radius: 15px;
    position: relative;
    box-shadow: 0 25px 50px rgba(0,0,0,0.3);
    border: 1px solid #D4AF37; /* රත්තරන් බෝඩර් එක */
    transform: scale(0.8);
    transition: transform 0.3s ease;
    overflow: hidden;
}

.modal-overlay.show .modal-content {
    transform: scale(1);
}

.close-btn {
    position: absolute;
    top: 15px; right: 20px;
    font-size: 2rem;
    color: #333;
    cursor: pointer;
    z-index: 10;
    transition: 0.3s;
}

.close-btn:hover { color: red; }

.modal-body {
    display: flex;
    flex-wrap: wrap;
}

/* 3. පින්තූර කොටස */
.modal-img-box {
    flex: 1;
    min-width: 300px;
    background: #f4f4f4;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    max-height: 500px;
}

/* 4. විස්තර කොටස */
.modal-info-box {
    flex: 1;
    padding: 40px;
    min-width: 300px;
}

.modal-category {
    color: #999;
    text-transform: uppercase;
    font-size: 0.9rem;
    letter-spacing: 1px;
}

#mTitle {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    color: #222;
    margin: 10px 0;
}

.modal-price {
    color: #D4AF37;
    font-size: 1.8rem;
    margin-bottom: 20px;
}

.modal-desc {
    color: #666;
    line-height: 1.6;
    margin-bottom: 25px;
}

/* Specifications List */
.modal-specs {
    list-style: none;
    margin-bottom: 30px;
    padding: 0;
}

.modal-specs li {
    margin-bottom: 10px;
    border-bottom: 1px solid #eee;
    padding-bottom: 5px;
    display: flex;
    justify-content: space-between;
    color: #444;
}

/* WhatsApp Button */
.whatsapp-buy-btn {
    display: block;
    background: #25d366;
    color: white;
    text-align: center;
    padding: 15px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    font-size: 1.1rem;
    transition: 0.3s;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.whatsapp-buy-btn:hover {
    background: #128c7e;
    box-shadow: 0 5px 15px rgba(37, 211, 102, 0.4);
}

/* Mobile Fix */
@media screen and (max-width: 768px) {
    .modal-content {
        height: 90vh; /* ෆෝන් එකේදි Screen එකෙන් 90% ක් */
        overflow-y: auto; /* Scroll කරන්න දෙනවා */
    }
    .modal-body { flex-direction: column; }
    .modal-img-box img { max-height: 250px; }
}

</style>

</head>
<body>

    <div class="cinematic-grain"></div> <div class="cursor-dot" id="cursorDot"></div> <div class="cursor-outline" id="cursorOutline"></div>

    <nav class="navbar">
        <div class="logo">
            <h1>HB <span>GEMS</span></h1>
        </div>
        <ul class="nav-links" id="navLinks">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Legacy</a></li>
            <li><a href="#shop">Collection</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <select id="currencySelect" onchange="changeCurrency()">
            <option value="USD">USD ($)</option>
            <option value="LKR">LKR (Rs)</option>
            <option value="EUR">EUR (€)</option>
            <option value="GBP">GBP (£)</option>
            <option value="AUD">AUD ($)</option>
        </select>

        <div class="burger" onclick="toggleMenu()">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

   <section id="home" class="hero-split">
    <div class="hero-text-box">
        <h2>The Essence of Ceylon</h2>
        <p>Discover the finest, certified gemstones from the heart of Sri Lanka. Elegance, Authenticity, and Purity in every carat.</p>
        <a href="#shop" class="btn-primary">Explore Collection</a>
    </div>
    <div class="hero-image-box">
        <img src="Photos/Background.jpg" alt="Ceylon Sapphire Ring">
    </div>
</section>

<div class="trust-strip">
    <div class="container badges-container">
        <div class="badge-item"><i class="fas fa-gem"></i> GIA Certified</div>
        <div class="badge-item"><i class="fas fa-award"></i> GRS Switzerland</div>
        <div class="badge-item"><i class="fas fa-check-circle"></i> 100% Natural</div>
        <div class="badge-item"><i class="fas fa-shipping-fast"></i> Global Shipping</div>
    </div>
</div>
   <section id="about" class="journey-section">
    <div class="container">
        <h2 class="section-title">The Journey of a Royal Gem</h2>
        <p class="journey-intro">From the deepest soils of Ratnapura to the crowns of royalty, witness the authentic journey of our gemstones.</p>
        
        <div class="journey-row">
    <div class="journey-img" data-aos="fade-right">
        <img src="Photos/Gem10.jpg" alt="Gem Mining Process in Sri Lanka">
        <div class="img-overlay"></div>
    </div>
    <div class="journey-text" data-aos="fade-left">
        <span class="step-number">01</span>
        <h3>Unearthed from Mother Nature</h3>
        <p>Deep beneath the lush rainforests of Sri Lanka lies a hidden treasure. Our gems are ethically mined using traditional methods that respect the environment. Every stone is a natural gift from the Earth, untouched by heat or chemicals.</p>
    </div>
</div>

    <div class="parallax-break design-break">
    <div class="overlay-dark"></div>
    <div class="break-content creative-content">
        <span class="small-tag">BESPOKE CREATIONS</span>
        <h3>"Your Dream, Our Craft"</h3>
        <p>From a rough sketch to a royal masterpiece. We invite you to design your own legacy with our master craftsmen.</p>
        <a href="#contact" class="btn-outline-gold">Start Your Design</a>
    </div>
</div>        

        <div class="journey-row reverse">
            <div class="journey-img" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1573408301185-9146fe634ad0?auto=format&fit=crop&w=800&q=80" alt="Gem Cutting and Polishing">
                <div class="img-overlay"></div>
            </div>
            <div class="journey-text" data-aos="fade-right">
                <span class="step-number">02</span>
                <h3>Master Craftsmanship</h3>
                <p>A rough stone is just a stone until it meets the hands of a master cutter. Our artisans in Ceylon use generations of knowledge to facet each gem, unlocking its inner fire and brilliance without losing its natural carat weight.</p>
            </div>
        </div>

        <div class="journey-row">
            <div class="journey-img" data-aos="fade-right">
                <img src="Photos/Gem3.jpg" alt="Final Luxury Jewelry">
                <div class="img-overlay"></div>
            </div>
            <div class="journey-text" data-aos="fade-left">
                <span class="step-number">03</span>
                <h3>Global Luxury</h3>
                <p>The final masterpiece. Certified, valued, and ready to be worn. Whether for an engagement ring or an investment piece, HB Gems connects you directly to the source, eliminating middlemen for the best value.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <h2 class="section-title">The Legend of Ceylon Sapphires</h2>
        <div class="intro-content">
            <p style="text-align: center; max-width: 800px; margin: 0 auto 50px;">
                For centuries, Sri Lanka (formerly Ceylon) has been renowned as the "Island of Gems" (Ratna-Dweepa). 
                From Royal crowns to modern jewelry, Ceylon Sapphires are cherished worldwide for their unique color and clarity. 
                At <strong>HB Gems</strong>, we bring this royal heritage directly to your hands, ensuring every stone tells a story of authenticity.
            </p>
        </div>
        
        <div class="features-grid">
            <div class="feature-box">
                <i class="fas fa-certificate"></i>
                <h3>Certified Authenticity</h3>
                <p>Every gem comes with a recognized lab certificate.</p>
            </div>
            
            <div class="feature-box">
                <i class="fas fa-gem"></i>
                <h3>Natural Stones</h3>
                <p>100% Earth-mined, natural gemstones.</p>
            </div>
            
            <div class="feature-box">
                <i class="fas fa-hand-holding-usd"></i>
                <h3>Fair Pricing</h3>
                <p>Direct from the source prices.</p>
            </div>
        </div>
    </div>
</section>


    <section class="birthstone-section">
    <div class="container">
        <h2 class="section-title">Find Your Lucky Birthstone</h2>
        <p style="text-align: center; margin-bottom: 30px; color: #666;">Select your birth month to reveal the hidden powers of your gem.</p>
        
        <div class="month-grid">
            <button class="month-btn" onclick="showGem('jan')">JAN</button>
            <button class="month-btn" onclick="showGem('feb')">FEB</button>
            <button class="month-btn" onclick="showGem('mar')">MAR</button>
            <button class="month-btn" onclick="showGem('apr')">APR</button>
            <button class="month-btn" onclick="showGem('may')">MAY</button>
            <button class="month-btn" onclick="showGem('jun')">JUN</button>
            <button class="month-btn" onclick="showGem('jul')">JUL</button>
            <button class="month-btn" onclick="showGem('aug')">AUG</button>
            <button class="month-btn" onclick="showGem('sep')">SEP</button>
            <button class="month-btn" onclick="showGem('oct')">OCT</button>
            <button class="month-btn" onclick="showGem('nov')">NOV</button>
            <button class="month-btn" onclick="showGem('dec')">DEC</button>
        </div>

        <div id="gemResult" class="gem-result-box">
            <div class="gem-card-inner">
                <img id="gemImg" src="" alt="Gemstone">
                <div class="gem-details">
                    <h3 id="gemName">Gem Name</h3>
                    <p class="gem-subtitle" id="gemMonth">Month</p>
                    
                    <div class="detail-row">
    <i class="fas fa-star"></i> <div>
        <strong>Meaning:</strong>
        <span id="gemMeaning">...</span>
    </div>
</div>

<div class="detail-row">
    <i class="fas fa-magic"></i> <div>
        <strong>Benefits:</strong>
        <span id="gemBenefits">...</span>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</section>

   <section id="shop" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Exclusive Collection</h2>
            <div class="product-grid">
                
                <div class="product-card">
        <div class="img-container">
            <img src="Photos/Gem7.jpg" alt="Blue Sapphire">
            <span class="badge">New</span>
        </div>
        <div class="product-info">
            <h3>Royal Blue Sapphire</h3>
            <p class="category">Category: Corundum</p>
            <h4 class="price">$1,200</h4>
            
            <button class="btn-secondary" onclick="openModal('gem1')">View Details</button>
        </div>
    </div>

    <div class="product-card">
        <div class="img-container">
            <img src="Photos/Gem12.jpg" alt="Pink Sapphire">
        </div>
        <div class="product-info">
            <h3>Vivid Pink Sapphire</h3>
            <p class="category">Category: Corundum</p>
            <h4 class="price">$850</h4>
            
            <button class="btn-secondary" onclick="openModal('gem2')">View Details</button>
        </div>
    </div>

    <div class="product-card">
        <div class="img-container">
            <img src="Photos/Gem13.jpg" alt="Ruby">
        </div>
        <div class="product-info">
            <h3>Pigeon Blood Ruby</h3>
            <p class="category">Category: Corundum</p>
            <h4 class="price">$2,500</h4>
            
            <button class="btn-secondary" onclick="openModal('gem3')">View Details</button>
        </div>
    </div>
                
            </div>
        </div>
    </section>

  <section id="reviews" style="position: relative; padding: 100px 0; overflow: hidden; background: #050a14;">
    
    <div style="position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(11, 28, 60, 1) 0%, rgba(5, 10, 20, 1) 80%); z-index: 1;"></div>
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 600px; height: 600px; background: radial-gradient(circle, rgba(212, 175, 55, 0.15) 0%, transparent 70%); z-index: 2; pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 3; text-align: center;">
        <h2 class="section-title" style="color: #D4AF37; font-family: 'Playfair Display', serif; font-size: 3rem; margin-bottom: 10px; text-shadow: 0 5px 15px rgba(0,0,0,0.5);">Trusted by Connoisseurs</h2>
        <p style="color: #8892b0; margin-bottom: 50px; font-size: 1.1rem; letter-spacing: 1px;">Hear from our distinguished clients across the globe.</p>

        <div class="testimonial-carousel" style="max-width: 900px; margin: 0 auto; overflow: hidden; position: relative; padding: 20px;">
            
            <div id="reviewTrack" style="display: flex; transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);">
                
                <div class="review-card" style="min-width: 100%; box-sizing: border-box; padding: 15px;">
                    <div style="background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(15px); border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 20px; padding: 50px; box-shadow: 0 10px 40px rgba(0,0,0,0.4), 0 0 20px rgba(212, 175, 55, 0.05); position: relative;">
                        
                        <i class="fas fa-quote-right" style="position: absolute; top: 20px; right: 30px; font-size: 4rem; color: rgba(255, 255, 255, 0.03);"></i>

                        <div style="color: #ffd700; font-size: 1.4rem; letter-spacing: 5px; margin-bottom: 25px; text-shadow: 0 0 10px rgba(255, 215, 0, 0.6);">★★★★★</div>
                        
                        <p style="font-family: 'Playfair Display', serif; font-style: italic; color: #e6e6e6; font-size: 1.3rem; line-height: 1.8; margin-bottom: 30px;">"I was hesitant to buy gemstones online, but HB Gems provided GIA certificates and video consultations. The Royal Blue Sapphire I received is breathtaking."</p>
                        
                        <div style="display: flex; align-items: center; justify-content: center; gap: 20px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; width: 80%; margin: 0 auto;">
                            <img src="Photos/user1.jpg" style="width: 60px; height: 60px; border-radius: 50%; border: 2px solid #D4AF37; padding: 3px; object-fit: cover;">
                            <div style="text-align: left;">
                                <h4 style="color: #D4AF37; margin: 0; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px;">James Anderson</h4>
                                <span style="font-size: 0.85rem; color: #8892b0;">London, UK</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="review-card" style="min-width: 100%; box-sizing: border-box; padding: 15px;">
                    <div style="background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(15px); border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 20px; padding: 50px; box-shadow: 0 10px 40px rgba(0,0,0,0.4), 0 0 20px rgba(212, 175, 55, 0.05); position: relative;">
                         <i class="fas fa-quote-right" style="position: absolute; top: 20px; right: 30px; font-size: 4rem; color: rgba(255, 255, 255, 0.03);"></i>
                        <div style="color: #ffd700; font-size: 1.4rem; letter-spacing: 5px; margin-bottom: 25px; text-shadow: 0 0 10px rgba(255, 215, 0, 0.6);">★★★★★</div>
                        <p style="font-family: 'Playfair Display', serif; font-style: italic; color: #e6e6e6; font-size: 1.3rem; line-height: 1.8; margin-bottom: 30px;">"Excellent service for custom jewelry. They sourced a rare Padparadscha sapphire for my engagement ring design. The final piece exceeded all expectations."</p>
                        <div style="display: flex; align-items: center; justify-content: center; gap: 20px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; width: 80%; margin: 0 auto;">
                            <img src="Photos/user2.jpg" style="width: 60px; height: 60px; border-radius: 50%; border: 2px solid #D4AF37; padding: 3px; object-fit: cover;">
                            <div style="text-align: left;">
                                <h4 style="color: #D4AF37; margin: 0; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px;">Sarah Chen</h4>
                                <span style="font-size: 0.85rem; color: #8892b0;">Singapore</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="review-card" style="min-width: 100%; box-sizing: border-box; padding: 15px;">
                    <div style="background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(15px); border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 20px; padding: 50px; box-shadow: 0 10px 40px rgba(0,0,0,0.4), 0 0 20px rgba(212, 175, 55, 0.05); position: relative;">
                         <i class="fas fa-quote-right" style="position: absolute; top: 20px; right: 30px; font-size: 4rem; color: rgba(255, 255, 255, 0.03);"></i>
                        <div style="color: #ffd700; font-size: 1.4rem; letter-spacing: 5px; margin-bottom: 25px; text-shadow: 0 0 10px rgba(255, 215, 0, 0.6);">★★★★★</div>
                        <p style="font-family: 'Playfair Display', serif; font-style: italic; color: #e6e6e6; font-size: 1.3rem; line-height: 1.8; margin-bottom: 30px;">"A trustworthy source for investment-grade rubies. The clarity and color of the Pigeon Blood Ruby I purchased were exactly as described."</p>
                        <div style="display: flex; align-items: center; justify-content: center; gap: 20px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; width: 80%; margin: 0 auto;">
                            <img src="Photos/user3.jpg" style="width: 60px; height: 60px; border-radius: 50%; border: 2px solid #D4AF37; padding: 3px; object-fit: cover;">
                            <div style="text-align: left;">
                                <h4 style="color: #D4AF37; margin: 0; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px;">Dr. Al-Fayed</h4>
                                <span style="font-size: 0.85rem; color: #8892b0;">Dubai, UAE</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button id="prevBtn" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%); background: transparent; color: rgba(255,255,255,0.3); border: none; font-size: 3rem; cursor: pointer; z-index: 10; transition: 0.3s;">&#10094;</button>
            <button id="nextBtn" style="position: absolute; top: 50%; right: 0; transform: translateY(-50%); background: transparent; color: rgba(255,255,255,0.3); border: none; font-size: 3rem; cursor: pointer; z-index: 10; transition: 0.3s;">&#10095;</button>

        </div>
    </div>

    <div id="productModal" class="modal-overlay">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        
        <div class="modal-body">
            <div class="modal-img-box">
                <img id="mImg" src="" alt="Gem Detail">
            </div>
            
            <div class="modal-info-box">
                <span class="modal-category" id="mCategory">Category</span>
                <h2 id="mTitle">Gem Name</h2>
                <h3 class="modal-price" id="mPrice">$0.00</h3>
                
                <p id="mDesc" class="modal-desc">Description goes here...</p>
                
                <ul class="modal-specs">
                    <li><strong>Weight:</strong> <span id="mWeight">-</span></li>
                    <li><strong>Color:</strong> <span id="mColor">-</span></li>
                    <li><strong>Clarity:</strong> <span id="mClarity">-</span></li>
                    <li><strong>Certificate:</strong> <span id="mCert">-</span></li>
                </ul>

                <a id="mWhatsappBtn" href="#" target="_blank" class="whatsapp-buy-btn">
                    <i class="fab fa-whatsapp"></i> Buy via WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.getElementById('reviewTrack');
            const cards = document.querySelectorAll('.review-card');
            const nextBtn = document.getElementById('nextBtn');
            const prevBtn = document.getElementById('prevBtn');
            
            // Button Hover Effects
            [nextBtn, prevBtn].forEach(btn => {
                btn.addEventListener('mouseenter', () => btn.style.color = "#D4AF37");
                btn.addEventListener('mouseleave', () => btn.style.color = "rgba(255,255,255,0.3)");
            });

            let currentIndex = 0;
            const totalSlides = cards.length;

            function updateSlide() {
                track.style.transform = `translateX(-${currentIndex * 100}%)`;
            }

            nextBtn.addEventListener('click', () => {
                currentIndex++;
                if (currentIndex >= totalSlides) currentIndex = 0;
                updateSlide();
            });

            prevBtn.addEventListener('click', () => {
                currentIndex--;
                if (currentIndex < 0) currentIndex = totalSlides - 1;
                updateSlide();
            });

            setInterval(() => {
                currentIndex++;
                if (currentIndex >= totalSlides) currentIndex = 0;
                updateSlide();
            }, 6000);
        });

        // --- 1. BIRTHSTONE LOGIC ---
const gems = {
    'jan': { name: 'Garnet', desc: 'Symbol of protection and strength.', img: 'Photos/Gem13.jpg' }, // රූබි ෆොටෝ එකම දැම්මා තාවකාලිකව
    'sep': { name: 'Blue Sapphire', desc: 'The stone of wisdom and royalty.', img: 'Photos/Gem7.jpg' },
    'jul': { name: 'Ruby', desc: 'Represents love, passion, and energy.', img: 'Photos/Gem13.jpg' }
};

function showGem(month) {
    const data = gems[month];
    const resultBox = document.getElementById('gemResult');
    
    // Update Content
    document.getElementById('gemName').innerText = data.name;
    document.getElementById('gemDesc').innerText = data.desc;
    document.getElementById('gemImg').src = data.img;
    
    // Show Animation
    resultBox.classList.remove('show');
    void resultBox.offsetWidth; // Trigger Reflow for animation reset
    resultBox.classList.add('show');
}

// --- 2. FAQ ACCORDION LOGIC ---
function toggleFaq(element) {
    // අනිත් ඔක්කොම වහනවා (Optional)
    const allFaqs = document.querySelectorAll('.faq-item');
    allFaqs.forEach(item => {
        if (item !== element) {
            item.classList.remove('active');
        }
    });

    // ක්ලික් කරපු එක අරිනවා/වහනවා
    element.classList.toggle('active');
}

        // --- ALL 12 BIRTHSTONES DATA ---
const birthstones = {
    'jan': { 
        name: 'Garnet', 
        month: 'January',
        meaning: 'Symbol of protection and lasting friendship.',
        benefits: 'Bring consistency, endurance, and creativity to your life.',
        img: 'Photos/Gem13.jpg' // රතු මැණිකක් දාන්න
    },
    'feb': { 
        name: 'Amethyst', 
        month: 'February',
        meaning: 'Associated with peace, courage, and stability.',
        benefits: 'Helps relieve stress and anxiety.',
        img: 'Photos/Gem12.jpg' // දම් පාට එකක්
    },
    'mar': { 
        name: 'Aquamarine', 
        month: 'March',
        meaning: 'The sailor’s gem, ensuring safe voyages.',
        benefits: 'Promotes mental clarity and fearlessness.',
        img: 'Photos/Gem7.jpg' // ලා නිල්
    },
    'apr': { 
        name: 'Diamond / White Sapphire', 
        month: 'April',
        meaning: 'Symbol of eternal love and invincibility.',
        benefits: 'Brings clarity, balance, and abundance.',
        img: 'Photos/Gem10.jpg' // සුදු පාට
    },
    'may': { 
        name: 'Emerald', 
        month: 'May',
        meaning: 'A symbol of rebirth and love.',
        benefits: 'Grants foresight, good fortune, and youth.',
        img: 'Photos/Gem11.jpg' // කොළ පාට
    },
    'jun': { 
        name: 'Alexandrite / Moonstone', 
        month: 'June',
        meaning: 'Stones of luck and balance.',
        benefits: 'Enhances intuition and brings good fortune.',
        img: 'Photos/Gem12.jpg'
    },
    'jul': { 
        name: 'Ruby', 
        month: 'July',
        meaning: 'The King of Gems, representing passion.',
        benefits: 'Protects against misfortune and brings success.',
        img: 'Photos/Gem13.jpg' // හොඳ රතු මැණිකක්
    },
    'aug': { 
        name: 'Peridot / Spinel', 
        month: 'August',
        meaning: 'Symbol of strength and protection.',
        benefits: 'Wards off evil and depression.',
        img: 'Photos/Gem3.jpg'
    },
    'sep': { 
        name: 'Blue Sapphire', 
        month: 'September',
        meaning: 'The stone of wisdom, royalty and divine favor.',
        benefits: 'Focuses the mind and encourages self-discipline.',
        img: 'Photos/Gem7.jpg' // නිල් මැණික (Main one)
    },
    'oct': { 
        name: 'Tourmaline / Opal', 
        month: 'October',
        meaning: 'Symbol of hope and creativity.',
        benefits: 'Enhances artistic expression.',
        img: 'Photos/Gem12.jpg'
    },
    'nov': { 
        name: 'Topaz / Citrine', 
        month: 'November',
        meaning: 'Stones of joy and healing.',
        benefits: 'Attracts wealth and success.',
        img: 'Photos/Gem2.jpg' // කහ පාට
    },
    'dec': { 
        name: 'Blue Zircon / Turquoise', 
        month: 'December',
        meaning: 'Symbol of friendship and fortune.',
        benefits: 'Brings wisdom and health.',
        img: 'Photos/Gem7.jpg'
    }
};

function showGem(key) {
    const data = birthstones[key];
    const resultBox = document.getElementById('gemResult');
    
    // 1. Update Texts
    document.getElementById('gemName').innerText = data.name;
    document.getElementById('gemMonth').innerText = data.month;
    document.getElementById('gemMeaning').innerText = data.meaning;
    document.getElementById('gemBenefits').innerText = data.benefits;
    
    // 2. Update Image
    document.getElementById('gemImg').src = data.img;

    // 3. Highlight Button (පාට වෙනස් කිරීම)
    const allBtns = document.querySelectorAll('.month-btn');
    allBtns.forEach(btn => btn.classList.remove('active-month'));
    event.target.classList.add('active-month');

    // 4. Show Result
    resultBox.style.display = 'block';
}

/* --- WHATSAPP FORM SUBMISSION --- */
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('whatsappForm');

    if(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // පිටුව Refresh වීම නවත්වනවා

            // 1. ඔයාගේ ෆෝන් නම්බර් එක මෙතනට දාන්න (උදා: 94771234567)
            const phoneNumber = "94713520045"; 

            // 2. ෆෝම් එකේ දත්ත ලබා ගැනීම
            const name = document.getElementById('waName').value;
            const phone = document.getElementById('waPhone').value;
            const email = document.getElementById('waEmail').value;
            const message = document.getElementById('waMessage').value;

            // 3. WhatsApp මැසේජ් එක හැඩගැන්වීම
            const text = `*✨ New Private Consultation Request ✨*%0A%0A` +
                         `👤 *Name:* ${name}%0A` +
                         `📞 *Phone:* ${phone}%0A` +
                         `📧 *Email:* ${email}%0A%0A` +
                         `💎 *Requirement:*%0A${message}`;

            // 4. WhatsApp වෙත යැවීම
            const url = `https://wa.me/${+94713520045}?text=${text}`;
            
            // අලුත් Tab එකක Open කිරීම
            window.open(url, '_blank').focus();
        });
    }
});

/* --- CINEMATIC CURSOR LOGIC --- */
document.addEventListener('DOMContentLoaded', function() {
    const cursorDot = document.getElementById('cursorDot');
    const cursorOutline = document.getElementById('cursorOutline');

    // මවුස් එක යන තැනට රවුම ගෙනියනවා
    window.addEventListener('mousemove', function(e) {
        const posX = e.clientX;
        const posY = e.clientY;

        // තිත ඉක්මනට එනවා
        cursorDot.style.left = `${posX}px`;
        cursorDot.style.top = `${posY}px`;

        // වටේ රවුම පොඩි පරක්කු වීමකින් එනවා (Cinematic delay)
        cursorOutline.animate({
            left: `${posX}px`,
            top: `${posY}px`
        }, { duration: 500, fill: "forwards" });
    });

    // ලින්ක් හෝ බටන් උඩට ගියාම රවුම ලොකු කරනවා
    const clickables = document.querySelectorAll('a, button, .product-card, input, textarea');
    
    clickables.forEach(el => {
        el.addEventListener('mouseenter', () => {
            document.body.classList.add('hovering');
        });
        el.addEventListener('mouseleave', () => {
            document.body.classList.remove('hovering');
        });
    });
});

/* --- PRODUCT MODAL LOGIC & DATA --- */

// 1. මැණික් වල විස්තර මෙතන වෙනස් කරන්න
const gemData = {
    'gem1': {
        title: "Royal Blue Sapphire",
        category: "Corundum Family",
        price: "$1,200",
        img: "Photos/Gem7.jpg",
        desc: "A stunning Royal Blue Sapphire from Ratnapura. Known for its deep velvety blue hue and excellent clarity. Ideal for a luxury engagement ring.",
        weight: "2.55 Carats",
        color: "Royal Blue",
        clarity: "VVS1 (Eye Clean)",
        cert: "GIA Certified"
    },
    'gem2': {
        title: "Vivid Pink Sapphire",
        category: "Corundum Family",
        price: "$850",
        img: "Photos/Gem12.jpg",
        desc: "A vibrant hot pink sapphire that radiates energy. This stone has a natural sparkle and has not undergone any heat treatment.",
        weight: "1.80 Carats",
        color: "Vivid Pink",
        clarity: "VS1",
        cert: "GRS Certified"
    },
    'gem3': {
        title: "Pigeon Blood Ruby",
        category: "Corundum Family",
        price: "$2,500",
        img: "Photos/Gem13.jpg",
        desc: "The rarest of all rubies. This Pigeon Blood Ruby features an intense red glow and exceptional transparency. An investment grade stone.",
        weight: "3.10 Carats",
        color: "Pigeon Blood Red",
        clarity: "VVS2",
        cert: "GIA & GRS"
    }
};

// 2. Modal එක Open කරන Function එක
function openModal(gemId) {
    const modal = document.getElementById('productModal');
    const data = gemData[gemId];
    const myPhone = "94771234567"; // ⚠️ ඔයාගේ නම්බර් එක මෙතනට දාන්න

    if(data) {
        // Data පුරවනවා
        document.getElementById('mImg').src = data.img;
        document.getElementById('mCategory').innerText = data.category;
        document.getElementById('mTitle').innerText = data.title;
        document.getElementById('mPrice').innerText = data.price;
        document.getElementById('mDesc').innerText = data.desc;
        
        // Specs පුරවනවා
        document.getElementById('mWeight').innerText = data.weight;
        document.getElementById('mColor').innerText = data.color;
        document.getElementById('mClarity').innerText = data.clarity;
        document.getElementById('mCert').innerText = data.cert;

        // WhatsApp Link එක හදනවා (මැසේජ් එකත් එක්කම)
        const message = `Hello, I am interested in buying the *${data.title}* listed for ${data.price}. Please provide more details.`;
        const waLink = `https://wa.me/${94713520045}?text=${encodeURIComponent(message)}`;
        document.getElementById('mWhatsappBtn').href = waLink;

        // Modal එක පෙන්නනවා
        modal.classList.add('show');
        document.body.style.overflow = 'hidden'; // පිටුපස Scroll වෙන එක නවත්වනවා
    }
}

// 3. Modal එක Close කරන Function එක
function closeModal() {
    const modal = document.getElementById('productModal');
    modal.classList.remove('show');
    document.body.style.overflow = 'auto'; // ආයේ Scroll කරන්න දෙනවා
}

// 4. Modal එකේ එළිය Click කළාම වැහෙන්න හදනවා
window.onclick = function(event) {
    const modal = document.getElementById('productModal');
    if (event.target == modal) {
        closeModal();
    }
}
    </script>
</section>


<section class="faq-section">
    <div class="container faq-container">
        <h2 class="section-title">Frequently Asked Questions</h2>
        
        <div class="faq-item" onclick="toggleFaq(this)">
            <div class="faq-question">
                Do you provide authenticity certificates?
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-answer">
                Yes, every gemstone comes with a certificate from recognized labs like GIA, GRS, or EGL.
            </div>
        </div>

        <div class="faq-item" onclick="toggleFaq(this)">
            <div class="faq-question">
                Do you ship internationally?
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-answer">
                Absolutely. We use secure, insured shipping via FedEx/DHL to deliver worldwide safely.
            </div>
        </div>

        <div class="faq-item" onclick="toggleFaq(this)">
            <div class="faq-question">
                Can I customize a jewelry design?
                <i class="fas fa-plus"></i>
            </div>
            <div class="faq-answer">
                Yes! Our "Bespoke Creations" service allows you to design your own ring or necklace with our master craftsmen.
            </div>
        </div>
    </div>
</section>

 <section id="contact" class="clean-contact-section">
    <div class="container">
        
        <div class="section-header-center">
            <span class="gold-subtitle">GET IN TOUCH</span>
            <h2 class="section-title">Private Consultation</h2>
            <p>We invite you to discuss your requirements with our gemologists.</p>
        </div>

        <div class="contact-clean-wrapper">
            
           <div class="clean-info-box">
    
    <div class="info-item-clean">
        <i class="fas fa-map-marker-alt"></i>
        <div>
            <h4>Visit Us</h4>
            <p>No. 235/10, Olaboduwa,<br>Gonapola, Sri Lanka.</p>
        </div>
    </div>

    <div class="info-item-clean">
        <i class="fas fa-phone-alt"></i>
        <div>
            <h4>Call Us</h4>
            <p>+94 71 352 0045</p>
        </div>
    </div>

    <div class="info-item-clean">
        <i class="fas fa-envelope"></i>
        <div>
            <h4>Email</h4>
            <p>sales@hbgems.com</p>
        </div>
    </div>
    
    <div class="mini-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63406.43577317228!2d80.3643792!3d6.6789475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3eb6185671549%3A0xc31244365775f0a3!2sRatnapura!5e0!3m2!1sen!2slk!4v1700000000000!5m2!1sen!2slk" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="social-connect-box">
        <h4>Follow Our Journey</h4>
        <div class="social-icons-row">
            <a href="https://facebook.com" target="_blank" class="social-btn fb"><i class="fab fa-facebook-f"></i></a>
            <a href="https://instagram.com" target="_blank" class="social-btn ig"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/94713520045" target="_blank" class="social-btn wa"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
    </div>
            <div class="clean-form-box">
    <form id="whatsappForm">
        <div class="input-clean-group">
            <label>Your Name</label>
            <input type="text" id="waName" placeholder="e.g. Mr. Perera" required>
        </div>

        <div class="input-clean-group">
            <label>Phone Number</label>
            <input type="text" id="waPhone" placeholder="+94 ..." required>
        </div>

        <div class="input-clean-group">
            <label>Email Address</label>
            <input type="email" id="waEmail" placeholder="name@email.com">
        </div>

        <div class="input-clean-group">
            <label>Your Message / Requirement</label>
            <textarea id="waMessage" rows="4" placeholder="Tell us about the gem you are looking for..." required></textarea>
        </div>

        <button type="submit" class="btn-outline-gold full-width" style="display: flex; align-items: center; justify-content: center; gap: 10px;">
            <i class="fab fa-whatsapp" style="font-size: 1.2rem;"></i> REQUEST PRIVATE CONSULTATION
        </button>
    </form>
</div>
    </div>
</section>

    <footer>
        <p>&copy; 2026 HB Gems. All Rights Reserved. | Crafted with Elegance.</p>
    </footer>

    <a href="https://wa.me/94713520045" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

    <script src="script.js"></script>
</body>
</html>