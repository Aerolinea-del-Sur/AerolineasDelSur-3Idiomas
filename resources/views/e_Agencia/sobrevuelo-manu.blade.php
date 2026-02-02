@php
    /*
    $tour_name = 'Boca Manu';
    $seo = seo()
        ->title('Sobrevuelo al Parque Nacional del Manu - Aerolíneas del Sur')
        ->description('Explora la selva del Manu desde el aire. Una experiencia única sobrevolando la Amazonía peruana, ríos y biodiversidad.')
        ->keywords(['sobrevuelo manu', 'tour aéreo manu', 'selva peruana vuelo', 'parque nacional manu helicoptero'])
        ->image(asset('img/tours/manu-general.jpg'))
        ->canonical(url(app()->getLocale() . '/sobrevuelo/manu'))
        ->addSchema([
            '@context' => 'https://schema.org',
            '@type' => 'TouristAttraction',
            'name' => 'Sobrevuelo Parque Nacional del Manu'
        ]);
    */
@endphp

@extends('a_EncabezadoFooter.princi')
{{-- 
@push('seo')
        {!! $seo !!}
@endpush
--}}

@section('content')

    <?php
    $h1_1 = 'Vuelos Chárter y Logística Directa a Boca Manu:';
    $p_1 = 'El Corazón de la Amazonía.';

    $h2_1 = __('tours.tour_details');
    $p_2 = 'En Aerolínea del Sur, lideramos la conexión aérea hacia la biósfera del Manu. Contamos con operaciones certificadas bajo la normativa RAP 135, garantizando los más altos estándares de seguridad y eficiencia en cada aterrizaje. Nuestro servicio de vuelos chárter a Boca Manu ofrece una solución logística rápida y confiable para turismo especializado y proyectos estratégicos, uniendo la comodidad con la precisión técnica que solo nuestra flota puede ofrecer. Descubra la Amazonía con la aerolínea que domina las rutas más exigentes del Perú';

    $h4_1 = __('tours.max_group');
    $p_3 = 'Hasta 9 pasajeros';

    $h4_2 = __('tours.min_age');
    $p_4 = '3 años';

    $h4_3 = __('tours.duration');
    $p_5 = '40 minutoss';

    $h3_1 = __('tours.image_gallery');

    $h2_2 = 'Resumen de la Experiencia';

    $h3_2 = 'Lo más destacado';

    $h4_4 = 'Biodiversidad Única';
    $p_6 = 'Observa el hogar de miles de especies de flora y fauna desde el aire.';

    $h4_5 = 'Ríos Amazónicos';
    $p_7 = 'Vistas impresionantes del Río Madre de Dios y sus afluentes.';

    $h4_6 = 'Bosque Virgen';
    $p_8 = 'Contempla la densa vegetación de una de las reservas más importantes del mundo.';

    $h3_3 = 'Estadísticas del Vuelo';

    $h2_3 = __('tours.nazca.itinerary_title');

    $h4_7 = 'Despegue desde Cusco';

    $h4_8 = 'Cruce de los Andes';

    $h4_9 = 'Ingreso a la Cuenca Amazónica';

    $h4_10 = 'Sobrevuelo Zona Cultural del Manu';

    $h4_11 = 'Avistamiento de Ríos y Selva Baja';

    $h4_12 = 'Retorno a Cusco';

    $h2_4 = __('tours.choquequirao.inclusions_title');

    $h3_4 = __('tours.choquequirao.included_title');
    $h3_5 = __('tours.choquequirao.notincluded_title');

    $h4_13 = __('tours.choquequirao.notes_title');

    $h2_5 = __('tours.choquequirao.recommended_title');

    $h4_14 = 'Líneas de Nazca';
    $p_17 = 'Descubre los misteriosos geoglifos desde el aire en este tour de 1 hora.';

    $h4_15 = 'Vuelo Amazónico';
    $p_18 = 'Explora la selva peruana desde las alturas y observa la biodiversidad única.';

    $h4_16 = 'Costa Peruana';
    $p_19 = 'Sobrevuela la hermosa costa del Pacífico y las islas Ballestas.';

    $h3_6 = __('tours.choquequirao.booking_title');

    $p_20 = __('tours.choquequirao.booking_note');

    $benefits = [
        [
            'title' => 'Seguridad Certificada',
            'desc' => 'Operaciones bajo normativa RAP 135, cumpliendo con los estándares de aviación civil más estrictos.'
        ],
        [
            'title' => 'Acceso Directo',
            'desc' => 'Aterrizamos en la pista de Boca Manu, ahorrándole horas de viaje fluvial y terrestre.'
        ],
        [
            'title' => 'Logística Especializada',
            'desc' => 'Expertos en el transporte de pasajeros, equipos científicos y carga hacia zonas remotas.'
        ],
        [
            'title' => 'Flexibilidad de Horarios',
            'desc' => 'Salidas programadas según sus necesidades desde Cusco y otros puntos estratégicos.'
        ],
        [
            'title' => 'Experiencia en la Ruta',
            'desc' => 'Pilotos con amplia trayectoria en las condiciones geográficas específicas de la selva peruana.'
        ]
    ];

    $note_operational = "En Aerolínea del Sur, nuestra capacidad operativa va más allá del vuelo. Al tener a nuestro cargo la administración y gestión en Boca Manu, aseguramos a nuestros clientes una experiencia logística fluida y sin contratiempos. Este control directo sobre la infraestructura en la selva nos permite ofrecer una eficiencia superior, facilitando el despliegue inmediato de recursos y garantizando que su llegada al corazón de la Amazonía sea gestionada bajo nuestros propios estándares de excelencia.";

    $h2_exclusive = "El Arte de Dominar la Amazonía: Su Acceso Privado a Boca Manu";
    $p_exclusive_1 = "Existen destinos que solo unos pocos logran conquistar con verdadera distinción. En Aerolínea del Sur, hemos convertido el acceso a la selva en una experiencia de absoluta precisión. Al ser los administradores exclusivos y gestores estratégicos de la infraestructura en Boca Manu, le otorgamos la llave de un territorio donde el tiempo y la seguridad son el mayor lujo.";
    $p_exclusive_2 = "Nuestra posición de liderazgo nos permite ofrecerle lo que nadie más posee: la prioridad absoluta sobre el destino. No dependemos de terceros; nosotros definimos el estándar. Al elegirnos, usted se asegura una transición impecable entre el cielo y la tierra, respaldada por autorizaciones oficiales y una logística propia que garantiza un despliegue sin demoras.";
    $p_exclusive_3 = "Permítase la tranquilidad de volar con quienes custodian y operan la puerta de entrada al Manu. Porque cuando la eficiencia es vital y la exclusividad es la norma, solo existe un camino directo.";
    ?>

    <link rel="stylesheet" href="{{ asset('public/css/paginas/agencia/1_TourGeneral.css') }}">
    <!-- Sección Hero -->
    <section class="tour-hero">
        <div class="hero-background">
            <img src="{{ asset('img/sobrevuelos/sacred-valley-1.webp') }}" alt="Parque Nacional del Manu desde el aire">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="tour-badges">
                <span class="badge popular">SOBREVUELO</span>
                <span class="badge exclusive">EXCLUSIVO</span>
            </div>
            <h1 class="tour-title"><?= $h1_1 ?></h1>
            <p class="tour-subtitle"><?= $p_1 ?></p>


            <div class="tour-meta">
                <div class="meta-item">
                    <i class="fas fa-clock"></i>
                    <span>40 minutos</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-users"></i>
                    <span>hasta 9 pasajeros</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-star"></i>
                    <span>5.0/5.0</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Detalles Generales -->
    <section class="tour-details">
        <div class="container">
            <div class="details-grid">
                <div class="details-content">
                    <h2 class="section-title"><?= $h2_1 ?></h2>
                    <p class="tour-description"><strong><?= $p_2 ?></p>
                    <div class="detail-items">
                        <div class="detail-item">
                            <i class="fas fa-users"></i>
                            <div>
                                <h4><?= $h4_1 ?></h4>
                                <p><?= $p_3 ?></p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4><?= $h4_3 ?></h4>
                                <p><?= $p_5 ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="operational-note" style="margin-top: 30px; padding: 25px; background-color: #fff8e1; border-left: 5px solid #ffc107; border-radius: 6px; box-shadow: 0 2px 15px rgba(0,0,0,0.05);">
                        <h4 style="color: #856404; margin-top: 0; margin-bottom: 15px; font-size: 1.1rem; display: flex; align-items: center;">
                            <i class="fas fa-plane-departure" style="margin-right: 10px;"></i> Excelencia Operativa
                        </h4>
                        <p style="margin: 0; color: #555; line-height: 1.7; font-size: 0.95rem;">
                            <?= $note_operational ?>
                        </p>
                    </div>
                </div>
                <div class="gallery-section">
                    <h3><?= $h3_1 ?></h3>
                    <div class="image-carousel">
                        <div class="carousel-container" id="carouselContainer">
                            <div class="carousel-slide active">
                                <img src="/img/tours/valle-sagrado-maras-1.webp" alt="Vista aérea del Parque del Manu">
                            </div>
                            <div class="carousel-slide">
                                <img src="/img/tours/valle-sagrado-maras-2.webp" alt="Selva del Manu desde el aire">
                            </div>
                            <div class="carousel-slide">
                                <img src="/img/tours/valle-sagrado-maras-3.webp" alt="Montañas y Selva">
                            </div>
                            <div class="carousel-slide">
                                <img src="/img/tours/valle-sagrado-maras-4.webp" alt="Ríos de la Amazonía">
                            </div>
                            <div class="carousel-slide">
                                <img src="/img/sobrevuelos/sobrevuelo-valle-sagrado.webp" alt="Sobrevuelo Manu">
                            </div>
                            <div class="carousel-slide">
                                <img src="/img/sobrevuelos/sobrevuelo-valle-sagrado-cusco.webp"
                                    alt="Sobrevuelo Manu Cusco">
                            </div>
                        </div>
                        <button class="carousel-btn prev" onclick="moveSlide(-1)">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="carousel-btn next" onclick="moveSlide(1)">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        <div class="carousel-indicators">
                            <span class="indicator active" onclick="currentSlide(1)"></span>
                            <span class="indicator" onclick="currentSlide(2)"></span>
                            <span class="indicator" onclick="currentSlide(3)"></span>
                            <span class="indicator" onclick="currentSlide(4)"></span>
                        </div>
                    </div>
                    
                    <div class="gallery-benefits" style="margin-top: 25px; background: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #0056b3;">
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <?php foreach ($benefits as $benefit): ?>
                            <li style="margin-bottom: 12px; display: flex; align-items: flex-start; color: #444;">
                                <i class="fas fa-check-circle" style="color: #28a745; margin-right: 12px; margin-top: 4px; font-size: 1.1em;"></i>
                                <span><strong style="color: #222;"><?= $benefit['title'] ?>:</strong> <?= $benefit['desc'] ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Exclusiva -->
    <section class="exclusive-access" style="padding: 60px 0; background-color: #1a1a1a; color: #fff; text-align: center;">
        <div class="container">
            <h2 style="font-size: 2.5rem; margin-bottom: 30px; color: #d4af37; font-family: 'Playfair Display', serif;"><?= $h2_exclusive ?></h2>
            <div style="max-width: 900px; margin: 0 auto; font-size: 1.1rem; line-height: 1.8; color: #e0e0e0;">
                <p style="margin-bottom: 20px;"><?= $p_exclusive_1 ?></p>
                <p style="margin-bottom: 20px;"><?= $p_exclusive_2 ?></p>
                <p style="margin: 0; font-style: italic; color: #fff;"><?= $p_exclusive_3 ?></p>
            </div>
        </div>
    </section>

    <!-- Inclusiones -->
    <section class="inclusions">
        <div class="container">
            <h2 class="section-title"><?= $h2_4 ?></h2>
            <div class="inclusions-grid">
                <div class="included">
                    <h3><i class="fas fa-check-circle"></i><?= $h3_4 ?></h3>
                    <ul>
                        <li><i class="fas fa-check"></i> <?= __('SEA (servicios aeroportuarios )') ?></li>
                        <li><i class="fas fa-check"></i> <?= __('TUA (Tarifa de Uso de Aeropuerto)') ?></li>
                    </ul>
                </div>
                <!-- Inclusiones
                <div class="not-included">
                    <h3><i class="fas fa-times-circle"></i><?= $h3_5 ?></h3>
                    <ul>
                        <li><i class="fas fa-times"></i> <?= __('tours.common.notincluded1') ?></li>
                        <li><i class="fas fa-times"></i> <?= __('tours.common.notincluded2') ?></li>
                        <li><i class="fas fa-times"></i> <?= __('tours.common.notincluded3') ?></li>
                    </ul>
                </div>-->
                <h4><i class="fas fa-exclamation-triangle"></i><?= $h4_13 ?></h4>
                <ul>
                    <li><?= __('tours.common.note1') ?></li>
                    <li><?= __('tours.common.note3') ?></li>
                </ul>
            </div>
            <div class="important-notes">
                <!-- Inclusiones
                <h4><i class="fas fa-exclamation-triangle"></i><?= $h4_13 ?></h4>
                <ul>
                    <li><?= __('tours.common.note1') ?></li>
                    <li><?= __('tours.common.note3') ?></li>
                </ul>-->
            </div>
        </div>
    </section>

    <!-- Sello de Confianza -->
    <section class="trust-seal" style="padding: 40px 0; background-color: #1a1a1a;">
        <div class="container">
            <div class="trust-box" style="background-color: #252525; padding: 40px; border-radius: 8px; text-align: center; border: 1px solid #333; max-width: 900px; margin: 0 auto; box-shadow: 0 4px 20px rgba(0,0,0,0.5);">
                <div class="trust-icons" style="margin-bottom: 25px; color: #d4af37; font-size: 2.2rem;">
                    <i class="fas fa-shield-alt" title="Seguridad" style="margin: 0 20px;"></i>
                    <i class="fas fa-clock" title="Eficiencia" style="margin: 0 20px;"></i>
                    <i class="fas fa-medal" title="Calidad" style="margin: 0 20px;"></i>
                </div>
                <h3 style="margin-bottom: 20px; color: #d4af37; font-family: 'Playfair Display', serif; font-size: 1.8rem;">Su confianza es nuestro activo más valioso</h3>
                <p style="color: #e0e0e0; line-height: 1.8; font-size: 1.05rem; max-width: 800px; margin: 0 auto;">
                    En Aerolínea del Sur, nuestra promesa de satisfacción no es solo una palabra, es un estándar de cumplimiento respaldado por la gestión directa de nuestra infraestructura y el rigor de nuestras autorizaciones vigentes.<br><br>
                    Al confiarnos su viaje, usted adquiere el respaldo de una organización que domina cada variable del trayecto. Nos comprometemos a brindarle una logística de máxima fluidez, seguridad técnica innegociable y una atención personalizada que entiende la importancia de su tiempo y sus objetivos. Vuele con la tranquilidad de saber que cada detalle está bajo el control de los expertos que operan la puerta de entrada a la Amazonía. Su satisfacción es nuestra ruta establecida.
                </p>
            </div>
        </div>
    </section>

    <!-- Tours Recomendados -->
    <section class="recommended-tours">
        <div class="container">
            <h2 class="section-title"><?= $h2_5 ?></h2>
            <div class="tours-grid">
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="{{ asset('img/sobrevuelos/choquequirao-1.webp') }}" alt="Choquequirao">
                        <div class="tour-badge"><?= __('tours.recomendados.choquequirao_type') ?></div>
                    </div>
                    <div class="tour-content">
                        <h4><?= __('tours.recomendados.choquequirao_title') ?></h4>
                        <p><?= __('tours.recomendados.choquequirao_desc') ?></p>
                        <div class="tour-details">
                            <span><i class="fas fa-clock"></i> <?= __('tours.recomendados.choquequirao_hrs') ?></span>
                            <span><i class="fas fa-users"></i> <?= __('tours.recomendados.choquequirao_pers') ?></span>
                        </div>
                        <div class="tour-footer">
                            <a href="/{{ app()->getLocale() }}/sobrevuelo/choquequirao"
                                class="tour-btn"><?= __('tours.recomendados.general') ?> >></a>
                        </div>
                    </div>
                </div>
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="{{ asset('img/sobrevuelos/nazca-lines-1.webp') }}" alt="Líneas de Nazca">
                        <div class="tour-badge"><?= __('tours.recomendados.nazca_type') ?></div>
                    </div>
                    <div class="tour-content">
                        <h4><?= __('tours.recomendados.nazca_title') ?></h4>
                        <p><?= __('tours.recomendados.nazca_desc') ?></p>
                        <div class="tour-details">
                            <span><i class="fas fa-clock"></i> <?= __('tours.recomendados.nazca_hrs') ?></span>
                            <span><i class="fas fa-users"></i> <?= __('tours.recomendados.nazca_pers') ?></span>
                        </div>
                        <div class="tour-footer">
                            <a href="/{{ app()->getLocale() }}/sobrevuelo/nazca-lines"
                                class="tour-btn"><?= __('tours.recomendados.general') ?> >></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Smooth scrolling para enlaces internos
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

        // Efecto parallax en hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.tour-hero');
            if (hero) {
                const heroBackground = hero.querySelector('.hero-background img');
                if (heroBackground) {
                    heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            }
        });

        // Animación de aparición para elementos
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observar elementos para animación
        document.querySelectorAll('.detail-item, .highlight-item, .timeline-item, .tour-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Funcionalidad del carrusel
        let currentSlideIndex = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.indicator');
        const totalSlides = slides.length;

        function showSlide(index) {
            const container = document.getElementById('carouselContainer');
            const slideWidth = slides[0].offsetWidth;
            container.style.transform = `translateX(-${index * slideWidth}px)`;

            // Actualizar indicadores
            indicators.forEach((indicator, i) => {
                indicator.classList.toggle('active', i === index);
            });
        }

        function moveSlide(direction) {
            currentSlideIndex += direction;

            if (currentSlideIndex >= totalSlides) {
                currentSlideIndex = 0;
            } else if (currentSlideIndex < 0) {
                currentSlideIndex = totalSlides - 1;
            }

            showSlide(currentSlideIndex);
        }

        function currentSlide(index) {
            currentSlideIndex = index - 1;
            showSlide(currentSlideIndex);
        }

        // Auto-play del carrusel
        setInterval(() => {
            moveSlide(1);
        }, 5000);

        // Ajustar carrusel en redimensionamiento de ventana
        window.addEventListener('resize', () => {
            showSlide(currentSlideIndex);
        });


    </script>
@endsection