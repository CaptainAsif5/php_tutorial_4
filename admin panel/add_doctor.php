<?php

include 'config.php';

if(isset($_POST['add_doctor'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $exp = mysqli_real_escape_string($conn, $_POST['exp']);
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = '../hospital/image/'.$image;


 
      if($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `doctor`(name, des, image) VALUES('$name', '$exp', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'add successfully!';
            header('location:index.php');
         }else{
            $message[] = 'no add doctor try again!';
         }
      }
   }



?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add doctor</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../admin panel/assets/css/style4.css">
</head>
<body>
   
<!-- header section starts  -->

<!-- header section ends -->

<!-- add product section starts  -->

<section class="add-product">

   <h1 class="heading">add doctor</h1>

   <form action="#" method="post" enctype="multipart/form-data">
      <h3>doctor details</h3>
      <p>doctor name <span>*</span></p>
      <input type="text" name="name" required maxlength="50" placeholder="enter product name" class="input">
      <p>doctor experiance <span>*</span></p>
      <input type="text" name="exp" required maxlength="50" placeholder="enter product name" class="input">
     
      <p> image <span>*</span></p>
      <input type="file" required name="image" accept="image/*" class="input">
      <input type="submit" value="add doctor" name="add_doctor" class="btn">
   </form>

</section>

<!-- add product section ends -->
<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/alers.php'; ?>

</body>
</html>