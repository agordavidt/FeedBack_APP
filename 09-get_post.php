<?php 
/** ---- $_GET & $_POST Superglobals ---- */

/**
 * We can pass data through urls and forms using the $_GET and $_POST superglobals.
 */

 // echo $_GET['name'];

 //echo 'Hello ' . PHP_EOL . ' David';


 if(isset($_POST['submit'])){
    echo $_POST['fname'] . '<br>';
    echo $_POST['lname'];
    echo $_POST['email'];
 }



 // GET can be used for urls and forms
 // POST can only be used for forms



?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=John">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<h1>Registration Form</h1>
    <div>
        <label for="fname">First Name: </label>
        <input type="text" name="fname">
    </div>
    <div>
        <label for="lname">Last Name: </label>
        <input type="text" name="lname">
    </div>
    <div>
        <label for="email">email: </label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="phone">phone: </label>
        <input type="phone" name="phone">
    </div>
    <input type="submit" value="submit" name="submit">

</form>


<!-- 
<div>
    <h1>User Profile</h1>
    <p>First Name: <?php echo $_POST['fname'] ?></p>
    <p>Last Name: <?php echo $_POST['lname'] ?></p>
    <p>email: <?php echo $_POST['email'] ?></p>
    <p>Phone: <?php echo $_POST['phone'] ?></p>
</div> -->

