// Script per PAK ZONE

// Funzione per aprire Google Maps con indicazioni
function openDirections() {
    const address = "Corso Carlo Alberto, 68, 60127 Ancona AN";
    const encodedAddress = encodeURIComponent(address);
    const mapsUrl = `https://www.google.com/maps/dir/?api=1&destination=${encodedAddress}`;
    window.open(mapsUrl, '_blank');
}

// Aggiornamento dinamico delle recensioni (simulato)
function updateReviewCount() {
    // In un'implementazione reale, questo farebbe una chiamata API a Google Places
    // Per ora simuliamo un leggero incremento casuale
    const currentCount = 5040;
    const variation = Math.floor(Math.random() * 10) - 5; // -5 a +5
    const newCount = Math.max(5000, currentCount + variation);
    
    document.getElementById('review-count').textContent = newCount.toLocaleString();
    document.getElementById('review-count-2').textContent = newCount.toLocaleString();
}

// Animazioni scroll
function animateOnScroll() {
    const elements = document.querySelectorAll('.card, .service-item');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });
    
    elements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease';
        observer.observe(el);
    });
}

// Orari di apertura dinamici
function updateBusinessHours() {
    const now = new Date();
    const currentDay = now.getDay(); // 0 = Domenica, 1 = Lunedì, etc.
    const currentHour = now.getHours();
    const currentMinute = now.getMinutes();
    const currentTime = currentHour * 60 + currentMinute; // minuti dall'inizio del giorno
    
    const openTime = 8 * 60 + 30; // 8:30
    const closeTime = 20 * 60; // 20:00
    
    let statusText = '';
    let statusClass = '';
    
    if (currentDay === 0) { // Domenica
        statusText = 'Chiuso oggi';
        statusClass = 'closed';
    } else if (currentTime >= openTime && currentTime < closeTime) {
        statusText = 'Aperto ora';
        statusClass = 'open';
    } else if (currentTime < openTime) {
        const minutesToOpen = openTime - currentTime;
        const hoursToOpen = Math.floor(minutesToOpen / 60);
        const minsToOpen = minutesToOpen % 60;
        statusText = `Apre alle 8:30 (tra ${hoursToOpen}h ${minsToOpen}m)`;
        statusClass = 'closed';
    } else {
        statusText = 'Chiuso - Apre domani alle 8:30';
        statusClass = 'closed';
    }
    
    // Aggiungi indicatore di stato se non esiste
    let statusIndicator = document.querySelector('.status-indicator');
    if (!statusIndicator) {
        statusIndicator = document.createElement('div');
        statusIndicator.className = 'status-indicator';
        const hoursCard = document.querySelector('.hours');
        if (hoursCard) {
            hoursCard.appendChild(statusIndicator);
        }
    }
    
    statusIndicator.textContent = statusText;
    statusIndicator.className = `status-indicator ${statusClass}`;
}

// Caricamento mappa Google Maps migliorato
function initMap() {
    // Aggiorna l'URL della mappa con coordinate più precise se disponibili
    const mapFrame = document.querySelector('iframe');
    if (mapFrame) {
        // Coordinate approssimative per Corso Carlo Alberto, Ancona
        const lat = 43.6155;
        const lng = 13.5186;
        const newSrc = `https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2890.123!2d${lng}!3d${lat}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d7fb89c5a8b1b%3A0x123456789!2sCorso%20Carlo%20Alberto%2C%2068%2C%2060127%20Ancona%20AN!5e0!3m2!1sit!2sit!4v${Date.now()}`;
        mapFrame.src = newSrc;
    }
}

// Smooth scroll per i link interni
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Gestione click sul telefono per dispositivi mobili
function initPhoneClick() {
    const phoneButtons = document.querySelectorAll('a[href^="tel:"]');
    phoneButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Analytics tracking se necessario
            console.log('Phone call initiated');
        });
    });
}

// Inizializzazione quando il DOM è caricato
document.addEventListener('DOMContentLoaded', function() {
    // Inizializza tutte le funzioni
    animateOnScroll();
    updateBusinessHours();
    initMap();
    initSmoothScroll();
    initPhoneClick();
    
    // Aggiorna le recensioni ogni 30 minuti (solo per demo)
    setInterval(updateReviewCount, 30 * 60 * 1000);
    
    // Aggiorna lo stato degli orari ogni minuto
    setInterval(updateBusinessHours, 60 * 1000);
});

// Gestione errori per le immagini
document.addEventListener('error', function(e) {
    if (e.target.tagName === 'IMG') {
        e.target.style.display = 'none';
    }
}, true);

// PWA Service Worker registration (opzionale)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('/sw.js')
            .then(function(registration) {
                console.log('SW registered: ', registration);
            })
            .catch(function(registrationError) {
                console.log('SW registration failed: ', registrationError);
            });
    });
}

// Aggiungi CSS per gli indicatori di stato
const statusStyles = `
    .status-indicator {
        text-align: center;
        padding: 10px;
        border-radius: 20px;
        font-weight: bold;
        margin-top: 15px;
        font-size: 0.9rem;
    }
    
    .status-indicator.open {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    
    .status-indicator.closed {
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
`;

// Inserisci gli stili nel documento
const styleSheet = document.createElement('style');
styleSheet.textContent = statusStyles;
document.head.appendChild(styleSheet);
