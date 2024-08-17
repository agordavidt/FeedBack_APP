<?php 
$flavours = ['apple', 'citrus', 'papaya', 'guava', 'mango'];

// foreach($flavours as $fruit){
//     echo $fruit . '<br>';
// }

// Get Length
// echo count($flavours);

// Search array
//var_dump(in_array('apple', $flavours));

// Add to array
$flavours[] = 'strawberry';
array_push($flavours, 'chocolate', 'vanila');
// add to begining
array_unshift($flavours, 'banana');

// Remove from array
//array_pop($flavours);   // removes from the end
//array_shift($flavours); // removes fromt the begining
// unset($flavours[2]);     // remove a specific index value

// print_r($flavours);

// Split into 2 chunks
$chunked_array = array_chunk($flavours, 4);
// print_r($chunked_array);


// concatenae arrays
$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
// print_r($arr3);

$arr4 = [...$arr1,...$arr2];    // spread operator
// print_r($arr4);


// combine to create an associative array
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);   
// print_r($c);

$keys = array_keys($c);
//print_r($keys);

$fliiped = array_flip($c);  // turn keys to values and values to keys
// print_r($fliiped);

// range function
$numbers = range(1,20);
// print_r($numbers);

$newNumbers = array_map(function($number){
    return "Number ${number}";
}, $numbers);
// print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($number)=> $number <= 10);

//print_r($lessThan10);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($sum);
