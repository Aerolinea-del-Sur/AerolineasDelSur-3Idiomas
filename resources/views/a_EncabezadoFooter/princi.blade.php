<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @php
            // SEO Configuration - Can be overridden by individual pages
            $seo = $seo ?? [
                'title' => 'Aerolínea del Sur | Vuelos Privados y Charter en Perú...',
                'description' => 'Servicios aéreos premium en Perú: vuelos charter, helicópteros, transporte médico certificado y carga especializada. Seguridad garantizada desde Cusco.',
                'keywords' => 'vuelos privados perú, charter cusco, helicóptero cusco, transporte aéreo médico, carga aérea perú',
                'og_image' => asset('img/logo.webp'),
                'canonical' => url()->current(),
                'author' => 'Aerolínea del Sur'
            ];
        @endphp
        
        {{-- SEO Logic: Stack (Priority) vs Legacy Array (Fallback) --}}
        @php
            $seoContent = trim($__env->yieldPushContent('seo'));
        @endphp

        @if(!empty($seoContent))
            {!! $seoContent !!}
        @else
            {{-- LEGACY Array SEO (Fallback) --}}
            @if(isset($seo) && is_array($seo))
                <title>{{ $seo['title'] ?? config('app.name') }}</title>
                <meta name="description" content="{{ $seo['description'] ?? '' }}" />
                <meta name="keywords" content="{{ $seo['keywords'] ?? '' }}" />
                <meta name="author" content="{{ $seo['author'] ?? 'Aerolínea del Sur' }}" />
                <link rel="canonical" href="{{ $seo['canonical'] ?? url()->current() }}" />
                
                <!-- Open Graph -->
                <meta property="og:title" content="{{ $seo['title'] ?? '' }}">
                <meta property="og:description" content="{{ $seo['description'] ?? '' }}">
                @if(isset($seo['og_image']))
                <meta property="og:image" content="{{ $seo['og_image'] }}">
                @endif
                <meta property="og:url" content="{{ $seo['canonical'] ?? url()->current() }}">
                <meta property="og:type" content="website">
                
                <!-- Twitter Card -->
                <meta name="twitter:card" content="summary_large_image">
                <meta name="twitter:title" content="{{ $seo['title'] ?? '' }}">
                <meta name="twitter:description" content="{{ $seo['description'] ?? '' }}">
                @if(isset($seo['og_image']))
                <meta name="twitter:image" content="{{ $seo['og_image'] }}">
                @endif
            @endif
        @endif
        
        <!-- Charset & Viewport (always present) -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            
        @php
            $cookieName = config('cookie-consent.cookie_name', 'laravel_cookie_consent');
            $hasConsent = request()->cookie($cookieName) !== null;
        @endphp
        
        @if($hasConsent)
        {{-- Google Tag Manager --}}
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KMWG894K');</script>
        {{-- End Google Tag Manager --}}
        
        {{-- Google Analytics 4 --}}
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-M5LKHSJ3ES"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-M5LKHSJ3ES');
        </script>
        {{-- End Google Analytics 4 --}}
        
        {{-- Microsoft Clarity --}}
        <script type="text/javascript">
            (function(c,l,a,r,i,t,y){
                c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
                y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
            })(window, document, "clarity", "script", "urx705cbbi");
        </script>
        {{-- End Microsoft Clarity --}}
        @endif
            
        <!-- Hreflang Tags (SEO Multi-idioma) -->
            <link rel="alternate" hreflang="es" href="{{ url('es' . request()->getPathInfo()) }}" />
            <link rel="alternate" hreflang="en" href="{{ url('en' . request()->getPathInfo()) }}" />
            <link rel="alternate" hreflang="pt" href="{{ url('pt' . request()->getPathInfo()) }}" />
            <link rel="alternate" hreflang="x-default" href="{{ url('es' . request()->getPathInfo()) }}" />
            <meta property="og:site_name" content="Aerolínea del Sur">
            <meta property="og:locale" content="es_PE">
            
        <!-- favicon -->
            <link rel="icon" type="image/x-icon" href="/favicon.ico">
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
            <link rel="icon" type="image/png" sizes="512x512" href="/android-chrome-512x512.png">
            <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
            <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicon.ico') }}">
            <!-- favicon - reconocimiento de site.webmanifest -->
            <link rel="manifest" href="{{ asset('site.webmanifest') }}">
            <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
            <meta name="theme-color" content="#C9A227">
        <!-- CONEXION A TIPOGRAFIAS -->
            <!-- CONEXION A TIPOGRAFIAS -->
            <!-- Preconnect para CDNs (mejora velocidad de carga) -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="preconnect" href="https://cdn.jsdelivr.net">
            <link rel="preconnect" href="https://cdnjs.cloudflare.com">
            
            <!-- Precarga de recursos críticos -->
            <!-- Images -->
            <link rel="preload" as="image" href="{{ asset('img/vder.webp') }}">
            <link rel="preload" as="image" href="{{ asset('img/vizq.webp') }}">
            <link rel="preload" as="image" href="{{ asset('img/logo.webp') }}" type="image/svg+xml">
            
            {{-- Preload de CSS eliminado - ya se cargan async con media="print" más abajo --}}
            
            <!-- Carga asíncrona de fuentes (no bloqueante) con font-display: swap -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" media="print" onload="this.media='all'">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
            
            <!-- Material Symbols - Carga asíncrona (no bloqueante) -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" media="print" onload="this.media='all'">
            
            <!-- Fallback para navegadores sin JavaScript -->
            <noscript>
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap">
            </noscript>   
        <!-- CONEXION A ESTILOS 
            <link rel="stylesheet" href="/css/princi.css">
            <link rel="stylesheet" href="/js/princi.js">-->
        
            <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
            <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicon.ico') }}">
            <link rel="manifest" href="{{ asset('site.webmanifest') }}">
            <meta name="theme-color" content="#C9A227">
            
            {{-- Bootstrap CSS - ELIMINADO (no se usa en el proyecto) --}}
            {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" media="print" onload="this.media='all'">
            <noscript>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
            </noscript> --}}
        <!-- CSS Separados - carga asíncrona -->
            <link rel="stylesheet" href="{{ asset('css/general.css') }}?v=2.1" media="print" onload="this.media='all'">
            <link rel="stylesheet" href="{{ asset('css/princi/header.css') }}?v=1.2" media="print" onload="this.media='all'">
            <link rel="stylesheet" href="{{ asset('css/princi/footer.css') }}" media="print" onload="this.media='all'">
            <noscript>
                <link rel="stylesheet" href="{{ asset('css/general.css') }}?v=2.1">
                <link rel="stylesheet" href="{{ asset('css/princi/header.css') }}?v=1.2">
                <link rel="stylesheet" href="{{ asset('css/princi/footer.css') }}">
            </noscript>

        <!-- CSS Crítico Inline - Previene FOUC (Flash of Unstyled Content) -->
        <style>
            /* Aplicar inmediatamente - texto claro por defecto para fondo oscuro */
            body {
                color: #E6E6E6;
                background: linear-gradient(135deg, #1D1D1D, #1c1c1c 50%, #181818 100%);
            }
        </style>

        <!-- Font Display Optimization para Font Awesome -->
        <style>
            /* Forzar font-display: swap para Font Awesome (Cloudflare CDN) */
            @font-face {
                font-family: 'Font Awesome 6 Free';
                font-style: normal;
                font-weight: 900;
                font-display: swap;
                src: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/webfonts/fa-solid-900.woff2') format('woff2');
            }
            
            @font-face {
                font-family: 'Font Awesome 6 Free';
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/webfonts/fa-regular-400.woff2') format('woff2');
            }
            
            @font-face {
                font-family: 'Font Awesome 6 Brands';
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/webfonts/fa-brands-400.woff2') format('woff2');
            }
        </style>

        <!-- Estilos del header importados de base.html (acotados al header) -->
        <style>
            /* CRITICAL: Mobile menu styles - Breakpoint at 1023px */
            .header-container { width: 100%; max-width: 1200px; padding: clamp(10px, 1.5vw, 24px); position: relative; }
            .header-wrapper { max-width: 100%; margin: 0 auto; display: flex; align-items: center; justify-content: center; gap: 8px; }
            .close-menu-btn { 
                display: none; 
                position: absolute; top: 20px; right: 25px; 
                background: none; border: none; color: #d4af37; 
                font-size: 35px; cursor: pointer; z-index: 1002;
                width: 50px; height: 50px; border-radius: 50%;
                transition: all 0.3s ease;
                align-items: center; justify-content: center;
            }
            .close-menu-btn:hover { 
                background: rgba(212, 175, 55, 0.1); 
                transform: rotate(90deg);
            }
            .close-menu-btn:active { 
                transform: rotate(90deg) scale(0.95);
            }

            .aero-btn {
                color: var(--accent); font-size: 11px; font-weight: 700; text-decoration: none;
                width: 150px; height: 85px; display: flex; align-items: center; justify-content: center;
                position: relative; background-repeat: no-repeat; background-size: contain; background-position: center;
                filter: drop-shadow(0 5px 15px rgba(0,0,0,0.3)); text-transform: uppercase; letter-spacing: 0.06em;
                padding-bottom: 5px; z-index: 5;
            }
            ol, ul {
                padding-left: 0rem;
            }
            .btn-left { padding-right: 20px; margin-right: -25px; background-image: url("{{ asset('img/vder.webp') }}"); }
            .btn-right { padding-left: 20px; margin-left: -25px; background-image: url("{{ asset('img/vizq.webp') }}"); }
            .aero-btn:hover { filter: none; transform: none; color: var(--accent); z-index: 15; }
            .aero-btn:active { transform: scale(0.98); }

            .nav-menu { display: flex; align-items: center; justify-content: center; gap: 24px; list-style: none; }
            .nav-menu li a { color: var(--pearl); text-decoration: none; font-size: 12px; font-weight: 600; text-transform: uppercase; transition: var(--transition); position: relative; display: inline-block; }
            .nav-menu li a:hover { color: var(--accent); text-shadow: 0 0 8px rgba(201, 162, 39, 0.4); }
            .nav-menu li a:focus-visible { outline: 2px solid var(--accent); outline-offset: 3px; border-radius: 6px; }

            .logo-center { width: 68px; height: 68px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; z-index: 20; }
            .logo-center img { width: 68px; height: 68px; object-fit: contain; filter: drop-shadow(0 2px 8px rgba(0,0,0,0.35)); }

            @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }

            /* MOBILE MENU - Active at 1023px and below */
            @media (max-width: 1023px) {
                .close-menu-btn { display: flex !important; }
                .header-container {
                    position: fixed !important; 
                    top: 0 !important; 
                    left: 0 !important; 
                    width: 100% !important; 
                    height: 100vh !important;
                    background: rgba(27, 27, 27, 0.98) !important; 
                    backdrop-filter: blur(20px) !important;
                    z-index: 1001 !important; 
                    padding: 0 !important;
                    opacity: 0 !important; 
                    visibility: hidden !important; 
                    pointer-events: none !important;
                    transition: opacity 0.3s ease, visibility 0.3s ease !important;
                    display: flex !important; 
                    align-items: center !important; 
                    justify-content: center !important; 
                    overflow-y: auto !important;
                }
                .header-container.active { 
                    opacity: 1 !important; 
                    visibility: visible !important; 
                    pointer-events: all !important; 
                }
                .header-wrapper { 
                    width: 100% !important; 
                    max-width: 400px !important; 
                    padding: 60px 20px 20px !important; 
                    gap: 25px !important; 
                    display: flex !important; 
                    flex-direction: column !important; 
                    align-items: center !important;
                }
                .main-nav-container { 
                    width: 100% !important; 
                    display: flex !important; 
                    flex-direction: column !important; 
                    align-items: center !important;
                    gap: 20px !important;
                }
                .main-nav-container .nav-menu:first-of-type { order: 1 !important; }
                .logo-center { order: 2 !important; width: 110px !important; height: 110px !important; margin: 15px 0 !important; }
                .logo-center img { width: 70px !important; height: 70px !important; }
                .main-nav-container .nav-menu:last-of-type { order: 3 !important; }
                .nav-menu { 
                    width: 100% !important; 
                    gap: 8px !important; 
                    display: flex !important; 
                    flex-direction: column !important;
                    align-items: center !important;
                }
                .nav-menu li { width: 100% !important; text-align: center !important; }
                .nav-menu li a { 
                    font-size: 14px !important; 
                    display: block !important; 
                    padding: 16px 20px !important; 
                    border-radius: 8px !important;
                    transition: all 0.3s ease !important;
                    transform: translateY(0) !important;
                }
                .nav-menu li a:hover {
                    background: rgba(212, 175, 55, 0.1) !important;
                }
                .aero-btn { 
                    width: 100% !important; 
                    max-width: 300px !important;
                    height: 60px !important; 
                    margin: 0 !important; 
                    background-image: none !important; 
                    border: 2px solid #d4af37 !important; 
                    border-radius: 40px !important; 
                    background-color: rgba(20,20,20,0.8) !important;
                    transition: all 0.3s ease !important;
                }
                .aero-btn:hover {
                    background-color: rgba(212, 175, 55, 0.1) !important;
                    border-color: #d4af37 !important;
                }
                .header-wrapper > .aero-btn:first-child { order: 0 !important; }
                .header-wrapper > .aero-btn:last-child { order: 4 !important; }
            }
        </style>
        
        <!-- Schema.org Structured Data (JSON-LD) for SEO -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "Organization",
                    "@id": "https://www.aerolineadelsur.com/#organization",
                    "name": "Aerolínea del Sur E.I.R.L.",
                    "legalName": "Aerolínea del Sur E.I.R.L.",
                    "url": "https://www.aerolineadelsur.com",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "{{ asset('img/logo.webp') }}",
                        "width": 200,
                        "height": 200
                    },
                    "description": "Servicios aéreos premium en Perú: vuelos charter, helicópteros, transporte médico certificado y carga especializada desde Cusco.",
                    "email": "contacto@aerolineadelsur.com.pe",
                    "telephone": "+51932475995",
                    "taxID": "20612563234",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "Av Pachacuteq N° 313 - Wanchaq",
                        "addressLocality": "Cusco",
                        "addressRegion": "Cusco",
                        "postalCode": "08000",
                        "addressCountry": "PE"
                    },
                    "contactPoint": [
                        {
                            "@type": "ContactPoint",
                            "telephone": "+51932475995",
                            "contactType": "Customer Service",
                            "areaServed": "PE",
                            "availableLanguage": ["es", "en"]
                        },
                        {
                            "@type": "ContactPoint",
                            "telephone": "+51932475995",
                            "contactType": "Emergency",
                            "areaServed": "PE",
                            "availableLanguage": ["es"],
                            "description": "Servicio aeromédico 24/7"
                        }
                    ],
                    "sameAs": [
                        "https://www.facebook.com/profile.php?id=61575792015865",
                        "https://www.instagram.com/aerolineadelsur/",
                        "https://www.tiktok.com/@aerolineadelsur",
                        "https://www.tripadvisor.com/Attraction_Review-g294314-d33262541-Reviews-Aerolinea_Del_Sur-Cusco_Cusco_Region.html"
                    ]
                },
                {
                    "@type": "LocalBusiness",
                    "@id": "https://www.aerolineadelsur.com/#business",
                    "name": "Aerolínea del Sur",
                    "image": "{{ asset('img/logo.webp') }}",
                    "priceRange": "$$$$",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "Av Pachacuteq N° 313 - Wanchaq",
                        "addressLocality": "Cusco",
                        "addressRegion": "Cusco",
                        "postalCode": "08000",
                        "addressCountry": "PE"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": -13.5247,
                        "longitude": -71.9675
                    },
                    "url": "https://www.aerolineadelsur.com",
                    "telephone": "+51932475995",
                    "email": "contacto@aerolineadelsur.com.pe",
                    "openingHoursSpecification": {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Monday",
                            "Tuesday",
                            "Wednesday",
                            "Thursday",
                            "Friday",
                            "Saturday",
                            "Sunday"
                        ],
                        "opens": "00:00",
                        "closes": "23:59"
                    }
                },
                {
                    "@type": "Service",
                    "@id": "https://www.aerolineadelsur.com/vuelos#service",
                    "serviceType": "Vuelos Charter Privados",
                    "provider": {
                        "@id": "https://www.aerolineadelsur.com/#organization"
                    },
                    "areaServed": {
                        "@type": "Country",
                        "name": "Perú"
                    },
                    "description": "Vuelos charter privados personalizados para negocios, turismo y traslados ejecutivos en Perú.",
                    "url": "https://www.aerolineadelsur.com/vuelos"
                },
                {
                    "@type": "Service",
                    "@id": "https://www.aerolineadelsur.com/helicopteros#service",
                    "serviceType": "Servicio de Helicópteros",
                    "provider": {
                        "@id": "https://www.aerolineadelsur.com/#organization"
                    },
                    "areaServed": {
                        "@type": "Country",
                        "name": "Perú"
                    },
                    "description": "Transporte aéreo en helicóptero para zonas remotas, rescate y operaciones especiales.",
                    "url": "https://www.aerolineadelsur.com/helicopteros"
                },
                {
                    "@type": "MedicalBusiness",
                    "@id": "https://www.aerolineadelsur.com/aeromedico#service",
                    "name": "Servicio Aeromédico Aerolínea del Sur",
                    "serviceType": "Transporte Aeromédico",
                    "provider": {
                        "@id": "https://www.aerolineadelsur.com/#organization"
                    },
                    "areaServed": {
                        "@type": "Country",
                        "name": "Perú"
                    },
                    "description": "Servicio aeromédico 24/7 para evacuaciones médicas, traslado de pacientes críticos y emergencias.",
                    "url": "https://www.aerolineadelsur.com/aeromedico",
                    "availableService": {
                        "@type": "MedicalProcedure",
                        "name": "Evacuación Médica Aérea"
                    }
                },
                {
                    "@type": "Service",
                    "@id": "https://www.aerolineadelsur.com/carga#service",
                    "serviceType": "Carga Aérea Especializada",
                    "provider": {
                        "@id": "https://www.aerolineadelsur.com/#organization"
                    },
                    "areaServed": {
                        "@type": "Country",
                        "name": "Perú"
                    },
                    "description": "Transporte de carga aérea especializada con entregas urgentes y grandes volúmenes.",
                    "url": "https://www.aerolineadelsur.com/carga"
                }
            ]
        }
        </script>
    </head>

    <body>
        {{-- Google Tag Manager (noscript) --}}
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMWG894K"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        {{-- End Google Tag Manager (noscript) --}}
        
        <!-- Encabezado (Header de base.html integrado) -->
            <header class="header">
                <!-- Selector de idioma premium tipo dropdown -->
                @php
                    $currentPath = request()->path();
                    $currentLocale = app()->getLocale();
                    $pathWithoutLocale = preg_replace('/^(es|en|pt)(\/|$)/', '', $currentPath);
                    $cleanPath = $pathWithoutLocale ? '/' . $pathWithoutLocale : '';
                    
                    $languages = [
                        'es' => [
                            'name' => 'Español',
                            'flag' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 750 500"><rect fill="#c60b1e" width="750" height="500"/><rect fill="#ffc400" y="125" width="750" height="250"/></svg>'
                        ],
                        'en' => [
                            'name' => 'English',
                            'flag' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30"><clipPath id="t"><path d="M30,15 h30 v15 z v15 h-30 z h-30 v-15 z v-15 h30 z"/></clipPath><path d="M0,0 v30 h60 v-30 z" fill="#012169"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/><path d="M0,0 L60,30 M60,0 L0,30" clip-path="url(#t)" stroke="#C8102E" stroke-width="4"/><path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/><path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/></svg>'
                        ],
                        'pt' => [
                            'name' => 'Português',
                            'flag' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 720 504"><rect fill="#009b3a" width="720" height="504"/><path fill="#fedf00" d="M0,252 l360,-144 l360,144 l-360,144 z"/><circle fill="#002776" cx="360" cy="252" r="72"/></svg>'
                        ]
                    ];
                @endphp
                
                <div class="language-selector-dropdown">
                    <!-- Botón que muestra idioma actual -->
                    <button type="button" class="lang-dropdown-btn">
                        <span class="flag-icon">{!! $languages[$currentLocale]['flag'] !!}</span>
                        <span class="lang-name">{{ $languages[$currentLocale]['name'] }}</span>
                        <svg class="dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <!-- Menú con todos los idiomas -->
                    <div class="lang-dropdown-menu">
                        @foreach($languages as $code => $lang)
                            <a href="{{ url($code . $cleanPath) }}" class="lang-dropdown-item {{ $currentLocale == $code ? 'active' : '' }}">
                                <span class="flag-icon">{!! $lang['flag'] !!}</span>
                                <span class="lang-name">{{ $lang['name'] }}</span>
                                @if($currentLocale == $code)
                                    <svg class="check-icon" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                @endif
                            </a>
                        @endforeach
                    </div>
                </div>
                
                <style>
                    .language-selector-dropdown {
                        position: absolute;
                        top: 15px;
                        right: 20px;
                        z-index: 1001;
                    }
                    @media (min-width: 1025px) and (max-width: 1199px) {
                        .language-selector-dropdown {
                            position: absolute;
                            top: 15px;
                            right: 70px;
                            z-index: 1001;
                        }
                    }
                    @media (min-width: 769px) and (max-width: 1021px) {
                        .language-selector-dropdown {
                            position: absolute;
                            top: 15px;
                            right: 70px;
                            z-index: 1001;
                        }
                    }
                    .lang-dropdown-btn {
                        display: flex;
                        align-items: center;
                        gap: 10px;
                        padding: 10px 16px;
                        backdrop-filter: blur(10px);
                        background: rgba(28, 28, 28, 0.9);
                        border: 2px solid rgba(201, 162, 39, 0.5);
                        border-radius: 10px;
                        color: #fff;
                        font-size: 15px;
                        font-weight: 600;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
                    }
                    
                    .lang-dropdown-btn:hover {
                        border-color: #c9a227;
                        box-shadow: 0 6px 20px rgba(201, 162, 39, 0.3);
                        transform: translateY(-2px);
                    }
                    
                    .lang-dropdown-btn.active .dropdown-arrow {
                        transform: rotate(180deg);
                    }
                    
                    .flag-icon {
                        width: 28px;
                        height: 20px;
                        display: inline-block;
                        border-radius: 3px;
                        overflow: hidden;
                        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
                    }
                    
                    .flag-icon svg {
                        width: 100%;
                        height: 100%;
                        display: block;
                    }
                    
                    .dropdown-arrow {
                        width: 16px;
                        height: 16px;
                        transition: transform 0.3s ease;
                    }
                    
                    .lang-dropdown-menu {
                        position: absolute;
                        top: calc(100% + 10px);
                        right: 0;
                        min-width: 200px;
                        backdrop-filter: blur(15px);
                        background: rgba(28, 28, 28, 0.95);
                        border: 2px solid rgba(201, 162, 39, 0.5);
                        border-radius: 12px;
                        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
                        opacity: 0;
                        visibility: hidden;
                        transform: translateY(-10px);
                        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                        overflow: hidden;
                    }
                    
                    .lang-dropdown-menu.show {
                        opacity: 1;
                        visibility: visible;
                        transform: translateY(0);
                    }
                    
                    .lang-dropdown-item {
                        display: flex;
                        align-items: center;
                        gap: 12px;
                        padding: 12px 16px;
                        color: #fff;
                        text-decoration: none;
                        font-size: 15px;
                        font-weight: 500;
                        background: transparent;
                        border-left: 3px solid transparent;
                        transition: all 0.2s ease;
                    }
                    
                    .lang-dropdown-item.active {
                        color: #c9a227;
                        font-weight: 700;
                        background: rgba(201, 162, 39, 0.1);
                        border-left-color: #c9a227;
                    }
                    
                    .lang-dropdown-item:hover {
                        background: rgba(201, 162, 39, 0.2);
                        border-left-color: #c9a227;
                        padding-left: 20px;
                    }
                    
                    .check-icon {
                        width: 16px;
                        height: 16px;
                        margin-left: auto;
                    }
                    
                    @media (max-width: 768px) {
                        .language-selector-dropdown {
                            top: 12px;
                            right: 70px;
                        }
                        
                        .lang-dropdown-btn {
                            padding: 8px 12px;
                            font-size: 14px;
                        }
                        
                        .lang-dropdown-btn .lang-name {
                            display: none;
                        }
                        
                        .lang-dropdown-menu {
                            min-width: 160px;
                        }
                    }
                </style>
                
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const langBtn = document.querySelector('.lang-dropdown-btn');
                        const langMenu = document.querySelector('.lang-dropdown-menu');
                        
                        if (langBtn && langMenu) {
                            // Toggle dropdown
                            langBtn.addEventListener('click', function(event) {
                                event.stopPropagation();
                                langBtn.classList.toggle('active');
                                langMenu.classList.toggle('show');
                                console.log('Dropdown toggled:', langMenu.classList.contains('show'));
                            });
                            
                            // Cerrar al hacer clic fuera
                            document.addEventListener('click', function(event) {
                                if (!langBtn.contains(event.target) && !langMenu.contains(event.target)) {
                                    langBtn.classList.remove('active');
                                    langMenu.classList.remove('show');
                                }
                            });
                            
                            // Cerrar con ESC
                            document.addEventListener('keydown', function(event) {
                                if (event.key === 'Escape') {
                                    langBtn.classList.remove('active');
                                    langMenu.classList.remove('show');
                                }
                            });
                        } else {
                            console.error('Language selector elements not found');
                        }
                    });
                </script>

                <!-- Barra superior móvil -->
                <div class="mobile-top-bar">
                    <a href="/" class="mobile-logo" aria-label="Inicio">
                        <img src="{{ asset('img/logo.webp') }}" alt="Logo">
                    </a>
                    <button class="hamburger-btn" aria-label="Abrir menú" onclick="toggleMenu()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                <!-- Header principal -->
                <div class="header-container" id="mainHeader">
                    <button class="close-menu-btn" aria-label="Cerrar menú" onclick="toggleMenu()">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="header-wrapper">
                        <!-- Botón izquierdo estilo aerodinámico -->
                        <a href="{{ url(app()->getLocale() . '/nosotros') }}" class="aero-btn btn-left">{{ strtoupper(__('common.nav.about')) }}</a>

                        <!-- Barra central con menú y logo -->
                        <div class="main-nav-container">
                            <ul class="nav-menu">
                                <li><a href="{{ url(app()->getLocale() . '/vuelos') }}" onclick="toggleMenu()">{{ strtoupper(__('common.nav.flights')) }}</a></li>
                                <li><a href="{{ url(app()->getLocale() . '/sobrevuelos') }}" onclick="toggleMenu()">{{ strtoupper(__('common.nav.overflights')) }}</a></li>
                                <li><a href="{{ url(app()->getLocale() . '/helicopteros') }}" onclick="toggleMenu()">{{ strtoupper(__('common.nav.helicopter')) }}</a></li>
                            </ul>

                            <a href="{{ url(app()->getLocale()) }}" class="logo-center" aria-label="{{ __('common.nav.home') }}">
                                <!-- Logo desktop -->
                                <img src="{{ asset('img/logo.webp') }}" alt="Logo" width="68" height="67">
                            </a>

                            <ul class="nav-menu">
                                <li><a href="{{ url(app()->getLocale() . '/aeromedico') }}" onclick="toggleMenu()">{{ strtoupper(__('common.nav.aeromedical')) }}</a></li>
                                <li><a href="{{ url(app()->getLocale() . '/carga') }}" onclick="toggleMenu()">{{ strtoupper(__('common.nav.cargo')) }}</a></li>
                                <li><a href="{{ url(app()->getLocale() . '/agencia') }}" onclick="toggleMenu()">{{ strtoupper(__('common.nav.agency')) }}</a></li>
                            </ul>
                        </div>



                        <!-- Botón derecho estilo aerodinámico -->
                        <a href="{{ url(app()->getLocale() . '/blog') }}" class="aero-btn btn-right">BLOG</a>
                    </div>
                </div>
            </header>
        <!-- Main Content -->
            @yield('content')
        <!-- Footer -->
            <footer class="footer">
                    <div class="footer-container">
                        <!-- Main Footer Content -->
                        <div class="footer-main">
                            <div class="footer-brand">
                                <div class="footer-logo">AEROLINEA DEL SUR E.I.R.L.</div>
                                <p class="footer-tagline">{{ __('common.footer.tagline', ['default' => 'Tu aerolínea de confianza para volar por el sur del Perú con seguridad y comodidad.']) }}</p>
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/profile.php?id=61575792015865" target="_blank" rel="nofollow noopener" class="social-link" aria-label="Facebook">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/aerolineadelsur/" target="_blank" rel="nofollow noopener" class="social-link" aria-label="Instagram">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.tiktok.com/@aerolineadelsur" target="_blank" rel="nofollow noopener" class="social-link" aria-label="TikTok">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-.88-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-.04-.1z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.tripadvisor.com/Attraction_Review-g294314-d33262541-Reviews-Aerolinea_Del_Sur-Cusco_Cusco_Region.html" target="_blank" rel="nofollow noopener" class="social-link" aria-label="TripAdvisor">
                                        <img src="{{ asset('img/tripadvisor.png') }}" alt="TripAdvisor" class="tripadvisor-icon">
                                    </a>
                                </div>
                            </div>

                            <div class="footer-links">

                                <div class="footer-column">
                                    <h3 class="footer-title">{{ __('common.footer.company') }}</h3>
                                    <ul class="footer-list">
                                        <li><a href="{{ url(app()->getLocale() . '/nosotros') }}" class="footer-link">{{ __('common.nav.about') }}</a></li>
                                        <li><a href="{{ url(app()->getLocale() . '/aeronaves') }}" class="footer-link">{{ __('common.footer.aircraft', ['default' => 'Aeronaves']) }}</a></li>
                                        <li><a href="{{ url(app()->getLocale() . '/agencia') }}" class="footer-link">{{ __('common.nav.agency') }}</a></li>
                                        <li><a href="{{ url(app()->getLocale() . '/blog') }}" class="footer-link">Blog</a></li>
                                    </ul>
                                </div>

                                <div class="footer-column">
                                    <h3 class="footer-title">{{ __('common.footer.services') }}</h3>
                                    <ul class="footer-list">
                                        <li><a href="{{ url(app()->getLocale() . '/vuelos') }}" class="footer-link">{{ __('common.footer.charter_flights', ['default' => 'Vuelos Chárter']) }}</a></li>
                                        <li><a href="{{ url(app()->getLocale() . '/agencia') }}" class="footer-link">{{ __('common.nav.overflights') }}</a></li>
                                        <li><a href="{{ url(app()->getLocale() . '/helicopteros') }}" class="footer-link">{{ __('common.nav.helicopter') }}</a></li>
                                        <li><a href="{{ url(app()->getLocale() . '/aeromedico') }}" class="footer-link">{{ __('common.nav.aeromedical') }}</a></li>
                                        <li><a href="{{ url(app()->getLocale() . '/carga') }}" class="footer-link">{{ __('common.nav.cargo') }}</a></li>
                                    </ul>
                                </div>

                                <div class="footer-column">
                                    <h3 class="footer-title">Legal</h3>
                                    <ul class="footer-list">
                                        <li><a href="/{{ app()->getLocale() }}/esna" class="footer-link">Code Esnna</a></li>
                                        <li><a href="/{{ app()->getLocale() }}/pagos" class="footer-link">Métodos de Pago</a></li>
                                        <li><a href="/{{ app()->getLocale() }}/politicas-privacidad" class="footer-link">Políticas de Privacidad</a></li>
                                        <li><a href="/{{ app()->getLocale() }}/terminos-condiciones" class="footer-link">Términos y Condiciones</a></li>
                                    </ul>
                                </div>
                                
                                <!-- Professional Contact Section -->
                                <div class="footer-column footer-contact-column">
                                    <h3 class="footer-title">Contacto</h3>
                                    <div class="footer-contact-info">
                                        <div class="contact-info-item">
                                            <i class="fas fa-building contact-icon"></i>
                                            <div class="contact-details">
                                                <span class="contact-label">RUC</span>
                                                <span class="contact-value">20612563234</span>
                                            </div>
                                        </div>
                                        <div class="contact-info-item">
                                            <i class="fas fa-phone contact-icon"></i>
                                            <div class="contact-details">
                                                <span class="contact-label">Celular</span>
                                                <a href="tel:+51932475995" class="contact-value contact-link">+51 932 475 995</a>
                                            </div>
                                        </div>
                                        <div class="contact-info-item">
                                            <i class="fas fa-envelope contact-icon"></i>
                                            <div class="contact-details">
                                                <span class="contact-label">Email</span>
                                                <a href="mailto:contacto@aerolineadelsur.com.pe" class="contact-value contact-link">contacto@aerolineadelsur.com.pe</a>
                                                <a href="mailto:paulolivares@aerolineadelsur.com.pe" class="contact-value contact-link">paulolivares@aerolineadelsur.com.pe</a>
                                            </div>
                                        </div>
                                        <div class="contact-info-item">
                                            <i class="fas fa-map-marker-alt contact-icon"></i>
                                            <div class="contact-details">
                                                <span class="contact-label">Ubicación</span>
                                                <span class="contact-value">Av Pachacuteq N° 313 - Wanchaq<br>Cusco, Perú</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Newsletter Subscription 
                        <div class="footer-newsletter">
                            <div class="newsletter-content">
                                <div class="newsletter-text">
                                    <h3>Únete a nuestra comunidad</h3>
                                    <p>Suscríbete y descubre todas las novedades y beneficios exclusivos.</p>
                                </div>
                                <div class="newsletter-form">
                                    <div class="input-group">
                                        <input type="email" placeholder="Enter your email" class="newsletter-input">
                                        <button class="newsletter-btn">
                                            <span>Subscribe</span>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                <polyline points="12,5 19,12 12,19"></polyline>
                                            </svg>
                                        </button>
                                    </div>
                                    <p class="newsletter-disclaimer">
                                        Sin spam. Darse de baja en cualquier momento.
                                    </p>
                                </div>
                            </div>
                        </div>-->

                        <!-- Footer Bottom -->
                        <div class="footer-bottom">
                            <div class="footer-legal" >
                                <p class="copyright">&copy; Aerolineas del Sur - 2025 Derechos Reservados</p>
                            </div>
                        </div>
                    </div>
            </footer>
            <script>
                function toggleMobileMenu() {
                    const mobileMenu = document.getElementById('mobileMenu');
                    const menuBtn = document.querySelector('.mobile-menu-btn');
                    
                    if (mobileMenu && menuBtn) {
                        mobileMenu.classList.toggle('active');
                        menuBtn.classList.toggle('active');
                    }
                }

                // Cerrar menú móvil al hacer clic fuera
                document.addEventListener('click', function(event) {
                    const mobileMenu = document.getElementById('mainHeader');
                    const menuBtn = document.querySelector('.mobile-menu-btn') || document.querySelector('.hamburger-btn');
                    
                    if (mobileMenu && menuBtn && 
                        !mobileMenu.contains(event.target) && 
                        !menuBtn.contains(event.target) && 
                        mobileMenu.classList.contains('active')) {
                        mobileMenu.classList.remove('active');
                        menuBtn.classList.remove('active');
                    }
                });

                // Cerrar menú móvil al redimensionar ventana
                window.addEventListener('resize', function() {
                    const mobileMenu = document.getElementById('mobileMenu');
                    const menuBtn = document.querySelector('.mobile-menu-btn');
                    
                    if (window.innerWidth > 768 && mobileMenu && menuBtn) {
                        mobileMenu.classList.remove('active');
                        menuBtn.classList.remove('active');
                    }
                });
                window.addEventListener('scroll', () => {
                const header = document.querySelector('.header');
                if (window.scrollY > 50) header.classList.add('scrolled');
                else header.classList.remove('scrolled');
                });

            </script>
            <script>
                // Toggle del header integrado (base.html)
                function toggleMenu() {
                    const menu = document.getElementById('mainHeader');
                    if (!menu) return;
                    menu.classList.toggle('active');
                    if (menu.classList.contains('active')) {
                        document.body.style.overflow = 'hidden';
                    } else {
                        document.body.style.overflow = 'auto';
                    }
                }
            </script>
            <!-- Botones Verticales de Redes Sociales con semántica -->
<div class="social-sidebar" itemscope itemtype="https://schema.org/Organization">
    <meta itemprop="name" content="Aerolinea del Sur">
    <meta itemprop="url" content="https://www.aerolineadelsur.com">
    <meta itemprop="logo" content="https://www.aerolineadelsur.com/img/logo.webp">

    <div class="social-header">
        <span>Síguenos</span>
    </div>
    <div class="social-buttons-vertical">
        <a href="https://www.facebook.com/profile.php?id=61575792015865" target="_blank" class="social-btn-minimal facebook" title="Facebook" itemprop="sameAs">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
        </a>
        <a href="https://www.instagram.com/aerolineadelsur/" target="_blank" class="social-btn-minimal instagram" title="Instagram" itemprop="sameAs">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
        </a>
        <a href="https://www.tiktok.com/@aerolineadelsur" target="_blank" class="social-btn-minimal tiktok" title="TikTok" itemprop="sameAs">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-.88-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-.04-.1z"/>
            </svg>
        </a>
        <a href="https://www.tripadvisor.com/Attraction_Review-g294314-d33262541-Reviews-Aerolinea_Del_Sur-Cusco_Cusco_Region.html" target="_blank" class="social-btn-minimal tripadvisor" title="TripAdvisor" itemprop="sameAs">
            <img src="{{ asset('img/tripadvisor.png') }}" alt="TripAdvisor" class="tripadvisor-icon">
        </a>
    </div>
</div>

<!-- WhatsApp Floating Button con semántica -->
<div class="whatsapp-float" itemscope itemtype="https://schema.org/ContactPoint">
    <a href="https://wa.me/932475995" 
       target="_blank" 
       class="whatsapp-btn" 
       itemprop="url"
       aria-label="Contactar por WhatsApp al +51 932 475 995"
       rel="noopener noreferrer">
        <meta itemprop="contactType" content="Customer Service">
        <meta itemprop="telephone" content="+51932475995">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="32" height="32" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
    </a>
</div>
<script>
  (function(){
    const social = document.querySelector('.social-sidebar');
    const whatsapp = document.querySelector('.whatsapp-float');
    const threshold = 150;
    function onScroll(){
      const scrolled = window.scrollY || document.documentElement.scrollTop;
      const shouldShow = scrolled > threshold;
      if(social){ social.classList.toggle('visible', shouldShow); }
      if(whatsapp){ whatsapp.classList.toggle('visible', shouldShow); }
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    document.addEventListener('DOMContentLoaded', onScroll);
  })();
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Aerolinea del Sur - Vuela con Seguridad y Confort",
  "headline": "Aerolinea del Sur - Vuela con Seguridad y Confort",
  "description": "Descubre nuestros servicios de transporte aéreo de calidad y atención personalizada en cada vuelo.",
  "image": "https://www.aerolineadelsur.com/img/aeronaves/aviones/Air-King-B200.webp",
  "publisher": {
    "@type": "Organization",
    "name": "Aerolinea del Sur",
    "url": "https://www.aerolineadelsur.com",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.aerolineadelsur.com/img/logo.webp"
    },
    "sameAs": [
      "https://www.facebook.com/profile.php?id=61575792015865",
      "https://www.instagram.com/aerolineadelsur/",
      "https://www.tiktok.com/@aerolineadelsur",
      "https://www.tripadvisor.com/Attraction_Review-g294314-d33262541-Reviews-Aerolinea_Del_Sur-Cusco_Cusco_Region.html"
    ],
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "Customer Service",
      "telephone": "+51932475995",
      "url": "https://wa.me/932475995"
    }
  }
}
</script>

            <script>
                // Footer accordion for mobile devices
                document.addEventListener('DOMContentLoaded', function() {
                    const footerTitles = document.querySelectorAll('.footer-title');
                    
                    footerTitles.forEach(title => {
                        title.addEventListener('click', function() {
                            // Solo activar en dispositivos móviles
                            if (window.innerWidth <= 480) {
                                const column = this.parentElement;
                                const isActive = column.classList.contains('active');
                                
                                // Cerrar todas las otras columnas
                                const allColumns = document.querySelectorAll('.footer-column');
                                allColumns.forEach(col => {
                                    if (col !== column) {
                                        col.classList.remove('active');
                                    }
                                });
                                
                                // Toggle la columna actual
                                if (isActive) {
                                    column.classList.remove('active');
                                } else {
                                    column.classList.add('active');
                                }
                            }
                        });
                    });

                    // Reiniciar acordeón en cambio de tamaño
                    window.addEventListener('resize', function() {
                        if (window.innerWidth > 480) {
                            const activeColumns = document.querySelectorAll('.footer-column.active');
                            activeColumns.forEach(column => {
                                column.classList.remove('active');
                            });
                        }
                    });
                });
            </script>
            
            <!-- Bootstrap JS - carga diferida -->
            <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            
            {{-- Cookie Consent Banner --}}
            @include('cookie-consent::index')
    </body>
</html>
