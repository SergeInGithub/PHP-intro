<?php
//! Simple Array
$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

//* print_r($numbers);
//* var_dump($numbers);
//* echo $fruits[1];

//! Associative Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

//* echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#00f',
    'green' => '#0f0'
];

//* echo $hex['blue'];

$person = [
    'first_name' => 'Serge',
    'last_name' => 'NYIRIGIRA',
    'email' => 'billionaire@gmail.com',
];

//* echo $person['first_name'];

$people = [
    [
        'first_name' => 'Serge',
        'last_name' => 'NYIRIGIRA',
        'email' => 'billionaire@gmail.com',
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'johnd@gmail.com',
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'janed@gmail.com',
    ]
];

//* echo $people[1]['email'];
var_dump(json_encode($people));