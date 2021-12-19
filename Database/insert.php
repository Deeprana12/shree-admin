<?php
    include("config.php");
    session_start();
    if(isset($_POST['insert'])) {
        $fname = $_POST['fname'];
        $rank = $_POST['rank'];
        $dept = $_POST['dept'];
        $mno = $_POST['mno'];
        $email = $_POST['email'];
        $lno = $_POST['lno'];
        $stat = $_POST['stat'];
        $dist = $_POST['dist'];
        $policestat = $_POST['policestat'];
        $sname = $_POST['sname'];
        $slno = $_POST['slno'];
        $semail = $_POST['semail'];
        $sp = $_POST['sp'];
        $firno = $_POST['firno'];
        $district = $_POST['district'];
        $polices = $_POST['polices'];
        $upload = $_POST['upload'];
        $gist = $_POST['gist'];
        $invest = $_POST['invest'];
        $city = $_POST['city'];
        $code = $_POST['code'];
    // insert query execution
        $sql = "INSERT INTO crimerelated  VALUES (NULL,'$fname', 
                '$rank','$dept','$mno','$email','$lno','$stat','$dist','$policestat','$sname','$slno','$semail','$sp','$firno','$district','$polices','$upload','$gist','$invest','$city','$code')";
       if (mysqli_query($conn, $sql)) {
           header("Location: ../Views/sign-up.php");
           exit();
        } else {
           echo "Error: " . $sql . " " . mysqli_error($conn);
        }
    }
    // get particular data using id
    if(isset($_GET['action'])) {
        if($_GET['action'] == 'getData') {
            $sql = "SELECT * FROM crimerelated WHERE id = '" . $_GET["id"] . "'";
            $result = mysqli_query($conn, $sql);
            die(json_encode($result->fetch_assoc()));
        }
    }
    mysqli_close($conn);
?>