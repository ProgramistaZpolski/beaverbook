<?php

return [
    'database' => [
        'name' => 'beaverbook', // nazwa bazy danych
        'username' => 'root', // nazwa użytkownika
        'password' => 'mojasuperbazadanych', // hasło do bazy
        'connection' => 'mysql:host=127.0.0.1', // gdzie się połączyć z bazą
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ],
    "siteurl" => "http://kasztan.art:7000/" // zmień na URL twojej strony
];
