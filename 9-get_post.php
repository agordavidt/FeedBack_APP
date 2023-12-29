<?php 
/** ---- $_GET & $_POST Superglobals ---- */

/**
 * We can pass data through urls and forms using the $_GET and $_POST superglobals.
 */

 // echo $_GET['name'];

 //echo 'Hello ' . PHP_EOL . ' David';
 echo $_GET['name'] . '<br>';
 echo $_GET['age'];


 // GET can be used for urls and forms
 // POST can only be used for forms

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=John">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="submit" name="submit">

</form>