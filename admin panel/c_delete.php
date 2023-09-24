
<?php
include 'config.php';

$abc = $_GET['id'];
$sql ="DELETE FROM child WHERE c_id ='$abc'";
mysqli_query($conn,$sql);
header("location: child_details.php");

?>