<?php

// Arrays are data types or data strucutres that hold multiple values
// 1. Simple Arrays
$numbers = [1,44,55,22];
$fruits = array('apple', 'oange', 'banana');

// print_r($fruits);
// print_r($numbers);

// var_dump($fruits);

//indexing arrays
// echo $fruits[0];


// 2. Associative Array
 $colors = [
    1 => 'red',
    2 => 'yellow',
    3 => 'green',
    4 => 'blue',
 ];

 // echo $colors[4];

$hex = [
    'red' => 'f00',
    'blue' => '00f',
    'green' => '0f0',
    'white'=> 'fff'
];

// echo $hex['white'];

// print_r($colors);


$person = [
    'first_name' => 'David',
    'last_name'=> 'Agor',
    'email' => 'davidagort@gmail.com'
];

//echo $person['first_name'];

// Multi-Dimensional Arrays

$people =[ 
    [
    'first_name' => 'David',
    'last_name'=> 'Agor',
    'email' => 'davidagort@gmail.com'
    ],
    [
    'first_name' => 'Joel',
    'last_name'=> 'Abbah',
    'email' => 'nungwa91@gmail.com'
    ],
    [
    'first_name' => 'Joseph',
    'last_name'=> 'Ataboh',
    'email' => 'edeboratb@gmail.com'
    ]
];

//echo $people[2]['email'];
var_dump(json_encode($people));

// json_encode: turns associative array to json object
// json_decode: turns json object to an associative array




