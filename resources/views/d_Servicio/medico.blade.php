@php
$seo = seo()
    ->title(__('services.aeromedical.seo.title'))
    ->description(__('services.aeromedical.seo.description'))
    ->keywords(['ambulancia aérea perú', 'transporte médico aéreo', 'evacuación médica cusco', 'traslado aéreo pacientes', 'servicio aeromédico'])
    ->image(asset('img/servicio-aeromedico.jpg'))
    ->canonical(url(app()->getLocale() . '/aeromedico'));
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
            "name": "¿Cuentan con certificaciones médicas para transporte aeromédico?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Sí, contamos con todas las certificaciones nacionales e internacionales para transporte aeromédico. Personal médico certificado ACLS/PALS, aeronaves equipadas según normas DGAC, y protocolos de atención pre-hospitalaria avanzada."
            }
        },
        {
            "@type": "Question",
            "name": "¿Qué equipamiento médico tienen a bordo?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Nuestras aeronaves aeromédicas incluyen: monitor de signos vitales, desfibrilador, ventilador mecánico, bomba de infusión, oxígeno portátil, camilla de traslado, medicamentos de emergencia y equipo de reanimación avanzada completo."
            }
        },
        {
            "@type": "Question",
            "name": "¿El servicio aeromédico está disponible 24/7?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Sí, ofrecemos servicio aeromédico de emergencia 24 horas al día, 7 días a la semana, los 365 días del año. Tiempo de respuesta promedio de 30 minutos desde la llamada hasta el despegue."
            }
        },
        {
            "@type": "Question",
            "name": "¿Qué zonas del Perú cubren con el servicio aeromédico?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Cubrimos todo el territorio peruano: costa, sierra, selva y zonas remotas. Especialistas en evacuaciones desde altura en Andes, Amazonía y áreas mineras. También traslados inter-hospitalarios en Lima, Cusco, Arequipa y principales ciudades."
            }
        },
        {
            "@type": "Question",
            "name": "¿Realizan evacuaciones médicas internacionales?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Sí, coordinamos evacuaciones médicas internacionales a Chile, Colombia, Ecuador, Brasil y Estados Unidos. Incluye coordinación con hospitales destino, trámites migratorios, seguros médicos y acompañamiento de personal especializado."
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
            "name": "Inicio",
            "item": "{{ url('/') }}"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "Servicios",
            "item": "{{ url('/servicio') }}"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "Servicio Aeromédico",
            "item": "{{ url('/aeromedico') }}"
        }
    ]
}
</script>


@section('content')
<?php
    $h1_page = __('services.aeromedical.title');
    $breadcrumb = __('services.aeromedical.breadcrumb');
    $h2_form = __('services.aeromedical.form_title', ['default' => 'Reserva de Helicóptero']);
?>

<!-- Medical White Theme Styles -->
<style>
    /* Global White Background - Only for medical page */
    .medical-page-content {
        background: #FFFFFF !important;
    }
    
    /* Medical page sections only */
    .medical-page-content section {
        background: #FFFFFF !important;
    }
    
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
        background: 
            linear-gradient(180deg, rgba(0, 0, 0, 0.70) 0%, rgba(0, 0, 0, 0.50) 50%, rgba(0, 0, 0, 0) 100%),
            url('{{ asset("img/service/medical-jet-bg.webp") }}') center/cover no-repeat;
        min-height: 70vh;
        position: relative;
        overflow: hidden;
        padding-top: 120px;
    }
    
    /* Medical pattern overlay */
    .medical-header::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: 
            radial-gradient(circle at 20% 30%, rgba(16, 185, 129, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(212, 175, 55, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 50% 50%, rgba(59, 130, 246, 0.03) 0%, transparent 70%);
        pointer-events: none;
        z-index: 1;
    }
    
    .medical-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, 
            var(--medical-gold) 0%, 
            var(--medical-green) 50%,
            #3b82f6 100%);
        background-size: 200% 100%;
        animation: gradient-shift 8s ease infinite;
        z-index: 10;
    }
    
    @keyframes gradient-shift {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
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
        color: var(--medical-white);
        margin: 0 0 12px 0;
        line-height: 1.2;
    }
    
    .medical-subtitle {
        font-size: 18px;
        color: var(--medical-white);
        margin: 0 0 40px 0;
    }
    
    .medical-grid {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }
    
    /* Form Card - Glassmorphism Horizontal */
    .medical-form-card {
        background: rgba(255, 255, 255, 0.55);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        padding: 24px 32px;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.12);
        border: 2px solid rgba(212, 175, 55, 0.4);
        max-width: 750px;
        width: 100%;
    }
    
    .form-header {
        text-align: center;
        margin-bottom: 16px;
    }
    
    .form-title {
        font-size: 22px;
        font-weight: 700;
        color: var(--medical-black);
        margin: 0 0 6px 0;
    }
    
    .form-desc {
        font-size: 13px;
        color: var(--medical-gray);
        margin: 0;
    }
    
    .form-inputs {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
        margin-bottom: 16px;
    }
    
    .medical-input-field {
        width: 100%;
        padding: 12px 14px;
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        background: var(--medical-white);
        color: var(--medical-black);
        font-size: 14px;
        transition: all 0.3s;
    }
    
    .medical-input-field:focus {
        outline: none;
        border-color: var(--medical-gold);
        box-shadow: 0 0 0 4px rgba(212,175,55,0.1);
    }
    
    .form-buttons {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }
    
    .medical-button {
        padding: 12px 20px;
        border: none;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
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
    
    /* Emergency Info Card - Glassmorphism */
    .emergency-card {
        background: rgba(209, 250, 229, 0.7);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        padding: 32px;
        border-radius: 16px;
        border: 2px solid rgba(16, 185, 129, 0.5);
        box-shadow: 0 8px 32px rgba(16,185,129,0.2);
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
    
    .contact-item1 {
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

<div class="medical-page-content">
<header class="medical-header">
    <div class="medical-container">
        <div style="text-align:center;">
            <div class="medical-breadcrumb" style="display:inline-flex;">
                <i class="fas fa-helicopter"></i>
                <span><?= $breadcrumb ?></span>
            </div>
        </div>
        
        <h1 class="medical-title" style="text-align:center;"><?= $h1_page ?></h1>
        <p class="medical-subtitle" style="text-align:center;">{{ __('services.aeromedical.hero_subtitle') }}</p>
        
        <div class="medical-grid">
            <!-- Form Card -->
            <div class="medical-form-card">
                <div class="form-header">
                    <h2 class="form-title">{{ __('services.aeromedical.form_title') }}</h2>
                    <p class="form-desc">{{ __('services.aeromedical.form_subtitle') }}</p>
                </div>
                
                <form id="servicioForm" method="post" action="{{ route('vuelos.send') }}">
                @csrf
                    <input type="hidden" name="tipo_servicio" value="aeromedico">
                    
                    <div class="form-inputs">
                        <input class="medical-input-field" type="text" name="nombres_apellidos" placeholder="{{ __('services.form.name') }} *" required>
                        <input class="medical-input-field" type="email" name="correo" placeholder="{{ __('services.form.email') }} *" required>
                        <input class="medical-input-field" type="tel" name="telefono" placeholder="{{ __('services.form.phone') }} *" required pattern="[0-9+\s-]{7,20}">
                    </div>
                    
                    <div class="form-buttons">
                        <button type="button" class="medical-button btn-emergency" onclick="llamarDirecto()">
                            <i class="fas fa-phone-alt"></i> {{ __('services.aeromedical.call') }}: +51 932 475 995
                        </button>
                        <button type="button" class="medical-button btn-success" onclick="enviarWhatsApp('aeromedico')">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </button>
                        <button type="button" class="medical-button btn-secondary" onclick="enviarOutlook('aeromedico')">
                            <i class="far fa-envelope"></i> Outlook
                        </button>
                        <button type="button" class="medical-button btn-secondary" onclick="enviarGmail('aeromedico')">
                            <i class="far fa-envelope"></i> Gmail
                        </button>
                    </div>
                </form>
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

<!-- Emergency Service Notice -->
<section style="background:#f7fafc; padding:60px 20px;">
    <div style="max-width:800px; margin:0 auto; padding:32px; background:#FFFFFF; border-radius:16px; border:2px solid var(--medical-gold); box-shadow:0 8px 24px rgba(0,0,0,0.08); text-align:center;">
        <div style="width:64px; height:64px; background:linear-gradient(135deg, var(--medical-red) 0%, #b91c1c 100%); border-radius:16px; display:flex; align-items:center; justify-content:center; margin:0 auto 24px;">
            <i class="fas fa-heartbeat" style="color:#fff; font-size:32px;"></i>
        </div>
        <h3 style="color:var(--medical-black); margin-bottom:16px; font-size:26px; font-weight:700;">{{ __('services.aeromedical.emergency_title') }}</h3>
        <p style="color:var(--medical-gray); font-size:17px; line-height:1.8; margin-bottom:24px;">
            {!! __('services.aeromedical.emergency_desc') !!}
        </p>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:16px; margin-top:28px;">
            <div style="background:linear-gradient(135deg, #fee2e2 0%, #fef2f2 100%); padding:20px; border-radius:12px; border:2px solid var(--medical-red);">
                <div style="font-size:32px; margin-bottom:8px;">📞</div>
                <p style="color:var(--medical-red); font-weight:700; margin-bottom:6px; font-size:16px;">{{ __('services.aeromedical.direct_call') }}</p>
                <p style="color:var(--medical-gray); font-size:14px; margin:0;">{{ __('services.aeromedical.immediate_attention') }}</p>
            </div>
            <div style="background:linear-gradient(135deg, #fef3c7 0%, #fefce8 100%); padding:20px; border-radius:12px; border:2px solid var(--medical-gold);">
                <div style="font-size:32px; margin-bottom:8px;">✉️</div>
                <p style="color:var(--medical-gold); font-weight:700; margin-bottom:6px; font-size:16px;">{{ __('services.aeromedical.email') }}</p>
                <p style="color:var(--medical-gray); font-size:14px; margin:0;">{{ __('services.aeromedical.official_confirmation') }}</p>
            </div>
        </div>
    </div>
</section>


<!-- Aircraft Fleet Section -->
<section style="background:#FFFFFF; padding:80px 20px;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="text-align:center; margin-bottom:48px;">
            <h2 style="color:var(--medical-black); font-size:36px; font-weight:700; margin:0 0 16px 0;">{{ __('services.aeromedical.aircraft_title') }}</h2>
            <p style="color:var(--medical-gray); font-size:18px; margin:0;">{{ __('services.aeromedical.aircraft_subtitle') }}</p>
        </div>
        <div class="fleet-grid">
            
            <style>
                /* Aircraft Cards White Theme */
                .fleet-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                    gap: 24px;
                    margin-top: 32px;
                }
                
                .aircraft-card {
                    background: #FFFFFF;
                    border: 2px solid #e2e8f0;
                    border-radius: 16px;
                    overflow: hidden;
                    transition: all 0.3s ease;
                    box-shadow: 0 2px 8px rgba(0,0,0,0.06);
                }
                
                .aircraft-card:hover {
                    border-color: var(--medical-gold);
                    transform: translateY(-8px);
                    box-shadow: 0 12px 24px rgba(212,175,55,0.15);
                }
                
                .aircraft-image {
                    height: 220px;
                    background-size: cover;
                    background-position: center;
                    position: relative;
                }
                
                .aircraft-overlay {
                    position: absolute;
                    inset: 0;
                    background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.8) 100%);
                    opacity: 0;
                    transition: opacity 0.3s ease;
                    display: flex;
                    align-items: flex-end;
                    padding: 20px;
                }
                
                .aircraft-card:hover .aircraft-overlay {
                    opacity: 1;
                }
                
                .aircraft-details {
                    color: white;
                    font-size: 14px;
                }
                
                .aircraft-details p {
                    margin: 4px 0;
                }
                
                .aircraft-info {
                    padding: 20px;
                }
                
                .aircraft-name {
                    color: var(--medical-black);
                    font-size: 20px;
                    font-weight: 700;
                    margin: 0 0 12px 0;
                }
                
                .aircraft-types {
                    display: flex;
                    gap: 8px;
                    margin-bottom: 12px;
                }
                
                .aircraft-type {
                    padding: 6px 12px;
                    border-radius: 6px;
                    font-size: 12px;
                    font-weight: 600;
                    background: linear-gradient(135deg, var(--medical-green) 0%, #059669 100%);
                    color: white;
                }
                
                .view-details-btn {
                    color: var(--medical-gold);
                    font-size: 14px;
                    font-weight: 600;
                    display: inline-flex;
                    align-items: center;
                    gap: 6px;
                    transition: all 0.3s ease;
                }
                
                .view-details-btn:hover {
                    color: var(--medical-green);
                    transform: translateX(4px);
                }
            </style>
            <a href="{{ url(app()->getLocale() . '/aeronaves/Mi8-mtv1') }}" class="aircraft-card" style="text-decoration: none; color: inherit;">
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

            <a href="{{ url(app()->getLocale() . '/aeronaves/Ecureuil-b3') }}" class="aircraft-card" style="text-decoration: none; color: inherit;">
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

            <a href="{{ url(app()->getLocale() . '/aeronaves/KingAirB200') }}" class="aircraft-card" style="text-decoration: none; color: inherit;">
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

            <a href="{{ url(app()->getLocale() . '/aeronaves/KingAirB350') }}" class="aircraft-card" style="text-decoration: none; color: inherit;">
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

<!-- Blog Section White Theme 
<section style="background:#FFFFFF; padding:80px 20px;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="text-align:center; margin-bottom:48px;">
            <h2 style="color:var(--medical-black); font-size:36px; font-weight:700; margin:0 0 16px 0;">Blog Médico</h2>
            <p style="color:var(--medical-gray); font-size:18px; margin:0;">Últimas noticias y consejos sobre transporte aeromédico</p>
        </div>
        
        <style>
            .heli-articles-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
                gap: 28px;
            }
            
            .article-card {
                background: #FFFFFF;
                border: 2px solid #e2e8f0;
                border-radius: 16px;
                overflow: hidden;
                transition: all 0.3s ease;
                box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            }
            
            .article-card:hover {
                border-color: var(--medical-gold);
                transform: translateY(-8px);
                box-shadow: 0 12px 24px rgba(212,175,55,0.12);
            }
            
            .article-image {
                height: 200px;
                position: relative;
                overflow: hidden;
            }
            
            .article-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            
            .article-category {
                position: absolute;
                top: 16px;
                left: 16px;
                background: linear-gradient(135deg, var(--medical-gold) 0%, #C5A028 100%);
                color: white;
                padding: 6px 14px;
                border-radius: 20px;
                font-size: 12px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }
            
            .article-content {
                padding: 24px;
            }
            
            .article-meta {
                display: flex;
                gap: 16px;
                margin-bottom: 12px;
                font-size: 13px;
                color: var(--medical-gray);
            }
            
            .article-meta span {
                display: flex;
                align-items: center;
                gap: 6px;
            }
            
            .article-meta i {
                color: var(--medical-gold);
            }
            
            .article-title {
                color: var(--medical-black);
                font-size: 19px;
                font-weight: 700;
                margin: 0 0 12px 0;
                line-height: 1.4;
            }
            
            .article-excerpt {
                color: var(--medical-gray);
                font-size: 15px;
                line-height: 1.6;
                margin: 0 0 16px 0;
            }
            
            .article-link {
                color: var(--medical-gold);
                font-size: 14px;
                font-weight: 600;
                text-decoration: none;
                display: inline-flex;
                align-items: center;
                gap: 8px;
                transition: all 0.3s ease;
            }
            
            .article-link:hover {
                color: var(--medical-green);
                transform: translateX(4px);
            }
        </style>
        
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
-->
<?php
    $h1_7 = __('common.faq.title');
    $p_17 = __('common.faq.subtitle');
    $h3_8 = __('common.faq.charter_destinations_q');
    $p_18 = __('common.faq.charter_destinations_a');
    $h3_9 = __('common.faq.how_to_book_q');
    $p_19 = __('common.faq.how_to_book_a');
    $h3_10 = __('common.faq.baggage_policy_q');
    $p_20 = __('common.faq.baggage_policy_a');
    $h3_11 = __('common.faq.safety_measures_q');
    $p_21 = __('common.faq.safety_measures_a');
    $h3_12 = __('common.faq.frequent_flyer_q');
    $p_22 = __('common.faq.frequent_flyer_a');
?>

<!-- FAQ Section White Theme -->
<section style="background:#f7fafc; padding:80px 20px;">
    <div style="max-width:900px; margin:0 auto;">
        <div style="text-align:center; margin-bottom:48px;">
        
        <style>
            /* FAQ Items White Theme */
            .faq-grid {
                display: grid;
                gap: 16px;
            }
            
            .faq-item {
                background: #FFFFFF;
                border: 2px solid #e2e8f0;
                border-radius: 12px;
                overflow: hidden;
                transition: all 0.3s ease;
            }
            
            .faq-item:hover {
                border-color: var(--medical-gold);
                box-shadow: 0 4px 16px rgba(212,175,55,0.1);
            }
            
            .faq-item.active {
                border-color: var(--medical-gold);
                background: linear-gradient(135deg, #fef3c7 0%, #ffffff 100%);
            }
            
            .faq-question {
                padding: 20px 24px;
                cursor: pointer;
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 16px;
                transition: all 0.3s ease;
            }
            
            .faq-text {
                color: var(--medical-black);
                font-size: 17px;
                font-weight: 600;
                flex: 1;
            }
            
            .faq-item.active .faq-text {
                color: var(--medical-gold);
            }
            
            .faq-icon {
                width: 32px;
                height: 32px;
                background: linear-gradient(135deg, var(--medical-gold) 0%, #C5A028 100%);
                color: white;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 20px;
                font-weight: 700;
                transition: all 0.3s ease;
                flex-shrink: 0;
            }
            
            .faq-item.active .faq-icon {
                transform: rotate(45deg);
                background: linear-gradient(135deg, var(--medical-green) 0%, #059669 100%);
            }
            
            .faq-answer {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.4s ease;
            }
            
            .faq-item.active .faq-answer {
                max-height: 500px;
            }
            
            .faq-answer p {
                padding: 0 24px 24px;
                color: var(--medical-gray);
                font-size: 15px;
                line-height: 1.8;
                margin: 0;
            }
        </style>
    <h3 style="color:var(--medical-black); font-size:36px; font-weight:700; margin:0 0 16px 0;"><?= $h1_7 ?></h3>
            <p style="color:var(--medical-gray); font-size:18px; margin:0;"><?= $p_17 ?></p>
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
    // FAQ Toggle Functionality
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', function() {
            const isActive = item.classList.contains('active');
            // Close all other items
            faqItems.forEach(other => {
                if (other !== item) other.classList.remove('active');
            });
            // Toggle current item
            if (isActive) {
                item.classList.remove('active');
            } else {
                item.classList.add('active');
            }
        });
    });
    
    // Form Handler
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
</div><!-- End medical-page-content -->

@endsection
