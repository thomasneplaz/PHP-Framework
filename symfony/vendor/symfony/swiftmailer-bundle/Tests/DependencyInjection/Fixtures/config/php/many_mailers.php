<?php

$container->loadFromExtension('swiftmailer', [
    'default_mailer' => 'secondary_mailer',
    'mailers' => [
        'first_mailer' => [
            'transport' => 'smtp',
            'username' => 'user_first',
            'password' => 'pass_first',
            'host' => 'example.org',
            'port' => '12345',
            'encryption' => 'tls',
            'auth-mode' => 'login',
            'timeout' => '1000',
            'source_ip' => '127.0.0.1',
            'local_domain' => 'first.example.org',
            'logging' => true,
            'sender_address' => 'first-sender@example.org',
            'delivery_addresses' => ['first@example.org'],
            'delivery_whitelist' => [
                '/firstfoo@.*/',
                '/.*@firstbar.com$/',
            ],
        ],
        'secondary_mailer' => [
            'transport' => 'smtp',
            'username' => 'user_secondary',
            'password' => 'pass_secondary',
            'host' => 'example.org',
            'port' => '54321',
            'encryption' => 'tls',
            'auth-mode' => 'login',
            'timeout' => '1000',
            'source_ip' => '127.0.0.1',
            'local_domain' => 'second.example.org',
            'logging' => true,
            'spool' => [
                'type' => 'memory',
                ],
            'delivery_addresses' => ['secondary@example.org'],
            'delivery_whitelist' => [
                '/secondaryfoo@.*/',
                '/.*@secondarybar.com$/',
            ],
        ],
        'third_mailer' => [
            'transport' => 'smtp',
            'username' => 'user_third',
            'password' => 'pass_third',
            'host' => 'example.org',
            'port' => '12345',
            'encryption' => 'tls',
            'auth-mode' => 'login',
            'timeout' => '1000',
            'source_ip' => '127.0.0.1',
            'local_domain' => 'third.example.org',
            'logging' => true,
            'spool' => [
                'type' => 'file',
                ],
            'sender_address' => 'third-sender@example.org',
            'delivery_addresses' => ['third@example.org'],
            'delivery_whitelist' => [
                '/thirdfoo@.*/',
                '/.*@thirdbar.com$/',
            ],
        ],
    ],
]);
