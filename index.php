<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAK ZONE - Riparazioni Smartphone e Servizi - Ancona</title>
    <meta name="description" content="PAK ZONE ad Ancona: riparazioni smartphone, money transfer, ricariche, bollettini, fotocopie e molto altro. Corso Carlo Alberto 68.">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <h1 class="logo">PAK ZONE</h1>
                <div class="contact-info">
                    <a href="tel:3533751655" class="phone-btn">
                        <i class="fas fa-phone"></i>
                        353 375 1655
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h2>Il tuo punto di riferimento ad Ancona</h2>
                <p>Riparazioni smartphone, servizi digitali e molto altro</p>
                <div class="reviews-badge">
                    <i class="fas fa-star"></i>
                    <span id="review-count">5,040</span> recensioni Google
                </div>
            </div>
        </div>
    </section>

    <!-- Info Cards -->
    <section class="info-cards">
        <div class="container">
            <div class="cards-grid">
                <div class="card">
                    <i class="fas fa-clock"></i>
                    <h3>Orari di Apertura</h3>
                    <div class="hours">
                        <div class="day">
                            <span>Lunedì - Sabato</span>
                            <span>8:30 - 20:00</span>
                        </div>
                        <div class="day closed">
                            <span>Domenica</span>
                            <span>Chiuso</span>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Dove Siamo</h3>
                    <p>Corso Carlo Alberto, 68<br>60127 Ancona AN</p>
                    <button class="directions-btn" onclick="openDirections()">
                        <i class="fas fa-directions"></i>
                        Indicazioni
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <h2>📌 I nostri servizi</h2>
            <div class="services-grid">
                <div class="service-item">
                    <i class="fas fa-mobile-alt"></i>
                    <span>Riparazioni smartphone e dispositivi elettronici</span>
                </div>
                <div class="service-item">
                    <i class="fas fa-money-bill-transfer"></i>
                    <span>Money transfer in Italia e all'estero</span>
                </div>
                <div class="service-item">
                    <i class="fas fa-credit-card"></i>
                    <span><strong>Tutte le ricariche nazionali e internazionali</strong></span>
                </div>
                <div class="service-item">
                    <i class="fas fa-file-invoice"></i>
                    <span>Pagamento bollettini e servizi online</span>
                </div>
                <div class="service-item">
                    <i class="fas fa-car"></i>
                    <span>👉 Bollo auto, MAV, PagoPA, RAV e anche <strong>bollette internazionali</strong></span>
                </div>
                <div class="service-item">
                    <i class="fas fa-print"></i>
                    <span>Fotocopie, stampa documenti e scansioni</span>
                </div>
                <div class="service-item">
                    <i class="fas fa-plane"></i>
                    <span>Prenotazione e acquisto biglietti aerei</span>
                </div>
                <div class="service-item">
                    <i class="fas fa-sim-card"></i>
                    <span>Attivazione e vendita SIM telefoniche</span>
                </div>
            </div>

            <h3>📦 In più trovi</h3>
            <div class="additional-services">
                <div class="service-item">
                    <i class="fas fa-headphones"></i>
                    <span>Accessori e gadget per smartphone (cover, cuffie, powerbank, adattatori…)</span>
                </div>
                <div class="service-item">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Prodotti utili per ogni esigenza quotidiana</span>
                </div>
            </div>

            <div class="service-promise">
                <p>✨ <strong>Professionalità, velocità e cortesia sempre al tuo servizio!</strong></p>
                <p>➡️ <strong>Tutto quello che ti serve</strong></p>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2>Vieni a trovarci</h2>
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2890.1234567890123!2d13.5123456789!3d43.6123456789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sCorso%20Carlo%20Alberto%2C%2068%2C%2060127%20Ancona%20AN!5e0!3m2!1sit!2sit!4v1234567890123"
                    width="100%" 
                    height="300" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews">
        <div class="container">
            <h2>Cosa dicono i nostri clienti</h2>
            <div class="reviews-summary">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p><span id="review-count-2">5,040</span> recensioni su Google Maps</p>
                <a href="https://www.google.com/maps/place/PAK+ZONE/@43.6123456,13.5123456,17z" target="_blank" class="view-reviews-btn">
                    Vedi tutte le recensioni
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>PAK ZONE</h3>
                    <p>Il tuo punto di riferimento per smartphone e servizi ad Ancona</p>
                </div>
                <div class="footer-section">
                    <h4>Contatti</h4>
                    <p><i class="fas fa-phone"></i> 353 375 1655</p>
                    <p><i class="fas fa-map-marker-alt"></i> Corso Carlo Alberto, 68<br>60127 Ancona AN</p>
                </div>
                <div class="footer-section">
                    <h4>Orari</h4>
                    <p>Lun - Sab: 8:30 - 20:00</p>
                    <p>Domenica: Chiuso</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 PAK ZONE. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
