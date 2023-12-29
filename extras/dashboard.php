<?php 
// whenever we use session variable, we have to start a session
session_start();

if(isset($_SESSION['username'])){
    echo '<hi> Welcome ' . $_SESSION['username'] .'</h1>';

    // destroy a session
    echo '<a href="/PHP-Backend/extras/logout.php">Logout</a>';
}else{
    echo '<h1>Welcome Guest</h1>';
}


echo '<a href="/PHP-Backend/12-sessions.php"> Back</a>'



?>