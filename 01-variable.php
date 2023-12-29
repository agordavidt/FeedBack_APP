<?php 
/* --------------------- PHP Data Types ------------------- */
/* 
- String    Series of characters surrounded by qoutes
- Integer   Whole numbers
- Float     Decimal numbers
- Boolean   true or false
- Array     Special variable, which can hold more than one value
- Object    A class
- NULL      Empty variable
- Resource  Special variable that holds a resource
*/

/* ---------------- Variable Rules --------------------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- Variables can't start with a number
- Variables can only conain alpha-numeric characters and underscores (A-z, 0-9, and _)
- Variables are case-sensitive ($name and $NAME are two different variables)
 */

 $name = 'Raymond';
$state = 'lagos'; // String
$season = 'christmass';
$age = 30;
$has_kids = false;

//var_dump($has_kids);
$cash_on_hand = 102.56;

//echo $cash_on_hand;

//output variable and string

//echo $state . ' is having ' . $season;
// echo $name . ' is ' . $age . ' years old'; // single quote
// echo "${name} is ${age} years old"; // double quotes




$x = '5' + '5';
// var_dump($x);
// echo 10 -5;
// echo 5 * 6;
// echo 10 / 2;
// echo 10 % 3;

// constants
define('HOST', 'locahost');
define('DB_NAME','dev_db');

echo HOST;

?>