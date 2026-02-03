@php
    $tour_name = 'Machu Picchu';
    $seo = seo()
        ->title(str_replace(':tour', $tour_name, __('tours.seo.title_template')))
        ->description(str_replace(':tour', $tour_name, __('tours.seo.description_template')))
        ->keywords(['tour machu picchu', 'excursión machu picchu', 'tour cusco machu picchu', 'viaje machu picchu'])
        ->image(asset('img/tours/machu-picchu.jpg'))
        ->canonical(url(app()->getLocale() . '/agencia/machu-picchu'))
        ->addSchema([
            '@context' => 'https://schema.org',
            '@type' => 'TouristAttraction',
            'name' => 'Tour Machu Picchu'
        ]);
@endphp

@extends('a_EncabezadoFooter.princi')

@push('seo')
    {!! $seo !!}
@endpush


@section('content')

    <?php
    $h1_1 = __('tours.machu_picchu.title');
    $p_1 = __('tours.machu_picchu.subtitle');

    $h2_1 = __('tours.tour_details');
    $p_2 = __('tours.machu_picchu.description_1');
    $p_3 = __('tours.machu_picchu.description_2');

    $h4_1 = __('tours.machu_picchu.modern_aircraft');
    $p_4 = 'Cessna 206 con ventanas panorámicas';

    $h4_2 = __('tours.machu_picchu.certified_pilot');
    $p_5 = 'Más de 10 años de experiencia';

    $h4_3 = __('tours.machu_picchu.aerial_photography');
    $p_6 = 'Oportunidades únicas de captura';

    $h3_1 = __('tours.image_gallery');

    $h2_2 = __('tours.trip_summary');

    $h3_2 = __('tours.main_highlights');

    $h4_4 = __('tours.machu_picchu.view_highlight');
    $p_7 = 'Perspectiva aérea única de la ciudadela inca';

    $h4_5 = __('tours.machu_picchu.sacred_valley');
    $p_8 = 'Sobrevuela el místico valle de los incas';

    $h4_6 = __('tours.machu_picchu.professional_photo');
    $p_9 = 'Capturas aéreas espectaculares';

    $h4_7 = __('tours.machu_picchu.living_history');
    $p_10 = 'Narración histórica durante el vuelo';

    $h3_3 = __('tours.tour_statistics');

    $h2_3 = 'Itinerario Detallado';

    $h4_8 = 'Recogida en Hotel';
    $p_11 = 'Transporte desde tu hotel en Cusco hacia el aeropuerto de Chinchero';

    $h4_9 = 'Briefing de Seguridad';
    $p_12 = 'Instrucciones de seguridad y presentación del equipo de vuelo';

    $h4_10 = 'Despegue';
    $p_13 = 'Inicio del vuelo panorámico hacia el Valle Sagrado';

    $h4_11 = 'Sobrevuelo de Machu Picchu';
    $p_14 = 'Vista aérea espectacular de la ciudadela inca y tiempo para fotografías';

    $h4_12 = 'Valle Sagrado';
    $p_15 = 'Recorrido aéreo por el valle con vistas del río Urubamba';

    $h4_13 = 'Regreso y Aterrizaje';
    $p_16 = 'Vuelta al aeropuerto y traslado de regreso a tu hotel';


    $h2_4 = 'Inclusiones del Tour';

    $h3_4 = 'Incluido';
    $h3_5 = 'No Incluido';

    $h4_14 = 'Notas Importantes';

    $h2_5 = 'Otros Tours Recomendados';

    $h4_15 = 'Líneas de Nazca';
    $p_19 = 'Descubre los misteriosos geoglifos desde el aire en este tour de día completo.';

    $h4_16 = 'Vuelo Amazónico';
    $p_20 = 'Explora la selva peruana desde las alturas y observa la biodiversidad única.';

    $h4_17 = 'Costa Peruana';
    $p_21 = 'Sobrevuela la hermosa costa del Pacífico y las islas Ballestas.';

    $h3_6 = 'Reserva tu Tour';

    $p_21 = '* Campos obligatorios. Te contactaremos en 24 horas para confirmar tu reserva.';
    ?>

    <link rel="stylesheet" href="{{ asset('public/css/paginas/agencia/1_TourGeneral.css') }}">
    <!-- Sección Hero -->
    <section class="tour-hero">
        <div class="hero-background">
            <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80"
                alt="Machu Picchu desde el aire">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="tour-badges">
                <span class="badge popular">POPULAR</span>
                <span class="badge exclusive">EXCLUSIVO</span>
            </div>
            <h1 class="tour-title"><?= $h1_1 ?></h1>
            <p class="tour-subtitle"><?= $p_1 ?></p>
            <div class="tour-meta">
                <div class="meta-item">
                    <i class="fas fa-clock"></i>
                    <span>2.5 horas</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-users"></i>
                    <span>Hasta 8 personas</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-tag"></i>
                    <span>Desde $450 USD</span>
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
                    <p class="tour-description"><?= $p_2 ?>
                    </p>
                    <p class="tour-description"><?= $p_3 ?></p>
                    <div class="detail-items">
                        <div class="detail-item">
                            <i class="fas fa-plane"></i>
                            <div>
                                <h4><?= $h4_1 ?></h4>
                                <p><?= $p_4 ?></p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-user-tie"></i>
                            <div>
                                <h4><?= $h4_2 ?></h4>
                                <p><?= $p_5 ?></p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-camera"></i>
                            <div>
                                <h4><?= $h4_3 ?></h4>
                                <p><?= $p_6 ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-section">
                    <h3><?= $h3_1 ?></h3>
                    <div class="image-carousel">
                        <div class="carousel-container" id="carouselContainer">
                            <div class="carousel-slide active">
                                <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Vista aérea de Machu Picchu">
                            </div>
                            <div class="carousel-slide">
                                <img src="https://images.unsplash.com/photo-1526392060635-9d6019884377?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Valle Sagrado desde el aire">
                            </div>
                            <div class="carousel-slide">
                                <img src="https://images.unsplash.com/photo-1531065208531-4036c0dba3ca?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Montañas andinas">
                            </div>
                            <div class="carousel-slide">
                                <img src="https://images.unsplash.com/photo-1539650116574-75c0c6d73f6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Río Urubamba">
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
                </div>
            </div>
        </div>
    </section>

    <!-- Resumen del Viaje -->
    <section class="trip-summary">
        <div class="container">
            <h2 class="section-title"><?= $h2_2 ?></h2>
            <div class="summary-grid">
                <div class="highlights">
                    <h3><?= $h3_2 ?></h3>
                    <div class="highlight-items">
                        <div class="highlight-item">
                            <i class="fas fa-mountain"></i>
                            <h4><?= $h4_4 ?></h4>
                            <p><?= $p_7 ?></p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-water"></i>
                            <h4><?= $h4_5 ?></h4>
                            <p><?= $p_8 ?></p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-camera-retro"></i>
                            <h4><?= $h4_6 ?></h4>
                            <p><?= $p_9 ?></p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-history"></i>
                            <h4><?= $h4_7 ?></h4>
                            <p><?= $p_10 ?></p>
                        </div>
                    </div>
                </div>
                <div class="statistics">
                    <h3><?= $h3_3 ?></h3>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">2.5</div>
                            <div class="stat-label">Horas de vuelo</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">3,400</div>
                            <div class="stat-label">Metros de altitud</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">150</div>
                            <div class="stat-label">Km recorridos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Satisfacción</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Itinerario Detallado -->
    <section class="detailed-itinerary">
        <div class="container">
            <h2 class="section-title"><?= $h2_3 ?></h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_8 ?></h4>
                        <p><?= $p_11 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_9 ?></h4>
                        <p><?= $p_12 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_10 ?></h4>
                        <p><?= $p_13 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_11 ?></h4>
                        <p><?= $p_14 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_12 ?></h4>
                        <p><?= $p_15 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_13 ?></h4>
                        <p><?= $p_16 ?></p>
                    </div>
                </div>
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
                        <li><i class="fas fa-check"></i> Vuelo panorámico de 2.5 horas</li>
                        <li><i class="fas fa-check"></i> Transporte hotel-aeropuerto-hotel</li>
                        <li><i class="fas fa-check"></i> Piloto certificado y experimentado</li>
                        <li><i class="fas fa-check"></i> Briefing de seguridad completo</li>
                        <li><i class="fas fa-check"></i> Seguro de vuelo incluido</li>
                        <li><i class="fas fa-check"></i> Certificado de participación</li>
                        <li><i class="fas fa-check"></i> Fotografías digitales del vuelo</li>
                    </ul>
                </div>
                <div class="not-included">
                    <h3><i class="fas fa-times-circle"></i><?= $h3_5 ?></h3>
                    <ul>
                        <li><i class="fas fa-times"></i> Propinas para el piloto</li>
                        <li><i class="fas fa-times"></i> Gastos personales</li>
                        <li><i class="fas fa-times"></i> Seguro de viaje personal</li>
                        <li><i class="fas fa-times"></i> Actividades adicionales</li>
                        <li><i class="fas fa-times"></i> Comidas y bebidas</li>
                        <li><i class="fas fa-times"></i> Entrada a Machu Picchu terrestre</li>
                    </ul>
                </div>
            </div>
            <div class="important-notes">
                <h4><i class="fas fa-exclamation-triangle"></i><?= $h4_14 ?></h4>
                <ul>
                    <li>Peso máximo por pasajero: 100 kg</li>
                    <li>Edad mínima: 8 años (menores acompañados)</li>
                    <li>Condiciones climáticas pueden afectar el vuelo</li>
                    <li>Se requiere documento de identidad válido</li>
                    <li>Cancelación gratuita hasta 24 horas antes</li>
                    <li>Vuelo sujeto a condiciones meteorológicas</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Tours Recomendados -->
    <section class="recommended-tours">
        <div class="container">
            <h2><?= __('tours.recomendados_title') ?></h2>
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
                        <img src="{{ asset('img/tours/vinicunca-1.webp') }}" alt="Vinicunca">
                        <div class="tour-badge"><?= __('tours.recomendados.vinicunca_type') ?></div>
                    </div>
                    <div class="tour-content">
                        <h4><?= __('tours.recomendados.vinicunca_title') ?></h4>
                        <p><?= __('tours.recomendados.vinicunca_desc') ?></p>
                        <div class="tour-details">
                            <span><i class="fas fa-clock"></i> <?= __('tours.recomendados.vinicunca_hrs') ?></span>
                            <span><i class="fas fa-users"></i> <?= __('tours.recomendados.vinicunca_pers') ?></span>
                        </div>
                        <div class="tour-footer">
                            <a href="/{{ app()->getLocale() }}/sobrevuelo/vinicunca-elite"
                                class="tour-btn"><?= __('tours.recomendados.general') ?> >></a>
                        </div>
                    </div>
                </div>
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="{{ asset('img/tours/tesoros-cusco-1.webp') }}" alt="Tesoros de Cusco">
                        <div class="tour-badge"><?= __('tours.recomendados.tesoros_cusco_type') ?></div>
                    </div>
                    <div class="tour-content">
                        <h4><?= __('tours.recomendados.tesoros_cusco_title') ?></h4>
                        <p><?= __('tours.recomendados.tesoros_cusco_desc') ?></p>
                        <div class="tour-details">
                            <span><i class="fas fa-clock"></i> <?= __('tours.recomendados.tesoros_cusco_duration') ?></span>
                            <span><i class="fas fa-users"></i> <?= __('tours.recomendados.tesoros_cusco_pers') ?></span>
                        </div>
                        <div class="tour-footer">
                            <a href="/{{ app()->getLocale() }}/agencia/tesoros-cusco"
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