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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [
        'api_key' => 'AIzaSyAEy539V8F96yscK_oOSISfrCKXpbzFCmI',
        'auth_domain' => 'basedatosnube-22aa9.firebaseapp.com',
        'database_url' => 'https://basedatosnube-22aa9-default-rtdb.firebaseio.com',
        'project_id' => 'basedatosnube-22aa9',
        'storage_bucket' => 'basedatosnube-22aa9.appspot.com',
        'messaging_sender_id' => '1012592459035',
        'app_id' => '1:1012592459035:web:b7df55e09d323b4d79e7be',
    ],
];
