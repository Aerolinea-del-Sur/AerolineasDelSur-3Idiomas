@php
$seo = seo()
    ->title(__('services.main.seo.title'))
    ->description(__('services.main.seo.description'))
    ->keywords(['servicios aviación perú', 'vuelos charter cusco', 'transporte aéreo perú', 'servicios helicóptero', 'aviación ejecutiva'])
    ->image(asset('img/servicios-aviacion.jpg'))
    ->canonical(url(app()->getLocale() . '/servicio'));
@endphp

@extends('a_EncabezadoFooter.princi')

@push('seo')
    {!! $seo !!}
@endpush

@section('content')
<?php
    $h1_1 = __('services.main.title');
    $p_1 = __('services.main.subtitle');

            $h3_1 = __('common.nav.flights');
            $p_2 = __('services.main.flights_desc');

            $h3_2 = __('common.nav.overflights');
            $p_3 = __('services.main.overflights_desc');

            $h3_3 = __('common.nav.helicopter');
            $p_4 = __('services.main.helicopter_desc');

            $h3_4 = __('common.nav.aeromedical');
            $p_5 = __('services.main.aeromedical_desc');

            $h3_5 = __('common.nav.cargo');
            $p_6 = __('services.main.cargo_desc');

        $h2_1 = __('services.main.cta_title');
        $p_7 = __('services.main.cta_desc');
?>
<link rel="stylesheet" href="{{ asset('public/css/paginas/Servicio.css') }}">
    <!-- Encabezado de la página -->
    <header class="fleet-header">
        <div class="container">
            <h1 class="fleet-title"><?= $h1_1 ?></h1>
            <p class="fleet-subtitle"><?= $p_1 ?></p>
        </div>
    </header>
    <div class="services-container">
        <div class="services-list">
            
            <!-- Servicio 1: CONTENIDO | IMAGEN -->
            <a href="/vuelos" class="service-row" style="text-decoration: none; color: inherit;" title="Ver servicio de Vuelos Chárter">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fa fa-plane" style="font-size: 40px; color: #FFFFFF;"></i>
                    </div>
                    <h3><?= $h3_1 ?></h3>
                    <p><?= $p_2 ?></p>
                    <ul>
                        <li>Horarios flexibles</li>
                        <li>Máxima privacidad</li>
                        <li>Servicio personalizado</li>
                    </ul>
                </div>
                <div class="service-image">
                    <img src="/public/img/servicios/Servicios-1.webp" alt="Avión privado en vuelo" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </div>
            </a>
            <!-- Servicio 2: IMAGEN | CONTENIDO -->
            <a href="/agencia" class="service-row reverse" style="text-decoration: none; color: inherit;" title="Ir a Agencia - Sobrevuelo Andes Mágicos">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fa fa-rocket" style="font-size: 40px; color: #FFFFFF;"></i>
                    </div>
                    <h3><?= $h3_2 ?></h3>
                    <p><?= $p_3 ?></p>
                    <ul>
                        <li>Vistas panorámicas</li>
                        <li>Rutas escénicas</li>
                        <li>Experiencia inolvidable</li>
                    </ul>
                </div>
                <div class="service-image">
                    <img src="/public/img/servicios/Servicios-2.webp" alt="Sobrevuelo panorámico" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </div>
            </a>
            <!-- Servicio 3: CONTENIDO | IMAGEN -->
            <a href="/helicopteros" class="service-row" style="text-decoration: none; color: inherit;" title="Ver servicio de Helicópteros">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fa fa-helicopter" style="font-size: 40px; color: #FFFFFF;"></i>
                    </div>
                    <h3><?= $h3_3 ?></h3>
                    <p><?= $p_4 ?></p>
                    <ul>
                        <li>Acceso a zonas remotas</li>
                        <li>Transporte rápido</li>
                        <li>Operaciones especiales</li>
                    </ul>
                </div>
                <div class="service-image">
                    <img src="/public/img/servicios/Servicios-3.webp" alt="Helicóptero en vuelo" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </div>
            </a>
            <!-- Servicio 4: IMAGEN | CONTENIDO -->
            <a href="/aeromedico" class="service-row reverse" style="text-decoration: none; color: inherit;" title="Ver servicio Aeromédico">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fa fa-ambulance" style="font-size: 40px; color: #FFFFFF;"></i>
                    </div>
                    <h3><?= $h3_4 ?></h3>
                    <p><?= $p_5 ?></p>
                    <ul>
                        <li>Emergencias médicas</li>
                        <li>Equipamiento especializado</li>
                        <li>Personal médico calificado</li>
                    </ul>
                </div>
                <div class="service-image">
                    <img src="/public/img/servicios/Servicios-4.webp" alt="Ambulancia aérea médica" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </div>
            </a>
            <!-- Servicio 5: CONTENIDO | IMAGEN -->
            <a href="/carga" class="service-row" style="text-decoration: none; color: inherit;" title="Ver servicio de Carga Aérea">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fa fa-archive" style="font-size: 40px; color: #FFFFFF;"></i>
                    </div>
                    <h3><?= $h3_5 ?></h3>
                    <p><?= $p_6 ?></p>
                    <ul>
                        <li>Carga especializada</li>
                        <li>Máxima seguridad</li>
                        <li>Entrega eficiente</li>
                    </ul>
                </div>
                <div class="service-image">
                    <img src="/public/img/servicios/Servicios-5.webp" alt="Avión de carga" style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                </div>
            </a>
        </div>
        
        <!-- Sección de Contacto -->
        <div class="services-contact-section">
            <h2><?= $h2_1 ?></h2>
            <p><?= $p_7 ?></p>
            <a href="{{url(app()->getLocale() . '/contacto')}}" class="services-contact-btn">{{ __('common.button.contact', ['default' => 'Contactar Ahora']) }}</a>
        </div>
    </div>
@endsection