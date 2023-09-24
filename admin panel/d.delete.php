
<?php
include ('config.php');

$abc = $_GET['id'];
$sql ="DELETE FROM products WHERE id ='$abc'";
mysqli_query($conn,$sql);
header("location: product_details.php")

?>