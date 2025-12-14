@extends('a_EncabezadoFooter.princi')
@section('content')
<?php
    $h1_1_1 = 'Visita el Mundo';
    $h1_1_2 = 'De Nuestras Tradiciones';
    $p_1 = 'Explora destinos únicos con nuestros tours y vive experiencias unica';

        $h2_1 = 'Nuestros Tours';
        $p_2 = 'Descubre los lugares más espectaculares con una perspectiva diferente';

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
                <video width="100%" height="100%" autoplay loop playsinline style="object-fit: cover;">
                    <source src="{{ asset('/public/video/agencia-portada.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-plane"></i>
                <span>TOURS TRADICIONALES</span>
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
                <div class="section-badge">TOURS TRADICIONALES</div>
                <h2 class="section-title"><?= $h2_1 ?></h2>
                <p class="section-subtitle"><?= $p_2 ?></p>
            </div>
            <div class="tours-grid">
                
                <!-- Tour 02: Tesoros del Cusco -->
                <article class="tour-card" data-category="tradicional" itemscope itemtype="https://schema.org/TouristAttraction">
                    <div class="tour-image">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/90/The_Sacred_Valley%2C_Peru-2_%288445855270%29.jpg" 
                            alt="Valle Sagrado y Machu Picchu en Cusco" 
                            itemprop="image">
                        <div class="tour-overlay">
                            <div class="tour-badge tradicional" itemprop="additionalType">Tradicional</div>
                        </div>
                    </div>
                    <div class="tour-content">
                        <h2 class="tour-title" itemprop="name"><?= $h2_3 ?></h2>
                        <p class="tour-description" itemprop="description"><?= $p_4 ?></p>
                        <div class="tour-details">
                            <div class="detail" itemprop="duration" content="PT3H">
                                <i class="fas fa-clock"></i>
                                <span>1 horas</span>
                            </div>
                            <div class="detail" itemprop="audience" content="Grupo mediano">
                                <i class="fas fa-users"></i>
                                <span>Hasta 8 personas</span>
                            </div>
                            <div class="detail" itemprop="location" itemscope itemtype="https://schema.org/Place">
                                <i class="fas fa-map-marker-alt"></i>
                                <span itemprop="address">Cusco, Perú</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-landmark"></i>
                                <span>Sitios arqueológicos</span>
                            </div>
                        </div>
                        <a href="/agencia/tesoros-cusco" class="tour-btn" itemprop="url" title="Reservar Tour Tesoros del Cusco">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                
                <!-- Tour 04: Montaña de Siete Colores -->
                <article class="tour-card" data-category="tradicional" itemscope itemtype="https://schema.org/TouristAttraction">
                    <div class="tour-image">
                        <img src="https://images.pexels.com/photos/6921111/pexels-photo-6921111.jpeg" 
                            alt="Montaña de Siete Colores Vinicunca en Cusco" 
                            itemprop="image">
                        <div class="tour-overlay">
                            <div class="tour-badge tradicional" itemprop="additionalType">Tradicional</div>
                        </div>
                    </div>
                    <div class="tour-content">
                        <h2 class="tour-title" itemprop="name"><?= $h2_5 ?></h2>
                        <p class="tour-description" itemprop="description"><?= $p_6 ?></p>
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
                                <i class="fas fa-mountain"></i>
                                <span>Naturaleza única</span>
                            </div>
                        </div>
                        <a href="/agencia/vinicunca" class="tour-btn" itemprop="url" title="Reservar Tour Montaña de Siete Colores">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                
                <!-- Tour 06: Machu Picchu -->
                <article class="tour-card" data-category="tradicional" itemscope itemtype="https://schema.org/TouristAttraction">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1526392060635-9d6019884377?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                            alt="Vista aérea de Machu Picchu, ciudadela inca" 
                            itemprop="image">
                        <div class="tour-overlay">
                            <div class="tour-badge tradicional" itemprop="additionalType">Tradicional</div>
                        </div>
                    </div>
                    <div class="tour-content">
                        <h2 class="tour-title" itemprop="name"><?= $h2_7 ?></h2>
                        <p class="tour-description" itemprop="description"><?= $p_8 ?></p>
                        <div class="tour-details">
                            <div class="detail" itemprop="duration" content="PT2H">
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
                                <i class="fas fa-history"></i>
                                <span>Patrimonio mundial</span>
                            </div>
                        </div>
                        <a href="/agencia/machu-picchu" class="tour-btn" itemprop="url" title="Reservar Tour Machu Picchu">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.querySelector('.bg-video video');
        const audioToggle = document.getElementById('audioToggle');
        
        if (video && audioToggle) {
            // Inicializar estado del icono basado en el estado del video
            updateAudioIcon();

            // Control de audio
            audioToggle.addEventListener('click', function() {
                video.muted = !video.muted;
                updateAudioIcon();
            });

            function updateAudioIcon() {
                if (video.muted) {
                    audioToggle.innerHTML = '<i class="fas fa-volume-mute"></i>';
                } else {
                    audioToggle.innerHTML = '<i class="fas fa-volume-up"></i>';
                }
            }
        }
    });
</script>
@endsection