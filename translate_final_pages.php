<?php
/**
 * Script para automatizar la traducción de TODAS las páginas restantes
 * Tours (9) + Legal (5) + Blog (1) = 15 páginas
 */

$viewsDir = __DIR__ . '/../resources/views';
$backupDir = __DIR__ . '/backups_final';

if (!is_dir($backupDir)) {
    mkdir($backupDir, 0755, true);
}

// Archivos a procesar
$filesToProcess = [
    // Tours - e_Agencia
    'e_Agencia/tour-vinicunca-elite.blade.php',
    'e_Agencia/tour-machu-picchu.blade.php',
    'e_Agencia/tour-tesoros-cusco.blade.php',
    'e_Agencia/sobrevuelo-andes-magicos.blade.php',
    'e_Agencia/sobrevuelo-choquequirao.blade.php',
    'e_Agencia/sobrevuelo-nazca-lines.blade.php',
    'e_Agencia/sobrevuelo-titicaca-lake.blade.php',
    'e_Agencia/sobrevuelo-valle-maras.blade.php',
    
    // Legal - h_footer
    'h_footer/esna.blade.php',
    'h_footer/libro.blade.php',
    'h_footer/pagos.blade.php',
    
    // Blog
    'f_Blog/blog.blade.php',
];

// Pattern para canonical
$replacements = [
    [
        'pattern' => "/url\('\/(tour-|sobrevuelo-|politica-|terminos-|libro-|pagos-|blog)/",
        'replacement' => "url(app()->getLocale() . '/$1",
    ],
    [
        'pattern' => "/url\('\/([a-z-]+)'\)/",
        'replacement' => "url(app()->getLocale() . '/$1')",
    ],
];

$processedFiles = 0;
$errors = [];

echo "=== SCRIPT DE TRADUCCIÓN FINAL - 15 PÁGINAS RESTANTES ===\n\n";

foreach ($filesToProcess as $relPath) {
    $filePath = $viewsDir . '/' . $relPath;
    
    if (!file_exists($filePath)) {
        $errors[] = "Archivo no encontrado: $relPath";
        continue;
    }
    
    echo "Procesando: $relPath... ";
    
    $content = file_get_contents($filePath);
    
    // Backup
    $backupPath = $backupDir . '/' . str_replace('/', '_', $relPath) . '.backup';
    file_put_contents($backupPath, $content);
    
    // Aplicar reemplazos
    $replacedCount = 0;
    foreach ($replacements as $replacement) {
        $newContent = preg_replace(
            $replacement['pattern'],
            $replacement['replacement'],
            $content,
            -1,
            $count
        );
        
        if ($newContent !== null) {
            $content = $newContent;
            $replacedCount += $count;
        }
    }
    
    if ($replacedCount > 0) {
        file_put_contents($filePath, $content);
        echo "✓ ($replacedCount reemplazos)\n";
        $processedFiles++;
    } else {
        echo "⚠ (0 reemplazos)\n";
    }
}

echo "\n=== RESUMEN ===\n";
echo "Archivos procesados: $processedFiles/" . count($filesToProcess) . "\n";
echo "Backups en: $backupDir\n";

if (!empty($errors)) {
    echo "\nErrores:\n";
    foreach ($errors as $error) {
        echo "  - $error\n";
    }
}

echo "\n✅ Completado!\n";
