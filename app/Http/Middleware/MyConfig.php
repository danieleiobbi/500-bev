<?php

namespace App\Http\Middleware;

use Xinax\LaravelGettext\Facades\LaravelGettext;
use View;
use Closure;

class MyConfig
{
    private $languages = [
        '9999_1' => 'en_US',
        // '1000_5' => 'it_IT',
        '3110_3' => 'de_DE',
    ];

    public function handle($request, Closure $next)
    {
        $this->setSource($request);

        $lang = $this->languageMap($request);
        if (LaravelGettext::getLocale() != $lang) {
            LaravelGettext::setLocale($lang);
        }
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
