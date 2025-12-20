@php
$seo = seo()
    ->title(__('legal.terms.seo_title'))
    ->description(__('legal.terms.seo_description'))
    ->keywords(['términos condiciones aerolínea', 'política cancelación', 'condiciones uso'])
    ->image(asset('img/logo.svg'))
    ->canonical(url(app()->getLocale() . '/terminos-condiciones'))
    ->addSchema([
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        'name' => 'Términos y Condiciones',
        'description' => 'Términos y condiciones de servicio de Aerolínea del Sur'
    ]);
@endphp

@extends('a_EncabezadoFooter.princi')

@push('seo')
    {!! $seo !!}
@endpush

@section('content')
<link rel="stylesheet" href="{{ asset('public/css/footer/terminos.css') }}">

<div class="terminos-container">
    <div class="content-wrapper">
        <!-- Header Section -->
        <header class="terminos-header">
            <div class="terminos-logo">
                <i class="fas fa-file-contract"></i>
            </div>
            <h1 class="terminos-title">
                <i class="fas fa-file-contract"></i>
                <?= __('legal.terms.title') ?>
            </h1>
            <p class="terminos-subtitle"><?= __('legal.terms.subtitle') ?></p>
            <p style="color: var(--accent); font-weight: 600; font-size: 1rem;"><?= __('legal.terms.company_commitment') ?></p>
        </header>

        <!-- Introduction Section -->
        <section class="intro-section">
            <p class="intro-text">
                <strong>Aerolíneas del Sur</strong> declara estar firmemente comprometida con la privacidad de sus usuarios. La información personal que recopilamos de nuestros clientes se utiliza exclusivamente con el propósito de establecer contacto, gestionar reservas y mejorar la experiencia del usuario en nuestros servicios.
            </p>
        </section>

        <!-- Terms Sections -->
        <div class="terms-content">
            <!-- Section 1: Pagos y Reservas -->
            <section class="terms-section">
                <div class="section-header">
                    <div class="section-number">1</div>
                    <div class="section-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h2 class="section-title">PAGOS Y RESERVAS</h2>
                </div>
                <div class="subsection">
                    <div class="subsection-label">a)</div>
                    <div class="subsection-content">Las reservaciones pueden ser efectuadas mediante Web, Email y/o Teléfono.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">b)</div>
                    <div class="subsection-content">Para la reserva se solicita un depósito del 50% aproximado (se le indicará el monto necesario y los medios de pago), para la compra y/o servicios necesarios para la realización del tour.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">c)</div>
                    <div class="subsection-content">Una vez que haya confirmado el usuario con su depósito acordado, se procederá a separar los servicios o espacios disponibles y se enviará el formato de reserva vía E-MAIL para que el usuario llene con los datos que se le pide.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">d)</div>
                    <div class="subsection-content">Se realizará el cobro del saldo restante en las oficinas de la agencia, el pago podrá realizarse en efectivo o con tarjeta.</div>
                </div>
            </section>

            <!-- Section 2: Cancelaciones -->
            <section class="terms-section">
                <div class="section-header">
                    <div class="section-number">2</div>
                    <div class="section-icon">
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <h2 class="section-title">CANCELACIONES</h2>
                </div>
                <div class="subsection">
                    <div class="subsection-label">a)</div>
                    <div class="subsection-content">En caso de desistimiento de operaciones no tendrán reembolso los importes abonados en concepto de informe, gastos administrativos, sellados e intereses, sin embargo en caso de que el visitante no pueda viajar, su reserva quedará con fecha abierta para que pueda reprogramar su viaje.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">b)</div>
                    <div class="subsection-content">Cuando se trate de desistimiento que afecte a servicios contratados en firme por la agencia, el reembolso de los mismos estará sujeto a las condiciones contractuales bajo las cuales presten sus servicios las empresas respectivas. En todos los casos de reintegros, la agencia podrá retener el precio de los gastos incurridos más la comisión del diez por ciento de los servicios contratados con terceros.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">c)</div>
                    <div class="subsection-content">Se considera NO SHOW al visitante que no se presente a su servicio y se cobrará el 100% de la tarifa sin derecho a reclamo ni reembolso alguno.</div>
                </div>
            </section>

            <!-- Section 3: Los Precios Incluyen -->
            <section class="terms-section">
                <div class="section-header">
                    <div class="section-number">3</div>
                    <div class="section-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h2 class="section-title">LOS PRECIOS INCLUYEN</h2>
                </div>
                <div class="subsection">
                    <div class="subsection-label">a)</div>
                    <div class="subsection-content">Alojamiento en los hoteles mencionados en los itinerarios u otros de igual o mayor categoría, ocupando habitaciones simples, dobles, triples, etc. Según tarifa elegida, con baño privado e impuestos.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">b)</div>
                    <div class="subsection-content">Boletos de ingreso (Total o parcial según el tipo de tour), boletos de Bus (cuando sea necesario), Boleto de Tren turístico ida y retorno (según lo pactado).</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">c)</div>
                    <div class="subsection-content">Régimen de comidas según se indique en cada oportunidad.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">d)</div>
                    <div class="subsection-content">Visitas y excursiones que se mencionen. Traslados hasta y desde aeropuertos, terminales y hoteles, cuando se indique.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">e)</div>
                    <div class="subsection-content">Guía de viaje bilingüe (inglés, español) en cada tour.</div>
                </div>
            </section>

            <!-- Section 4: Servicios No Incluidos -->
            <section class="terms-section">
                <div class="section-header">
                    <div class="section-number">4</div>
                    <div class="section-icon">
                        <i class="fas fa-minus-circle"></i>
                    </div>
                    <h2 class="section-title">SERVICIOS O RUBROS NO INCLUIDOS</h2>
                </div>
                <div class="subsection">
                    <div class="subsection-label">a)</div>
                    <div class="subsection-content">Extras, bebidas, lavado de ropa, propinas, tasas de embarque, tasas sobre servicios, IVA y otros impuestos, actuales y/o futuros, ni ningún servicio que no se encuentre expresamente indicado en la orden de servicio emitida por el agente de viajes.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">b)</div>
                    <div class="subsection-content">Estadas, comidas y/o gastos adicionales o perjuicios producidos por cancelaciones, demoras en las salidas o llegadas de los medios de transporte, o por razones imprevistas ajenas a la empresa.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">c)</div>
                    <div class="subsection-content">Alimentación en ruta, excepto aquellas que estuviesen expresamente incluidas en los programas.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">d)</div>
                    <div class="subsection-content">Los gastos e intereses en las operaciones a crédito.</div>
                </div>
            </section>

            <!-- Section 5: Responsabilidad -->
            <section class="terms-section">
                <div class="section-header">
                    <div class="section-number">5</div>
                    <div class="section-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h2 class="section-title">RESPONSABILIDAD</h2>
                </div>
                <div class="subsection">
                    <div class="subsection-label">a)</div>
                    <div class="subsection-content">La empresa declara expresamente que actúa en el carácter de intermediaria en la reserva o contratación de los distintos servicios vinculados e incluidos en el respectivo tour o reservación de servicios: hoteles, medios de transportes u otros prestadores.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">b)</div>
                    <div class="subsection-content">La empresa no se responsabiliza por los hechos que se produzcan por caso fortuito o fuerza mayor, fenómenos climáticos o hechos de la naturaleza que acontezcan antes o durante el desarrollo del tour que impidan, demoren o de cualquier modo obstaculicen la ejecución total o parcial de las prestaciones comprometidas por la empresa.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">c)</div>
                    <div class="subsection-content">El Visitante, contratado el servicio debe presentarse y utilizar los servicios pactados; caso contrario, el prestador podrá exigirle al usuario el pago de la totalidad del precio o tarifa establecida.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">d)</div>
                    <div class="subsection-content">El Visitante declara que conoce y acepta en su integridad estas condiciones, las cuales constituyen el acuerdo único, total y excluyente de cualquier pacto o disposición legal en contrario, acerca de los términos, condiciones y restricciones de los servicios contratados.</div>
                </div>
            </section>

            <!-- Section 6: Alteraciones o Modificaciones -->
            <section class="terms-section">
                <div class="section-header">
                    <div class="section-number">6</div>
                    <div class="section-icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h2 class="section-title">ALTERACIONES O MODIFICACIONES</h2>
                </div>
                <div class="subsection">
                    <div class="subsection-label">a)</div>
                    <div class="subsection-content">La empresa se reserva el derecho, por razones técnicas u operativas, de alterar total o parcialmente el ordenamiento diario y/o de servicios que componen el tour, antes o durante la ejecución del mismo.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">b)</div>
                    <div class="subsection-content">Salvo condición expresa en contrario, los hoteles estipulados podrán ser cambiados por otro de igual o mayor categoría dentro del mismo núcleo urbano sin cargo alguno para el pasajero. Respecto de estas variaciones el pasajero no tendrá derecho a indemnización alguna.</div>
                </div>
                <div class="subsection">
                    <div class="subsection-label">c)</div>
                    <div class="subsection-content">Una vez comenzado el viaje, la suspensión, modificación o interrupción de los servicios por parte del pasajero por razones personales de cualquier índole, no dará lugar a reclamo alguno, reembolso o devolución alguna.</div>
                </div>
            </section>

            <!-- Section 7: Limitaciones al Derecho de Permanencia -->
            <section class="terms-section">
                <div class="section-header">
                    <div class="section-number">7</div>
                    <div class="section-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h2 class="section-title">LIMITACIONES AL DERECHO DE PERMANENCIA</h2>
                </div>
                <div class="single-content">
                    La empresa se reserva el derecho de hacer que abandone el tour en cualquier punto del mismo todo pasajero cuya conducta, modo de obrar, estado de salud u otras razones graves a juicio de la empresa provoque peligro o cause molestias a los restantes viajeros o pueda malograr el éxito de la excursión o el normal desarrollo de la misma.
                </div>
            </section>
        </div>

        <!-- Footer Section -->
        <section class="footer-section">
            <p class="footer-text">
                &copy; {{ date('Y') }} Aerolíneas del Sur. Todos los derechos reservados.
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

// Smooth hover effects for terms sections
const termsSections = document.querySelectorAll('.terms-section');
termsSections.forEach(section => {
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

// Print functionality
document.addEventListener('keydown', (e) => {
    if (e.ctrlKey && e.key === 'p') {
        e.preventDefault();
        window.print();
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