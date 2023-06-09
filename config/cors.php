<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', '/getSentenceList'], // corsを許可するパス（エンドポイント）

    'allowed_methods' => ['*'],

    // cors error comp here!
    'allowed_origins' => ['*'],
    //     'allowed_origins' => [
    //     'http://localhost:3000',
    //     'https://api-for-datumou-app.vercel.app',
    // ],
    // 'allowed_origins' => [env('FRONTEND_URL', 'http://localhost')],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true, // クッキー認証の許可(false(Default value) => trueに変更)。レスポンスヘッダの Access-Control-Allow-Credentials が true を返すようになります。
];
