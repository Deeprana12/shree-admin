<?php
include_once "config.php";
//session_start();
function alluser(mysqli $conn){

    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    return ($result);

}
function allusers(mysqli $conn){

    $sql = "SELECT * FROM tblbooking";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    return ($result);

}

function allqueries(mysqli $conn){

    $sql = "SELECT * FROM tbl_contactusquery";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    return ($result);

}

function role2fetch(mysqli $conn,$val){

    $t=$val;
    $sql="select * from rolestable where rid='$t'";
    $r=mysqli_query($conn,$sql);
    $rs=mysqli_fetch_array($r);
    return ($rs['role']);
}

function specificuser(mysqli $conn){

    $sql = "SELECT permisions FROM rolestable where rid in (select rid from user where username = '{$_SESSION['username']}') ";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
//    return $result;
    $res = mysqli_fetch_array($result);
    return ($res['permisions']);
}


function rolefetch(mysqli $conn){

    $sql1 = "SELECT * FROM rolestable";
    $result1 = mysqli_query($conn, $sql1);

    if(!$result1){
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }

    return $result1;

}


function fetchrole1(mysqli $conn,int $id){
    $sql1 = "SELECT * FROM rolestable where rid='$id'";
    $result1 = mysqli_query($conn, $sql1);

    if(!$result1){
        echo "Error: " . $sql1 . " " . mysqli_error($conn);
    }

    $row = mysqli_fetch_array($result1);
    return $row;
}

function totalqueries(mysqli $conn){
    $sql1 = "SELECT * FROM tbl_contactusquery";
    $result1 = mysqli_query($conn, $sql1);
    
    return $result1;
}

function totalimages(mysqli $conn){
    $sql1 = "SELECT * FROM tbl_shreeimages";
    $result1 = mysqli_query($conn, $sql1);

    return $result1;
}

function totalvideos(mysqli $conn){
    $sql1 = "SELECT * FROM tbl_shreevideos";
    $result1 = mysqli_query($conn, $sql1);

    return $result1;
}

?>