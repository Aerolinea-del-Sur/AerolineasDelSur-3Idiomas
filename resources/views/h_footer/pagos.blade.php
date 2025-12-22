@php
$seo = seo()
    ->title('Medios de Pago | Aerolínea del Sur - Opciones Seguras')
    ->description('Métodos de pago seguros para reservar tu vuelo privado: tarjetas de crédito, transferencias bancarias, PayPal y más. Pagos protegidos 100%.')
    ->keywords(['medios pago aerolínea', 'pago seguro vuelos', 'métodos pago perú'])
    ->image(asset('img/logo.svg'))
    ->canonical(url(app()->getLocale() . '/pagos'))
    ->addSchema([
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        'name' => 'Métodos de Pago',
        'description' => 'Opciones seguras de pago para servicios de vuelo privado'
    ]);
@endphp

@extends('a_EncabezadoFooter.princi')

@push('seo')
    {!! $seo !!}
@endpush

@section('content')
<link rel="stylesheet" href="{{ asset('public/css/footer/pagos.css') }}">

<div class="pagos-container">
    <div class="content-wrapper">
        <!-- Header Section -->
        <header class="pagos-header">
            <div class="pagos-logo">
                <i class="fas fa-credit-card"></i>
            </div>
            <h1 class="pagos-title">Métodos de Pago</h1>
            <p class="pagos-subtitle">Opciones seguras y accesibles para tu comodidad</p>
            <p style="color: var(--accent); font-weight: 600; font-size: 1rem;">Aerolíneas del Sur - Facilidad y Seguridad</p>
        </header>

        <!-- Introduction Section -->
        <section class="intro-section">
            <p class="intro-text">
                En <strong>Aerolíneas del Sur</strong>, agencia de viajes y operador turístico, ofrecemos nuestros servicios tanto a clientes finales como a agencias de viajes mayoristas nacionales e internacionales. Conscientes de la diversidad de necesidades de nuestros clientes, ponemos a su disposición diferentes métodos de pago seguros y accesibles.
            </p>
        </section>

        <!-- Payment Methods Grid -->
        <section class="payment-methods-grid">
            <!-- Cash Payment -->
            <article class="payment-method">
                <div class="method-header">
                    <div class="method-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h2 class="method-title">1. Pago en Efectivo</h2>
                </div>
                <div class="method-content">
                    <p>Los pagos en efectivo pueden realizarse de manera presencial en nuestra oficina comercial, en moneda nacional (soles – S/) o en dólares estadounidenses (US$), de acuerdo con la tarifa establecida del servicio contratado.</p>
                    <p><strong>Importante:</strong> No se aceptan billetes o monedas falsificadas. En caso de detectarse alguno, se procederá conforme a lo establecido por la ley.</p>
                </div>
            </article>

            <!-- Bank Transfers -->
            <article class="payment-method">
                <div class="method-header">
                    <div class="method-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h2 class="method-title">2. Transferencias y Depósitos Bancarios</h2>
                </div>
                <div class="method-content">
                    <p>Los pagos realizados mediante transferencia bancaria o depósito serán válidos únicamente una vez que el cliente envíe el comprobante de la operación a las cuentas bancarias designadas por Aerolíneas del Sur.</p>
                    <p><strong>Nota:</strong> Es importante conservar el comprobante de la transacción para validar el pago correctamente.</p>
                </div>
            </article>

            <!-- Online Payment Links -->
            <article class="payment-method">
                <div class="method-header">
                    <div class="method-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h2 class="method-title">3. Pago mediante Enlace (Niubiz e Izipay)</h2>
                </div>
                <div class="method-content">
                    <p>El cliente deberá solicitar a su asesor de ventas la tarifa correspondiente para pagos con tarjeta y el enlace de pago.</p>
                    <p>Posteriormente, deberá completar sus datos personales, ingresar la información de su tarjeta y proceder con el pago.</p>
                    <p>Una vez finalizado el proceso, la confirmación del pago será enviada al correo electrónico registrado por Aerolíneas del Sur.</p>
                    <div class="cards-accepted">
                        <strong>Tarjetas Aceptadas:</strong>
                        VISA, MASTERCARD, AMERICAN EXPRESS, DINERS CLUB
                    </div>
                </div>
            </article>

            <!-- POS Payment -->
            <article class="payment-method">
                <div class="method-header">
                    <div class="method-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h2 class="method-title">4. Pago con Tarjeta en Oficina (POS)</h2>
                </div>
                <div class="method-content">
                    <p>El cliente debe solicitar el servicio de pago con tarjeta y presentar su tarjeta en el terminal POS en nuestra oficina. Se procederá con el ingreso del PIN y/o firma, según el tipo de tarjeta.</p>
                    <p>El comprobante será enviado por mensaje de texto al número de teléfono móvil del cliente.</p>
                    <div class="cards-accepted">
                        <strong>Tarjetas Aceptadas:</strong>
                        VISA, MASTERCARD, AMERICAN EXPRESS, DINERS CLUB
                    </div>
                </div>
            </article>
        </section>

        <!-- Validation Section -->
        <section class="validation-section">
            <div class="validation-header">
                <div class="validation-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h2 class="validation-title">Validación de Pagos</h2>
            </div>
            <p class="validation-text">
                Todos los pagos realizados por cualquiera de los medios mencionados deberán ser validados por Aerolíneas del Sur para garantizar la correcta ejecución de la transacción y la entrega de los servicios contratados.
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

// Smooth hover effects for payment methods
const paymentMethods = document.querySelectorAll('.payment-method');
paymentMethods.forEach(method => {
    method.addEventListener('mouseenter', () => {
        method.style.transform = 'translateY(-5px)';
    });
    
    method.addEventListener('mouseleave', () => {
        method.style.transform = 'translateY(0)';
    });
});

// Keyboard accessibility
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && scrollTopBtn.classList.contains('show')) {
        scrollTopBtn.focus();
    }
});

// Print functionality
document.addEventListener('keydown', (e) => {
    if (e.ctrlKey && e.key === 'p') {
        e.preventDefault();
        window.print();
    }
});
</script>

@endsection