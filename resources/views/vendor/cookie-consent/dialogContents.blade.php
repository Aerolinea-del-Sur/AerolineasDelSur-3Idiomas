<div class="js-cookie-consent cookie-consent" style="position: fixed; bottom: 0; left: 0; right: 0; z-index: 9999; padding: 20px; background: linear-gradient(135deg, rgba(10,10,10,0.98), rgba(20,20,20,0.98)); backdrop-filter: blur(10px); border-top: 2px solid rgba(212,175,55,0.3); box-shadow: 0 -4px 20px rgba(0,0,0,0.5);">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
            <div style="flex: 1; min-width: 300px;">
                <p style="color: #fff; font-size: 14px; line-height: 1.6; margin: 0; font-weight: 500;">
                    🍪 <strong style="color: #D4AF37;">Usamos cookies</strong> para mejorar tu experiencia. Al aceptar, permites el uso de cookies analíticas.
                    <br>
                    <span style="font-size: 13px; color: #aaa; margin-top: 5px; display: inline-block;">
                        Consulta nuestra 
                        <a href="{{ url(app()->getLocale() . '/politica-de-cookies') }}" style="color: #D4AF37; text-decoration: underline;">Política de Cookies</a> y 
                        <a href="{{ url(app()->getLocale() . '/politicas-privacidad') }}" style="color: #D4AF37; text-decoration: underline;">Política de Privacidad</a>
                    </span>
                </p>
            </div>
            <div style="display: flex; gap: 12px; flex-shrink: 0;">
                <button class="js-cookie-consent-agree" style="padding: 12px 28px; background: #D4AF37; color: #000; border: none; border-radius: 6px; font-weight: 600; font-size: 14px; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 2px 8px rgba(212,175,55,0.3);">
                    Aceptar Cookies
                </button>
                <button onclick="window.laravelCookieConsent.hideCookieDialog()" style="padding: 12px 24px; background: transparent; color: #fff; border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; font-weight: 500; font-size: 14px; cursor: pointer; transition: all 0.3s ease;">
                    Rechazar
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    .js-cookie-consent-agree:hover {
        background: #C5A028 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(212,175,55,0.5) !important;
    }
    
    @media (max-width: 768px) {
        .js-cookie-consent > div > div {
            flex-direction: column;
            align-items: flex-start !important;
        }
        .js-cookie-consent > div > div > div:last-child {
            width: 100%;
        }
        .js-cookie-consent > div > div > div:last-child button {
            width: 100%;
        }
    }
</style>
