<?php
include('../admin panel/config.php');
session_start();


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

 
    $select = mysqli_query($conn,"SELECT * FROM `tbl_users` WHERE `email` = '$email' And `password` =  '$password' ");
    $row = mysqli_fetch_array($select);

    $status =$row['status'];

   
    
    if(mysqli_num_rows($select)==1){
        
        if($status == 1){
            
            $_SESSION["status"]= $row ['status'];
            $_SESSION["email"]= $row ['email'];
            $_SESSION["hos_id"]= $row['id'];
            
        
            echo '<script>alert("Login Successfully!")</script>';
            header("location: index.php");
            
    
       
            
           
        }
        
             if ($status == 'pending'){
                echo '<script>alert("Your Account Is Still Pending!")</script>';
            }
             if ($status == 0){
                echo '<script>alert("Your Account Is Rejected!")</script>'; 
                 if (!$row ){
                echo '<script>alert("Kindly  Register Your Account !")</script>';
                 }

            }
        else{
            echo '<script>alert("Kindly  Register Your Accounthjdhjrerh  !")</script>';
        }
    }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>VAX HEAVEN.COM</title>
</head>
<body>
<section class="appointment" id="appointment">



<div class="row">

    <div class="image">
        <img src="image/appointment-img.svg" alt="">
    </div>

    <form  method="post">
    <p><?php echo @$message?></p>
  
        <h3>LOGIN FORM </h3>
        <input type="email"name="email" required placeholder="your email" class="box">
        <input type="password"name="password" required placeholder="your password" class="box">
        <input type="submit" name="submit" value="login" class="btn">
        <p class="box"> <a href="signup.php">Register now</a></p>
    </form>

</div>

</section>
</body>
</html>
