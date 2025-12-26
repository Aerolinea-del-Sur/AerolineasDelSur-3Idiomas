@php
    $seo = seo()
        ->title(__('blog.aventura_cusco.title'))
        ->description(__('blog.aventura_cusco.description'))
        ->keywords(['aventura cusco', 'trekking cusco', 'actividades cusco', 'guía turismo cusco', 'que hacer en cusco', 'preparar viaje cusco'])
        ->image(asset('img/blog/cusco-aventura.jpg'))
        ->canonical(url(app()->getLocale() . '/blog/Aventura-Cusco'))
        ->addSchema([
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => __('blog.aventura_cusco.headline'),
            'description' => __('blog.aventura_cusco.intro_p1'),
            'image' => asset('img/blog/cusco-aventura.jpg'),
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
            'datePublished' => '2025-12-26',
            'dateModified' => '2025-12-26'
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
            style="color:#c9a227; text-decoration:none;">{{ __('blog.aventura_cusco.breadcrumb_home') }}</a>
        <span style="color:#666; margin:0 0.5rem;">/</span>
        <a href="{{ url(app()->getLocale() . '/blog') }}"
            style="color:#c9a227; text-decoration:none;">{{ __('blog.aventura_cusco.breadcrumb_blog') }}</a>
        <span style="color:#666; margin:0 0.5rem;">/</span>
        <strong style="color:#fff;">{{ __('blog.aventura_cusco.breadcrumb_current') }}</strong>
    </nav>

    <div class="container" style="padding-top:4rem;">
        <article id="main-content" role="main">

            <!-- Header del Artículo -->
            <header class="article-header">
                <span class="category-badge">{{ __('blog.aventura_cusco.category') }}</span>
                <h1>{{ __('blog.aventura_cusco.headline') }}</h1>
                <div class="article-meta-large">
                    <span><i class="fas fa-calendar-alt"></i> <time datetime="2025-12-26">26 de Diciembre,
                            2025</time></span>
                    <span><i class="fas fa-clock"></i> {{ __('blog.aventura_cusco.read_time') }}</span>
                    <span><i class="fas fa-user"></i> {{ __('blog.aventura_cusco.author') }}</span>
                </div>
            </header>

            <!-- Imagen Destacada -->
            <div class="featured-image-container">
                <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?w=1200&h=600&fit=crop"
                    alt="Plaza de Armas de Cusco al atardecer con la Catedral iluminada" class="featured-image" loading="lazy">
            </div>

            <div class="article-main-content">

                <!-- Intro -->
                <p>{{ __('blog.aventura_cusco.intro_p1') }}</p>
                <p>{{ __('blog.aventura_cusco.intro_p2') }}</p>

                <div class="highlight-box">
                    <p><strong>{{ __('blog.aventura_cusco.highlight_intro') }}</strong>{{ __('blog.aventura_cusco.highlight_text') }}
                    </p>
                </div>

                <h2 id="cuando-ir">{{ __('blog.aventura_cusco.when_visit_title') }}</h2>
                <p>{{ __('blog.aventura_cusco.when_visit_intro') }}</p>

                <h3>{{ __('blog.aventura_cusco.dry_season_title') }}</h3>
                <p>{{ __('blog.aventura_cusco.dry_season_text') }}</p>

                <h3>{{ __('blog.aventura_cusco.rain_season_title') }}</h3>
                <p>{{ __('blog.aventura_cusco.rain_season_text') }}</p>

                <h2 id="que-empacar">{{ __('blog.aventura_cusco.what_pack_title') }}</h2>
                <p>{{ __('blog.aventura_cusco.what_pack_intro') }}</p>

                <h3>{{ __('blog.aventura_cusco.essential_clothing_title') }}</h3>
                <ul>
                    <li><strong>{{ __('blog.aventura_cusco.clothing_1_title') }}</strong> {{ __('blog.aventura_cusco.clothing_1_text') }}</li>
                    <li><strong>{{ __('blog.aventura_cusco.clothing_2_title') }}</strong> {{ __('blog.aventura_cusco.clothing_2_text') }}</li>
                    <li><strong>{{ __('blog.aventura_cusco.clothing_3_title') }}</strong> {{ __('blog.aventura_cusco.clothing_3_text') }}</li>
                    <li><strong>{{ __('blog.aventura_cusco.clothing_4_title') }}</strong> {{ __('blog.aventura_cusco.clothing_4_text') }}</li>
                </ul>

                <h3>{{ __('blog.aventura_cusco.essential_items_title') }}</h3>
                <ul>
                    <li><strong>{{ __('blog.aventura_cusco.item_1_title') }}</strong> {{ __('blog.aventura_cusco.item_1_text') }}</li>
                    <li><strong>{{ __('blog.aventura_cusco.item_2_title') }}</strong> {{ __('blog.aventura_cusco.item_2_text') }}</li>
                    <li><strong>{{ __('blog.aventura_cusco.item_3_title') }}</strong> {{ __('blog.aventura_cusco.item_3_text') }}</li>
                    <li><strong>{{ __('blog.aventura_cusco.item_4_title') }}</strong> {{ __('blog.aventura_cusco.item_4_text') }}</li>
                </ul>

                <h2 id="aclimatacion">{{ __('blog.aventura_cusco.altitude_title') }}</h2>
                <p>{{ __('blog.aventura_cusco.altitude_intro') }}</p>

                <h3>{{ __('blog.aventura_cusco.first_48h_title') }}</h3>
                <p>{{ __('blog.aventura_cusco.first_48h_text') }}</p>

                <div class="highlight-box">
                    <strong>{{ __('blog.aventura_cusco.altitude_tips_title') }}</strong>
                    <ul style="margin-top:0.5rem;">
                        <li><strong>{{ __('blog.aventura_cusco.tip_1_title') }}</strong> {{ __('blog.aventura_cusco.tip_1_text') }}</li>
                        <li><strong>{{ __('blog.aventura_cusco.tip_2_title') }}</strong> {{ __('blog.aventura_cusco.tip_2_text') }}</li>
                        <li><strong>{{ __('blog.aventura_cusco.tip_3_title') }}</strong> {{ __('blog.aventura_cusco.tip_3_text') }}</li>
                    </ul>
                </div>

                <h2 id="actividades">{{ __('blog.aventura_cusco.activities_title') }}</h2>
                <p>{{ __('blog.aventura_cusco.activities_intro') }}</p>

                <h3>{{ __('blog.aventura_cusco.activity_1_title') }}</h3>
                <p>{{ __('blog.aventura_cusco.activity_1_text') }}</p>

                <h3>{{ __('blog.aventura_cusco.activity_2_title') }}</h3>
                <p>{{ __('blog.aventura_cusco.activity_2_text') }}</p>

                <h3>{{ __('blog.aventura_cusco.activity_3_title') }}</h3>
                <p>{{ __('blog.aventura_cusco.activity_3_text') }}</p>

                <div class="cta-box">
                    <h3>{{ __('blog.aventura_cusco.cta_title') }}</h3>
                    <p style="color: #ddd;">{{ __('blog.aventura_cusco.cta_text') }}</p>
                    <a href="{{ route('sobrevuelos', ['locale' => app()->getLocale()]) }}"
                        class="cta-button">{{ __('blog.aventura_cusco.cta_button') }}</a>
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
