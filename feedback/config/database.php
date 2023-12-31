<?php 

$host = 'localhost';
$username = 'david';
$password = "123456";
$database = 'self_dev';


// creating -daabase connection
$con = mysqli_connect($host, $username, $password, $database);


//check databae connection
if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}else{
    echo "Connected Successfully";
}


?>