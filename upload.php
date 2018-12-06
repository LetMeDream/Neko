
<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "pdf") {
        echo "Sorry, only JPG, JPEG, PNG, PDF & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        //echo nl2br ("Disculpe, ese archivo fue subido antes. \n (Intente cambiarle el nombre)");
        //$uploadOk = 0;
        $name = rand(1,100000);
        $nowFileName = $target_dir."$name".basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $nowFileName);
        header('Location: form.php');
    } 
    if ($uploadOk == 0) {
    echo nl2br ("\nLos errores existen, vuelva a intentarlo.");
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))  {
            
            header('Location: form.php');
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    
    }

}

?>
