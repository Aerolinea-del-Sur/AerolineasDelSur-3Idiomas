@extends('a_EncabezadoFooter.princi')

@php
// Custom SEO for Contact page
$seo = [
    'title' => __('contact.seo.title'),
    'description' => __('contact.seo.description'),
    'keywords' => 'contacto aerolínea del sur, reservar vuelo privado perú, cotización vuelo charter, oficina cusco',
    'og_image' => asset('img/contacto/oficina-cusco.jpg'),
    'canonical' => url(app()->getLocale() . '/contacto'),
];
@endphp
@section('content')
<?php
    // Variables de contenido
    $h1_1_1 = __('contact.hero.title1');
    $h1_1_2 = __('contact.hero.title2');
    $h1_1_3 = __('contact.hero.title3');
    $p_1 = __('contact.hero.subtitle');

    $h2_1 = __('contact.form.title');
    $p_2 = __('contact.form.subtitle');

    $h2_2 = __('contact.info.title');
    $p_3 = __('contact.info.subtitle');

    $h3_1 = __('contact.info.phone');
    $p_4 = '+51 932 475 995';

    $h3_2 = __('contact.info.email');
    $p_5 = 'contacto@aerolineadelsur.com.pe';

    $h3_3 = __('contact.info.office');
    $p_6 = 'Centro Comercial San Andrés oficina nro 314 tercer piso,';

    $h3_4 = __('contact.info.whatsapp');
    $p_7 = '+51 932 475 995';
    
    $h2_3 = __('contact.schedule.title');
    $p_8 = __('contact.schedule.subtitle');

    $h3_5 = __('contact.schedule.phone');
    $h3_6 = __('contact.schedule.office');
    $h3_7 = __('contact.schedule.whatsapp');
    $h3_8 = __('contact.schedule.email');

    $h2_4 = __('contact.map.title');
    $p_9 = __('contact.map.subtitle');

    $h3_9 = __('contact.map.office');
?>

<link rel="stylesheet" href="{{ asset('public/css/paginas/contacto.css') }}">

<!-- Elementos flotantes decorativos -->
<div class="floating-elements">
    <div class="floating-circle floating-circle-1"></div>
    <div class="floating-circle floating-circle-2"></div>
    <div class="floating-circle floating-circle-3"></div>
</div>

<!-- Sección Hero Asimétrica -->
<section class="hero-section">
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-left">
                <div class="hero-badge">
                    <i class="fas fa-paper-plane"></i>
                    <span>Conectamos Destinos</span>
                </div>
                <h1 class="hero-title">
                    <span class="title-line-1"><?= $h1_1_1 ?></span>
                    <span class="title-line-2"><?= $h1_1_2 ?><span class="highlight"><?= $h1_1_3 ?></span></span>
                </h1>
                <p class="hero-description"><?= $p_1 ?></p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Atención</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">+50</span>
                        <span class="stat-label">Destinos</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">15min</span>
                        <span class="stat-label">Respuesta</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Sección Principal de Contacto -->
<section class="contact-main">
    <div class="contact-container">
        <div class="contact-grid">
            <!-- Formulario de Contacto -->
            <div class="contact-form-section">
                <div class="form-header">
                    <h2><?= $h2_1 ?></h2>
                    <p><?= $p_2 ?></p>
                </div>
                
                <!-- Contenedor de alertas -->
                <div id="alertContainer"></div>
                
                <form class="contact-form" id="contactForm" method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">Nombre</label>
                            <input type="text" id="firstName" name="firstName" required>
                            <span class="form-error" id="firstNameError"></span>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Apellido</label>
                            <input type="text" id="lastName" name="lastName" required>
                            <span class="form-error" id="lastNameError"></span>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" id="email" name="email" required>
                            <span class="form-error" id="emailError"></span>
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="tel" id="phone" name="phone">
                            <span class="form-error" id="phoneError"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <select id="subject" name="subject" required>
                            <option value="">Selecciona un asunto</option>
                            <option value="reserva">Nueva Reserva</option>
                            <option value="modificacion">Modificar Reserva</option>
                            <option value="cancelacion">Cancelación</option>
                            <option value="equipaje">Consulta de Equipaje</option>
                            <option value="reembolso">Reembolso</option>
                            <option value="otro">Otro</option>
                        </select> 
                        <span class="form-error" id="subjectError"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" name="message" rows="5" placeholder="Describe tu consulta o solicitud..." required></textarea>
                        <span class="form-error" id="messageError"></span>
                    </div>
                    
                    <button type="submit" class="btn-submit">
                        <span class="btn-text">Enviar Mensaje</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
            
            <!-- Información de Contacto -->
            <div class="contact-info-section">
                <div class="info-header">
                    <h2><?= $h2_2 ?></h2>
                    <p><?= $p_3 ?></p>
                </div>
                
                <div class="contact-cards">
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="card-content">
                            <h3><?= $h3_1 ?></h3>
                            <p><?= $p_4 ?></p>
                            <span class="card-note">Lun - Dom: 24 horas</span>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="card-content">
                            <h3><?= $h3_2 ?></h3>
                            <p><?= $p_5 ?></p>
                            <span class="card-note">Respuesta en 24h</span>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="card-content">
                            <h3><?= $h3_3 ?></h3>
                            <p><?= $p_6 ?></p>
                            <span class="card-note">Lun - Vie: 8:00 - 18:00</span>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="card-content">
                            <h3><?= $h3_4 ?></h3>
                            <p><?= $p_7 ?></p>
                            <span class="card-note">Respuesta inmediata</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Horarios -->
<section class="schedule-section">
    <div class="schedule-container">
        <div class="schedule-header">
            <h2><?= $h2_3 ?></h2>
            <p><?= $p_8 ?></p>
        </div>
        
        <div class="schedule-grid">
            <div class="schedule-card">
                <div class="schedule-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3><?= $h3_5 ?></h3>
                <div class="schedule-times">
                    <div class="time-item">
                        <span class="day">Lunes - Viernes</span>
                        <span class="time">09:00 - 18:00</span>
                    </div>
                    <div class="time-item">
                        <span class="day">Sábados</span>
                        <span class="time">09:00 - 13:00</span>
                    </div>
                </div>
                <span class="schedule-note">Línea directa siempre disponible</span>
            </div>
            
            <div class="schedule-card">
                <div class="schedule-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3><?= $h3_6 ?></h3>
                <div class="schedule-times">
                    <div class="time-item">
                        <span class="day">Lunes - Viernes</span>
                        <span class="time">09:00 - 18:00</span>
                    </div>
                    <div class="time-item">
                        <span class="day">Sábados</span>
                        <span class="time">9:00 - 14:00</span>
                    </div>
                </div>
            </div>
            
            <div class="schedule-card">
                <div class="schedule-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3><?= $h3_7 ?></h3>
                <div class="schedule-times">
                    <div class="time-item">
                        <span class="day">Lunes - Viernes</span>
                        <span class="time">09:00 - 18:00</span>
                    </div>
                </div>
                <span class="schedule-note">Respuesta inmediata</span>
            </div>
            
            <div class="schedule-card">
                <div class="schedule-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3><?= $h3_8 ?></h3>
                <div class="schedule-times">
                    <div class="time-item">
                        <span class="day">Lunes - Domingo</span>
                        <span class="time">24 horas</span>
                    </div>
                </div>
                <span class="schedule-note">Respuesta en máximo 24h</span>
            </div>
        </div>
    </div>
</section>

<!-- Sección del Mapa -->
<section class="map-section">
    <div class="map-container">
        <div class="map-header">
            <h2><?= $h2_4 ?></h2>
            <p><?= $p_9 ?></p>
        </div>
        
        <div class="map-wrapper">
            <div class="map-info">
                <div class="location-card">
                    <h3><?= $h3_9 ?></h3>
                    <div class="location-details">
                        <div class="detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Centro Comercial San Andrés oficina nro 314 tercer piso</span>
                        </div>
                        <div class="detail">
                            <i class="fas fa-parking"></i>
                            <span>Cusco, Cusco, Perú</span>
                        </div>
                    </div>
                    <a href="https://share.google/mtdFazOYrQhJKk8uH" target="_blank" class="btn-directions">
                        <i class="fas fa-directions"></i>
                        Cómo llegar
                    </a>
                </div>
            </div>
            
            <div class="map-embed">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3879.266485043904!2d-71.9790049!3d-13.5192309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd7006d52ee81%3A0xa5c3ce65f758e4d1!2sCentro%20Comercial%20San%20Andr%C3%A9s!5e0!3m2!1ses-419!2spe!4v1762491088239!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // 🔹 Recolectar datos del formulario
        const datos = {
            firstName: document.getElementById('firstName').value.trim(),
            lastName: document.getElementById('lastName').value.trim(),
            email: document.getElementById('email').value.trim(),
            phone: document.getElementById('phone').value.trim(),
            subject: document.getElementById('subject').value,
            message: document.getElementById('message').value.trim(),
        };

        console.log("📤 Enviando datos:", datos);

        try {
            // 🔹 Mostrar mensaje de carga (opcional)
            const submitButton = form.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            submitButton.querySelector('.btn-text').textContent = "Enviando...";

            // 🔹 Enviar al backend Laravel (usa la ruta definida en `action="{{ route('contact.send') }}"`)
            const response = await fetch(form.action, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                },
                body: JSON.stringify(datos)
            });

            // 🔹 Verificar si la respuesta es JSON
            const contentType = response.headers.get("content-type");
            if (!contentType || !contentType.includes("application/json")) {
                console.error("❌ Respuesta no es JSON");
                const textResponse = await response.text();
                console.error("Respuesta recibida:", textResponse.substring(0, 300));
                throw new Error("El servidor no devolvió una respuesta JSON válida");
            }

            const resultado = await response.json();
            console.log("📥 Respuesta del servidor:", resultado);

            // 🔹 Mostrar mensaje al usuario
            if (resultado.success) {
                alert("✅ ¡Tu mensaje fue enviado correctamente!");
                form.reset();
            } else {
                alert("⚠️ Ocurrió un error: " + (resultado.message || "No se pudo enviar el mensaje"));
            }

        } catch (error) {
            console.error("❌ Error en el envío:", error);
            alert("Error al enviar el formulario. Revisa la consola para más detalles.");
        } finally {
            // 🔹 Restaurar botón
            const submitButton = form.querySelector('button[type="submit"]');
            submitButton.disabled = false;
            submitButton.querySelector('.btn-text').textContent = "Enviar Mensaje";
        }
    });
});
</script>

@endsection
