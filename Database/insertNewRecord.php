<?php

include_once 'config.php';

$statement = "INSERT INTO `rolestable`(`role`, `roleinfo`, `permisions`) VALUES ('{$_GET['r1']}','{$_GET['r2']}','{$_GET['s']}')";
$result = mysqli_query($conn,$statement);

?>