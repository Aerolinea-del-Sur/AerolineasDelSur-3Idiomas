<?php
// app/Services/GoogleScriptTurismo.php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleScriptTurismo
{
    protected $scriptUrl;

    public function __construct()
    {
        $this->scriptUrl = 'https://script.google.com/macros/s/AKfycby-csTBaV6k0LaSpxYpUEhKW9m4b_4Y2uq5PbD-QJ-qE4vnI-THU2YODSPxIHdwOT-cxg/exec';
    }

    public function sendTourData(array $tourData)
    {
        try {
            $response = Http::timeout(60)
                ->post($this->scriptUrl, [
                    'action' => 'createTour',
                    'data' => $tourData
                ]);

            if ($response->successful()) {
                return $response->json();
            } else {
                Log::error('Error Google Script Turismo - Status: ' . $response->status() . ' - Body: ' . $response->body());
                return [
                    'success' => false, 
                    'error' => 'Error en el servicio: ' . $response->status()
                ];
            }

        } catch (\Exception $e) {
            Log::error('Exception Google Script Turismo: ' . $e->getMessage());
            return [
                'success' => false, 
                'error' => 'Error de conexión: ' . $e->getMessage()
            ];
        }
    }
}