@extends('a_EncabezadoFooter.princi')

@php
// Custom SEO for Helicopteros page
$seo = [
    'title' => 'Servicio de Helicóptero en Cusco y Perú | Aerolínea del Sur',
    'description' => 'Transporte en helicóptero para turismo, carga y acceso a zonas remotas en Perú. Sobrevuelos panorámicos y traslados ejecutivos desde Cusco.',
    'keywords' => 'helicóptero cusco, sobrevuelo valle sagrado, transporte helicóptero perú, tour helicóptero machu picchu, vuelos panorámicos cusco',
    'og_image' => asset('img/helicoptero-cusco.jpg'),
    'canonical' => url('/helicopteros'),
];
@endphp

@section('content')
<?php
    $h1_page = 'Servicio de Helicóptero en Perú';
    $breadcrumb = 'Inicio / Servicios / Helicóptero';
    $h2_form = 'Reserva de Helicóptero';
?>

<link rel="stylesheet" href="{{ asset('css/paginas/aeronaves/aeronaves.css') }}">

<header class="heli-header">
    <div class="heli-bg"></div>
    <div class="heli-dark"></div>
    <div class="heli-content">
        <div class="heli-badge">
            <i class="fas fa-helicopter"></i>
            <span><?= $breadcrumb ?></span>
        </div>
        <h1 class="heli-title"><?= $h1_page ?></h1>
        
        
        <form class="heli-form horizontal" id="servicioForm" method="post" action="{{ route('vuelos.send') }}">
        @csrf
            <input type="hidden" name="tipo_servicio" value="helicopteros">
            
            <div class="heli-form-head">
                <h2 class="heli-section-title"><?= $h2_form ?></h2>
                <p style="color: #ccc; font-size: 14px; margin-top: 8px;">Complete el formulario para solicitar información</p>
            </div>

            <div class="heli-form-personal">
                <div class="heli-field">
                    <input class="heli-input" type="text" id="nombres_apellidos" name="nombres_apellidos" placeholder="Nombres y Apellidos *" required>
                </div>
                <div class="heli-field">
                    <input class="heli-input" type="email" id="correo" name="correo" placeholder="Correo electrónico *" required>
                </div>
                <div class="heli-field">
                    <input class="heli-input" type="tel" id="telefono" name="telefono" placeholder="Teléfono *" required pattern="[0-9+\s-]{7,20}">
                </div>
            </div>
            
            <div class="heli-actions">
                <button type="button" class="heli-btn btn-whatsapp" onclick="enviarWhatsApp('helicopteros')">
                    <i class="fab fa-whatsapp"></i> Enviar por WhatsApp
                </button>
                <button type="button" class="heli-btn btn-outlook" onclick="enviarOutlook('helicopteros')">
                    <i class="far fa-envelope"></i> Enviar por Outlook
                </button>
                <button type="button" class="heli-btn btn-gmail" onclick="enviarGmail('helicopteros')">
                    <i class="far fa-envelope"></i> Enviar por Gmail
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



<section class="heli-fleet-section">
    <div class="heli-container">
        <h2 class="heli-section-title">Nuestras Aeronaves</h2>
        <div class="fleet-grid">
            <a href="/aeronaves/Mi8-mtv1" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/Mi8-mtv1.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 5 pax</p>
                            <p>Velocidad: 287 km/h</p>
                            <p>Autonomía: 650 km</p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name">MI 8 MTV 1</h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">Transporte</span>
                    </div>
                    <div class="view-details-btn">Ver más información</div>
                </div>
            </a>

            <a href="/aeronaves/Ecureuil-b3" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/Ecureuil-b3.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 5 pax</p>
                            <p>Velocidad: 287 km/h</p>
                            <p>Autonomía: 650 km</p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name">Ecureuil B3</h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">Transporte</span>
                    </div>
                    <div class="view-details-btn">Ver más información</div>
                </div>
            </a>

            <a href="/aeronaves/KingAirB200" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/Air-King-B200.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 8 pax</p>
                            <p>Velocidad: 870 km/h</p>
                            <p>Peso Max: 11,181 kg</p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name">King Air B200</h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">Transporte</span>
                    </div>
                    <div class="view-details-btn">Ver más información</div>
                </div>
            </a>

            <a href="/aeronaves/KingAirB350" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/AirKingB350.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 8 pax</p>
                            <p>Velocidad: 870 km/h</p>
                            <p>Peso Max: 11,181 kg</p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name">King Air B350</h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">Transporte</span>
                    </div>
                    <div class="view-details-btn">Ver más información</div>
                </div>
            </a>

            <a href="/aeronaves/Beechcraft1900D" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/Beechcraft1900D.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 8 pax</p>
                            <p>Velocidad: 870 km/h</p>
                            <p>Peso Max: 11,181 kg</p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name">Beechcraft 1900D</h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">Transporte</span>
                    </div>
                    <div class="view-details-btn">Ver más información</div>
                </div>
            </a>

            <a href="/aeronaves/HondaJet" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/HondaJet.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 6 pax</p>
                            <p>Velocidad: 722 km/h</p>
                            <p>Peso Max: 4,800 kg</p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name">Honda Jet</h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">Transporte</span>
                    </div>
                    <div class="view-details-btn">Ver más información</div>
                </div>
            </a>

            <a href="/aeronaves/Phenom100" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/Phenom100.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 7 pax</p>
                            <p>Velocidad: 839 km/h</p>
                            <p>Autonomía: 3,650 km</p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name">Jet Phenom 100</h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">Transporte</span>
                    </div>
                    <div class="view-details-btn">Ver más información</div>
                </div>
            </a>

            <a href="/aeronaves/GulfstreamG100" class="aircraft-card" style="text-decoration: none; color: inherit;">
                <div class="aircraft-image" style="background-image: url('{{ asset('public/img/aeronaves/aviones/Gulfstream-G100.webp') }}')">
                    <div class="aircraft-overlay">
                        <div class="aircraft-details">
                            <p>Capacidad: 14 pax</p>
                            <p>Velocidad: 935 km/h</p>
                            <p>Peso Max: 33,838kg</p>
                        </div>
                    </div>
                </div>
                <div class="aircraft-info">
                    <h3 class="aircraft-name">Jet Gulfstream G100</h3>
                    <div class="aircraft-types">
                        <span class="aircraft-type transport">Transporte</span>
                    </div>
                    <div class="view-details-btn">Ver más información</div>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="heli-blogs-section">
    <div class="heli-container">
        <h2 class="heli-section-title">Blog</h2>
        <div class="heli-articles-grid">
            <article class="article-card">
                <div class="article-image">
                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=600&h=400&fit=crop" alt="Consejos de viaje">
                    <div class="article-category">Consejos</div>
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date"><i class="fas fa-calendar"></i> 12 Enero 2024</span>
                        <span class="article-read-time"><i class="fas fa-clock"></i> 5 min</span>
                    </div>
                    <h3 class="article-title">10 consejos para viajar cómodo en vuelos largos</h3>
                    <p class="article-excerpt">Maximiza tu comodidad en vuelos de larga distancia con estos consejos probados por expertos.</p>
                    <a href="#" class="article-link">Leer más <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="article-card">
                <div class="article-image">
                    <img src="https://images.unsplash.com/photo-1556388158-158ea5ccacbd?w=600&h=400&fit=crop" alt="Nueva flota">
                    <div class="article-category">Noticias</div>
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date"><i class="fas fa-calendar"></i> 10 Enero 2024</span>
                        <span class="article-read-time"><i class="fas fa-clock"></i> 3 min</span>
                    </div>
                    <h3 class="article-title">Aerolíneas del Sur incorpora nuevos Boeing 787 Dreamliner</h3>
                    <p class="article-excerpt">Nuestra flota se moderniza con aeronaves de última generación para brindarte mayor comodidad.</p>
                    <a href="#" class="article-link">Leer más <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="article-card">
                <div class="article-image">
                    <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=600&h=400&fit=crop" alt="Experiencia de viaje">
                    <div class="article-category">Experiencias</div>
                </div>
                <div class="article-content">
                    <div class="article-meta">
                        <span class="article-date"><i class="fas fa-calendar"></i> 8 Enero 2024</span>
                        <span class="article-read-time"><i class="fas fa-clock"></i> 6 min</span>
                    </div>
                    <h3 class="article-title">Mi experiencia en Clase Ejecutiva: Lujo en las alturas</h3>
                    <p class="article-excerpt">Descubre cómo es volar en nuestra Clase Ejecutiva a través de la experiencia de nuestros pasajeros.</p>
                    <a href="#" class="article-link">Leer más <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
    </div>
</section>

<?php
    $h1_7 = 'Preguntas Frecuentes';
    $p_17 = 'Encuentra respuestas a las preguntas más comunes sobre nuestros servicios';
    $h3_8 = '¿Qué destinos cubren nuestros vuelos chárter?';
    $p_18 = 'Conectamos cada rincón del Perú, desde la costa hasta la Amazonía, y las principales capitales de Sudamérica. Diseñamos vuelos chárter a medida que se adaptan a tu agenda, garantizando acceso directo a destinos exclusivos de negocios o placer.';
    $h3_9 = '¿Cómo puedo hacer una reserva?';
    $p_19 = 'Puedes hacer tu reserva a través de nuestro sitio web, llamando a nuestro centro de atención al cliente o visitando una de nuestras oficinas. También puedes enviarnos un correo a contacto@aerolineadelsur.com.pe para obtener ayuda personalizada.';
    $h3_10 = '¿Cuál es la política de equipaje?';
    $p_20 = 'Aerolinea del Sur permite un máximo de 23 kg de equipaje por pasajero. Este estándar es esencial para mantener la operatividad y eficiencia de nuestros vuelos privados.';
    $h3_11 = '¿Qué medidas de seguridad aplica Aerolínea del Sur en sus operaciones?';
    $p_21 = 'Cumplimos con todos los estándares internacionales de seguridad aérea. Nuestras aeronaves reciben mantenimiento regular certificado, nuestros pilotos tienen entrenamiento continuo, y seguimos protocolos estrictos de seguridad en tierra y vuelo.';
    $h3_12 = '¿Ofrecen programas de viajero frecuente?';
    $p_22 = 'Sí, nuestro programa Cielos del Sur ofrece beneficios exclusivos como acumulación de millas, upgrades gratuitos, acceso a salas VIP, y prioridad en check-in. Únete gratis y comienza a disfrutar de privilegios desde tu primer vuelo';
?>

<section class="heli-faq-section faq-section">
    <div class="heli-container faq-container">
        <div class="faq-header">
            <h1><?= $h1_7 ?></h1>
            <p class="p"><?= $p_17 ?></p>
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
