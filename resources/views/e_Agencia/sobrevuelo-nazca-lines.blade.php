@extends('a_EncabezadoFooter.princi')

@php
// Custom SEO for Sobrevuelo Líneas de Nazca
$tour_name = 'Líneas de Nazca';
$seo = [
    'title' => str_replace(':tour', $tour_name, __('tours.seo.title_template')),
    'description' => str_replace(':tour', $tour_name, __('tours.seo.description_template')),
    'keywords' => 'sobrevuelo lineas de nazca, tour aéreo cusco nazca, vuelo privado nazca, maria reiche',
    'og_image' => asset('img/sobrevuelos/nazca-lines-1.webp'),
    'canonical' => url(app()->getLocale() . '/sobrevuelo-nazca-lines'),
];
@endphp
@section('content')

<?php
    $h1_1 = __('tours.nazca.title');
    $p_1 = __('tours.nazca.subtitle');

        $h2_1 = __('tours.nazca.details_title');
        $p_2 = __('tours.nazca.details_desc');

                $h4_1 = __('tours.max_group');
                $p_3 = __('tours.nazca.max_group');

                $h4_2 = __('tours.min_age');
                $p_4 = __('tours.nazca.min_age');

                $h4_3 = __('tours.duration');
                $p_5 = __('tours.nazca.duration');

            $h3_1 = __('tours.image_gallery');

        $h2_2 = __('tours.choquequirao.summary_title');

            $h3_2 = __('tours.choquequirao.highlights_title');

                $h4_4 = __('tours.nazca.highlight1_title');
                $p_6 = __('tours.nazca.highlight1_desc');

                $h4_5 = __('tours.nazca.highlight2_title');
                $p_7 = __('tours.nazca.highlight2_desc');

                $h4_6 = __('tours.nazca.highlight3_title');
                $p_8 = __('tours.nazca.highlight3_desc');

            $h3_3 = __('tours.choquequirao.stats_title');
        
        $h2_3 = __('tours.nazca.itinerary_title');

                $h4_7 = __('tours.nazca.step1_title');
                $p_9 = __('tours.nazca.step1_desc');

                $h4_8 = __('tours.nazca.step2_title');
                $p_10 = __('tours.nazca.step2_desc');

                $h4_9 = __('tours.nazca.step3_title');
                $p_11 = __('tours.nazca.step3_desc');

                $h4_10 = __('tours.nazca.step4_title');
                $p_12 = __('tours.nazca.step4_desc');

                $h4_11 = __('tours.nazca.step5_title');
                $p_13 = __('tours.nazca.step5_desc');

                $h4_12 = __('tours.nazca.step6_title');
                $p_14 = __('tours.nazca.step6_desc');

                $h4_12_extra1 = __('tours.nazca.step7_title');
                $p_14_extra1 = __('tours.nazca.step7_desc');

                $h4_12_extra2 = __('tours.nazca.step8_title');
                $p_14_extra2 = __('tours.nazca.step8_desc');

        $h2_4 = __('tours.choquequirao.inclusions_title');

            $h3_4 = __('tours.choquequirao.included_title');
            $h3_5 = __('tours.choquequirao.notincluded_title');

                $h4_13 = __('tours.choquequirao.notes_title');

        $h2_5 = __('tours.choquequirao.recommended_title');

                $h4_14 = 'Lago Titicaca';
                $p_17 = 'Sobrevuela el lago navegable más alto del mundo y sus islas flotantes.';

                $h4_15 = 'Vuelo Amazónico';
                $p_18 = 'Explora la selva peruana desde las alturas y observa la biodiversidad única.';

                $h4_16 = 'Choquequirao';
                $p_19 = 'Descubre la hermana sagrada de Machu Picchu en un vuelo exclusivo.';

            $h3_6 = __('tours.choquequirao.booking_title');

            $p_20 = __('tours.choquequirao.booking_note');
?>

<link rel="stylesheet" href="{{ asset('public/css/paginas/agencia/1_TourGeneral.css') }}">
<!-- Sección Hero -->
<section class="tour-hero">
    <div class="hero-background">
        <img src="{{ asset('img/sobrevuelos/nazca-lines-1.webp') }}" alt="Líneas de Nazca desde el aire">
        <div class="hero-overlay"></div>
    </div>
    <div class="hero-content">
        <div class="tour-badges">
            <span class="badge popular">SOBREVUELO</span>
            <span class="badge exclusive">EXCLUSIVO</span>
        </div>
        <h1 class="tour-title"><?= $h1_1 ?></h1>
        <p class="tour-subtitle"><?= $p_1 ?></p>

        <div class="tour-meta">
            <div class="meta-item">
                <i class="fas fa-clock"></i>
                <span>1 hora y 20 minutos</span>
            </div>
            <div class="meta-item">
                <i class="fas fa-users"></i>
                <span>Hasta 12 personas</span>
            </div>
            <div class="meta-item">
                <i class="fas fa-star"></i>
                <span>4.9/5</span>
            </div>
        </div>
    </div>
</section>

<!-- Detalles Generales -->
<section class="tour-details">
    <div class="container">
        <div class="details-grid">
            <div class="details-content">
                <h2 class="section-title"><?= $h2_1 ?></h2>
                <p class="tour-description"><strong><?= $p_2 ?></p>
                <div class="detail-items">
                    <div class="detail-item">
                        <i class="fas fa-users"></i>
                        <div>
                            <h4><?= $h4_1 ?></h4>
                            <p><?= $p_3 ?></p>

                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-user-plus"></i>
                        <div>
                            <h4><?= $h4_2 ?></h4>
                            <p><?= $p_4 ?></p>
                        </div>
                    </div>
                    <div class="detail-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h4><?= $h4_3 ?></h4>
                            <p><?= $p_5 ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-section">
                <h3><?= $h3_1 ?></h3>
                <div class="image-carousel">
                    <div class="carousel-container" id="carouselContainer">
                        <div class="carousel-slide active">
                            <img src="{{ asset('img/sobrevuelos/nazca-lines-1.webp') }}" alt="Líneas de Nazca">
                        </div> 
                        <div class="carousel-slide">
                            <img src="{{ asset('img/sobrevuelos/nazca-lines-2.webp') }}" alt="Geoglifos Nazca">
                        </div>
                        <div class="carousel-slide">
                            <img src="{{ asset('img/sobrevuelos/nazca-lines-3.webp') }}" alt="Sobrevuelo Nazca">
                        </div>
                        <div class="carousel-slide">
                            <img src="{{ asset('img/sobrevuelos/nazca-lines-4.webp') }}" alt="Avioneta Nazca">
                        </div>
                    </div>
                    <button class="carousel-btn prev" onclick="moveSlide(-1)">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="carousel-btn next" onclick="moveSlide(1)">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <div class="carousel-indicators">
                        <span class="indicator active" onclick="currentSlide(1)"></span>
                        <span class="indicator" onclick="currentSlide(2)"></span>
                        <span class="indicator" onclick="currentSlide(3)"></span>
                        <span class="indicator" onclick="currentSlide(4)"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Resumen del Viaje -->
<section class="trip-summary">
    <div class="container">
        <h2 class="section-title"><?= $h2_2 ?></h2>
        <div class="summary-grid">
            <div class="highlights">
                <h3><?= $h3_2 ?></h3>
                <div class="highlight-items">
                    <div class="highlight-item">
                        <i class="fas fa-mountain"></i>
                        <h4><?= $h4_4 ?></h4>
                        <p><?= $p_6 ?></p>

                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-camera-retro"></i>
                        <h4><?= $h4_5 ?></h4>
                        <p><?= $p_7 ?></p>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-history"></i>
                        <h4><?= $h4_6 ?></h4>
                        <p><?= $p_8 ?></p>
                    </div>
                </div>
            </div>
            <div class="statistics">
                <h3><?= $h3_3 ?></h3>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">1</div>
                        <div class="stat-label">hora y 20 minutos</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">1</div>
                        <div class="stat-label">Lugares Clave</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">600</div>
                        <div class="stat-label">Km recorridos</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Conformidad</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Itinerario Detallado -->
<section class="detailed-itinerary">
    <div class="container">
        <h2 class="section-title"><?= $h2_3 ?></h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4><?= $h4_7 ?></h4>
                    <p><?= $p_9 ?></p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4><?= $h4_8 ?></h4>
                    <p><?= $p_10 ?></p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4><?= $h4_9 ?></h4>
                    <p><?= $p_11 ?></p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4><?= $h4_10 ?></h4>
                    <p><?= $p_12 ?></p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4><?= $h4_11 ?></h4>
                    <p><?= $p_13 ?></p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4><?= $h4_12 ?></h4>
                    <p><?= $p_14 ?></p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4><?= $h4_12_extra1 ?></h4>
                    <p><?= $p_14_extra1 ?></p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4><?= $h4_12_extra2 ?></h4>
                    <p><?= $p_14_extra2 ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inclusiones -->
<section class="inclusions">
    <div class="container">
        <h2 class="section-title"><?= $h2_4 ?></h2>
        <div class="inclusions-grid">
            <div class="included">
                <h3><i class="fas fa-check-circle"></i><?= $h3_4 ?></h3>
                <ul>
                    <li><i class="fas fa-check"></i> <?= __('tours.common.included1') ?></li>
                    <li><i class="fas fa-check"></i> <?= __('tours.common.included2') ?></li>
                    <li><i class="fas fa-check"></i> <?= __('tours.common.included3') ?></li>
                    <li><i class="fas fa-check"></i> <?= __('tours.common.included4') ?></li>
                    <li><i class="fas fa-check"></i> <?= __('tours.common.included5') ?></li>
                    <li><i class="fas fa-check"></i> <?= __('tours.common.included6') ?></li>
                </ul>
            </div>
            <div class="not-included">
                <h3><i class="fas fa-times-circle"></i><?= $h3_5 ?></h3>
                <ul>
                    <li><i class="fas fa-times"></i> <?= __('tours.common.notincluded1') ?></li>
                    <li><i class="fas fa-times"></i> <?= __('tours.common.notincluded2') ?></li>
                    <li><i class="fas fa-times"></i> <?= __('tours.common.notincluded3') ?></li>
                </ul>
            </div>
        </div>
        <div class="important-notes">
            <h4><i class="fas fa-exclamation-triangle"></i><?= $h4_13 ?></h4>
            <ul>
                <li><?= __('tours.common.note1') ?></li>
                <li><?= __('tours.common.note2') ?></li>
                <li><?= __('tours.common.note3') ?></li>
            </ul>
        </div>
    </div>
</section>

<!-- Tours Recomendados -->
<section class="recommended-tours">
    <div class="container">
        <h2 class="section-title"><?= $h2_5 ?></h2>
        <div class="tours-grid">
            <div class="tour-card">
                <div class="tour-image">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Líneas de Nazca">
                    <div class="tour-badge">POPULAR</div>
                </div>
                <div class="tour-content">
                    <h4><?= $h4_14 ?></h4>
                    <p><?= $p_17 ?></p>
                    <div class="tour-details">
                        <span><i class="fas fa-clock"></i> 1.5 horas</span>
                        <span><i class="fas fa-users"></i> 4 personas</span>
                    </div>
                    <div class="tour-footer">
                        <span class="tour-more">Conoce más >></span>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-image">
                    <img src="https://images.unsplash.com/photo-1583416750470-965b2707b355?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Vuelo Amazónico">
                    <div class="tour-badge">NUEVO</div>
                </div>
                <div class="tour-content">
                    <h4><?= $h4_15 ?></h4>
                    <p><?= $p_18 ?></p>
                    <div class="tour-details">
                        <span><i class="fas fa-clock"></i> 3 horas</span>
                        <span><i class="fas fa-users"></i> 6 personas</span>
                    </div>
                    <div class="tour-footer">
                        <span class="tour-more">Conoce más >></span>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-image">
                    <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Costa Peruana">
                    <div class="tour-badge">EXCLUSIVO</div>
                </div>
                <div class="tour-content">
                    <h4><?= $h4_16 ?></h4>
                    <p><?= $p_19 ?></p>
                    <div class="tour-details">
                        <span><i class="fas fa-clock"></i> 2.5 horas</span>
                        <span><i class="fas fa-users"></i> 5 personas</span>
                    </div>
                    <div class="tour-footer">
                        <span class="tour-more">Conoce más >></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Formulario de Reserva Lateral -->
    <div class="booking-sidebar" id="bookingSidebar">
        <div class="booking-form-container">
            <div class="booking-header">
                <h3><?= $h3_6 ?></h3>
                <button class="close-form" onclick="toggleBookingForm()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form class="booking-form" id="bookingForm" method="POST" action="{{ route('turismo.send') }}">
                @csrf
                <div class="form-group">
                    <label for="fullName">Nombre Completo *</label>
                    <input type="text" id="fullName" name="fullName" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Teléfono *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="tourDate">Fecha del Tour *</label>
                    <input type="date" id="tourDate" name="tourDate" required>
                </div>
                <div class="form-group">
                    <label for="tourName">Nombre del Tour *</label>
                    <input type="text" id="tourName" name="tourName" value="Sobrevuelo Líneas de Nazca" required readonly>
                </div>
                <div class="form-group">
                    <label for="passengers">Número de Pasajeros *</label>
                    <select id="passengers" name="passengers" required>
                        <option value="">Seleccionar...</option>
                        <option value="1">1 Pasajero</option>
                        <option value="2">2 Pasajeros</option>
                        <option value="3">3 Pasajeros</option>
                        <option value="4">4 Pasajeros</option>
                        <option value="5">5 Pasajeros</option>
                        <option value="6">6 Pasajeros</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="specialRequests">Solicitudes Especiales</label>
                    <textarea id="specialRequests" name="specialRequests" rows="3" placeholder="Alergias, necesidades especiales, etc."></textarea>
                </div>
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i>
                    Enviar Solicitud
                </button>
                <p class="form-note"><?= $p_20 ?></p>
            </form>
        </div>
    </div>

    <!-- Botón de Reserva Flotante -->
    <div class="floating-booking">
        <button class="booking-btn" onclick="toggleBookingForm()">
            <i class="fas fa-calendar-check"></i>
            Reservar Tour
        </button>
    </div>
<script>
document.getElementById('bookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // 🔥 CORRECCIÓN: Usar la clase en lugar del ID que no existe
    const submitBtn = this.querySelector('.submit-btn');
    const originalText = submitBtn.innerHTML;
    
    // Limpiar mensajes anteriores
    clearErrors();
    hideMessage();
    
    // Mostrar loading
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
    submitBtn.disabled = true;

    // Obtener datos del formulario
    const formData = new FormData(this);

    // Enviar via AJAX
    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value, // Agregar CSRF
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showMessage(data.message, 'success');
            this.reset();
        } else {
            if (data.errors) {
                displayErrors(data.errors);
            } else {
                showMessage(data.message, 'error');
            }
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showMessage('Error de conexión. Por favor, intenta nuevamente.', 'error');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// 🔥 CORRECCIÓN: Mejorar la función displayErrors
function displayErrors(errors) {
    for (const field in errors) {
        const inputElement = document.getElementById(field);
        if (inputElement) {
            // Agregar estilo de error al input
            inputElement.style.borderColor = '#dc3545';
            
            // Crear mensaje de error si no existe
            let errorElement = document.getElementById(field + 'Error');
            if (!errorElement) {
                errorElement = document.createElement('span');
                errorElement.id = field + 'Error';
                errorElement.className = 'error-message';
                errorElement.style.cssText = 'color: #dc3545; font-size: 0.875em; display: block; margin-top: 5px;';
                inputElement.parentNode.appendChild(errorElement);
            }
            errorElement.textContent = errors[field][0];
        }
    }
}

// 🔥 CORRECCIÓN: Mejorar la función clearErrors
function clearErrors() {
    // Limpiar estilos de inputs
    const inputs = document.querySelectorAll('#bookingForm input, #bookingForm select, #bookingForm textarea');
    inputs.forEach(input => {
        input.style.borderColor = '';
    });
    
    // Eliminar mensajes de error
    const errorElements = document.querySelectorAll('.error-message');
    errorElements.forEach(element => {
        element.remove();
    });
}

// 🔥 CORRECCIÓN: Mejorar la función showMessage
function showMessage(message, type) {
    // Crear contenedor si no existe
    let messageDiv = document.getElementById('formMessages');
    if (!messageDiv) {
        messageDiv = document.createElement('div');
        messageDiv.id = 'formMessages';
        document.querySelector('.booking-form').prepend(messageDiv);
    }
    
    messageDiv.innerHTML = `
        <div class="alert alert-${type}" style="
            padding: 12px 16px;
            margin-bottom: 20px;
            border-radius: 8px;
            font-weight: 500;
            ${type === 'success' ? 
                'background-color: #d4edda; border: 1px solid #c3e6cb; color: #155724;' : 
                'background-color: #f8d7da; border: 1px solid #f5c6cb; color: #721c24;'
            }
        ">
            ${message}
        </div>
    `;
    messageDiv.style.display = 'block';

    // Auto-ocultar mensajes de éxito
    if (type === 'success') {
        setTimeout(() => {
            if (messageDiv) messageDiv.style.display = 'none';
        }, 5000);
    }
}

function hideMessage() {
    const messageDiv = document.getElementById('formMessages');
    if (messageDiv) {
        messageDiv.style.display = 'none';
    }
}

// Establecer fecha mínima como hoy
document.getElementById('tourDate').min = new Date().toISOString().split('T')[0];
</script>
<script>
    // Smooth scrolling para enlaces internos
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

    // Efecto parallax en hero
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.tour-hero');
        if (hero) {
            const heroBackground = hero.querySelector('.hero-background img');
            if (heroBackground) {
                heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        }
    });

    // Animación de aparición para elementos
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observar elementos para animación
    document.querySelectorAll('.detail-item, .highlight-item, .timeline-item, .tour-card').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Funcionalidad del carrusel
    let currentSlideIndex = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.indicator');
    const totalSlides = slides.length;

    function showSlide(index) {
        const container = document.getElementById('carouselContainer');
        const slideWidth = slides[0].offsetWidth;
        container.style.transform = `translateX(-${index * slideWidth}px)`;
        
        // Actualizar indicadores
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === index);
        });
    }

    function moveSlide(direction) {
        currentSlideIndex += direction;
        
        if (currentSlideIndex >= totalSlides) {
            currentSlideIndex = 0;
        } else if (currentSlideIndex < 0) {
            currentSlideIndex = totalSlides - 1;
        }
        
        showSlide(currentSlideIndex);
    }

    function currentSlide(index) {
        currentSlideIndex = index - 1;
        showSlide(currentSlideIndex);
    }

    // Auto-play del carrusel
    setInterval(() => {
        moveSlide(1);
    }, 5000);

    // Ajustar carrusel en redimensionamiento de ventana
    window.addEventListener('resize', () => {
        showSlide(currentSlideIndex);
    });

    // ===== FUNCIONALIDAD DEL FORMULARIO DE RESERVA =====
    function toggleBookingForm() {
        const bookingSidebar = document.getElementById('bookingSidebar');
        bookingSidebar.classList.toggle('active');
        
        if (bookingSidebar.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = 'auto';
        }
    }

    // Cerrar formulario con tecla Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            const bookingSidebar = document.getElementById('bookingSidebar');
            if (bookingSidebar.classList.contains('active')) {
                toggleBookingForm();
            }
        }
    });

    // Manejar envío del formulario
    const bookingForm = document.getElementById('bookingForm');
    if (bookingForm) {
        bookingForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Validar campos requeridos
            const requiredFields = bookingForm.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = '#e74c3c';
                } else {
                    field.style.borderColor = '#ddd';
                }
            });
            
            if (isValid) {
                alert('¡Gracias por tu solicitud! Te contactaremos en las próximas 24 horas para confirmar tu reserva.');
                toggleBookingForm();
                bookingForm.reset();
            } else {
                alert('Por favor, completa todos los campos obligatorios.');
            }
        });
    }

    // Establecer fecha mínima como hoy
    const tourDateInput = document.getElementById('tourDate');
    if (tourDateInput) {
        const today = new Date().toISOString().split('T')[0];
        tourDateInput.min = today;
    }
</script>
@endsection