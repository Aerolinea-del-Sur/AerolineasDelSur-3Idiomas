<?php
/**
 * Script para automatizar la traducción de las páginas de aeronaves
 * 
 * USO:
 * php translate_aircraft.php
 * 
 * Este script:
 * 1. Lee cada archivo .blade.php de aeronaves
 * 2. Reemplaza las variables hardcodeadas con llamadas a __()
 * 3. Actualiza el SEO con app()->getLocale()
 * 4. Guarda el archivo actualizado
 */

$aircraftDir = __DIR__ . '/../resources/views/c_Aeronaves';
$backupDir = __DIR__ . '/backups_aeronaves';

// Crear directorio de backup
if (!is_dir($backupDir)) {
    mkdir($backupDir, 0755, true);
}

// Lista de aeronaves a procesar (excluir KingAirB200 que ya está traducido)
$aircraftFiles = [
    'Challenger300.blade.php',
    'Challenger350.blade.php',
    'Challenger601.blade.php',
    'Challenger604.blade.php',
    'Challenger605.blade.php',
    'Challenger650.blade.php',
    'Challenger850.blade.php',
    'Citation550Bravo.blade.php',
    'CitationCj4.blade.php',
    'CitationEncore.blade.php',
    'CitationHemisPhere.blade.php',
    'CitationLatitude.blade.php',
    'CitationXLS.blade.php',
    'Ecureuil-b3.blade.php',
    'GulfstreamG100.blade.php',
    'GulfstreamGIV.blade.php',
    'HondaJet.blade.php',
    'Mi8-mtv1.blade.php',
    'Phenom100.blade.php',
    'Phenom300.blade.php',
    'beechcraft-1900d.blade.php',
    'king-air-b350.blade.php',
    'mi-17.blade.php',
    'aeronaves.blade.php',
];

// Mapeo de reemplazos
$replacements = [
    // SEO - Patrón para canonical
    [
        'pattern' => "/url\('\/aeronaves\//",
        'replacement' => "url(app()->getLocale() . '/aeronaves/",
    ],
    
    // Variables PHP comunes
    [
        'pattern' => "/\\$p_1 = 'Excelencia en Aviación (Comercial|Ejecutiva|Ejecutiva Ligera)';/",
        'replacement' => "\$p_1 = __('aircraft.excellence');",
    ],
    [
        'pattern' => "/\\$p_1 = 'Innovación en Aviación (Comercial|Ejecutiva|Ejecutiva Ligera)';/",
        'replacement' => "\$p_1 = __('aircraft.excellence');",
    ],
    [
        'pattern' => "/\\$h2_1 = 'Descripción del (Avión|Helicóptero)';/",
        'replacement' => "\$h2_1 = __('aircraft.description');",
    ],
    [
        'pattern' => "/\\$h2_2 = 'Galería de Imágenes';/",
        'replacement' => "\$h2_2 = __('aircraft.gallery');",
    ],
    [
        'pattern' => "/\\$h2_3 = 'Visión General';/",
        'replacement' => "\$h2_3 = __('aircraft.overview');",
    ],
    [
        'pattern' => "/\\$h3_1 = 'Modelo';/",
        'replacement' => "\$h3_1 = __('aircraft.model');",
    ],
    [
        'pattern' => "/\\$h3_2 = 'Año de Fabricación';/",
        'replacement' => "\$h3_2 = __('aircraft.year');",
    ],
    [
        'pattern' => "/\\$h3_3 = 'Fabricante';/",
        'replacement' => "\$h3_3 = __('aircraft.manufacturer');",
    ],
    [
        'pattern' => "/\\$h2_4 = 'Rendimiento';/",
        'replacement' => "\$h2_4 = __('aircraft.performance');",
    ],
    [
        'pattern' => "/\\$h3_4 = 'Velocidad Máxima';/",
        'replacement' => "\$h3_4 = __('aircraft.max_speed_label');",
    ],
    [
        'pattern' => "/\\$h3_5 = 'Alcance Máximo';/",
        'replacement' => "\$h3_5 = __('aircraft.max_range');",
    ],
    [
        'pattern' => "/\\$h3_6 = 'Altitud de Crucero';/",
        'replacement' => "\$h3_6 = __('aircraft.cruise_altitude');",
    ],
    [
        'pattern' => "/\\$h3_7 = 'Consumo de Combustible';/",
        'replacement' => "\$h3_7 = __('aircraft.fuel_consumption');",
    ],
    [
        'pattern' => "/\\$h2_5 = 'Capacidad';/",
        'replacement' => "\$h2_5 = __('aircraft.capacity');",
    ],
    [
        'pattern' => "/\\$h3_8 = 'Pasajeros Máximo';/",
        'replacement' => "\$h3_8 = __('aircraft.max_passengers');",
    ],
    [
        'pattern' => "/\\$h3_9 = 'Autonomía';/",
        'replacement' => "\$h3_9 = __('aircraft.autonomy');",
    ],
    [
        'pattern' => "/\\$h3_10 = 'Capacidad de Carga';/",
        'replacement' => "\$h3_10 = __('aircraft.cargo_capacity');",
    ],
    [
        'pattern' => "/\\$h3_11 = 'Longitud';/",
        'replacement' => "\$h3_11 = __('aircraft.length');",
    ],
    [
        'pattern' => "/\\$h2_6 = 'Lugares de Operación';/",
        'replacement' => "\$h2_6 = __('aircraft.operation_places');",
    ],
    [
        'pattern' => "/\\$h3_12 = 'Rutas Nacionales';/",
        'replacement' => "\$h3_12 = __('aircraft.national_routes');",
    ],
    [
        'pattern' => "/\\$h3_13 = 'Otros Servicios';/",
        'replacement' => "\$h3_13 = __('aircraft.other_services');",
    ],
    [
        'pattern' => "/\\$h3_14 = 'Solicitar Información';/",
        'replacement' => "\$h3_14 = __('aircraft.request_info');",
    ],
];

$processedFiles = 0;
$errors = [];

echo "=== SCRIPT DE TRADUCCIÓN AUTOMÁTICA DE AERONAVES ===\n\n";

foreach ($aircraftFiles as $filename) {
    $filePath = $aircraftDir . '/' . $filename;
    
    if (!file_exists($filePath)) {
        $errors[] = "Archivo no encontrado: $filename";
        continue;
    }
    
    echo "Procesando: $filename... ";
    
    // Leer contenido
    $content = file_get_contents($filePath);
    
    // Crear backup
    $backupPath = $backupDir . '/' . $filename . '.backup';
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
    
    // Guardar archivo actualizado
    if ($replacedCount > 0) {
        file_put_contents($filePath, $content);
        echo "✓ ($replacedCount reemplazos)\n";
        $processedFiles++;
    } else {
        echo "⚠ (0 reemplazos - posiblemente ya traducido)\n";
    }
}

echo "\n=== RESUMEN ===\n";
echo "Archivos procesados: $processedFiles/" . count($aircraftFiles) . "\n";
echo "Backups guardados en: $backupDir\n";

if (!empty($errors)) {
    echo "\nErrores encontrados:\n";
    foreach ($errors as $error) {
        echo "  - $error\n";
    }
}

echo "\n✅ Proceso completado!\n";
echo "Revisa los archivos y si todo está correcto, elimina la carpeta de backups.\n";
