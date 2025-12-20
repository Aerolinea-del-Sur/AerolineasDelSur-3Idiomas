@php
$seo = seo()
    ->title('Registro ESNA | Información Fiscal Aerolínea del Sur')
    ->description('Información de registro ESNA y datos fiscales de Aerolínea del Sur. Transparencia y cumplimiento normativo en Perú.')
    ->keywords(['registro esna perú', 'datos fiscales aerolínea', 'información tributaria'])
    ->image(asset('img/logo.svg'))
    ->canonical(url(app()->getLocale() . '/esna'))
    ->addSchema([
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        'name' => 'Código ESNA',
        'description' => 'Compromiso contra la explotación sexual de niñas, niños y adolescentes'
    ]);
@endphp

@extends('a_EncabezadoFooter.princi')

@push('seo')
    {!! $seo !!}
@endpush

@section('content')
<link rel="stylesheet" href="{{ asset('public/css/footer/esna.css') }}">

<div class="esna-container">
    <div class="content-wrapper">
        <!-- Header Section -->
        <header class="esna-header">
            <div class="esna-logo">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h1 class="esna-title">Código de essna</h1>
            <p class="esna-subtitle">Contra la Explotación Sexual de Niñas, Niños y Adolescentes</p>
            <p style="color: var(--accent); font-weight: 600; font-size: 1.1rem;">Aerolíneas del Sur - Compromiso y Responsabilidad</p>
        </header>

        <!-- Introduction Section -->
        <section class="intro-section">
            <p class="intro-text">
                Como empresa comprometida con el turismo responsable y la protección de los derechos fundamentales, 
                <strong>Aerolíneas del Sur</strong> adopta este código de conducta para prevenir y combatir cualquier forma 
                de explotación sexual comercial de menores de edad.
            </p>
        </section>

        <!-- Image Section -->
        <section class="image-section">
            <img src="{{ asset('public/img/esna.png') }}" alt="Código de Conducta" class="code-image" onclick="openModal()">
        </section>

        <!-- Commitments Section -->
        <section class="commitments-section">
            <div class="commitments-grid">
                <div class="commitment-card">
                    <div class="card-number">01</div>
                    <div class="card-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3 class="card-title">Capacitación Continua</h3>
                    <p class="card-description">
                        Capacitar a nuestro personal en la identificación y prevención de situaciones 
                        de riesgo relacionadas con la explotación sexual comercial de menores.
                    </p>
                </div>

                <div class="commitment-card">
                    <div class="card-number">02</div>
                    <div class="card-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="card-title">Vigilancia Activa</h3>
                    <p class="card-description">
                        Mantener una vigilancia constante en nuestras instalaciones y servicios 
                        para detectar comportamientos sospechosos o situaciones irregulares.
                    </p>
                </div>

                <div class="commitment-card">
                    <div class="card-number">03</div>
                    <div class="card-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3 class="card-title">Denuncia Inmediata</h3>
                    <p class="card-description">
                        Reportar de manera inmediata a las autoridades competentes cualquier 
                        situación sospechosa o caso confirmado de explotación sexual de menores.
                    </p>
                </div>

                <div class="commitment-card">
                    <div class="card-number">04</div>
                    <div class="card-icon">
                        <i class="fas fa-ban"></i>
                    </div>
                    <h3 class="card-title">Tolerancia Cero</h3>
                    <p class="card-description">
                        Aplicar una política de tolerancia cero hacia cualquier forma de 
                        explotación sexual comercial de niñas, niños y adolescentes.
                    </p>
                </div>

                <div class="commitment-card">
                    <div class="card-number">05</div>
                    <div class="card-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="card-title">Colaboración Institucional</h3>
                    <p class="card-description">
                        Colaborar activamente con organizaciones gubernamentales y no gubernamentales 
                        en la lucha contra la explotación sexual infantil.
                    </p>
                </div>

                <div class="commitment-card">
                    <div class="card-number">06</div>
                    <div class="card-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="card-title">Promoción y Difusión</h3>
                    <p class="card-description">
                        Promover este código de conducta entre nuestros clientes, proveedores 
                        y socios comerciales para crear una red de protección integral.
                    </p>
                </div>
            </div>
        </section>

        <!-- Legal Section -->
        <section class="legal-section">
            <p class="legal-text">
                <i class="fas fa-balance-scale"></i>
                Este código de conducta está en conformidad con la Ley N° 28251 y demás normativas 
                vigentes en Perú para la prevención de la explotación sexual comercial de menores de edad.
            </p>
        </section>
    </div>
</div>

<!-- Modal for Image -->
<div id="imageModal" class="modal" onclick="closeModal()">
    <div class="modal-content">
        <span class="modal-close" onclick="closeModal()">&times;</span>
        <img src="{{ asset('public/img/esna.png') }}" alt="Código de Conducta" class="modal-image">
    </div>
</div>

<script>
function openModal() {
    document.getElementById('imageModal').style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.getElementById('imageModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});

// Prevent modal from closing when clicking on the image
document.querySelector('.modal-content').addEventListener('click', function(e) {
    e.stopPropagation();
});
</script>

@endsection
