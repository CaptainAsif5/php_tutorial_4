
<?php
include 'config.php';

$abc = $_GET['id'];
$sql ="DELETE FROM blog WHERE id ='$abc'";
mysqli_query($conn,$sql);
header("location: blog_details.php");

?>