<?php

return [
    'database' => [
        'name' => 'nombreBD',
        'username' => 'usuarioBD',
        'password' => 'passwordBD',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
