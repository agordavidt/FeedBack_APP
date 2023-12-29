<?php
// Loops:  use to execute a piece of code while a certain condition is met

/* -------------- for loop ------------------
**for (initialize; condition; increment){
    // code to be executed
}
*/

// for($x = 0; $x <= 10; $x++){
//     echo "Number: $x<br>";
// }

/** -------- While Loop ------------------
 * while (condition){
 * // code to be executed
 * }
 * 
 */

// 



/** ------------ Do While Loop -------------
 *  do {
 * //code to be executed
 * } whle (condition)
 * 
 * do....while lopp will always execue the block of code once, even if the 
 * condition is false.
 * 
 * 
 */

//  $x = 6;
//  do{
//     echo 'Number '. $x . '<br>';
//     $x++;
//  } while($x <= 5);


/**  ------------ Foreach Loop ---------
 * foreach ($array as $value){
 * // code to be executed
 * } 
 */

//  $oceans = ['pacific', 'indian', 'atlantic'];
//  foreach( $oceans as $ocean ) {
//     echo "$ocean ocean <br>";
//  }

//  for($x = 0; $x < count($oceans); $x++) {
//     echo "$ocean ocean <br>";
//  }


// $oceans = ['pacific', 'indian', 'atlantic'];
// foreach( $oceans as $index => $ocean ) {
//    echo $index + 1 .' '. $ocean . ' ocean <br>';
// }

$person = [
    'first_name' => 'David',
    'last_name'=> 'Agor',
    'email' => 'davidagort@gmail.com'
];

foreach($person as $key => $value) {
    echo "$key = $value <br>";
}
    

?>