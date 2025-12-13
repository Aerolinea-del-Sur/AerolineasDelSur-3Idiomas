@extends('a_EncabezadoFooter.princi')

@php
// Custom SEO for Nosotros page
$seo = [
    'title' => 'Sobre Nosotros | Aerolínea del Sur - Aviación Peruana de Confianza',
    'description' => 'Aerolínea peruana fundada en 2024 con capital 100% nacional. Misión, visión y valores enfocados en seguridad, excelencia e innovación en servicios aéreos.',
    'keywords' => 'aerolínea peruana, aviación cusco, empresa aérea perú, vuelos seguros perú, historia aerolínea del sur',
    'og_image' => asset('img/nosotros-aerolinea-sur.jpg'),
    'canonical' => url('/nosotros'),
];
@endphp

@section('content')
    <?php
        $h1_1 = 'Nosotros';
        $p_1 = 'Conozca nuestra historia y valores';

        $h2_1 = 'Nuestra Misión';
        $p_2 = 'Conectar el Perú mediante servicios aéreos seguros y personalizados que superen las expectativas de nuestros clientes.';
        $p_3 = 'Operamos con los más altos estándares de calidad, innovación constante y compromiso con las comunidades donde trabajamos.';

            $h2_2 = 'Nuestra Visión';
            $p_4 = 'Ser la aerolínea líder en Perú y Latinoamérica, reconocida por ofrecer experiencias aéreas exclusivas y seguras.';
            $p_5 = 'Permitimos a nuestros pasajeros descubrir destinos espectaculares con innovación, confort y servicio personalizado de clase mundial.';

            $h2_3 = 'Nuestro Propósito';
            $p_6 = 'Ser la aerolínea líder del Perú y Latinoamérica, reconocida a nivel nacional e internacional por ofrecer experiencias aéreas exclusivas y personalizadas que permitan a nuestros pasajeros descubrir los destinos más espectaculares, con seguridad, confort e innovación.';
            $p_7 = 'Existimos para transformar la manera en que las personas viajan, haciendo que cada experiencia sea memorable, significativa y valiosa.';

            $h2_4 = 'Nuestros Valores';

                $h3_1 = 'Excelencia';
                $p_8 = 'Ofrecer un servicio de calidad superior en cada experiencia de vuelo';

                $h3_2 = 'Integridad';
                $p_9 = 'Actuar con honestidad y transparencia en todas nuestras operaciones';

                $h3_3 = 'Seguridad';
                $p_11 = 'Mantener los más altos estándares de seguridad en cada vuelo';

                $h3_4 = 'Innovación';
                $p_12 = 'Implementar tecnología de vanguardia para mejorar la experiencia';

                $h3_5 = 'Pasión';
                $p_13 = 'Amor por la aviación y dedicación en cada servicio que brindamos';

                $h3_6 = 'Compromiso';
                $p_14 = 'Dedicación total con nuestros clientes y la comunidad peruana';


                $h3_7 = '2024';
                    $h4_1 = 'Fundación con visión peruana';
                    $p_15 = 'Nace Aerolínea del Sur con capital 100% peruano. Un equipo de pilotos y profesionales de la aviación se une para mostrar la grandeza del Perú desde el cielo, priorizando la seguridad, la exclusividad y el servicio personalizado.';

                $h3_8 = '2025';
                    $h4_2 = 'Primeras rutas exclusivas';
                    $p_16 = 'Inauguramos nuestras primeras rutas sobre el Valle Sagrado y Cusco. Conectamos a viajeros con el patrimonio cultural peruano desde una perspectiva aérea única y memorable.';
                
                $h3_9 = 'Hoy';
                    $h4_3 = 'Mirando al futuro';
                    $p_17 = 'Continuamos brindando un servicio de calidad y expandiendo nuestro alcance con nuevos aviones y servicios tursticos.';

            $h2_5 = '¿Quieres saber más?';
            $p_18 = 'Estamos aquí para responder a todas tus preguntas y ayudarte a conocer más sobre nuestra empresa.';
    ?>
<link rel="stylesheet" href="{{ asset('css/paginas/nosotros.css') }}">
    <!-- Encabezado de la página -->
    <header class="fleet-header">
        <div class="container">
            <h1 class="fleet-title"><?= $h1_1 ?></h1>
            <p class="fleet-subtitle"><?= $p_1 ?></p>
        </div>
    </header>

    <!-- Sección de Misión -->
    <section class="about-section mission-section">
        <div class="container">
            <div class="section-content">
                <div class="text-content">
                    <h2 class="section-title"><?= $h2_1 ?></h2>
                    <p class="section-description"><?= $p_2 ?></p>
                    <p class="section-description"><?= $p_3 ?></p>
                </div>
                <div class="image-container">
                    <div class="about-image mission-image">
                        <div class="image-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Visión -->
    <section class="about-section vision-section">
        <div class="container">
            <div class="section-content reverse">
                <div class="image-container">
                    <div class="about-image vision-image">
                        <div class="image-overlay"></div>
                    </div>
                </div>
                <div class="text-content">
                    <h2 class="section-title"><?= $h2_2 ?></h2>
                    <p class="section-description"><?= $p_4 ?></p>
                    <p class="section-description"><?= $p_5 ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Propósito -->
    <section class="about-section purpose-section">
        <div class="container">
            <div class="section-content">
                <div class="text-content">
                    <h2 class="section-title"><?= $h2_3 ?></h2>
                    <p class="section-description"><?= $p_6 ?></p>
                    <p class="section-description"><?= $p_7 ?></p>      
                </div>
                <div class="image-container">
                    <div class="about-image purpose-image">
                        <div class="image-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section values-section">
        <div class="container">
            <h2 class="section-title centered"><?= $h2_4 ?></h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3 class="value-title"><?= $h3_1 ?></h3>
                    <p class="value-description"><?= $p_8 ?></p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="value-title"><?= $h3_2 ?></h3>
                    <p class="value-description"><?= $p_9 ?></p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="value-title"><?= $h3_3 ?></h3>
                    <p class="value-description"><?= $p_11 ?></p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="value-title"><?= $h3_4 ?></h3>
                    <p class="value-description"><?= $p_12 ?></p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="value-title"><?= $h3_5 ?></h3>
                    <p class="value-description"><?= $p_13 ?></p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="value-title"><?= $h3_6 ?></h3>
                    <p class="value-description"><?= $p_14 ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Historia -->
    <section class="about-section history-section">
        <div class="container">
            <h2 class="section-title centered">Nuestra Historia</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3><?= $h3_7 ?></h3>
                        <h4><?= $h4_1 ?></h4>
                        <p><?= $p_15 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3><?= $h3_8 ?></h3>
                        <h4><?= $h4_2 ?></h4>
                        <p><?= $p_16 ?></p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3><?= $h3_9 ?></h3>
                        <h4><?= $h4_3 ?></h4>
                        <p><?= $p_17 ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de equipo 
    <section class="about-section team-section">
        <div class="container">
            <h2 class="section-title centered">Nuestro Equipo</h2>
            <p class="section-description centered">Contamos con profesionales apasionados y dedicados que trabajan juntos para alcanzar nuestra visión.</p>
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image"></div>
                    <h3>Ana Rodríguez</h3>
                    <p>CEO & Fundadora</p>
                </div>
                <div class="team-member">
                    <div class="member-image"></div>
                    <h3>Carlos Méndez</h3>
                    <p>Director de Operaciones</p>
                </div>
                <div class="team-member">
                    <div class="member-image"></div>
                    <h3>Elena Torres</h3>
                    <p>Directora de Innovación</p>
                </div>
                <div class="team-member">
                    <div class="member-image"></div>
                    <h3>Miguel Sánchez</h3>
                    <p>Director Financiero</p>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Sección de contacto -->
    <section class="about-section contact-section">
        <div class="container">
            <div class="contact-content">
                <h2 class="section-title"><?= $h2_5 ?></h2>
                <p class="section-description"><?= $p_18 ?></p>
                <a href="#" class="btn-primary"><span>Contáctanos</span></a>
            </div>
        </div>
    </section>
@endsection
