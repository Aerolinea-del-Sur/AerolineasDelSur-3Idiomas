@php
$seo = seo()
    ->title(__('home.seo.title', ['default' => 'Aerolínea del Sur | Vuelos Privados y Charter en Perú']))
    ->description(__('home.hero.subtitle'))
    ->keywords(['vuelos privados perú', 'charter cusco', 'helicóptero cusco', 'transporte aéreo médico perú', 'carga aérea', 'sobrevuelos valle sagrado'])
    ->image(asset('img/portada-home.jpg'))
    ->canonical(url(app()->getLocale()))
    ->addSchema([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Aerolínea del Sur',
        'description' => 'Vuelos privados y charter en Perú'
    ]);
@endphp

@extends ('a_EncabezadoFooter.princi')

@push('seo')
    {!! $seo !!}
@endpush


@section('content')
<?php 
    // Hero Section
    $h1_1 = __('home.hero.title_1');
    $h1_2 = __('home.hero.title_2');
    $p1_1 = __('home.hero.subtitle');
    
    // Services Section
    $h1_3 = __('home.services.title');
    $p1_2 = __('home.services.subtitle');
    
    // Featured Services
    $h2_1 = __('home.services.featured_title', ['default' => 'Servicios Destacados']);
    
    $h3_1 = __('home.services.charter.name');
    $p_1 = __('home.services.charter.desc');
    
    $h3_2 = __('home.services.helicopter.name');
    $p_2 = __('home.services.helicopter.desc');
    
    $h3_3 = __('home.services.medical.name');
    $p_3 = __('home.services.medical.desc');
    
    $h3_4 = __('home.services.cargo.name');
    $p_4 = __('home.services.cargo.desc');
    
    // Why Choose Us
    $h1_4 = __('home.why.title', ['default' => '¿Por qué elegir Aerolínea del Sur?']);
    $p_5 = __('home.why.subtitle', ['default' => 'Operamos vuelos privados diseñados para empresas, instituciones y familias que valoran la flexibilidad, puntualidad y servicio personalizado.']);
    
    $h3_5 = __('home.why.safety.title', ['default' => 'Seguridad Garantizada']);
    $p_6 = __('home.why.safety.desc', ['default' => 'Contamos con los más altos estándares de seguridad internacional y una flota moderna con mantenimiento riguroso. Tu tranquilidad es nuestra prioridad número uno.']);
    $span_1 = __('home.why.safety.cert1', ['default' => '✓ Certificación IATA']);
    $span_2 = __('home.why.safety.cert2', ['default' => '✓ Flota renovada']);
    $span_3 = __('home.why.safety.cert3', ['default' => '✓ Pilotos certificados']);
    
    $h3_6 = __('home.why.personalized.title', ['default' => 'Experiencia Personalizada']);
    $p_7 = __('home.why.personalized.desc', ['default' => 'Ofrecemos un servicio personalizado que se adapta a tus necesidades específicas. Desde la reserva hasta el destino, cada detalle está pensado para ti.']);
    $span_4 = __('home.why.personalized.feat1', ['default' => '✓ Atención 24/7']);
    $span_5 = __('home.why.personalized.feat2', ['default' => '✓ Servicio premium']);
    $span_6 = __('home.why.personalized.feat3', ['default' => '✓ Flexibilidad total']);
    
    $h3_7 = __('home.why.tradition.title', ['default' => 'Tradición y Confianza']);
    $p_8 = __('home.why.tradition.desc', ['default' => 'Más de 20 años de experiencia en aviación peruana respaldan cada vuelo. Nuestro compromiso es ofrecer seguridad certificada, puntualidad y un servicio que honra la tradición del buen trato.']);
    $span_7 = __('home.why.tradition.feat1', ['default' => '✓ Equipo Profesional']); 
    $span_8 = __('home.why.tradition.feat2', ['default' => '✓ Seguridad Asegurada']);
    $span_9 = __('home.why.tradition.feat3', ['default' => '✓ Estándares Internacionales']);
    
    // Testimonials
    $h1_5 = __('home.testimonials.title', ['default' => 'Lo que dicen nuestros pasajeros']);
    $p_9 = __('home.testimonials.subtitle', ['default' => 'Experiencias reales de viajeros que han confiado en nosotros para sus aventuras por los cielos del sur.']);
    
    $p_10 = __('home.testimonials.test1.text', ['default' => 'Una experiencia increíble desde el primer momento. El servicio fue excepcional y la atención al detalle impresionante. Definitivamente volaré con ellos nuevamente.']);
    $h4_1 = 'María Alejandra González';
    $span_10 = 'Empresaria - Lima, Perú';

    $p_11 = __('home.testimonials.test2.text', ['default' => 'Profesionalismo y seguridad en cada vuelo. La puntualidad y comodidad superaron mis expectativas. Recomiendo totalmente sus servicios.']);
    $h4_2 = 'Carlos Rodríguez';
    $span_11 = 'Arquitecto - Bogotá, Colombia';

    $p_12 = __('home.testimonials.test3.text', ['default' => 'El mejor servicio de aviación que he experimentado. Desde la reserva hasta el aterrizaje, todo fue perfecto. Un equipo verdaderamente profesional.']);
    $h4_3 = 'Ana Martínez';
    $span_12 = 'Doctora - Quito, Ecuador';

    $p_13 = __('home.testimonials.test4.text', ['default' => 'Excelente atención y vuelos cómodos. La tripulación siempre amable y dispuesta a ayudar. Una experiencia de lujo a precio justo.']);
    $h4_4 = 'Jorge López';
    $span_13 = 'Ingeniero - Santiago, Chile';

    $p_14 = __('home.testimonials.test5.text', ['default' => 'Seguridad y confianza en cada vuelo. Me siento tranquila sabiendo que estoy en buenas manos. El servicio personalizado hace la diferencia.']);
    $h4_5 = 'Lucía Silva';
    $span_14 = 'Abogada - Caracas, Venezuela';

    $p_15 = __('home.testimonials.test6.text', ['default' => 'Una aerolínea que realmente se preocupa por sus pasajeros. Vuelos puntuales, servicio excepcional y precios competitivos. Altamente recomendado.']);
    $h4_6 = 'Roberto Herrera';
    $span_15 = 'Consultor - Buenos Aires, Argentina';

    // Certifications
    $h1_6 = __('common.certifications.title');
    $p_16 = __('common.certifications.subtitle');
    
    //    <!-- FAQ Section -->
    $h1_7 = __('common.faq.title');
    $p_17 = __('common.faq.subtitle');
    
            $h3_8 = __('common.faq.charter_destinations_q');
            $p_18 = __('common.faq.charter_destinations_a');
            
            $h3_9 = __('common.faq.how_to_book_q');
            $p_19 = __('common.faq.how_to_book_home_a');
            
            $h3_10 = __('common.faq.baggage_policy_q');
            $p_20 = __('common.faq.baggage_policy_a');

            $h3_11 = __('common.faq.safety_measures_q');
            $p_21 = __('common.faq.safety_measures_a');

            $h3_12 = __('common.faq.frequent_flyer_q');
            $p_22 = __('common.faq.frequent_flyer_home_a');
    // h1_8  - h2_3 - h3_13 - h4_7 p_24
    $h2_2 = __('common.faq.need_more_info');
    $p_23 = __('common.faq.team_available');
?>
    <!-- presentacion -->
    <link rel="stylesheet" href="{{ asset('public/css/paginas/inicio.min.css') }}">
    
    <!-- Preload del contenido crítico del hero -->
    <style>
        /* CSS crítico inline para renderizado inmediato del hero text */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background: linear-gradient(135deg, rgba(0,0,0,0.9) 0%, rgba(28,28,28,0.8) 100%);
        }
        
        /* Prevenir CLS: Reservar espacio para el video */
        .hero-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        
        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .hero-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }
        
        .hero-content {
            position: relative;
            z-index: 10;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            padding: 80px 20px;
        }
    </style>
    
    <section class="hero-section">
        <!-- Contenido prioritario - se renderiza PRIMERO -->
        <div class="hero-content">
            <h1 class="hero-title"> <?= $h1_1 ?> <span class="highlight"> <?= $h1_2 ?> </span></h1>
            <p class="hero-subtitle" style="text-align: center; color: #ffffff;">
                <?= $p1_1 ?>
            </p>
        </div>
        
        <!-- Video de fondo - Solo carga en desktop (NO en móviles para ahorrar datos) -->
        <div class="hero-slider">
            <div class="hero-slide active">
                <script>
                    // Detectar si es dispositivo móvil
                    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || window.innerWidth < 768;
                    
                        if (typeof isMobile !== 'undefined' && !isMobile) {
                            document.write(
                                '<video autoplay muted loop playsinline class="hero-video" poster="data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 1920 1080\'%3E%3Crect fill=\'%231c1c1c\' width=\'1920\' height=\'1080\'/%3E%3C/svg%3E">' +
                                '<source src="{{ asset("public/video/portada-home.mp4") }}" type="video/mp4">' +
                                '</video>'
                            );
                        }
                </script>
            </div>
        </div>
    </section>

    <!-- Estilos para Tours y Carrusel -->
    <style>
        .tours-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 20px 0;
        }
        .tour-card {
            background: #1a1a1a;
            border: 1px solid #333;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: none;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        .tour-card:hover {
            transform: translateY(-5px);
            border-color: #c9a227;
        }
        .tour-image {
            position: relative;
            height: 250px;
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
            position: absolute;
            top: 0;
            left: 0;
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
        .prev-btn { left: 10px; }
        .next-btn { right: 10px; }
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
        .dot.active { background: white; }
        .tour-badge {
            display: none;
        }
        .tour-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .tour-title {
            font-size: 20px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 10px;
            line-height: 1.3;
        }
        .tour-description {
            font-size: 14px;
            color: #ffffff;
            margin-bottom: 20px;
            line-height: 1.6;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex-grow: 1;
            text-shadow: 0 1px 2px rgba(0,0,0,0.5);
        }
        .tour-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #333;
            font-size: 13px;
            color: #999;
        }
        .detail { display: flex; align-items: center; gap: 8px; }
        .detail i { color: #c9a227; }
        .tour-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: transparent;
            color: #c9a227;
            border: 1px solid #c9a227;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .tour-btn:hover {
            background: #c9a227;
            color: #000;
            transform: translateY(-2px);
        }
    </style>

    <!-- Nueva Sección de Sobrevuelos -->
    <section class="sobrevuelos-section" style="padding: 80px 0; background-color: #0E0D0A;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div class="section-header" style="text-align: center; margin-bottom: 50px;">
                <h2 style="font-size: 32px; font-weight: 700; margin-bottom: 16px; color: #ffffff;">Sobrevuelos Exclusivos</h2>
                <p style="color: #cccccc;">Descubre los tesoros del Perú desde una perspectiva única</p>
                <div class="linea" style="width: 60px; height: 3px; background: #c9a227; margin: 10px auto;"></div>
            </div>

            <div class="tours-grid">
                <?php
                $tours_sobrevuelos = [
                    [
                        'title' => 'Expedición Sagrada: El Corazón de los Andes',
                        'description' => "<strong>Domine el horizonte en un viaje que lo tiene todo:</strong><br>Apu Ausangate, 4 Lagunas de Cristal, Valle Rojo y Vinicunca.",
                        'images' => [
                            '/img/sobrevuelos/vinicunca-mountain-1.webp',
                            '/img/sobrevuelos/vinicunca-mountain-2.webp',
                            '/img/sobrevuelos/vinicunca-mountain-3.webp',
                            '/img/sobrevuelos/vinicunca-mountain-4.webp'
                        ],
                        'duration' => '1h',
                        'pax' => 'Hasta 8 personas',
                        'location' => 'Cusco, Perú',
                        'badge' => 'Sobrevuelo',
                        'url' => '/' . app()->getLocale() . '/sobrevuelo/vinicunca-elite'
                    ],
                    [
                        'title' => 'Manu: El Corazón de la Amazonía',
                        'description' => "La conexión aérea definitiva hacia la biósfera del Manu, donde la selva virgen se encuentra con la precisión aeronáutica.",
                        'images' => [
                            '/img/sobrevuelos/aerodromo-boca-manu-puerta-entrada-amazonia.webp',
                            '/img/sobrevuelos/bosque-tropical-reserva-biosfera-manu-peru.webp',
                            '/img/sobrevuelos/paisaje-aereo-panoramico-parque-nacional-manu.webp',
                            '/img/sobrevuelos/vista-aerea-boca-manu-confluencia-rios.webp'
                        ],
                        'duration' => '40 min',
                        'pax' => __('common.up_to') . ' 9 ' . __('common.people'),
                        'location' => 'Manu, Perú',
                        'badge' => __('common.overflight'),
                        'url' => '/' . app()->getLocale() . '/sobrevuelo/boca-manu'
                    ],
                    [
                        'title' => 'Cusco – Nazca: La Conexión de Élite',
                        'description' => "El único puente aéreo de alta gama que une los dos legados más grandes del Perú con precisión absoluta.",
                        'images' => [
                            '/img/sobrevuelos/nazca-lines-1.webp',
                            '/img/sobrevuelos/nazca-lines-2.webp',
                            '/img/sobrevuelos/nazca-lines-3.webp',
                            '/img/sobrevuelos/nazca-lines-4.webp'
                        ],
                        'duration' => '1h 20m',
                        'pax' => __('common.up_to') . ' 8 ' . __('common.people'),
                        'location' => 'Ica, Perú',
                        'badge' => __('common.overflight'),
                        'url' => '/' . app()->getLocale() . '/sobrevuelo/nazca-lines'
                    ],
                    [
                        'title' => 'Lago Titicaca: El Eje de los Andes',
                        'description' => "Una Travesía de Prestigio del Cusco al Altiplano. La integración definitiva de los destinos más emblemáticos.",
                        'images' => [
                            '/img/sobrevuelos/titicaca-lake-1.webp',
                            '/img/sobrevuelos/titicaca-lake-2.webp',
                            '/img/sobrevuelos/titicaca-lake-3.webp',
                            '/img/sobrevuelos/titicaca-lake-4.webp'
                        ],
                        'duration' => '1h 40m',
                        'pax' => __('common.up_to') . ' 8 ' . __('common.people'),
                        'location' => 'Puno, Perú',
                        'badge' => __('common.overflight'),
                        'url' => '/' . app()->getLocale() . '/sobrevuelo/titicaca-lake'
                    ],
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
                        'pax' => __('common.up_to') . ' 8 ' . __('common.people'),
                        'location' => 'Cusco, Perú',
                        'badge' => __('common.overflight'),
                        'url' => '/' . app()->getLocale() . '/sobrevuelo/choquequirao'
                    ],
                    [
                        'title' => 'Valle Sagrado y maras',
                        'description' => __('services.overflights.sacred_valley.desc', ['default' => 'Descubre Sacsayhuamán, Tambomachay, Pisac, Valle Sagrado, Maras y Laguna de Huaypo desde las alturas.']),
                        'images' => [
                            '/img/sobrevuelos/sacred-valley-1.webp',
                            '/img/sobrevuelos/sacred-valley-2.webp',
                            '/img/sobrevuelos/sacred-valley-3.webp',
                            '/img/sobrevuelos/sacred-valley-4.webp'
                        ],
                        'duration' => '1h',
                        'pax' => 'Hasta 8 personas',
                        'location' => 'Cusco, Perú',
                        'badge' => 'Sobrevuelo',
                        'url' => '/' . app()->getLocale() . '/sobrevuelo/valle-maras'
                    ]
                ];

                foreach ($tours_sobrevuelos as $index => $tour): 
                ?>
                <article class="tour-card" data-category="sobrevuelo">
                    <div class="tour-image">
                        <div class="carousel-container" id="home-carousel-<?= $index ?>">
                            <?php foreach ($tour['images'] as $imgIndex => $imgSrc): ?>
                            <div class="carousel-slide <?= $imgIndex === 0 ? 'active' : '' ?>">
                                <img src="<?= $imgSrc ?>" alt="<?= $tour['title'] ?>" loading="lazy">
                            </div>
                            <?php endforeach; ?>
                            
                            <button class="carousel-btn prev-btn" onclick="moveHomeSlide(<?= $index ?>, -1, event)">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="carousel-btn next-btn" onclick="moveHomeSlide(<?= $index ?>, 1, event)">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                            
                            <div class="carousel-dots">
                                <?php foreach ($tour['images'] as $imgIndex => $imgSrc): ?>
                                <span class="dot <?= $imgIndex === 0 ? 'active' : '' ?>" onclick="setHomeSlide(<?= $index ?>, <?= $imgIndex ?>, event)"></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="tour-overlay">
                            <!-- Badge eliminado -->
                        </div>
                    </div>
                    <div class="tour-content">
                        <h2 class="tour-title"><?= $tour['title'] ?></h2>
                        <p class="tour-description"><?= $tour['description'] ?></p>
                        <div class="tour-details">
                            <div class="detail"><i class="fas fa-clock"></i> <span><?= $tour['duration'] ?></span></div>
                            <div class="detail"><i class="fas fa-users"></i> <span><?= $tour['pax'] ?></span></div>
                        </div>
                        <a href="<?= $tour['url'] ?>" class="tour-btn">
                            <span>{{ __('common.button.learn_more') }}</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Scripts del Carrusel Home -->
    <script>
        function moveHomeSlide(tourIndex, step, event) {
            if(event) event.preventDefault();
            const container = document.getElementById(`home-carousel-${tourIndex}`);
            const slides = container.getElementsByClassName('carousel-slide');
            const dots = container.getElementsByClassName('dot');
            let activeIndex = 0;
            
            for(let i=0; i<slides.length; i++) {
                if(slides[i].classList.contains('active')) {
                    activeIndex = i;
                    break;
                }
            }
            
            let newIndex = (activeIndex + step + slides.length) % slides.length;
            
            slides[activeIndex].classList.remove('active');
            dots[activeIndex].classList.remove('active');
            
            slides[newIndex].classList.add('active');
            dots[newIndex].classList.add('active');
        }

        function setHomeSlide(tourIndex, slideIndex, event) {
            if(event) event.preventDefault();
            const container = document.getElementById(`home-carousel-${tourIndex}`);
            const slides = container.getElementsByClassName('carousel-slide');
            const dots = container.getElementsByClassName('dot');
            
            for(let i=0; i<slides.length; i++) {
                slides[i].classList.remove('active');
                dots[i].classList.remove('active');
            }
            
            slides[slideIndex].classList.add('active');
            dots[slideIndex].classList.add('active');
        }
    </script>

    
    <!-- Tours Section -->
    <section class="tours-section">
        <div class="tours-container">
            <div class="tours-header">
                <h2 style="font-size:32px; font-weight:700; margin-bottom:16px;"> <?= $h1_3 ?> </h2>
                <p> <?= $p1_2 ?> </p>
            </div>
            <!-- Sección Acordeón Diagonal de Destinos -->
            <section class="destinos-accordion-section">
                <div class="accordion-container">
                    <!-- Columna fija -->
                    <div class="accordion-sidebar">
                        <h2> <?= $h2_1 ?> </h2>
                    </div>

                    <!-- Acordeón -->
                    <div class="accordion-wrapper">
                        <div class="accordion-skewed">
                            <ul>
                                <li>
                                    <div class="accordion-content">
                                        <h3> <?= $h3_1 ?> </h3>
                                        <p> <?= $p_1 ?> </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-content">
                                        <h3> <?= $h3_2 ?> </h3>
                                        <p> <?= $p_2 ?> </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-content">
                                        <h3> <?= $h3_3 ?> </h3>
                                        <p> <?= $p_3 ?> </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-content">
                                        <h3> <?= $h3_4 ?> </h3>
                                        <p> <?= $p_4 ?> </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    
    <!-- Por qué elegirnos Section -->
    <section class="por-que-section" itemscope itemtype="https://schema.org/Service">
        <div class="por-que-container">
            <div class="por-que-header">
                <h2 itemprop="name" style="font-size:32px; font-weight:700; margin-bottom:16px;"><?= $h1_4 ?></h2>
                <p itemprop="description"><?= $p_5 ?></p>
                <div class="linea"></div>
            </div>
            
            <div class="por-que-grid">

                <!-- Card 1 -->
                <div class="por-que-card" itemscope itemtype="https://schema.org/Thing">
                    <div class="por-que-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" role="img" aria-label="<?= $h3_5 ?>" loading="lazy">
                            <circle cx="40" cy="40" r="35" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M25 40L35 50L55 30" stroke="#c9a227" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                        </svg>
                    </div>
                    <div class="por-que-content">
                        <h3 itemprop="name"><?= $h3_5 ?></h3>
                        <p itemprop="description"><?= $p_6 ?></p>
                        <div class="por-que-features">
                            <span class="feature-tag" itemprop="additionalType"><?= $span_1 ?></span>
                            <span class="feature-tag" itemprop="additionalType"><?= $span_2 ?></span>
                            <span class="feature-tag" itemprop="additionalType"><?= $span_3 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="por-que-card" itemscope itemtype="https://schema.org/Thing">
                    <div class="por-que-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" role="img" aria-label="<?= $h3_6 ?>" loading="lazy">
                            <circle cx="40" cy="40" r="35" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M30 25H50C52.5 25 55 27.5 55 30V50C55 52.5 52.5 55 50 55H30C27.5 55 25 52.5 25 50V30C25 27.5 27.5 25 30 25Z" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M35 35H45M35 40H45M35 45H40" stroke="#c9a227" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="40" cy="40" r="12" fill="#c9a227" opacity="0.1"/>
                        </svg>
                    </div>
                    <div class="por-que-content">
                        <h3 itemprop="name"><?= $h3_6 ?></h3>
                        <p itemprop="description"><?= $p_7 ?></p>
                        <div class="por-que-features">
                            <span class="feature-tag" itemprop="additionalType"><?= $span_4 ?></span>
                            <span class="feature-tag" itemprop="additionalType"><?= $span_5 ?></span>
                            <span class="feature-tag" itemprop="additionalType"><?= $span_6 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="por-que-card" itemscope itemtype="https://schema.org/Thing">
                    <div class="por-que-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" role="img" aria-label="<?= $h3_7 ?>" loading="lazy">
                            <circle cx="40" cy="40" r="35" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M25 45C25 35 32 25 40 25C48 25 55 35 55 45" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M30 50C30 47 32 45 35 45H45C48 45 50 47 50 50V55H30V50Z" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <circle cx="40" cy="35" r="6" stroke="#c9a227" stroke-width="2" fill="none"/>
                            <circle cx="40" cy="40" r="15" fill="#c9a227" opacity="0.1"/>
                        </svg>
                    </div>
                    <div class="por-que-content">
                        <h3 itemprop="name"><?= $h3_7 ?></h3>
                        <p itemprop="description"><?= $p_8 ?></p>
                        <div class="por-que-features">
                            <span class="feature-tag" itemprop="additionalType"><?= $span_7 ?></span>
                            <span class="feature-tag" itemprop="additionalType"><?= $span_8 ?></span>
                            <span class="feature-tag" itemprop="additionalType"><?= $span_9 ?></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- JSON-LD comprimido para SEO y rich snippets -->
    <script type="application/ld+json">
        {
            "@context":"https://schema.org",
            "@type":"Service",
            "name":"<?= $h1_4 ?>",
            "description":"<?= $p_5 ?>",
            "provider":{"@type":"Organization","name":"Nombre de tu empresa"},
            "hasOfferCatalog":{
                "@type":"OfferCatalog",
                "name":"Por qué elegirnos",
                "itemListElement":[
                {"@type":"Offer","itemOffered":{"@type":"Service","name":"<?= $h3_5 ?>","description":"<?= $p_6 ?>","image":"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 80'><circle cx='40' cy='40' r='35' stroke='%23c9a227' stroke-width='3' fill='none'/><path d='M25 40L35 50L55 30' stroke='%23c9a227' stroke-width='4' stroke-linecap='round' stroke-linejoin='round'/><circle cx='40' cy='40' r='8' fill='%23c9a227' opacity='0.3'/></svg>","additionalType":["<?= $span_1 ?>","<?= $span_2 ?>","<?= $span_3 ?>"]}},
                {"@type":"Offer","itemOffered":{"@type":"Service","name":"<?= $h3_6 ?>","description":"<?= $p_7 ?>","image":"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 80'><circle cx='40' cy='40' r='35' stroke='%23c9a227' stroke-width='3' fill='none'/><path d='M30 25H50C52.5 25 55 27.5 55 30V50C55 52.5 52.5 55 50 55H30C27.5 55 25 52.5 25 50V30C25 27.5 27.5 25 30 25Z' stroke='%23c9a227' stroke-width='3' fill='none'/><path d='M35 35H45M35 40H45M35 45H40' stroke='%23c9a227' stroke-width='2' stroke-linecap='round'/><circle cx='40' cy='40' r='12' fill='%23c9a227' opacity='0.1'/></svg>","additionalType":["<?= $span_4 ?>","<?= $span_5 ?>","<?= $span_6 ?>"]}},
                {"@type":"Offer","itemOffered":{"@type":"Service","name":"<?= $h3_7 ?>","description":"<?= $p_8 ?>","image":"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 80'><circle cx='40' cy='40' r='35' stroke='%23c9a227' stroke-width='3' fill='none'/><path d='M25 45C25 35 32 25 40 25C48 25 55 35 55 45' stroke='%23c9a227' stroke-width='3' fill='none'/><path d='M30 50C30 47 32 45 35 45H45C48 45 50 47 50 50V55H30V50Z' stroke='%23c9a227' stroke-width='3' fill='none'/><circle cx='40' cy='35' r='6' stroke='%23c9a227' stroke-width='2' fill='none'/><circle cx='40' cy='40' r='15' fill='%23c9a227' opacity='0.1'/></svg>","additionalType":["<?= $span_7 ?>","<?= $span_8 ?>","<?= $span_9 ?>"]}}
                ]
            }
        }
    </script>
    <!-- Testimonios Section -->
    <section class="testimonios-section">
        <div class="testimonios-container">
            <div class="testimonios-header">
                <h2 style="font-size:32px; font-weight:700; margin-bottom:16px;"><?= $h1_5 ?></h2>
                <p><?= $p_9 ?></p>
                <div class="linea"></div>
            </div>

            <div class="testimonios-grid">

                <!-- Testimonio 1 -->
                <div class="testimonio-card" itemscope itemtype="https://schema.org/Review">
                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Aerolínea del Sur">
                        <meta itemprop="address" content="Cusco, Perú">
                    </div>
                    <div class="testimonio-rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                    </div>
                    <p class="testimonio-text" itemprop="reviewBody"><?= $p_10 ?></p>
                    <div class="testimonio-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <div class="author-avatar">
                            <img 
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23c9a227'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3EMA%3C/text%3E%3C/svg%3E" 
                                alt="Avatar de María Alejandra, cliente de Aerolínea del Sur"
                                title="Testimonio de María Alejandra"
                                itemprop="image"
                                loading="lazy"
                            >
                        </div>
                        <div class="author-info">
                            <h3 itemprop="name" style="font-size:18px; font-weight:600; margin:0;"><?= $h4_1 ?></h3>
                            <span><?= $span_10 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 2 -->
                <div class="testimonio-card" itemscope itemtype="https://schema.org/Review">
                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Aerolínea del Sur">
                    </div>
                    <div class="testimonio-rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                    </div>
                    <p class="testimonio-text" itemprop="reviewBody"><?= $p_11 ?></p>
                    <div class="testimonio-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <div class="author-avatar">
                            <img 
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23800020'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3ECR%3C/text%3E%3C/svg%3E" 
                                alt="Avatar de Carlos Rodríguez, cliente de Aerolínea del Sur"
                                title="Testimonio de Carlos Rodríguez"
                                itemprop="image"
                                loading="lazy"
                            >
                        </div>
                        <div class="author-info">
                            <h3 itemprop="name" style="font-size:18px; font-weight:600; margin:0;"><?= $h4_2 ?></h3>
                            <span><?= $span_11 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 3 -->
                <div class="testimonio-card" itemscope itemtype="https://schema.org/Review">
                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Aerolínea del Sur">
                    </div>
                    <div class="testimonio-rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                    </div>
                    <p class="testimonio-text" itemprop="reviewBody"><?= $p_12 ?></p>
                    <div class="testimonio-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <div class="author-avatar">
                            <img 
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23c9a227'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3EAM%3C/text%3E%3C/svg%3E" 
                                alt="Avatar de Ana Martínez, cliente de Aerolínea del Sur"
                                title="Testimonio de Ana Martínez"
                                itemprop="image"
                                loading="lazy"
                            >
                        </div>
                        <div class="author-info">
                            <h3 itemprop="name" style="font-size:18px; font-weight:600; margin:0;"><?= $h4_3 ?></h3>
                            <span><?= $span_12 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 4 -->
                <div class="testimonio-card" itemscope itemtype="https://schema.org/Review">
                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Aerolínea del Sur">
                    </div>
                    <div class="testimonio-rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                    </div>
                    <p class="testimonio-text" itemprop="reviewBody"><?= $p_13 ?></p>
                    <div class="testimonio-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <div class="author-avatar">
                            <img 
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23800020'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3EJL%3C/text%3E%3C/svg%3E" 
                                alt="Avatar de Jorge López, cliente de Aerolínea del Sur"
                                title="Testimonio de Jorge López"
                                itemprop="image"
                                loading="lazy"
                            >
                        </div>
                        <div class="author-info">
                            <h4 itemprop="name"><?= $h4_4 ?></h4>
                            <span><?= $span_13 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 5 -->
                <div class="testimonio-card" itemscope itemtype="https://schema.org/Review">
                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Aerolínea del Sur">
                    </div>
                    <div class="testimonio-rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                    </div>
                    <p class="testimonio-text" itemprop="reviewBody"><?= $p_14 ?></p>
                    <div class="testimonio-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <div class="author-avatar">
                            <img 
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23c9a227'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3ELS%3C/text%3E%3C/svg%3E" 
                                alt="Avatar de Lucía Silva, cliente de Aerolínea del Sur"
                                title="Testimonio de Lucía Silva"
                                itemprop="image"
                                loading="lazy"
                            >
                        </div>
                        <div class="author-info">
                            <h4 itemprop="name"><?= $h4_5 ?></h4>
                            <span><?= $span_14 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 6 -->
                <div class="testimonio-card" itemscope itemtype="https://schema.org/Review">
                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Aerolínea del Sur">
                    </div>
                    <div class="testimonio-rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                    </div>
                    <p class="testimonio-text" itemprop="reviewBody"><?= $p_15 ?></p>
                    <div class="testimonio-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <div class="author-avatar">
                            <img 
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23800020'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3ERH%3C/text%3E%3C/svg%3E" 
                                alt="Avatar de Roberto Herrera, cliente de Aerolínea del Sur"
                                title="Testimonio de Roberto Herrera"
                                itemprop="image"
                                loading="lazy"
                            >
                        </div>
                        <div class="author-info">
                            <h4 itemprop="name"><?= $h4_6 ?></h4>
                            <span><?= $span_15 ?></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="testimonios-stats" itemscope itemtype="https://schema.org/AggregateRating">
                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                    <meta itemprop="name" content="Aerolínea del Sur">
                    <meta itemprop="address" content="Cusco, Perú">
                </div>
                <div class="stat-item">
                    <div class="stat-number" itemprop="ratingValue">4.9</div>
                    <div class="stat-label">Calificación promedio</div>
                    <div class="stat-stars">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                    </div>
                    <meta itemprop="bestRating" content="5">
                </div>
                <div class="stat-item">
                    <div class="stat-number" itemprop="ratingCount">2847</div>
                    <div class="stat-label">Reseñas verificadas</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Clientes satisfechos</div>
                </div>
            </div>
        </div>
    </section>
    <!-- JSON-LD de todos los testimonios -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Aerolínea del Sur",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "bestRating": "5",
                "reviewCount": "2847"
            },
            "review": [
                {"@type":"Review","author":{"@type":"Person","name":"<?= $h4_1 ?>"},"reviewBody":"<?= $p_10 ?>","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"}},
                {"@type":"Review","author":{"@type":"Person","name":"<?= $h4_2 ?>"},"reviewBody":"<?= $p_11 ?>","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"}},
                {"@type":"Review","author":{"@type":"Person","name":"<?= $h4_3 ?>"},"reviewBody":"<?= $p_12 ?>","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"}},
                {"@type":"Review","author":{"@type":"Person","name":"<?= $h4_4 ?>"},"reviewBody":"<?= $p_13 ?>","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"}},
                {"@type":"Review","author":{"@type":"Person","name":"<?= $h4_5 ?>"},"reviewBody":"<?= $p_14 ?>","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"}},
                {"@type":"Review","author":{"@type":"Person","name":"<?= $h4_6 ?>"},"reviewBody":"<?= $p_15 ?>","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"}}
            ]
        }
    </script>

    <!-- Certificaciones Section -->
    <section class="certificaciones-section">
        <div class="certificaciones-container">
            <div class="certificaciones-header">
                <h2 style="font-size:32px; font-weight:700; margin-bottom:16px;"> <?= $h1_6 ?> </h2>
                <p> <?= $p_16 ?> </p>
                <div class="linea"></div>
            </div>

            <div class="certificaciones-slider">
                <div class="certificaciones-viewport">
                    <div class="certificaciones-track" id="cert-track">
                        <!-- Certificación 1 - Gercetur -->
                        <figure class="certification-item" data-cert="gercetur">
                            <img
                                src="{{ asset('img/certificados/Gercetur.webp') }}"
                                alt="Certificación oficial Gercetur otorgada a la agencia de turismo"
                                title="Certificación Gercetur"
                                loading="lazy"
                                decoding="async"
                                fetchpriority="low"
                                importance="low"
                                width="200"
                                height="200"
                                srcset="{{ asset('img/certificados/Gercetur.webp') }} 1x, {{ asset('img/certificados/Gercetur.webp') }} 2x"
                                sizes="(max-width: 600px) 120px, 200px"
                                data-original-src="{{ asset('img/certificados/Gercetur.webp') }}"
                            >
                        </figure>
                        <!-- JSON-LD: Certificación GERCETUR -->
                        <script type="application/ld+json">
                        {
                        "@context": "https://schema.org/",
                        "@type": "ImageObject",
                        "contentUrl": "{{ asset('img/certificados/Gercetur.webp') }}",
                        "creator": {
                            "@type": "Organization",
                            "name": "Gobierno Regional del Cusco - GERCETUR"
                        },
                        "creditText": "Logo oficial de GERCETUR",
                        "caption": "Certificación turística oficial GERCETUR otorgada a la empresa.",
                        "datePublished": "2025-11-14"
                        }
                        </script>

                        <!-- Certificación 2 - MTC -->
                        <figure class="certification-item" data-cert="mtc">
                            <img
                                src="{{ asset('img/certificados/Mtc.webp') }}"
                                alt="Certificación MTC otorgada por el Ministerio de Transportes y Comunicaciones"
                                title="Certificación MTC"
                                loading="lazy"
                                decoding="async"
                                fetchpriority="low"
                                importance="low"
                                width="200"
                                height="200"
                                srcset="{{ asset('img/certificados/Mtc.webp') }} 1x, {{ asset('img/certificados/Mtc.webp') }} 2x"
                                sizes="(max-width: 600px) 120px, 200px"
                                data-original-src="{{ asset('img/certificados/Mtc.webp') }}"
                            >
                        </figure>
                        <!-- JSON-LD: Certificación MTC -->
                        <script type="application/ld+json">
                        {
                        "@context": "https://schema.org/",
                        "@type": "ImageObject",
                        "contentUrl": "{{ asset('img/certificados/Mtc.webp') }}",
                        "creator": {
                            "@type": "Organization",
                            "name": "Ministerio de Transportes y Comunicaciones del Perú"
                        },
                        "creditText": "Logo oficial del MTC",
                        "caption": "Certificación del Ministerio de Transportes y Comunicaciones del Perú.",
                        "datePublished": "2025-11-14"
                        }
                        </script>

                        <!-- Certificación 3 - DGAC -->
                        <figure class="certification-item" data-cert="dgac">
                            <img
                                src="{{ asset('img/certificados/Dgac.webp') }}"
                                alt="Certificación DGAC emitida por la Dirección General de Aeronáutica Civil"
                                title="Certificación DGAC"
                                loading="lazy"
                                decoding="async"
                                fetchpriority="low"
                                importance="low"
                                width="200"
                                height="200"
                                srcset="{{ asset('img/certificados/Dgac.webp') }} 1x, {{ asset('img/certificados/Dgac.webp') }} 2x"
                                sizes="(max-width: 600px) 120px, 200px"
                                data-original-src="{{ asset('img/certificados/Dgac.webp') }}"
                            >
                        </figure>
                        <!-- JSON-LD: Certificación DGAC -->
                        <script type="application/ld+json">
                        {
                        "@context": "https://schema.org/",
                        "@type": "ImageObject",
                        "contentUrl": "{{ asset('img/certificados/Dgac.webp') }}",
                        "creator": {
                            "@type": "Organization",
                            "name": "Dirección General de Aeronáutica Civil del Perú"
                        },
                        "creditText": "Logo oficial de la DGAC",
                        "caption": "Certificación otorgada por la Dirección General de Aeronáutica Civil del Perú.",
                        "datePublished": "2025-11-14"
                        }
                        </script>
                        <!-- Certificación 4 - IMH -->
                        <figure class="certification-item" data-cert="imh">
                            <img
                                src="{{ asset('img/certificados/Imh.webp') }}"
                                alt="Certificación IMH que valida estándares en manejo aeronáutico"
                                title="Certificación IMH"
                                loading="lazy"
                                decoding="async"
                                fetchpriority="low"
                                importance="low"
                                width="200"
                                height="200"
                                srcset="{{ asset('img/certificados/Imh.webp') }} 1x, {{ asset('img/certificados/Imh.webp') }} 2x"
                                sizes="(max-width: 600px) 120px, 200px"
                                data-original-src="{{ asset('img/certificados/Imh.webp') }}"
                            >
                        </figure>
                        <!-- JSON-LD: Certificación IMH -->
                        <script type="application/ld+json">
                        {
                        "@context": "https://schema.org/",
                        "@type": "ImageObject",
                        "contentUrl": "{{ asset('img/certificados/Imh.webp') }}",
                        "creator": {
                            "@type": "Organization",
                            "name": "Instituto Nacional de Metrología del Perú"
                        },
                        "creditText": "Logo oficial del IMH",
                        "caption": "Certificación oficial del Instituto Nacional de Metrología del Perú.",
                        "datePublished": "2025-11-14"
                        }
                        </script>

                    </div>
                </div>
            </div>

            <div class="cert-pagination" id="cert-pagination">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>
    
    <!-- Cert Aero Section -->
    <section class="cert-aero-section" style="padding: 60px 0; background-color: #0E0D0A; text-align: center;">
        <div class="cert-aero-container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: center; align-items: center;">
            <img 
                src="{{ asset('img/cert-aero.webp') }}" 
                alt="Certificaciones Aerolinea del Sur" 
                style="max-width: 100%; height: auto; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);"
                loading="lazy"
            >
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <!-- Header -->
            <div class="faq-header">
                <h2 style="font-size:32px; font-weight:700; margin-bottom:16px;"><?= $h1_7 ?></h2>
                <p class="p"><?= $p_17 ?></p>
            </div>

            <div class="faq-grid">

            <!-- FAQ Ítem 1 -->
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq1">
                    <span class="faq-text"><?= $h3_8 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq1">
                    <p class="p"><?= $p_18 ?></p>
                </div>
            </div>

            <!-- FAQ Ítem 2 -->
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq2">
                    <span class="faq-text"><?= $h3_9 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq2">
                    <p class="p"><?= $p_19 ?></p>
                </div>
            </div>

            <!-- FAQ Ítem 3 -->
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq3">
                    <span class="faq-text"><?= $h3_10 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq3">
                    <p class="p"><?= $p_20 ?></p>
                </div>
            </div>

            <!-- FAQ Ítem 4 -->
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq4">
                    <span class="faq-text"><?= $h3_11 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq4">
                    <p class="p"><?= $p_21 ?></p>
                </div>
            </div>

            <!-- FAQ Ítem 5 -->
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq5">
                    <span class="faq-text"><?= $h3_12 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq5">
                    <p class="p"><?= $p_22 ?></p>
                </div>
            </div>
            
            <script type="application/ld+json">
                {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [
                    {
                    "@type": "Question",
                    "name": "<?= $h3_8 ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?= $p_18 ?>"
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "<?= $h3_9 ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?= $p_19 ?>"
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "<?= $h3_10 ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?= $p_20 ?>"
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "<?= $h3_11 ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?= $p_21 ?>"
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "<?= $h3_12 ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?= $p_22 ?>"
                    }
                    }
                ]
                }
            </script>

            <!-- Contact Section -->
            <div class="contact-section">
                <h2><?= $h2_2 ?></h2>
                <p class="p"><?= $p_23 ?></p>

                <div class="contact-buttons">
                    <a href="tel:+51944055408" class="contact-btn call-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 
                            19.79 19.79 0 0 1-8.63-3.07 
                            19.5 19.5 0 0 1-6-6 
                            19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72
                            12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27
                            a2 2 0 0 1 2.11-.45 
                            12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        Llamar Ahora
                    </a>
                </div>
            </div>
        </div>
    </section>
<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ================= FOOTER ACCORDION ================= */
    const footerTitles = document.querySelectorAll('.footer-title');

    footerTitles.forEach(title => {
        title.addEventListener('click', function () {
            if (window.innerWidth <= 480) {
                this.parentElement.classList.toggle('active');
            }
        });
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 480) {
            document.querySelectorAll('.footer-column.active')
                .forEach(col => col.classList.remove('active'));
        }
    });

    /* ================= FAQ ================= */
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        item.querySelector('.faq-question')
            .addEventListener('click', function () {

                const isActive = item.classList.contains('active');

                faqItems.forEach(i => i.classList.remove('active'));
                if (!isActive) item.classList.add('active');
            });
    });

    /* ================= HASH FAQ ================= */
    function handleHashNavigation() {
        const hash = window.location.hash;
        if (hash.startsWith('#faq-')) {
            const index = parseInt(hash.replace('#faq-', '')) - 1;
            if (faqItems[index]) {
                faqItems[index].classList.add('active');
                faqItems[index].scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    }

    handleHashNavigation();
    window.addEventListener('hashchange', handleHashNavigation);

    /* ================= CONTACT BUTTONS ================= */
    document.querySelectorAll('.contact-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const type = this.classList.contains('whatsapp-btn') ? 'WhatsApp' : 'Phone';
            // analytics
        });
    });

    /* ================= FAQ ANIMATION ================= */
    const faqSection = document.querySelector('.faq-section');
    if (faqSection) {
        faqSection.style.opacity = '0';
        faqSection.style.transform = 'translateY(20px)';
        faqSection.style.transition = 'opacity 0.6s ease, transform 0.6s ease';

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        observer.observe(faqSection);
    }

});
</script>


<script>
    // Slider de Certificaciones - Versión Simple
    class CertificationSlider {
        constructor() {
            this.currentSlide = 0;
            this.totalSlides = document.querySelectorAll('.certification-item').length;
            this.slidesToShow = this.getSlidesToShow();
            this.maxSlide = Math.max((0, this.totalSlides - this.slidesToShow)-1);
            this.isTransitioning = false;
            this.init();
        }

        getSlidesToShow() {
            const width = window.innerWidth;
            if (width <= 480) return 2;
            if (width <= 768) return 3;
            if (width <= 1024) return 4;
            return 5;
        }

        init() {
            this.createPagination();
            this.updateSlider();
            this.bindEvents();
        }

        createPagination() {
            const pagination = document.querySelector('.cert-pagination');
            if (!pagination) return;
            
            pagination.innerHTML = '';
            const totalPages = this.maxSlide + 1;
            
            for (let i = 0; i <= this.maxSlide; i++) {
                const dot = document.createElement('div');
                dot.className = 'dot';
                if (i === this.currentSlide) {
                    dot.classList.add('active');
                }
                dot.addEventListener('click', () => this.goToSlide(i));
                pagination.appendChild(dot);
            }
        }

        updateSlider() {
            const track = document.querySelector('.certificaciones-track');
            if (!track) return;
            
            const itemWidth = 210; // 160px + 50px margin
            const translateX = -this.currentSlide * itemWidth;
            track.style.transform = `translateX(${translateX}px)`;
            
            // Update pagination
            const dots = document.querySelectorAll('.cert-pagination .dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentSlide);
            });
        }

        goToSlide(slideIndex) {
            if (this.isTransitioning) return;
            
            this.currentSlide = Math.max(0, Math.min(slideIndex, this.maxSlide));
            this.updateSlider();
        }

        nextSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentSlide = Math.min(this.currentSlide + 1, this.maxSlide);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 400);
        }

        prevSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentSlide = Math.max(this.currentSlide - 1, 0);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 400);
        }

        bindEvents() {
            // Handle window resize
            window.addEventListener('resize', () => {
                this.slidesToShow = this.getSlidesToShow();
                this.maxSlide = Math.max(0, this.totalSlides - this.slidesToShow);
                this.currentSlide = Math.min(this.currentSlide, this.maxSlide);
                this.createPagination();
                this.updateSlider();
            });
        }
    }

    // Slider de Tours - Versión Simple
    class ToursSlider {
        constructor() {
            this.slider = document.getElementById('tours-slider');
            this.pagination = document.getElementById('tours-pagination');
            this.cards = this.slider ? this.slider.children : [];
            this.totalCards = this.cards.length;
            this.currentIndex = 0;
            this.slidesToShow = this.getSlidesToShow();
            this.maxIndex = Math.max(0, this.totalCards - this.slidesToShow);
            this.isTransitioning = false;
            
            if (this.slider && this.totalCards > 0) {
                this.init();
            }
        }
        
        getSlidesToShow() {
            const width = window.innerWidth;
            if (width <= 480) return 1;
            if (width <= 768) return 1;
            if (width <= 1024) return 2;
            return 3;
        }
        
        init() {
            this.createPagination();
            this.updateSlider();
            this.bindEvents();
        }
        
        createPagination() {
            if (!this.pagination) return;
            
            this.pagination.innerHTML = '';
            
            for (let i = 0; i <= this.maxIndex; i++) {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                if (i === this.currentIndex) {
                    dot.classList.add('active');
                }
                dot.addEventListener('click', () => this.goToSlide(i));
                this.pagination.appendChild(dot);
            }
        }
        
        updateSlider() {
            if (!this.slider || this.isTransitioning) return;
            
            // Responsive card width calculation
            const width = window.innerWidth;
            let cardWidth, margin;
            
            if (width <= 360) {
                cardWidth = 220;
                margin = 20;
            } else if (width <= 480) {
                cardWidth = 250;
                margin = 24;
            } else if (width <= 768) {
                cardWidth = 280;
                margin = 30;
            } else if (width <= 1024) {
                cardWidth = 320;
                margin = 36;
            } else if (width <= 1200) {
                cardWidth = 340;
                margin = 40;
            } else {
                cardWidth = 370;
                margin = 50;
            }
            
            const totalCardWidth = cardWidth + margin;
            const translateX = -this.currentIndex * totalCardWidth;
            this.slider.style.transform = `translateX(${translateX}px)`;
            
            // Update pagination
            const dots = this.pagination ? this.pagination.querySelectorAll('.dot') : [];
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentIndex);
            });
        }
        
        goToSlide(slideIndex) {
            if (this.isTransitioning) return;
            
            this.currentIndex = Math.max(0, Math.min(slideIndex, this.maxIndex));
            this.updateSlider();
        }
        
        nextSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentIndex = Math.min(this.currentIndex + 1, this.maxIndex);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 600);
        }
        
        prevSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentIndex = Math.max(this.currentIndex - 1, 0);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 600);
        }
        
        bindEvents() {
            // Handle window resize
            window.addEventListener('resize', () => {
                this.slidesToShow = this.getSlidesToShow();
                this.maxIndex = Math.max(0, this.totalCards - this.slidesToShow);
                this.currentIndex = Math.min(this.currentIndex, this.maxIndex);
                this.createPagination();
                this.updateSlider();
            });
        }
    }

    // Función para actualizar las imágenes de certificaciones
    function updateCertificationImages(imageMap) {
        Object.keys(imageMap).forEach(certKey => {
            const certItem = document.querySelector(`[data-cert="${certKey}"]`);
            if (certItem) {
                const img = certItem.querySelector('img');
                if (img && imageMap[certKey]) {
                    img.src = imageMap[certKey];
                    img.removeAttribute('data-original-src');
                }
            }
        });
    }

    // Inicializar sliders cuando el DOM esté listo
    document.addEventListener('DOMContentLoaded', function() {
        new CertificationSlider();
        new ToursSlider();
    });
        // Función para toggle de FAQ
        function toggleFAQ(button) {
            const answer = button.nextElementSibling;
            const icon = button.querySelector('.faq-icon');
            
            // Cerrar otras FAQs abiertas
            document.querySelectorAll('.faq-question').forEach(q => {
                if (q !== button) {
                    q.classList.remove('active');
                    q.nextElementSibling.classList.remove('active');
                    q.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
                }
            });
            
            // Toggle FAQ actual
            button.classList.toggle('active');
            answer.classList.toggle('active');
            
            if (button.classList.contains('active')) {
                icon.style.transform = 'rotate(45deg)';
            } else {
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Animaciones al hacer scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll');
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('animate');
                }
            });
        }

        // Event listeners
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);

        // Smooth scroll para enlaces internos
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

        // Efecto parallax suave para el hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroSlider = document.querySelector('.hero-slider');
            if (heroSlider) {
                heroSlider.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        });
</script>
@endsection
