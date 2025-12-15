<?php
/**
 * Script Optimizado - Completar TODAS las páginas restantes
 * Procesa: Tours (8) + Legal (4) + Blog (1) = 13 páginas
 */

$baseDir = __DIR__;
$viewsDir = $baseDir . '/resources/views';
$backupDir = $baseDir . '/backups_completado_final';

// Crear directorio de backup
if (!is_dir($backupDir)) {
    mkdir($backupDir, 0755, true);
}

echo "=== SCRIPT OPTIMIZADO - COMPLETAR 13 PÁGINAS RESTANTES ===\n\n";

// Definir archivos con rutas relativas correctas
$files = [
    // Tours - e_Agencia (8 pendientes, vinicunca ya procesado)
    ['path' => 'e_Agencia/tour-vinicunca-elite.blade.php', 'route' => 'tour-vinicunca-elite'],
    ['path' => 'e_Agencia/tour-machu-picchu.blade.php', 'route' => 'tour-machu-picchu'],
    ['path' => 'e_Agencia/tour-tesoros-cusco.blade.php', 'route' => 'tour-tesoros-cusco'],
    ['path' => 'e_Agencia/sobrevuelo-andes-magicos.blade.php', 'route' => 'sobrevuelo-andes-magicos'],
    ['path' => 'e_Agencia/sobrevuelo-choquequirao.blade.php', 'route' => 'sobrevuelo-choquequirao'],
    ['path' => 'e_Agencia/sobrevuelo-nazca-lines.blade.php', 'route' => 'sobrevuelo-nazca-lines'],
    ['path' => 'e_Agencia/sobrevuelo-titicaca-lake.blade.php', 'route' => 'sobrevuelo-titicaca-lake'],
    ['path' => 'e_Agencia/sobrevuelo-valle-maras.blade.php', 'route' => 'sobrevuelo-valle-maras'],
    
    // Legal - h_footer (4 pendientes, privaty ya procesado)
    ['path' => 'h_footer/esna.blade.php', 'route' => 'terminos-condiciones'],
    ['path' => 'h_footer/libro.blade.php', 'route' => 'libro-reclamaciones'],
    ['path' => 'h_footer/pagos.blade.php', 'route' => 'metodos-pago'],
    ['path' => 'h_footer/terminos.blade.php', 'route' => 'terminos'],
    
    // Blog - f_Blog (1)
    ['path' => 'f_Blog/blog.blade.php', 'route' => 'blog'],
];

$processedCount = 0;
$skippedCount = 0;
$errorCount = 0;

foreach ($files as $fileInfo) {
    $filePath = $viewsDir . '/' . $fileInfo['path'];
    $route = $fileInfo['route'];
    
    echo "Procesando: {$fileInfo['path']}... ";
    
    // Verificar que el archivo existe
    if (!file_exists($filePath)) {
        echo "❌ NO ENCONTRADO\n";
        $errorCount++;
        continue;
    }
    
    // Leer contenido
    $content = file_get_contents($filePath);
    
    // Crear backup
    $backupName = str_replace(['/', '\\'], '_', $fileInfo['path']);
    $backupPath = $backupDir . '/' . $backupName . '.backup';
    file_put_contents($backupPath, $content);
    
    // Buscar y reemplazar canonical
    $patterns = [
        // Patrón 1: url('/ruta')
        "/url\('\/({$route})'\)/i" => "url(app()->getLocale() . '/$1')",
        // Patrón 2: url("/ruta")
        "/url\(\"\/({$route})\"\)/i" => "url(app()->getLocale() . \"/$1\")",
    ];
    
    $replaced = false;
    foreach ($patterns as $pattern => $replacement) {
        $newContent = preg_replace($pattern, $replacement, $content, -1, $count);
        if ($count > 0) {
            $content = $newContent;
            $replaced = true;
            break;
        }
    }
    
    if ($replaced) {
        file_put_contents($filePath, $content);
        echo "✅ COMPLETADO\n";
        $processedCount++;
    } else {
        echo "⚠️  YA TRADUCIDO o NO ENCONTRADO PATTERN\n";
        $skippedCount++;
    }
}

echo "\n=== RESUMEN FINAL ===\n";
echo "✅ Procesados exitosamente: $processedCount\n";
echo "⚠️  Omitidos (ya traducidos): $skippedCount\n";
echo "❌ Errores (no encontrados): $errorCount\n";
echo "📂 Backups guardados en: $backupDir\n";
echo "\n🎉 PROCESO COMPLETADO!\n";
echo "Total archivos procesados: " . count($files) . "\n";
