@php
$seo = seo()
    ->title(__('services.flights.seo.title'))
    ->description(__('services.flights.seo.description'))
    ->keywords(['vuelos charter perú', 'vuelos privados cusco', 'alquiler avión privado perú', 'charter ejecutivo', 'vuelos negocios cusco'])
    ->image(asset('img/vuelos-privados-peru.jpg'))
    ->canonical(url(app()->getLocale() . '/vuelos'));
@endphp

@extends('a_EncabezadoFooter.princi')

@push('seo')
    {!! $seo !!}
@endpush

<!-- FAQ Schema for Rich Snippets -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "{{ __('services.flights.faq.q1') }}",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "{{ __('services.flights.faq.a1') }}"
            }
        },
        {
            "@type": "Question",
            "name": "{{ __('services.flights.faq.q2') }}",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "{{ __('services.flights.faq.a2') }}"
            }
        },
        {
            "@type": "Question",
            "name": "{{ __('services.flights.faq.q3') }}",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "{{ __('services.flights.faq.a3') }}"
            }
        },
        {
            "@type": "Question",
            "name": "{{ __('services.flights.faq.q4') }}",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "{{ __('services.flights.faq.a4') }}"
            }
        },
        {
            "@type": "Question",
            "name": "{{ __('services.flights.faq.q5') }}",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "{{ __('services.flights.faq.a5') }}"
            }
        }
    ]
}
</script>

<!-- Breadcrumb Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "{{ __('common.nav.home') }}",
            "item": "{{ url(app()->getLocale()) }}"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "{{ __('common.footer.services') }}",
            "item": "{{ url(app()->getLocale() . '/servicio') }}"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "{{ __('common.nav.flights') }}",
            "item": "{{ url(app()->getLocale() . '/vuelos') }}"
        }
    ]
}
</script>


@section('content')
<?php
    $h1_page = __('services.flights.title');
    $breadcrumb = __('services.flights.breadcrumb');
    $h2_form = __('services.flights.form_title');
?>


<link rel="stylesheet" href="{{ asset('css/paginas/aeronaves/aeronaves.css') }}">

<header class="heli-header">
    <div class="heli-bg"></div>
    <div class="heli-dark"></div>
    <div class="heli-content">
        <div class="heli-badge">
            <i class="fas fa-plane"></i>
            <span><?= $breadcrumb ?></span>
        </div>
        <h1 class="heli-title"><?= $h1_page ?></h1>
        
        <form class="heli-form horizontal" id="servicioForm" method="post" action="{{ route('vuelos.send') }}">
        @csrf
            <input type="hidden" name="tipo_servicio" value="vuelos">
            
            <div class="heli-form-head">
                <h2 class="heli-section-title"><?= $h2_form ?></h2>
                <p style="color: #ccc; font-size: 14px; margin-top: 8px;">{{ __('services.flights.form_subtitle') }}</p>
            </div>

            <div class="heli-form-personal">
                <div class="heli-field">
                    <input class="heli-input" type="text" id="nombres_apellidos" name="nombres_apellidos" placeholder="{{ __('services.form.name') }} *" required>
                </div>
                <div class="heli-field">
                    <input class="heli-input" type="email" id="correo" name="correo" placeholder="{{ __('services.form.email') }} *" required>
                </div>
                <div class="heli-field">
                    <input class="heli-input" type="tel" id="telefono" name="telefono" placeholder="{{ __('services.form.phone') }} *" required pattern="[0-9+\s-]{7,20}">
                </div>
            </div>
            
            <div class="heli-actions">
                <button type="button" class="heli-btn btn-whatsapp" onclick="enviarWhatsApp('vuelos')">
                    <i class="fab fa-whatsapp"></i> {{ __('services.form.send_whatsapp') }}
                </button>
                <button type="button" class="heli-btn btn-outlook" onclick="enviarOutlook('vuelos')">
                    <i class="far fa-envelope"></i> {{ __('services.form.send_outlook') }}
                </button>
                <button type="button" class="heli-btn btn-gmail" onclick="enviarGmail('vuelos')">
                    <i class="far fa-envelope"></i> {{ __('services.form.send_gmail') }}
                </button>
            </div>
        </form>
        
        <style>
            .heli-form.horizontal{padding:24px;border-radius:14px;background:rgba(18,18,18,0.7);gap:16px}
            .heli-form.horizontal .heli-form-personal{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px;margin-top:16px}
            .heli-form.horizontal .heli-actions{display:flex;justify-content:center;gap:12px;margin-top:20px}
            .heli-btn{padding:14px 28px;border:none;border-radius:8px;font-size:15px;font-weight:600;cursor:pointer;transition:all 0.3s ease;display:inline-flex;align-items:center;gap:8px}
            .btn-whatsapp{background:#25D366;color:#fff}
            .btn-whatsapp:hover{background:#20BA5A;transform:translateY(-2px)}
            .btn-outlook{background:#0078D4;color:#fff}
            .btn-outlook:hover{background:#106EBE;transform:translateY(-2px)}
            .btn-gmail{background:#EA4335;color:#fff}
            .btn-gmail:hover{background:#CC3828;transform:translateY(-2px)}
            .heli-input{width:100%;padding:12px 16px;border:1px solid rgba(212,175,55,0.3);border-radius:8px;background:rgba(0,0,0,0.3);color:#fff;font-size:14px}
            .heli-input:focus{outline:none;border-color:var(--accent);background:rgba(0,0,0,0.5)}
            .heli-input::placeholder{color:#888}
            @media (max-width:1024px){
                .heli-form.horizontal .heli-form-personal{grid-template-columns:repeat(2,minmax(0,1fr))}
            }
            @media (max-width:640px){
                .heli-form.horizontal .heli-form-personal{grid-template-columns:1fr}
                .heli-form.horizontal .heli-actions{flex-direction:column}
            }
        </style>
        
        <script>
            function enviarWhatsApp(tipoServicio) {
                const form = document.getElementById('servicioForm');
                const nombre = form.querySelector('[name="nombres_apellidos"]').value;
                const correo = form.querySelector('[name="correo"]').value;
                const telefono = form.querySelector('[name="telefono"]').value;
                
                if (!nombre || !correo || !telefono) {
                    alert('Por favor complete todos los campos');
                    return;
                }
                
                const servicios = {
                    'vuelos': 'Vuelos Privados',
                    'helicopteros': 'Helicópteros',
                    'aeromedico': 'Aeromédico',
                    'carga': 'Servicio de Carga'
                };
                
                const mensaje = `Hola! Solicito información sobre ${servicios[tipoServicio]}:\n\n` +
                    `👤 Nombre: ${nombre}\n` +
                    `📧 Correo: ${correo}\n` +
                    `📱 Teléfono: ${telefono}`;
                
                const url = `https://wa.me/51932475995?text=${encodeURIComponent(mensaje)}`;
                window.open(url, '_blank');
            }
            
            function enviarOutlook(tipoServicio) {
                const form = document.getElementById('servicioForm');
                const nombre = form.querySelector('[name="nombres_apellidos"]').value;
                const correo = form.querySelector('[name="correo"]').value;
                const telefono = form.querySelector('[name="telefono"]').value;
                
                if (!nombre || !correo || !telefono) {
                    alert('Por favor complete todos los campos');
                    return;
                }
                
                const servicios = {
                    'vuelos': 'Vuelos Privados',
                    'helicopteros': 'Helicópteros',
                    'aeromedico': 'Aeromédico',
                    'carga': 'Servicio de Carga'
                };
                
                const asunto = `Solicitud de información - ${servicios[tipoServicio]}`;
                const cuerpo = `Hola,\n\nSolicito información sobre ${servicios[tipoServicio]}.\n\n` +
                    `Mis datos de contacto son:\n\n` +
                    `Nombre: ${nombre}\n` +
                    `Correo: ${correo}\n` +
                    `Teléfono: ${telefono}\n\n` +
                    `Saludos cordiales.`;
                
                const mailto = `mailto:contacto@aerolineadelsur.com.pe?subject=${encodeURIComponent(asunto)}&body=${encodeURIComponent(cuerpo)}`;
                window.location.href = mailto;
            }
            
            function enviarGmail(tipoServicio) {
                const form = document.getElementById('servicioForm');
                const nombre = form.querySelector('[name="nombres_apellidos"]').value;
                const correo = form.querySelector('[name="correo"]').value;
                const telefono = form.querySelector('[name="telefono"]').value;
                
                if (!nombre || !correo || !telefono) {
                    alert('Por favor complete todos los campos');
                    return;
                }
                
                const servicios = {
                    'vuelos': 'Vuelos Privados',
                    'helicopteros': 'Helicópteros',
                    'aeromedico': 'Aeromédico',
                    'carga': 'Servicio de Carga'
                };
                
                const asunto = `Solicitud de información - ${servicios[tipoServicio]}`;
                const cuerpo = `Hola,\n\nSolicito información sobre ${servicios[tipoServicio]}.\n\n` +
                    `Mis datos de contacto son:\n\n` +
                    `Nombre: ${nombre}\n` +
                    `Correo: ${correo}\n` +
                    `Teléfono: ${telefono}\n\n` +
                    `Saludos cordiales.`;
                
                const mailto = `mailto:contacto@aerolineadelsur.com.pe?subject=${encodeURIComponent(asunto)}&body=${encodeURIComponent(cuerpo)}`;
                window.location.href = mailto;
            }
        </script>
    </div>
</header>

<!-- Alcance del Servicioijo -->
<section class="heli-fleet-section" style="padding-top:40px;">
    <div class="heli-container">
        <h2 class="heli-section-title" style="text-align: center;">{{ __('services.flights.scope_title') }}</h2>
        <div style="max-width:900px; margin:0 auto; text-align:center; margin-bottom:30px;">
            <p style="font-size:18px; color:#ccc; line-height:1.8;">
                {{ __('services.flights.scope_desc') }}
            </p>
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:20px; margin-top:30px;">
                <div style="background:rgba(212,175,55,0.1); padding:20px; border-radius:8px; border:1px solid rgba(212,175,55,0.3);">
                    <h3 style="color:#D4AF37; margin-bottom:10px; font-size:20px; font-weight:600;">{{ __('services.flights.scope_national') }}</h3>
                    <p style="color:#ccc; font-size:15px;">{{ __('services.flights.scope_national_desc') }}</p>
                </div>
                <div style="background:rgba(212,175,55,0.1); padding:20px; border-radius:8px; border:1px solid rgba(212,175,55,0.3);">
                    <h3 style="color:#D4AF37; margin-bottom:10px; font-size:20px; font-weight:600;">{{ __('services.flights.scope_international') }}</h3>
                    <p style="color:#ccc; font-size:15px;">{{ __('services.flights.scope_international_desc') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="heli-fleet-section">
    <div class="heli-container">
        <h2 class="heli-section-title">{{ __('services.flights.fleet_title') }}</h2>
        
        <?php
        $aeronaves = [
            [
                'name' => 'King Air B200',
                'url' => url(app()->getLocale() . '/aeronaves/KingAirB200'),
                'img' => 'Air-King-B200.webp',
                'capacidad' => '8 pax',
                'velocidad' => '870 km/h',
                'peso' => '11,181 kg'
            ],
            [
                'name' => 'King Air B350',
                'url' => url(app()->getLocale() . '/aeronaves/KingAirB350'),
                'img' => 'AirKingB350.webp',
                'capacidad' => '8 pax',
                'velocidad' => '870 km/h',
                'peso' => '11,181 kg'
            ],
            [
                'name' => 'Beechcraft 1900D',
                'url' => url(app()->getLocale() . '/aeronaves/Beechcraft1900D'),
                'img' => 'Beechcraft1900D.webp',
                'capacidad' => '19 pax',
                'velocidad' => '870 km/h',
                'peso' => '17,120 kg'
            ],
            [
                'name' => 'Honda Jet',
                'url' => url(app()->getLocale() . '/aeronaves/HondaJet'),
                'img' => 'HondaJet.webp',
                'capacidad' => '6 pax',
                'velocidad' => '722 km/h',
                'peso' => '4,800 kg'
            ],
            [
                'name' => 'Jet Phenom 100',
                'url' => url(app()->getLocale() . '/aeronaves/Phenom100'),
                'img' => 'Phenom100.webp',
                'capacidad' => '7 pax',
                'velocidad' => '839 km/h',
                'peso' => '4,750 kg'
            ],
            [
                'name' => 'Jet Gulfstream G100',
                'url' => url(app()->getLocale() . '/aeronaves/GulfstreamG100'),
                'img' => 'Gulfstream-G100.webp',
                'capacidad' => '9 pax',
                'velocidad' => '870 km/h',
                'peso' => '11,000 kg'
            ],
            // Nuevas aeronaves
            [
                'name' => 'Jet Gulfstream GIV',
                'url' => url(app()->getLocale() . '/aeronaves/GulfstreamGIV'),
                'img' => 'GulfstreamGiv.webp',
                'capacidad' => '14 pax',
                'velocidad' => '935 km/h',
                'peso' => '33,000 kg'
            ],
            [
                'name' => 'Jet Phenom 300',
                'url' => url(app()->getLocale() . '/aeronaves/Phenom300'),
                'img' => 'Phenom300.webp',
                'capacidad' => '8 pax',
                'velocidad' => '839 km/h',
                'peso' => '8,000 kg'
            ],
            [
                'name' => 'Jet Challenger 300',
                'url' => url(app()->getLocale() . '/aeronaves/Challenger300'),
                'img' => 'Challenger300.webp',
                'capacidad' => '9 pax',
                'velocidad' => '870 km/h',
                'peso' => '17,000 kg'
            ],
            [
                'name' => 'Jet Challenger 350',
                'url' => url(app()->getLocale() . '/aeronaves/Challenger350'),
                'img' => 'Challenger350.webp',
                'capacidad' => '9 pax',
                'velocidad' => '870 km/h',
                'peso' => '18,000 kg'
            ],
            [
                'name' => 'Jet Challenger 601',
                'url' => url(app()->getLocale() . '/aeronaves/Challenger601'),
                'img' => 'Challenger601.webp',
                'capacidad' => '12 pax',
                'velocidad' => '850 km/h',
                'peso' => '19,000 kg'
            ],
            [
                'name' => 'Jet Challenger 604',
                'url' => url(app()->getLocale() . '/aeronaves/Challenger604'),
                'img' => 'Challenger604.webp',
                'capacidad' => '12 pax',
                'velocidad' => '870 km/h',
                'peso' => '21,000 kg'
            ],
            [
                'name' => 'Jet Challenger 605',
                'url' => url(app()->getLocale() . '/aeronaves/Challenger605'),
                'img' => 'Challenger605.webp',
                'capacidad' => '12 pax',
                'velocidad' => '870 km/h',
                'peso' => '21,000 kg'
            ],
            [
                'name' => 'Jet Challenger 650',
                'url' => url(app()->getLocale() . '/aeronaves/Challenger650'),
                'img' => 'Challenger650.webp',
                'capacidad' => '12 pax',
                'velocidad' => '870 km/h',
                'peso' => '21,000 kg'
            ],
            [
                'name' => 'Jet Challenger 850',
                'url' => url(app()->getLocale() . '/aeronaves/Challenger850'),
                'img' => 'Challenger850.webp',
                'capacidad' => '14 pax',
                'velocidad' => '850 km/h',
                'peso' => '24,000 kg'
            ],
            [
                'name' => 'Jet Citation 550 Bravo',
                'url' => url(app()->getLocale() . '/aeronaves/Citation550Bravo'),
                'img' => 'Citation550-Bravo.webp',
                'capacidad' => '7 pax',
                'velocidad' => '740 km/h',
                'peso' => '6,000 kg'
            ],
            [
                'name' => 'Jet Citation Cj4',
                'url' => url(app()->getLocale() . '/aeronaves/CitationCj4'),
                'img' => 'CitationCj4.webp',
                'capacidad' => '8 pax',
                'velocidad' => '835 km/h',
                'peso' => '7,000 kg'
            ],
            [
                'name' => 'Jet Citation Encore',
                'url' => url(app()->getLocale() . '/aeronaves/CitationEncore'),
                'img' => 'CitationEncore.webp',
                'capacidad' => '7 pax',
                'velocidad' => '790 km/h',
                'peso' => '7,000 kg'
            ],
            [
                'name' => 'Jet Citation XLS',
                'url' => url(app()->getLocale() . '/aeronaves/CitationXLS'),
                'img' => 'CitationXLS.webp',
                'capacidad' => '9 pax',
                'velocidad' => '800 km/h',
                'peso' => '9,000 kg'
            ],
            [
                'name' => 'Jet Citation HemisPhere',
                'url' => url(app()->getLocale() . '/aeronaves/CitationHemisPhere'),
                'img' => 'CitationHemisPhere.webp',
                'capacidad' => '12 pax',
                'velocidad' => '900 km/h',
                'peso' => '15,000 kg'
            ],
            [
                'name' => 'Jet Citation Latitude',
                'url' => url(app()->getLocale() . '/aeronaves/CitationLatitude'),
                'img' => 'CitationLatitude.webp',
                'capacidad' => '9 pax',
                'velocidad' => '826 km/h',
                'peso' => '13,000 kg'
            ],
        ];
        ?>

        <div class="fleet-grid" id="fleetGrid">
            <?php foreach($aeronaves as $avion): ?>
            <a href="<?= $avion['url'] ?>" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/' . $avion['img']) }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>{{ __('services.capacity') }}: <?= $avion['capacidad'] ?></p>
                            <p>{{ __('services.speed') }}: <?= $avion['velocidad'] ?></p>
                            <p>{{ __('services.weight') }}: <?= $avion['peso'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name"><?= $avion['name'] ?></h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">{{ __('services.transport') }}</span>
                    </div>
                    <div class="view-details-btn">{{ __('services.view_more') }}</div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        
        <div class="pagination-container" style="margin-top: 40px; display: flex; justify-content: center; gap: 10px;">
            <!-- Paginación se generará con JS -->
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const itemsPerPage = 8;
    const grid = document.getElementById('fleetGrid');
    const cards = grid.querySelectorAll('.aircraft-card');
    const paginationContainer = document.querySelector('.pagination-container');
    const totalPages = Math.ceil(cards.length / itemsPerPage);
    
    // Función para mostrar la página específica
    function showPage(page) {
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        
        cards.forEach((card, index) => {
            if (index >= start && index < end) {
                card.style.display = 'flex'; // Usar flex para mantener el estilo
                // Pequeña animación de entrada
                card.style.opacity = '0';
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transition = 'opacity 0.5s ease';
                }, 50);
            } else {
                card.style.display = 'none';
            }
        });
        
        updatePaginationButtons(page);
    }
    
    // Generar botones de paginación
    function createPagination() {
        paginationContainer.innerHTML = '';
        
        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement('button');
            btn.innerText = i;
            btn.classList.add('pagination-btn');
            btn.style.cssText = `
                padding: 10px 15px;
                border: 1px solid #D4AF37;
                background: rgba(0,0,0,0.5);
                color: #fff;
                cursor: pointer;
                border-radius: 5px;
                font-weight: bold;
                transition: all 0.3s ease;
            `;
            
            btn.addEventListener('click', () => showPage(i));
            paginationContainer.appendChild(btn);
        }
    }
    
    function updatePaginationButtons(activePage) {
        const buttons = paginationContainer.querySelectorAll('button');
        buttons.forEach((btn, index) => {
            if (index + 1 === activePage) {
                btn.style.background = '#D4AF37';
                btn.style.color = '#000';
            } else {
                btn.style.background = 'rgba(0,0,0,0.5)';
                btn.style.color = '#fff';
            }
        });
    }
    
    // Inicializar
    if (cards.length > 0) {
        createPagination();
        showPage(1);
    }
});
</script>

<section class="heli-blogs-section">
    <div class="heli-container">
        <h2 class="heli-section-title" style="text-align:center; font-size:2.5rem; margin-bottom:40px;">{{ __('services.flights.blog_title') }}</h2>
        <div class="heli-articles-grid">
            <article class="article-card">
                <div class="article-image">
                    <img src="{{ asset('img/blog/aventura-cusco.png') }}" alt="Aventura en Cusco">
                    <div class="article-category">Consejos</div>
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date"><i class="fas fa-calendar"></i> {{ __('blog.date_published') }}</span>
                        <span class="article-read-time"><i class="fas fa-clock"></i> 5 min</span>
                    </div>
                    <h3 class="article-title">{{ __('blog.adventure_cusco.title') }}</h3>
                    <p class="article-excerpt">{{ __('blog.adventure_cusco.excerpt') }}</p>
                    <a href="{{ url(app()->getLocale() . '/blog/Aventura-Cusco') }}" class="article-link">{{ __('common.read_more') }} <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="article-card">
                <div class="article-image">
                    <img src="{{ asset('img/blog/vuelos-peru.png') }}" alt="Vuelos en Perú">
                    <div class="article-category">Consejos</div>
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date"><i class="fas fa-calendar"></i> {{ __('blog.date_published') }}</span>
                        <span class="article-read-time"><i class="fas fa-clock"></i> 6 min</span>
                    </div>
                    <h3 class="article-title">{{ __('blog.flights_peru.title') }}</h3>
                    <p class="article-excerpt">{{ __('blog.flights_peru.excerpt') }}</p>
                    <a href="{{ url(app()->getLocale() . '/blog/Vuelos-Peru') }}" class="article-link">{{ __('common.read_more') }} <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="article-card">
                <div class="article-image">
                    <img src="{{ asset('img/blog/machu-picchu.png') }}" alt="Machu Picchu">
                    <div class="article-category">Destinos</div>
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date"><i class="fas fa-calendar"></i> {{ __('blog.date_published') }}</span>
                        <span class="article-read-time"><i class="fas fa-clock"></i> 7 min</span>
                    </div>
                    <h3 class="article-title">{{ __('blog.machu_picchu.title') }}</h3>
                    <p class="article-excerpt">{{ __('blog.machu_picchu.excerpt') }}</p>
                    <a href="{{ url(app()->getLocale() . '/blog/Machu-Picchu-Peru') }}" class="article-link">{{ __('common.read_more') }} <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="article-card">
                <div class="article-image">
                    <img src="{{ asset('img/blog/experiencias-viaje.png') }}" alt="Experiencias de Viaje">
                    <div class="article-category">Experiencias</div>
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date"><i class="fas fa-calendar"></i> {{ __('blog.date_published') }}</span>
                        <span class="article-read-time"><i class="fas fa-clock"></i> 8 min</span>
                    </div>
                    <h3 class="article-title">{{ __('blog.travel_experiences.title') }}</h3>
                    <p class="article-excerpt">{{ __('blog.travel_experiences.excerpt') }}</p>
                    <a href="{{ url(app()->getLocale() . '/blog/Experiencias-de-Viaje') }}" class="article-link">{{ __('common.read_more') }} <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
    </div>
</section>

<?php
    $h1_7 = __('services.flights.faq.title');
    $p_17 = __('services.flights.faq.subtitle');
    $h3_8 = __('services.flights.faq.q1');
    $p_18 = __('services.flights.faq.a1');
    $h3_9 = __('services.flights.faq.q2');
    $p_19 = __('services.flights.faq.a2');
    $h3_10 = __('services.flights.faq.q3');
    $p_20 = __('services.flights.faq.a3');
    $h3_11 = __('services.flights.faq.q4');
    $p_21 = __('services.flights.faq.a4');
    $h3_12 = __('services.flights.faq.q5');
    $p_22 = __('services.flights.faq.a5');
?>

<section class="heli-faq-section faq-section">
    <div class="heli-container faq-container">
        <div class="faq-header" style="text-align:center; margin-bottom:50px;">
            <h2 style="font-size:32px; font-weight:700; margin-bottom:20px; color:#fff;"><?= $h1_7 ?></h2>
            <p class="p" style="font-size:18px; color:#ccc; max-width:800px; margin:0 auto; line-height:1.6;"><?= $p_17 ?></p>
        </div>

        <div class="faq-grid">
            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq1">
                    <span class="faq-text"><?= $h3_8 ?></span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer" id="faq1">
                    <p class="p"><?= $p_18 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq2">
                    <span class="faq-text"><?= $h3_9 ?></span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer" id="faq2">
                    <p class="p"><?= $p_19 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq3">
                    <span class="faq-text"><?= $h3_10 ?></span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer" id="faq3">
                    <p class="p"><?= $p_20 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq4">
                    <span class="faq-text"><?= $h3_11 ?></span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer" id="faq4">
                    <p class="p"><?= $p_21 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq5">
                    <span class="faq-text"><?= $h3_12 ?></span>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer" id="faq5">
                    <p class="p"><?= $p_22 ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', function() {
            const isActive = item.classList.contains('active');
            faqItems.forEach(other => { if (other !== item) other.classList.remove('active'); });
            if (isActive) item.classList.remove('active'); else item.classList.add('active');
        });
    });

    const forms = document.querySelectorAll('.heli-form');
    forms.forEach(form => {
        const formSection = form.closest('.heli-form-section');
        const idaVuelta = form.querySelector('input[type="radio"][value="ida_vuelta"]');
        const soloIda = form.querySelector('input[type="radio"][value="solo_ida"]');
        
        const retornoField = form.querySelector('.js-retorno-field');
        const showComments = form.querySelector('.js-show-comments');
        const comentariosField = form.querySelector('.js-comentarios-field');
        const fechaRetornoInput = form.querySelector('input[name="fecha_retorno"]');
        const comentariosInput = form.querySelector('.js-comentarios');

        function updateRetorno() {
            if (!idaVuelta) return;
            const show = idaVuelta.checked;
            if (retornoField) retornoField.style.display = show ? '' : 'none';
            if (fechaRetornoInput) fechaRetornoInput.required = show;
        }

        function updateComments() {
            const show = showComments && showComments.checked;
            if (comentariosField) comentariosField.style.display = show ? '' : 'none';
            if (comentariosInput) comentariosInput.required = show;
        }

        function expand() {
            if (form.classList.contains('collapsed')) {
                form.classList.remove('collapsed');
                form.classList.add('expanded');
                if (formSection) formSection.classList.add('heli-blur');
            }
        }

        updateRetorno();
        updateComments();

        if (idaVuelta) idaVuelta.addEventListener('change', updateRetorno);
        if (soloIda) soloIda.addEventListener('change', updateRetorno);
        if (showComments) showComments.addEventListener('change', updateComments);

        const triggers = form.querySelectorAll('.heli-form-top .heli-input, .heli-form-top .heli-radio input');
        triggers.forEach(el => {
            el.addEventListener('focus', expand);
            el.addEventListener('change', expand);
            el.addEventListener('click', expand);
        });

        const passengerInput = form.querySelector('.js-passenger-input');
        const passengerDropdown = form.querySelector('.js-passenger-dropdown');
        const displayEl = form.querySelector('.js-passenger-display');
        const hiddenTotal = form.querySelector('.js-pasajeros');
        const hiddenAdultos = form.querySelector('.js-adultos');
        const hiddenJovenes = form.querySelector('.js-jovenes');
        const confirmBtn = form.querySelector('.confirm-passengers');
        
        const maxTotal = 16;

        function updateDisplay() {
            if (!hiddenAdultos || !hiddenJovenes || !displayEl) return;
            const adultos = parseInt(hiddenAdultos.value, 10) || 0;
            const jovenes = parseInt(hiddenJovenes.value, 10) || 0;
            const total = adultos + jovenes;
            if (hiddenTotal) hiddenTotal.value = total;
            displayEl.textContent = total + (total === 1 ? ' pasajero' : ' pasajeros');
        }

        function setCount(type, delta) {
            const currentEl = passengerDropdown.querySelector('.count[data-type="'+type+'"]');
            if (!currentEl) return;
            
            let current = parseInt(currentEl.textContent, 10);
            let adultos = parseInt(hiddenAdultos.value, 10) || 0;
            let jovenes = parseInt(hiddenJovenes.value, 10) || 0;
            const totalBefore = adultos + jovenes;

            if (delta > 0 && totalBefore >= maxTotal) return;

            current += delta;
            if (type === 'adultos') { if (current < 1) current = 1; }
            else { if (current < 0) current = 0; }

            currentEl.textContent = current;
            if (type === 'adultos') hiddenAdultos.value = current;
            if (type === 'jovenes') hiddenJovenes.value = current;
            updateDisplay();
        }

        if (passengerInput) {
            passengerInput.addEventListener('click', function(){
                if (passengerDropdown) passengerDropdown.style.display = 'block';
                expand();
            });
        }

        if (passengerDropdown) {
            passengerDropdown.addEventListener('click', function(e){
                const minus = e.target.closest('.btn-minus');
                const plus = e.target.closest('.btn-plus');
                if (minus) setCount(minus.dataset.type, -1);
                if (plus) setCount(plus.dataset.type, 1);
            });
        }

        if (confirmBtn) {
            confirmBtn.addEventListener('click', function(){
                if (passengerDropdown) passengerDropdown.style.display = 'none';
            });
        }

        document.addEventListener('click', function(e){
            if (passengerDropdown && passengerInput) {
                if (!passengerDropdown.contains(e.target) && !passengerInput.contains(e.target)) {
                    passengerDropdown.style.display = 'none';
                }
            }
            if (!form.contains(e.target)) {
                form.classList.remove('expanded');
                form.classList.add('collapsed');
                if (formSection) formSection.classList.remove('heli-blur');
            }
        });
        
        updateDisplay();
    });
});
</script>

@endsection
