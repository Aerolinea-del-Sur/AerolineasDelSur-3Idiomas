@php
    $seo = seo()
        ->title(__('blog.experiencias_viaje.title'))
        ->description(__('blog.experiencias_viaje.description'))
        ->keywords(['jet privado peru', 'vuelos privados', 'charter peru', 'aerolinea del sur', 'viajes de lujo', 'experiencia jet privado', 'aviacion ejecutiva peru'])
        ->image(asset('img/blog/aerolinea-sur-experience.jpg'))
        ->canonical(url(app()->getLocale() . '/blog/Experiencias-de-Viaje'))
        ->addSchema([
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => __('blog.experiencias_viaje.headline'),
            'description' => __('blog.experiencias_viaje.intro_p1'),
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
            'datePublished' => '2025-12-22T11:00:00-05:00',
            'dateModified' => '2025-12-26T15:00:00-05:00',
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => url(app()->getLocale() . '/blog/Experiencias-de-Viaje')
            ],
            'articleSection' => 'Experiencias',
            'wordCount' => 900,
            'inLanguage' => app()->getLocale(),
            'about' => [
                '@type' => 'Service',
                'name' => 'Vuelos Charter Privados',
                'description' => 'Servicio de vuelos privados ejecutivos en Perú',
                'provider' => [
                    '@type' => 'Organization',
                    'name' => 'Aerolínea del Sur'
                ]
            ]
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
            style="color:#c9a227; text-decoration:none;">{{ __('blog.experiencias_viaje.breadcrumb_home') }}</a>
        <span style="color:#666; margin:0 0.5rem;">/</span>
        <a href="{{ url(app()->getLocale() . '/blog') }}"
            style="color:#c9a227; text-decoration:none;">{{ __('blog.experiencias_viaje.breadcrumb_blog') }}</a>
        <span style="color:#666; margin:0 0.5rem;">/</span>
        <strong style="color:#fff;">{{ __('blog.experiencias_viaje.breadcrumb_current') }}</strong>
    </nav>
    
    <div class="container" style="padding-top:4rem;">
        <article id="main-content" role="main">

            <!-- Header del Artículo -->
            <header class="article-header">
                <span class="category-badge">{{ __('blog.experiencias_viaje.category') }}</span>
                <h1>{{ __('blog.experiencias_viaje.headline') }}</h1>
                <div class="article-meta-large">
                    <span><i class="fas fa-calendar-alt"></i> <time datetime="2025-12-22">22 de Diciembre,
                            2025</time></span>
                    <span><i class="fas fa-clock"></i> {{ __('blog.experiencias_viaje.read_time') }}</span>
                    <span><i class="fas fa-user"></i> {{ __('blog.experiencias_viaje.author') }}</span>
                </div>
            </header>

            <!-- Imagen Destacada -->
            <div class="featured-image-container">
                <img src="https://images.unsplash.com/photo-1569629743817-70d8db6c323b?w=1200&h=600&fit=crop"
                    alt="Interior de Jet Privado de Lujo" class="featured-image" loading="lazy">
            </div>

            <div class="article-main-content">

                <!-- Intro -->
                <p>{{ __('blog.experiencias_viaje.intro_p1') }}</p>
                <p>{{ __('blog.experiencias_viaje.intro_p2') }}</p>
                <p>{{ __('blog.experiencias_viaje.intro_p3') }}</p>

                <!-- 1. Confort -->
                <h2>{{ __('blog.experiencias_viaje.section_1_title') }}</h2>
                <p>{{ __('blog.experiencias_viaje.section_1_intro') }}</p>

                <p><strong>{{ __('blog.experiencias_viaje.section_1_list_intro') }}</strong></p>
                <ul>
                    <li><strong>{{ __('blog.experiencias_viaje.section_1_item_1_title') }}</strong>
                        {{ __('blog.experiencias_viaje.section_1_item_1_text') }}</li>
                    <li><strong>{{ __('blog.experiencias_viaje.section_1_item_2_title') }}</strong>
                        {{ __('blog.experiencias_viaje.section_1_item_2_text') }}</li>
                </ul>
                <p>{{ __('blog.experiencias_viaje.section_1_outro') }}</p>

                <!-- 2. Eficiencia -->
                <h2>{{ __('blog.experiencias_viaje.section_2_title') }}</h2>
                <p>{{ __('blog.experiencias_viaje.section_2_intro') }}</p>

                <p><strong>{{ __('blog.experiencias_viaje.section_2_list_intro') }}</strong></p>
                <ul>
                    <li><strong>{{ __('blog.experiencias_viaje.section_2_item_1_title') }}</strong>
                        {{ __('blog.experiencias_viaje.section_2_item_1_text') }}</li>
                    <li><strong>{{ __('blog.experiencias_viaje.section_2_item_2_title') }}</strong>
                        {{ __('blog.experiencias_viaje.section_2_item_2_text') }}</li>
                    <li><strong>{{ __('blog.experiencias_viaje.section_2_item_3_title') }}</strong>
                        {{ __('blog.experiencias_viaje.section_2_item_3_text') }}</li>
                </ul>

                <!-- 3. Flexibilidad -->
                <h2>{{ __('blog.experiencias_viaje.section_3_title') }}</h2>
                <p>{{ __('blog.experiencias_viaje.section_3_intro') }}</p>

                <p><strong>{{ __('blog.experiencias_viaje.section_3_list_intro') }}</strong></p>
                <ul>
                    <li><strong>{{ __('blog.experiencias_viaje.section_3_item_1_title') }}</strong>
                        {{ __('blog.experiencias_viaje.section_3_item_1_text') }}</li>
                    <li><strong>{{ __('blog.experiencias_viaje.section_3_item_2_title') }}</strong>
                        {{ __('blog.experiencias_viaje.section_3_item_2_text') }}</li>
                </ul>
                <p>{{ __('blog.experiencias_viaje.section_3_outro') }}</p>

                <!-- 4. Privacidad -->
                <h2>{{ __('blog.experiencias_viaje.section_4_title') }}</h2>
                <p>{{ __('blog.experiencias_viaje.section_4_intro') }}</p>

                <p><strong>{{ __('blog.experiencias_viaje.section_4_list_intro') }}</strong></p>
                <ul>
                    <li><strong>{{ __('blog.experiencias_viaje.section_4_item_1_title') }}</strong>
                        {{ __('blog.experiencias_viaje.section_4_item_1_text') }}</li>
                    <li><strong>{{ __('blog.experiencias_viaje.section_4_item_2_title') }}</strong>
                        {{ __('blog.experiencias_viaje.section_4_item_2_text') }}</li>
                </ul>

                <div class="cta-box">
                    <h3>¿Listo para tu Experiencia en Jet Privado?</h3>
                    <p style="color: #ddd;">Solicita una cotización personalizada y descubre cómo podemos hacer realidad tu viaje en jet privado con Aerolínea del Sur.</p>
                    <a href="{{ route('vuelos', ['locale' => app()->getLocale()]) }}"
                        class="cta-button">Solicitar Cotización</a>
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