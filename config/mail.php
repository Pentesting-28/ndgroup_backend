<?php

return [

    'driver'      => env('MAIL_DRIVER', 'smtp'),
    'host'        => env('MAIL_HOST', 'smtp.googlemail.com'),
    'port'        => env('MAIL_PORT', 465),


    'from' => [
        'address' => env('De: ', 'direccion@ndgroup.mx'),
        'name'    => env('Correo: ', 'http://ndgroup.mx/'),
    ],

    'encryption'  => env('MAIL_ENCRYPTION', 'ssl'),
    'username'    => env('MAIL_USERNAME'),
    'password'    => env('MAIL_PASSWORD'),
    'sendmail'    => '/usr/sbin/sendmail -bs',
    'markdown'    => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

    'log_channel' => env('MAIL_LOG_CHANNEL'),
];
