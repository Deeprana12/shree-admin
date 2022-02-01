<?php
    $host     = "localhost"; // Database Host
    $user     = "root"; // Database Username
    $password = ""; // Database's user Password
    $database = "shree"; // Database Name

    $conn = mysqli_connect($host, $user, $password, $database);
    if (!$conn) {
        die("Failed to connect to MySQL: " .mysqli_connect_error());
    }
?>
