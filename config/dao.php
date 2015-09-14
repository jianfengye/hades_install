<?php

// put all table and relation to this config
return [
    // 管理员表
    'admin' => [ 'pk' => 'id'],
    // 项目表
    'project' => [
        'pk' => 'id',
        'relations' => [
            'project_mechanics' => [
                'type' => 'has_many',
                'table' => 'project_mechanic',
                'key' => 'id',
                'relate_key' => 'project_id',
            ],
            'logs' => [
                'type' => 'has_many',
                'table' => 'log',
                'key' => 'id',
                'relate_key' => 'project_id',
                'builder' => [
                    'orderBy' => ['created_at', 'desc'],
                    'offset' => [0],
                    'limit' => [20],
                ],
            ]
        ]
    ],
    // 日志表
    'log' => [
        'pk' => 'id',
        'relations' => [
            'project' => [
                'type' => 'has_one',
                'table' => 'project',
                'key' => 'project_id',
                'relate_key' => 'id',
            ],
            'admin' => [
                'type' => 'has_one',
                'table' => 'admin',
                'key' => 'admin_id',
                'relate_key' => 'id',
            ],
        ]
    ],
    // 服务器表
    'mechanic' => ['pk' => 'id'],
    // 项目服务器关系表
    'project_mechanic' => [
        'pk' => 'id',
        'relations' => [
            'mechanic' => [
                'type' => 'has_one',
                'table' => 'mechanic',
                'key' => 'mechanic_id',
                'relate_key' => 'id',
            ],
        ]
    ]
];
