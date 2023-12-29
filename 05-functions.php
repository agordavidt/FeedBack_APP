<?php 
// functions: blocks of code

// fuction declaration
function registerUser($email){
    echo $email . ' User registered';
}

// call function
// registerUser("davidagort@gmail.com");


function sum($n1 = 9, $n2 = 3){
    return $n1 + $n2;
}

// echo sum(5, 7);

$unit = '2GB';
function buyData($network){
    global $unit;
    echo "credit $network $unit";
}

// buyData("MTN");

// Ananymous function

$subtract = function($n1, $n2){
    return $n1 - $n2;
};

// echo $subtract(45,10);

$multiply = fn($n1, $n2) => $n1 * $n2; // arrow function
echo $multiply(5, 3);

?>