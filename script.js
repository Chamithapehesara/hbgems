const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click', () => {
        // Toggle Nav
        nav.classList.toggle('nav-active');
        
        // Animate Links (ලින්ක්ස් එකින් එක එන විදිහ)
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
            }
        });

        // Burger Animation (ඉරි 3 කතිරයක් වීම)
        burger.classList.toggle('toggle');
    });
}

navSlide();


// Scroll Animation using Intersection Observer
const observerOptions = {
    threshold: 0.2
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
            observer.unobserve(entry.target); // ඇනිමේෂන් එක එක පාරයි වෙන්නේ
        }
    });
}, observerOptions);

// Select elements to animate
const journeyItems = document.querySelectorAll('.journey-img, .journey-text');

// Set initial styles for animation
journeyItems.forEach(item => {
    item.style.opacity = "0";
    item.style.transform = "translateY(50px)"; // පහළ ඉඳන් උඩට එන්න
    item.style.transition = "all 0.8s ease-out";
    observer.observe(item);
});

// --- 1. Currency Converter Logic ---
const exchangeRates = {
    'USD': { rate: 1, symbol: '$' },
    'LKR': { rate: 300, symbol: 'Rs ' }, // අද රේට් එක (ආසන්න වශයෙන්)
    'EUR': { rate: 0.92, symbol: '€' },
    'GBP': { rate: 0.78, symbol: '£' },
    'AUD': { rate: 1.5, symbol: 'A$ ' }
};

function changeCurrency() {
    const currency = document.getElementById('currencySelect').value;
    const selectedData = exchangeRates[currency];
    const prices = document.querySelectorAll('.price');

    prices.forEach(price => {
        // HTML එකේ තියෙන data-price="1200" කියන එක ගන්නවා
        const basePrice = parseFloat(price.getAttribute('data-price'));
        
        // අලුත් ගාණ හදනවා
        const newPrice = Math.floor(basePrice * selectedData.rate);
        
        // කොමා දාලා ලස්සනට පෙන්නනවා (උදා: 360,000)
        price.innerText = selectedData.symbol + newPrice.toLocaleString();
    });
}

// --- 2. Scroll Slider Logic ---
function scrollCollection(direction) {
    const container = document.getElementById('productSlider');
    const scrollAmount = 330; // එක පාරකට කොච්චර යනවද (Card Width + Gap)

    if (direction === 'left') {
        container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    } else {
        container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
}

// --- Modern Luxury Testimonial Slider Logic ---
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('reviewTrack');
    const slides = Array.from(track.children);
    const nextBtn = document.getElementById('nextReview');
    const prevBtn = document.getElementById('prevReview');
    const dotsNav = document.getElementById('reviewDots');

    let currentIndex = 0;

    // 1. Setup Slides Position & Dots
    slides.forEach((slide, index) => {
        // Create dots automatically
        const dot = document.createElement('button');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dotsNav.appendChild(dot);
        
        dot.addEventListener('click', () => {
            moveToSlide(index);
        });
    });

    const dots = Array.from(dotsNav.children);

    // Function to move slide
    const moveToSlide = (targetIndex) => {
        // Loop back logic
        if (targetIndex < 0) targetIndex = slides.length - 1;
        if (targetIndex >= slides.length) targetIndex = 0;

        const amountToMove = targetIndex * 100;
        track.style.transform = `translateX(-${amountToMove}%)`;
        currentIndex = targetIndex;

        // Update active dot
        dots.forEach(d => d.classList.remove('active'));
        dots[targetIndex].classList.add('active');
    }

    // Button Event Listeners
    nextBtn.addEventListener('click', () => {
        moveToSlide(currentIndex + 1);
    });

    prevBtn.addEventListener('click', () => {
        moveToSlide(currentIndex - 1);
    });

    // Optional: Auto Slide every 5 seconds
    setInterval(() => {
       moveToSlide(currentIndex + 1);
    }, 5000);
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