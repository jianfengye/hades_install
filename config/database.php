<?php

return [
    "database" => [
        "master1" => [
            "host" => '127.0.0.1',
            "port" => '6000',
            'pass' => '1234',
            'user' => 'yejianfeng',
        ],
        "slave1" => [
            "host" => '127.0.0.1',
            "port" => '6000',
            'pass' => '1234',
            'user' => 'yejianfeng',
        ],
        "salve2" => [
            "host" => '127.0.0.1',
            "port" => '6000',
            'pass' => '1234',
            'user' => 'yejianfeng',
        ]
    ],

    "connection" => [
        "master" => [
            "master1",
        ],
        "slave" => [
            "slave1",
            "slave2"
        ],
    ]
];
