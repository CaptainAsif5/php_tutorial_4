<?php

include('../admin panel/config.php');
if(isset($_POST["subbtn"]))

{
    $n=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $image =$_FILES['image']['name'];
    $imgtn =$_FILES['image']['tmp_name'];
    $imgty =$_FILES['image']['type'];
    $imgsi =$_FILES['image']['size'];


//   $folder ="image/";

  if($imgty == "image/png"  ||  $imgty =="image/jpg"  || $imgty =="image/jpeg"){
    if($imgsi <=1000000) {
        // $path =$folder .$image;
       
    $user = "SELECT * FROM `tbl_users` WHERE `email` = '{$email}'";
    $userRes = mysqli_query($conn,$user);
    move_uploaded_file($imgtn,"image/$image");

    if(mysqli_num_rows($userRes)>0){
       echo    "User Already Exist!";
    }

    if ($user){
        $q="insert into tbl_users(username,email,password,image)value('$n','$email','$pass','$image')";
            
            $result=mysqli_query($conn,$q);
            if($result)
            {
               header("location:login.php");
               
            }
        }  
        else{
            echo mysqli_error($con);

        }
    }
        else{
            echo  "<script> alert('image size error')</script>";
        }
  }
else{
    echo "<script> alert('image format error');</script>";
}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAX HEAVEN.COM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    

<section class="appointment" id="appointment">

<h1 class="heading"> <span>SIGNUP</span> form </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="#" method="post"  enctype="multipart/form-data">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>SIGN UP</h3>
            <input type="text"name="name" required placeholder="your name" class="box">
            <input type="email"name="email" required placeholder="your email" class="box">
            <input type="password"name="password" required placeholder="your password" class="box">
            <input type="file" name="image"  required class="box" accept="image/jpg, image/jpeg, image/png">
            <input type="submit" name="subbtn" value="Signup" class="btn">
            <p class="box">already have an account? <a href="login.php">Login now</a></p style="font-size: 100%;">
        </form>

    </div>

</section>
</body>
</html>

<!-- appointmenting section ends -->
