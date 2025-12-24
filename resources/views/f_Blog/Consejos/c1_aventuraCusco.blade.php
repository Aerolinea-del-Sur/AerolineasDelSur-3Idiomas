@extends('a_EncabezadoFooter.princi')

@php
// Custom SEO for Blog Post - Aventura Cusco
$seo = [
    'title' => 'Aventura en Cusco: Guía Completa de Actividades | Blog',
    'description' => 'Descubre las mejores aventuras en Cusco: trekking, vuelos panorámicos, tours arqueológicos y más. Guía completa para tu viaje a Cusco.',
    'keywords' => 'aventura cusco, trekking cusco, actividades cusco, guía turismo cusco',
    'og_image' => asset('img/blog/cusco-aventura.jpg'),
    'canonical' => url('/blog/consejos/aventura-cusco'),
];
@endphp

@section('content')
    <link rel="stylesheet" href="{{ asset('public/css/paginas/blog/blog.css') }}">

<!-- Schema.org JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Título del Artículo - Aerolínea del Sur",
  "description": "Descripción completa del artículo sobre aviación privada, aeronaves y servicios de Aerolínea del Sur.",
  "image": "https://www.aerolineadelsur.com/img/aeronaves/aviones/Air-King-B200.webp",
  "author": {
    "@type": "Organization",
    "name": "Aerolínea del Sur"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Aerolínea del Sur",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.aerolineadelsur.com/img/logo.webp"
    }
  },
  "datePublished": "2025-11-15",
  "dateModified": "2025-11-15"
}
</script>
<!-- CSS unificado del blog -->
<link rel="stylesheet" href="{{ asset('public/css/paginas/blog/blog.css') }}">

<!-- Schema.org para Breadcrumbs -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Inicio",
      "item": "https://www.aerolineadelsur.com"
    },
    {
      "@type": "ListItem",
      "position": 2",
      "name": "Destinos",
      "item": "https://www.aerolineadelsur.com/blog"
    },
    {
      "@type": "ListItem",
      "position": 3",
      "name": "Título del Artículo"
    }
  ]
}
</script>
<style>
    /* Scrollbar personalizado */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: var(--color-pearl);
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--color-gold);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--color-gold-light);
        }
        
        /* Selección de texto */
        ::selection {
            background: var(--color-gold);
            color: var(--color-black);
        }
        
        body {
            font-family: var(--font-sans);
            line-height: 1.7;
            color: var(--color-charcoal);
            background: var(--color-white);
            font-weight: 300;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        /* Skip to content - Accesibilidad */
        .skip-link {
            position: absolute;
            top: -40px;
            left: 0;
            background: var(--color-gold);
            color: var(--color-black);
            padding: 8px;
            text-decoration: none;
            z-index: 100;
        }
        
        .skip-link:focus {
            top: 0;
        }
        
        /* Header - Sticky optimizado */
        
        
        .logo {
            font-family: var(--font-serif);
            font-size: 1.5rem;
            font-weight: 300;
            color: var(--color-gold);
            letter-spacing: 3px;
            text-transform: uppercase;
            transition: var(--transition);
        }
        
        .logo:hover {
            opacity: 0.8;
        }
        
        /* Navegación con indicadores visuales */
        nav ul {
            list-style: none;
            display: flex;
            gap: 2.5rem;
        }
        
        nav a {
            color: var(--color-white);
            text-decoration: none;
            font-weight: 300;
            font-size: 0.9rem;
            letter-spacing: 1px;
            transition: var(--transition);
            position: relative;
            padding-bottom: 4px;
        }
        
        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--color-gold);
            transition: width 0.3s ease;
        }
        
        nav a:hover::after,
        nav a:focus::after,
        nav a.active::after {
            width: 100%;
        }
        
        nav a:hover,
        nav a:focus {
            color: var(--color-gold);
            outline: none;
        }
        
        /* Breadcrumbs mejorados */
        .breadcrumbs {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 60px;
            font-size: 0.85rem;
            font-weight: 300;
            letter-spacing: 0.5px;
        }
        
        .breadcrumbs a {
            color: var(--color-gold);
            text-decoration: none;
            transition: var(--transition);
            position: relative;
        }
        
        .breadcrumbs a:hover,
        .breadcrumbs a:focus {
            text-decoration: underline;
            outline: none;
        }
        
        .breadcrumbs span {
            color: var(--color-gray);
            margin: 0 1rem;
            user-select: none;
        }
        
        .breadcrumbs strong {
            color: var(--color-black);
        }
        
        /* Progress bar de lectura - movida a blog.css */
        
        /* Main Container con grid fluido */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 60px;
            display: grid;
            grid-template-columns: minmax(0, 1fr) 320px;
            gap: 5rem;
            animation: fadeIn 0.6s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Article con mejor jerarquía visual */
        article {
            max-width: 100%;
            min-width: 0;
        }
        
        .article-header {
            margin-bottom: 3rem;
        }
        
        .category-badge {
            display: inline-block;
            color: var(--color-gold);
            padding: 0.5rem 0;
            font-size: 0.75rem;
            font-weight: 500;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid var(--color-gold);
        }
        
        h1 {
            font-family: var(--font-serif);
            font-size: clamp(2rem, 5vw, 3.5rem);
            color: var(--color-black);
            margin-bottom: 1.5rem;
            line-height: 1.2;
            font-weight: 300;
            letter-spacing: -0.5px;
        }
        
        .article-meta {
            color: var(--color-gray);
            font-size: 0.85rem;
            font-weight: 300;
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid var(--color-pearl);
        }
        
        .article-meta span {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        /* Imagen con lazy loading y skeleton */
        .featured-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            margin: 3rem 0;
            background: var(--color-pearl);
            transition: var(--transition);
        }
        
        .featured-image:hover {
            opacity: 0.95;
        }
        
        /* Contenido con mejor legibilidad */
        .article-content {
            max-width: 100%;
        }
        
        .article-content h2 {
            font-family: var(--font-serif);
            color: var(--color-black);
            margin: 4rem 0 1.5rem;
            font-size: clamp(1.8rem, 4vw, 2.2rem);
            font-weight: 400;
            letter-spacing: -0.5px;
            scroll-margin-top: 100px;
        }
        
        .article-content h2:first-of-type {
            margin-top: 2rem;
        }
        
        .article-content h3 {
            font-family: var(--font-serif);
            color: var(--color-charcoal);
            margin: 3rem 0 1rem;
            font-size: clamp(1.3rem, 3vw, 1.6rem);
            font-weight: 400;
            scroll-margin-top: 100px;
        }
        
        .article-content p {
            margin-bottom: 1.8rem;
            color: var(--color-charcoal);
            font-size: clamp(1rem, 2vw, 1.05rem);
            font-weight: 300;
            line-height: 1.8;
            max-width: 70ch;
        }
        
        .article-content strong {
            font-weight: 500;
            color: var(--color-black);
        }
        
        .article-content a {
            color: var(--color-gold);
            text-decoration: underline;
            text-decoration-thickness: 1px;
            text-underline-offset: 2px;
            transition: var(--transition);
        }
        
        .article-content a:hover,
        .article-content a:focus {
            color: var(--color-gold-light);
            text-decoration-thickness: 2px;
        }
        
        .article-content ul,
        .article-content ol {
            margin: 2rem 0 2rem 1.5rem;
            max-width: 68ch;
        }
        
        .article-content li {
            margin-bottom: 1rem;
            color: var(--color-charcoal);
            font-size: clamp(1rem, 2vw, 1.05rem);
            font-weight: 300;
            line-height: 1.7;
            padding-left: 0.5rem;
        }
        
        .article-content li::marker {
            color: var(--color-gold);
        }
        
        /* Highlight box con mejor contraste */
        .highlight-box {
            background: var(--color-green);
            color: var(--color-white);
            padding: 2.5rem;
            margin: 3rem 0;
            font-weight: 300;
            border-left: 3px solid var(--color-gold);
        }
        
        .highlight-box strong {
            color: var(--color-gold);
            font-weight: 500;
        }
        
        /* CTA optimizado para conversión */
        .cta-box {
            background: var(--color-black);
            color: var(--color-white);
            padding: 4rem 3rem;
            text-align: center;
            margin: 4rem 0;
            border-top: 1px solid var(--color-gold);
            border-bottom: 1px solid var(--color-gold);
        }
        
        .cta-box h3 {
            font-family: var(--font-serif);
            color: var(--color-gold);
            margin-bottom: 1rem;
            font-size: clamp(1.5rem, 4vw, 2rem);
            font-weight: 300;
            letter-spacing: 1px;
        }
        
        .cta-box p {
            color: var(--color-pearl);
            margin-bottom: 2.5rem;
            font-weight: 300;
        }
        
        .cta-button {
            display: inline-block;
            background: transparent;
            color: var(--color-gold);
            padding: 1rem 3rem;
            text-decoration: none;
            font-weight: 400;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-size: 0.85rem;
            transition: var(--transition);
            border: 1px solid var(--color-gold);
            cursor: pointer;
        }
        
        .cta-button:hover,
        .cta-button:focus {
            background: var(--color-gold);
            color: var(--color-black);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(201, 162, 39, 0.3);
            outline: none;
        }
        
        .cta-button:active {
            transform: translateY(0);
        }
        
        /* Sidebar responsive y sticky */
        aside {
            display: flex;
            flex-direction: column;
            gap: 3rem;
            position: sticky;
            top: 120px;
            align-self: start;
            max-height: calc(100vh - 140px);
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: var(--color-gold) var(--color-pearl);
        }
        
        /* Tabla de contenidos y TOC móvil - movidos a blog.css */

        /* Ajuste de anclaje para títulos con id (evita que queden ocultos bajo el header) */
        h2[id], h3[id] {
            scroll-margin-top: var(--header-height, 140px);
        }
        
        /* (eliminada animación comentada incompleta) */
        
        .sidebar-widget:last-child {
            border-bottom: none;
        }
        
        .sidebar-widget h3 {
            font-family: var(--font-serif);
            color: var(--color-black);
            margin-bottom: 2rem;
            font-size: 1.3rem;
            font-weight: 400;
            letter-spacing: 0.5px;
        }
        
        /* Related posts con mejor UX */
        .related-post {
            margin-bottom: 2rem;
            transition: var(--transition);
        }
        
        .related-post:last-child {
            margin-bottom: 0;
        }
        
        .related-post a {
            display: block;
            text-decoration: none;
            color: inherit;
        }
        
        .related-post:hover {
            transform: translateX(5px);
        }
        
        .related-post:focus-within {
            outline: 2px solid var(--color-gold);
            outline-offset: 4px;
        }
        
        .related-post img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            margin-bottom: 1rem;
            background: var(--color-pearl);
            transition: var(--transition);
        }
        
        .related-post:hover img {
            opacity: 0.9;
        }
        
        .related-post-content h4 {
            font-family: var(--font-serif);
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            line-height: 1.4;
            font-weight: 400;
            color: var(--color-black);
        }
        
        .related-post a:hover h4,
        .related-post a:focus h4 {
            color: var(--color-gold);
        }
        
        .related-post-content small {
            color: var(--color-gray);
            font-size: 0.8rem;
            font-weight: 300;
        }
        
        /* Tags interactivos */
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .tag {
            color: var(--color-charcoal);
            padding: 0;
            font-size: 0.85rem;
            text-decoration: none;
            font-weight: 300;
            transition: var(--transition);
            border-bottom: 1px solid transparent;
        }
        
        .tag:hover,
        .tag:focus {
            color: var(--color-gold);
            border-bottom: 1px solid var(--color-gold);
            outline: none;
        }
        
        /* Newsletter optimizado */
        .newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .newsletter-form p {
            font-size: 0.9rem;
            font-weight: 300;
            color: var(--color-gray);
            margin-bottom: 1rem;
        }
        
        .newsletter-form input {
            padding: 1rem 0;
            border: none;
            border-bottom: 1px solid var(--color-pearl);
            font-family: var(--font-sans);
            font-size: 0.9rem;
            font-weight: 300;
            transition: var(--transition);
            background: transparent;
        }
        
        .newsletter-form input:focus {
            outline: none;
            border-bottom: 1px solid var(--color-gold);
        }
        
        .newsletter-form input::placeholder {
            color: var(--color-gray);
            opacity: 0.6;
        }
        
        .newsletter-form button {
            background: transparent;
            color: var(--color-gold);
            padding: 1rem 0;
            border: 1px solid var(--color-gold);
            font-family: var(--font-sans);
            font-weight: 400;
            font-size: 0.85rem;
            cursor: pointer;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: var(--transition);
        }
        
        .newsletter-form button:hover,
        .newsletter-form button:focus {
            background: var(--color-gold);
            color: var(--color-black);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
            outline: none;
        }
        
        .newsletter-form button:active {
            transform: translateY(0);
        }
        
        /* Botón volver arriba - movido a blog.css */
        
        /* Responsive con breakpoints optimizados */
        @media (max-width: 1024px) {
            .container {
                grid-template-columns: 1fr;
                padding: 3rem 40px;
                gap: 4rem;
            }
            
            aside {
                position: static;
                max-height: none;
            }
            
            .header-content {
                padding: 0 40px;
            }
            
            .breadcrumbs {
                padding: 2rem 40px;
            }
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 2rem 20px;
            }
            
            .header-content {
                padding: 0 20px;
                flex-direction: column;
                gap: 1.5rem;
            }
            
            .breadcrumbs {
                padding: 1.5rem 20px;
            }
            
            nav ul {
                gap: 1.5rem;
                font-size: 0.85rem;
            }
            
            .featured-image {
                height: 300px;
                margin: 2rem 0;
            }
            
            .article-content p,
            .article-content li {
                max-width: 100%;
            }
            
            .cta-box {
                padding: 3rem 2rem;
            }
            
            .back-to-top {
                bottom: 1rem;
                right: 1rem;
                width: 45px;
                height: 45px;
            }
        }
        
        /* Modo oscuro preparado (comentado) */
        /* @media (prefers-color-scheme: dark) {
            body { background: var(--color-charcoal); color: var(--color-pearl); }
        } */
        
        /* Reducir movimiento para accesibilidad */
        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
</style>
<!-- Skip to content -->
<a href="#main-content" class="skip-link">Saltar al contenido</a>

<!-- Reading progress bar -->
<div class="reading-progress" id="reading-progress" role="progressbar" aria-label="Progreso de lectura"></div>
    <!-- Breadcrumbs -->
    <nav class="breadcrumbs" aria-label="Breadcrumb" style="
    margin-top: 50px;
    padding-bottom: 0px;
    padding-top: 10px;">
        <a href="/">Inicio</a>
        <span aria-hidden="true">/</span>
        <a href="/blog">Destinos</a>
        <span aria-hidden="true">/</span>
        <strong aria-current="page">Los Destinos Más Exclusivos de Perú</strong>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <article id="main-content" role="main">
            <header class="article-header" id="header">
                <span class="category-badge">Consejos de Viaje</span>
                <h1>Guía Completa: Cómo Preparar tu Primera Aventura a Cusco</h1>
                <div class="article-meta">
                    <span><time datetime="2025-11-15">15 de Noviembre, 2025</time></span>
                    <span aria-label="Tiempo de lectura estimado">10 min lectura</span>
                </div>
                <!-- Tabla de contenidos -->
                <div class="sidebar-widget sticky-toc">
                    <h3>En este artículo</h3>
                    <button class="toc-toggle" aria-expanded="false" aria-controls="article-toc">Índice</button>
                    <nav id="article-toc" aria-label="Índice del artículo">
                        <ul class="table-of-contents toc-horizontal">
                            <li><a href="#cuando-ir">¿Cuándo Visitar?</a></li>
                            <li><a href="#que-empacar">Qué Empacar</a></li>
                            <li><a href="#aclimatacion">Altitud</a></li>
                            <li><a href="#presupuesto">Presupuesto</a></li>
                            <li><a href="#seguridad">Seguridad</a></li>
                            <li><a href="#experiencias">Experiencias</a></li>
                        </ul>
                    </nav>
                </div>
                </header>

            <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?w=1200&h=500&fit=crop" 
                 alt="Plaza de Armas de Cusco al atardecer con la Catedral iluminada y turistas disfrutando del ambiente colonial" 
                 class="featured-image"
                 loading="lazy" decoding="async">

            <div class="article-content">
                <p>Cusco, la antigua capital del Imperio Inca, es mucho más que la puerta de entrada a Machu Picchu. Esta ciudad mágica situada a 3,400 metros sobre el nivel del mar combina arquitectura colonial española con cimientos incas, creando una atmósfera única que cautiva a millones de viajeros cada año. En esta guía completa, te compartimos todo lo que necesitas saber para preparar tu primera aventura a esta ciudad imperial.</p>

                <div class="highlight-box" role="complementary" aria-label="Información destacada">
                    <strong>Consejo de Expertos</strong><br>
                    La aclimatación es fundamental. Planifica llegar a Cusco al menos 2-3 días antes de realizar cualquier trekking o visita a Machu Picchu. Tu cuerpo necesita adaptarse gradualmente a la altitud para disfrutar plenamente de la experiencia.
                </div>

                <h2 id="cuando-ir">¿Cuándo es el Mejor Momento para Visitar Cusco?</h2>
                <p>La elección de cuándo viajar a Cusco puede marcar una gran diferencia en tu experiencia. La ciudad tiene dos estaciones bien definidas que ofrecen ventajas distintas según tus preferencias y el tipo de viaje que busques.</p>

                <h3>Temporada Seca (Mayo - Septiembre)</h3>
                <p>Considerada la mejor época para visitar Cusco, estos meses ofrecen cielos despejados, días soleados y noches frías. Es ideal para trekking, fotografía y exploración de sitios arqueológicos. Sin embargo, es temporada alta, por lo que encontrarás más turistas y precios ligeramente más elevados.</p>

                <h3>Temporada de Lluvias (Noviembre - Marzo)</h3>
                <p>Aunque llueve frecuentemente (especialmente por las tardes), el paisaje se torna increíblemente verde y exuberante. Los precios son más bajos y hay menos turistas. Es perfecta si no te molesta la lluvia y buscas una experiencia más auténtica y económica.</p>

                <h2 id="que-empacar">Qué Empacar para tu Viaje</h2>
                <p>Empacar correctamente para Cusco es esencial debido a sus condiciones climáticas particulares. Las diferencias de temperatura entre el día y la noche pueden ser dramáticas, por lo que la clave está en las capas de ropa.</p>

                <h3>Ropa Esencial</h3>
                <ul>
                    <li>Chaqueta impermeable y cortavientos de calidad (indispensable)</li>
                    <li>Ropa térmica para las noches frías en altitud</li>
                    <li>Camisetas de manga larga de secado rápido</li>
                    <li>Pantalones cómodos y convertibles (que se transforman en shorts)</li>
                    <li>Gorro, guantes y bufanda para las mañanas y noches</li>
                    <li>Calzado de trekking con buen soporte de tobillo</li>
                </ul>

                <h3>Elementos Indispensables</h3>
                <ul>
                    <li>Protector solar de alto factor (SPF 50+) - el sol es intenso en altitud</li>
                    <li>Gafas de sol con protección UV</li>
                    <li>Botella de agua reutilizable</li>
                    <li>Medicamentos para el mal de altura (consulta con tu médico)</li>
                    <li>Kit básico de primeros auxilios</li>
                    <li>Linterna frontal con baterías extra</li>
                    <li>Adaptador de enchufe (Perú usa tipo A y C)</li>
                </ul>

                <div class="cta-box" role="complementary" aria-labelledby="cta-heading">
                    <h3 id="cta-heading">¿Necesitas Ayuda Planificando tu Viaje?</h3>
                    <p>Nuestros expertos en viajes de lujo pueden diseñar un itinerario personalizado que se adapte perfectamente a tus intereses y presupuesto</p>
                    <a href="/contacto" class="cta-button" aria-label="Solicitar asesoría personalizada gratuita">Solicitar Asesoría Gratuita</a>
                </div>

                <h2 id="aclimatacion">Cómo Manejar la Altitud</h2>
                <p>El mal de altura o soroche es real y puede afectar a cualquier persona, sin importar su condición física. Cusco está a 3,400 metros de altitud, donde el oxígeno disponible es aproximadamente 30% menor que al nivel del mar. Aquí te compartimos estrategias probadas para aclimatarte exitosamente.</p>

                <h3>Primeras 48 Horas Cruciales</h3>
                <p>Las primeras dos días son fundamentales para una buena aclimatación. Tómatelo con calma: camina lentamente, evita esfuerzos físicos intensos y no consumas alcohol. Bebe abundante agua (al menos 3-4 litros al día) y come ligero, priorizando carbohidratos.</p>

                <h3>Remedios Naturales Locales</h3>
                <p>El mate de coca es el remedio tradicional por excelencia. Esta infusión ancestral ayuda genuinamente con los síntomas del soroche. También puedes probar hojas de coca directamente (acullico) como hacen los locales, o consumir caramelos de coca disponibles en cualquier tienda.</p>

                <h2 id="presupuesto">Presupuesto Estimado</h2>
                <p>Cusco ofrece opciones para todo tipo de presupuestos. Aquí te presentamos estimados realistas para diferentes estilos de viaje, considerando alojamiento, comida, transporte y actividades principales.</p>

                <h3>Presupuesto Económico (50-70 USD por día)</h3>
                <ul>
                    <li>Hospedaje en hostales compartidos o hoteles básicos</li>
                    <li>Comida en mercados locales y restaurantes económicos</li>
                    <li>Transporte público y caminatas</li>
                    <li>Tours grupales a sitios principales</li>
                </ul>

                <h3>Presupuesto Medio (100-150 USD por día)</h3>
                <ul>
                    <li>Hotel boutique 3 estrellas con habitación privada</li>
                    <li>Comida en restaurantes turísticos de calidad</li>
                    <li>Taxis privados ocasionales</li>
                    <li>Tours semiprivados con guías especializados</li>
                </ul>

                <h3>Presupuesto Premium (250+ USD por día)</h3>
                <ul>
                    <li>Hoteles boutique 5 estrellas o lodges de lujo</li>
                    <li>Experiencias gastronómicas en restaurantes gourmet</li>
                    <li>Transporte privado con chofer</li>
                    <li>Tours privados exclusivos con acceso VIP</li>
                </ul>

                <h2 id="seguridad">Consejos de Seguridad</h2>
                <p>Cusco es generalmente una ciudad segura para turistas, pero como en cualquier destino popular, es importante mantener precauciones básicas. La mayoría de los incidentes reportados involucran robos menores que pueden prevenirse fácilmente con sentido común.</p>

                <h3>Recomendaciones Prácticas</h3>
                <ul>
                    <li>No lleves joyas costosas o relojes llamativos visibles</li>
                    <li>Usa una riñonera o mochila antirrobo para documentos importantes</li>
                    <li>Evita caminar solo por calles oscuras después de las 10 PM</li>
                    <li>Toma taxis oficiales desde sitios establecidos o usa apps como Uber</li>
                    <li>Guarda copias digitales de tu pasaporte y documentos importantes</li>
                    <li>Ten siempre efectivo en soles para emergencias</li>
                </ul>

                <h2 id="experiencias">Experiencias Imperdibles</h2>
                <p>Más allá de los clásicos turísticos, Cusco ofrece experiencias únicas que te conectarán profundamente con la cultura andina y te dejarán recuerdos imborrables.</p>

                <h3>Vivencias Auténticas</h3>
                <ul>
                    <li>Participa en una ceremonia de pago a la Pachamama con un chamán local</li>
                    <li>Toma una clase de cocina peruana y aprende a preparar ceviche auténtico</li>
                    <li>Visita el mercado de San Pedro temprano en la mañana</li>
                    <li>Asiste a una presentación de danza folklórica tradicional</li>
                    <li>Explora el barrio de San Blas y sus talleres de artesanos</li>
                    <li>Prueba la chicha de jora en una chichería tradicional</li>
                </ul>

                <p>En Élite Viajes llevamos más de 15 años diseñando experiencias transformadoras en Cusco y todo Perú. Cada viaje que creamos es único, diseñado específicamente según los intereses, ritmo y preferencias de nuestros viajeros. Desde aventureros solitarios hasta familias completas, hemos ayudado a miles de personas a descubrir la magia de esta región ancestral.</p>

                <p><em>¿Listo para comenzar tu aventura cusqueña? Contáctanos hoy y permítenos diseñar el viaje perfecto que superará todas tus expectativas.</em></p>
            </div>
        </article>

        <!-- Sidebar -->
        <aside role="complementary" aria-label="Contenido relacionado">
            <!-- Artículos relacionados -->
            <div class="sidebar-widget">
                <h3>Artículos Relacionados</h3>
                <div class="related-post">
                    <a href="#" aria-label="Leer: Hoteles Boutique en Cusco">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=320&h=180&fit=crop" alt="Aventura en Cusco - Trekking y senderismo en los Andes peruanos" loading="lazy">
                        <div class="related-post-content">
                            <h4>Hoteles Boutique en Cusco</h4>
                            <small>6 min</small>
                        </div>
                    </a>
                </div>
                <div class="related-post">
                    <a href="#" aria-label="Leer: 7 Días en Cusco">
                        <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?w=320&h=180&fit=crop" alt="Montañismo y escalada en la cordillera de Cusco Perú" loading="lazy">
                        <div class="related-post-content">
                            <h4>7 Días en Cusco</h4>
                            <small>9 min</small>
                        </div>
                    </a>
                </div>
                <div class="related-post">
                    <a href="#" aria-label="Leer: Gastronomía Cusqueña">
                        <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=320&h=180&fit=crop" alt="Deportes de aventura y turismo extremo en Cusco" loading="lazy">
                        <div class="related-post-content">
                            <h4>Gastronomía Cusqueña</h4>
                            <small>7 min</small>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Categorías -->
            <div class="sidebar-widget">
                <h3>Explora</h3>
                <nav aria-label="Categorías del blog">
                    <div class="tags">
                        <a href="/blog" class="tag">Destinos</a>
                        <a href="/consejos" class="tag">Consejos</a>
                        <a href="/noticias" class="tag">Noticias</a>
                        <a href="/experiencias" class="tag">Experiencias</a>
                        <a href="/gastronomia" class="tag">Gastronomía</a>
                        <a href="/aventura" class="tag">Aventura</a>
                    </div>
                </nav>
            </div>

            <!-- Newsletter -->
            <div class="sidebar-widget">
                <h3>Newsletter</h3>
                <form class="newsletter-form" aria-label="Suscripción newsletter">
                    <p>Ofertas exclusivas en tu correo</p>
                    <label for="email-input" class="visually-hidden">Email</label>
                    <input type="email" id="email-input" placeholder="tu@email.com" required aria-required="true">
                    <button type="submit">Suscribirse</button>
                </form>
            </div>
        </aside>
    </div>
    <!-- Back to top -->
    <a href="#header" class="back-to-top" id="back-to-top" aria-label="Volver arriba">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </a>
    <script>
        // Reading progress bar
        window.addEventListener('scroll', () => {
            const article = document.querySelector('article');
            const progressBar = document.getElementById('reading-progress');
            const articleTop = article.offsetTop;
            const articleHeight = article.offsetHeight;
            const windowHeight = window.innerHeight;
            const scrollTop = window.pageYOffset;
            
            const progress = ((scrollTop - articleTop + windowHeight) / articleHeight) * 100;
            const clampedProgress = Math.min(Math.max(progress, 0), 100);
            progressBar.style.width = clampedProgress + '%';
        });

        // Header scroll effect
        let lastScroll = 0;
        const header = document.getElementById('header');
        
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            
            lastScroll = currentScroll;
        });

        // Back to top button
        const backToTop = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 500) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        // Obtener offset del header (detecta 'fixed' o 'sticky')
        function getHeaderOffset() {
            const candidates = Array.from(document.querySelectorAll('header, .main-header, .site-header'));
            const fixed = candidates.find(el => {
                const pos = getComputedStyle(el).position;
                return pos === 'fixed' || pos === 'sticky';
            });
            const h = fixed ? fixed.getBoundingClientRect().height : 120;
            return Math.max(0, Math.round(h));
        }
        let headerOffset = getHeaderOffset();
        // Sync CSS variable for consistent sticky offsets
        document.documentElement.style.setProperty('--header-height', `${headerOffset}px`);
        window.addEventListener('resize', () => {
            headerOffset = getHeaderOffset();
            document.documentElement.style.setProperty('--header-height', `${headerOffset}px`);
        });

        // Actualizar etiqueta del botón de índice en móvil con la sección activa
        const tocWidget = document.querySelector('.sticky-toc');
        const tocToggle = tocWidget ? tocWidget.querySelector('.toc-toggle') : null;
        function updateTocActiveLabel() {
            if (!tocToggle) return;
            const activeLink = document.querySelector('.table-of-contents a.active');
            const label = activeLink ? activeLink.textContent.trim() : '';
            tocToggle.innerHTML = label ? `Índice: <span class="toc-active-label">${label}</span>` : 'Índice';
        }

        // Smooth scroll con compensación del header para enlaces del TOC
        document.querySelectorAll('.table-of-contents a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const id = (this.getAttribute('href') || '').replace('#','');
                const target = document.getElementById(id);
                if (target) {
                    const y = target.getBoundingClientRect().top + window.scrollY - (headerOffset + 16);
                    window.scrollTo({ top: y, behavior: 'smooth' });
                }
                // Actualiza etiqueta inmediatamente al hacer click
                setTimeout(updateTocActiveLabel, 100);
            }, { passive: false });
        });
        
        // Active section highlighting in table of contents
        const observerCallback = (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    document.querySelectorAll('.table-of-contents a').forEach(link => {
                        link.classList.remove('active');
                        link.removeAttribute('aria-current');
                        if (link.getAttribute('href') === `#${id}`) {
                            link.classList.add('active');
                            link.setAttribute('aria-current', 'true');
                        }
                    });
                }
            });
        };

        function setupObserver() {
            const observerOptions = {
                root: null,
                rootMargin: `-${headerOffset}px 0px -60% 0px`,
                threshold: 0.01
            };
            if (window._tocObserver) window._tocObserver.disconnect();
            const obs = new IntersectionObserver(observerCallback, observerOptions);
            window._tocObserver = obs;
            document.querySelectorAll('h2[id], h3[id]').forEach(heading => {
                obs.observe(heading);
            });
            updateTocActiveLabel();
        }
        setupObserver();
        window.addEventListener('resize', () => { headerOffset = getHeaderOffset(); setupObserver(); });

        // Modo fijo del índice: acompaña la lectura cuando el header ya no está visible
        const tocContainer = tocWidget;
        function updateTocFixed() {
            if (!tocContainer) return;
            const isMobile = window.innerWidth < 768;
            if (isMobile) {
                tocContainer.classList.remove('toc-fixed');
                tocContainer.style.removeProperty('--toc-top');
                tocContainer.style.removeProperty('--toc-left');
                // Asegura que el índice sea visible por defecto en móvil
                if (!tocContainer.classList.contains('open')) {
                    tocContainer.classList.add('open');
                    if (tocToggle) tocToggle.setAttribute('aria-expanded', 'true');
                }
                return;
            }
            const headerRect = header.getBoundingClientRect();
            const headerGone = headerRect.bottom <= 0; // el header salió de la vista
            if (headerGone) {
                const container = document.querySelector('.article-container') || document.querySelector('main') || document.body;
                const rect = container.getBoundingClientRect();
                const left = rect.left + (rect.width / 2);
                const top = Math.max(20, headerOffset);
                tocContainer.style.setProperty('--toc-top', `${top}px`);
                tocContainer.style.setProperty('--toc-left', `${left}px`);
                tocContainer.classList.add('toc-fixed');
            } else {
                tocContainer.classList.remove('toc-fixed');
                tocContainer.style.removeProperty('--toc-top');
                tocContainer.style.removeProperty('--toc-left');
            }
        }
        window.addEventListener('scroll', updateTocFixed, { passive: true });
        window.addEventListener('resize', updateTocFixed);
        updateTocFixed();

        // Toggle del índice en móvil
        if (tocToggle && tocWidget) {
            tocToggle.addEventListener('click', () => {
                const isOpen = tocWidget.classList.toggle('open');
                tocToggle.setAttribute('aria-expanded', String(isOpen));
            });
            // Keyboard support for accessibility (Enter/Space)
            tocToggle.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    const isOpen = tocWidget.classList.toggle('open');
                    tocToggle.setAttribute('aria-expanded', String(isOpen));
                }
            });
        }

        // Sincroniza visibilidad al cambiar entre móvil y escritorio
        window.addEventListener('resize', () => {
            const isMobile = window.innerWidth < 768;
            if (isMobile) {
                tocWidget.classList.add('open');
                if (tocToggle) tocToggle.setAttribute('aria-expanded', 'true');
            } else {
                tocWidget.classList.remove('open');
                if (tocToggle) tocToggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Form validation
        const newsletterForm = document.querySelector('.newsletter-form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const email = document.getElementById('email-input').value;
                // Aquí iría la lógica de envío al backend
                alert('¡Gracias por suscribirte! Pronto recibirás nuestras mejores ofertas.');
                newsletterForm.reset();
            });
        }

        // Lazy loading images optimization
        if ('loading' in HTMLImageElement.prototype) {
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(img => {
                img.src = img.src;
            });
        } else {
            // Fallback for browsers that don't support lazy loading
            const script = document.createElement('script');
            script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lozad.js/1.16.0/lozad.min.js';
            document.body.appendChild(script);
        }

        // Keyboard navigation enhancement
        document.addEventListener('keydown', (e) => {
            // Alt + T: Top of page
            if (e.altKey && e.key === 't') {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        });

        // Print optimization
        window.addEventListener('beforeprint', () => {
            document.querySelectorAll('aside, header nav, .back-to-top').forEach(el => {
                el.style.display = 'none';
            });
        });

        window.addEventListener('afterprint', () => {
            document.querySelectorAll('aside, header nav, .back-to-top').forEach(el => {
                el.style.display = '';
            });
        });
    </script>
@endsection
