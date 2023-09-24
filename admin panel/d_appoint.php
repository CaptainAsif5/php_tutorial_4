<?php
include 'config.php';

$abc = $_GET['id'];
$sql ="DELETE FROM appointment WHERE id ='$abc'";
mysqli_query($conn,$sql);
header("location: appointment_details.php");

?>