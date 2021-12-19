<?php

include_once 'config.php';
session_start();

    if(isset($_POST['roleid'])){
        $userid = $_POST['roleid'];
        $_SESSION['pid']=$userid;
        $sql1= "SELECT * FROM rolestable where rid='$userid' ";
        $result1 = mysqli_query($conn,$sql1);
        $res1= mysqli_fetch_assoc($result1);
        echo json_encode($res1);
    }

    if(isset($_POST['updatefetch'])){
        $userid = $_POST['updatefetch'];
        // $_SESSION['pid']=$userid;
        $sql1= "SELECT * FROM tblbooking where id='$userid' ";
        $result1 = mysqli_query($conn,$sql1);
        $res1= mysqli_fetch_assoc($result1);
        echo json_encode($res1);
    }
    
    // if(isset($_POST['updatefetch'])){
    //     $userid = $_POST['updatefetch'];
    //     // $_SESSION['pid']=$userid;
    //     $sql1= "SELECT * FROM tblbooking where id='$userid' ";
    //     $result1 = mysqli_query($conn,$sql1);
    //     $res1= mysqli_fetch_assoc($result1);
    //     echo json_encode($res1);
    // }

    if(isset($_POST['changedesid'])){
        $userid = $_POST['changedesid'];
        $fdes=$_POST['des'];
        // $_SESSION['pid']=$userid;
        $sql1= "UPDATE tblbooking SET Status='$fdes' where id='$userid' ";
        $result1 = mysqli_query($conn,$sql1);
        $res1= mysqli_fetch_assoc($result1);
        // echo json_encode($res1);
    }

    if(isset($_POST['rname'])){
        $rname=$_POST['rname'];
        $rinfo=$_POST['rinfo'];
        $permission=$_POST['permission'];
        $pid=$_SESSION['pid'];
        $statement1 = "UPDATE rolestable SET permisions='$permission',role='$rname',roleinfo='$rinfo' WHERE rid = '$pid'";
        $result1 = mysqli_query($conn, $statement1);
    //echo $result;
        if ($result1) {
            echo "done";
        }
    }

?>



