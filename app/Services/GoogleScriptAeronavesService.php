<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleScriptAeronavesService
{
    protected $scriptUrl;

    public function __construct()
    {
        $this->scriptUrl = 'https://script.google.com/macros/s/AKfycbyQSA2rRshH-5pGrYM6ykuvERzEhotZWdoOGuczsRXXFIyfKHrMBYjz8N_AgM9W_Gh9ag/exec';

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

