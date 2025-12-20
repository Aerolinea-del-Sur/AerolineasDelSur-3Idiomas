<?php

if (! function_exists('seo')) {
    /**
     * Create a new SeoService instance
     *
     * @return \App\Services\SeoService
     */
    function seo(): App\Services\SeoService
    {
        return new App\Services\SeoService();
    }
}
