<?php
$conn= mysqli_connect("localhost","root","1234","admin_homecare") or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Bangkok');
?>