<?php

return [

    "database" => [
        "master1" => [
            "hostname" => '127.0.0.1',
            "driver" => 'mysql',
            "port" => '3307',
            'password' => '',
            'username' => 'root',
            'database' => 'hades',
        ],
        "slave1" => [
            "hostname" => '127.0.0.1',
            "driver" => 'mysql',
            "port" => '3307',
            'password' => '',
            'username' => 'root',
            'database' => 'hades',
        ]
    ],

    "connection" => [
        "master" => [
            "master1",
        ],
        "slave" => [
            "slave1"
        ],
    ]
];
