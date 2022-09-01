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

    'google' => [
        'client_id' => '327646997414-mn89o3s7a30krkohrggkp03nggnoq9lo.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/callback/google',
      ], 

    'facebook' => [
        'client_id' => '474415317894084',
        'client_secret' => '654ab33ba15c86b24fea66f66e48dc01',
        'redirect' => 'http://localhost:8000/callback/facebook',
      ],  

];
