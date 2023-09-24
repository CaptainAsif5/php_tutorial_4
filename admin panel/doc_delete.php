<?php
include 'config.php';

$abc = $_GET['id'];
$sql ="DELETE FROM doctor WHERE id ='$abc'";
mysqli_query($conn,$sql);
header("location: doctor_details.php");

?>