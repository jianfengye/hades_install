<?php

// put all table and relation to this config
return [
    'user' => [
        'pk' => 'id',
    ],
    'question' => [
        'pk' => 'id',
        'model' => '\App\Models\Question',
        'relation' => [
            'answers' => [
                'relation' => 'has_many',
                'table' => 'answer',
                'key' => 'id',
                'relate_key' => 'question_id',
            ],
            'user' => [
                'relation' => 'belong_to',
                'table' => 'user',
                'key' => 'uid',
                'relate_key' => 'id',
            ],
            'append' => [
                'relation' => 'has_one',
                'table' => 'append',
                'key' => 'append_id',
                'relate_key' => 'id',
            ]
        ]
    ],
    'append' => [
        'pk' => 'id',
    ],
    'answer' => [
        'pk' => 'id'
    ],
];
