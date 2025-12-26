@php
$seo = seo()
    ->title('Blog de Aviación | Consejos y Guías de Vuelos en Perú')
    ->description('Blog de Aerolínea del Sur con artículos sobre aviación, consejos de viaje, guías turísticas y novedades de vuelos privados en Perú.')
    ->keywords(['blog aviación perú', 'consejos viaje cusco', 'guía turística perú', 'blog vuelos privados'])
    ->image(asset('img/blog/aviation-peru.jpg'))
    ->canonical(url(app()->getLocale() . '/blog'));
@endphp

@extends('a_EncabezadoFooter.princi')

@push('seo')
    {!! $seo !!}
@endpush


@section('content')
    <?php
    $h1_1_1 = 'Explora el';
    $h1_1_2 = 'mundo con';
    $h1_1_3 = 'nosotros';
    $p_1 = 'Descubre destinos increíbles, consejos de viaje y las últimas noticias de la aviación en nuestro blog oficial.';

    $h3_1 = 'Vuelos en Perú: Descubre la Experiencia Aerolínea del Sur';
    $p_2 = 'Descubre la experiencia de viajar con Aerolínea del Sur en Perú. Un viaje cómodo y seguro.';

    $h3_2 = 'Aerolíneas del Sur incorpora nuevos Boeing 787 Dreamliner';
    $p_3 = 'Nuestra flota se moderniza con aeronaves de última generación para brindarte mayor comodidad.';

    $h3_3 = '¿Como es la experiencia de un Viaje en Jet Privado?';
    $p_4 = 'Descubre la emoción de volar en una aeronave privada con Aerolínea del Sur. Un viaje único y memorable.';

    $h3_4 = 'Descubre la Maravilla del Mundo: Machu Picchu';
    $p_5 = '¡Haz realidad tu viaje a la ciudadela inca! Descubre los secretos de Machu Picchu y cómo visitar esta maravilla.';

    $h3_5 = 'Cómo hacer la maleta perfecta: Guía paso a paso';
    $p_6 = 'Aprende a optimizar tu equipaje y viajar con todo lo necesario sin excesos.';

    $h2_1 = 'Mantente informado';
    $p_7 = 'Suscríbete a nuestro newsletter y recibe las últimas noticias, ofertas especiales y consejos de viaje directamente en tu correo.';
                        ?>
    <link rel="stylesheet" href="{{ asset('public/css/paginas/blog/blog.css') }}">

    <!-- Hero Section -->
    <section class="blog-hero">
        <div class="hero-background"></div>
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-newspaper"></i>
                <span>Blog Oficial</span>
            </div>
            <h1 class="hero-title">
                <span class="title-line-1"><?= $h1_1_1 ?></span>
                <span class="title-line-2"><?= $h1_1_2 ?><span class="highlight"><?= $h1_1_3 ?></span></span>
            </h1>
            <p class="hero-description"><?= $p_1 ?></p>
        </div>
    </section>

    <!-- Filtros de Categorías -->
    <section class="blog-filters">
        <div class="container">
            <div class="filter-buttons">
                <button class="filter-btn active" data-category="all">
                    <i class="fas fa-globe"></i>
                    Todos
                </button>
                <button class="filter-btn" data-category="destinos">
                    <i class="fas fa-map-marker-alt"></i>
                    Destinos
                </button>
                <button class="filter-btn" data-category="consejos">
                    <i class="fas fa-lightbulb"></i>
                    Consejos
                </button>
                <button class="filter-btn" data-category="noticias">
                    <i class="fas fa-newspaper"></i>
                    Noticias
                </button>
                <button class="filter-btn" data-category="experiencias">
                    <i class="fas fa-star"></i>
                    Experiencias
                </button>
            </div>
        </div>
    </section>

    <!-- Grid de Artículos -->
    <section class="blog-grid">
        <div class="container">
            <div class="articles-grid">
                <!-- Artículo 1: Vuelos en Perú -->
                <article class="article-card" data-category="consejos">
                    <div class="article-image">
                        <img src="https://images.unsplash.com/photo-1569629743817-70d8db6c323b?w=600&h=400&fit=crop"
                            alt="Vuelos en Perú - Aerolínea del Sur">
                        <div class="article-category">Consejos</div>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">
                                <i class="fas fa-calendar"></i>
                                20 Diciembre 2025
                            </span>
                            <span class="article-read-time">
                                <i class="fas fa-clock"></i>
                                10 min
                            </span>
                        </div>
                        <h3 class="article-title">Vuelos en Perú: Descubre la Experiencia Aerolínea del Sur</h3>
                        <p class="article-excerpt">Descubre la experiencia de volar en Perú con Aerolínea del Sur. Vuelos charter, sobrevuelos, carga y ambulancia aérea.</p>
                        <a href="{{ route('blog.vuelos-peru', ['locale' => app()->getLocale()]) }}" class="article-link">
                            Leer más
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <!-- Artículo 2: Experiencias de Viaje en Jet Privado -->
                <article class="article-card" data-category="experiencias">
                    <div class="article-image">
                        <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=600&h=400&fit=crop"
                            alt="Experiencia de viaje en jet privado">
                        <div class="article-category">Experiencias</div>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">
                                <i class="fas fa-calendar"></i>
                                22 Diciembre 2025
                            </span>
                            <span class="article-read-time">
                                <i class="fas fa-clock"></i>
                                8 min
                            </span>
                        </div>
                        <h3 class="article-title">¿Cómo es la experiencia de un Viaje en Jet Privado?</h3>
                        <p class="article-excerpt">Descubre la emoción de volar en una aeronave privada con Aerolínea del Sur. Un viaje único y memorable.</p>
                        <a href="{{ route('blog.experiencias-de-viaje', ['locale' => app()->getLocale()]) }}" class="article-link">
                            Leer más
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <!-- Artículo 3: Machu Picchu -->
                <article class="article-card" data-category="destinos">
                    <div class="article-image">
                        <img src="https://images.unsplash.com/photo-1526392060635-9d6019884377?w=600&h=400&fit=crop"
                            alt="Machu Picchu - Perú">
                        <div class="article-category">Destinos</div>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">
                                <i class="fas fa-calendar"></i>
                                22 Diciembre 2025
                            </span>
                            <span class="article-read-time">
                                <i class="fas fa-clock"></i>
                                9 min
                            </span>
                        </div>
                        <h3 class="article-title">Descubre la Maravilla del Mundo: Machu Picchu</h3>
                        <p class="article-excerpt">¡Haz realidad tu viaje a la ciudadela inca! Descubre los secretos de Machu Picchu y cómo visitar esta maravilla.</p>
                        <a href="{{ route('blog.machu-picchu-peru', ['locale' => app()->getLocale()]) }}" class="article-link">
                            Leer más
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <!-- Artículo 4: Aventura en Cusco -->
                <article class="article-card" data-category="consejos">
                    <div class="article-image">
                        <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?w=600&h=400&fit=crop"
                            alt="Aventura en Cusco">
                        <div class="article-category">Consejos</div>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">
                                <i class="fas fa-calendar"></i>
                                26 Diciembre 2025
                            </span>
                            <span class="article-read-time">
                                <i class="fas fa-clock"></i>
                                12 min
                            </span>
                        </div>
                        <h3 class="article-title">Guía Completa: Cómo Preparar tu Primera Aventura a Cusco</h3>
                        <p class="article-excerpt">Todo lo que necesitas saber para preparar tu aventura en Cusco: clima, equipaje, altitud y actividades imperdibles.</p>
                        <a href="{{ route('blog.aventura-cusco', ['locale' => app()->getLocale()]) }}" class="article-link">
                            Leer más
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Botón Cargar Más 
                                    <div class="load-more-section">
                                        <button class="btn-primary load-more-btn">
                                            <span>Cargar más artículos</span>
                                        </button>
                                    </div>-->
        </div>
    </section>

    <!-- Newsletter Section 
                            <section class="newsletter-section">
                                <div class="container">
                                    <div class="newsletter-content">
                                        <div class="newsletter-text">
                                            <h2><?= $h2_1 ?></h2>
                                            <p><?= $p_7 ?></p>
                                        </div>
                                        <div class="newsletter-form">
                                            <form class="newsletter-form-container">
                                                <input type="email" placeholder="Tu correo electrónico" required>
                                                <button type="submit" class="btn-primary">
                                                    <span>Suscribirse</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section> -->

    <script>
        // Filtros de categorías
        document.addEventListener('DOMContentLoaded', function () {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const articles = document.querySelectorAll('.article-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remover clase active de todos los botones
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Agregar clase active al botón clickeado
                    button.classList.add('active');

                    const category = button.getAttribute('data-category');

                    articles.forEach(article => {
                        if (category === 'all' || article.getAttribute('data-category') === category) {
                            article.style.display = 'block';
                            article.style.animation = 'fadeInUp 0.6s ease forwards';
                        } else {
                            article.style.display = 'none';
                        }
                    });
                });
            });

            // Animación de scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'fadeInUp 0.6s ease forwards';
                    }
                });
            }, observerOptions);

            articles.forEach(article => {
                observer.observe(article);
            });
        });
    </script>
@endsection