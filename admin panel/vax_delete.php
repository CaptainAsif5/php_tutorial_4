<?php
include 'config.php';

$abc = $_GET['id'];
$sql ="DELETE FROM vax_book WHERE id ='$abc'";
mysqli_query($conn,$sql);
header("location: vax_book_details.php");

?>