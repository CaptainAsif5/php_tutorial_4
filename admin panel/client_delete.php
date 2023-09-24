<?php
include 'config.php';

$abc = $_GET['id'];
$sql ="DELETE FROM client WHERE id ='$abc'";
mysqli_query($conn,$sql);
header("location: client_detail.php");

?>