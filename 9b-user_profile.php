<?php
echo $_SERVER['PHP_SELF'];

?>


<div>
    <h1>User Profile</h1>
    <p>First Name: <?php echo $_POST['fname'] ?></p>
    <p>Last Name: <?php echo $_POST['lname'] ?></p>
    <p>email: <?php echo $_POST['email'] ?></p>
    <p>Phone: <?php echo $_POST['phone'] ?></p>
</div>