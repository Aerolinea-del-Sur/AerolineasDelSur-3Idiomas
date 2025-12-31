@php
$seo = seo()
    ->title(__('services.overflights.seo.title'))
    ->description(__('services.overflights.seo.description'))
    ->keywords(['sobrevuelos cusco', 'tour aéreo valle sagrado', 'sobrevuelo vinicunca', 'montaña 7 colores helicóptero', 'machu picchu helicóptero', 'tours aéreos perú'])
    ->image(asset('img/sobrevuelos-cusco.jpg'))
    ->canonical(url(app()->getLocale() . '/sobrevuelos'));
@endphp

@extends('a_EncabezadoFooter.princi')

@push('seo')
    {!! $seo !!}
@endpush

@section('content')
<?php
    $h1_1_1 = __('services.overflights.hero.title1', ['default' => 'Descubre el Mundo']);
    $h1_1_2 = __('services.overflights.hero.title2', ['default' => 'Desde las Alturas']);
    $p_1 = __('services.overflights.subtitle');

        $h2_1 = __('services.overflights.featured_title');
        $p_2 = __('services.overflights.subtitle');

        $h2_2 = __('services.overflights.andes.title', ['default' => 'Andes Mágicos']);
        $p_3 = __('services.overflights.andes.desc', ['default' => 'Descubre la montaña de 7 colores, nevado Ausangate, valle rojo, complejos arqueológicos del Cusco, Pisac junto al Valle Sagrado finalizando con las salineras de Maras.']);

        $h2_3 = __('services.overflights.treasures.title', ['default' => 'Tesoros del Cusco']);
        $p_4 = __('services.overflights.treasures.desc', ['default' => 'Descubre Valle Sagrado y Machu Picchu en un tour exclusivo por los principales atractivos del Cusco.']);

        $h2_4 = __('services.overflights.sacred_valley.title', ['default' => 'Valle Sagrado']);
        $p_5 = __('services.overflights.sacred_valley.desc', ['default' => 'Descubre Sacsayhuamán, Tambomachay, Pisac, Valle Sagrado, Maras y Laguna de Huaypo desde las alturas.']);

        $h2_5 = __('services.overflights.rainbow_mountain.title', ['default' => 'Montaña de Siete Colores']);
        $p_6 = __('services.overflights.rainbow_mountain.desc', ['default' => 'Descubre la montaña arcoíris Vinicunca en una excursión por Cusco, una de las maravillas naturales más impresionantes del Perú.']);

        $h2_6 = __('services.overflights.vinicunca.title', ['default' => 'Vinicunca']);
        $p_7 = __('services.overflights.vinicunca.desc', ['default' => 'Visitamos Vinicunca, Palcoyo, Ausangate, Valle Rojo y Cuatro Lagunas en una experiencia exclusiva desde las alturas.']);

        $h2_7 = __('services.overflights.machu_picchu.title', ['default' => 'Machu Picchu']);
        $p_8 = __('services.overflights.machu_picchu.desc', ['default' => 'Visita la ciudadela inca más famosa del mundo y contempla su majestuosidad desde las alturas en un tour inolvidable.']);

        // Contacto
        $h2_8 = __('home.cta.title', ['default' => '¿Listo para tu Próxima Aventura?']);
        $p_9 = __('home.cta.subtitle', ['default' => 'Contáctanos para reservar tu tour aéreo y vivir una experiencia inolvidable']);

        $h2_9 = __('home.cta.title');
        $p_10 = __('home.cta.subtitle');

                $h4_1 = __('common.contact.phone', ['default' => 'Teléfono']);
                $p_11 = '+51 932 475 995';

                $h4_2 = __('common.contact.email', ['default' => 'Email']);
                $p_12 = 'contacto@aerolineadelsur.com.pe';

                $h4_3 = __('common.contact.location', ['default' => 'Ubicación']);
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
                <video width="100%" height="100%" autoplay loop playsinline style="object-fit: cover;">
                    <source src="{{ asset('/public/video/portada-sobrevuelo.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-plane"></i>
                <span>TOURS DE SOBREVUELOS</span>
            </div>
            <h1 class="hero-title">
                <span class="title-line">{{ $h1_1_1 }}</span>
                <span class="title-line highlight">{{ $h1_1_2 }}</span>
            </h1>
            <p class="hero-description">{{ $p_1 }}</p>
            <div class="hero-actions">
                <a href="#tours" class="btn btn-primary">
                    <span>{{ __('common.button.see_tours') }}</span>
                    <i class="fas fa-arrow-down"></i>
                </a>
                <a href="#contacto" class="btn btn-outline">
                    <i class="fas fa-phone"></i>
                    <span>{{ __('common.button.reserve') }}</span>
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
                <h2 class="section-title">{{ $h2_1 }}</h2>
                <p class="section-subtitle">{{ $p_2 }}</p>
            </div>
            
            <div class="tours-grid">
                <?php
                $tours = [
                    // Nuevos Tours
                    [
                        'title' => 'Choquequirao',
                        'description' => __('services.overflights.choquequirao.desc'),
                        'images' => [
                            '/img/sobrevuelos/choquequirao-1.webp',
                            '/img/sobrevuelos/choquequirao-2.webp',
                            '/img/sobrevuelos/choquequirao-3.webp',
                            '/img/sobrevuelos/choquequirao-4.webp'
                        ],
                        'duration' => '1h',
                        'pax' => __('common.up_to') . ' 4 ' . __('common.people'),
                        'location' => 'Cusco, Perú',
                        'badge' => __('common.overflight'),
                        'extra_icon' => 'fas fa-mountain',
                        'extra_text' => __('common.archaeological_adventure'),
                        'url' => '/' . app()->getLocale() . '/sobrevuelo/choquequirao'
                    ],
                    [
                        'title' => 'Lago Titicaca',
                        'description' => __('services.overflights.titicaca.desc'),
                        'images' => [
                            '/img/sobrevuelos/titicaca-lake-1.webp',
                            '/img/sobrevuelos/titicaca-lake-2.webp',
                            '/img/sobrevuelos/titicaca-lake-3.webp',
                            '/img/sobrevuelos/titicaca-lake-4.webp'
                        ],
                        'duration' => '1h 40m',
                        'pax' => __('common.up_to') . ' 6 ' . __('common.people'),
                        'location' => 'Puno, Perú',
                        'badge' => __('common.overflight'),
                        'extra_icon' => 'fas fa-water',
                        'extra_text' => __('common.natural_wonder'),
                        'url' => '/' . app()->getLocale() . '/sobrevuelo/titicaca-lake'
                    ],
                    [
                        'title' => 'Líneas de Nazca',
                        'description' => __('services.overflights.nazca.desc'),
                        'images' => [
                            '/img/sobrevuelos/nazca-lines-1.webp',
                            '/img/sobrevuelos/nazca-lines-2.webp',
                            '/img/sobrevuelos/nazca-lines-3.webp',
                            '/img/sobrevuelos/nazca-lines-4.webp'
                        ],
                        'duration' => '1h 20m',
                        'pax' => __('common.up_to') . ' 4 ' . __('common.people'),
                        'location' => 'Ica, Perú',
                        'badge' => __('common.overflight'),
                        'extra_icon' => 'fas fa-eye',
                        'extra_text' => __('common.world_heritage'),
                        'url' => '/' . app()->getLocale() . '/sobrevuelo/nazca-lines'
                    ],
                    //[
                    //    'title' => 'Salar de Uyuni',
                    //    'description' => 'Vuela sobre el espejo natural más grande del planeta, donde el cielo y la tierra se funden en el horizonte.',
                    //    'images' => [
                    //        '/img/tours/andes-magicos-1.jpg',
                    //        '/img/tours/andes-magicos-2.jpg',
                    //        '/img/tours/andes-magicos-3.jpg',
                    //        '/img/tours/andes-magicos-4.jpg'
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
                            '/img/sobrevuelos/sacred-valley-1.webp',
                            '/img/sobrevuelos/sacred-valley-2.webp',
                            '/img/sobrevuelos/sacred-valley-3.webp',
                            '/img/sobrevuelos/sacred-valley-4.webp'
                        ],
                        'duration' => '1h',
                        'pax' => 'Hasta 6 personas',
                        'location' => 'Cusco, Perú',
                        'badge' => 'Sobrevuelo',
                        'extra_icon' => 'fas fa-water',
                        'extra_text' => 'Incluye lagunas',
                        'url' => '/' . app()->getLocale() . '/sobrevuelo/valle-maras'
                    ],
                    [
                        'title' => $h2_6, // Vinicunca
                        'description' => $p_7,
                        'images' => [
                            '/img/sobrevuelos/vinicunca-mountain-1.webp',
                            '/img/sobrevuelos/vinicunca-mountain-2.webp',
                            '/img/sobrevuelos/vinicunca-mountain-3.webp',
                            '/img/sobrevuelos/vinicunca-mountain-4.webp'
                        ],
                        'duration' => '1h',
                        'pax' => 'Hasta 6 personas',
                        'location' => 'Cusco, Perú',
                        'badge' => 'Sobrevuelo',
                        'extra_icon' => 'fas fa-crown',
                        'extra_text' => 'Experiencia elite',
                        'url' => '/' . app()->getLocale() . '/sobrevuelo/vinicunca-elite'
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
                            <div class="tour-badge sobrevuelo" itemprop="additionalType"><?= $tour['badge'] ?></div>
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
                        <a href="<?= $tour['url'] ?>" class="tour-btn" itemprop="url" title="{{ __('common.button.reserve') }} <?= $tour['title'] ?>">
                            <span>{{ __('common.button.learn_more') }}</span>
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
                            <h3><?= $h4_1 ?></h3>
                            <p><?= $p_11 ?></p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info">
                            <h3><?= $h4_2 ?></h3>
                            <p><?= $p_12 ?></p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info">
                            <h3><?= $h4_3 ?></h3>
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