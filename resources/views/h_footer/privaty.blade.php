@extends('a_EncabezadoFooter.princi')

@php
// Custom SEO for Privacy Policy
$seo = [
    'title' => __('legal.privacy.seo_title'),
    'description' => __('legal.privacy.seo_description'),
    'keywords' => 'política privacidad perú, protección datos, privacidad aerolínea',
    'og_image' => asset('img/logo.svg'),
    'canonical' => url(app()->getLocale() . '/politica-privacidad'),
];
@endphp
@section('content')
<link rel="stylesheet" href="{{ asset('public/css/footer/privaty.css') }}">
<div class="privacy-container">
    <div class="content-wrapper">
        <!-- Header Section -->
        <header class="privacy-header">
            <div class="privacy-logo">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h1 class="privacy-title">
                <i class="fas fa-shield-alt"></i>
                <?= __('legal.privacy.title') ?>
            </h1>
            <p class="privacy-subtitle"><?= __('legal.privacy.subtitle') ?></p>
            <p style="color: var(--accent); font-weight: 600; font-size: 1rem;"><?= __('legal.privacy.company_commitment') ?></p>
        </header>

        <!-- Introduction Section -->
        <section class="intro-section">
            <p class="intro-text">
                Es importante que lea cuidadosamente los términos, condiciones y políticas de reserva. 
                Con la información suministrada cumplimos con dar conocimiento a nuestros clientes sobre el servicio que brindamos.
            </p>
        </section>

        <!-- Privacy Sections -->
        <div class="privacy-content">
            <!-- Section 1: Uso de la Información Personal -->
            <section class="privacy-section">
                <div class="section-header">
                    <div class="section-number">1</div>
                    <div class="section-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h2 class="section-title">USO DE LA INFORMACIÓN PERSONAL</h2>
                </div>
                <div class="section-content">
                    <p><strong>Aerolíneas del Sur</strong> no recopila información personal con fines distintos a los aquí mencionados, ni vende, intercambia o alquila dicha información a ninguna organización o tercero no autorizado.</p>
                    
                    <p>Utilizamos sus datos personales —como nombre completo, número de teléfono y dirección de correo electrónico— únicamente para:</p>
                    
                    <ul class="privacy-list">
                        <li>Procesar, confirmar y gestionar las reservas de vuelos u otros servicios solicitados.</li>
                        <li>Enviarle información relevante sobre su itinerario, alertas de viaje, promociones, encuestas o noticias relacionadas con nuestra empresa.</li>
                        <li>Brindar asistencia al cliente en caso de cambios, cancelaciones o reprogramaciones.</li>
                    </ul>
                    
                    <p>Usted podrá optar por no recibir más comunicaciones promocionales en cualquier momento mediante el enlace de cancelación de suscripción incluido en cada correo o escribiéndonos a nuestro correo de contacto.</p>
                </div>
            </section>

            <!-- Section 2: Enlaces a Sitios Externos -->
            <section class="privacy-section">
                <div class="section-header">
                    <div class="section-number">2</div>
                    <div class="section-icon">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                    <h2 class="section-title">ENLACES A SITIOS EXTERNOS</h2>
                </div>
                <div class="section-content">
                    <p>El sitio web de <strong>Aerolíneas del Sur</strong> puede contener enlaces a otros sitios de Internet que operan bajo diferentes nombres de dominio o URL. Estos enlaces se proporcionan únicamente para la comodidad del usuario y no están bajo el control de nuestra empresa.</p>
                    
                    <p>Aerolíneas del Sur no garantiza ni representa, de manera expresa o implícita, el contenido, precisión o veracidad de dichos sitios externos. La inclusión de estos enlaces no implica respaldo, patrocinio, asociación ni afiliación alguna con Aerolíneas del Sur, salvo que se indique expresamente lo contrario.</p>
                </div>
            </section>

            <!-- Section 3: Consentimiento del Usuario -->
            <section class="privacy-section">
                <div class="section-header">
                    <div class="section-number">3</div>
                    <div class="section-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h2 class="section-title">CONSENTIMIENTO DEL USUARIO</h2>
                </div>
                <div class="section-content">
                    <p>Al proporcionar sus datos personales a través de nuestros formularios o plataformas digitales, usted otorga su <strong>consentimiento expreso e informado</strong> para el tratamiento de los mismos conforme a lo establecido en esta Política de Privacidad.</p>
                </div>
            </section>

            <!-- Section 4: Seguridad de los Datos -->
            <section class="privacy-section">
                <div class="section-header">
                    <div class="section-number">4</div>
                    <div class="section-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h2 class="section-title">SEGURIDAD DE LOS DATOS</h2>
                </div>
                <div class="section-content">
                    <p>Aerolíneas del Sur implementa <strong>medidas técnicas, administrativas y organizativas</strong> adecuadas para proteger la confidencialidad e integridad de los datos personales proporcionados, evitando accesos no autorizados, usos indebidos, pérdidas o alteraciones.</p>
                    
                    <p>Nuestros sistemas cumplen con estándares de seguridad aplicables, incluyendo cifrado de información sensible, firewalls y controles de acceso internos.</p>
                </div>
            </section>

            <!-- Section 5: Derechos del Usuario -->
            <section class="privacy-section">
                <div class="section-header">
                    <div class="section-number">5</div>
                    <div class="section-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h2 class="section-title">DERECHOS DEL USUARIO</h2>
                </div>
                <div class="section-content">
                    <p>Usted tiene derecho a:</p>
                    
                    <ul class="privacy-list">
                        <li>Acceder a sus datos personales.</li>
                        <li>Solicitar la rectificación de información incorrecta o desactualizada.</li>
                        <li>Solicitar la cancelación de sus datos.</li>
                        <li>Oponerse al tratamiento de sus datos para fines específicos.</li>
                    </ul>
                    
                    <div class="contact-info">
                        <p>Para ejercer cualquiera de estos derechos, puede contactarnos a través de nuestro correo electrónico oficial:</p>
                        <a href="mailto:contacto@aerolineadelsur.com.pe" class="contact-email">contacto@aerolineadelsur.com.pe</a>
                    </div>
                </div>
            </section>

            <!-- Section 6: Modificaciones -->
            <section class="privacy-section">
                <div class="section-header">
                    <div class="section-number">6</div>
                    <div class="section-icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h2 class="section-title">MODIFICACIONES A ESTA POLÍTICA</h2>
                </div>
                <div class="section-content">
                    <p>Aerolíneas del Sur se reserva el derecho de <strong>modificar esta política</strong> en cualquier momento. Cualquier cambio sustancial será notificado oportunamente a través de nuestro sitio web.</p>
                    
                    <p>Se recomienda revisar esta página periódicamente para mantenerse informado sobre cómo protegemos su información.</p>
                </div>
            </section>
        </div>

        <!-- Footer Section -->
        <section class="footer-section">
            <p class="footer-text">
                Última actualización: {{ date('d/m/Y') }} | &copy; {{ date('Y') }} Aerolíneas del Sur. Todos los derechos reservados.
            </p>
        </section>
    </div>
</div>

<!-- Scroll to Top Button -->
<button class="scroll-top" id="scrollTop" aria-label="Volver arriba">
    <i class="fas fa-chevron-up"></i>
</button>

<script>
// Scroll to Top Functionality
const scrollTopBtn = document.getElementById('scrollTop');

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        scrollTopBtn.classList.add('show');
    } else {
        scrollTopBtn.classList.remove('show');
    }
});

scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Smooth hover effects for privacy sections
const privacySections = document.querySelectorAll('.privacy-section');
privacySections.forEach(section => {
    section.addEventListener('mouseenter', () => {
        section.style.transform = 'translateY(-2px)';
    });
    
    section.addEventListener('mouseleave', () => {
        section.style.transform = 'translateY(0)';
    });
});

// Keyboard accessibility
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && scrollTopBtn.classList.contains('show')) {
        scrollTopBtn.focus();
    }
});

// Smooth scrolling for anchor links
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
@endsection