
@php
    // Custom SEO for Sobrevuelo Choquequirao
    $tour_name = 'Choquequirao';
    $seo = seo()
        ->title(__('Sobrevuelo a Choquequirao - Aerolínea del Sur'))
        ->description(__('Descubre la ciudadela perdida de los Incas en un tour aéreo de lujo. Salidas diarias desde Cusco.'))
        ->keywords('sobrevuelo choquequirao, tour aéreo cusco, vuelo cusco choquequirao, choquequirao helicóptero')
        ->image(asset('img/sobrevuelos/choquequirao-1.webp'))
        ->canonical(url(app()->getLocale() . '/sobrevuelo/choquequirao'));
@endphp

@extends('a_EncabezadoFooter.princi')


@push('seo')
    {!! $seo !!}
@endpush

@section('content')

    <?php
    $h1_1 = __('tours.choquequirao.title');
    $p_1 = __('tours.choquequirao.subtitle');

    $h2_1 = __('tours.choquequirao.details_title');
    $p_2 = __('tours.choquequirao.details_desc');

    $h4_1 = __('tours.max_group');
    $p_3 = __('tours.choquequirao.max_group');

    $h4_2 = __('tours.min_age');
    $p_4 = __('tours.choquequirao.min_age');

    $h4_3 = __('tours.duration');
    $p_5 = __('tours.choquequirao.duration');

    $h3_1 = __('tours.image_gallery');

    $h2_2 = __('tours.choquequirao.summary_title');

    $h3_2 = __('tours.choquequirao.highlights_title');

    $h4_4 = __('tours.choquequirao.highlight1_title');
    $p_6 = __('tours.choquequirao.highlight1_desc');

    $h4_5 = __('tours.choquequirao.highlight2_title');
    $p_7 = __('tours.choquequirao.highlight2_desc');

    $h4_6 = __('tours.choquequirao.highlight3_title');
    $p_8 = __('tours.choquequirao.highlight3_desc');

    $h3_3 = __('tours.choquequirao.stats_title');

    $h2_3 = __('tours.choquequirao.places_title');

    $h4_7 = __('tours.choquequirao.place1_title');
    $p_9 = __('tours.choquequirao.place1_desc');

    $h4_8 = __('tours.choquequirao.place2_title');
    $p_10 = __('tours.choquequirao.place2_desc');

    $h4_9 = __('tours.choquequirao.place3_title');
    $p_11 = __('tours.choquequirao.place3_desc');

    $h4_10 = __('tours.choquequirao.place4_title');
    $p_12 = __('tours.choquequirao.place4_desc');

    $h4_11 = __('tours.choquequirao.place5_title');
    $p_13 = __('tours.choquequirao.place5_desc');

    $h4_12 = __('tours.choquequirao.place6_title');
    $p_14 = __('tours.choquequirao.place6_desc');

    $h4_12_extra = __('tours.choquequirao.place7_title');
    $p_14_extra = __('tours.choquequirao.place7_desc');

    $h2_4 = __('tours.choquequirao.inclusions_title');

    $h3_4 = __('tours.choquequirao.included_title');
    $h3_5 = __('tours.choquequirao.notincluded_title');

    $h4_13 = __('tours.choquequirao.notes_title');

    $h2_5 = __('tours.choquequirao.recommended_title');

    $h4_14 = __('tours.recomendados.nazca_title');
    $p_17 = __('tours.recomendados.nazca_desc');

    $h4_15 = __('tours.recomendados.vinicunca_title');
    $p_18 = __('tours.recomendados.vinicunca_desc');

    $h4_16 = __('tours.recomendados.titicaca_title');
    $p_19 = __('tours.recomendados.titicaca_desc');

    $h3_6 = __('tours.choquequirao.booking_title');

    $p_20 = __('tours.choquequirao.booking_note');
                                                                            ?>

    <link rel="stylesheet" href="{{ asset('public/css/paginas/agencia/1_TourGeneral.css') }}">
    <!-- Sección Hero -->
    <section class="tour-hero">
        <div class="hero-background">
            <img src="{{ asset('img/sobrevuelos/choquequirao-2.webp') }}" alt="Choquequirao desde el aire">
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
                    <span>1 hora (aprox.)</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-users"></i>
                    <span>Hasta 8 personas</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-star"></i>
                    <span>4.9/5</span>
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
                </div>
                <div class="gallery-section">
                    <h3><?= $h3_1 ?></h3>
                    <div class="image-carousel">
                        <div class="carousel-container" id="carouselContainer">
                            <div class="carousel-slide active">
                                <img src="{{ asset('img/sobrevuelos/choquequirao-1.webp') }}"
                                    alt="Vista aérea de Choquequirao">
                            </div>
                            <div class="carousel-slide">
                                <img src="{{ asset('img/sobrevuelos/choquequirao-2.webp') }}" alt="Choquequirao">
                            </div>
                            <div class="carousel-slide">
                                <img src="{{ asset('img/sobrevuelos/choquequirao-3.webp') }}" alt="Choquequirao Peru">
                            </div>
                            <div class="carousel-slide">
                                <img src="{{ asset('img/sobrevuelos/choquequirao-4.webp') }}" alt="Choquequirao Cusco">
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
                    
                    <div class="cta-wrapper" style="text-align: center; margin-top: 25px; margin-bottom: 10px;">
                        <style>
                            .cta-button:hover {
                                transform: translateY(-3px);
                                box-shadow: 0 6px 20px rgba(212, 175, 55, 0.5) !important;
                            }
                        </style>
                        <a href="https://wa.me/51932475995?text=Hola,%20deseo%20cotizar%20el%20sobrevuelo%20a%20Choquequirao" target="_blank" class="cta-button" style="display: inline-flex; align-items: center; justify-content: center; background: linear-gradient(to right, #d4af37, #f3d056); color: #000; padding: 12px 28px; border-radius: 30px; font-weight: bold; font-size: 1.1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3); transition: all 0.3s ease;">
                            <i class="fas fa-plane-departure" style="margin-right: 10px;"></i> Cotizar Sobrevuelo Choquequirao
                        </a>
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
                            <div class="stat-label">hora (aprox.)</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">7</div>
                            <div class="stat-label">Lugares Turísticos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">180</div>
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
                        <p><?= $p_9 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_8 ?></h4>
                        <p><?= $p_10 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_9 ?></h4>
                        <p><?= $p_11 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_10 ?></h4>
                        <p><?= $p_12 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_11 ?></h4>
                        <p><?= $p_13 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_12 ?></h4>
                        <p><?= $p_14 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_12_extra ?></h4>
                        <p><?= $p_14_extra ?></p>
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
                        <li><i class="fas fa-check"></i> <?= __('tours.choquequirao.included1') ?></li>
                        <li><i class="fas fa-check"></i> <?= __('tours.choquequirao.included2') ?></li>
                        <li><i class="fas fa-check"></i> <?= __('tours.choquequirao.included3') ?></li>
                        <li><i class="fas fa-check"></i> <?= __('tours.choquequirao.included4') ?></li>
                        <li><i class="fas fa-check"></i> <?= __('tours.choquequirao.included5') ?></li>
                        <li><i class="fas fa-check"></i> <?= __('tours.choquequirao.included6') ?></li>
                    </ul>
                </div>
                <!-- Inclusiones 
                    <div class="not-included">
                        <h3><i class="fas fa-times-circle"></i><?= $h3_5 ?></h3>
                        <ul>
                            <li><i class="fas fa-times"></i> <?= __('tours.choquequirao.notincluded1') ?></li>
                            <li><i class="fas fa-times"></i> <?= __('tours.choquequirao.notincluded2') ?></li>
                            <li><i class="fas fa-times"></i> <?= __('tours.choquequirao.notincluded3') ?></li>
                        </ul>
                    </div>-->
            </div>
            <div class="important-notes">
                <h4><i class="fas fa-exclamation-triangle"></i><?= $h4_13 ?></h4>
                <ul>
                    <li><?= __('tours.choquequirao.note1') ?></li>
                    <li><?= __('tours.choquequirao.note2') ?></li>
                    <li><?= __('tours.choquequirao.note3') ?></li>
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
                        <img src="{{ asset('img/sobrevuelos/nazca-lines-1.webp') }}" alt="Lineas de Nazca">
                        <div class="tour-badge"><?= __('tours.recomendados.nazca_type') ?></div>
                    </div>
                    <div class="tour-content">
                        <h4>Cusco – Nazca: La Conexión de Élite</h4>
                        <p><?= $p_17 ?></p>
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
                        <img src="{{ asset('img/sobrevuelos/vinicunca-mountain-1.webp') }}" alt="Vinicunca">
                        <div class="tour-badge"><?= __('tours.recomendados.vinicunca_type') ?></div>
                    </div>
                    <div class="tour-content">
                        <h4><?= $h4_15 ?></h4>
                        <p><?= $p_18 ?></p>
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