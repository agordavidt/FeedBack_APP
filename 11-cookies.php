<?php

/** ---------------- Cookies -------------------- */

/**
 * Cookies are a mechanism for storing data in th remote browser and thus 
 * tracking or identifying return users.  You can set specific data to be stored
 * in the browser, and then retrieve it when the user visits the site again.
 * 
 */


 // Set cookie
 setcookie('name', 'David', time() + 86400 * 30); //86400 secs is 1 day

// get and use th cookie

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
} 


// to delete we can set it to the past
setcookie('name', '', time() - 86400);
?>