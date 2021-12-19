<?php
    include_once "config.php";
    session_start();
    // user registration
    if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM  user WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            if ($result->num_rows == 1) {
                $error = "Username already exists !";
                $_SESSION['alert-title'] = "Error";
                $_SESSION['alert-body'] = $error;
                header("Location: ../Views/register.php");
                exit();
            }else{
                $sql = "INSERT INTO user (username, firstname, lastname, password, rid) 
                       VALUES ('$username', '$firstname', '$lastname', '$password', '0')";
                if (mysqli_query($conn, $sql)) {
                    $msg = "You are Successfully registered !";
                    $_SESSION['alert-title'] = "Success";
                    $_SESSION['alert-body'] = $msg;
                    header("Location: ../index.php");
                    exit();
                } else {
                    echo "Error: " . $sql . " " . mysqli_error($conn);
                }
            }
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
        }
    }

    //user login
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM  user WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            if($result->num_rows==1){
                $result = $result->fetch_assoc();
                if($result['password'] == $password){
                    $_SESSION['username'] = $result['username'];
                    $_SESSION['firstname'] = $result['firstname'];
                    $_SESSION['lastname'] = $result['lastname'];
                    $_SESSION['rid'] = $result['rid'];
                    header("Location: ../Views/admin.php");
                    exit();
                } else{
                    $error = "Please enter valid password !";
                    $_SESSION['alert-title'] = "Error";
                    $_SESSION['alert-body'] = $error;
                    header("Location: ../index.php");
                    exit();
                }
            } else{
                $error = "Username doesn't exist !";
                $_SESSION['alert-title'] = "Error";
                $_SESSION['alert-body'] = $error;
                header("Location: ../index.php");
                exit();
            }
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
        }
    }

    //logout
    if(isset($_POST['logout'])){
        if(isset($_SESSION['rid'])) {
            unset($_SESSION['username']);
            unset($_SESSION['firstname']);
            unset($_SESSION['lastname']);
            unset($_SESSION['rid']);
        }
        header("Location: ../index.php");
        exit();
    }
    mysqli_close($conn);
?>