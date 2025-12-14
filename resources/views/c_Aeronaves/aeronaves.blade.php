@extends('a_EncabezadoFooter.princi')

@php
// Custom SEO for Aeronaves page
$seo = [
    'title' => 'Nuestra Flota de Aeronaves | Jets Privados y Helicópteros en Perú',
    'description' => 'Conozca nuestra moderna flota de aeronaves premium: jets privados Citation, Challenger, Gulfstream, King Air y helicópteros certificados para vuelos seguros en Perú.',
    'keywords' => 'flota aeronaves perú, jets privados cusco, citation perú, challenger perú, gulfstream cusco, king air perú',
    'og_image' => asset('img/flota-aeronaves.jpg'),
    'canonical' => url('/aeronaves'),
];
@endphp

@section('content')
<?php
    $h1_1 = 'Nuestra Flota de Aeronaves Premium';
    $p_1 = 'Jets privados y helicópteros modernos para vuelos seguros';

        $h2_1 = 'Nuestras Aeronaves';
        
            $h3_0 = 'King Air B200';

        $p_2 = 'Capacidad: 8 pax';
        $p_3 = 'Velocidad: 870 km/h';
        $p_4 = 'Peso Max: 11,181 kg';

            $h3_1 = 'King Air B350';

        $p_5 = 'Capacidad: 8 pax';
        $p_6 = 'Velocidad: 870 km/h';
        $p_7 = 'Peso Max: 11,181 kg';

            $h3_2 = 'Beechcraft 1900D';

        $p_8 = 'Capacidad: 8 pax';
        $p_9 = 'Velocidad: 870 km/h';
        $p_10 = 'Peso Max: 11,181 kg';

            $h3_3 = 'Mi 17';

        $p_11 = 'Capacidad: 8 pax';
        $p_12 = 'Velocidad: 870 km/h';
        $p_13 = 'Peso Max: 11,181 kg';

            $h3_4 = 'Jet Gulfstream G100';
        
        $p_14 = 'Capacidad: 14 pax';
        $p_15 = 'Velocidad: 935 km/h';
        $p_16 = 'Peso Max: 33,838kg';

            $h3_5 = 'Jet Gulfstream GIV';
        
        $p_17 = 'Capacidad: 6 pax';
        $p_18 = 'Velocidad: 782 km/h';
        $p_19 = 'Peso Max: 4,853 kg';
        
            $h3_6 = 'Honda Jet';

        $p_20 = 'Capacidad: 6 pax';
        $p_21 = 'Velocidad: 722 km/h';
        $p_22 = 'Peso Max: 4,800 kg';
        
            $h3_7 = 'Jet Phenom 100';

        $p_23 = 'Capacidad: 7 pax';
        $p_24 = 'Velocidad: 839 km/h';
        $p_25 = 'Autonomía: 3,650 km';
        
            $h3_8 = 'Jet Phenom 300';

        $p_26 = 'Capacidad: 10 pax';
        $p_27 = 'Velocidad: 870 km/h';
        $p_28 = 'Autonomía: 5,741 km';
        
            $h3_9 = 'Jet Challenger 300';

        $p_29 = 'Capacidad: 10 pax';
        $p_30 = 'Velocidad: 870 km/h';
        $p_31 = 'Autonomía: 6,297 km';
        
            $h3_10 = 'Jet Challenger 350';

        $p_32 = 'Capacidad: 12 pax';
        $p_33 = 'Velocidad: 850 km/h';
        $p_34 = 'Autonomía: 6,100 km';
        
            $h3_11 = 'Jet Challenger 601';

        $p_35 = 'Capacidad: 12 pax';
        $p_36 = 'Velocidad: 850 km/h';
        $p_37 = 'Autonomía: 7,620 km';
        
            $h3_12 = 'Jet Challenger 604';

        $p_38 = 'Capacidad: 12 pax';
        $p_39 = 'Velocidad: 870 km/h';
        $p_40 = 'Autonomía: 7,991 km';
        
            $h3_13 = 'Jet Challenger 605';

        $p_41 = 'Capacidad: 12 pax';
        $p_42 = 'Velocidad: 870 km/h';
        $p_43 = 'Autonomía: 7,408 km';
        
            $h3_14 = 'Jet Challenger 650';

        $p_44 = 'Capacidad: 16 pax';
        $p_45 = 'Velocidad: 850 km/h';
        $p_46 = 'Autonomía: 5,206 km';
        
            $h3_15 = 'Jet Challenger 850';

        $p_47 = 'Capacidad: 7 pax';
        $p_48 = 'Velocidad: 740 km/h';
        $p_49 = 'Autonomía: 3,520 km';
        
            $h3_16 = 'Jet Citation 550 Bravo';

        $p_50 = 'Capacidad: 9 pax';
        $p_51 = 'Velocidad: 835 km/h';
        $p_52 = 'Autonomía: 4,010 km';
        
            $h3_17 = 'Jet Citation Cj4';

        $p_53 = 'Capacidad: 8 pax';
        $p_54 = 'Velocidad: 796 km/h';
        $p_55 = 'Autonomía: 3,441 km';
        
            $h3_18 = 'Jet Citation Encore';

        $p_56 = 'Capacidad: 9 pax';
        $p_57 = 'Velocidad: 815 km/h';
        $p_58 = 'Autonomía: 3,890 km';
        
            $h3_19 = 'Jet Citation XLS';

        $p_59 = 'Capacidad: 19 pax';
        $p_60 = 'Velocidad: 1050 km/h';
        $p_61 = 'Autonomía: 8,300 km';
        
            $h3_20 = 'Jet Citation HemisPhere';

        $p_62 = 'Capacidad: 9 pax';
        $p_63 = 'Velocidad: 826 km/h';
        $p_64 = 'Autonomía: 5,278 km';
        
            $h3_21 = 'Jet Citation Latitude';

        $p_65 = 'Capacidad: 24 pax';
        $p_66 = 'Velocidad: 250 km/h';
        $p_67 = 'Autonomía: 1,000 km';
        
            $h3_22 = 'MI 8 MTV 1';

        $p_68 = 'Capacidad: 5 pax';
        $p_69 = 'Velocidad: 287 km/h';
        $p_70 = 'Autonomía: 650 km';

            $h3_23 = 'Ecureuil B3';
        
        $p_71 = 'Capacidad: 5 pax';
        $p_72 = 'Velocidad: 287 km/h';
        $p_73 = 'Autonomía: 650 km';
?>
    
    <link rel="stylesheet" href="{{ asset('public/css/paginas/aeronaves/Flota.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/paginas/aeronaves/DetalleFlota.css') }}">
    
    <!-- Encabezado de la página -->
    <header class="fleet-header">
        <div class="container">
            <h1 class="fleet-title"><?= $h1_1 ?></h1>
            <p class="fleet-subtitle"><?= $p_1 ?></p>
        </div>
    </header>
 
    <!-- Sección de Flota Aérea --> 
    <section class="fleet-section">
        <div class="container">
            <div class="fleet-filter">
                <h2 class="filter-title"><?= $h2_1 ?></h2>
                <!--
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">Todos</button>
                    <button class="filter-btn" data-filter="transport">Transporte</button>
                    <button class="filter-btn" data-filter="cargo">Carga</button>
                    <button class="filter-btn" data-filter="medical">Emergencia Médica</button>
                </div>
                -->
            </div>
            
            <div class="fleet-grid">
                <!-- Fila 1 -->
                <!-- King Air 200 NOTA: ESTO HACE Q SE HABRA OTRA PESTANA DENTRO DEL a target="_blank"-->
                <a href="/aeronaves/KingAirB200" class="aircraft-card"  style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Air-King-B200.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_2 ?></p>
                                <p><?= $p_3 ?></p>
                                <p><?= $p_4 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_0 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div> 
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Inicio -->

                <!-- King Air B350 -->
                <a href="/aeronaves/KingAirB350" class="aircraft-card"  style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/AirKingB350.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_5 ?></p>
                                <p><?= $p_6 ?></p>
                                <p><?= $p_7 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_1 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>

                <!-- Beechcraft 1900D -->
                <a href="/aeronaves/Beechcraft1900D" class="aircraft-card"  style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Beechcraft1900D.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_8 ?></p>
                                <p><?= $p_9 ?></p>
                                <p><?= $p_10 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_2 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>

                <!-- Mi 17 -->
                <a href="/aeronaves/Mi17" class="aircraft-card"  style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/mi17-5.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_11 ?></p>
                                <p><?= $p_12 ?></p>
                                <p><?= $p_13 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_3 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>

                <!-- Fin -->

                <!-- Fila 2 -->
                <!-- Gulfstream G100 NOTA: ESTO HACE Q SE HABRA OTRA PESTANA DENTRO DEL a target="_blank"-->
                <a href="/aeronaves/GulfstreamG100" class="aircraft-card"  style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Gulfstream-G100.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_14 ?></p>
                                <p><?= $p_15 ?></p>
                                <p><?= $p_16 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_4 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                <!-- Gulfstream GIV -->
                <a href="/aeronaves/GulfstreamGIV" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/GulfstreamGiv.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_17 ?></p>
                                <p><?= $p_18 ?></p>
                                <p><?= $p_19 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_5 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                <!-- Honda Jet -->
                <a href="/aeronaves/HondaJet" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/HondaJet.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_20 ?></p>
                                <p><?= $p_21 ?></p>
                                <p><?= $p_22 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_6 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                <!-- Jet Phenom 100 -->
                <a href="/aeronaves/Phenom100" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Phenom100.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_23 ?></p>
                                <p><?= $p_24 ?></p>
                                <p><?= $p_25 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_7 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                <!-- Fila 3 -->
                <!-- Jet Phenom 300 -->
                <a href="/aeronaves/Phenom300" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Phenom300.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_26 ?></p>
                                <p><?= $p_27 ?></p>
                                <p><?= $p_28 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_8 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Challenger 300 -->
                <a href="/aeronaves/Challenger300" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger300.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_29 ?></p>
                                <p><?= $p_30 ?></p>
                                <p><?= $p_31 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_9 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Challenger 350 -->
                <a href="/aeronaves/Challenger350" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger350.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_32 ?></p>
                                <p><?= $p_33 ?></p>
                                <p><?= $p_34 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_10 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Challenger 601 -->
                <a href="/aeronaves/Challenger601" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger601.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_35 ?></p>
                                <p><?= $p_36 ?></p>
                                <p><?= $p_37 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_11 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Fila 4 -->
                <!-- Challenger 604 -->
                <a href="/aeronaves/Challenger604" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger604.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_38 ?></p>
                                <p><?= $p_39 ?></p>
                                <p><?= $p_40 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_12 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Challenger 605 -->
                <a href="/aeronaves/Challenger605" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger605.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_41 ?></p>
                                <p><?= $p_42 ?></p>
                                <p><?= $p_43 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_13 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Challenger 650 -->
                <a href="/aeronaves/Challenger650" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger650.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_44 ?></p>
                                <p><?= $p_45 ?></p>
                                <p><?= $p_46 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_14 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                <!-- Challenger 850 -->
                <a href="/aeronaves/Challenger850" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Challenger850.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_47 ?></p>
                                <p><?= $p_48 ?></p>
                                <p><?= $p_49 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_15 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                <!-- Fila 5 -->
                <!-- Citation 550 Bravo -->
                <a href="/aeronaves/Citation550Bravo" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Citation550-Bravo.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_50 ?></p>
                                <p><?= $p_51 ?></p>
                                <p><?= $p_52 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_16 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Citation CJ4 -->
                <a href="/aeronaves/CitationCj4" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationCj4.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_53 ?></p>
                                <p><?= $p_54 ?></p>
                                <p><?= $p_55 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_17 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Citation Encore -->
                <a href="/aeronaves/CitationEncore" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationEncore.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_56 ?></p>
                                <p><?= $p_57 ?></p>
                                <p><?= $p_58 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_18 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Citation XLS -->
                <a href="/aeronaves/CitationXLS" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationXLS.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_59 ?></p>
                                <p><?= $p_60 ?></p>
                                <p><?= $p_61 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_19 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                <!-- Fila 6 -->
                <!-- Citation Hemisphere -->
                <a href="/aeronaves/CitationHemisPhere" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationHemisPhere.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_62 ?></p>
                                <p><?= $p_63 ?></p>
                                <p><?= $p_64 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_20 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                
                <!-- Citation Latitude -->
                <a href="/aeronaves/CitationLatitude" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/CitationLatitude.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_65 ?></p>
                                <p><?= $p_66 ?></p>
                                <p><?= $p_67 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_21 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                <!-- Helicopteros -->
                <!-- Helicoptero MI 8 MTV 1 -->
                <a href="/aeronaves/Mi8-mtv1" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Mi8-mtv1.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_68 ?></p>
                                <p><?= $p_69 ?></p>
                                <p><?= $p_70 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_22 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
                <!-- Ecureuil B3 -->
                <a href="/aeronaves/Ecureuil-b3" class="aircraft-card" style="text-decoration: none; color: inherit;">
                    <div class="aircraft-image" style="background-image: url('public/img/aeronaves/aviones/Ecureuil-b3.webp')">
                        <div class="aircraft-overlay">
                            <div class="aircraft-details">
                                <p><?= $p_71 ?></p>
                                <p><?= $p_72 ?></p>
                                <p><?= $p_73 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="aircraft-info">
                        <h3 class="aircraft-name"><?= $h3_23 ?></h3>
                        <div class="aircraft-types">
                            <span class="aircraft-type transport">Transporte</span>
                        </div>
                        <div class="view-details-btn">Ver más información</div>
                    </div>
                </a>
            </div>
            <!-- Paginación 
            <div class="pagination">
                <a href="#" class="page-link active">1</a>
                <a href="#" class="page-link">2</a>
                <a href="#" class="page-link">3</a>
                <a href="#" class="page-link">4</a>
                <a href="#" class="page-link">5</a>
            </div>
            -->
        </div>
    </section>


    <script>
         // JavaScript para la página de Flota Aérea
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const aircraftCards = document.querySelectorAll('.aircraft-card');
    
    // Añadir evento click a cada botón de filtro
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remover clase active de todos los botones
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Añadir clase active al botón clickeado
            this.classList.add('active');
            
            // Obtener el valor del filtro
            const filterValue = this.getAttribute('data-filter');
            
            // Filtrar las tarjetas de aeronaves
            aircraftCards.forEach(card => {
                if (filterValue === 'all') {
                    card.style.display = 'flex';
                } else {
                    // Verificar si la tarjeta tiene el tipo seleccionado
                    const hasType = card.querySelector(`.aircraft-type.${filterValue}`);
                    
                    if (hasType) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
            
            // Aplicar animación a las tarjetas visibles
            const visibleCards = document.querySelectorAll('.aircraft-card[style="display: flex;"]');
            visibleCards.forEach((card, index) => {
                card.style.animation = `fadeInUp 0.3s ease forwards ${index * 0.05}s`;
            });
        });
    });
    
    // Añadir animación inicial a las tarjetas 
    aircraftCards.forEach((card, index) => {
        card.style.animation = `fadeInUp 0.3s ease forwards ${index * 0.05}s`;
    });
});

// Definir la animación de fadeInUp
document.head.insertAdjacentHTML('beforeend', `
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .aircraft-card {
            opacity: 0;
        }
    </style>
`);
    </script>
@endsection