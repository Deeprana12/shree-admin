<?php
include_once "config.php";
session_start();

if(isset($_POST['userid'])){

    $userid = $_POST['userid'];
    $_SESSION['userid']=$userid;
    $sql1= "SELECT * FROM user where id='$userid'";
    $result1 = mysqli_query($conn,$sql1);
    $res1= mysqli_fetch_assoc($result1);
    echo json_encode($res1);
}

if(isset($_POST['changeupdate'])){

    $userid = $_POST['changeupdate'];
    $uname =$_POST['uname'];
    $uemail =$_POST['uemail'];
    $uphone =$_POST['uphone'];
    $uevent =$_POST['uevent'];
    $utime =$_POST['utime'];
    $ubooking =$_POST['ubooking'];
    $ufdt =$_POST['ufdt'];
    $utdt =$_POST['utdt'];
    // $_SESSION['userid']=$userid;
    $sql1= "UPDATE tblbooking SET `name`='$uname',`userEmail`='$uemail',
    `phone`='$uphone',`event`='$uevent',`time`='$utime',`booking`='$ubooking',
    `FromDate`='$ufdt',`ToDate`='$utdt' where id='$userid'";
    $result1 = mysqli_query($conn,$sql1);    
}

if(isset($_POST['ufname'])){

    $userid = $_SESSION['userid'];
    $firstname = $_POST['ufname'];
    $lastname = $_POST['ulname'];
    $username = $_POST['username'];
    $role = $_POST['urole'];
    $sql2= "UPDATE user SET firstname='$firstname', lastname='$lastname', username='$username', rid='$role' where id='$userid'";
    $result2 = mysqli_query($conn,$sql2);

}

if(isset($_POST['adecisioneid'])){
    
    $f=$_POST['f'];
    $id=$_POST['adecisioneid'];
    $sql2= "UPDATE `tblbooking` SET `Status`=$f WHERE id=$id";
    $result2 = mysqli_query($conn,$sql2);

}

if(isset($_POST['rdecisioneid'])){
    
    $f=$_POST['f'];
    $id=$_POST['adecisioneid'];
    $sql2= "UPDATE `tblbooking` SET `Status`=$f WHERE id=$id";
    $result2 = mysqli_query($conn,$sql2);

}

if(isset($_POST['updateuserinfo'])){
        
    $id=$_POST['updateuserinfo'];
    $sql2= "UPDATE `tblbooking` SET  WHERE id=$id";
    $result2 = mysqli_query($conn,$sql2);

}

?>