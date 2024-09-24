<?php

$server;
$uid;
$pwd = '';
$dbname;


$conn = new mysqli($server, $uid, $pwd, $dbname);


if ($conn->connect_error){
    die('Database connection error' . $conn->connect_error);
}
echo 'connection successfully established!';

