<?php
// conditionals are control structures
// Types of comparisions
/*
    < Less than
    > Greater than
    <= Less than or equal to
    >= Greater than or equal 
    == Equal to/Less
    === Identical to 
    != Not equal to
    !== Not Identical to    
*/
/* -------------- if statements --------------------- */

/*
** if Statement Syntax
** if (condition) {
        // code to be executed if condition is true

} 

*/

/*

$age = 10;
if($age > 18){
    echo "$age years old can vote";
} else{
    echo "Sorry, $age years old cannot vote";
}

*/

$t = date("H");

// print according to time of day
/* 
if($t < 12){
    echo "Good morning";
}elseif($t < 17){
    echo "Good afternoon";
} 
else{
    echo "Good evening";
}
*/

$posts = ['This is my first posts, Hurray!'];
// empty funtion to check for content in an array
// if(!empty($posts)) {
//     echo 'Post is not empty';
// } else{
//     echo 'Post is empty';
// }

// echo !empty($posts) ? $posts[0] : 'No posts';

// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';

// $firstPost = !empty($posts) ? $posts[0] : null;

// $fistPost = $posts[0] ?? null;
// echo $firstPost;


// Switches

$favColor = 'red';

switch($favColor){
    case 'red':
        echo "Your favourite color is $favColor";
        break;
    case 'blue':
        echo "Your favourite color is $favColor";
        break;
    case 'green':
        echo "Your favourtie color is $favColor";
        break;
    default:
        echo "you don't have a favourite color";
}


