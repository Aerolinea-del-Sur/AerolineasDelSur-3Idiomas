@php
    $tour_name = 'Tesoros de Cusco';
    $seo = seo()
        ->title(str_replace(':tour', $tour_name, __('tours.seo.title_template')))
        ->description(str_replace(':tour', $tour_name, __('tours.seo.description_template')))
        ->keywords(['tour tesoros cusco', 'city tour cusco', 'sacsayhuaman tour', 'ruinas incas cusco', 'tour arqueológico'])
        ->image(asset('img/tours/tesoros-cusco.jpg'))
        ->canonical(url(app()->getLocale() . '/agencia/tesoros-cusco'))
        ->addSchema([
            '@context' => 'https://schema.org',
            '@type' => 'TouristAttraction',
            'name' => 'Tour Tesoros de Cusco'
        ]);
@endphp

@extends('a_EncabezadoFooter.princi')

@push('seo')
    {!! $seo !!}
@endpush


@section('content')

    <?php
    $h1_1 = __('tours.tesoros_cusco.title');
    $p_1 = __('tours.tesoros_cusco.subtitle');

    $h2_1 = __('tours.tour_details');
    $p_2 = __('tours.tesoros_cusco.description');

    $h4_1 = __('tours.max_group');
    $p_3 = '8 Personas';

    $h4_2 = __('tours.min_age');
    $p_4 = 'Ninguna';

    $h4_3 = __('tours.duration');
    $p_5 = '2 días y 1 noche';

    $h3_1 = __('tours.image_gallery');

    $h2_2 = 'Resumen del Viaje';

    $h3_2 = 'Aspectos Destacados';

    $h4_4 = 'Machu Picchu';
    $p_6 = 'Conoceras la Ciudadela Inca en un recorrido de 2 horas.';

    $h4_5 = 'Valle Sagrado';
    $p_7 = 'Recorreras varios destinos llenos de historia, tradición y vestigios inca.';

    $h4_6 = 'Fotografía Paisajes';
    $p_8 = 'Captura tomas espectaculares de los pueblos, paisajes y costrucciones milenarias.';

    $h4_7 = 'Historia en cada rincón';
    $p_9 = 'El guía te narrará la historia de cada lugar y te mostrará pueblos, mercados y los vestigios de la cultura inca.';

    $h3_3 = 'Estadísticas del Tour';

    $h2_3 = 'Itinerario Detallado';

    $h4_8 = 'Día 1 - Recorrido por el Valle Sagrado';
    $p_10 = 'Salimos por la mañana desde tu hotel en Cusco rumbo a los paisajes andinos del Valle Sagrado, donde la historia y la naturaleza se entrelazan.';
    $p_10_1 = '- Comenzamos con una visita del majestuoso Centro Arqueológico de Pisac, ubicado sobre una colina con vistas impresionantes al valle.';
    $p_10_2 = '- Luego descendemos al colorido mercado artesanal de Pisac, ideal para descubrir textiles, cerámica, platería y productos hechos a mano por las comunidades locales.';
    $p_10_3 = '- Continuamos el recorrido hacia el corazón del valle para disfrutar de un almuerzo buffet con ingredientes andinos y cocina fusión andina internacional.';
    $p_10_4 = '- Por la tarde, visitamos la enigmática fortaleza de Ollantaytambo, una joya inca viva rodeada de misterio y arquitectura monumental.';
    $p_10_5 = '- Pernocte en Ollantaytambo, en un acogedor hotel del pueblo, lo que te permitirá descansar sin prisas y estar listo para la gran experiencia del día siguiente.';

    $h4_9 = 'Día 2 - Visita a Machu Picchu';
    $p_11 = 'Despierta temprano para vivir uno de los momentos más esperados de tu viaje.';
    $p_11_1 = '- Traslado a la estación de Ollantaytambo para abordar el tren con destino a Aguas Calientes, disfrutando de paisajes selváticos y quebradas impresionantes.';
    $p_11_2 = '- Al llegar, tomamos el bus que nos llevará montaña arriba hasta la ciudadela de Machu Picchu, una de las maravillas más espectaculares del mundo.';
    $p_11_3 = '- Disfruta de una visita guiada de 2 horas y media, donde recorrerás templos, andenes y miradores junto a un guía experto que te revelará los secretos de esta ciudad sagrada, según el circuito que se obtuvo.';
    $p_11_4 = '- Luego del recorrido, regresamos en bus a Aguas Calientes, donde tendrás tiempo libre para almorzar a tu ritmo, comprar recuerdos o recorrer sus encantadoras calles.';
    $p_11_5 = '- Por la tarde, abordarás el tren de retorno a Ollantaytambo y desde allí un transporte turístico te llevará de vuelta a Cusco, con llegada directa al centro de la ciudad. Allí te espera un taxi para llevarte a tu hotel.';

    $h2_4 = 'Inclusiones del Tour';

    $h3_4 = 'Incluido';
    $h3_5 = 'No Incluido';

    $h4_14 = 'Notas Importantes';

    $h2_5 = 'Otros Tours Recomendados';

    $h4_15 = 'Líneas de Nazca';
    $p_18 = 'Descubre los misteriosos geoglifos desde el aire en este tour de día completo.';

    $h4_16 = 'Vuelo Amazónico';
    $p_19 = 'Explora la selva peruana desde las alturas y observa la biodiversidad única.';

    $h4_17 = 'Costa Peruana';
    $p_20 = 'Sobrevuela la hermosa costa del Pacífico y las islas Ballestas.';

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
                        <div id="carouselContainer" class="carousel-container">
                            <div class="carousel-slide active">
                                <img src="/img/tours/tesoros-del-cusco-1.webp" alt="Vista aérea de Machu Picchu">
                            </div>
                            <div class="carousel-slide">
                                <img src="/img/tours/tesoros-del-cusco-2.webp" alt="Valle Sagrado desde el aire">
                            </div>
                            <div class="carousel-slide">
                                <img src="/img/tours/tesoros-del-cusco-3.webp" alt="Montañas andinas y naturaleza">
                            </div>
                            <div class="carousel-slide">
                                <img src="/img/tours/tesoros-del-cusco-4.webp" alt="Río Urubamba">
                            </div>
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
                            <i class="fas fa-water"></i>
                            <h4><?= $h4_5 ?></h4>
                            <p><?= $p_7 ?></p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-camera-retro"></i>
                            <h4><?= $h4_6 ?></h4>
                            <p><?= $p_8 ?></p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-history"></i>
                            <h4><?= $h4_7 ?></h4>
                            <p><?= $p_9 ?></p>
                        </div>
                    </div>
                </div>
                <div class="statistics">
                    <h3><?= $h3_3 ?></h3>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">2</div>
                            <div class="stat-label">Días</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">4</div>
                            <div class="stat-label">Lugares Turisticos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">35</div>
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
                        <h4><?= $h4_8 ?></h4>
                        <p><?= $p_10 ?></p>
                        <p>
                            <br><?= $p_10_1 ?>
                            <br><br><?= $p_10_2 ?>
                            <br><br><?= $p_10_3 ?>
                            <br><br><?= $p_10_4 ?>
                            <br><br><?= $p_10_5 ?>
                        </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4><?= $h4_9 ?></h4>
                        <p><?= $p_11 ?></p>
                        <p>
                            <br><?= $p_11_1 ?>
                            <br><br><?= $p_11_2 ?>
                            <br><br><?= $p_11_3 ?>
                            <br><br><?= $p_11_4 ?>
                            <br><br><?= $p_11_5 ?>
                        </p>
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
                        <li><i class="fas fa-check"></i> Traslados turísticos desde y hacia tu hotel en Cusco (en el centro
                            de la ciudad)</li>
                        <li><i class="fas fa-check"></i> Tren turístico de ida y vuelta (categoría Expedition o voagager)
                        </li>
                        <li><i class="fas fa-check"></i> Tickets de ingreso a todos los sitios arqueológicos</li>
                        <li><i class="fas fa-check"></i> Almuerzo buffet en el Valle Sagrado</li>
                        <li><i class="fas fa-check"></i> Guía oficial bilingüe durante las visitas</li>
                        <li><i class="fas fa-check"></i> 1 noche de alojamiento en hotel 3★ en Ollantaytambo</li>
                        <li><i class="fas fa-check"></i> Asistencia permanente durante todo el viaje</li>
                    </ul>
                </div>
                <!-- Inclusiones 
                    <div class="not-included">
                        <h3><i class="fas fa-times-circle"></i><?= $h3_5 ?></h3>
                        <ul>
                            <li><i class="fas fa-times"></i> Desayuno del primer día</li>
                            <li><i class="fas fa-times"></i> Almuerzo en Machu Picchu</li>
                            <li><i class="fas fa-times"></i> Seguro de viaje personal</li>
                            <li><i class="fas fa-times"></i> Propinas</li>
                            <li><i class="fas fa-times"></i> Seguros de viaje (se les recomienda tener uno)</li>
                        </ul>
                    </div>-->
            </div>
            <div class="important-notes">
                <h4><i class="fas fa-exclamation-triangle"></i><?= $h4_14 ?></h4>
                <ul>
                    <li>Se requiere documento de identidad válido</li>
                    <li>Cancelación hasta 24 horas antes</li>
                </ul>
            </div>
        </div>
    </section>

    <!--Tours Recomendados -->
    <section class="recommended-tours">
        <div class="container">
            <h2><?= __('tours.recomendados_title') ?></h2>
            <div class="tours-grid">
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="{{ asset('img/sobrevuelos/valle-maras-1.webp') }}" alt="Valle Maras">
                        <div class="tour-badge"><?= __('tours.recomendados.valle_maras_type') ?></div>
                    </div>
                    <div class="tour-content">
                        <h4><?= __('tours.recomendados.valle_maras_title') ?></h4>
                        <p><?= __('tours.recomendados.valle_maras_desc') ?></p>
                        <div class="tour-details">
                            <span><i class="fas fa-clock"></i> <?= __('tours.recomendados.valle_maras_hrs') ?></span>
                            <span><i class="fas fa-users"></i> <?= __('tours.recomendados.valle_maras_pers') ?></span>
                        </div>
                        <div class="tour-footer">
                            <a href="/{{ app()->getLocale() }}/sobrevuelo/valle-maras"
                                class="tour-btn"><?= __('tours.recomendados.general') ?> >></a>
                        </div>
                    </div>
                </div>
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="{{ asset('img/sobrevuelos/titicaca-lake-1.webp') }}" alt="Lago Titicaca">
                        <div class="tour-badge"><?= __('tours.recomendados.titicaca_type') ?></div>
                    </div>
                    <div class="tour-content">
                        <h4><?= __('tours.recomendados.titicaca_title') ?></h4>
                        <p><?= __('tours.recomendados.titicaca_desc') ?></p>
                        <div class="tour-details">
                            <span><i class="fas fa-clock"></i> <?= __('tours.recomendados.titicaca_hrs') ?></span>
                            <span><i class="fas fa-users"></i> <?= __('tours.recomendados.titicaca_pers') ?></span>
                        </div>
                        <div class="tour-footer">
                            <a href="/{{ app()->getLocale() }}/sobrevuelo/titicaca-lake"
                                class="tour-btn"><?= __('tours.recomendados.general') ?> >></a>
                        </div>
                    </div>
                </div>
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="{{ asset('img/tours/machu-picchu-1.webp') }}" alt="Machu Picchu">
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