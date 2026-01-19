@php
    $aircraft_model = 'Citation Latitude';
    $seo = seo()
        ->title("$aircraft_model - Jet Mediano Premium | Aerolíneas del Sur")
        ->description("El $aircraft_model es un jet mediano premium con cabina espaciosa y tecnología avanzada.")
        ->keywords(['citation latitude perú', 'cessna latitude', 'jet mediano premium', 'avión tecnología avanzada'])
        ->image(asset('img/aeronaves/aviones/CitationLatitude.webp'))
        ->canonical(url(app()->getLocale() . '/aeronaves/CitationLatitude'))
        ->addSchema([
            '@context' => 'https://schema.org',
            '@type' => 'Product',
            'name' => 'Citation Latitude',
            'category' => 'Business Jet'
        ]);
@endphp

@extends('a_EncabezadoFooter.princi')

@push('seo')
    {!! $seo !!}
@endpush



<?php
$h1_1_1 = 'Citation';
$h1_1_2 = 'Latitude';

$p_1 = __('aircraft.excellence');

$h2_1 = __('aircraft.description');
$p_2 = 'El Cessna Citation Latitude es un jet ejecutivo de tamaño medio reconocido por su cabina espaciosa y tecnología Garmin G5000. Con capacidad para 9 pasajeros, ofrece confort excepcional.';
$p_3 = 'Equipado con motores Pratt & Whitney Canada PW306D1, alcanza velocidades de 826 km/h con un alcance de 5,278 km, ideal para vuelos transcontinentales.';

$h2_2 = __('aircraft.gallery');

$h2_3 = __('aircraft.overview');

$h3_1 = __('aircraft.model');
$p_4 = 'Citation Latitude';

$h3_2 = __('aircraft.year');
$p_5 = '2015';

$h3_3 = __('aircraft.manufacturer');
$p_6 = 'Cessna Aircraft Company';

$h2_4 = __('aircraft.performance');

$h3_4 = __('aircraft.max_speed_label');
$p_7 = '826 km/h';

$h3_5 = __('aircraft.max_range');
$p_8 = '5,278 km';

$h3_6 = __('aircraft.cruise_altitude');
$p_9 = '13,716 metros';

$h3_7 = __('aircraft.fuel_consumption');
$p_10 = '220 gal/h';

$h2_5 = __('aircraft.capacity');

$h3_8 = __('aircraft.max_passengers');
$p_11 = '9 pasajeros';

$h3_9 = __('aircraft.autonomy');
$p_12 = '5,278 km';

$h3_10 = __('aircraft.cargo_capacity');
$p_13 = '1,100 kg';

$h3_11 = __('aircraft.length');
$p_14 = '19,4 metros';

$h2_6 = __('aircraft.operation_places');
$p_15 = str_replace(':model', $aircraft_model, __('aircraft.operations_desc'));

$h3_12 = __('aircraft.national_routes');

$h3_13 = __('aircraft.other_services');

$h3_14 = __('aircraft.request_info');            
?>

@section('content')
    <link rel="stylesheet" href="{{ asset('public/css/paginas/aeronaves/FlotaAvion.css') }}">
    <script>
        // Configurar clase body para imagen de portada específica
        document.addEventListener('DOMContentLoaded', function () {
            document.body.classList.add('citation-latitude');
        });
    </script>

    <div class="page-wrapper">
        <!-- Encabezado Tradicional Elegante -->
        <header class="traditional-header">
            <div class="header-overlay"></div>
            <div class="decorative-border-top"></div>
            <div class="header-content">
                <div class="header-left-panel">
                    <div class="aircraft-title-section-enhanced">
                        <div class="title-prefix">Conoce el</div>
                        <h1 class="aircraft-model-enhanced">
                            <span class="model-number"><?= $h1_1_1 ?></span>
                            <span class="model-variant"><?= $h1_1_2 ?></span>
                        </h1>
                        <div class="title-ornament-enhanced">
                            <span class="ornament-center">
                                <span class="ornament-line"></span>
                                <span class="ornament-diamond">◆</span>
                                <span class="ornament-line"></span>
                            </span>
                        </div>
                        <p class="aircraft-description-enhanced"><?= $p_1 ?></p>
                        <div class="subtitle-ornament">
                            <span class="subtitle-text">Aerolinea del Sur</span>
                        </div>
                    </div>

                    <div class="aircraft-credentials-enhanced">
                        <div class="credentials-frame">
                            <div class="credential-item-enhanced">
                                <div class="credential-icon"><i class="fas fa-certificate"></i></div>
                                <div class="credential-content">
                                    <span class="credential-label">Velocidad Max</span>
                                    <span class="credential-value">826 km/h</span>
                                </div>
                            </div>
                            <div class="credential-divider"></div>
                            <div class="credential-item-enhanced">
                                <div class="credential-icon"><i class="fas fa-calendar-alt"></i></div>
                                <div class="credential-content">
                                    <span class="credential-label">Peso Max</span>
                                    <span class="credential-value">13,971 kg</span>
                                </div>
                            </div>
                            <div class="credential-divider"></div>
                            <div class="credential-item-enhanced">
                                <div class="credential-icon"><i class="fas fa-id-card"></i></div>
                                <div class="credential-content">
                                    <span class="credential-label">Pasajeros</span>
                                    <span class="credential-value">9 pax</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-right-panel">
                    <!-- Espacio para el fondo y el avión -->
                </div>
            </div>
            <div class="decorative-border-bottom"></div>
        </header>
    </div>

    <!-- Main Content -->
    <div class="main-wrapper">
        <!-- Content Area -->
        <main class="aircraft-content">
            <div class="container">
                <!-- Descripción -->
                <section class="aircraft-description">
                    <h2 class="section-title"><?= $h2_1 ?></h2>
                    <p class="description-text"><?= $p_2 ?></p>
                    <p class="description-text"><?= $p_3 ?></p>
                </section>

                <!-- Nueva Galería de Imágenes -->
                <section class="aircraft-gallery">
                    <h2 class="section-title"><?= $h2_2 ?></h2>
                    <div class="new-carousel-wrapper">
                        <div class="new-carousel-container">
                            <div class="new-carousel-track">
                                <div class="new-carousel-slide current-slide">
                                    <img src="/img/aeronaves/aviones/CitationLatitude-1.webp" alt="citation latitude"
                                        class="carousel-image" sizes="(max-width: 890px) 550px, 
                                            (max-width: 310px) 310px, 
                                            400px" title="citation latitude" width="1200" height="800" loading="lazy"
                                        decoding="async"
                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                                    <scripttype="application /ld+json">
                                        {
                                        "@context": "https://schema.org/",
                                        "@type": "ImageObject",
                                        "contentUrl":
                                        "https://www.micosina.online/img/aeronaves/aviones/CitationLatitude-1.webp",
                                        "creator": {
                                        "@type": "Organization",
                                        },
                                        "caption": "citation latitude",
                                        "representativeOfPage": true,
                                        "datePublished": "2025-11-15"
                                        }
                                        </script>
                                </div>
                                <div class="new-carousel-slide">
                                    <img src="/img/aeronaves/aviones/CitationLatitude-2.webp" alt="citation latitude range"
                                        class="carousel-image" sizes="(max-width: 890px) 550px, 
                                            (max-width: 310px) 310px, 
                                            400px" title="citation latitude range" width="1200" height="800" loading="lazy"
                                        decoding="async"
                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                                    <scripttype="application /ld+json">
                                        {
                                        "@context": "https://schema.org/",
                                        "@type": "ImageObject",
                                        "contentUrl":
                                        "https://www.micosina.online/img/aeronaves/aviones/CitationLatitude-2.webp",
                                        "creator": {
                                        "@type": "Organization",
                                        },
                                        "caption": "citation latitude range",
                                        "representativeOfPage": true,
                                        "datePublished": "2025-11-15"
                                        }
                                        </script>
                                </div>
                                <div class="new-carousel-slide">
                                    <img src="/img/aeronaves/aviones/CitationLatitude-3.webp"
                                        alt="citation latitude interior" class="carousel-image" sizes="(max-width: 890px) 550px, 
                                            (max-width: 310px) 310px, 
                                            400px" title="citation latitude interior" width="1200" height="800"
                                        loading="lazy" decoding="async"
                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                                    <scripttype="application /ld+json">
                                        {
                                        "@context": "https://schema.org/",
                                        "@type": "ImageObject",
                                        "contentUrl":
                                        "https://www.micosina.online/img/aeronaves/aviones/CitationLatitude-3.webp",
                                        "creator": {
                                        "@type": "Organization",
                                        },
                                        "caption": "citation latitude interior",
                                        "representativeOfPage": true,
                                        "datePublished": "2025-11-15"
                                        }
                                        </script>
                                </div>
                                <div class="new-carousel-slide">
                                    <img src="/img/aeronaves/aviones/CitationLatitude-4.webp" alt="citation latitude speed"
                                        class="carousel-image" sizes="(max-width: 890px) 550px, 
                                            (max-width: 310px) 310px, 
                                            400px" title="citation latitude speed" width="1200" height="800" loading="lazy"
                                        decoding="async"
                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                                    <scripttype="application /ld+json">
                                        {
                                        "@context": "https://schema.org/",
                                        "@type": "ImageObject",
                                        "contentUrl":
                                        "https://www.micosina.online/img/aeronaves/aviones/CitationLatitude-4.webp",
                                        "creator": {
                                        "@type": "Organization",
                                        },
                                        "caption": "citation latitude speed",
                                        "representativeOfPage": true,
                                        "datePublished": "2025-11-15"
                                        }
                                        </script>
                                </div>
                            </div>
                        </div>

                        <!-- Controles de navegación -->
                        <button class="new-carousel-btn new-carousel-btn--left" id="prevBtn">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="new-carousel-btn new-carousel-btn--right" id="nextBtn">
                            <i class="fas fa-chevron-right"></i>
                        </button>

                        <!-- Indicadores -->
                        <div class="new-carousel-nav">
                            <button class="new-carousel-indicator current-indicator" data-slide="0"></button>
                            <button class="new-carousel-indicator" data-slide="1"></button>
                            <button class="new-carousel-indicator" data-slide="2"></button>
                            <button class="new-carousel-indicator" data-slide="3"></button>
                        </div>
                    </div>
                </section>

                <!-- Visión General -->
                <section class="aircraft-overview">
                    <h2 class="section-title"><?= $h2_3 ?></h2>
                    <div class="overview-grid">
                        <div class="overview-item">
                            <i class="fas fa-plane"></i>
                            <h3><?= $h3_1 ?></h3>
                            <p><?= $p_4 ?></p>
                        </div>
                        <div class="overview-item">
                            <i class="fas fa-calendar-alt"></i>
                            <h3><?= $h3_2 ?></h3>
                            <p><?= $p_5 ?></p>
                        </div>
                        <div class="overview-item">
                            <i class="fas fa-cogs"></i>
                            <h3><?= $h3_3 ?></h3>
                            <p><?= $p_6 ?></p>
                        </div>
                    </div>
                </section>

                <!-- Rendimiento -->
                <section class="aircraft-performance">
                    <h2 class="section-title"><?= $h2_4 ?></h2>
                    <div class="performance-grid">
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            <div class="performance-info">
                                <h3><?= $h3_4 ?></h3>
                                <p><?= $p_7 ?></p>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-route"></i>
                            </div>
                            <div class="performance-info">
                                <h3><?= $h3_5 ?></h3>
                                <p><?= $p_8 ?></p>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-mountain"></i>
                            </div>
                            <div class="performance-info">
                                <h3><?= $h3_6 ?></h3>
                                <p><?= $p_9 ?></p>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <i class="fas fa-gas-pump"></i>
                            </div>
                            <div class="performance-info">
                                <h3><?= $h3_7 ?></h3>
                                <p><?= $p_10 ?></p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="aircraft-capacity">
                    <h2 class="section-title"><?= $h2_5 ?></h2>
                    <div class="capacity-layout">
                        <div class="capacity-info">
                            <div class="capacity-item">
                                <i class="fas fa-users"></i>
                                <div>
                                    <h3><?= $h3_8 ?></h3>
                                    <p><?= $p_11 ?></p>
                                </div>
                            </div>
                            <div class="capacity-item">
                                <i class="fas fa-cog"></i>
                                <div>
                                    <h3><?= $h3_9 ?></h3>
                                    <p><?= $p_12 ?></p>
                                </div>
                            </div>
                            <div class="capacity-item">
                                <i class="fas fa-suitcase"></i>
                                <div>
                                    <h3><?= $h3_10 ?></h3>
                                    <p><?= $p_13 ?></p>
                                </div>
                            </div>
                            <div class="capacity-item">
                                <i class="fas fa-ruler"></i>
                                <div>
                                    <h3><?= $h3_11 ?></h3>
                                    <p><?= $p_14 ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="seating-diagram">
                            <img src="/img/aeronaves/aviones/CitationLatitude.webp"
                                alt="Cessna Citation Latitude jet mediano para vuelos charter en Perú"
                                style="width: 100%; height: 100%; border-radius: 10px; object-fit: cover;">
                        </div>
                    </div>
                </section>

                <!-- Lugares de Operación -->
                <section class="aircraft-operations">
                    <h2 class="section-title"><?= $h2_6 ?></h2>
                    <div class="operations-content">
                        <div class="operations-text">
                            <p><?= $p_15 ?></p>
                        </div>
                        <div class="routes-grid">
                            <div class="route-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3><?= $h3_12 ?></h3>
                                <ul>
                                    <li>Puno</li>
                                    <li>Cusco</li>
                                    <li>Lima</li>
                                    <li>Otras Regiones</li>
                                </ul>
                            </div>
                            <div class="route-item">
                                <i class="fas fa-plane-departure"></i>
                                <h3><?= $h3_13 ?></h3>
                                <ul>
                                    <li>Vuelos Charter</li>
                                    <li>Servicios Ejecutivos</li>
                                    <li>Rutas Estacionales</li>
                                    <li>Conexiones Regionales</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>


    </div>


    <script>
        // ===== FUNCIONALIDAD CARRUSEL DE IMÁGENES =====
        document.addEventListener('DOMContentLoaded', function () {
            let currentSlideIndex = 0;
            const slides = document.querySelectorAll('.carousel-slide');
            const indicators = document.querySelectorAll('.indicator');
            const totalSlides = slides.length;

            // Verificar que existen elementos del carrusel
            if (slides.length === 0 || indicators.length === 0) {
                console.log('No se encontraron elementos del carrusel');
                return;
            }

            // Función para mostrar slide específico
            function showSlide(index) {
                // Remover clase active de todos los slides e indicadores
                slides.forEach(slide => slide.classList.remove('active'));
                indicators.forEach(indicator => indicator.classList.remove('active'));

                // Mostrar slide actual
                if (slides[index] && indicators[index]) {
                    slides[index].classList.add('active');
                    indicators[index].classList.add('active');
                }
            }

            // Función para cambiar slide (navegación con botones)
            function changeSlide(direction) {
                currentSlideIndex += direction;

                // Ciclo infinito
                if (currentSlideIndex >= totalSlides) {
                    currentSlideIndex = 0;
                } else if (currentSlideIndex < 0) {
                    currentSlideIndex = totalSlides - 1;
                }

                showSlide(currentSlideIndex);
            }

            // Función para ir a slide específico (indicadores)
            function currentSlide(index) {
                currentSlideIndex = index - 1; // Los indicadores empiezan en 1
                showSlide(currentSlideIndex);
            }

            // Auto-play del carrusel
            function autoPlayCarousel() {
                currentSlideIndex++;
                if (currentSlideIndex >= totalSlides) {
                    currentSlideIndex = 0;
                }
                showSlide(currentSlideIndex);
            }

            // Iniciar auto-play cada 8 segundos (más lento)
            let autoPlayInterval = setInterval(autoPlayCarousel, 8000);

            // Pausar auto-play cuando el usuario interactúa
            function pauseAutoPlay() {
                clearInterval(autoPlayInterval);
                // Reiniciar auto-play después de 12 segundos de inactividad
                setTimeout(() => {
                    autoPlayInterval = setInterval(autoPlayCarousel, 8000);
                }, 12000);
            }

            // Botones de navegación
            const prevBtn = document.querySelector('.carousel-btn.prev');
            const nextBtn = document.querySelector('.carousel-btn.next');

            if (prevBtn && nextBtn) {
                prevBtn.addEventListener('click', () => {
                    changeSlide(-1);
                    pauseAutoPlay();
                });

                nextBtn.addEventListener('click', () => {
                    changeSlide(1);
                    pauseAutoPlay();
                });
            }

            // Indicadores
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    currentSlide(index + 1);
                    pauseAutoPlay();
                });
            });

            // Navegación con teclado
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') {
                    changeSlide(-1);
                    pauseAutoPlay();
                } else if (e.key === 'ArrowRight') {
                    changeSlide(1);
                    pauseAutoPlay();
                }
            });

            // Inicializar el primer slide
            showSlide(0);

            // Hacer las funciones globales para compatibilidad con onclick en HTML
            window.changeSlide = changeSlide;
            window.currentSlide = currentSlide;
        });


        // ===== SMOOTH SCROLLING PARA ENLACES INTERNOS =====
        document.addEventListener('DOMContentLoaded', function () {
            // Agregar smooth scrolling a todos los enlaces internos
            const links = document.querySelectorAll('a[href^="#"]');

            links.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // ===== NUEVO CARRUSEL DE IMÁGENES =====
            const newCarouselTrack = document.querySelector('.new-carousel-track');
            const newCarouselSlides = document.querySelectorAll('.new-carousel-slide');
            const newCarouselIndicators = document.querySelectorAll('.new-carousel-indicator');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            if (newCarouselTrack && newCarouselSlides.length > 0) {
                let currentSlideIndex = 0;
                const totalSlides = newCarouselSlides.length;
                let autoPlayInterval;
                let isUserInteracting = false;

                // Función para mostrar slide específico
                function showNewSlide(index) {
                    // Asegurar que el índice esté en rango
                    if (index >= totalSlides) {
                        currentSlideIndex = 0;
                    } else if (index < 0) {
                        currentSlideIndex = totalSlides - 1;
                    } else {
                        currentSlideIndex = index;
                    }

                    // Mover el track
                    const translateX = -currentSlideIndex * 25; // 25% por slide
                    newCarouselTrack.style.transform = `translateX(${translateX}%)`;

                    // Actualizar indicadores
                    newCarouselIndicators.forEach((indicator, i) => {
                        indicator.classList.toggle('current-indicator', i === currentSlideIndex);
                    });
                }

                // Función para ir al siguiente slide
                function nextSlide() {
                    showNewSlide(currentSlideIndex + 1);
                }

                // Función para ir al slide anterior
                function prevSlide() {
                    showNewSlide(currentSlideIndex - 1);
                }

                // Auto-play del carrusel
                function startAutoPlay() {
                    autoPlayInterval = setInterval(() => {
                        if (!isUserInteracting) {
                            nextSlide();
                        }
                    }, 6000); // Cambiar cada 6 segundos
                }

                function stopAutoPlay() {
                    clearInterval(autoPlayInterval);
                }

                function resetAutoPlay() {
                    stopAutoPlay();
                    isUserInteracting = true;
                    setTimeout(() => {
                        isUserInteracting = false;
                        startAutoPlay();
                    }, 8000); // Reanudar después de 8 segundos de inactividad
                }

                // Event listeners para botones de navegación
                if (prevBtn) {
                    prevBtn.addEventListener('click', () => {
                        prevSlide();
                        resetAutoPlay();
                    });
                }

                if (nextBtn) {
                    nextBtn.addEventListener('click', () => {
                        nextSlide();
                        resetAutoPlay();
                    });
                }

                // Event listeners para indicadores
                newCarouselIndicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', () => {
                        showNewSlide(index);
                        resetAutoPlay();
                    });
                });

                // Navegación con teclado
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowLeft') {
                        prevSlide();
                        resetAutoPlay();
                    } else if (e.key === 'ArrowRight') {
                        nextSlide();
                        resetAutoPlay();
                    }
                });

                // Pausar auto-play cuando el mouse está sobre el carrusel
                const carouselWrapper = document.querySelector('.new-carousel-wrapper');
                if (carouselWrapper) {
                    carouselWrapper.addEventListener('mouseenter', () => {
                        isUserInteracting = true;
                    });

                    carouselWrapper.addEventListener('mouseleave', () => {
                        isUserInteracting = false;
                    });
                }

                // Soporte para gestos táctiles (básico)
                let touchStartX = 0;
                let touchEndX = 0;

                if (newCarouselTrack) {
                    newCarouselTrack.addEventListener('touchstart', (e) => {
                        touchStartX = e.changedTouches[0].screenX;
                    });

                    newCarouselTrack.addEventListener('touchend', (e) => {
                        touchEndX = e.changedTouches[0].screenX;
                        handleSwipe();
                    });
                }

                function handleSwipe() {
                    const swipeThreshold = 50;
                    const diff = touchStartX - touchEndX;

                    if (Math.abs(diff) > swipeThreshold) {
                        if (diff > 0) {
                            // Swipe izquierda - siguiente slide
                            nextSlide();
                        } else {
                            // Swipe derecha - slide anterior
                            prevSlide();
                        }
                        resetAutoPlay();
                    }
                }

                // Inicializar carrusel
                showNewSlide(0);
                startAutoPlay();
            }
        });

        // ===== EFECTOS DE SCROLL =====
        document.addEventListener('DOMContentLoaded', function () {
            // Observador de intersección para animaciones al hacer scroll
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

            // Observar elementos que deben animarse
            const animatedElements = document.querySelectorAll('section, .overview-item, .performance-item, .route-item');

            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        });
    </script>
@endsection