<?php
include 'config.php';

$abc = $_GET['id'];
$sql ="DELETE FROM signup WHERE id ='$abc'";
mysqli_query($conn,$sql);
header("location: signup_details.php");

?>