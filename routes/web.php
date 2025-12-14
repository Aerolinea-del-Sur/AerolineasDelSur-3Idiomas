<?php

use Illuminate\Support\Facades\Route;
//use App\Mail\envioMail;

//----------------------------------      PAGINA PRINCIPAL      ---------------------------------------------------//

Route::get('/', function () {
    return view('a_EncabezadoFooter.princi');
})->name('home');

Route::get('/', function () {
    return view('a_EncabezadoFooter.inicio');
})->name('inicio');

//----------------------------------    HEADER    ---------------------------------------------------//
// Página de nosotros
Route::get('/nosotros', function () {
    return view('b_nosotros.nosotros');
})->name('nosotros');

// vuelos
Route::get('/vuelos', function () {
    return view('d_Servicio.vuelos');
})->name('vuelos');

// sobrevuelos
Route::get('/sobrevuelos', function () {
    return view('d_Servicio.sobrevuelos');
})->name('sobrevuelos');

//helicoptero
Route::get('/helicopteros', function () {
    return view('d_Servicio.helicopteros');
})->name('helicopteros');

//aeromedico
Route::get('/aeromedico', function () {
    return view('d_Servicio.medico');
})->name('aeromedico');
//carga
Route::get('/carga', function () {
    return view('d_Servicio.carga');
})->name('carga');

// Página de agencia
Route::get('/agencia', function () {
    return view('d_Servicio.agencia');
})->name('agencia');

// Página de blog
Route::get('/blog', function () {
    return view('f_Blog.blog');
})->name('blog');

//-------------------------------------antiguo-------------------------------------//
// Página de servicio
Route::get('/servicio', function () {
    return view('d_Servicio.servicio');
})->name('servicio');

// Página de aeronaves
Route::get('/aeronaves', function () {
    return view('c_Aeronaves.aeronaves');
})->name('aeronaves');

// Página de contacto
Route::get('/contacto', function () {
    return view('g_contactos.contacto');
})->name('contacto');

//----------------------------------    FOOTER    ---------------------------------------------------//
//------------------    institucional    ------------------//

// codigo essna
Route::get('/esna', function () {
    return view('h_footer.esna');
})->name('esna');
//codigo pagos
Route::get('/pagos', function () {
    return view('h_footer.pagos');
})->name('pagos');

//------------------    legal    ------------------//
//politicas de privacidad
Route::get('/politicas-privacidad', function () {
    return view('h_footer.privaty');
})->name('privaty');
//terminos y condiciones
Route::get('/terminos-condiciones', function () {
    return view('h_footer.terminos');
})->name('terminos');
//Libro de reclamaciones
Route::get('/libro-reclamaciones', function () {
    return view('h_footer.libro'); 
})->name('libro');

//----------------------------------    AERONAVES    ---------------------------------------------------//

// Página del Avión king air 200
Route::get('/aeronaves/KingAirB200', function () {
    return view('c_Aeronaves.KingAirB200');
})->name('KingAirB200');

// Página del Avión king air 350
Route::get('/aeronaves/KingAirB350', function () {
    return view('c_Aeronaves.king-air-b350');
})->name('KingAirB350');

// Página del Beechcraft 1900D
Route::get('/aeronaves/Beechcraft1900D', function () {
    return view('c_Aeronaves.beechcraft-1900d');
})->name('Beechcraft1900D');

// Página del Avión Mi17
Route::get('/aeronaves/Mi17', function () {
    return view('c_Aeronaves.mi-17');
})->name('Mi17');

// Página del Avión Gulfstream G100
Route::get('/aeronaves/GulfstreamG100', function () {
    return view('c_Aeronaves.GulfstreamG100');
})->name('GulfstreamG100');

// Página del Avión Gulfstream G IV
Route::get('/aeronaves/GulfstreamGIV', function () {
    return view('c_Aeronaves.GulfstreamGIV'); 
})->name('GulfstreamGIV');

// Página del Honda Jet
Route::get('/aeronaves/HondaJet', function () {
    return view('c_Aeronaves.HondaJet'); 
})->name('HondaJet');

// Página del Phenom 100
Route::get('/aeronaves/Phenom100', function () {
    return view('c_Aeronaves.Phenom100'); 
})->name('Phenom100');

// Página del Phenom 300
Route::get('/aeronaves/Phenom300', function () {
    return view('c_Aeronaves.Phenom300'); 
})->name('Phenom300');

// Página del Challenger 300
Route::get('/aeronaves/Challenger300', function () {
    return view('c_Aeronaves.Challenger300'); 
})->name('Challenger300'); 

// Página del Challenger 350
Route::get('/aeronaves/Challenger350', function () {
    return view('c_Aeronaves.Challenger350'); 
})->name('Challenger350'); 

// Página del Challenger 601
Route::get('/aeronaves/Challenger601', function () {
    return view('c_Aeronaves.Challenger601'); 
})->name('Challenger601'); 

// Página del Challenger 604
Route::get('/aeronaves/Challenger604', function () {
    return view('c_Aeronaves.Challenger604'); 
})->name('Challenger604'); 

// Página del Challenger 605
Route::get('/aeronaves/Challenger605', function () {
    return view('c_Aeronaves.Challenger605'); 
})->name('Challenger605');

// Página del Challenger 650
Route::get('/aeronaves/Challenger650', function () {
    return view('c_Aeronaves.Challenger650'); 
})->name('Challenger650'); 

// Página del Challenger 850
Route::get('/aeronaves/Challenger850', function () {
    return view('c_Aeronaves.Challenger850'); 
})->name('Challenger850'); 

// Página del Citation 550 Bravo
Route::get('/aeronaves/Citation550Bravo', function () {
    return view('c_Aeronaves.Citation550Bravo'); 
})->name('Citation550Bravo'); 

// Página del Citation Cj4
Route::get('/aeronaves/CitationCj4', function () {
    return view('c_Aeronaves.CitationCj4'); 
})->name('CitationCj4'); 

// Página del Citation Encore
Route::get('/aeronaves/CitationEncore', function () {
    return view('c_Aeronaves.CitationEncore'); 
})->name('CitationEncore'); 

// Página del Citation XLS
Route::get('/aeronaves/CitationXLS', function () {
    return view('c_Aeronaves.CitationXLS'); 
})->name('CitationXLS'); 

// Página del Citation HemisPhere
Route::get('/aeronaves/CitationHemisPhere', function () {
    return view('c_Aeronaves.CitationHemisPhere'); 
})->name('CitationHemisPhere'); 

// Página del Citation Latitude
Route::get('/aeronaves/CitationLatitude', function () {
    return view('c_Aeronaves.CitationLatitude'); 
})->name('CitationLatitude'); 

// Página del MI 8 MTV 1
Route::get('/aeronaves/Mi8-mtv1', function () {
    return view('c_Aeronaves.Mi8-mtv1'); 
})->name('Mi8-mtv1'); 

// Página del Ecureuil B3
Route::get('/aeronaves/Ecureuil-b3', function () {
    return view('c_Aeronaves.Ecureuil-b3'); 
})->name('Ecureuil-b3');

//---------------------------------- TOURS Y SOBREVUELO  ---------------------------------------------------//
// etiquetado paquetes = P, tours = T, sobre vuelos = S

// Página de andes-magicos
Route::get('/agencia/andes-magicos', function () {
    return view('e_Agencia.sobrevuelo-andes-magicos');
})->name('sobrevuelo-andes-magicos');

// Página de valle-maras
Route::get('/agencia/valle-maras', function () {
    return view('e_Agencia.sobrevuelo-valle-maras');
})->name('sobrevuelo-valle-maras');

// Página de tour-machu-picchu
Route::get('/agencia/machu-picchu', function () {
    return view('e_Agencia.tour-machu-picchu');
})->name('tour-machu-picchu');

// Página de tesoros-cusco
Route::get('/agencia/tesoros-cusco', function () {
    return view('e_Agencia.tour-tesoros-cusco');
})->name('tour-tesoros-cusco');

// Página de vinicunca-elite
Route::get('/agencia/vinicunca-elite', function () {
    return view('e_Agencia.tour-vinicunca-elite');
})->name('tour-vinicunca-elite');

// Página de vinicunca
Route::get('/agencia/vinicunca', function () {
    return view('e_Agencia.tour-vinicunca');
})->name('tour-vinicunca'); 


//---------------------------------- BLOG ---------------------------------------------------//
// Página de blog
Route::get('/blog/Aventura-Cusco', function () {
    return view('f_Blog.Consejos.c1_aventuraCusco');
})->name('blog.aventura-cusco');
//---------------------------------- CONTROLADORES + FORMULARIO + SERVICIO GOOGLE ---------------------------------------------------//

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AircraftController;
use App\Http\Controllers\TurismoController;

Route::post('/enviar-contacto', [ContactController::class, 'send'])
->name('contact.send');

Route::post('/enviar-solicitud-aeronave', [AircraftController::class, 'sendAircraftInquiry'])
->name('aircraft.inquiry.send');

Route::post('/enviar-turismo', [TurismoController::class, 'sendTourRequest'])
->name('turismo.send');

//--------------------//
use App\Http\Controllers\VueloController;

Route::post('/enviar-vuelo', [VueloController::class, 'sendFlightRequest'])
    ->name('vuelos.send');