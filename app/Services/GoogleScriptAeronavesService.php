<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleScriptAeronavesService
{
    protected $scriptUrl;

    public function __construct()
    {
        $this->scriptUrl = 'https://script.google.com/macros/s/AKfycbyP501y9C4OFBXRf9AMv3c1xGi8VPHtU_IoQ_JGA2BE78VNRa1N5mDJyrB9uwlHiEenqw/exec';

        if (empty($this->scriptUrl)) {
            throw new \Exception('⚠️ No se ha configurado la URL de Google Script en el archivo .env');
        }
    }

    public function enviarSolicitudAeronave($data)
    {
        try {
            Log::info("📤 Enviando solicitud a Google Apps Script", $data);

            $response = Http::post($this->scriptUrl, $data);

            Log::info("📥 Respuesta de Apps Script: " . $response->body());

            return $response->json();

        } catch (\Exception $e) {
            Log::error("💥 Error al enviar solicitud: " . $e->getMessage());
            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }
}

