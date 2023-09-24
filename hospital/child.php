<?php

include('../admin panel/config.php');
include('nav.php');
if(isset($_POST["subbtn"]))

{
    $n=$_POST["name"];
    $no=$_POST["number"];
    $e=$_POST["email"];
    $image =$_FILES['image']['name'];
    $imgtn =$_FILES['image']['tmp_name'];
    $imgty =$_FILES['image']['type'];
    $imgsi =$_FILES['image']['size'];


//   $folder ="image/";

  if($imgty == "image/png"  ||  $imgty =="image/jpg"  || $imgty =="image/jpeg"){
    if($imgsi <=1000000) {
        // $path =$folder .$image;

        $q="insert into child(c_name,c_number,c_email,c_image)value('$n','$no','$e','$image')";
    
        $result=mysqli_query($conn,$q);
    
// kis bhi folder sy file upload ho kr  apky folder my aagy
        move_uploaded_file($imgtn,"image/$image");
        if($result)
        {
           header("location:index.php");
           
        }
        else{
            echo mysqli_error($conn);

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
<h1 class="heading"> <span>.. </span> .. </h1>    
<h1 class="heading"> <span>child</span> form </h1>    

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
      
            <h3>CHILD FORM </h3>
            <input type="text"name="name" required placeholder="your name" class="box">
            <input type="number"name="number" required placeholder="your number" class="box">
            <input type="email"name="email" required placeholder="your email" class="box">
            <input type="file" name="image" class="box"  required accept="image/jpg, image/jpeg, image/png">
            <input type="submit" name="subbtn" value="child appointment now" class="btn">
        </form>

    </div>

</section>
</body>
</html>

<!-- appointmenting section ends -->
