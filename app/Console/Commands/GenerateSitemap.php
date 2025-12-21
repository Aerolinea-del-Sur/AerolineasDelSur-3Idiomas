<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap for all pages in 3 languages (es, en, pt)';

    public function handle()
    {
        $this->info('Generating sitemap...');
        
        $sitemap = Sitemap::create();
        // Always use production URL for sitemap
        $baseUrl = 'https://aerolineadelsur.com';
        $locales = ['es', 'en', 'pt'];
        
        // Páginas principales
        $mainPages = [
            ''                       => ['priority' => 1.0, 'freq' => 'daily'],
            'nosotros'               => ['priority' => 0.7, 'freq' => 'monthly'],
            'vuelos'                 => ['priority' => 0.9, 'freq' => 'weekly'],
            'sobrevuelos'            => ['priority' => 0.9, 'freq' => 'weekly'],
            'helicopteros'           => ['priority' => 0.9, 'freq' => 'weekly'],
            'aeromedico'             => ['priority' => 0.9, 'freq' => 'weekly'],
            'carga'                  => ['priority' => 0.9, 'freq' => 'weekly'],
            'agencia'                => ['priority' => 0.8, 'freq' => 'weekly'],
            'blog'                   => ['priority' => 0.7, 'freq' => 'weekly'],
            'servicio'               => ['priority' => 0.7, 'freq' => 'monthly'],
            'aeronaves'              => ['priority' => 0.8, 'freq' => 'weekly'],
            'contacto'               => ['priority' => 0.7, 'freq' => 'monthly'],
            'esna'                   => ['priority' => 0.6, 'freq' => 'monthly'],
            'pagos'                  => ['priority' => 0.6, 'freq' => 'monthly'],
            'politicas-privacidad'   => ['priority' => 0.5, 'freq' => 'yearly'],
            'politica-de-cookies'    => ['priority' => 0.5, 'freq' => 'yearly'],
            'terminos-condiciones'   => ['priority' => 0.5, 'freq' => 'yearly'],
            'libro-reclamaciones'    => ['priority' => 0.5, 'freq' => 'yearly'],
        ];
        
        // Aeronaves
        $aeronaves = [
            'KingAirB200', 'KingAirB350', 'Beechcraft1900D', 'Mi17',
            'GulfstreamG100', 'GulfstreamGIV', 'HondaJet', 'Phenom100', 'Phenom300',
            'Challenger300', 'Challenger350', 'Challenger601', 'Challenger604',
            'Challenger605', 'Challenger650', 'Challenger850',
            'Citation550Bravo', 'CitationCj4', 'CitationEncore', 'CitationXLS',
            'CitationHemisPhere', 'CitationLatitude', 'Mi8-mtv1', 'Ecureuil-b3'
        ];
        
        // Tours
        $tours = [
            'machu-picchu', 'tesoros-cusco', 'vinicunca'
        ];
        
        // Sobrevuelos
        $sobrevuelos = [
            'titicaca-lake', 'choquequirao', 'nazca-lines', 'valle-maras', 'vinicunca-elite'
        ];
        
        // Blog posts
        $blogPosts = [
            'vuelos-peru' => ['priority' => 0.8, 'freq' => 'monthly', 'date' => '2025-12-20'],
            'Aventura-Cusco' => ['priority' => 0.7, 'freq' => 'monthly', 'date' => '2024-01-01']
        ];
        
        $count = 0;
        
        // Agregar páginas principales
        foreach ($locales as $locale) {
            foreach ($mainPages as $page => $config) {
                $url = $page === '' ? "{$baseUrl}/{$locale}" : "{$baseUrl}/{$locale}/{$page}";
                
                $sitemap->add(
                    Url::create($url)
                        ->setPriority($config['priority'])
                        ->setChangeFrequency($config['freq'])
                        ->setLastModificationDate(now())
                );
                $count++;
            }
        }
        
        $this->info("✓ Added {$count} main pages");
        
        // Agregar aeronaves
        $aeronaveCount = 0;
        foreach ($locales as $locale) {
            foreach ($aeronaves as $aeronave) {
                $sitemap->add(
                    Url::create("{$baseUrl}/{$locale}/aeronaves/{$aeronave}")
                        ->setPriority(0.8)
                        ->setChangeFrequency('weekly')
                        ->setLastModificationDate(now())
                );
                $aeronaveCount++;
            }
        }
        
        $this->info("✓ Added {$aeronaveCount} aircraft pages");
        
        // Agregar tours
        $tourCount = 0;
        foreach ($locales as $locale) {
            foreach ($tours as $tour) {
                $sitemap->add(
                    Url::create("{$baseUrl}/{$locale}/agencia/{$tour}")
                        ->setPriority(0.8)
                        ->setChangeFrequency('weekly')
                        ->setLastModificationDate(now())
                );
                $tourCount++;
            }
        }
        
        $this->info("✓ Added {$tourCount} tour pages");
        
        // Agregar sobrevuelos
        $sobrevueloCount = 0;
        foreach ($locales as $locale) {
            foreach ($sobrevuelos as $sobrevuelo) {
                $sitemap->add(
                    Url::create("{$baseUrl}/{$locale}/sobrevuelo/{$sobrevuelo}")
                        ->setPriority(0.8)
                        ->setChangeFrequency('weekly')
                        ->setLastModificationDate(now())
                );
                $sobrevueloCount++;
            }
        }
        
        $this->info("✓ Added {$sobrevueloCount} overflight pages");
        
        // Agregar blog posts
        $blogCount = 0;
        foreach ($locales as $locale) {
            foreach ($blogPosts as $slug => $config) {
                $sitemap->add(
                    Url::create("{$baseUrl}/{$locale}/blog/{$slug}")
                        ->setPriority($config['priority'])
                        ->setChangeFrequency($config['freq'])
                        ->setLastModificationDate(\Carbon\Carbon::parse($config['date']))
                );
                $blogCount++;
            }
        }
        
        $this->info("✓ Added {$blogCount} blog posts");
        
        // Guardar sitemap
        $sitemap->writeToFile(public_path('sitemap.xml'));
        
        $totalUrls = $count + $aeronaveCount + $tourCount + $sobrevueloCount + $blogCount;
        
        $this->info('');
        $this->info("🎯 Sitemap generado exitosamente!");
        $this->info("📊 Total de URLs: {$totalUrls}");
        $this->info("📁 Ubicación: public/sitemap.xml");
        $this->info("🌐 URL: {$baseUrl}/sitemap.xml");
        
        return 0;
    }
}
