@extends('a_EncabezadoFooter.princi')

@php
// Custom SEO for Medico page
$seo = [
    'title' => 'Transporte Aéreo Médico en Perú | Ambulancia Aérea Certificada',
    'description' => 'Servicio aeromédico especializado 24/7 en Perú. Evacuaciones médicas y traslado de pacientes. Reservas solo por llamada y correo electrónico.',
    'keywords' => 'ambulancia aérea perú, transporte médico aéreo, evacuación médica cusco, traslado aéreo pacientes, servicio aeromédico',
    'og_image' => asset('img/servicio-aeromedico.jpg'),
    'canonical' => url('/aeromedico'),
];
@endphp

@section('content')
<?php
    $h1_page = 'Transporte Aéreo Médico Certificado';
    $breadcrumb = 'Inicio / Servicios / Aeromédico';
    $h2_form = 'Reserva de Helicóptero';
?>

<!-- Medical White Theme Styles -->
<style>
   :root {
        --medical-white: #FFFFFF;
        --medical-gold: #D4AF37;
        --medical-black: #1a1a1a;
        --medical-green: #10b981;
        --medical-gray: #4a5568;
        --medical-light-gray: #f7fafc;
        --medical-red: #dc2626;
    }
    
    .medical-header {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        min-height: 70vh;
        position: relative;
        overflow: hidden;
    }
    
    .medical-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--medical-gold) 0%, var(--medical-green) 100%);
    }
    
    .medical-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
        position: relative;
        z-index: 2;
    }
    
    .medical-breadcrumb {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        background: rgba(212,175,55,0.1);
        border: 1px solid var(--medical-gold);
        border-radius: 20px;
        color: var(--medical-gold);
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 20px;
    }
    
    .medical-title {
        font-size: 42px;
        font-weight: 700;
        color: var(--medical-black);
        margin: 0 0 12px 0;
        line-height: 1.2;
    }
    
    .medical-subtitle {
        font-size: 18px;
        color: var(--medical-gray);
        margin: 0 0 40px 0;
    }
    
    .medical-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 32px;
        margin-top: 40px;
    }
    
    /* Form Card */
    .medical-form-card {
        background: var(--medical-white);
        padding: 32px;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.08);
       border: 2px solid var(--medical-gold);
    }
    
    .form-header {
        text-align: center;
        margin-bottom: 24px;
    }
    
    .form-title {
        font-size: 24px;
        font-weight: 700;
        color: var(--medical-black);
        margin: 0 0 8px 0;
    }
    
    .form-desc {
        font-size: 14px;
        color: var(--medical-gray);
        margin: 0;
    }
    
    .form-inputs {
        display: grid;
        gap: 16px;
        margin-bottom: 20px;
    }
    
    .medical-input-field {
        width: 100%;
        padding: 14px 16px;
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        background: var(--medical-white);
        color: var(--medical-black);
        font-size: 15px;
        transition: all 0.3s;
    }
    
    .medical-input-field:focus {
        outline: none;
        border-color: var(--medical-gold);
        box-shadow: 0 0 0 4px rgba(212,175,55,0.1);
    }
    
    .form-buttons {
        display: grid;
        gap: 12px;
    }
    
    .medical-button {
        padding: 14px 24px;
        border: none;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    
    .btn-emergency {
        background: var(--medical-red);
        color: white;
        box-shadow: 0 4px 12px rgba(220,38,38,0.3);
    }
    
    .btn-emergency:hover {
        background: #b91c1c;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(220,38,38,0.4);
    }
    
    .btn-success {
        background: var(--medical-green);
        color: white;
    }
    
    .btn-success:hover {
        background: #059669;
        transform: translateY(-2px);
    }
    
    .btn-secondary {
        background: #f1f5f9;
        color: var(--medical-gray);
        border: 1px solid #e2e8f0;
    }
    
    .btn-secondary:hover {
        background: var(--medical-gold);
        color: white;
        border-color: var(--medical-gold);
    }
    
    /* Emergency Info Card */
    .emergency-card {
        background: linear-gradient(135deg, #d1fae5 0%, #ecfdf5 100%);
        padding: 32px;
        border-radius: 16px;
        border: 2px solid var(--medical-green);
        box-shadow: 0 8px 24px rgba(16,185,129,0.15);
    }
    
    .emergency-title {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 22px;
        font-weight: 700;
        color: var(--medical-green);
        margin: 0 0 24px 0;
    }
    
    .emergency-icon {
        width: 48px;
        height: 48px;
        background: var(--medical-green);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
    }
    
    .contact-item {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 16px;
        background: white;
        border-radius: 12px;
        margin-bottom: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    }
    
    .contact-icon {
        width: 48px;
        height: 48px;
        background: linear-gradient(135deg, var(--medical-green) 0%, #059669 100%);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 20px;
        flex-shrink: 0;
    }
    
    .contact-label {
        font-size: 12px;
        font-weight: 600;
        color: var(--medical-gray);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .contact-value {
        font-size: 18px;
        font-weight: 700;
        color: var(--medical-black);
    }
    
    .emergency-note {
        background: white;
        padding: 16px;
        border-radius: 10px;
        border-left: 4px solid var(--medical-gold);
        margin-top: 16px;
    }
    
    .emergency-note p {
        margin: 0;
        font-size: 14px;
        line-height: 1.6;
        color: var(--medical-gray);
    }
    
    @media (max-width: 992px) {
        .medical-grid {
            grid-template-columns: 1fr;
        }
        .medical-title {
            font-size: 32px;
        }
    }
</style>

<header class="medical-header">
    <div class="medical-container">
        <div class="medical-breadcrumb">
            <i class="fas fa-helicopter"></i>
            <span><?= $breadcrumb ?></span>
        </div>
        
        <h1 class="medical-title"><?= $h1_page ?></h1>
        <p class="medical-subtitle">Evacuaciones médicas y traslado de pacientes con equipos certificados</p>
        
        <div class="medical-grid">
            <!-- Form Card -->
            <div class="medical-form-card">
                <div class="form-header">
                    <h2 class="form-title">Solicitar Servicio</h2>
                    <p class="form-desc">Complete para emergencias médicas 24/7</p>
                </div>
                
                <form id="servicioForm" method="post" action="{{ route('vuelos.send') }}">
                @csrf
                    <input type="hidden" name="tipo_servicio" value="aeromedico">
                    
                    <div class="form-inputs">
                        <input class="medical-input-field" type="text" name="nombres_apellidos" placeholder="Nombre completo *" required>
                        <input class="medical-input-field" type="email" name="correo" placeholder="Correo electrónico *" required>
                        <input class="medical-input-field" type="tel" name="telefono" placeholder="Teléfono *" required pattern="[0-9+\s-]{7,20}">
                    </div>
                    
                    <div class="form-buttons">
                        <button type="button" class="medical-button btn-emergency" onclick="llamarDirecto()">
                            <i class="fas fa-phone-alt"></i> Llamar: +51 932 475 995
                        </button>
                        <button type="button" class="medical-button btn-success" onclick="enviarWhatsApp('aeromedico')">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </button>
                        <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px">
                            <button type="button" class="medical-button btn-secondary" onclick="enviarOutlook('aeromedico')">
                                <i class="far fa-envelope"></i> Outlook
                            </button>
                            <button type="button" class="medical-button btn-secondary" onclick="enviarGmail('aeromedico')">
                                <i class="far fa-envelope"></i> Gmail
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
            <!-- Emergency Info Card -->
            <div class="emergency-card">
                <div class="emergency-title">
                    <div class="emergency-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    Servicio 24/7
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <div class="contact-label">Línea Directa</div>
                        <div class="contact-value">+51 932 475 995</div>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <div class="contact-label">Email</div>
                        <div class="contact-value" style="font-size:15px">contacto@aerolineadelsur.com.pe</div>
                    </div>
                </div>
                
                <div class="emergency-note">
                    <p>
                        <i class="fas fa-info-circle" style="color:var(--medical-gold);margin-right:8px"></i>
                        <strong>Atención inmediata</strong> para evacuaciones médicas, traslado de pacientes y emergencias en zonas remotas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>
        
        <style>
            /* Tema médico - Fondo blanco con acentos médicos */
            .medic-form{
                padding:32px;
                border-radius:16px;
                background:#ffffff;
                box-shadow:0 8px 24px rgba(0,0,0,0.12);
                border:2px solid #e8f5e9;
                max-width:800px;
                margin:0 auto;
            }
            .medic-form-head{
                text-align:center;
                margin-bottom:28px;
                padding-bottom:20px;
                border-bottom:2px solid #66bb6a;
            }
            .medic-section-title{
                color:#2e7d32;
                font-size:28px;
                font-weight:700;
                margin:0 0 8px 0;
            }
            .medic-subtitle{
                color:#546e7a;
                font-size:15px;
                margin:0;
            }
            .medic-form-fields{
                display:grid;
                grid-template-columns:1fr;
                gap:20px;
                margin-bottom:24px;
            }
            .medic-field{
                display:flex;
                flex-direction:column;
                gap:8px;
            }
            .medic-label{
                color:#37474f;
                font-size:14px;
                font-weight:600;
                letter-spacing:0.3px;
            }
            .medic-input{
                width:100%;
                padding:14px 16px;
                border:2px solid #cfd8dc;
                border-radius:8px;
                background:#fafafa;
                color:#263238;
                font-size:15px;
                transition:all 0.3s ease;
            }
            .medic-input:focus{
                outline:none;
                border-color:#66bb6a;
                background:#ffffff;
                box-shadow:0 0 0 3px rgba(102,187,106,0.1);
            }
            .medic-input::placeholder{
                color:#90a4ae;
            }
            .medic-actions{
                display:grid;
                grid-template-columns:repeat(2,1fr);
                gap:12px;
            }
            .medic-btn{
                padding:16px 24px;
                border:none;
                border-radius:10px;
                font-size:15px;
                font-weight:600;
                cursor:pointer;
                transition:all 0.3s ease;
                display:inline-flex;
                align-items:center;
                justify-content:center;
                gap:10px;
                box-shadow:0 2px 8px rgba(0,0,0,0.1);
            }
            .btn-call{
                background:#d32f2f;
                color:#fff;
                grid-column:1/-1;
                font-size:17px;
            }
            .btn-call:hover{
                background:#c62828;
                transform:translateY(-2px);
                box-shadow:0 4px 12px rgba(211,47,47,0.3);
            }
            .btn-whatsapp{
                background:#25D366;
                color:#fff;
                grid-column:1/-1;
            }
            .btn-whatsapp:hover{
                background:#20BA5A;
                transform:translateY(-2px);
                box-shadow:0 4px 12px rgba(37,211,102,0.3);
            }
            .btn-outlook-medic{
                background:#0078D4;
                color:#fff;
            }
            .btn-outlook-medic:hover{
                background:#106EBE;
                transform:translateY(-2px);
                box-shadow:0 4px 12px rgba(0,120,212,0.3);
            }
            .btn-gmail-medic{
                background:#EA4335;
                color:#fff;
            }
            .btn-gmail-medic:hover{
                background:#CC3828;
                transform:translateY(-2px);
                box-shadow:0 4px 12px rgba(234,67,53,0.3);
            }
            
            @media (max-width:640px){
                .medic-form{padding:24px}
                .medic-actions{grid-template-columns:1fr}
                .btn-call,.btn-whatsapp{grid-column:1}
            }
        </style>
        
        <script>
            function llamarDirecto() {
                window.location.href = 'tel:+51932475995';
            }
            
            function enviarWhatsApp(tipoServicio) {
                const form = document.getElementById('servicioForm');
                const nombre = form.querySelector('[name="nombres_apellidos"]').value;
                const correo = form.querySelector('[name="correo"]').value;
                const telefono = form.querySelector('[name="telefono"]').value;
                
                if (!nombre || !correo || !telefono) {
                    alert('Por favor complete todos los campos');
                    return;
                }
                
                const mensaje = `Hola! Solicito información sobre Servicio Aeromédico:\n\n` +
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
                
                const asunto = `Solicitud de información - Servicio Aeromédico`;
                const cuerpo = `Hola,\n\nSolicito información sobre el servicio aeromédico.\n\n` +
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
                
                const asunto = `Solicitud de información - Servicio Aeromédico`;
                const cuerpo = `Hola,\n\nSolicito información sobre el servicio aeromédico.\n\n` +
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

<!-- Aviso de Contacto Exclusivo -->
<section style="background:rgba(0,0,0,0.8); padding:40px 20px;">
    <div style="max-width:700px; margin:0 auto; padding:25px; background:linear-gradient(135deg, rgba(234,67,53,0.2), rgba(0,0,0,0.4)); border-radius:12px; border:2px solid rgba(234,67,53,0.6); text-align:center;">
        <h3 style="color:#EA4335; margin-bottom:15px; font-size:20px;">⚕️ Servicio de Emergencia 24/7</h3>
        <p style="color:#fff; font-size:16px; line-height:1.7; margin-bottom:20px;">
            Por la naturaleza crítica de nuestro servicio aeromédico, <strong style="color:#EA4335;">las reservas se realizan ÚNICAMENTE por llamada telefónica y correo electrónico</strong> para garantizar comunicación inmediata y coordinación de emergencias.
        </p>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:15px; margin-top:20px;">
            <div style="background:rgba(234,67,53,0.3); padding:15px; border-radius:8px;">
                <p style="color:#EA4335; font-weight:600; margin-bottom:5px;">📞 Llamada Directa</p>
                <p style="color:#fff; font-size:14px;">Atención inmediata</p>
            </div>
            <div style="background:rgba(234,67,53,0.3); padding:15px; border-radius:8px;">
                <p style="color:#EA4335; font-weight:600; margin-bottom:5px;">✉️ Correo Electrónico</p>
                <p style="color:#fff; font-size:14px;">Confirmación oficial</p>
            </div>
        </div>
    </div>
</section>


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
    const form = document.querySelector('#servicioForm');
    
    // Verificar que el formulario existe
    if (!form) {
        console.error('Formulario médico no encontrado');
        return;
    }
    
    // --- LÓGICA DE ENVÍO (AJAX) ---

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;

        // Limpiar errores previos
        document.querySelectorAll('.error-message').forEach(el => el.remove());
        document.querySelectorAll('.medical-input-field').forEach(el => el.style.borderColor = '');

        // Estado de carga
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Procesando...';
        submitBtn.disabled = true;

        const formData = new FormData(this);
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
                alert(data.message); 
                form.reset();
            } else {
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
@endsection
