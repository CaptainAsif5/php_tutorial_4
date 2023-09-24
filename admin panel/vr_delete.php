<?php
include 'config.php';

$abc = $_GET['id'];
$sql ="DELETE FROM vax_report WHERE id ='$abc'";
mysqli_query($conn,$sql);
header("location: vax_report_details.php");

?>