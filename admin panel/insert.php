<?php
include('config.php');
if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];
 
    $insert = mysqli_query($conn, "INSERT INTO `signup`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');
 
    if($insert){
       $message[] = 'appointment made successfully!';
    }else{
       $message[] = 'appointment failed';
    }
 
 }
?>