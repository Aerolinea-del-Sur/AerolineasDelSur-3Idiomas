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
    $p_1 = 'Explora destinos únicos con nuestros sobrevuelos y vive experiencias inolvidables';

        $h2_1 = 'Nuestros Sobrevuelos';
        $p_2 = 'Descubre los lugares más espectaculares del Perú desde una perspectiva única';

        $h2_2 = 'Andes Mágicos';
        $p_3 = 'Descubre la montaña de 7 colores, nevado Ausangate, valle rojo, complejos arqueológicos del Cusco, Pisac junto al Valle Sagrado finalizando con las salineras de Maras.';

        $h2_3 = 'Tesoros del Cusco';
        $p_4 = 'Descubre Valle Sagrado y Machu Picchu en un tour exclusivo por los principales atractivos del Cusco.';

        $h2_4 = 'Valle Maras';
        $p_5 = 'Descubre Sacsayhuamán, Tambomachay, Pisac, Valle Sagrado, Maras y Laguna de Huaypo desde las alturas.';

        $h2_5 = 'Montaña de Siete Colores';
        $p_6 = 'Descubre la montaña arcoíris Vinicunca en una excursión por Cusco, una de las maravillas naturales más impresionantes del Perú.';

        $h2_6 = 'Vinicunca';
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

    <style>
        /* Estilos del Carrusel */
        .tour-image {
            position: relative;
            overflow: hidden;
        }
        
        .carousel-container {
            width: 100%;
            height: 100%;
            position: relative;
        }
        
        .carousel-slide {
            display: none;
            width: 100%;
            height: 100%;
        }
        
        .carousel-slide.active {
            display: block;
        }
        
        .carousel-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .tour-card:hover .carousel-slide img {
            transform: scale(1.1);
        }
        
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .tour-image:hover .carousel-btn {
            opacity: 1;
        }
        
        .prev-btn {
            left: 10px;
        }
        
        .next-btn {
            right: 10px;
        }
        
        .carousel-dots {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 5px;
            z-index: 2;
        }
        
        .dot {
            width: 8px;
            height: 8px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            cursor: pointer;
        }
        
        .dot.active {
            background: white;
        }
    </style>
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
                <?php
                $tours = [
                    // Nuevos Tours
                    [
                        'title' => 'Choquequirao',
                        'description' => 'Descubre la majestuosa "Cuna de Oro" y hermana sagrada de Machu Picchu, una joya arqueológica oculta entre los Andes.',
                        'images' => [
                            '/public/img/sobrevuelos/choquequirao-1.webp',
                            '/public/img/sobrevuelos/choquequirao-2.webp',
                            '/public/img/sobrevuelos/choquequirao-3.webp',
                            '/public/img/sobrevuelos/choquequirao-4.webp'
                        ],
                        'duration' => '1h 45m',
                        'pax' => 'Hasta 4 personas',
                        'location' => 'Cusco, Perú',
                        'badge' => 'Sobrevuelo',
                        'extra_icon' => 'fas fa-mountain',
                        'extra_text' => 'Aventura Arqueológica',
                        'url' => '/agencia/choquequirao'
                    ],
                    [
                        'title' => 'Lago Titicaca',
                        'description' => 'Contempla la inmensidad del lago navegable más alto del mundo y sus islas flotantes desde una perspectiva celestial.',
                        'images' => [
                            '/public/img/sobrevuelos/titicaca-lake-1.webp',
                            '/public/img/sobrevuelos/titicaca-lake-2.webp',
                            '/public/img/sobrevuelos/titicaca-lake-3.webp',
                            '/public/img/sobrevuelos/titicaca-lake-4.webp'
                        ],
                        'duration' => '2h',
                        'pax' => 'Hasta 6 personas',
                        'location' => 'Puno, Perú',
                        'badge' => 'Sobrevuelo',
                        'extra_icon' => 'fas fa-water',
                        'extra_text' => 'Maravilla Natural',
                        'url' => '/agencia/titicaca-lake'
                    ],
                    [
                        'title' => 'Líneas de Nazca',
                        'description' => 'Descifra los misterios de las antiguas figuras geoglíficas que solo revelan su verdadera forma desde el cielo.',
                        'images' => [
                            '/public/img/sobrevuelos/nazca-lines-1.webp',
                            '/public/img/sobrevuelos/nazca-lines-2.webp',
                            '/public/img/sobrevuelos/nazca-lines-3.webp',
                            '/public/img/sobrevuelos/nazca-lines-4.webp'
                        ],
                        'duration' => '1h 15m',
                        'pax' => 'Hasta 4 personas',
                        'location' => 'Ica, Perú',
                        'badge' => 'Sobrevuelo',
                        'extra_icon' => 'fas fa-eye',
                        'extra_text' => 'Patrimonio Mundial',
                        'url' => '/agencia/nazca-lines'
                    ],
                    //[
                    //    'title' => 'Salar de Uyuni',
                    //    'description' => 'Vuela sobre el espejo natural más grande del planeta, donde el cielo y la tierra se funden en el horizonte.',
                    //    'images' => [
                    //        '/public/img/tours/andes-magicos-1.jpg',
                    //        '/public/img/tours/andes-magicos-2.jpg',
                    //        '/public/img/tours/andes-magicos-3.jpg',
                    //        '/public/img/tours/andes-magicos-4.jpg'
                    //    ],
                    //    'duration' => '3h',
                    //    'pax' => 'Hasta 6 personas',
                    //    'location' => 'Uyuni, Bolivia',
                    //    'badge' => 'Sobrevuelo',
                    //    'extra_icon' => 'fas fa-globe',
                    //    'extra_text' => 'Maravilla Infinita',
                    //    'url' => '/agencia/uyuni'
                    //],

                    // Tours Existentes
                    //[
                    //    'title' => $h2_2, // Andes Mágicos
                    //    'description' => $p_3,
                    //    'images' => [
                    //        'https://upload.wikimedia.org/wikipedia/commons/d/dd/Ausangate.jpg',
                    //        'https://www.peru.travel/Contenido/Atractivo/Imagen/es/189/1.1/Principal/montana-siete-colores.jpg',
                    //        'https://media.istockphoto.com/id/1136437406/es/foto/monta%C3%B1a-arcoiris-en-los-andes-per%C3%BA.jpg?s=612x612&w=0&k=20&c=X_X_X_X_X_X_X_X_X_X_X_X_X',
                    //        'https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Rainbow_Mountain_Peru.jpg/1200px-Rainbow_Mountain_Peru.jpg'
                    //    ],
                    //    'duration' => '1 horas',
                    //    'pax' => 'Hasta 4 personas',
                    //    'location' => 'Cusco, Perú',
                    //    'badge' => 'Sobrevuelo',
                    //    'extra_icon' => 'fas fa-star',
                    //    'extra_text' => 'Experiencia única',
                    //    'url' => '/agencia/andes-magicos'
                    //],
                    [
                        'title' => $h2_4, // Valle Sagrado
                        'description' => $p_5,
                        'images' => [
                            '/public/img/sobrevuelos/sacred-valley-1.webp',
                            '/public/img/sobrevuelos/sacred-valley-2.webp',
                            '/public/img/sobrevuelos/sacred-valley-3.webp',
                            '/public/img/sobrevuelos/sacred-valley-4.webp'
                        ],
                        'duration' => '1 horas',
                        'pax' => 'Hasta 6 personas',
                        'location' => 'Cusco, Perú',
                        'badge' => 'Sobrevuelo',
                        'extra_icon' => 'fas fa-water',
                        'extra_text' => 'Incluye lagunas',
                        'url' => '/agencia/valle-maras'
                    ],
                    [
                        'title' => $h2_6, // Vinicunca
                        'description' => $p_7,
                        'images' => [
                            '/public/img/sobrevuelos/vinicunca-mountain-1.webp',
                            '/public/img/sobrevuelos/vinicunca-mountain-2.webp',
                            '/public/img/sobrevuelos/vinicunca-mountain-3.webp',
                            '/public/img/sobrevuelos/vinicunca-mountain-4.webp'
                        ],
                        'duration' => '1 horas',
                        'pax' => 'Hasta 6 personas',
                        'location' => 'Cusco, Perú',
                        'badge' => 'Sobrevuelo',
                        'extra_icon' => 'fas fa-crown',
                        'extra_text' => 'Experiencia elite',
                        'url' => '/agencia/vinicunca-elite'
                    ]
                ];

                foreach ($tours as $index => $tour): 
                ?>
                <article class="tour-card" data-category="sobrevuelo" itemscope itemtype="https://schema.org/TouristAttraction">
                    <div class="tour-image">
                        <div class="carousel-container" id="carousel-<?= $index ?>">
                            <?php foreach ($tour['images'] as $imgIndex => $imgSrc): ?>
                            <div class="carousel-slide <?= $imgIndex === 0 ? 'active' : '' ?>">
                                <img src="<?= $imgSrc ?>" 
                                    alt="<?= $tour['title'] ?> - Imagen <?= $imgIndex + 1 ?>" 
                                    itemprop="image">
                            </div>
                            <?php endforeach; ?>
                            
                            <button class="carousel-btn prev-btn" onclick="moveSlide(<?= $index ?>, -1, event)">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="carousel-btn next-btn" onclick="moveSlide(<?= $index ?>, 1, event)">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                            
                            <div class="carousel-dots">
                                <?php foreach ($tour['images'] as $imgIndex => $imgSrc): ?>
                                <span class="dot <?= $imgIndex === 0 ? 'active' : '' ?>" onclick="setSlide(<?= $index ?>, <?= $imgIndex ?>, event)"></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <div class="tour-overlay">
                            <div class="tour-badge <?= strtolower($tour['badge']) ?>" itemprop="additionalType"><?= $tour['badge'] ?></div>
                        </div>
                    </div>
                    <div class="tour-content">
                        <h2 class="tour-title" itemprop="name"><?= $tour['title'] ?></h2>
                        <p class="tour-description" itemprop="description"><?= $tour['description'] ?></p>
                        <div class="tour-details">
                            <div class="detail" itemprop="duration">
                                <i class="fas fa-clock"></i>
                                <span><?= $tour['duration'] ?></span>
                            </div>
                            <div class="detail" itemprop="audience">
                                <i class="fas fa-users"></i>
                                <span><?= $tour['pax'] ?></span>
                            </div>
                            <div class="detail" itemprop="location" itemscope itemtype="https://schema.org/Place">
                                <i class="fas fa-map-marker-alt"></i>
                                <span itemprop="address"><?= $tour['location'] ?></span>
                            </div>
                            <div class="detail">
                                <i class="<?= $tour['extra_icon'] ?>"></i>
                                <span><?= $tour['extra_text'] ?></span>
                            </div>
                        </div>
                        <a href="<?= $tour['url'] ?>" class="tour-btn" itemprop="url" title="Reservar <?= $tour['title'] ?>">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>
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

        // Carousel Logic
        function moveSlide(tourIndex, step, event) {
            if(event) event.preventDefault();
            const container = document.getElementById('carousel-' + tourIndex);
            if (!container) return;
            
            const slides = container.querySelectorAll('.carousel-slide');
            const dots = container.querySelectorAll('.dot');
            
            let activeIndex = 0;
            slides.forEach((slide, index) => {
                if (slide.classList.contains('active')) {
                    activeIndex = index;
                }
                slide.classList.remove('active');
                if(dots[index]) dots[index].classList.remove('active');
            });
            
            let newIndex = activeIndex + step;
            if (newIndex >= slides.length) newIndex = 0;
            if (newIndex < 0) newIndex = slides.length - 1;
            
            slides[newIndex].classList.add('active');
            if(dots[newIndex]) dots[newIndex].classList.add('active');
        }

        function setSlide(tourIndex, slideIndex, event) {
            if(event) event.preventDefault();
            const container = document.getElementById('carousel-' + tourIndex);
            if (!container) return;

            const slides = container.querySelectorAll('.carousel-slide');
            const dots = container.querySelectorAll('.dot');
            
            slides.forEach((slide, index) => {
                slide.classList.remove('active');
                if(dots[index]) dots[index].classList.remove('active');
            });
            
            if(slides[slideIndex]) slides[slideIndex].classList.add('active');
            if(dots[slideIndex]) dots[slideIndex].classList.add('active');
        }

        // Auto-slide functionality
        document.addEventListener('DOMContentLoaded', function() {
            const carousels = document.querySelectorAll('.carousel-container');
            
            carousels.forEach(carousel => {
                const tourIndex = carousel.id.replace('carousel-', '');
                
                // Set interval for each carousel
                setInterval(() => {
                    // Only change slide if not hovering over the card
                    // This prevents the slide from changing while user is looking at it
                    if (!carousel.closest('.tour-card').matches(':hover')) {
                        moveSlide(tourIndex, 1);
                    }
                }, 3500); // 3.5 seconds
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