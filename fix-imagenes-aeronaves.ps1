# ========================================
# FIX IMÁGENES - Rutas Duplicadas /public/
# ========================================
# Este script corrige /public/img/ → /img/ en 23 archivos de aeronaves

Write-Host "========================================" -ForegroundColor Cyan
Write-Host "FIX AUTOMÁTICO - RUTAS DE IMÁGENES" -ForegroundColor Cyan
Write-Host "========================================`n" -ForegroundColor Cyan

$baseDir = "c:\xampp\htdocs\laravel12\github\AerolineasDelSur-3Idiomas\resources\views\c_Aeronaves"
$backupDir = "c:\xampp\htdocs\laravel12\github\AerolineasDelSur-3Idiomas\resources\views\c_Aeronaves_BACKUP"

# 1. Crear backup
Write-Host "[1/4] Creando backup de seguridad..." -ForegroundColor Yellow
if (!(Test-Path $backupDir)) {
    Copy-Item -Path $baseDir -Destination $backupDir -Recurse
    Write-Host "✓ Backup creado en: $backupDir`n" -ForegroundColor Green
} else {
    Write-Host "✓ Backup ya existe`n" -ForegroundColor Green
}

# 2. Buscar archivos afectados
Write-Host "[2/4] Buscando archivos con /public/img/..." -ForegroundColor Yellow
$files = Get-ChildItem -Path "$baseDir\*.blade.php" | Where-Object {
    (Get-Content $_.FullName -Raw) -match "/public/img/"
}

Write-Host "✓ Encontrados: $($files.Count) archivos`n" -ForegroundColor Green

# 3. Realizar reemplazos
Write-Host "[3/4] Corrigiendo rutas..." -ForegroundColor Yellow
$filesFixed = 0
$totalReplacements = 0

foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw
    $originalContent = $content
    
    # Reemplazar /public/img/ por /img/
    $content = $content -replace '/public/img/', '/img/'
    
    # Reemplazar public/img/ por img/ (sin barra inicial)
    $content = $content -replace 'public/img/', 'img/'
    
    if ($content -ne $originalContent) {
        # Contar cuántos reemplazos se hicieron
        $matches = ([regex]::Matches($originalContent, '/public/img/')).Count
        $totalReplacements += $matches
        
        # Guardar archivo corregido
        Set-Content -Path $file.FullName -Value $content -NoNewline
        
        $filesFixed++
        Write-Host "  ✓ $($file.Name) - $matches reemplazos" -ForegroundColor Gray
    }
}

Write-Host "`n✓ Archivos corregidos: $filesFixed" -ForegroundColor Green
Write-Host "✓ Total reemplazos: $totalReplacements`n" -ForegroundColor Green

# 4. Verificar que no queden errores
Write-Host "[4/4] Verificando correcciones..." -ForegroundColor Yellow
$remaining = Get-ChildItem -Path "$baseDir\*.blade.php" | Where-Object {
    (Get-Content $_.FullName -Raw) -match '/public/img/'
}

if ($remaining.Count -eq 0) {
    Write-Host "✓ ¡Perfecto! No quedan rutas con /public/img/`n" -ForegroundColor Green
} else {
    Write-Host "⚠ Atención: Aún quedan $($remaining.Count) archivos con /public/img/" -ForegroundColor Yellow
    $remaining | ForEach-Object { Write-Host "  - $($_.Name)" -ForegroundColor Yellow }
}

Write-Host "`n========================================" -ForegroundColor Cyan
Write-Host "RESUMEN" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Archivos procesados: $($files.Count)" -ForegroundColor White
Write-Host "Archivos corregidos: $filesFixed" -ForegroundColor White
Write-Host "Total reemplazos: $totalReplacements" -ForegroundColor White
Write-Host "Backup guardado en: c_Aeronaves_BACKUP" -ForegroundColor White
Write-Host "`n✅ COMPLETADO!" -ForegroundColor Green
Write-Host "`nSi algo sale mal, restaura desde c_Aeronaves_BACKUP`n" -ForegroundColor Cyan

Pause
