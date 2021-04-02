<?php

namespace App\Http\Middleware;

use Xinax\LaravelGettext\Facades\LaravelGettext;
use View;
use Closure;

class MyConfig
{
    private $languages = [
        '9999_1' => 'en_US',
        '1000_5' => 'it_IT',
        // '3106_E' => 'cs_CZ',
        // '3564_M' => 'sk_SK',
        // '3124_G' => 'pt_PT',    
        // '3123_D' => 'pl_PL',
        '3109_2' => 'fr_FR',
        '3128_5' => 'it_CH',
        '3128_2' => 'fr_CH',
        '3128_3' => 'de_CH',
        '3110_3' => 'de_DE',
        '3136_6' => 'es_ES',
        // '3113_9' => 'el_GR',
        // '3103_3' => 'de_AT',
    ];

    private $cookiesCodeMap = [
        'it_IT' => '2813',
        'de_AT' => '2867',
        'fr_BE' => '2874',
        'nl_BE' => '2876',
        'cs_CZ' => '2868',
        'da_DK' => '2869',
        'fr_FR' => '2874',
        'de_DE' => '2870',
        'en_GB' => '2872',
        'el_GR' => '2871',
        'en_IE' => '2872',
        'nl_NL' => '2876',
        'pl_PL' => '2877',
        'pt_PT' => '2878',
        'sv_SE' => '2880',
        'fr_CH' => '2874',
        'de_CH' => '2870',
        'it_CH' => '2813',
        'hu_HU' => '2875',
        'es_ES' => '2873',
        'sk_SK' => '2879',
        'en_US' => '2872',
    ];

    public function handle($request, Closure $next)
    {
        $this->setSource($request);

        $lang = $this->languageMap($request);
        if (LaravelGettext::getLocale() != $lang) {
            LaravelGettext::setLocale($lang);
        }
        $cookieCode = array_key_exists($lang, $this->cookiesCodeMap) ? $this->cookiesCodeMap[$lang] : null;

        $request->attributes->add([
            'app_url' => env('APP_URL'),
            'home-segment' => $request->segment(1) . '/' . $request->segment(2),
            'segment' => $request->segment(1) . '/' . $request->segment(2) . '/',
            'origin' => 2,
            'source' => session()->get('source'),
            'brand_id' => env('BRAND_ID'),
            'model' => env('MODEL_NAME'),
            'market_code' => $request->segment(1),
            'language_code' => $request->segment(2),
            'cookie_code' => $cookieCode,
        ]);
        return $next($request);
    }

    private function setSource($request)
    {
        if (!$request->session()->exists('source')) {
            session()->put('source', 'site');
        }

        if ($request->query('source')) {
            session()->put('source', $request->query('source'));
        }
    }

    private function languageMap($request)
    {
        $pathArray = explode('/', $request->path());
        $key = $pathArray[0] . '_' . $pathArray[1];
        if (array_key_exists($key, $this->languages))
            return $this->languages[$key];
        else
            return abort(404);
    }
}
