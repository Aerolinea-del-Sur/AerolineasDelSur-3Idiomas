<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @php
            // SEO Configuration - Can be overridden by individual pages
            $seo = $seo ?? [
                'title' => 'Aerolínea del Sur | Vuelos Privados y Charter en Perú',
                'description' => 'Servicios aéreos premium en Perú: vuelos charter, helicópteros, transporte médico certificado y carga especializada. Seguridad garantizada desde Cusco.',
                'keywords' => 'vuelos privados perú, charter cusco, helicóptero cusco, transporte aéreo médico, carga aérea perú',
                'og_image' => asset('img/logo.svg'),
                'canonical' => url()->current(),
                'author' => 'Aerolínea del Sur'
            ];
        @endphp
        
        <!-- SEO Essentials -->
            <title>{{ $seo['title'] }}</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta name="description" content="{{ $seo['description'] }}" />
            <meta name="keywords" content="{{ $seo['keywords'] }}" />
            <meta name="author" content="{{ $seo['author'] ?? 'Aerolínea del Sur' }}" />
            <link rel="canonical" href="{{ $seo['canonical'] }}" />
            
        <!-- Open Graph (Facebook, LinkedIn) -->
            <meta property="og:title" content="{{ $seo['title'] }}">
            <meta property="og:description" content="{{ $seo['description'] }}">
            <meta property="og:image" content="{{ $seo['og_image'] }}">
            <meta property="og:url" content="{{ $seo['canonical'] }}">
            <meta property="og:type" content="website">
            <meta property="og:site_name" content="Aerolínea del Sur">
            <meta property="og:locale" content="es_PE">
            
        <!-- Twitter Card -->
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:title" content="{{ $seo['title'] }}">
            <meta name="twitter:description" content="{{ $seo['description'] }}">
            <meta name="twitter:image" content="{{ $seo['og_image'] }}">
            
        <!-- favicon -->
            <link rel="icon" type="image/x-icon" href="/favicon.ico">
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
            <link rel="icon" type="image/png" sizes="512x512" href="/android-chrome-512x512.png">
            <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
            <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicon.ico') }}">
            <link rel="manifest" href="{{ asset('img/service/favicon_io/site.webmanifest') }}">
            <meta name="theme-color" content="#C9A227">
        <!-- CONEXION A TIPOGRAFIAS -->
            <!-- CONEXION A TIPOGRAFIAS -->
            <!-- Preconnect para CDNs (mejora velocidad de carga) -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="preconnect" href="https://cdn.jsdelivr.net">
            <link rel="preconnect" href="https://cdnjs.cloudflare.com">
            
            <!-- Precarga de recursos críticos -->
            <link rel="preload" as="image" href="{{ asset('img/vder.svg') }}">
            <link rel="preload" as="image" href="{{ asset('img/vizq.svg') }}">
            
            <!-- Carga asíncrona de fuentes (no bloqueante) -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" media="print" onload="this.media='all'">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
            
            <!-- Fallback para navegadores sin JavaScript -->
            <noscript>
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            </noscript>
                <!-- Iconos -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />   
        <!-- CONEXION A ESTILOS 
            <link rel="stylesheet" href="/css/princi.css">
            <link rel="stylesheet" href="/js/princi.js">-->
        
            <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
            <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicon.ico') }}">
            <link rel="manifest" href="{{ asset('img/service/favicon_io/site.webmanifest') }}">
            <meta name="theme-color" content="#C9A227">
        <!-- Twitter Card 
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:title" content="Russell Experience - Turismo Sostenible en Perú">
            <meta name="twitter:description" content="Descubre experiencias únicas y personalizadas en Perú con Russell Experience.">
            <meta name="twitter:image" content="https://tusitio.com/imagenes/twitter-image.jpg">
            /* Datos estructurados (JSON-LD)*/
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "name": "Russell Experience",
                "url": "https://tusitio.com",
                "logo": "https://tusitio.com/imagenes/logo.png",
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+51 946 033 024",
                    "contactType": "Customer Service"
                }
            } 
            </script>-->
            <!-- Bootstrap CSS - carga asíncrona -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" media="print" onload="this.media='all'">
            <noscript>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
            </noscript>
        <!-- CSS Separados - carga asíncrona -->
            <link rel="stylesheet" href="{{ asset('css/general.css') }}" media="print" onload="this.media='all'">
            <link rel="stylesheet" href="{{ asset('css/princi/header.css') }}" media="print" onload="this.media='all'">
            <link rel="stylesheet" href="{{ asset('css/princi/footer.css') }}" media="print" onload="this.media='all'">
            <noscript>
                <link rel="stylesheet" href="{{ asset('css/general.css') }}">
                <link rel="stylesheet" href="{{ asset('css/princi/header.css') }}">
                <link rel="stylesheet" href="{{ asset('css/princi/footer.css') }}">
            </noscript>

        <!-- Estilos del header importados de base.html (acotados al header) -->
        <style>
            /* Barra móvil superior eliminada */

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

            /* Estilos del contenedor central en CSS externo */

            .aero-btn {
                color: var(--accent); font-size: 11px; font-weight: 700; text-decoration: none;
                width: 150px; height: 85px; display: flex; align-items: center; justify-content: center;
                position: relative; background-repeat: no-repeat; background-size: contain; background-position: center;
                /* sin animaciones */
                filter: drop-shadow(0 5px 15px rgba(0,0,0,0.3)); text-transform: uppercase; letter-spacing: 0.06em;
                padding-bottom: 5px; z-index: 5;
            }
            ol, ul {
                padding-left: 0rem;
            }
            .btn-left { padding-right: 20px; margin-right: -25px; background-image: url("{{ asset('img/vder.svg') }}"); }
            .btn-right { padding-left: 20px; margin-left: -25px; background-image: url("{{ asset('img/vizq.svg') }}"); }
            .aero-btn:hover { filter: none; transform: none; color: var(--accent); z-index: 15; }
            .aero-btn:active { transform: scale(0.98); }

            .nav-menu { display: flex; align-items: center; justify-content: center; gap: 24px; list-style: none; }
            .nav-menu li a { color: var(--pearl); text-decoration: none; font-size: 12px; font-weight: 600; text-transform: uppercase; transition: var(--transition); position: relative; display: inline-block; transform: translateY(5px); }
            /* sin subrayado animado */
            .nav-menu li a:hover { color: var(--accent); text-shadow: 0 0 8px rgba(201, 162, 39, 0.4); }
            /* subrayado removido */
            .nav-menu li a:focus-visible { outline: 2px solid var(--accent); outline-offset: 3px; border-radius: 6px; }

            .logo-center { width: 68px; height: 68px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; z-index: 20; }
            /* sin hover animado del logo */
            .logo-center img { width: 68px; height: 68px; object-fit: contain; filter: drop-shadow(0 2px 8px rgba(0,0,0,0.35)); }

            @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }

            @media (max-width: 1024px) {
                .close-menu-btn { display: flex !important; }
                .header-container {
                    position: fixed; top: 0; left: 0; width: 100%; height: 100vh;
                    background: rgba(27, 27, 27, 0.98); backdrop-filter: blur(20px);
                    z-index: 1001; padding: 0;
                    opacity: 0; visibility: hidden; pointer-events: none;
                    transition: opacity 0.3s ease, visibility 0.3s ease;
                    display: flex; align-items: center; justify-content: center; overflow-y: auto;
                }
                .header-container.active { opacity: 1; visibility: visible; pointer-events: all; }
                .header-wrapper { 
                    width: 100%; max-width: 400px; padding: 60px 20px 20px; 
                    gap: 25px; 
                    display: flex; 
                    flex-direction: column; 
                    align-items: center;
                }
                /* Contenedor central - vertical */
                .main-nav-container { 
                    width: 100%; 
                    display: flex; 
                    flex-direction: column; 
                    align-items: center;
                    gap: 20px;
                }
                .main-nav-container .nav-menu:first-of-type { order: 1; }
                .logo-center { order: 2; width: 110px; height: 110px; margin: 15px 0; }
                .logo-center img { width: 70px; height: 70px; }
                .main-nav-container .nav-menu:last-of-type { order: 3; }
                .nav-menu { 
                    width: 100%; 
                    gap: 8px; 
                    display: flex; 
                    flex-direction: column;
                    align-items: center;
                }
                .nav-menu li { width: 100%; text-align: center; }
                .nav-menu li a { 
                    font-size: 14px; 
                    display: block; 
                    padding: 16px 20px; 
                    border-radius: 8px;
                    transition: all 0.3s ease;
                    transform: translateY(0);
                }
                .nav-menu li a:hover {
                    background: rgba(212, 175, 55, 0.1);
                }
                .aero-btn { 
                    width: 100%; 
                    max-width: 300px;
                    height: 60px; 
                    margin: 0; 
                    background-image: none; 
                    border: 2px solid #d4af37; 
                    border-radius: 40px; 
                    background-color: rgba(20,20,20,0.8);
                    transition: all 0.3s ease;
                }
                .aero-btn:hover {
                    background-color: rgba(212, 175, 55, 0.1);
                    border-color: #d4af37;
                }
                .header-wrapper > .aero-btn:first-child { order: 0; }
                .header-wrapper > .aero-btn:last-child { order: 4; }
            }
        </style>
    </head>
    <body>
        <!-- Encabezado (Header de base.html integrado) -->
            <header class="header">
                <!-- Barra superior móvil -->
                <div class="mobile-top-bar">
                    <a href="/" class="mobile-logo" aria-label="Inicio">
                        <img src="{{ asset('img/logo.svg') }}" alt="Logo">
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
                        <a href="/nosotros" class="aero-btn btn-left">NOSOTROS</a>

                        <!-- Barra central con menú y logo -->
                        <div class="main-nav-container">
                            <ul class="nav-menu">
                                <li><a href="/vuelos" onclick="toggleMenu()">VUELOS</a></li>
                                <li><a href="/sobrevuelos" onclick="toggleMenu()">SOBREVUELOS</a></li>
                                <li><a href="/helicopteros" onclick="toggleMenu()">HELICOPTERO</a></li>
                            </ul>

                            <a href="{{ url('/') }}" class="logo-center" aria-label="Inicio">
                                <img src="{{ asset('img/logo.svg') }}" alt="Logo">
                            </a>

                            <ul class="nav-menu">
                                <li><a href="/aeromedico" onclick="toggleMenu()">AERO MEDICO</a></li>
                                <li><a href="/carga" onclick="toggleMenu()">CARGA</a></li>
                                <li><a href="/agencia" onclick="toggleMenu()">AGENCIA</a></li>
                            </ul>
                        </div>

                        <!-- Botón derecho estilo aerodinámico -->
                        <a href="/blog" class="aero-btn btn-right">BLOG</a>
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
                                <div class="footer-logo">AEROLINEA DEL SUR E.I.R.L</div>
                                <p class="footer-tagline">Tu aerolínea de confianza para volar por el sur del Perú con seguridad y comodidad.</p>
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/profile.php?id=61575792015865" target="_blank" class="social-link" aria-label="Facebook">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/aerolineadelsur/" target="_blank" class="social-link" aria-label="Instagram">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.tiktok.com/@aerolineadelsur" target="_blank" class="social-link" aria-label="TikTok">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-.88-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-.04-.1z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.tripadvisor.com/Attraction_Review-g294314-d33262541-Reviews-Aerolinea_Del_Sur-Cusco_Cusco_Region.html" target="_blank" class="social-link" aria-label="TripAdvisor">
                                        <img src="{{ asset('img/tripadvisor.png') }}" alt="TripAdvisor" class="tripadvisor-icon">
                                    </a>
                                </div>
                            </div>

                            <div class="footer-links">

                                <div class="footer-column">
                                    <h3 class="footer-title">Servicios</h3>
                                    <ul class="footer-list">
                                        <li><a href="/nosotros" class="footer-link">Nosotros</a></li>
                                        <li><a href="/servicio" class="footer-link">Servicio</a></li>
                                        <li><a href="/aeronaves" class="footer-link">Aeronaves</a></li>
                                        <li><a href="/agencia" class="footer-link">Agencia</a></li>
                                        <li><a href="/blog" class="footer-link">Blog</a></li>
                                    </ul>
                                </div>

                                <div class="footer-column">
                                    <h3 class="footer-title">Legal</h3>
                                    <ul class="footer-list">
                                        <li><a href="/esna" class="footer-link">Code Esnna</a></li>
                                        <li><a href="/pagos" class="footer-link">Métodos de Pago</a></li>
                                        <li><a href="/politicas-privacidad" class="footer-link">Políticas de Privacidad</a></li>
                                        <li><a href="/terminos-condiciones" class="footer-link">Términos y Condiciones</a></li>
                                    </ul>
                                </div>
                                <!-- Información de contacto -->
                                <div class="footer-tagline">
                                    <div class="contact-item">
                                        <strong>RUC:</strong> 20612563234
                                    </div>
                                    <div class="contact-item">
                                        <strong>Celular:</strong> +51 932 475 995
                                    </div>
                                    <div class="contact-item">
                                        <strong>Email:</strong> contacto@aerolineadelsur.com.pe
                                    </div>
                                    <div class="contact-item">
                                        <strong>Email:</strong> paul.olivares@aerolineadelsur.com.pe
                                    </div>
                                    <div class="contact-item">
                                        <strong>Dirección:</strong> Centro Comercial San Andrés oficina nro 314 tercer piso
                                    </div>
                                    <div class="contact-item">
                                        <strong>Ciudad:</strong> Cusco
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
                    const mobileMenu = document.getElementById('mobileMenu');
                    const menuBtn = document.querySelector('.mobile-menu-btn');
                    
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
    <meta itemprop="logo" content="https://www.aerolineadelsur.com/public/img/logo.webp">

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
    <a href="https://wa.me/932475995" target="_blank" class="whatsapp-btn" itemprop="url">
        <meta itemprop="contactType" content="Customer Service">
        <meta itemprop="telephone" content="+51932475995">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.516" fill="currentColor"/>
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
  "image": "https://www.aerolineadelsur.com/public/img/aeronaves/aviones/Air-King-B200.webp",
  "publisher": {
    "@type": "Organization",
    "name": "Aerolinea del Sur",
    "url": "https://www.aerolineadelsur.com",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.aerolineadelsur.com/public/img/logo.webp"
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
    </body>
</html>
