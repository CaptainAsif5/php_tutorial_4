<?php
include 'components/connect.php';



if(isset($_POST['add_to_cart'])){

   $id = create_unique_id();
   $product_id = $_POST['product_id'];
   $product_id = filter_var($product_id, FILTER_SANITIZE_STRING);
   $qty = $_POST['qty'];
   $qty = filter_var($qty, FILTER_SANITIZE_STRING);
   
   $verify_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ? AND product_id = ?");
   $verify_cart->execute([$user_id, $product_id]);
   
   $max_cart_limit = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
   $max_cart_limit->execute([$user_id]);
   
   if($verify_cart->rowCount() > 0){
      $warning_msg[] = 'Already added to cart!';
   }elseif($max_cart_limit->rowCount() == 10){
      $warning_msg[] = 'Cart is full!';
   }else{
      
      $select_p = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
      $select_p->execute([$product_id]);
      $fetch_p = $select_p->fetch(PDO::FETCH_ASSOC);
      
      $total_stock = ($fetch_p['stock'] - $qty);
      
      if($qty > $fetch_p['stock']){
         $warning_msg[] = 'Only '.$fetch_p['stock'].' stock is left';
      }else{
         $insert_cart = $conn->prepare("INSERT INTO `cart`(id, user_id, product_id, qty) VALUES(?,?,?,?)");
         $insert_cart->execute([$id, $user_id, $product_id, $qty]);
         
         $update_stock = $conn->prepare("UPDATE `products` SET stock = ? WHERE id = ?");
         $update_stock->execute([$total_stock, $product_id]);
         $success_msg[] = 'Added to cart!';
         
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
   <title>Add product</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/style4.css">

</head>
<body>
   
<!-- header section starts  -->

<!-- header section ends -->

<!-- view products section starts  -->

<div class="view-products">

   <h1 class="heading">all products</h1>

   <div class="box-container">

   <?php
      $select_products = $conn->prepare("SELECT * FROM `products`");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){         
            ?>


   <form action="" method="post" class="box <?php if($fetch_product['stock'] == 0){echo 'disabled';}; ?>">


      <input type="hidden" name="product_id" value="<?= $fetch_product['id']; ?>">

      <img src="../admin panel/uploaded_files/<?= $fetch_product['image']; ?>" alt="" class="image">

      <?php if($fetch_product['stock'] > 9){ ?>

         <span class="stock" style="color: green;"><i class="fas fa-check"></i> in stock</span>

      <?php }elseif($fetch_product['stock'] == 0){ ?>

         <span class="stock" style="color: red;"><i class="fas fa-times"></i> out of stock</span>

      <?php }else{ ?>
         <span class="stock" style="color: red;">hurry, only <?= $fetch_product['stock']; ?> 
         left</span>

      <?php } ?>
      <h3 class="name"><?= $fetch_product['name']; ?></h3>

      <div class="flex">

         <p class="price"><i class="fas fa-indian-rupee-sign"></i> <?= $fetch_product
         ['price']; ?></p>

         <input type="number" name="qty" value="1" min="1" max="99" maxlength="2" required class="qty">

      </div>

      <?php if($fetch_product['stock'] != 0){ ?>
         <a href="#" class=" btn">buy now</a>
         <input type="submit" value="add to cart" name="add_to_cart" class="option-btn">

      <?php }; ?>
      
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

</div>

<!-- view products section ends -->

















<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/alers.php'; ?>

</body>
</html>