<?php
/**
 * Script de Diagnóstico de Traducciones
 * Sube este archivo a la raíz de tu Laravel y visita desde el navegador
 */

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "<h1>Diagnóstico de Traducciones - Blog</h1>";
echo "<pre>";

// 1. Verificar versión Laravel
echo "========================================\n";
echo "1. VERSIÓN DE LARAVEL\n";
echo "========================================\n";
echo "Laravel: " . app()->version() . "\n\n";

// 2. Verificar locale
echo "========================================\n";
echo "2. CONFIGURACIÓN DE LOCALE\n";
echo "========================================\n";
echo "Locale actual: " . app()->getLocale() . "\n";
echo "Fallback locale: " . config('app.fallback_locale') . "\n";
echo "Locales disponibles: es, en, pt\n\n";

// 3. Verificar archivos existen
echo "========================================\n";
echo "3. ARCHIVOS DE TRADUCCIÓN\n";
echo "========================================\n";

$langPaths = [
    'lang/es/blog.php',
    'lang/en/blog.php',
    'lang/pt/blog.php',
    'resources/lang/es/blog.php',
    'resources/lang/en/blog.php',
    'resources/lang/pt/blog.php',
];

foreach ($langPaths as $path) {
    $fullPath = base_path($path);
    if (file_exists($fullPath)) {
        echo "✓ EXISTE: $path (" . filesize($fullPath) . " bytes)\n";
    } else {
        echo "✗ NO EXISTE: $path\n";
    }
}
echo "\n";

// 4. Verificar contenido de archivos
echo "========================================\n";
echo "4. CONTENIDO DE ARCHIVOS (primeras keys)\n";
echo "========================================\n";

foreach (['es', 'en', 'pt'] as $locale) {
    // Intentar ambas ubicaciones
    $paths = [
        base_path("lang/$locale/blog.php"),
        base_path("resources/lang/$locale/blog.php"),
    ];
    
    foreach ($paths as $path) {
        if (file_exists($path)) {
            echo "Archivo: $path\n";
            $content = include $path;
            if (isset($content['vuelos_peru']['title'])) {
                echo "  - title: " . substr($content['vuelos_peru']['title'], 0, 50) . "...\n";
                echo "  - Total keys: " . count($content['vuelos_peru']) . "\n";
            } else {
                echo "  - ERROR: No se encuentra 'vuelos_peru' array\n";
            }
            break;
        }
    }
}
echo "\n";

// 5. Probar traducciones
echo "========================================\n";
echo "5. PRUEBA DE TRADUCCIONES\n";
echo "========================================\n";

foreach (['es', 'en', 'pt'] as $locale) {
    app()->setLocale($locale);
    $translation = __('blog.vuelos_peru.title');
    
    if (strpos($translation, 'blog.vuelos_peru') !== false) {
        echo "✗ $locale: NO FUNCIONA (muestra clave)\n";
        echo "  Resultado: $translation\n";
    } else {
        echo "✓ $locale: FUNCIONA\n";
        echo "  Resultado: " . substr($translation, 0, 50) . "...\n";
    }
}
echo "\n";

// 6. Verificar permisos
echo "========================================\n";
echo "6. PERMISOS DE ARCHIVOS\n";
echo "========================================\n";

foreach (['es', 'en', 'pt'] as $locale) {
    $paths = [
        base_path("lang/$locale/blog.php"),
        base_path("resources/lang/$locale/blog.php"),
    ];
    
    foreach ($paths as $path) {
        if (file_exists($path)) {
            $perms = substr(sprintf('%o', fileperms($path)), -4);
            echo "$path: $perms\n";
            break;
        }
    }
}
echo "\n";

// 7. Cache info
echo "========================================\n";
echo "7. INFORMACIÓN DE CACHE\n";
echo "========================================\n";

if (file_exists(base_path('bootstrap/cache/config.php'))) {
    echo "✓ Config está cacheado (bootstrap/cache/config.php existe)\n";
    echo "  RECOMENDACIÓN: Ejecutar 'php artisan config:clear'\n";
} else {
    echo "✓ Config NO está cacheado\n";
}

$viewCachePath = storage_path('framework/views');
if (is_dir($viewCachePath)) {
    $viewFiles = glob($viewCachePath . '/*.php');
    echo "Archivos de vista compilados: " . count($viewFiles) . "\n";
    if (count($viewFiles) > 0) {
        echo "  RECOMENDACIÓN: Ejecutar 'php artisan view:clear'\n";
    }
}
echo "\n";

// 8. Comando de solución
echo "========================================\n";
echo "8. COMANDOS RECOMENDADOS\n";
echo "========================================\n";
echo "Ejecuta estos comandos en el servidor:\n\n";
echo "cd " . base_path() . "\n";
echo "php artisan config:clear\n";
echo "php artisan view:clear\n";
echo "php artisan cache:clear\n";
echo "composer dump-autoload\n\n";

echo "========================================\n";
echo "DIAGNÓSTICO COMPLETADO\n";
echo "========================================\n";
echo "</pre>";

echo "<p><strong>IMPORTANTE:</strong> Después de ejecutar los comandos, borra este archivo (diagnostico-traducciones.php) por seguridad.</p>";
