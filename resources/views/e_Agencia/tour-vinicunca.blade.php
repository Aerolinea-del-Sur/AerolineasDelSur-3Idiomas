@php
$tour_name = 'Vinicunca';
$seo = seo()
    ->title(str_replace(':tour', $tour_name, __('tours.seo.title_template')))
    ->description(str_replace(':tour', $tour_name, __('tours.seo.description_template')))
    ->keywords(['tour vinicunca', 'montaña 7 colores', 'rainbow mountain peru', 'excursión cusco vinicunca', 'tour rainbow mountain'])
    ->image(asset('img/tours/vinicunca-7-colores.jpg'))
    ->canonical(url(app()->getLocale() . '/agencia/vinicunca'))
    ->addSchema([
        '@context' => 'https://schema.org',
        '@type' => 'TouristAttraction',
        'name' => 'Tour Vinicunca'
    ]);
@endphp

@extends('a_EncabezadoFooter.princi')

@push('seo')
    {!! $seo !!}
@endpush


@section('content')

<?php
    $h1_1 = __('tours.vinicunca.title');
    $p_1 = __('tours.vinicunca.subtitle');

        $h2_1 = __('tours.tour_details');
        $p_2 = __('tours.vinicunca.description');
                $h4_1 = __('tours.max_group');
                $p_3 = '6 personas';

                $h4_2 = __('tours.min_age');
                $p_4 = 'Ninguna';

                $h4_3 = __('tours.duration');
                $p_5 = '1 día';

            $h3_1 = __('tours.image_gallery');

        $h2_2 = 'Resumen del Viaje';

            $h3_2 = 'Aspectos Destacados';

                $h4_4 = 'Vinicunca';
                $p_6 = 'Conoceras la Montaña de 7 Colores, un lugar colorido con paisajes impresionantes.';

                $h4_5 = 'Fotografía Paisajes';
                $p_7 = 'Captura tomas espectaculares de los pueblos, paisajes y costrucciones milenarias.';

                $h4_6 = 'Historia y vistas';
                $p_8 = 'El guía te narrará la historia del lugar mientras recorres el sendero hasta la montaña.';

            $h3_3 = 'Estadísticas del Tour';
        
        $h2_3 = 'Itinerario Detallado';

                $h4_7 = '1. Recojo y salida temprana';
                $p_9 = 'Nuestro recorrido inicia muy temprano, entre las 4:00 y 4:30 a.m., con el recojo desde tu alojamiento en Cusco. Partimos hacia el sur de la región, disfrutando del amanecer entre montañas y pintorescos paisajes andinos.';

                $h4_8 = '2. Desayuno en Cusipata';
                $p_10 = 'Tras dos horas de viaje, llegamos a la localidad de Cusipata, donde te espera un desayuno nutritivo elaborado con insumos locales, perfecto para cargar energías antes de la caminata.';

                $h4_9 = '3. Inicio de la caminata';
                $p_11 = 'Continuamos el trayecto en transporte por 40 minutos adicionales hasta llegar al punto de partida, ubicado a unos 4,000 m.s.n.m. Desde aquí comienza la caminata de aproximadamente 2 horas, rodeados de montañas, aire fresco y un entorno tranquilo.';

                $h4_10 = '4. Llegada a la Montaña Arcoíris';
                $p_12 = 'Alcanzamos la cima de Vinicunca a 5,036 m.s.n.m., donde serás testigo de un espectáculo natural único: las formaciones geológicas que dan vida a la famosa Montaña de 7 Colores. Tendrás tiempo libre para contemplar el paisaje y tomar fotografías.';

                $h4_11 = '5. Retorno y almuerzo';
                $p_13 = 'Iniciamos el descenso de 2 horas hasta encontrarnos nuevamente con nuestro transporte. De regreso en Cusipata, disfrutaremos de un almuerzo tradicional andino que pondrá el broche final a la experiencia.';

                $h4_12 = '6. Regreso a Cusco';
                $p_14 = 'Finalmente, retornamos a la ciudad del Cusco con llegada aproximada entre las 4:00 y 4:30 p.m., cerrando una jornada inolvidable.';

        $h2_4 = 'Inclusiones del Tour';

            $h3_4 = 'Incluido';
            $h3_5 = 'No Incluido';

                $h4_13 = 'Notas Importantes';

        $h2_5 = 'Otros Tours Recomendados';

                $h4_14 = 'Líneas de Nazca';
                $p_17 = 'Descubre los misteriosos geoglifos desde el aire en este tour de día completo.';

                $h4_15 = 'Vuelo Amazónico';
                $p_18 = 'Explora la selva peruana desde las alturas y observa la biodiversidad única.';

                $h4_16 = 'Costa Peruana';
                $p_19 = 'Sobrevuela la hermosa costa del Pacífico y las islas Ballestas.';

            $h3_6 = 'Reserva tu Tour';

            $p_20 = '* Campos obligatorios. Te contactaremos en 24 horas para confirmar tu reserva.';
?>

    <link rel="stylesheet" href="{{ asset('public/css/paginas/agencia/1_TourGeneral.css') }}">
    <!-- Sección Hero -->
    <section class="tour-hero">
        <div class="hero-background">
            <img src="https://images.pexels.com/photos/6921111/pexels-photo-6921111.jpeg" alt="Machu Picchu desde el aire">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="tour-badges">
                <span class="badge popular">POPULAR</span>
                <span class="badge exclusive">EXCLUSIVO</span>
            </div>
            <h1 class="tour-title"><?= $h1_1 ?></h1>
            <p class="tour-subtitle"><?= $p_1 ?></p>


            <div class="tour-meta">
                <div class="meta-item">
                    <i class="fas fa-clock"></i>
                    <span>1 día</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-users"></i>
                    <span>Hasta 6 personas</span>
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
                                <img src="/img/tours/vinicunca-1.webp" alt="Vista aérea de Machu Picchu">
                            </div>
                            <div class="carousel-slide">
                                <img src="/img/tours/vinicunca-2.webp" alt="Valle Sagrado desde el aire">
                            </div>
                            <div class="carousel-slide">
                                <img src="/img/tours/vinicunca-3.webp" alt="Montañas andinas">
                            </div>
                            <div class="carousel-slide">
                                <img src="/img/tours/vinicunca-4.webp" alt="Río Urubamba">
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
                            <div class="stat-label">Día</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">1</div>
                            <div class="stat-label">Lugar Turistico</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">7</div>
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
                        <li><i class="fas fa-check"></i> Transporte turístico (recojo desde el centro histórico de Cusco)</li>
                        <li><i class="fas fa-check"></i> Entradas a la Montaña de 7 Colores</li>
                        <li><i class="fas fa-check"></i> Guía profesional bilingüe (español - inglés)</li>
                        <li><i class="fas fa-check"></i> Desayuno y almuerzo en restaurante local</li>
                        <li><i class="fas fa-check"></i> Seguridad en ruta: oxígeno, botiquín, teléfonos satelitales y radios</li>
                        <li><i class="fas fa-check"></i> Servicio en grupo reducido (máx. 19 personas)</li>
                    </ul>
                </div>
                <div class="not-included">
                    <h3><i class="fas fa-times-circle"></i><?= $h3_5 ?></h3>
                    <ul>
                        <li><i class="fas fa-times"></i> Gastos personales, snacks o bebidas adicionales</li>
                        <li><i class="fas fa-times"></i> Alquiler de bastones o caballos</li>
                        <li><i class="fas fa-times"></i> Seguro de viaje personal</li>
                        <li><i class="fas fa-times"></i> Propinas</li>
                    </ul>
                </div>
            </div>
            <div class="important-notes">
                <h4><i class="fas fa-exclamation-triangle"></i><?= $h4_13 ?></h4>
                <ul>
                    <li>Se requiere documento de identidad válido</li>
                    <li>Cancelación hasta 24 horas antes</li>
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
                    <input type="text" id="tourName" name="tourName" value="Vuelo Panorámico sobre Machu Picchu" required readonly>
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