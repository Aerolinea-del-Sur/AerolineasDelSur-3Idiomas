@extends('a_EncabezadoFooter.princi')
@php
// Custom SEO for Agencia page
$seo = [
    'title' => __('services.agency.seo.title'),
    'description' => __('services.agency.seo.description'),
    'keywords' => 'tours aéreos cusco, sobrevuelo machu picchu, tour vinicunca, valle sagrado sobrevuelo, agencia tours cusco, tours tradicionales perú',
    'og_image' => asset('img/tours-aereos-cusco.jpg'),
    'canonical' => url(app()->getLocale() . '/agencia'),
];
@endphp

@section('content')
<?php
    $h1_1_1 = __('services.agency.visit_world');
    $h1_1_2 = __('services.agency.our_traditions');
    $p_1 = __('services.agency.explore_description');

        $h2_1 = __('services.agency.our_tours');
        $p_2 = __('services.agency.discover_description');

        $h2_2 = __('services.agency.magical_andes');
        $p_3 = __('services.agency.magical_andes_desc');

        $h2_3 = __('services.agency.cusco_treasures');
        $p_4 = __('services.agency.cusco_treasures_desc');

        $h2_4 = __('services.agency.maras_valley');
        $p_5 = __('services.agency.maras_valley_desc');

        $h2_5 = __('services.agency.seven_colors_mountain');
        $p_6 = __('services.agency.seven_colors_mountain_desc');

        $h2_6 = __('services.agency.vinicunca_elite');
        $p_7 = __('services.agency.vinicunca_elite_desc');

        $h2_7 = __('services.agency.machu_picchu');
        $p_8 = __('services.agency.machu_picchu_desc');

        // Contacto
        $h2_8 = __('services.agency.ready_adventure');
        $p_9 = __('services.agency.contact_us_desc');

        $h2_9 = __('services.agency.ready_adventure');
       $p_10 = __('services.agency.contact_us_heights');

                $h4_1 = __('services.agency.phone');
                $p_11 = '+51 932 475 995';

                $h4_2 = __('services.agency.email');
                $p_12 = 'contacto@aerolineadelsur.com.pe';

                $h4_3 = __('services.agency.location');
                $p_13 = __('services.agency.cusco_peru');        
?>

    <link rel="stylesheet" href="{{ asset('public/css/paginas/agencia/Agencia.css') }}">
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <!-- Video de fondo de Vimeo con audio -->
            <div class="bg-video">
                <video width="100%" height="100%" autoplay loop playsinline style="object-fit: cover;">
                    <source src="{{ asset('/public/video/portada-agencia.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-plane"></i>
                <span>{{ __('services.agency.traditional_tours') }}</span>
            </div>
            <h1 class="hero-title">
                <span class="title-line"><?= $h1_1_1 ?></span>
                <span class="title-line highlight"><?= $h1_1_2 ?></span>
            </h1>
            <p class="hero-description"><?= $p_1 ?></p>
            <div class="hero-actions">
                <a href="#tours" class="btn btn-primary">
                    <span>{{ __('services.agency.see_tours') }}</span>
                    <i class="fas fa-arrow-down"></i>
                </a>
                <a href="#contacto" class="btn btn-outline">
                    <i class="fas fa-phone"></i>
                    <span>{{ __('services.agency.reserve') }}</span>
                </a>
            </div>
        </div>
        
        <!-- Control de audio -->
        <div class="audio-control">
            <button id="audioToggle" class="audio-btn">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>
    </section>

    <!-- Tours Section -->
    <section id="tours" class="tours">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">{{ __('services.agency.traditional_tours') }}</div>
                <h2 class="section-title"><?= $h2_1 ?></h2>
                <p class="section-subtitle"><?= $p_2 ?></p>
            </div>
            <div class="tours-grid">
                
                <!-- Tour 02: Tesoros del Cusco -->
                <article class="tour-card" data-category="tradicional" itemscope itemtype="https://schema.org/TouristAttraction">
                    <div class="tour-image">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/90/The_Sacred_Valley%2C_Peru-2_%288445855270%29.jpg" 
                            alt="Valle Sagrado y Machu Picchu en Cusco" 
                            itemprop="image">
                        <div class="tour-overlay">
                            <div class="tour-badge tradicional" itemprop="additionalType">{{ __('services.agency.traditional') }}</div>
                        </div>
                    </div>
                    <div class="tour-content">
                        <h2 class="tour-title" itemprop="name"><?= $h2_3 ?></h2>
                        <p class="tour-description" itemprop="description"><?= $p_4 ?></p>
                        <div class="tour-details">
                            <div class="detail" itemprop="duration" content="PT3H">
                                <i class="fas fa-clock"></i>
                                <span>1 {{ __('services.agency.hours') }}</span>
                            </div>
                            <div class="detail" itemprop="audience" content="Grupo mediano">
                                <i class="fas fa-users"></i>
                                <span>{{ __('services.agency.up_to') }} 8 {{ __('services.agency.people') }}</span>
                            </div>
                            <div class="detail" itemprop="location" itemscope itemtype="https://schema.org/Place">
                                <i class="fas fa-map-marker-alt"></i>
                                <span itemprop="address">{{ __('services.agency.cusco_peru') }}</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-landmark"></i>
                                <span>{{ __('services.agency.archaeological_sites') }}</span>
                            </div>
                        </div>
                        <a href="/{{ app()->getLocale() }}/agencia/tesoros-cusco" class="tour-btn" itemprop="url" title="Reservar Tour Tesoros del Cusco">
                            <span>{{ __('services.agency.know_more') }}</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                
                <!-- Tour 04: Montaña de Siete Colores -->
                <article class="tour-card" data-category="tradicional" itemscope itemtype="https://schema.org/TouristAttraction">
                    <div class="tour-image">
                        <img src="https://images.pexels.com/photos/6921111/pexels-photo-6921111.jpeg" 
                            alt="Montaña de Siete Colores Vinicunca en Cusco" 
                            itemprop="image">
                        <div class="tour-overlay">
                            <div class="tour-badge tradicional" itemprop="additionalType">Tradicional</div>
                        </div>
                    </div>
                    <div class="tour-content">
                        <h2 class="tour-title" itemprop="name"><?= $h2_5 ?></h2>
                        <p class="tour-description" itemprop="description"><?= $p_6 ?></p>
                        <div class="tour-details">
                            <div class="detail" itemprop="duration" content="PT2H30M">
                                <i class="fas fa-clock"></i>
                                <span>1 horas</span>
                            </div>
                            <div class="detail" itemprop="audience" content="Grupo mediano">
                                <i class="fas fa-users"></i>
                                <span>Hasta 6 personas</span>
                            </div>
                            <div class="detail" itemprop="location" itemscope itemtype="https://schema.org/Place">
                                <i class="fas fa-map-marker-alt"></i>
                                <span itemprop="address">Cusco, Perú</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-mountain"></i>
                                <span>Naturaleza única</span>
                            </div>
                        </div>
                        <a href="/{{ app()->getLocale() }}/agencia/vinicunca" class="tour-btn" itemprop="url" title="Reservar Tour Montaña de Siete Colores">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                
                <!-- Tour 06: Machu Picchu -->
                <article class="tour-card" data-category="tradicional" itemscope itemtype="https://schema.org/TouristAttraction">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1526392060635-9d6019884377?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                            alt="Vista aérea de Machu Picchu, ciudadela inca" 
                            itemprop="image">
                        <div class="tour-overlay">
                            <div class="tour-badge tradicional" itemprop="additionalType">Tradicional</div>
                        </div>
                    </div>
                    <div class="tour-content">
                        <h2 class="tour-title" itemprop="name"><?= $h2_7 ?></h2>
                        <p class="tour-description" itemprop="description"><?= $p_8 ?></p>
                        <div class="tour-details">
                            <div class="detail" itemprop="duration" content="PT2H">
                                <i class="fas fa-clock"></i>
                                <span>1 horas</span>
                            </div>
                            <div class="detail" itemprop="audience" content="Grupo mediano">
                                <i class="fas fa-users"></i>
                                <span>Hasta 6 personas</span>
                            </div>
                            <div class="detail" itemprop="location" itemscope itemtype="https://schema.org/Place">
                                <i class="fas fa-map-marker-alt"></i>
                                <span itemprop="address">Cusco, Perú</span>
                            </div>
                            <div class="detail">
                                <i class="fas fa-history"></i>
                                <span>Patrimonio mundial</span>
                            </div>
                        </div>
                        <a href="/{{ app()->getLocale() }}/agencia/machu-picchu" class="tour-btn" itemprop="url" title="Reservar Tour Machu Picchu">
                            <span>Conoce más</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacto" class="contact">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">{{ __('services.agency.contact') }}</div>
                <h2 class="section-title"><?= $h2_8 ?></h2>
                <p class="section-subtitle"><?= $p_9 ?></p>
            </div>
            <div class="contact-content">
                <div class="contact-text">
                    <div class="section-badge">{{ __('services.agency.reserve_now') }}</div>
                    <h2 class="section-title"><?= $h2_9 ?></h2>
                    <p class="section-subtitle"><?= $p_10 ?></p>
                </div>
                <div class="contact-methods">
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-info">
                            <h3><?= $h4_1 ?></h3>
                            <p><?= $p_11 ?></p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info">
                            <h3><?= $h4_2 ?></h3>
                            <p><?= $p_12 ?></p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info">
                            <h3><?= $h4_3 ?></h3>
                            <p><?= $p_13 ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
    // Smooth scrolling for navigation links
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
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.querySelector('.bg-video video');
        const audioToggle = document.getElementById('audioToggle');
        
        if (video && audioToggle) {
            // Inicializar estado del icono basado en el estado del video
            updateAudioIcon();

            // Control de audio
            audioToggle.addEventListener('click', function() {
                video.muted = !video.muted;
                updateAudioIcon();
            });

            function updateAudioIcon() {
                if (video.muted) {
                    audioToggle.innerHTML = '<i class="fas fa-volume-mute"></i>';
                } else {
                    audioToggle.innerHTML = '<i class="fas fa-volume-up"></i>';
                }
            }
        }
    });
</script>
@endsection