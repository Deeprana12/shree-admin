<?php

include_once "config.php";

if(isset($_POST['view'])){
    $view = $_POST['view'];
    $sql1= "SELECT * FROM user where id='$view'";
    $result1 = mysqli_query($conn,$sql1);
    $res1= mysqli_fetch_assoc($result1);
    echo json_encode($res1);
}

if(isset($_POST['fetchdesofId'])){
    $view = $_POST['fetchdesofId'];
    $sql1= "SELECT Status FROM tblbooking where id='$view'";
    $result1 = mysqli_query($conn,$sql1);
    $res1= mysqli_fetch_assoc($result1);
    echo json_encode($res1);
}


if(isset($_POST['viewid'])){
    $view = $_POST['viewid'];
    $sql1= "SELECT * FROM rolestable where rid='$view'";
    $result1 = mysqli_query($conn,$sql1);
    $res1= mysqli_fetch_assoc($result1);
    echo json_encode($res1);
}

if(isset($_POST['viewiduser'])){    
    $id=$_POST['viewiduser'];
    $sql1= "SELECT * FROM tblbooking where id='$id'";
    $result = mysqli_query($conn,$sql1);    
    $res1= mysqli_fetch_assoc($result);
    echo json_encode($res1);
}

if(isset($_POST['sendmsg'])){    
    $id=$_POST['sendmsg'];
    $sql1= "SELECT * FROM tblcontactusquery where id='$id'";
    $result = mysqli_query($conn,$sql1);    
    $res1= mysqli_fetch_assoc($result);
    echo json_encode($res1);
}

?>