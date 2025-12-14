@extends('a_EncabezadoFooter.princi')

@php
// Custom SEO for Sobrevuelos page
$seo = [
    'title' => 'Sobrevuelos Turísticos en Perú | Tours Aéreos sobre Cusco y Valle Sagrado',
    'description' => 'Descubre Perú desde las alturas con nuestros sobrevuelos turísticos. Vinicunca, Valle Sagrado, Machu Picchu y más destinos espectaculares en tours aéreos exclusivos desde Cusco.',
    'keywords' => 'sobrevuelos cusco, tour aéreo valle sagrado, sobrevuelo vinicunca, montaña 7 colores helicóptero, machu picchu helicóptero, tours aéreos perú',
    'og_image' => asset('img/sobrevuelos-cusco.jpg'),
    'canonical' => url('/sobrevuelos'),
];
@endphp

@section('content')
<?php
    $h1_1_1 = 'Descubre el Mundo';
    $h1_1_2 = 'Desde las Alturas';
    $p_1 = 'Explora destinos únicos con nuestros tours aéreos premium y vive experiencias inolvidables';

        $h2_1 = 'Nuestros Tours de Sobrevuelos';
        $p_2 = 'Descubre los lugares más espectaculares del Perú desde una perspectiva única';

        $h2_2 = 'Andes Mágicos';
        $p_3 = 'Descubre la montaña de 7 colores, nevado Ausangate, valle rojo, complejos arqueológicos del Cusco, Pisac junto al Valle Sagrado finalizando con las salineras de Maras.';

        $h2_3 = 'Tesoros del Cusco';
        $p_4 = 'Descubre Valle Sagrado y Machu Picchu en un tour exclusivo por los principales atractivos del Cusco.';

        $h2_4 = 'Valle Maras';
        $p_5 = 'Descubre Sacsayhuamán, Tambomachay, Pisac, Valle Sagrado, Maras y Laguna de Huaypo desde las alturas.';

        $h2_5 = 'Montaña de Siete Colores';
        $p_6 = 'Descubre la montaña arcoíris Vinicunca en una excursión por Cusco, una de las maravillas naturales más impresionantes del Perú.';

        $h2_6 = 'Vinicunca Elite Experience';
        $p_7 = 'Visitamos Vinicunca, Palcoyo, Ausangate, Valle Rojo y Cuatro Lagunas en una experiencia exclusiva desde las alturas.';

        $h2_7 = 'Machu Picchu';
        $p_8 = 'Visita la ciudadela inca más famosa del mundo y contempla su majestuosidad desde las alturas en un tour inolvidable.';

        // Contacto
        $h2_8 = '¿Listo para tu Próxima Aventura?';
        $p_9 = 'Contáctanos para reservar tu tour aéreo y vivir una experiencia inolvidable';

        $h2_9 = '¿Listo para tu Próxima Aventura?';
        $p_10 = 'Contáctanos para reservar tu tour aéreo y vivir una experiencia inolvidable desde las alturas';

                $h4_1 = 'Teléfono';
                $p_11 = '+51 932 475 995';

                $h4_2 = 'Email';
                $p_12 = 'contacto@aerolineadelsur.com.pe';

                $h4_3 = 'Ubicación';
                $p_13 = 'Cusco, Perú';        
?>

    <link rel="stylesheet" href="{{ asset('public/css/paginas/agencia/Agencia.css') }}">
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <!-- Video de fondo de Vimeo con audio -->
            <div class="bg-video">
                <iframe 
                    src="https://player.vimeo.com/video/1117325379?badge=0&autopause=0&player_id=0&app_id=58479&autoplay=1&loop=1&muted=0&background=1&controls=0" 
                    frameborder="0" 
                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    title="Mi video Agencia">
                </iframe>
            </div>
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-plane"></i>
                <span>TOURS DE SOBREVUELOS</span>
            </div>
            <h1 class="hero-title">
                <span class="title-line"><?= $h1_1_1 ?></span>
                <span class="title-line highlight"><?= $h1_1_2 ?></span>
            </h1>
            <p class="hero-description"><?= $p_1 ?></p>
            <div class="hero-actions">
                <a href="#tours" class="btn btn-primary">
                    <span>Ver Tours</span>
                    <i class="fas fa-arrow-down"></i>
                </a>
                <a href="#contacto" class="btn btn-outline">
                    <i class="fas fa-phone"></i>
                    <span>Reservar</span>
                </a>
            </div>
        </div>
        
        <!-- Control de audio -->
        <div class="audio-control">
            <button id="audioToggle" class="audio-btn">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>
    </section>

    <!-- Tours Section -->
    <section id="tours" class="tours">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">TOURS SOBREVUELOS EXCLUSIVOS</div>
                <h2 class="section-title"><?= $h2_1 ?></h2>
                <p class="section-subtitle"><?= $p_2 ?></p>
            </div>
            
            <div class="tours-grid">
                <!-- Tour 01: Andes Mágicos -->
                <article class="tour-card" data-category="sobrevuelo" itemscope itemtype="https://schema.org/TouristAttraction">
                    <div class="tour-image">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/dd/Ausangate.jpg" 
                            alt="Sobrevuelo Montaña de 7 Colores en los Andes Peruanos" 
                            itemprop="image">
                        <div class="tour-overlay">
                            <div class="tour-badge sobrevuelo" itemprop="additionalType">Sobrevuelo</div>
                        </div>
                    </div>
                    <div class="tour-content">
                        <h2 class="tour-title" itemprop="name"><?= $h2_2 ?></h2>
                        <p class="tour-description" itemprop="description"><?= $p_3 ?></p>
                        <div class="tour-details">
                            <div class="detail" itemprop="duration" content="PT1H30M">
                                <i class="fas fa-clock"></i>
                                <span>1 horas</span>
                            </div>
                            <div class="detail" itemprop="audience" content="Grupo pequeño">
                                <i class="fas fa-users"></i>
                                <span>Hasta 4 personas</span>
                            </div>
                            <div class="detail" itemprop="location" itemscope itemtype="https://schema.org/Place">
                                <i class="fas fa-map-marker-alt"></i>
                                <span itemprop="address">Cusco, Perú</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-star"></i>
                                <span>Experiencia única</span>
                            </div>
                        </div>
                        <a href="/agencia/andes-magicos" class="tour-btn" itemprop="url" title="Reservar Sobrevuelo Andes Mágicos">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                
                <!-- Tour 03: Valle Maras -->
                <article class="tour-card" data-category="sobrevuelo" itemscope itemtype="https://schema.org/TouristAttraction">
                    <div class="tour-image">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Moray_-_Qechuyoq.JPG" 
                            alt="Sobrevuelo Valle de Maras y Salineras en Cusco" 
                            itemprop="image">
                        <div class="tour-overlay">
                            <div class="tour-badge sobrevuelo" itemprop="additionalType">Sobrevuelo</div>
                        </div>
                    </div>
                    <div class="tour-content">
                        <h2 class="tour-title" itemprop="name"><?= $h2_4 ?></h2>
                        <p class="tour-description" itemprop="description"><?= $p_5 ?></p>
                        <div class="tour-details">
                            <div class="detail" itemprop="duration" content="PT2H30M">
                                <i class="fas fa-clock"></i>
                                <span>1 horas</span>
                            </div>
                            <div class="detail" itemprop="audience" content="Grupo mediano">
                                <i class="fas fa-users"></i>
                                <span>Hasta 6 personas</span>
                            </div>
                            <div class="detail" itemprop="location" itemscope itemtype="https://schema.org/Place">
                                <i class="fas fa-map-marker-alt"></i>
                                <span itemprop="address">Cusco, Perú</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-water"></i>
                                <span>Incluye lagunas</span>
                            </div>
                        </div>
                        <a href="/agencia/valle-maras" class="tour-btn" itemprop="url" title="Reservar Sobrevuelo Valle Maras">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                
                <!-- Tour 05: Vinicunca Elite Experience -->
                <article class="tour-card" data-category="sobrevuelo" itemscope itemtype="https://schema.org/TouristAttraction">
                    <div class="tour-image">
                        <img src="https://images.pexels.com/photos/6921111/pexels-photo-6921111.jpeg" 
                            alt="Sobrevuelo Vinicunca, Palcoyo y Ausangate en Cusco" 
                            itemprop="image">
                        <div class="tour-overlay">
                            <div class="tour-badge sobrevuelo" itemprop="additionalType">Sobrevuelo</div>
                        </div>
                    </div>
                    <div class="tour-content">
                        <h2 class="tour-title" itemprop="name"><?= $h2_6 ?></h2>
                        <p class="tour-description" itemprop="description"><?= $p_7 ?></p>
                        <div class="tour-details">
                            <div class="detail" itemprop="duration" content="PT2H30M">
                                <i class="fas fa-clock"></i>
                                <span>1 horas</span>
                            </div>
                            <div class="detail" itemprop="audience" content="Grupo mediano">
                                <i class="fas fa-users"></i>
                                <span>Hasta 6 personas</span>
                            </div>
                            <div class="detail" itemprop="location" itemscope itemtype="https://schema.org/Place">
                                <i class="fas fa-map-marker-alt"></i>
                                <span itemprop="address">Cusco, Perú</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-crown"></i>
                                <span>Experiencia elite</span>
                            </div>
                        </div>
                        <a href="/agencia/vinicunca-elite" class="tour-btn" itemprop="url" title="Reservar Vinicunca Elite Experience">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacto" class="contact">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">CONTACTO</div>
                <h2 class="section-title"><?= $h2_8 ?></h2>
                <p class="section-subtitle"><?= $p_9 ?></p>
            </div>
            <div class="contact-content">
                <div class="contact-text">
                    <div class="section-badge">RESERVA AHORA</div>
                    <h2 class="section-title"><?= $h2_9 ?></h2>
                    <p class="section-subtitle"><?= $p_10 ?></p>
                </div>
                <div class="contact-methods">
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-info">
                            <h4><?= $h4_1 ?></h4>
                            <p><?= $p_11 ?></p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info">
                            <h4><?= $h4_2 ?></h4>
                            <p><?= $p_12 ?></p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info">
                            <h4><?= $h4_3 ?></h4>
                            <p><?= $p_13 ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Smooth scrolling for navigation links
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
    </script>
    
    <!-- Control de audio para Video de Vimeo -->
    <script src="https://player.vimeo.com/api/player.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const iframe = document.querySelector('.bg-video iframe');
            const audioToggle = document.getElementById('audioToggle');
            let isMuted = false;
            
            if (iframe && audioToggle) {
                const player = new Vimeo.Player(iframe);
                
                // Control de audio
                audioToggle.addEventListener('click', function() {
                    if (isMuted) {
                        player.setVolume(0.5); // Volumen al 50%
                        audioToggle.innerHTML = '<i class="fas fa-volume-up"></i>';
                        isMuted = false;
                    } else {
                        player.setVolume(0);
                        audioToggle.innerHTML = '<i class="fas fa-volume-mute"></i>';
                        isMuted = true;
                    }
                });
                
                // Iniciar con volumen medio
                player.setVolume(0.5);
            }
        });
    </script>
@endsection