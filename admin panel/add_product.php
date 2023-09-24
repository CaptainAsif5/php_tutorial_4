<?php
// include('topbar.php');
include 'components/connect.php';
include 'components/header.php';

   if(isset($_POST['add_product'])){

      $id = create_unique_id();
      $name = $_POST['name'];
      $name = filter_var($name, FILTER_SANITIZE_STRING);
      $price = $_POST['price'];
      $price = filter_var($price, FILTER_SANITIZE_STRING);
      $stock = $_POST['stock'];
      $stock = filter_var($stock, FILTER_SANITIZE_STRING);

      $image = $_FILES['image']['name'];
      $image = filter_var($image, FILTER_SANITIZE_STRING);
      $ext = pathinfo($image, PATHINFO_EXTENSION);
      $rename = create_unique_id().'.'.$ext;
      $image_size = $_FILES['image']['size'];
      $image_tmp_name = $_FILES['image']['tmp_name'];
      $image_folder = 'uploaded_files/'.$rename;

      if($image_size > 2000000){
         $warning_msg[] = 'Image size is too large!';
      }else{
         $insert_product = $conn->prepare("INSERT INTO `products`(id, name, price, stock, image) VALUES(?,?,?,?,?)");
         $insert_product->execute([$id, $name, $price, $stock, $rename]);
         move_uploaded_file($image_tmp_name, $image_folder);
         $success_msg[] = 'Product Added!';
      }

   }

   ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add product</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/style4.css">
</head>
<body>

<section class="add-product">

   <h1 class="heading">add product</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <h3>product details</h3>
      <p>product name <span>*</span></p>
      <input type="text" name="name" required maxlength="50" placeholder="enter product name" class="input">
      <p>product price <span>*</span></p>
      <input type="number" name="price" required maxlength="10" placeholder="enter product price" min="0" max="9999999999" class="input">
      <p>total stock <span>*</span></p>
      <input type="number" name="stock" required maxlength="10" placeholder="total products available" min="0" max="9999999999" class="input">
      <p>product image <span>*</span></p>
      <input type="file" required name="image" accept="image/*" class="input">
      <input type="submit" value="add product" name="add_product" class="btn">
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