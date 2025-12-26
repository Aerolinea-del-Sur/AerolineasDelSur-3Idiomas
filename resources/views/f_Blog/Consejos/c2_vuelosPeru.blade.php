@php
    $seo = seo()
        ->title(__('blog.vuelos_peru.title'))
        ->description(__('blog.vuelos_peru.description'))
        ->keywords(['vuelos peru', 'aerolinea del sur', 'charter peru', 'sobrevuelos nazca', 'carga aerea peru', 'ambulancia aerea', 'vuelos privados peru', 'aviacion peru'])
        ->image(asset('img/blog/aerolinea-sur-experience.jpg'))
        ->canonical(url(app()->getLocale() . '/blog/Vuelos-Peru'))
        ->addSchema([
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => __('blog.vuelos_peru.headline'),
            'description' => __('blog.vuelos_peru.intro_p1'),
            'image' => [
                '@type' => 'ImageObject',
                'url' => asset('img/blog/aerolinea-sur-experience.jpg'),
                'width' => 1200,
                'height' => 630
            ],
            'author' => [
                '@type' => 'Organization',
                'name' => 'Aerolínea del Sur',
                'url' => url('/')
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Aerolínea del Sur',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('img/logo.webp')
                ]
            ],
            'datePublished' => '2025-12-20T10:00:00-05:00',
            'dateModified' => '2025-12-26T15:00:00-05:00',
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => url(app()->getLocale() . '/blog/Vuelos-Peru')
            ],
            'articleSection' => 'Consejos de Viaje',
            'wordCount' => 1200,
            'inLanguage' => app()->getLocale()
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
            style="color:#c9a227; text-decoration:none;">{{ __('blog.vuelos_peru.breadcrumb_home') }}</a>
        <span style="color:#666; margin:0 0.5rem;">/</span>
        <a href="{{ url(app()->getLocale() . '/blog') }}"
            style="color:#c9a227; text-decoration:none;">{{ __('blog.vuelos_peru.breadcrumb_blog') }}</a>
        <span style="color:#666; margin:0 0.5rem;">/</span>
        <strong style="color:#fff;">{{ __('blog.vuelos_peru.breadcrumb_current') }}</strong>
    </nav>

    <div class="container" style="padding-top:4rem;">
        <article id="main-content" role="main">

            <!-- Header del Artículo -->
            <header class="article-header">
                <span class="category-badge">{{ __('blog.vuelos_peru.category') }}</span>
                <h1>{{ __('blog.vuelos_peru.headline') }}</h1>
                <div class="article-meta-large">
                    <span><i class="fas fa-calendar-alt"></i> <time datetime="2025-12-20">20 de Diciembre,
                            2025</time></span>
                    <span><i class="fas fa-clock"></i> {{ __('blog.vuelos_peru.read_time') }}</span>
                    <span><i class="fas fa-user"></i> {{ __('blog.vuelos_peru.author') }}</span>
                </div>
            </header>

            <!-- Imagen Destacada -->
            <div class="featured-image-container">
                <img src="https://images.unsplash.com/photo-1569629743817-70d8db6c323b?w=1200&h=600&fit=crop"
                    alt="Avión de Aerolínea del Sur sobrevolando los Andes peruanos" class="featured-image" loading="lazy">
            </div>

            <div class="article-main-content">

                <!-- Intro -->
                <p>{!! __('blog.vuelos_peru.intro_p1') !!}</p>

                <p>{{ __('blog.vuelos_peru.intro_p2') }}</p>

                <div class="highlight-box">
                    <p><strong>{{ __('blog.vuelos_peru.highlight_intro') }}</strong>{{ __('blog.vuelos_peru.highlight_text') }}
                    </p>
                </div>

                <h2 id="conoce-servicios">{{ __('blog.vuelos_peru.know_services') }}</h2>
                <p>{{ __('blog.vuelos_peru.services_intro') }}</p>

                <!-- 1. Vuelos Privados -->
                <h3 id="charter">{{ __('blog.vuelos_peru.charter_title') }}</h3>
                <p>{{ __('blog.vuelos_peru.charter_intro') }}</p>

                <h4>{{ __('blog.vuelos_peru.benefits_title') }}</h4>
                <ul>
                    <li><strong>{{ __('blog.vuelos_peru.benefit_1_title') }}</strong>
                        {{ __('blog.vuelos_peru.benefit_1_text') }}</li>
                    <li><strong>{{ __('blog.vuelos_peru.benefit_2_title') }}</strong>
                        {{ __('blog.vuelos_peru.benefit_2_text') }}</li>
                    <li><strong>{{ __('blog.vuelos_peru.benefit_3_title') }}</strong>
                        {{ __('blog.vuelos_peru.benefit_3_text') }}</li>
                </ul>

                <div class="highlight-box">
                    <strong>{{ __('blog.vuelos_peru.charter_data_title') }}</strong>
                    <ul style="margin-top:0.5rem;">
                        <li><strong>{{ __('blog.vuelos_peru.charter_data_1_title') }}</strong>
                            {{ __('blog.vuelos_peru.charter_data_1_text') }}</li>
                        <li><strong>{{ __('blog.vuelos_peru.charter_data_2_title') }}</strong>
                            {{ __('blog.vuelos_peru.charter_data_2_text') }}</li>
                        <li><strong>{{ __('blog.vuelos_peru.charter_data_3_title') }}</strong>
                            {{ __('blog.vuelos_peru.charter_data_3_text') }}</li>
                    </ul>
                </div>

                <!-- 2. Sobrevuelos -->
                <h3 id="sobrevuelos">{{ __('blog.vuelos_peru.overflights_title') }}</h3>
                <img src="https://images.unsplash.com/photo-1526392060635-9d6019884377?w=800&h=400&fit=crop"
                    alt="Vista aérea de Cusco" style="width:100%; border-radius:10px; margin-bottom:1.5rem;">
                <p>{{ __('blog.vuelos_peru.overflights_intro') }}</p>

                <h4>{{ __('blog.vuelos_peru.destinations_title') }}</h4>
                <ul>
                    <li><strong>{{ __('blog.vuelos_peru.dest_1_title') }}</strong> {{ __('blog.vuelos_peru.dest_1_text') }}
                    </li>
                    <li><strong>{{ __('blog.vuelos_peru.dest_2_title') }}</strong> {{ __('blog.vuelos_peru.dest_2_text') }}
                    </li>
                    <li><strong>{{ __('blog.vuelos_peru.dest_3_title') }}</strong> {{ __('blog.vuelos_peru.dest_3_text') }}
                    </li>
                    <li><strong>{{ __('blog.vuelos_peru.dest_4_title') }}</strong> {{ __('blog.vuelos_peru.dest_4_text') }}
                    </li>
                </ul>

                <div class="highlight-box">
                    <strong>{{ __('blog.vuelos_peru.overflights_data_title') }}</strong>
                    <ul style="margin-top:0.5rem;">
                        <li><strong>{{ __('blog.vuelos_peru.overflights_data_1_title') }}</strong>
                            {{ __('blog.vuelos_peru.overflights_data_1_text') }}</li>
                        <li><strong>{{ __('blog.vuelos_peru.overflights_data_2_title') }}</strong>
                            {{ __('blog.vuelos_peru.overflights_data_2_text') }}</li>
                        <li><strong>{{ __('blog.vuelos_peru.overflights_data_3_title') }}</strong>
                            {{ __('blog.vuelos_peru.overflights_data_3_text') }}</li>
                    </ul>
                </div>

                <!-- 3. Carga Aérea -->
                <h3 id="carga">{{ __('blog.vuelos_peru.cargo_title') }}</h3>
                <p>{{ __('blog.vuelos_peru.cargo_intro') }}</p>

                <h4>{{ __('blog.vuelos_peru.cargo_strengths_title') }}</h4>
                <ul>
                    <li><strong>{{ __('blog.vuelos_peru.cargo_1_title') }}</strong>
                        {{ __('blog.vuelos_peru.cargo_1_text') }}</li>
                    <li><strong>{{ __('blog.vuelos_peru.cargo_2_title') }}</strong>
                        {{ __('blog.vuelos_peru.cargo_2_text') }}</li>
                    <li><strong>{{ __('blog.vuelos_peru.cargo_3_title') }}</strong>
                        {{ __('blog.vuelos_peru.cargo_3_text') }}</li>
                </ul>

                <div class="highlight-box">
                    <strong>{{ __('blog.vuelos_peru.cargo_data_title') }}</strong>
                    <ul style="margin-top:0.5rem;">
                        <li><strong>{{ __('blog.vuelos_peru.cargo_data_1_title') }}</strong>
                            {{ __('blog.vuelos_peru.cargo_data_1_text') }}</li>
                        <li><strong>{{ __('blog.vuelos_peru.cargo_data_2_title') }}</strong>
                            {{ __('blog.vuelos_peru.cargo_data_2_text') }}</li>
                        <li><strong>{{ __('blog.vuelos_peru.cargo_data_3_title') }}</strong>
                            {{ __('blog.vuelos_peru.cargo_data_3_text') }}</li>
                    </ul>
                </div>

                <!-- 4. Ambulancia Aérea -->
                <h3 id="ambulancia">{{ __('blog.vuelos_peru.ambulance_title') }}</h3>
                <p>{{ __('blog.vuelos_peru.ambulance_intro') }}</p>

                <h4>{{ __('blog.vuelos_peru.ambulance_commitment_title') }}</h4>
                <ul>
                    <li><strong>{{ __('blog.vuelos_peru.ambulance_commitment_1_title') }}</strong>
                        {{ __('blog.vuelos_peru.ambulance_commitment_1_text') }}</li>
                    <li><strong>{{ __('blog.vuelos_peru.ambulance_commitment_2_title') }}</strong>
                        {{ __('blog.vuelos_peru.ambulance_commitment_2_text') }}</li>
                </ul>

                <div class="highlight-box">
                    <strong>{{ __('blog.vuelos_peru.ambulance_data_title') }}</strong>
                    <ul style="margin-top:0.5rem;">
                        <li><strong>{{ __('blog.vuelos_peru.ambulance_data_1_title') }}</strong>
                            {{ __('blog.vuelos_peru.ambulance_data_1_text') }}</li>
                        <li><strong>{{ __('blog.vuelos_peru.ambulance_data_2_title') }}</strong>
                            {{ __('blog.vuelos_peru.ambulance_data_2_text') }}</li>
                    </ul>
                </div>

                <div class="cta-box">
                    <h3>{{ __('blog.vuelos_peru.ambulance_cta_title') }}</h3>
                    <p style="color: #ddd;">{{ __('blog.vuelos_peru.ambulance_cta_text') }}</p>
                    <a href="{{ route('aeromedico', ['locale' => app()->getLocale()]) }}"
                        class="cta-button">{{ __('blog.vuelos_peru.request_emergency') }}</a>
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