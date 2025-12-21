@echo off
REM Script de diagnóstico y solución de traducciones

echo ========================================
echo SOLUCION RAPIDA - TRADUCCIONES DEL BLOG
echo ========================================
echo.

echo [1/5] Limpiando cache de configuracion...
php artisan config:clear

echo.
echo [2/5] Limpiando cache de vistas...
php artisan view:clear

echo.
echo [3/5] Limpiando cache de aplicacion...
php artisan cache:clear

echo.
echo [4/5] Limpiando cache de rutas...
php artisan route:clear

echo.
echo [5/5] Regenerando autoload de Composer...
composer dump-autoload

echo.
echo ========================================
echo COMPLETADO
echo ========================================
echo.
echo Ahora recarga tu navegador con Ctrl+F5
echo.

pause
