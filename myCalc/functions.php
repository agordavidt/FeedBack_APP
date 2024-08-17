<?php 

function myCalculator($num01, $operation, $num02){
    
    switch ($operation) {
        case "add":
            $sum = $num01 + $num02;
            break;
        case "sub":
            $sum = $num01 > $num02 ? $num01 - $num02 : $num02 -$num01;            
            break;
        default:
            $sum = "Wrong input";
            break;
    }
    return $sum;
}

// We pass data from one document to another through the url
// We grap data from the url using GET superglobal (GET or POST: to get
// the type that we pass inside the url)

// if the post method was use to parse the data : use $_POST[];
$num01 = $_GET["num01"];
$num02 = $_GET["num02"];
$operation = $_GET["operation"];

$answer = myCalculator($num01, $operation, $num02);


echo "<h1>Answer: $answer</h1>";