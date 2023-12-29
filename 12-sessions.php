<?php 
/** ------------------ Sessions ---------------------- **/

/**
 * Sessions are a way to store information (in variables) to be used accross multiple pages.
 * Unlike cookies, sessions are stored on the server
 * 
 */


 session_start();

 if(isset($_POST['submit'])){
    // using htmlspecialchars to sanitize

   // $name = htmlspecialchars($_POST['name']);
    //$age = htmlspecialchars($_POST['age']);

    //using filter inputs to sanitize
    $username = filter_input(INPUT_POST, 'username', 
    FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    


    if($username == 'malu' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: /PHP-Backend/extras/dashboard.php'); // redirect file
    } else {
        echo 'incorrect login credentials';
    }
 } 

?>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<h1>Login</h1>
    <div>
        <label for="username">Userame: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    
    <input type="submit" value="submit" name="submit">

</form>



