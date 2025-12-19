<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocaleFromBrowser
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
        // Idiomas soportados por la aplicación
        $availableLocales = ['es', 'en', 'pt'];
        $defaultLocale = 'es';
        
        // Si ya hay un locale en la URL, usarlo
        $currentLocale = $request->segment(1);
        if (in_array($currentLocale, $availableLocales)) {
            App::setLocale($currentLocale);
            session(['locale' => $currentLocale]);
            return $next($request);
        }
        
        // Si el usuario está en la raíz del sitio, detectar idioma
        if ($request->path() === '/') {
            // Primero verificar si hay preferencia guardada en sesión
            if (session()->has('locale')) {
                $locale = session('locale');
            } else {
                // Detectar idioma del navegador
                $browserLang = substr($request->server('HTTP_ACCEPT_LANGUAGE', $defaultLocale), 0, 2);
                $locale = in_array($browserLang, $availableLocales) ? $browserLang : $defaultLocale;
            }
            
            // Guardar preferencia en sesión
            session(['locale' => $locale]);
            
            // Redirigir a la versión con locale
            return redirect("/{$locale}");
        }
        
        // Si no hay locale en la URL y no es la raíz, usar el de sesión o default
        $locale = session('locale', $defaultLocale);
        App::setLocale($locale);
        
        return $next($request);
    }
}
