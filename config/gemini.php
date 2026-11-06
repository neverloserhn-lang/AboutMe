
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Gemini API Configuration
    |--------------------------------------------------------------------------
    */

    'api_key' => env('GEMINI_API_KEY'),

    'model' => env('GEMINI_MODEL', 'gemini-3.8-flash'),

    'auto_reply' => env('GEMINI_AUTO_REPLY', false),

    'endpoint' => 'https://generativelanguage.googleapis.com/v1beta/models/',

    'timeout' => 60,

];
