<?php
// check to see if form is submitted
if(isset($_POST['submit'])){
    $allowed_ext = array('png','jpg','jpeg','gif');
    if(!empty($_FILES['upload']['name'])){
        // print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_type = $_FILES['upload']['type'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        //target directory
        $target_dir = "uploads/$file_name";

        // Get file ext
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        //echo $file_ext;

        //validate file ext
        if(in_array($file_ext, $allowed_ext)){
            if($file_size <= 1000000){      //check file size
                move_uploaded_file($file_tmp, $target_dir);
                $message = '<p style="color: green;"> File uploaded</p>';

            } else{
                $message = '<p style="color: red;"> File is too large</p>';
            }
        }else{
            $message = '<p style="color: red;"> Invalid file type</p>';
        }

    }else{
        $message = '<p style="color: red;"> Please choose a file</p>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploads</title>
</head>
<body>
    <?php echo $message ?? null; ?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <label for="upload">Select Image to Upload</label><br>
    <input type="file" name="upload"><br>
    <input type="submit" value="submit" name="submit">
</form>
    
</body>
</html>