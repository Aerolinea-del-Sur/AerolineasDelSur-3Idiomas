<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Lista de idiomas soportados
        $supportedLocales = ['es', 'en', 'pt'];
        
        // Obtener el idioma del primer segmento de la URL
        $locale = $request->segment(1);
        
        // Verificar si el idioma está soportado
        if (in_array($locale, $supportedLocales)) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        } else {
            // Si no está en la URL, intentar obtener de sesión
            $locale = Session::get('locale', config('app.locale', 'es'));
            
            if (!in_array($locale, $supportedLocales)) {
                $locale = 'es'; // Fallback a español
            }
            
            App::setLocale($locale);
        }
        
        return $next($request);
    }
}
