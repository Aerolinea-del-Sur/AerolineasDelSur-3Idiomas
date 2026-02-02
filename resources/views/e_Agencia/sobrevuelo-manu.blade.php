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

@push('seo')
    {!! $seo !!}
@endpush


@section('content')

    <?php
    $h1_1 = 'Sobrevuelo al Parque Nacional del Manu';
    $p_1 = 'Explora la biodiversidad más rica del mundo desde el cielo.';

    $h2_1 = __('tours.tour_details');
    $p_2 = 'Experimenta la inmensidad de la Amazonía peruana. Vuela sobre ríos serpenteantes, bosques vírgenes y observa la vida silvestre desde una perspectiva única en este tour aéreo exclusivo al Parque Nacional del Manu.';

    $h4_1 = __('tours.max_group');
    $p_3 = 'Privado (Hasta 5 pasajeros)';

    $h4_2 = __('tours.min_age');
    $p_4 = '3 años';

    $h4_3 = __('tours.duration');
    $p_5 = '1 Hora y 30 Minutos de Vuelo';

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
                    <span>1 hora 30 min</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-users"></i>
                    <span>Privado</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-star"></i>
                    <span>5.0/5</span>
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
                            <i class="fas fa-user-plus"></i>
                            <div>
                                <h4><?= $h4_2 ?></h4>
                                <p><?= $p_4 ?></p>
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
                            <p><?= $p_6 ?></p>

                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-camera-retro"></i>
                            <h4><?= $h4_5 ?></h4>
                            <p><?= $p_7 ?></p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-history"></i>
                            <h4><?= $h4_6 ?></h4>
                            <p><?= $p_8 ?></p>
                        </div>
                    </div>
                </div>
                <div class="statistics">
                    <h3><?= $h3_3 ?></h3>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">1</div>
                            <div class="stat-label">hora</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">1</div>
                            <div class="stat-label">Lugar Turistico</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">10</div>
                            <div class="stat-label">Km recorridos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Conformidad</div>
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
                        <h4><?= $h4_7 ?></h4>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_8 ?></h4>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_9 ?></h4>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_10 ?></h4>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_11 ?></h4>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_12 ?></h4>
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
                        <li><i class="fas fa-check"></i> <?= __('tours.common.included1') ?></li>
                        <li><i class="fas fa-check"></i> <?= __('tours.common.included2') ?></li>
                        <li><i class="fas fa-check"></i> <?= __('tours.common.included3') ?></li>
                        <li><i class="fas fa-check"></i> <?= __('tours.common.included4') ?></li>
                        <li><i class="fas fa-check"></i> <?= __('tours.common.included6') ?></li>
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
            </div>
            <div class="important-notes">
                <h4><i class="fas fa-exclamation-triangle"></i><?= $h4_13 ?></h4>
                <ul>
                    <li><?= __('tours.common.note1') ?></li>
                    <li><?= __('tours.common.note3') ?></li>
                </ul>
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
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="{{ asset('img/tours/machu-picchu-1.webp') }}" alt="Machu Picchu Aéreo">
                        <div class="tour-badge"><?= __('tours.recomendados.machu_picchu_type') ?></div>
                    </div>
                    <div class="tour-content">
                        <h4><?= __('tours.recomendados.machu_picchu_title') ?></h4>
                        <p><?= __('tours.recomendados.machu_picchu_desc') ?></p>
                        <div class="tour-details">
                            <span><i class="fas fa-clock"></i> <?= __('tours.recomendados.machu_picchu_duration') ?></span>
                            <span><i class="fas fa-users"></i> <?= __('tours.recomendados.machu_picchu_pers') ?></span>
                        </div>
                        <div class="tour-footer">
                            <a href="/{{ app()->getLocale() }}/agencia/machu-picchu"
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