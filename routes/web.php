<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AircraftController;
use App\Http\Controllers\TurismoController;
use App\Http\Controllers\VueloController;

// Redirección por defecto a español
Route::get('/', function () {
    return redirect('/es');
});

// Rutas con prefijo de idioma
Route::prefix('{locale}')->where(['locale' => 'es|en|pt'])->group(function () {

    //----------------------------------  PAGINA PRINCIPAL  ---------------------------------------------------//
    Route::get('/', function () {
        return view('a_EncabezadoFooter.inicio');
    })->name('home');

    //----------------------------------  HEADER  ---------------------------------------------------//
    Route::get('/nosotros', function () {
        return view('b_nosotros.nosotros');
    })->name('nosotros');

    // Servicios
    Route::get('/vuelos', function () {
        return view('d_Servicio.vuelos');
    })->name('vuelos');

    Route::get('/sobrevuelos', function () {
        return view('d_Servicio.sobrevuelos');
    })->name('sobrevuelos');

    Route::get('/helicopteros', function () {
        return view('d_Servicio.helicopteros');
    })->name('helicopteros');

    Route::get('/aeromedico', function () {
        return view('d_Servicio.medico');
    })->name('aeromedico');

    Route::get('/carga', function () {
        return view('d_Servicio.carga');
    })->name('carga');

    Route::get('/agencia', function () {
        return view('d_Servicio.agencia');
    })->name('agencia');

    Route::get('/blog', function () {
        return view('f_Blog.blog');
    })->name('blog');

    // Antiguo
    Route::get('/servicio', function () {
        return view('d_Servicio.servicio');
    })->name('servicio');

    Route::get('/aeronaves', function () {
        return view('c_Aeronaves.aeronaves');
    })->name('aeronaves');

    Route::get('/contacto', function () {
        return view('g_contactos.contacto');
    })->name('contacto');

    //----------------------------------  FOOTER  ---------------------------------------------------//
    Route::get('/esna', function () {
        return view('h_footer.esna');
    })->name('esna');

    Route::get('/pagos', function () {
        return view('h_footer.pagos');
    })->name('pagos');

    Route::get('/politicas-privacidad', function () {
        return view('h_footer.privaty');
    })->name('privaty');

    Route::get('/politica-de-cookies', function () {
        return view('h_footer.cookies');
    })->name('cookies');

    Route::get('/terminos-condiciones', function () {
        return view('h_footer.terminos');
    })->name('terminos');

    Route::get('/libro-reclamaciones', function () {
        return view('h_footer.libro');
    })->name('libro');

    //----------------------------------  AERONAVES  ---------------------------------------------------//
    Route::prefix('aeronaves')->group(function () {
        Route::get('/KingAirB200', fn() => view('c_Aeronaves.KingAirB200'))->name('KingAirB200');
        Route::get('/KingAirB350', fn() => view('c_Aeronaves.king-air-b350'))->name('KingAirB350');
        Route::get('/Beechcraft1900D', fn() => view('c_Aeronaves.beechcraft-1900d'))->name('Beechcraft1900D');
        Route::get('/Mi17', fn() => view('c_Aeronaves.mi-17'))->name('Mi17');
        Route::get('/GulfstreamG100', fn() => view('c_Aeronaves.GulfstreamG100'))->name('GulfstreamG100');
        Route::get('/GulfstreamGIV', fn() => view('c_Aeronaves.GulfstreamGIV'))->name('GulfstreamGIV');
        Route::get('/HondaJet', fn() => view('c_Aeronaves.HondaJet'))->name('HondaJet');
        Route::get('/Phenom100', fn() => view('c_Aeronaves.Phenom100'))->name('Phenom100');
        Route::get('/Phenom300', fn() => view('c_Aeronaves.Phenom300'))->name('Phenom300');
        Route::get('/Challenger300', fn() => view('c_Aeronaves.Challenger300'))->name('Challenger300');
        Route::get('/Challenger350', fn() => view('c_Aeronaves.Challenger350'))->name('Challenger350');
        Route::get('/Challenger601', fn() => view('c_Aeronaves.Challenger601'))->name('Challenger601');
        Route::get('/Challenger604', fn() => view('c_Aeronaves.Challenger604'))->name('Challenger604');
        Route::get('/Challenger605', fn() => view('c_Aeronaves.Challenger605'))->name('Challenger605');
        Route::get('/Challenger650', fn() => view('c_Aeronaves.Challenger650'))->name('Challenger650');
        Route::get('/Challenger850', fn() => view('c_Aeronaves.Challenger850'))->name('Challenger850');
        Route::get('/Citation550Bravo', fn() => view('c_Aeronaves.Citation550Bravo'))->name('Citation550Bravo');
        Route::get('/CitationCj4', fn() => view('c_Aeronaves.CitationCj4'))->name('CitationCj4');
        Route::get('/CitationEncore', fn() => view('c_Aeronaves.CitationEncore'))->name('CitationEncore');
        Route::get('/CitationXLS', fn() => view('c_Aeronaves.CitationXLS'))->name('CitationXLS');
        Route::get('/CitationHemisPhere', fn() => view('c_Aeronaves.CitationHemisPhere'))->name('CitationHemisPhere');
        Route::get('/CitationLatitude', fn() => view('c_Aeronaves.CitationLatitude'))->name('CitationLatitude');
        Route::get('/Mi8-mtv1', fn() => view('c_Aeronaves.Mi8-mtv1'))->name('Mi8-mtv1');
        Route::get('/Ecureuil-b3', fn() => view('c_Aeronaves.Ecureuil-b3'))->name('Ecureuil-b3');
    });

    //----------------------------------  TOURS Y SOBREVUELOS  ---------------------------------------------------//
    Route::prefix('agencia')->group(function () {
        Route::get('/machu-picchu', fn() => view('e_Agencia.tour-machu-picchu'))->name('tour-machu-picchu');
        Route::get('/tesoros-cusco', fn() => view('e_Agencia.tour-tesoros-cusco'))->name('tour-tesoros-cusco');
        Route::get('/vinicunca', fn() => view('e_Agencia.tour-vinicunca'))->name('tour-vinicunca');
    });
    Route::prefix('sobrevuelo')->group(function () {
        Route::get('/titicaca-lake', fn() => view('e_Agencia.sobrevuelo-titicaca-lake'))->name('sobrevuelo-titicaca-lake');
        Route::get('/choquequirao', fn() => view('e_Agencia.sobrevuelo-choquequirao'))->name('sobrevuelo-choquequirao');
        Route::get('/nazca-lines', fn() => view('e_Agencia.sobrevuelo-nazca-lines'))->name('sobrevuelo-nazca-lines');
        Route::get('/valle-maras', fn() => view('e_Agencia.sobrevuelo-valle-maras'))->name('sobrevuelo-valle-maras');
        Route::get('/vinicunca-elite', fn() => view('e_Agencia.tour-vinicunca-elite'))->name('sobrevuelo-vinicunca-elite');
    });

    //----------------------------------  BLOG  ---------------------------------------------------//
    Route::get('/blog/Aventura-Cusco', function () {
        return view('f_Blog.Consejos.c1_aventuraCusco');
    })->name('blog.aventura-cusco');

    Route::get('/blog/Vuelos-Peru', function () {
        return view('f_Blog.Consejos.c2_vuelosPeru'); 
    })->name('blog.vuelos-peru');
    
    Route::get('/blog/Experiencias-de-Viaje', function () {
        return view('f_Blog.Experiencias.e1_experiencias-de-viaje');
    })->name('blog.experiencias-de-viaje');

    Route::get('/blog/Machu-Picchu-Peru', function () {
        return view('f_Blog.Experiencias.d1_machuPicchuPeru');
    })->name('blog.machu-picchu-peru');
});

//----------------------------------  FORMULARIOS (SIN PREFIJO DE IDIOMA)  ---------------------------------------------------//
Route::post('/enviar-contacto', [ContactController::class, 'send'])->name('contact.send');
Route::post('/enviar-solicitud-aeronave', [AircraftController::class, 'sendAircraftInquiry'])->name('aircraft.inquiry.send');
Route::post('/enviar-turismo', [TurismoController::class, 'sendTourRequest'])->name('turismo.send');
Route::post('/enviar-vuelo', [VueloController::class, 'sendFlightRequest'])->name('vuelos.send');