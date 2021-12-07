<?php

$arrayOfUsers = [
    'galal',
    'donya',
    [
        'id'=>5,
        'name'=>'kero',
        'x'=>[
            'ahmed',
            'aya'
        ]
    ],
    
];

// echo $arrayOfUsers[2]['name'];
// echo $arrayOfUsers[3][1];
echo $arrayOfUsers[2]['x'][0];