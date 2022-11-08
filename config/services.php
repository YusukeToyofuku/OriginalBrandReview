<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    
    // 以下を追記
'google' => [
    'client_id' => env('942209401678-tjfh44b29crk0o0nv3ke0vqih80o7vso.apps.googleusercontent.com'),
    'client_secret' => env('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'),
    'redirect' => env('https://original-brand-review.herokuapp.com/') . '/login/google/callback',
]

];
