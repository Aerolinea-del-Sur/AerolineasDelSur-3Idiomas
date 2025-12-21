@php
$seo = seo()
    ->title("Vuelos en Perú: Descubre la Experiencia Aerolínea del Sur | Blog")
    ->description("Descubre cómo Aerolínea del Sur transforma el viaje aéreo en Perú con vuelos charter, sobrevuelos turísticos y transporte de carga.")
    ->keywords(['vuelos peru', 'aerolinea del sur', 'charter peru', 'sobrevuelos nazca', 'carga aerea peru', 'ambulancia aerea'])
    ->image(asset('img/blog/aerolinea-sur-experience.jpg'))
    ->canonical(url(app()->getLocale() . '/blog/vuelos-peru'))
    ->addSchema([
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => 'Vuelos en Perú: Descubre la Experiencia Aerolínea del Sur',
        'description' => 'En el vasto y complejo territorio peruano, Aerolínea del Sur se erige como una opción para surcar los cielos peruanos con exclusividad.',
        'image' => asset('img/blog/aerolinea-sur-experience.jpg'),
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
        'datePublished' => '2025-12-20',
        'dateModified' => '2025-12-20'
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

    <!-- Skip to content -->
    <a href="#main-content" class="skip-link"
        style="position:absolute; top:-40px; left:0; background:#c9a227; color:#000; padding:8px; z-index:100; transition:top 0.3s;">Saltar
        al contenido</a>

    <!-- Breadcrumbs -->
    <nav class="breadcrumbs" aria-label="Breadcrumb" style="max-width:1200px; margin:0 auto; padding:150px 2rem 0;">
        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"
            style="color:#c9a227; text-decoration:none;">Inicio</a>
        <span style="color:#666; margin:0 0.5rem;">/</span>
        <a href="{{ url(app()->getLocale() . '/destinos') }}" style="color:#c9a227; text-decoration:none;">Blog</a>
        <span style="color:#666; margin:0 0.5rem;">/</span>
        <strong style="color:#fff;">Experiencia Aerolínea del Sur</strong>
    </nav>

    <div class="container" style="padding-top:4rem;">
        <article id="main-content" role="main">

            <!-- Header del Artículo -->
            <header class="article-header">
                <span class="category-badge">Servicios Exclusivos</span>
                <h1>Vuelos en Perú: Descubre la Experiencia Aerolínea del Sur</h1>
                <div class="article-meta-large">
                    <span><i class="fas fa-calendar-alt"></i> <time datetime="2025-12-20">20 de Diciembre,
                            2025</time></span>
                    <span><i class="fas fa-clock"></i> 8 min lectura</span>
                    <span><i class="fas fa-user"></i> Redacción Aerolínea del Sur</span>
                </div>

                <!-- Tabla de contenidos (Sticky Sidebar Widget moved here or inline for specific layout) -->
                <!-- En este diseño centrado, podríamos poner un pequeño índice aquí o dejarlo en el sidebar -->
            </header>

            <!-- Imagen Destacada -->
            <div class="featured-image-container">
                <img src="https://images.unsplash.com/photo-1569629743817-70d8db6c323b?w=1200&h=600&fit=crop"
                    alt="Avión de Aerolínea del Sur sobrevolando los Andes peruanos" class="featured-image" loading="lazy">
            </div>

            <div class="article-main-content">

                <!-- Intro -->
                <p>En el vasto y complejo territorio peruano, donde la geografía desafía los límites convencionales,
                    <strong>Aerolínea del Sur</strong> se erige como una opción para surcar los cielos peruanos. Puesto que,
                    ha sido diseñada para transformar la manera de viajar, combinando la precisión logística con un estándar
                    de exclusividad.
                </p>

                <p>Entendemos que el Perú requiere soluciones aéreas específicas. Por ello, contamos con una flota de
                    aeronaves modernas adaptadas a la geografía diversa del país. Desde las corrientes de aire de la costa
                    hasta las altitudes de los Andes y la densa vegetación de la Amazonía, nuestras unidades están bien
                    equipadas para garantizar vuelos estables, seguros y eficientes en cualquier destino.</p>

                <div class="highlight-box">
                    <p><strong>Más allá del placer de viajar</strong>, destacamos por brindar una buena logística operativa.
                        Ya sea que se trate de una agenda corporativa ajustada o de la coordinación de un traslado crítico,
                        nuestro equipo de expertos gestiona cada ruta con eficiencia. En Aerolínea del Sur, la puntualidad y
                        la seguridad no son opcionales; son los pilares que sostienen nuestra reputación en el sector
                        aeronáutico.</p>
                </div>

                <h2 id="conoce-servicios">Conoce nuestros servicios</h2>
                <p>En Aerolínea del Sur, hemos diversificado nuestra operatividad para cubrir cada necesidad específica,
                    nuestra propuesta de valor se despliega en cuatro pilares:</p>

                <!-- 1. Vuelos Privados -->
                <h3 id="charter">Servicios de Vuelos Privados (Charter)</h3>
                <p>En Aerolínea del Sur, elevamos el concepto de viajar a una categoría superior. Nuestro servicio de vuelos
                    charter en Perú está diseñado para quienes consideran que el tiempo y la comodidad son sus activos más
                    valiosos.</p>

                <h4>Beneficios destacados:</h4>
                <ul>
                    <li><strong>Exclusividad y Confort a Medida:</strong> Entendemos que cada pasajero es único. Por ello,
                        ofrecemos viajes personalizados que se adaptan a las necesidades específicas de ejecutivos, familias
                        y grupos. Nuestras cabinas están configuradas para brindar un ambiente de descanso o productividad,
                        permitiéndole disfrutar de un servicio de lujo con catering y atención a bordo.</li>
                    <li><strong>Flexibilidad Total de Horarios:</strong> Olvídese de las restricciones de las aerolíneas
                        comerciales. Con nuestra modalidad de transporte aéreo privado, usted tiene el control absoluto: tú
                        decides cuándo y desde dónde despegar. Minimizamos los tiempos de espera y optimizamos sus rutas,
                        permitiendo aterrizar en aeropuertos de difícil acceso gracias a nuestra flota versátil.</li>
                    <li><strong>Privacidad Total y Seguridad:</strong> La discreción es nuestra prioridad. Contamos con
                        procesos de embarque rápidos, evitando las aglomeraciones de las terminales públicas. Disfrutará de
                        una atención personalizada desde el primer contacto, garantizando que su identidad y sus planes de
                        vuelo se mantengan bajo la más estricta confidencialidad.</li>
                </ul>

                <div class="highlight-box">
                    <strong>Datos Clave de nuestro servicio Charter:</strong>
                    <ul style="margin-top:0.5rem;">
                        <li><strong>Disponibilidad 24/7:</strong> Coordinación de vuelos de última hora para viajes de
                            negocios urgentes.</li>
                        <li><strong>Conectividad Regional:</strong> Acceso a destinos en todo el Perú que no cuentan con
                            frecuencias comerciales regulares.</li>
                        <li><strong>Seguridad Certificada:</strong> Protocolos rigurosos de mantenimiento aeronáutico bajo
                            estándares internacionales.</li>
                    </ul>
                </div>

                <!-- 2. Sobrevuelos -->
                <h3 id="sobrevuelos">Sobrevuelos: Los Tesoros del Perú desde el Aire</h3>
                <img src="https://images.unsplash.com/photo-1526392060635-9d6019884377?w=800&h=400&fit=crop"
                    alt="Vista aérea de Cusco" style="width:100%; border-radius:10px; margin-bottom:1.5rem;">
                <p>Descubra la riqueza del patrimonio peruano desde una perspectiva que pocos logran experimentar. Con
                    Aerolínea del Sur, los tours aéreos en Perú se convierten en una aventura de lujo, permitiéndole admirar
                    la geografía nacional con una claridad y comodidad inigualables.</p>

                <h4>Destinos Imprescindibles:</h4>
                <ul>
                    <li><strong>Sobrevuelo a las Líneas de Nazca:</strong> Admire desde lo alto los gigantescos geoglifos
                        que han desconcertado al mundo por siglos. Nuestro sobrevuelo a las Líneas de Nazca garantiza una
                        visibilidad óptima de figuras como el colibrí, el mono y el astronauta.</li>
                    <li><strong>Vista aérea de Choquequirao:</strong> Evite las extenuantes caminatas de varios días y
                        descubra la majestuosidad de Choquequirao desde el cielo. Este sobrevuelo ofrece una vista
                        panorámica única de la "cuna de oro", revelando sus terrazas y construcciones incas.</li>
                    <li><strong>Lago Titicaca y Selva Peruana:</strong> Experimente el contraste de colores entre el azul
                        profundo del Lago Titicaca, el lago navegable más alto del mundo, y el paisaje de la Selva Peruana.
                        Volar sobre el Amazonas peruano le permitirá apreciar los serpenteantes ríos y la biodiversidad.
                    </li>
                    <li><strong>La Montaña Vinicunca:</strong> La famosa Montaña de Siete Colores se muestra en todo su
                        esplendor sin el esfuerzo físico de la altura. Nuestra ruta aérea sobre la cordillera de Vilcanota
                        ofrece una vista privilegiada de las franjas de colores naturales de Vinicunca y los glaciares
                        circundantes.</li>
                </ul>

                <!-- 3. Carga Aérea -->
                <h3 id="carga">Servicio de Transporte de Carga Aérea</h3>
                <p>En un país de geografía desafiante, la velocidad y la seguridad son determinantes para el éxito de
                    cualquier operación comercial. Aerolínea del Sur ofrece un servicio de logística aérea integral,
                    diseñado para mover el motor productivo del Perú con eficiencia y puntualidad garantizada.</p>

                <h4>Fortalezas de nuestra división de carga:</h4>
                <ul>
                    <li><strong>Logística Eficiente y Conectividad Regional:</strong> Somos expertos en conectar las
                        regiones más remotas del país, llegando a donde el transporte terrestre no puede o tarda demasiado.
                        Optimizamos las cadenas de suministro mediante rutas estratégicas que reducen los tiempos de
                        tránsito, facilitando el comercio entre la costa, la sierra y la selva peruana.</li>
                    <li><strong>Manejo Especializado de Cargas Críticas:</strong> Contamos con protocolos rigurosos para el
                        manejo seguro de mercancías delicadas. Desde equipos tecnológicos de alta precisión y suministros
                        industriales, hasta paquetería urgente y productos perecederos. Nuestra flota está preparada para
                        transportar bienes que requieren un cuidado extremo, garantizando que lleguen a su destino en
                        perfectas condiciones.</li>
                    <li><strong>Soluciones para el Comercio y la Industria (Cobertura Nacional):</strong> Brindamos
                        soluciones rápidas y escalables para sectores clave como la minería, el agro y el comercio
                        electrónico. Nuestra cobertura nacional permite que las empresas mantengan su operatividad sin
                        interrupciones, ofreciendo un soporte de transporte de carga pesada y ligera con estándares
                        internacionales de seguridad.</li>
                </ul>

                <!-- 4. Ambulancia Aérea -->
                <h3 id="ambulancia">Transporte Médico Aéreo (Ambulancia Aérea)</h3>
                <p>En situaciones donde cada segundo cuenta, Aerolínea del Sur pone a su disposición su servicio de
                    ambulancia aérea en Perú. Somos especialistas en traslados de alta complejidad, garantizando que el
                    paciente reciba atención desde el punto de origen hasta el centro hospitalario de destino.</p>

                <div class="cta-box">
                    <h3>Compromiso con la Salud y la Vida</h3>
                    <p style="color: #ddd;">Nuestras aeronaves están configuradas como unidades de cuidados intensivos.
                        Ofrecemos una respuesta inmediata para evacuaciones médicas (MEDEVAC) en todo el territorio
                        nacional.</p>
                    <a href="{{ route('aeromedico', ['locale' => app()->getLocale()]) }}" class="cta-button">Solicitar
                        Emergencia</a>
                </div>

                <p>Más allá de la emergencia, coordinamos el transporte en ambulancia terrestre tanto en el recojo como en
                    la recepción, asegurando una transferencia cama a cama sin interrupciones. Nuestra central de
                    emergencias está operativa las 24 horas del día, los 365 días del año.</p>

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