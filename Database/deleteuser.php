<?php
include_once "config.php";

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $sql = "Delete from user where id='$id'";
    $result = mysqli_query($conn,$sql);
}

if(isset($_POST['delid'])){
    $id = $_POST['delid'];

    $sql1 = "select * from user where rid in (select rid from rolestable where rid='$id') ";
    $result1 = mysqli_query($conn,$sql1);

    $row = mysqli_num_rows($result1);
    if($row>0){
        echo "You can't delete this role as its assign to user";
    }else{
        $sql3 = "Delete from rolestable where rid='$id'";
        $result = mysqli_query($conn,$sql3);
        echo "done";
    }
}

if(isset($_POST['delbo'])){
    $id = $_POST['delbo'];

    $sql1 = "delete from tblbooking where id='$id' ";
    $result1 = mysqli_query($conn,$sql1);               
    
}

if(isset($_POST['msg_id'])){    
    $id = $_POST['msg_id'];
    $sql1 = "DELETE from tblcontactusquery where id='$id'";    
    $result1 = mysqli_query($conn,$sql1);     
}

if(isset($_POST['imgID'])){    
    $id = $_POST['imgID'];
    $sql1 = "DELETE from tbl_shreeimages where id='$id'";    
    $result1 = mysqli_query($conn,$sql1);     
}

?>