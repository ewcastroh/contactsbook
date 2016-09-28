<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1181327108607938',
        'client_secret' => 'd1ed28a9c3e5927110f2a93354b4994b',
        'redirect' => 'http://contactsbook.app/social/callback/facebook',
    ],

    'github' => [
        'client_id' => 'bec8b0b841824bb8a2b2',
        'client_secret' => '3f372b48997ee24ec85ed638f3a58fe2f6754f33',
        'redirect' => 'http://contactsbook.app/social/callback/github',
    ],

];
