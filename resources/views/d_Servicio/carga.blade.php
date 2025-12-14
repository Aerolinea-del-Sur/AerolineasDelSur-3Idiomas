@extends('a_EncabezadoFooter.princi')

@php
// Custom SEO for Carga page
$seo = [
    'title' => 'Transporte Aéreo de Carga en Perú | Envíos Urgentes Certificados',
    'description' => 'Carga aérea en Perú: helicóptero para carga externa gasiferías y transporte médico. Mi-8 MTV1 y Antonov AN-32B para carga interna/externa perecible, médica y valorada.',
    'keywords' => 'carga aérea perú, transporte urgente aéreo, envío helicóptero, carga pesada perú, logística aérea cusco',
    'og_image' => asset('img/carga-aerea-peru.jpg'),
    'canonical' => url('/carga'),
];
@endphp

@section('content')
<?php
    $h1_page = 'Transporte Aéreo de Carga Especializada';
    $breadcrumb = 'Inicio / Servicios / Carga Aérea';
    $h2_form = 'Reserva de aeronave';
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
        
        <style>
            /* Uniformidad de colores dorados en toda la página */
            :root { 
                --gold-primary: #D4AF37; 
                --gold-hover: #C5A028;
                --gold-light: rgba(212,175,55,0.15);
            }
            
            /* Mejorar cards de servicios */
            .cargo-card {
                border: 2px solid rgba(212,175,55,0.25) !important;
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
            }
            .cargo-card:hover {
                border-color: var(--gold-primary) !important;
                box-shadow: 0 20px 40px rgba(212,175,55,0.15), 0 0 0 1px var(--gold-primary) !important;
                transform: translateY(-10px) !important;
            }
            
            /* Mejorar variants */
            .cargo-variant {
                border: 1px solid rgba(212,175,55,0.3) !important;
                backdrop-filter: blur(10px);
            }
            .cargo-variant:hover {
                border-color: var(--gold-primary) !important;
                box-shadow: 0 4px 12px rgba(212,175,55,0.2);
            }
            
            /* Chips uniformes */
            .chip {
                background: rgba(212,175,55,0.18) !important;
                border: 1px solid rgba(212,175,55,0.35) !important;
                transition: all 0.25s ease !important;
            }
            .chip:hover {
                background: rgba(212,175,55,0.3) !important;
                border-color: var(--gold-primary) !important;
                transform: scale(1.05);
            }
            
            /* Títulos dorados consistentes */
            .cargo-title {
                color: var(--gold-primary) !important;
                text-shadow: 0 2px 10px rgba(212,175,55,0.3);
            }
            .cargo-variant h4 {
                color: var(--gold-primary) !important;
            }
            
            /* Hover en tipos de carga */
            div[style*="background:rgba(212,175,55,0.05)"] {
                transition: all 0.3s ease;
                cursor: pointer;
            }
            div[style*="background:rgba(212,175,55,0.05)"]:hover {
                background: rgba(212,175,55,0.12) !important;
                border-color: var(--gold-primary) !important;
                transform: translateY(-4px);
                box-shadow: 0 6px 16px rgba(212,175,55,0.15);
            }
            
            /* Aeronaves cards hover */
            .aircraft-card {
                transition: all 0.3s ease !important;
            }
            .aircraft-card:hover {
                transform: translateY(-6px) !important;
                box-shadow: 0 12px 24px rgba(212,175,55,0.2) !important;
            }
            
            /* Estilos para Blog */
            .article-card {
                border: 2px solid rgba(212,175,55,0.2) !important;
                transition: all 0.4s ease !important;
            }
            .article-card:hover {
                border-color: var(--gold-primary) !important;
                transform: translateY(-8px) !important;
                box-shadow: 0 16px 32px rgba(212,175,55,0.2) !important;
            }
            .article-title {
                color: var(--gold-primary) !important;
            }
            .article-link {
                color: var(--gold-primary) !important;
                transition: all 0.3s ease;
            }
            .article-link:hover {
                color: var(--gold-hover) !important;
                transform: translateX(4px);
            }
            .article-meta span {
                color: rgba(212,175,55,0.8) !important;
            }
            
            /* Estilos para FAQ */
            .faq-item {
                border: 2px solid rgba(212,175,55,0.25) !important;
                transition: all 0.3s ease !important;
                background: rgba(0,0,0,0.3) !important;
            }
            .faq-item:hover {
                border-color: rgba(212,175,55,0.5) !important;
                background: rgba(0,0,0,0.4) !important;
            }
            .faq-item.active {
                border-color: var(--gold-primary) !important;
                background: rgba(212,175,55,0.08) !important;
                box-shadow: 0 4px 16px rgba(212,175,55,0.15) !important;
            }
            .faq-question {
                color: #fff !important;
                transition: all 0.3s ease;
            }
            .faq-item.active .faq-question {
                color: var(--gold-primary) !important;
            }
            .faq-icon {
                color: var(--gold-primary) !important;
                background: rgba(212,175,55,0.15) !important;
                border: 1px solid rgba(212,175,55,0.3) !important;
                transition: all 0.3s ease;
            }
            .faq-item.active .faq-icon {
                background: var(--gold-primary) !important;
                color: #000 !important;
                transform: rotate(45deg);
            }
            .faq-answer {
                border-top: 1px solid rgba(212,175,55,0.2) !important;
            }
            .faq-header h1 {
                color: var(--gold-primary) !important;
            }
        </style>

        <form class="heli-form horizontal" id="servicioForm" method="post" action="{{ route('vuelos.send') }}">
        @csrf
            <input type="hidden" name="tipo_servicio" value="carga">
            
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
                <button type="button" class="heli-btn btn-whatsapp" onclick="enviarWhatsApp('carga')">
                    <i class="fab fa-whatsapp"></i> Enviar por WhatsApp
                </button>
                <button type="button" class="heli-btn btn-outlook" onclick="enviarOutlook('carga')">
                    <i class="far fa-envelope"></i> Enviar por Outlook
                </button>
                <button type="button" class="heli-btn btn-gmail" onclick="enviarGmail('carga')">
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



<style>
    .cargo-section { padding: 60px 0; background: #0f0f0f; }
    .cargo-container { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 20px; }
    .cargo-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
    .cargo-card { position: relative; border-radius: 16px; overflow: hidden; min-height: 380px; color: #fff; }
    .cargo-card .bg { position: absolute; inset: 0; background-size: cover; background-position: center; filter: brightness(0.65) contrast(1.05); }
    .cargo-card .overlay { position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0,0,0,0.35), rgba(0,0,0,0.65)); }
    .cargo-card .content { position: relative; z-index: 2; padding: 28px; display: flex; flex-direction: column; gap: 16px; }
    .cargo-title { font-size: 26px; font-weight: 800; color: var(--accent); text-transform: uppercase; letter-spacing: .06em; }
    .cargo-desc { font-size: 15px; line-height: 1.6; color: var(--pearl); }
    .cargo-variants { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; }
    .cargo-variant { background: rgba(255,255,255,0.06); border: 1px solid rgba(212,175,55,0.35); border-radius: 12px; padding: 12px 14px; }
    .cargo-variant h4 { margin: 0 0 6px; font-size: 14px; color: var(--accent); }
    .cargo-variant p { margin: 0; font-size: 13px; color: #ddd; }
    .cargo-meta { display: flex; gap: 10px; flex-wrap: wrap; margin-top: 6px; }
    .chip { font-size: 12px; background: rgba(201,162,39,0.12); color: var(--accent); border: 1px solid rgba(201,162,39,0.35); padding: 6px 10px; border-radius: 999px; }
    @media (max-width: 992px) { .cargo-grid { grid-template-columns: 1fr; } .cargo-card { min-height: 320px; } }
</style>

<section class="cargo-section">
    <div class="cargo-container">
        <h2 class="heli-section-title">Servicios de Carga Especializada</h2>
        <p class="cargo-desc" style="margin-bottom: 30px; text-align:center; max-width:900px; margin-left:auto; margin-right:auto;">
            Operamos <strong style="color:#D4AF37;">helicóptero para carga externa en gasiferías</strong> y transporte médico a lugares remotos. 
            Nuestra flota especializada maneja carga interna y externa en múltiples categorías.
        </p>
        
        <!-- Aeronaves Especializadas -->
        <div style="background:linear-gradient(135deg, rgba(212,175,55,0.1), rgba(0,0,0,0.2)); padding:25px; border-radius:12px; margin-bottom:40px; border:1px solid rgba(212,175,55,0.3);">
            <h3 style="color:#D4AF37; text-align:center; margin-bottom:20px; font-size:22px;">🚁 Aeronaves para Carga Pesada</h3>
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
                <div style="background:rgba(0,0,0,0.4); padding:20px; border-radius:8px; border:1px solid rgba(212,175,55,0.2);">
                    <h4 style="color:#D4AF37; margin-bottom:10px; font-size:18px;">Mi-8 MTV1</h4>
                    <p style="color:#ccc; font-size:14px; line-height:1.6;">Helicóptero de transporte pesado ideal para carga externa e interna en zonas de difícil acceso</p>
                    <div style="margin-top:15px; display:flex; gap:8px; flex-wrap:wrap;">
                        <span style="background:rgba(212,175,55,0.2); padding:4px 10px; border-radius:4px; font-size:12px; color:#fff;">Carga Externa</span>
                        <span style="background:rgba(212,175,55,0.2); padding:4px 10px; border-radius:4px; font-size:12px; color:#fff;">4000kg</span>
                    </div>
                </div>
                <div style="background:rgba(0,0,0,0.4); padding:20px; border-radius:8px; border:1px solid rgba(212,175,55,0.2);">
                    <h4 style="color:#D4AF37; margin-bottom:10px; font-size:18px;">Antonov AN-32B</h4>
                    <p style="color:#ccc; font-size:14px; line-height:1.6;">Avión de carga militar certificado para operaciones civiles de alto tonelaje</p>
                    <div style="margin-top:15px; display:flex; gap:8px; flex-wrap:wrap;">
                        <span style="background:rgba(212,175,55,0.2); padding:4px 10px; border-radius:4px; font-size:12px; color:#fff;">Carga Interna</span>
                        <span style="background:rgba(212,175,55,0.2); padding:4px 10px; border-radius:4px; font-size:12px; color:#fff;">6700kg</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tipos de Carga -->
        <h3 style="color:#fff; text-align:center; margin-bottom:30px; font-size:20px;">Tipos de Carga que Manejamos</h3>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:20px; margin-bottom:50px;">
            <div style="background:rgba(212,175,55,0.05); padding:25px 20px; border-radius:10px; border:1px solid rgba(212,175,55,0.25); text-align:center; transition:all 0.3s;">
                <div style="font-size:40px; margin-bottom:15px;">❄️</div>
                <h4 style="color:#D4AF37; margin-bottom:10px; font-size:16px; font-weight:600;">Perecible</h4>
                <p style="color:#aaa; font-size:13px; line-height:1.5;">Cadena de frío garantizada y transporte rápido</p>
            </div>
            <div style="background:rgba(212,175,55,0.05); padding:25px 20px; border-radius:10px; border:1px solid rgba(212,175,55,0.25); text-align:center; transition:all 0.3s;">
                <div style="font-size:40px; margin-bottom:15px;">⚕️</div>
                <h4 style="color:#D4AF37; margin-bottom:10px; font-size:16px; font-weight:600;">Médica</h4>
                <p style="color:#aaa; font-size:13px; line-height:1.5;">Equipo médico, medicamentos y órganos</p>
            </div>
            <div style="background:rgba(212,175,55,0.05); padding:25px 20px; border-radius:10px; border:1px solid rgba(212,175,55,0.25); text-align:center; transition:all 0.3s;">
                <div style="font-size:40px; margin-bottom:15px;">💎</div>
                <h4 style="color:#D4AF37; margin-bottom:10px; font-size:16px; font-weight:600;">Valorada</h4>
                <p style="color:#aaa; font-size:13px; line-height:1.5;">Custodia especializada y monitoreo 24/7</p>
            </div>
            <div style="background:rgba(212,175,55,0.05); padding:25px 20px; border-radius:10px; border:1px solid rgba(212,175,55,0.25); text-align:center; transition:all 0.3s;">
                <div style="font-size:40px; margin-bottom:15px;">📦</div>
                <h4 style="color:#D4AF37; margin-bottom:10px; font-size:16px; font-weight:600;">No Perecible</h4>
                <p style="color:#aaa; font-size:13px; line-height:1.5;">Carga general y equipos industriales</p>
            </div>
        </div>

        <!-- Servicios Detallados -->
        <div class="cargo-grid">
            <div class="cargo-card">
                <div class="bg" style="background-image:url('{{ asset('public/img/service/servicio-carga.webp') }}'); background-size:cover; background-position:center;"></div>
                <div class="overlay"></div>
                <div class="content">
                    <div class="cargo-title">🇵🇪 Carga Interna Nacional</div>
                    <p class="cargo-desc">Movilización dentro del territorio nacional con rutas optimizadas y tiempos garantizados.</p>
                    <div class="cargo-variants">
                        <div class="cargo-variant">
                            <h4>⚡ Urgente</h4>
                            <p>Respuesta rápida 24/7, priorización de pista y cadena directa sin transbordos.</p>
                            <div class="cargo-meta">
                                <span class="chip">SLA garantizado</span>
                                <span class="chip">Tracking en vivo</span>
                            </div>
                        </div>
                        <div class="cargo-variant">
                            <h4>🏗️ Pesada</h4>
                            <p>Equipos industriales y carga sobredimensionada con aeronaves de mayor capacidad.</p>
                            <div class="cargo-meta">
                                <span class="chip">Estiba reforzada</span>
                                <span class="chip">Plan de seguridad</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cargo-card">
                <div class="bg" style="background-image:url('{{ asset('public/img/service/servicio-carga-helicoptero.webp') }}'); background-size:cover; background-position:center;"></div>
                <div class="overlay"></div>
                <div class="content">
                    <div class="cargo-title">🌎 Carga Externa Internacional</div>
                    <p class="cargo-desc">Operaciones internacionales con coordinación aduanera y normativa ICAO/IATA completa.</p>
                    <div class="cargo-variants">
                        <div class="cargo-variant">
                            <h4>⚠️ Peligrosa (DGR)</h4>
                            <p>Manejo conforme IATA DGR con embalaje homologado y documentación específica.</p>
                            <div class="cargo-meta">
                                <span class="chip">Clasificación UN</span>
                                <span class="chip">Embalaje certificado</span>
                            </div>
                        </div>
                        <div class="cargo-variant">
                            <h4>🚁 Helicóptero Externa</h4>
                            <p>Carga externa para gasiferías, minería y operaciones en zonas remotas sin pista.</p>
                            <div class="cargo-meta">
                                <span class="chip">Eslinga certificada</span>
                                <span class="chip">Zonas remotas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>

<style>
  .cargo-gallery { padding: 30px 0 60px; background: #0f0f0f; }
  .cargo-gallery .cargo-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
  .cargo-gallery-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
  .gallery-item { border-radius: 12px; overflow: hidden; background: #121212; border: 1px solid rgba(212,175,55,0.25); }
  .gallery-item img { width: 100%; height: 210px; object-fit: cover; display: block; filter: contrast(1.03) saturate(1.05); }
  .gallery-caption { padding: 12px 14px; color: #ddd; font-size: 13px; }
  .gallery-caption strong { color: var(--accent); font-weight: 700; }
  @media (max-width: 992px) { .cargo-gallery-grid { grid-template-columns: 1fr 1fr; } }
  @media (max-width: 640px) { .cargo-gallery-grid { grid-template-columns: 1fr; } }
</style>
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
                <div class="aircraft-image" style="background-image: url('{{ asset('img/aeronaves/aviones/Gulfstream-G100.webp') }}')">
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
                    <span>+</span>
                </div>
                <div class="faq-answer" id="faq1">
                    <p class="p"><?= $p_18 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq2">
                    <span class="faq-text"><?= $h3_9 ?></span>
                    <span>+</span>
                </div>
                <div class="faq-answer" id="faq2">
                    <p class="p"><?= $p_19 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq3">
                    <span class="faq-text"><?= $h3_10 ?></span>
                    <span>+</span>
                </div>
                <div class="faq-answer" id="faq3">
                    <p class="p"><?= $p_20 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq4">
                    <span class="faq-text"><?= $h3_11 ?></span>
                    <span>+</span>
                </div>
                <div class="faq-answer" id="faq4">
                    <p class="p"><?= $p_21 ?></p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq5">
                    <span class="faq-text"><?= $h3_12 ?></span>
                    <span>+</span>
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
    const form = document.querySelector('.heli-form');
    
    // --- LÓGICA DE INTERFAZ (UI) ---

    // 1. Manejo de Tipo de Viaje (Mostrar/Ocultar Retorno)
    const radioButtons = form.querySelectorAll('input[name="tipo_viaje"]');
    const retornoField = form.querySelector('.js-retorno-field');
    const retornoInput = document.getElementById('fecha_retorno_header');

    radioButtons.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.value === 'ida_vuelta') {
                retornoField.style.display = 'block';
                retornoInput.setAttribute('required', 'required');
            } else {
                retornoField.style.display = 'none';
                retornoInput.removeAttribute('required');
                retornoInput.value = ''; // Limpiar valor
            }
        });
    });

    // 3. Manejo de Comentarios (Checkbox)
    const checkComments = document.getElementById('show_comments_header');
    const commentsField = document.getElementById('comentarios-field_header');

    checkComments.addEventListener('change', function() {
        commentsField.style.display = this.checked ? 'block' : 'none';
    });


    // --- LÓGICA DE ENVÍO (AJAX) ---

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;

        // Limpiar errores previos
        document.querySelectorAll('.error-message').forEach(el => el.remove());
        document.querySelectorAll('.heli-input, .heli-select').forEach(el => el.style.borderColor = '');

        // Estado de carga
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Procesando...';
        submitBtn.disabled = true;

        const formData = new FormData(this);

        // Asegurarse de tener la URL correcta (si action="#" está vacío, usa la ruta definida en blade)
        // Puedes poner: action="{{ route('vuelos.send') }}" en el HTML o definirlo aquí:
        const url = this.action && this.action !== window.location.href ? this.action : '/enviar-vuelo'; 

        fetch(url, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')?.value || '{{ csrf_token() }}',
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Éxito: Usar SweetAlert o un alert simple
                alert(data.message); 
                form.reset();
                // Resetear contadores visuales
                document.querySelector('.count[data-type="adultos"]').textContent = '1';
                document.querySelector('.count[data-type="jovenes"]').textContent = '0';
                updateTotalPassengers();
                // Resetear visualización de retorno
                retornoField.style.display = 'block'; 
            } else {
                // Error de validación o servidor
                if (data.errors) {
                    displayValidationErrors(data.errors);
                } else {
                    alert(data.message || 'Ocurrió un error inesperado.');
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error de conexión.');
        })
        .finally(() => {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        });
    });

    function displayValidationErrors(errors) {
        for (const field in errors) {
            // Mapeo de campos a IDs del HTML si los nombres no coinciden exactamente
            // En tu caso los 'name' coinciden bien, pero por si acaso:
            let inputId = '';
            if (field === 'desde') inputId = 'desde_header';
            if (field === 'hacia') inputId = 'hacia_header';
            if (field === 'fecha_ida') inputId = 'fecha_ida_header';
            if (field === 'fecha_retorno') inputId = 'fecha_retorno_header';
            if (field === 'tipo_a') inputId = 'tipo_a_header';
            
            const input = document.getElementById(inputId) || document.querySelector(`[name="${field}"]`);
            
            if (input) {
                input.style.borderColor = '#dc3545';
                
                // Insertar mensaje de error
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.style.color = '#dc3545';
                errorDiv.style.fontSize = '0.8rem';
                errorDiv.style.marginTop = '4px';
                errorDiv.innerText = errors[field][0];
                
                // Insertar después del input o del contenedor padre si es complejo
                input.parentNode.appendChild(errorDiv);
            }
        }
    }
});
</script>
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
