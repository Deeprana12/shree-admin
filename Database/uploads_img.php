<?php

include_once "config.php";

if(isset($_POST['upload'])){

    $file = $_FILES['image']['name'];    
    $target = "../Asserts/images/".basename($file); 
    $query = "INSERT INTO shreeimages(image) VALUES ('$file')";

    $res = mysqli_query($conn,$query);

    if($res){        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
    }

    
}


?>