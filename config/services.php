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
        'domain' => 'sandbox4b5bf8768b0a4f25be3da462c8f996ee.mailgun.org',
        'secret' => 'key-d1392cb609e60b0fdf7d109d0cc6106f',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key' => '',
        'secret' => '',
    ],


    'douban' => [
        'client_id'     => '03b6db5d7a24434d0b2492186e6cc9e7',
        'client_secret' => '8036f78983f237af',
        'redirect'      => 'http://www.lyyw.test/auth/social/callback/douban',
    ],
    'github' => [
        'client_id'     => 'de7bc379179a2ae7315c',
        'client_secret' => '5145ecbf9a58042e663a0ff5bb026e4dd3b73e72',
        'redirect'      => 'http://www.lyyw.test/auth/social/callback/github',
    ],
];
