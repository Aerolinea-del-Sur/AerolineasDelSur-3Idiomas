@extends ('a_EncabezadoFooter.princi')

@php
// Custom SEO for Inicio page
$seo = [
    'title' => 'Aerolínea del Sur | Vuelos Privados y Charter en Perú',
    'description' => 'Servicios aéreos premium en Perú: vuelos charter personalizados, helicópteros, transporte médico certificado y carga especializada. Seguridad garantizada desde Cusco.',
    'keywords' => 'vuelos privados perú, charter cusco, helicóptero cusco, transporte aéreo médico perú, carga aérea, sobrevuelos valle sagrado',
    'og_image' => asset('img/portada-aerolinea.jpg'),
    'canonical' => url('/'),
];
@endphp

@section('content')
<?php 
    // <!-- presentacion -->

    //h1 - p
    $h1_1 = 'Tú eliges el destino';
    $h1_2 = '';

    $p1_1 = 'Nosotros nos encargamos de la experiencia de viaje';
    //Anterior texto: Conectamos el Perú con vuelos seguros, cómodos y personalizados
    // <!-- Tours Section -->
    
    //h1 - p
    $h1_3 = 'Descubre Nuestros Servicios';
    $p1_2 = 'Embárcate en una aventura inolvidable con nuestros servicios cuidadosamente diseñados.';
    
    // <!-- titulo de acordeon -->
        //h2
        $h2_1 = 'Servicios Destacados';

            //h3 - p
            $h3_1 = 'Vuelos Chárter';
            $p_1 = 'Vuelos privados personalizados, ideales para negocios, instituciones, deportes o familias que buscan flexibilidad y exclusividad.';
            //h3 - p
            $h3_2 = 'Helicóptero';
            $p_2 = 'Transporte en helicóptero rápido, flexible y seguro, ideal para personas, cargas valiosas, rescates y acceso a zonas de difícil alcance.';
            //h3 - p
            $h3_3 = 'Ambulancia Médica';
            $p_3 = 'Transporte aéreo médico especializado para pacientes, evacuaciones y traslado de órganos, con aeronaves equipadas y personal médico calificado.';
            //h3 - p
            $h3_4 = 'Carga';
            $p_4 = 'Vuelos chárter de carga, desde jets ligeros hasta aviones de gran capacidad, garantizando entregas urgentes y de gran volumen en tiempo récord.';

    //h1 - p
    $h1_4 = '¿Por qué elegir Aerolínea del Sur?';
    $p_5 = 'Operamos vuelos privados diseñados para empresas, instituciones y familias que valoran la flexibilidad, puntualidad y servicio personalizado.';
    //h3 - p
            $h3_5 = 'Seguridad Garantizada';
            $p_6 = 'Contamos con los más altos estándares de seguridad internacional y una flota moderna con mantenimiento riguroso. Tu tranquilidad es nuestra prioridad número uno.';
                //span
                $span_1 = '✓ Certificación IATA';
                $span_2 = '✓ Flota renovada';
                $span_3 = '✓ Pilotos certificados';
            //h3 - p
            $h3_6 = 'Experiencia Personalizada';
            $p_7 = 'Ofrecemos un servicio personalizado que se adapta a tus necesidades específicas. Desde la reserva hasta el destino, cada detalle está pensado para ti.';
                //span
                $span_4 = '✓ Atención 24/7';
                $span_5 = '✓ Servicio premium';
                $span_6 = '✓ Flexibilidad total';
            //h3 - p
            $h3_7 = 'Tradición y Confianza';
            $p_8 = 'Más de 20 años de experiencia en aviación peruana respaldan cada vuelo. Nuestro compromiso es ofrecer seguridad certificada, puntualidad y un servicio que honra la tradición del buen trato.';
                //span
                $span_7 = '✓ Equipo Profesional'; 
                $span_8 = '✓ Seguridad Asegurada';
                $span_9 = '✓ Estándares Internacionales';
    // <!-- Testimonios Section -->
    $h1_5 = 'Lo que dicen nuestros pasajeros';
    $p_9 = 'Experiencias reales de viajeros que han confiado en nosotros para sus aventuras por los cielos del sur.';
    
                    //p h4 span
                    $p_10 = 'Una experiencia increíble desde el primer momento. El servicio fue excepcional y la atención al detalle impresionante. Definitivamente volaré con ellos nuevamente.';
                    $h4_1 = 'María Alejandra González';
                    $span_10 = 'Empresaria - Lima, Perú';

                    $p_11 = 'Profesionalismo y seguridad en cada vuelo. La puntualidad y comodidad superaron mis expectativas. Recomiendo totalmente sus servicios.';
                    $h4_2 = 'Carlos Rodríguez';
                    $span_11 = 'Arquitecto - Bogotá, Colombia';

                    $p_12 = 'El mejor servicio de aviación que he experimentado. Desde la reserva hasta el aterrizaje, todo fue perfecto. Un equipo verdaderamente profesional.';
                    $h4_3 = 'Ana Martínez';
                    $span_12 = 'Doctora - Quito, Ecuador';

                    $p_13 = 'Excelente atención y vuelos cómodos. La tripulación siempre amable y dispuesta a ayudar. Una experiencia de lujo a precio justo.';
                    $h4_4 = 'Jorge López';
                    $span_13 = 'Ingeniero - Santiago, Chile';

                    $p_14 = 'Seguridad y confianza en cada vuelo. Me siento tranquila sabiendo que estoy en buenas manos. El servicio personalizado hace la diferencia.';
                    $h4_5 = 'Lucía Silva';
                    $span_14 = 'Abogada - Caracas, Venezuela';

                    $p_15 = 'Una aerolínea que realmente se preocupa por sus pasajeros. Vuelos puntuales, servicio excepcional y precios competitivos. Altamente recomendado.';
                    $h4_6 = 'Roberto Herrera';
                    $span_15 = 'Consultor - Buenos Aires, Argentina';

    // <!-- Certificaciones Section -->
    $h1_6 = 'Certificaciones Premium';
    $p_16 = 'Excelencia certificada en cada vuelo. Nuestros estándares de calidad y seguridad están respaldados por las más prestigiosas organizaciones internacionales de aviación.';
    
    //    <!-- FAQ Section -->
    $h1_7 = 'Preguntas Frecuentes';
    $p_17 = 'Encuentra respuestas a las preguntas más comunes sobre nuestros servicios';
    
            $h3_8 = '¿Qué destinos cubren nuestros vuelos chárter?';
            $p_18 = 'Conectamos cada rincón del Perú, desde la costa hasta la Amazonía, y las principales capitales de Sudamérica. Diseñamos vuelos chárter a medida que se adaptan a tu agenda, garantizando acceso directo a destinos exclusivos de negocios o placer.';
            
            $h3_9 = '¿Cómo puedo hacer una reserva?';
            $p_19 = 'Realiza tu reserva a través de nuestro sitio web, por teléfono al +51 932 475 995, o vía correo electrónico a contacto@aerolineadelsur.com.pe. Nuestro equipo te brindará atención personalizada 24/7.';
            
            $h3_10 = '¿Cuál es la política de equipaje?';
            $p_20 = 'Aerolinea del Sur permite un máximo de 23 kg de equipaje por pasajero. Este estándar es esencial para mantener la operatividad y eficiencia de nuestros vuelos privados.';

            $h3_11 = '¿Qué medidas de seguridad aplica Aerolínea del Sur en sus operaciones?';
            $p_21 = 'Cumplimos con todos los estándares internacionales de seguridad aérea. Nuestras aeronaves reciben mantenimiento regular certificado, nuestros pilotos tienen entrenamiento continuo, y seguimos protocolos estrictos de seguridad en tierra y vuelo.';

            $h3_12 = '¿Ofrecen programas de viajero frecuente?';
            $p_22 = 'Sí. Nuestro programa Cielos del Sur ofrece beneficios exclusivos: acumulación de millas, upgrades gratuitos, acceso a salas VIP y prioridad en check-in. Únete sin costo y disfruta de privilegios desde tu primer vuelo.';
    // h1_8  - h2_3 - h3_13 - h4_7 p_24
    $h2_2 = '¿Necesitas más información?';
    $p_23 = 'Nuestro equipo está disponible para ayudarte';
?>
    <!-- presentacion -->
    <link rel="stylesheet" href="{{ asset('public/css/paginas/inicio.css') }}">
    <section class="hero-section">
        <!-- Slider de imágenes de fondo -->
        <div class="hero-slider">
            <!-- PERSONALIZAR: Cambiar las URLs por las imágenes de tu empresa -->
            <div class="hero-slide active">
                <video autoplay muted loop playsinline class="hero-video">
                    <source src="{{ asset('/public/video/portada-aerolinea-del-sur.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

        <div class="hero-content">
            <h1 class="hero-title"> <?= $h1_1 ?> <span class="highlight"> <?= $h1_2 ?> </span></h1>
            <p class="hero-subtitle" style="text-align: center;">
                <?= $p1_1 ?>
            </p>
        </div>
    </section>
    
    <!-- Tours Section -->
    <section class="tours-section">
        <div class="tours-container">
            <div class="tours-header">
                <h1> <?= $h1_3 ?> </h1>
                <p> <?= $p1_2 ?> </p>
            </div>
            <!-- Sección Acordeón Diagonal de Destinos -->
            <section class="destinos-accordion-section">
                <div class="accordion-container">
                    <!-- Columna fija -->
                    <div class="accordion-sidebar">
                        <h2> <?= $h2_1 ?> </h2>
                    </div>

                    <!-- Acordeón -->
                    <div class="accordion-wrapper">
                        <div class="accordion-skewed">
                            <ul>
                                <li>
                                    <div class="accordion-content">
                                        <h3> <?= $h3_1 ?> </h3>
                                        <p> <?= $p_1 ?> </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-content">
                                        <h3> <?= $h3_2 ?> </h3>
                                        <p> <?= $p_2 ?> </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-content">
                                        <h3> <?= $h3_3 ?> </h3>
                                        <p> <?= $p_3 ?> </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-content">
                                        <h3> <?= $h3_4 ?> </h3>
                                        <p> <?= $p_4 ?> </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    
    <!-- Por qué elegirnos Section -->
    <section class="por-que-section" itemscope itemtype="https://schema.org/Service">
        <div class="por-que-container">
            <div class="por-que-header">
                <h1 itemprop="name"><?= $h1_4 ?></h1>
                <p itemprop="description"><?= $p_5 ?></p>
                <div class="linea"></div>
            </div>
            
            <div class="por-que-grid">

                <!-- Card 1 -->
                <div class="por-que-card" itemscope itemtype="https://schema.org/Thing">
                    <div class="por-que-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" role="img" aria-label="<?= $h3_5 ?>" loading="lazy">
                            <circle cx="40" cy="40" r="35" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M25 40L35 50L55 30" stroke="#c9a227" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="40" cy="40" r="8" fill="#c9a227" opacity="0.3"/>
                        </svg>
                    </div>
                    <div class="por-que-content">
                        <h3 itemprop="name"><?= $h3_5 ?></h3>
                        <p itemprop="description"><?= $p_6 ?></p>
                        <div class="por-que-features">
                            <span class="feature-tag" itemprop="additionalType"><?= $span_1 ?></span>
                            <span class="feature-tag" itemprop="additionalType"><?= $span_2 ?></span>
                            <span class="feature-tag" itemprop="additionalType"><?= $span_3 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="por-que-card" itemscope itemtype="https://schema.org/Thing">
                    <div class="por-que-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" role="img" aria-label="<?= $h3_6 ?>" loading="lazy">
                            <circle cx="40" cy="40" r="35" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M30 25H50C52.5 25 55 27.5 55 30V50C55 52.5 52.5 55 50 55H30C27.5 55 25 52.5 25 50V30C25 27.5 27.5 25 30 25Z" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M35 35H45M35 40H45M35 45H40" stroke="#c9a227" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="40" cy="40" r="12" fill="#c9a227" opacity="0.1"/>
                        </svg>
                    </div>
                    <div class="por-que-content">
                        <h3 itemprop="name"><?= $h3_6 ?></h3>
                        <p itemprop="description"><?= $p_7 ?></p>
                        <div class="por-que-features">
                            <span class="feature-tag" itemprop="additionalType"><?= $span_4 ?></span>
                            <span class="feature-tag" itemprop="additionalType"><?= $span_5 ?></span>
                            <span class="feature-tag" itemprop="additionalType"><?= $span_6 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="por-que-card" itemscope itemtype="https://schema.org/Thing">
                    <div class="por-que-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" role="img" aria-label="<?= $h3_7 ?>" loading="lazy">
                            <circle cx="40" cy="40" r="35" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M25 45C25 35 32 25 40 25C48 25 55 35 55 45" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M30 50C30 47 32 45 35 45H45C48 45 50 47 50 50V55H30V50Z" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <circle cx="40" cy="35" r="6" stroke="#c9a227" stroke-width="2" fill="none"/>
                            <circle cx="40" cy="40" r="15" fill="#c9a227" opacity="0.1"/>
                        </svg>
                    </div>
                    <div class="por-que-content">
                        <h3 itemprop="name"><?= $h3_7 ?></h3>
                        <p itemprop="description"><?= $p_8 ?></p>
                        <div class="por-que-features">
                            <span class="feature-tag" itemprop="additionalType"><?= $span_7 ?></span>
                            <span class="feature-tag" itemprop="additionalType"><?= $span_8 ?></span>
                            <span class="feature-tag" itemprop="additionalType"><?= $span_9 ?></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <!-- JSON-LD comprimido para SEO y rich snippets -->
    <script type="application/ld+json">
    {
    "@context":"https://schema.org",
    "@type":"Service",
    "name":"<?= $h1_4 ?>",
    "description":"<?= $p_5 ?>",
    "provider":{"@type":"Organization","name":"Nombre de tu empresa"},
    "hasOfferCatalog":{
        "@type":"OfferCatalog",
        "name":"Por qué elegirnos",
        "itemListElement":[
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"<?= $h3_5 ?>","description":"<?= $p_6 ?>","image":"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 80'><circle cx='40' cy='40' r='35' stroke='%23c9a227' stroke-width='3' fill='none'/><path d='M25 40L35 50L55 30' stroke='%23c9a227' stroke-width='4' stroke-linecap='round' stroke-linejoin='round'/><circle cx='40' cy='40' r='8' fill='%23c9a227' opacity='0.3'/></svg>","additionalType":["<?= $span_1 ?>","<?= $span_2 ?>","<?= $span_3 ?>"]}},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"<?= $h3_6 ?>","description":"<?= $p_7 ?>","image":"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 80'><circle cx='40' cy='40' r='35' stroke='%23c9a227' stroke-width='3' fill='none'/><path d='M30 25H50C52.5 25 55 27.5 55 30V50C55 52.5 52.5 55 50 55H30C27.5 55 25 52.5 25 50V30C25 27.5 27.5 25 30 25Z' stroke='%23c9a227' stroke-width='3' fill='none'/><path d='M35 35H45M35 40H45M35 45H40' stroke='%23c9a227' stroke-width='2' stroke-linecap='round'/><circle cx='40' cy='40' r='12' fill='%23c9a227' opacity='0.1'/></svg>","additionalType":["<?= $span_4 ?>","<?= $span_5 ?>","<?= $span_6 ?>"]}},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"<?= $h3_7 ?>","description":"<?= $p_8 ?>","image":"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 80'><circle cx='40' cy='40' r='35' stroke='%23c9a227' stroke-width='3' fill='none'/><path d='M25 45C25 35 32 25 40 25C48 25 55 35 55 45' stroke='%23c9a227' stroke-width='3' fill='none'/><path d='M30 50C30 47 32 45 35 45H45C48 45 50 47 50 50V55H30V50Z' stroke='%23c9a227' stroke-width='3' fill='none'/><circle cx='40' cy='35' r='6' stroke='%23c9a227' stroke-width='2' fill='none'/><circle cx='40' cy='40' r='15' fill='%23c9a227' opacity='0.1'/></svg>","additionalType":["<?= $span_7 ?>","<?= $span_8 ?>","<?= $span_9 ?>"]}}
        ]
    }
    }
    </script>


    <!-- Testimonios Section -->
    <section class="testimonios-section">
        <div class="testimonios-container">
            <div class="testimonios-header">
                <h1><?= $h1_5 ?></h1>
                <p><?= $p_9 ?></p>
                <div class="linea"></div>
            </div>

            <div class="testimonios-grid">

                <!-- Testimonio 1 -->
                <div class="testimonio-card" itemscope itemtype="https://schema.org/Review">
                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Aerolínea del Sur">
                        <meta itemprop="address" content="Cusco, Perú">
                    </div>
                    <div class="testimonio-rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                    </div>
                    <p class="testimonio-text" itemprop="reviewBody"><?= $p_10 ?></p>
                    <div class="testimonio-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <div class="author-avatar">
                            <img 
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23c9a227'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3EMA%3C/text%3E%3C/svg%3E" 
                                alt="Avatar de María Alejandra, cliente de Aerolínea del Sur"
                                title="Testimonio de María Alejandra"
                                itemprop="image"
                                loading="lazy"
                            >
                        </div>
                        <div class="author-info">
                            <h4 itemprop="name"><?= $h4_1 ?></h4>
                            <span><?= $span_10 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 2 -->
                <div class="testimonio-card" itemscope itemtype="https://schema.org/Review">
                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Aerolínea del Sur">
                    </div>
                    <div class="testimonio-rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                    </div>
                    <p class="testimonio-text" itemprop="reviewBody"><?= $p_11 ?></p>
                    <div class="testimonio-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <div class="author-avatar">
                            <img 
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23800020'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3ECR%3C/text%3E%3C/svg%3E" 
                                alt="Avatar de Carlos Rodríguez, cliente de Aerolínea del Sur"
                                title="Testimonio de Carlos Rodríguez"
                                itemprop="image"
                                loading="lazy"
                            >
                        </div>
                        <div class="author-info">
                            <h4 itemprop="name"><?= $h4_2 ?></h4>
                            <span><?= $span_11 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 3 -->
                <div class="testimonio-card" itemscope itemtype="https://schema.org/Review">
                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Aerolínea del Sur">
                    </div>
                    <div class="testimonio-rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                    </div>
                    <p class="testimonio-text" itemprop="reviewBody"><?= $p_12 ?></p>
                    <div class="testimonio-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <div class="author-avatar">
                            <img 
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23c9a227'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3EAM%3C/text%3E%3C/svg%3E" 
                                alt="Avatar de Ana Martínez, cliente de Aerolínea del Sur"
                                title="Testimonio de Ana Martínez"
                                itemprop="image"
                                loading="lazy"
                            >
                        </div>
                        <div class="author-info">
                            <h4 itemprop="name"><?= $h4_3 ?></h4>
                            <span><?= $span_12 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 4 -->
                <div class="testimonio-card" itemscope itemtype="https://schema.org/Review">
                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Aerolínea del Sur">
                    </div>
                    <div class="testimonio-rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                    </div>
                    <p class="testimonio-text" itemprop="reviewBody"><?= $p_13 ?></p>
                    <div class="testimonio-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <div class="author-avatar">
                            <img 
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23800020'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3EJL%3C/text%3E%3C/svg%3E" 
                                alt="Avatar de Jorge López, cliente de Aerolínea del Sur"
                                title="Testimonio de Jorge López"
                                itemprop="image"
                                loading="lazy"
                            >
                        </div>
                        <div class="author-info">
                            <h4 itemprop="name"><?= $h4_4 ?></h4>
                            <span><?= $span_13 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 5 -->
                <div class="testimonio-card" itemscope itemtype="https://schema.org/Review">
                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Aerolínea del Sur">
                    </div>
                    <div class="testimonio-rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                    </div>
                    <p class="testimonio-text" itemprop="reviewBody"><?= $p_14 ?></p>
                    <div class="testimonio-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <div class="author-avatar">
                            <img 
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23c9a227'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3ELS%3C/text%3E%3C/svg%3E" 
                                alt="Avatar de Lucía Silva, cliente de Aerolínea del Sur"
                                title="Testimonio de Lucía Silva"
                                itemprop="image"
                                loading="lazy"
                            >
                        </div>
                        <div class="author-info">
                            <h4 itemprop="name"><?= $h4_5 ?></h4>
                            <span><?= $span_14 ?></span>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 6 -->
                <div class="testimonio-card" itemscope itemtype="https://schema.org/Review">
                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Aerolínea del Sur">
                    </div>
                    <div class="testimonio-rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                    </div>
                    <p class="testimonio-text" itemprop="reviewBody"><?= $p_15 ?></p>
                    <div class="testimonio-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <div class="author-avatar">
                            <img 
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23800020'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3ERH%3C/text%3E%3C/svg%3E" 
                                alt="Avatar de Roberto Herrera, cliente de Aerolínea del Sur"
                                title="Testimonio de Roberto Herrera"
                                itemprop="image"
                                loading="lazy"
                            >
                        </div>
                        <div class="author-info">
                            <h4 itemprop="name"><?= $h4_6 ?></h4>
                            <span><?= $span_15 ?></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="testimonios-stats" itemscope itemtype="https://schema.org/AggregateRating">
                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                    <meta itemprop="name" content="Aerolínea del Sur">
                    <meta itemprop="address" content="Cusco, Perú">
                </div>
                <div class="stat-item">
                    <div class="stat-number" itemprop="ratingValue">4.9</div>
                    <div class="stat-label">Calificación promedio</div>
                    <div class="stat-stars">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                    </div>
                    <meta itemprop="bestRating" content="5">
                </div>
                <div class="stat-item">
                    <div class="stat-number" itemprop="ratingCount">2847</div>
                    <div class="stat-label">Reseñas verificadas</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Clientes satisfechos</div>
                </div>
            </div>
        </div>
    </section>
    <!-- JSON-LD de todos los testimonios -->
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Aerolínea del Sur",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "bestRating": "5",
        "reviewCount": "2847"
    },
    "review": [
        {"@type":"Review","author":{"@type":"Person","name":"<?= $h4_1 ?>"},"reviewBody":"<?= $p_10 ?>","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"}},
        {"@type":"Review","author":{"@type":"Person","name":"<?= $h4_2 ?>"},"reviewBody":"<?= $p_11 ?>","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"}},
        {"@type":"Review","author":{"@type":"Person","name":"<?= $h4_3 ?>"},"reviewBody":"<?= $p_12 ?>","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"}},
        {"@type":"Review","author":{"@type":"Person","name":"<?= $h4_4 ?>"},"reviewBody":"<?= $p_13 ?>","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"}},
        {"@type":"Review","author":{"@type":"Person","name":"<?= $h4_5 ?>"},"reviewBody":"<?= $p_14 ?>","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"}},
        {"@type":"Review","author":{"@type":"Person","name":"<?= $h4_6 ?>"},"reviewBody":"<?= $p_15 ?>","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"}}
    ]
    }
    </script>


    <!-- Certificaciones Section -->
    <section class="certificaciones-section">
        <div class="certificaciones-container">
            <div class="certificaciones-header">
                <h1> <?= $h1_6 ?> </h1>
                <p> <?= $p_16 ?> </p>
                <div class="linea"></div>
            </div>

            <div class="certificaciones-slider">
                <div class="certificaciones-viewport">
                    <div class="certificaciones-track" id="cert-track">
                        <!-- Certificación 1 - Gercetur -->
                        <figure class="certification-item" data-cert="gercetur">
                            <img
                                src="{{ asset('img/certificados/Gercetur.webp') }}"
                                alt="Certificación oficial Gercetur otorgada a la agencia de turismo"
                                title="Certificación Gercetur"
                                loading="lazy"
                                decoding="async"
                                fetchpriority="low"
                                importance="low"
                                width="200"
                                height="200"
                                srcset="{{ asset('img/certificados/Gercetur.webp') }} 1x, {{ asset('img/certificados/Gercetur.webp') }} 2x"
                                sizes="(max-width: 600px) 120px, 200px"
                                data-original-src="{{ asset('img/certificados/Gercetur.webp') }}"
                            >
                        </figure>
                        <!-- JSON-LD: Certificación GERCETUR -->
                        <script type="application/ld+json">
                        {
                        "@context": "https://schema.org/",
                        "@type": "ImageObject",
                        "contentUrl": "{{ asset('img/certificados/Gercetur.webp') }}",
                        "creator": {
                            "@type": "Organization",
                            "name": "Gobierno Regional del Cusco - GERCETUR"
                        },
                        "creditText": "Logo oficial de GERCETUR",
                        "caption": "Certificación turística oficial GERCETUR otorgada a la empresa.",
                        "datePublished": "2025-11-14"
                        }
                        </script>

                        <!-- Certificación 2 - MTC -->
                        <figure class="certification-item" data-cert="mtc">
                            <img
                                src="{{ asset('img/certificados/Mtc.webp') }}"
                                alt="Certificación MTC otorgada por el Ministerio de Transportes y Comunicaciones"
                                title="Certificación MTC"
                                loading="lazy"
                                decoding="async"
                                fetchpriority="low"
                                importance="low"
                                width="200"
                                height="200"
                                srcset="{{ asset('img/certificados/Mtc.webp') }} 1x, {{ asset('img/certificados/Mtc.webp') }} 2x"
                                sizes="(max-width: 600px) 120px, 200px"
                                data-original-src="{{ asset('img/certificados/Mtc.webp') }}"
                            >
                        </figure>
                        <!-- JSON-LD: Certificación MTC -->
                        <script type="application/ld+json">
                        {
                        "@context": "https://schema.org/",
                        "@type": "ImageObject",
                        "contentUrl": "{{ asset('img/certificados/Mtc.webp') }}",
                        "creator": {
                            "@type": "Organization",
                            "name": "Ministerio de Transportes y Comunicaciones del Perú"
                        },
                        "creditText": "Logo oficial del MTC",
                        "caption": "Certificación del Ministerio de Transportes y Comunicaciones del Perú.",
                        "datePublished": "2025-11-14"
                        }
                        </script>

                        <!-- Certificación 3 - DGAC -->
                        <figure class="certification-item" data-cert="dgac">
                            <img
                                src="{{ asset('img/certificados/Dgac.webp') }}"
                                alt="Certificación DGAC emitida por la Dirección General de Aeronáutica Civil"
                                title="Certificación DGAC"
                                loading="lazy"
                                decoding="async"
                                fetchpriority="low"
                                importance="low"
                                width="200"
                                height="200"
                                srcset="{{ asset('img/certificados/Dgac.webp') }} 1x, {{ asset('img/certificados/Dgac.webp') }} 2x"
                                sizes="(max-width: 600px) 120px, 200px"
                                data-original-src="{{ asset('img/certificados/Dgac.webp') }}"
                            >
                        </figure>
                        <!-- JSON-LD: Certificación DGAC -->
                        <script type="application/ld+json">
                        {
                        "@context": "https://schema.org/",
                        "@type": "ImageObject",
                        "contentUrl": "{{ asset('img/certificados/Dgac.webp') }}",
                        "creator": {
                            "@type": "Organization",
                            "name": "Dirección General de Aeronáutica Civil del Perú"
                        },
                        "creditText": "Logo oficial de la DGAC",
                        "caption": "Certificación otorgada por la Dirección General de Aeronáutica Civil del Perú.",
                        "datePublished": "2025-11-14"
                        }
                        </script>
                        <!-- Certificación 4 - IMH -->
                        <figure class="certification-item" data-cert="imh">
                            <img
                                src="{{ asset('img/certificados/Imh.webp') }}"
                                alt="Certificación IMH que valida estándares en manejo aeronáutico"
                                title="Certificación IMH"
                                loading="lazy"
                                decoding="async"
                                fetchpriority="low"
                                importance="low"
                                width="200"
                                height="200"
                                srcset="{{ asset('img/certificados/Imh.webp') }} 1x, {{ asset('img/certificados/Imh.webp') }} 2x"
                                sizes="(max-width: 600px) 120px, 200px"
                                data-original-src="{{ asset('img/certificados/Imh.webp') }}"
                            >
                        </figure>
                        <!-- JSON-LD: Certificación IMH -->
                        <script type="application/ld+json">
                        {
                        "@context": "https://schema.org/",
                        "@type": "ImageObject",
                        "contentUrl": "{{ asset('img/certificados/Imh.webp') }}",
                        "creator": {
                            "@type": "Organization",
                            "name": "Instituto Nacional de Metrología del Perú"
                        },
                        "creditText": "Logo oficial del IMH",
                        "caption": "Certificación oficial del Instituto Nacional de Metrología del Perú.",
                        "datePublished": "2025-11-14"
                        }
                        </script>

                    </div>
                </div>
            </div>

            <div class="cert-pagination" id="cert-pagination">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <!-- Header -->
            <div class="faq-header">
                <h1><?= $h1_7 ?></h1>
                <p class="p"><?= $p_17 ?></p>
            </div>

            <div class="faq-grid">

            <!-- FAQ Ítem 1 -->
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq1">
                    <span class="faq-text"><?= $h3_8 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq1">
                    <p class="p"><?= $p_18 ?></p>
                </div>
            </div>

            <!-- FAQ Ítem 2 -->
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq2">
                    <span class="faq-text"><?= $h3_9 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq2">
                    <p class="p"><?= $p_19 ?></p>
                </div>
            </div>

            <!-- FAQ Ítem 3 -->
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq3">
                    <span class="faq-text"><?= $h3_10 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq3">
                    <p class="p"><?= $p_20 ?></p>
                </div>
            </div>

            <!-- FAQ Ítem 4 -->
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq4">
                    <span class="faq-text"><?= $h3_11 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq4">
                    <p class="p"><?= $p_21 ?></p>
                </div>
            </div>

            <!-- FAQ Ítem 5 -->
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq5">
                    <span class="faq-text"><?= $h3_12 ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer" id="faq5">
                    <p class="p"><?= $p_22 ?></p>
                </div>
            </div>
            
            <script type="application/ld+json">
                {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [
                    {
                    "@type": "Question",
                    "name": "<?= $h3_8 ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?= $p_18 ?>"
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "<?= $h3_9 ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?= $p_19 ?>"
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "<?= $h3_10 ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?= $p_20 ?>"
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "<?= $h3_11 ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?= $p_21 ?>"
                    }
                    },
                    {
                    "@type": "Question",
                    "name": "<?= $h3_12 ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?= $p_22 ?>"
                    }
                    }
                ]
                }
            </script>

            <!-- Contact Section -->
            <div class="contact-section">
                <h2><?= $h2_2 ?></h2>
                <p class="p"><?= $p_23 ?></p>

                <div class="contact-buttons">
                    <a href="tel:+51944055408" class="contact-btn call-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 
                            19.79 19.79 0 0 1-8.63-3.07 
                            19.5 19.5 0 0 1-6-6 
                            19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72
                            12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27
                            a2 2 0 0 1 2.11-.45 
                            12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        Llamar Ahora
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script>
    function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            
            mobileMenu.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            
            if (!mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target)) {
                mobileMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
            }
        });

        // Efecto de scroll en el encabezado
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            const scrolled = window.pageYOffset;
            
            if (scrolled > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Close mobile menu on window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                const mobileMenu = document.getElementById('mobileMenu');
                const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
                mobileMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
            }
        });

        // Footer accordion for mobile devices
        document.addEventListener('DOMContentLoaded', function() {
            const footerTitles = document.querySelectorAll('.footer-title');
            
            footerTitles.forEach(title => {
                title.addEventListener('click', function() {
                    // Solo activar en dispositivos móviles
                    if (window.innerWidth <= 480) {
                        const column = this.parentElement;
                        column.classList.toggle('active');
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

        // FAQ functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', function() {
                    const isActive = item.classList.contains('active');
                    
                    // Close all other FAQ items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                        }
                    });
                    
                    // Toggle current item
                    if (isActive) {
                        item.classList.remove('active');
                    } else {
                        item.classList.add('active');
                    }
                });
            });

            // Handle hash navigation for FAQ items
            function handleHashNavigation() {
                const hash = window.location.hash;
                if (hash && hash.startsWith('#faq-')) {
                    const faqIndex = parseInt(hash.replace('#faq-', '')) - 1;
                    if (faqIndex >= 0 && faqIndex < faqItems.length) {
                        faqItems[faqIndex].classList.add('active');
                        faqItems[faqIndex].scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }
            }

            // Handle hash navigation on page load and hash change
            handleHashNavigation();
            window.addEventListener('hashchange', handleHashNavigation);

            // Contact button analytics (optional)
            const contactButtons = document.querySelectorAll('.contact-btn');
            contactButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const buttonType = this.classList.contains('whatsapp-btn') ? 'WhatsApp' : 'Phone';
                    // Add analytics tracking here if needed
                });
            });

            // Smooth scroll animation for FAQ section
            const faqSection = document.querySelector('.faq-section');
            if (faqSection) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }
                    });
                }, { threshold: 0.1 });

                faqSection.style.opacity = '0';
                faqSection.style.transform = 'translateY(20px)';
                faqSection.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(faqSection);
            }
            
            // Efecto de seguimiento del mouse en todas las imágenes del slider
            document.addEventListener('mousemove', function(e) {
                const mouseX = e.clientX;
                const mouseY = e.clientY;
                const windowWidth = window.innerWidth;
                const windowHeight = window.innerHeight;
                
                // Calcular el porcentaje de movimiento (0-100)
                const xPercent = (mouseX / windowWidth) * 100;
                const yPercent = (mouseY / windowHeight) * 100;
                
                // Aplicar el movimiento a todas las imágenes del slider
                const moveX = (xPercent - 50) * 0.6;
                const moveY = (yPercent - 50) * 0.6;
                
                // Aplicar transformación a todas las slides
                const slides = document.querySelectorAll('.hero-slide');
                slides.forEach(slide => {
                    slide.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.1)`;
                });
            });
            
            // Resetear posición cuando el mouse sale de la ventana
            document.addEventListener('mouseleave', function() {
                const slides = document.querySelectorAll('.hero-slide');
                slides.forEach(slide => {
                    slide.style.transform = 'translate(0px, 0px) scale(1.1)';
                });
            });
        });
</script>

<script>
    // Slider de Certificaciones - Versión Simple
    class CertificationSlider {
        constructor() {
            this.currentSlide = 0;
            this.totalSlides = document.querySelectorAll('.certification-item').length;
            this.slidesToShow = this.getSlidesToShow();
            this.maxSlide = Math.max((0, this.totalSlides - this.slidesToShow)-1);
            this.isTransitioning = false;
            this.init();
        }

        getSlidesToShow() {
            const width = window.innerWidth;
            if (width <= 480) return 2;
            if (width <= 768) return 3;
            if (width <= 1024) return 4;
            return 5;
        }

        init() {
            this.createPagination();
            this.updateSlider();
            this.bindEvents();
        }

        createPagination() {
            const pagination = document.querySelector('.cert-pagination');
            if (!pagination) return;
            
            pagination.innerHTML = '';
            const totalPages = this.maxSlide + 1;
            
            for (let i = 0; i <= this.maxSlide; i++) {
                const dot = document.createElement('div');
                dot.className = 'dot';
                if (i === this.currentSlide) {
                    dot.classList.add('active');
                }
                dot.addEventListener('click', () => this.goToSlide(i));
                pagination.appendChild(dot);
            }
        }

        updateSlider() {
            const track = document.querySelector('.certificaciones-track');
            if (!track) return;
            
            const itemWidth = 210; // 160px + 50px margin
            const translateX = -this.currentSlide * itemWidth;
            track.style.transform = `translateX(${translateX}px)`;
            
            // Update pagination
            const dots = document.querySelectorAll('.cert-pagination .dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentSlide);
            });
        }

        goToSlide(slideIndex) {
            if (this.isTransitioning) return;
            
            this.currentSlide = Math.max(0, Math.min(slideIndex, this.maxSlide));
            this.updateSlider();
        }

        nextSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentSlide = Math.min(this.currentSlide + 1, this.maxSlide);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 400);
        }

        prevSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentSlide = Math.max(this.currentSlide - 1, 0);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 400);
        }

        bindEvents() {
            // Handle window resize
            window.addEventListener('resize', () => {
                this.slidesToShow = this.getSlidesToShow();
                this.maxSlide = Math.max(0, this.totalSlides - this.slidesToShow);
                this.currentSlide = Math.min(this.currentSlide, this.maxSlide);
                this.createPagination();
                this.updateSlider();
            });
        }
    }

    // Slider de Tours - Versión Simple
    class ToursSlider {
        constructor() {
            this.slider = document.getElementById('tours-slider');
            this.pagination = document.getElementById('tours-pagination');
            this.cards = this.slider ? this.slider.children : [];
            this.totalCards = this.cards.length;
            this.currentIndex = 0;
            this.slidesToShow = this.getSlidesToShow();
            this.maxIndex = Math.max(0, this.totalCards - this.slidesToShow);
            this.isTransitioning = false;
            
            if (this.slider && this.totalCards > 0) {
                this.init();
            }
        }
        
        getSlidesToShow() {
            const width = window.innerWidth;
            if (width <= 480) return 1;
            if (width <= 768) return 1;
            if (width <= 1024) return 2;
            return 3;
        }
        
        init() {
            this.createPagination();
            this.updateSlider();
            this.bindEvents();
        }
        
        createPagination() {
            if (!this.pagination) return;
            
            this.pagination.innerHTML = '';
            
            for (let i = 0; i <= this.maxIndex; i++) {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                if (i === this.currentIndex) {
                    dot.classList.add('active');
                }
                dot.addEventListener('click', () => this.goToSlide(i));
                this.pagination.appendChild(dot);
            }
        }
        
        updateSlider() {
            if (!this.slider || this.isTransitioning) return;
            
            // Responsive card width calculation
            const width = window.innerWidth;
            let cardWidth, margin;
            
            if (width <= 360) {
                cardWidth = 220;
                margin = 20;
            } else if (width <= 480) {
                cardWidth = 250;
                margin = 24;
            } else if (width <= 768) {
                cardWidth = 280;
                margin = 30;
            } else if (width <= 1024) {
                cardWidth = 320;
                margin = 36;
            } else if (width <= 1200) {
                cardWidth = 340;
                margin = 40;
            } else {
                cardWidth = 370;
                margin = 50;
            }
            
            const totalCardWidth = cardWidth + margin;
            const translateX = -this.currentIndex * totalCardWidth;
            this.slider.style.transform = `translateX(${translateX}px)`;
            
            // Update pagination
            const dots = this.pagination ? this.pagination.querySelectorAll('.dot') : [];
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentIndex);
            });
        }
        
        goToSlide(slideIndex) {
            if (this.isTransitioning) return;
            
            this.currentIndex = Math.max(0, Math.min(slideIndex, this.maxIndex));
            this.updateSlider();
        }
        
        nextSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentIndex = Math.min(this.currentIndex + 1, this.maxIndex);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 600);
        }
        
        prevSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentIndex = Math.max(this.currentIndex - 1, 0);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 600);
        }
        
        bindEvents() {
            // Handle window resize
            window.addEventListener('resize', () => {
                this.slidesToShow = this.getSlidesToShow();
                this.maxIndex = Math.max(0, this.totalCards - this.slidesToShow);
                this.currentIndex = Math.min(this.currentIndex, this.maxIndex);
                this.createPagination();
                this.updateSlider();
            });
        }
    }

    // Función para actualizar las imágenes de certificaciones
    function updateCertificationImages(imageMap) {
        Object.keys(imageMap).forEach(certKey => {
            const certItem = document.querySelector(`[data-cert="${certKey}"]`);
            if (certItem) {
                const img = certItem.querySelector('img');
                if (img && imageMap[certKey]) {
                    img.src = imageMap[certKey];
                    img.removeAttribute('data-original-src');
                }
            }
        });
    }

    // Inicializar sliders cuando el DOM esté listo
    document.addEventListener('DOMContentLoaded', function() {
        new CertificationSlider();
        new ToursSlider();
    });
        // Función para toggle de FAQ
        function toggleFAQ(button) {
            const answer = button.nextElementSibling;
            const icon = button.querySelector('.faq-icon');
            
            // Cerrar otras FAQs abiertas
            document.querySelectorAll('.faq-question').forEach(q => {
                if (q !== button) {
                    q.classList.remove('active');
                    q.nextElementSibling.classList.remove('active');
                    q.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
                }
            });
            
            // Toggle FAQ actual
            button.classList.toggle('active');
            answer.classList.toggle('active');
            
            if (button.classList.contains('active')) {
                icon.style.transform = 'rotate(45deg)';
            } else {
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Animaciones al hacer scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll');
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('animate');
                }
            });
        }

        // Event listeners
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);

        // Smooth scroll para enlaces internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Efecto parallax suave para el hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroSlider = document.querySelector('.hero-slider');
            if (heroSlider) {
                heroSlider.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        });
</script>
@endsection
