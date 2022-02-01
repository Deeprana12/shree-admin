<?php

include_once "config.php";

$video_name = $_POST['video_name'];
$video_desc = $_POST['video_desc'];
$video_link = $_POST['video_link'];

$sql = "INSERT INTO tbl_shreevideos VALUES ($video_name,$video_desc,$video_link)";

$res = mysqli_query($conn,$sql);

?>