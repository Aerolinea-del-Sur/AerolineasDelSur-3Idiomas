<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleScriptVuelo
{
    protected $scriptUrl;

    public function __construct()
    {
        $this->scriptUrl = 'https://script.google.com/macros/s/AKfycbx6Qo5x43qdGkYrGZMM6rFT1BAy7U-mpWvdULVChNvJZ1fpIhT_FrHO05pc6zsw7DE2/exec';
    }

    public function sendFlightData(array $data)
    {
        try {
            // Estructura simplificada: solo nombres, correo, teléfono y tipo de servicio
            $response = Http::timeout(30)->post($this->scriptUrl, [
                'action' => 'createSimpleQuote',
                'payload' => $data
            ]);

            if ($response->successful()) {
                return ['success' => true, 'data' => $response->json()];
            }

            Log::error('Error API Vuelo: ' . $response->body());
            return ['success' => false, 'error' => 'Error externo (' . $response->status() . ')'];

        } catch (\Exception $e) {
            Log::error('Excepción API Vuelo: ' . $e->getMessage());
            return ['success' => false, 'error' => 'Fallo de conexión'];
        }
    }
}