<?php

return [
    'name' => env('APP_NAME', 'Laravel'),

    'env' => env('APP_ENV', 'local'),

    'debug' => (bool) env('APP_DEBUG', true),

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL', null),

    'timezone' => 'America/Mexico_City',

    'locale' => 'es',
    'fallback_locale' => 'es',
    'faker_locale' => 'es_ES',

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    // ... el resto de la configuración original de Laravel ...
];
