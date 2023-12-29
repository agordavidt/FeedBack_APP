<?php 

 if(isset($_POST['submit'])){
    // using htmlspecialchars to sanitize

   // $name = htmlspecialchars($_POST['name']);
    //$age = htmlspecialchars($_POST['age']);

    //using filter inputs to sanitize
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_SPECIAL_CHARS);


    echo $name;
    echo $age;
    
 } 

?>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<h1>Registration Form</h1>
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

