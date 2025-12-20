@extends('a_EncabezadoFooter.princi')

@php
$seo = [
    'title' => 'Política de Cookies - Aerolínea del Sur',
    'description' => 'Conoce cómo utilizamos las cookies en nuestro sitio web para mejorar tu experiencia de navegación.',
    'keywords' => 'política de cookies, cookies, privacidad, datos',
    'og_image' => asset('img/logo-aerolinea-del-sur.jpg'),
    'canonical' => url(app()->getLocale() . '/politica-de-cookies'),
];
@endphp

@section('content')
<link rel="stylesheet" href="{{ asset('css/paginas/footer/footer.css') }}">

<section class="legal-page" style="padding: 80px 20px 60px; min-height: 100vh; background: #0a0a0a;">
    <div class="container" style="max-width: 900px; margin: 0 auto;">
        <h1 style="font-size: 42px; font-weight: 800; color: #D4AF37; margin-bottom: 30px; text-align: center; letter-spacing: -0.5px;">
            Política de Cookies
        </h1>
        
        <div style="background: rgba(212,175,55,0.05); border: 1px solid rgba(212,175,55,0.2); border-radius: 12px; padding: 30px; margin-bottom: 40px;">
            <p style="font-size: 16px; line-height: 1.8; color: #ccc; margin: 0;">
                En <strong style="color: #D4AF37;">Aerolínea del Sur</strong>, utilizamos cookies y tecnologías similares para mejorar tu experiencia de navegación, analizar el tráfico del sitio web y personalizar el contenido.
            </p>
        </div>

        <div style="color: #ddd; font-size: 15px; line-height: 1.9;">
            <h2 style="font-size: 28px; font-weight: 700; color: #D4AF37; margin: 40px 0 20px;">
                ¿Qué son las cookies?
            </h2>
            <p>
                Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo cuando visitas un sitio web. Permiten que el sitio web recuerde tus acciones y preferencias durante un período de tiempo.
            </p>

            <h2 style="font-size: 28px; font-weight: 700; color: #D4AF37; margin: 40px 0 20px;">
                ¿Qué cookies utilizamos?
            </h2>
            
            <h3 style="font-size: 20px; font-weight: 600; color: #fff; margin: 25px 0 15px;">
                🍪 Cookies Esenciales
            </h3>
            <p>
                Estas cookies son necesarias para el funcionamiento básico del sitio web y no se pueden desactivar. Incluyen cookies de sesión y cookies de consentimiento.
            </p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li><strong>laravel_cookie_consent</strong> - Guarda tu preferencia de consentimiento de cookies</li>
                <li><strong>XSRF-TOKEN</strong> - Previene ataques de falsificación de peticiones</li>
                <li><strong>laravel_session</strong> - Mantiene tu sesión activa en el sitio</li>
            </ul>

            <h3 style="font-size: 20px; font-weight: 600; color: #fff; margin: 25px 0 15px;">
                📊 Cookies Analíticas
            </h3>
            <p>
                Utilizamos Google Analytics y Google Tag Manager para entender cómo interactúas con nuestro sitio web. Estas cookies solo se activan si aceptas las cookies.
            </p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li><strong>_ga</strong> - Identifica usuarios únicos (vence en 2 años)</li>
                <li><strong>_gid</strong> - Identifica usuarios únicos (vence en 24 horas)</li>
                <li><strong>_gat</strong> - Limita la tasa de solicitudes (vence en 1 minuto)</li>
            </ul>

            <h2 style="font-size: 28px; font-weight: 700; color: #D4AF37; margin: 40px 0 20px;">
                Gestión de Cookies
            </h2>
            <p>
                Puedes gestionar tus preferencias de cookies de las siguientes maneras:
            </p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li><strong>Banner de cookies:</strong> Al visitar nuestro sitio, puedes aceptar o rechazar las cookies analíticas</li>
                <li><strong>Configuración del navegador:</strong> Puedes configurar tu navegador para bloquear o eliminar cookies</li>
                <li><strong>Eliminar cookies:</strong> Puedes eliminar las cookies almacenadas en cualquier momento desde la configuración de tu navegador</li>
            </ul>

            <h2 style="font-size: 28px; font-weight: 700; color: #D4AF37; margin: 40px 0 20px;">
                Cookies de Terceros
            </h2>
            <p>
                Utilizamos los siguientes servicios de terceros que pueden establecer sus propias cookies:
            </p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li><strong>Google Analytics:</strong> Para análisis del tráfico web</li>
                <li><strong>Google Tag Manager:</strong> Para gestión de etiquetas y scripts</li>
            </ul>

            <h2 style="font-size: 28px; font-weight: 700; color: #D4AF37; margin: 40px 0 20px;">
                Actualización de esta Política
            </h2>
            <p>
                Podemos actualizar esta Política de Cookies periódicamente. La fecha de la última actualización se mostrará al final de esta página.
            </p>

            <h2 style="font-size: 28px; font-weight: 700; color: #D4AF37; margin: 40px 0 20px;">
                Contacto
            </h2>
            <p>
                Si tienes preguntas sobre nuestra Política de Cookies, contáctanos en:
            </p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li><strong>Email:</strong> <a href="mailto:info@aerolineadelsur.com" style="color: #D4AF37; text-decoration: none;">info@aerolineadelsur.com</a></li>
                <li><strong>Teléfono:</strong> +51 932 475 995</li>
            </ul>

            <div style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(212,175,55,0.2); text-align: center;">
                <p style="font-size: 14px; color: #888;">
                    <strong>Última actualización:</strong> Diciembre 2024
                </p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ url(app()->getLocale()) }}" style="display: inline-block; padding: 14px 30px; background: #D4AF37; color: #000; font-weight: 600; text-decoration: none; border-radius: 8px; transition: all 0.3s;">
                Volver al Inicio
            </a>
        </div>
    </div>
</section>
@endsection
