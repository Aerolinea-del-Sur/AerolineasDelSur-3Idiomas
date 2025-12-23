@php
    $seo = seo()
        ->title(__('blog.machu_picchu.title'))
        ->description(__('blog.machu_picchu.description'))
        ->keywords(['machu picchu', 'viajes peru', 'turismo cusco', 'aerolinea del sur', 'tren a machu picchu'])
        ->image(asset('img/blog/machu-picchu-experience.jpg'))
        ->canonical(url(app()->getLocale() . '/blog/machu-picchu'))
        ->addSchema([
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => __('blog.machu_picchu.headline'),
            'description' => __('blog.machu_picchu.intro_p1'),
            'image' => asset('img/blog/machu-picchu-experience.jpg'),
            'author' => [
                '@type' => 'Organization',
                'name' => 'Aerolínea del Sur'
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Aerolínea del Sur',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('img/logo.webp')
                ]
            ],
            'datePublished' => '2025-12-22',
            'dateModified' => '2025-12-22'
        ]);
@endphp

@extends('a_EncabezadoFooter.princi')

@push('seo')
    {!! $seo !!}
@endpush

@section('content')

    <!-- CSS del blog MEJORADO -->
    <link rel="stylesheet" href="{{ asset('public/css/paginas/blog/blog-improved.css') }}">

    <!-- Reading progress bar -->
    <div class="reading-progress" id="reading-progress" role="progressbar" aria-label="Progreso de lectura"></div>

    <!-- Breadcrumbs -->
    <nav class="breadcrumbs" aria-label="Breadcrumb" style="max-width:1200px; margin:0 auto; padding:30px 2rem 0;">
        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"
            style="color:#c9a227; text-decoration:none;">{{ __('blog.machu_picchu.breadcrumb_home') }}</a>
        <span style="color:#666; margin:0 0.5rem;">/</span>
        <a href="{{ url(app()->getLocale() . '/blog') }}"
            style="color:#c9a227; text-decoration:none;">{{ __('blog.machu_picchu.breadcrumb_blog') }}</a>
        <span style="color:#666; margin:0 0.5rem;">/</span>
        <strong style="color:#fff;">{{ __('blog.machu_picchu.breadcrumb_current') }}</strong>
    </nav>

    <div class="container" style="padding-top:4rem;">
        <article id="main-content" role="main">

            <!-- Header del Artículo -->
            <header class="article-header">
                <span class="category-badge">{{ __('blog.machu_picchu.category') }}</span>
                <h1>{{ __('blog.machu_picchu.headline') }}</h1>
                <div class="article-meta-large">
                    <span><i class="fas fa-calendar-alt"></i> <time datetime="2025-12-22">22 de Diciembre,
                            2025</time></span>
                    <span><i class="fas fa-clock"></i> {{ __('blog.machu_picchu.read_time') }}</span>
                    <span><i class="fas fa-user"></i> {{ __('blog.machu_picchu.author') }}</span>
                </div>
            </header>

            <!-- Imagen Destacada -->
            <div class="featured-image-container">
                <img src="https://images.unsplash.com/photo-1526392060635-9d6019884377?w=1200&h=600&fit=crop"
                    alt="Vista Panorámica de Machu Picchu" class="featured-image" loading="lazy">
            </div>

            <div class="article-main-content">

                <!-- Intro -->
                <p>{{ __('blog.machu_picchu.intro_p1') }}</p>
                <p>{{ __('blog.machu_picchu.intro_p2') }}</p>
                <p>{{ __('blog.machu_picchu.intro_p3') }}</p>

                <!-- Circuitos -->
                <h2>{{ __('blog.machu_picchu.circuits_title') }}</h2>
                <p>{{ __('blog.machu_picchu.circuits_intro') }}</p>

                <h3>{{ __('blog.machu_picchu.circuit_1_title') }}</h3>
                <p>{{ __('blog.machu_picchu.circuit_1_text') }}</p>
                <ul>
                    <li><strong>{{ __('blog.machu_picchu.circuit_1_a_title') }}</strong>
                        {{ __('blog.machu_picchu.circuit_1_a_text') }}</li>
                    <li><strong>{{ __('blog.machu_picchu.circuit_1_b_title') }}</strong>
                        {{ __('blog.machu_picchu.circuit_1_b_text') }}</li>
                    <li><strong>{{ __('blog.machu_picchu.circuit_1_c_title') }}</strong>
                        {{ __('blog.machu_picchu.circuit_1_c_text') }}</li>
                    <li><strong>{{ __('blog.machu_picchu.circuit_1_d_title') }}</strong>
                        {{ __('blog.machu_picchu.circuit_1_d_text') }}</li>
                </ul>

                <h3>{{ __('blog.machu_picchu.circuit_2_title') }}</h3>
                <p>{{ __('blog.machu_picchu.circuit_2_text') }}</p>
                <ul>
                    <li><strong>{{ __('blog.machu_picchu.circuit_2_a_title') }}</strong>
                        {{ __('blog.machu_picchu.circuit_2_a_text') }}</li>
                    <li><strong>{{ __('blog.machu_picchu.circuit_2_b_title') }}</strong>
                        {{ __('blog.machu_picchu.circuit_2_b_text') }}</li>
                </ul>

                <h3>{{ __('blog.machu_picchu.circuit_3_title') }}</h3>
                <p>{{ __('blog.machu_picchu.circuit_3_text') }}</p>
                <ul>
                    <li><strong>{{ __('blog.machu_picchu.circuit_3_a_title') }}</strong>
                        {{ __('blog.machu_picchu.circuit_3_a_text') }}</li>
                    <li><strong>{{ __('blog.machu_picchu.circuit_3_b_title') }}</strong>
                        {{ __('blog.machu_picchu.circuit_3_b_text') }}</li>
                    <li><strong>{{ __('blog.machu_picchu.circuit_3_c_title') }}</strong>
                        {{ __('blog.machu_picchu.circuit_3_c_text') }}</li>
                    <li><strong>{{ __('blog.machu_picchu.circuit_3_d_title') }}</strong>
                        {{ __('blog.machu_picchu.circuit_3_d_text') }}</li>
                </ul>

                <!-- Datos Clave (Highlight Box) -->
                <div class="highlight-box">
                    <strong>{{ __('blog.machu_picchu.data_title') }}</strong>
                    <ul>
                        <li><strong>{{ __('blog.machu_picchu.data_capacity_title') }}</strong>
                            {{ __('blog.machu_picchu.data_capacity_text') }}</li>
                        <li><strong>{{ __('blog.machu_picchu.data_tolerance_title') }}</strong>
                            {{ __('blog.machu_picchu.data_tolerance_text') }}</li>
                    </ul>
                </div>

                <!-- Mejor Momento -->
                <h2>{{ __('blog.machu_picchu.best_time_title') }}</h2>
                <p>{{ __('blog.machu_picchu.best_time_intro') }}</p>
                <ul>
                    <li><strong>{{ __('blog.machu_picchu.season_dry_title') }}</strong>
                        {{ __('blog.machu_picchu.season_dry_text') }}</li>
                    <li><strong>{{ __('blog.machu_picchu.season_rain_title') }}</strong>
                        {{ __('blog.machu_picchu.season_rain_text') }}</li>
                </ul>

                <!-- Recorriendo la Ciudadela -->
                <h2>{{ __('blog.machu_picchu.touring_title') }}</h2>
                <p>{{ __('blog.machu_picchu.touring_intro') }}</p>
                <ul>
                    <li><strong>{{ __('blog.machu_picchu.site_intihuatana_title') }}</strong>
                        {{ __('blog.machu_picchu.site_intihuatana_text') }}</li>
                    <li><strong>{{ __('blog.machu_picchu.site_sun_temple_title') }}</strong>
                        {{ __('blog.machu_picchu.site_sun_temple_text') }}</li>
                    <li><strong>{{ __('blog.machu_picchu.site_main_temple_title') }}</strong>
                        {{ __('blog.machu_picchu.site_main_temple_text') }}</li>
                    <li><strong>{{ __('blog.machu_picchu.site_sacred_rock_title') }}</strong>
                        {{ __('blog.machu_picchu.site_sacred_rock_text') }}</li>
                    <li><strong>{{ __('blog.machu_picchu.site_condor_temple_title') }}</strong>
                        {{ __('blog.machu_picchu.site_condor_temple_text') }}</li>
                </ul>

                <!-- Confort y Gastronomía -->
                <h2>{{ __('blog.machu_picchu.comfort_title') }}</h2>
                <p>{{ __('blog.machu_picchu.comfort_intro') }}</p>
                <ul>
                    <li><strong>{{ __('blog.machu_picchu.gastronomy_title') }}</strong>
                        {{ __('blog.machu_picchu.gastronomy_text') }}</li>
                    <li><strong>{{ __('blog.machu_picchu.hotels_title') }}</strong>
                        {{ __('blog.machu_picchu.hotels_text') }}</li>
                </ul>
                <p>{{ __('blog.machu_picchu.comfort_outro') }}</p>

                <!-- Recomendaciones -->
                <div class="cta-box" style="background-color: #2c3e50; border-left: 5px solid #c9a227;">
                    <h3>{{ __('blog.machu_picchu.recommendations_title') }}</h3>
                    <p>{{ __('blog.machu_picchu.recommendations_intro') }}</p>
                    <ul style="color: #ddd;">
                        <li><strong>{{ __('blog.machu_picchu.rec_booking_title') }}</strong>
                            {{ __('blog.machu_picchu.rec_booking_text') }}</li>
                        <li><strong>{{ __('blog.machu_picchu.rec_time_title') }}</strong>
                            {{ __('blog.machu_picchu.rec_time_text') }}</li>
                        <li><strong>{{ __('blog.machu_picchu.rec_tours_title') }}</strong>
                            {{ __('blog.machu_picchu.rec_tours_text') }}</li>
                    </ul>
                </div>

            </div>
        </article>
    </div>

    <!-- Scripts al final -->
    <script>
        // Barra de progreso de lectura
        window.onscroll = function () {
            let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            let scrolled = (winScroll / height) * 100;
            document.getElementById("reading-progress").style.width = scrolled + "%";
        };
    </script>

@endsection