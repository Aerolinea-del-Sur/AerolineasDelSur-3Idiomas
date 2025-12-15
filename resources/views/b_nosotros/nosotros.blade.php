@extends('a_Enc abezadoFooter.princi')

@php
// Custom SEO for Nosotros page
$seo = [
    'title' => __('about.seo.title'),
    'description' => __('about.seo.description'),
    'keywords' => 'aerolínea peruana, aviación cusco, empresa aérea perú, vuelos seguros perú, historia aerolínea del sur',
    'og_image' => asset('img/nosotros-aerolinea-sur.jpg'),
    'canonical' => url(app()->getLocale() . '/nosotros'),
];
@endphp

@section('content')
    <?php
        $h1_1 = __('about.hero.title');
        $p_1 = __('about.hero.subtitle');

        $h2_1 = __('about.mission.title');
        $p_2 = __('about.mission.content1');
        $p_3 = __('about.mission.content2');

            $h2_2 = __('about.vision.title');
            $p_4 = __('about.vision.content1');
            $p_5 = __('about.vision.content2');

            $h2_3 = __('about.purpose.title');
            $p_6 = __('about.purpose.content1');
            $p_7 = __('about.purpose.content2');

            $h2_4 = __('about.values.title');

                $h3_1 = __('about.values.excellence');
                $p_8 = __('about.values.excellence_desc');

                $h3_2 = __('about.values.integrity');
                $p_9 = __('about.values.integrity_desc');

                $h3_3 = __('about.values.safety');
                $p_11 = __('about.values.safety_desc');

                $h3_4 = __('about.values.innovation');
                $p_12 = __('about.values.innovation_desc');

                $h3_5 = __('about.values.passion');
                $p_13 = __('about.values.passion_desc');

                $h3_6 = __('about.values.commitment');
                $p_14 = __('about.values.commitment_desc');


                $h3_7 = '2024';
                    $h4_1 = __('about.history.2024_title');
                    $p_15 = __('about.history.2024_desc');

                $h3_8 = '2025';
                    $h4_2 = __('about.history.2025_title');
                    $p_16 = __('about.history.2025_desc');
                
                $h3_9 = __('about.history.today');
                    $h4_3 = __('about.history.today_title');
                    $p_17 = __('about.history.today_desc');

            $h2_5 = __('about.cta.title');
            $p_18 = __('about.cta.subtitle');
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
