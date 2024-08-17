<?php 

$string = 'Hello World';

// Get length of a string
echo strlen($string);

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'r');

// find the position of the last occurence of a substring in a string
echo strrpos($string,'o');

// Reverse a string
echo strrev($string);

// Convert all characters to lowercase
echo strtolower($string);

// convert all charactes to uppercase
echo strtoupper($string);

// uppercase the first character of each word
echo ucwords($string);

// String replae
echo str_replace('World', 'Everyone', $string);

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);

// Starts with
if (str_starts_with($string,'Hello' )){
    echo 'YES';
}

// Ends with
if (str_ends_with($string,'ld' )){
    echo 'YES';
}


// HTML entities

$string2 = '<h1>Hello</h1>';
echo $string2;

$str3 = '<script>alert("Hello")</script>';

echo htmlspecialchars($str3);

// formatted strings
printf('%s likes to %s', 'David', 'code');

