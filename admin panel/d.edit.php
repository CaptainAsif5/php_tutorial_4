
<?php
$abc = $_GET['id'];
include 'config.php';
if(isset($_POST['add_product'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $image =$_FILES['image']['name'];
    $imgtn =$_FILES['image']['tmp_name'];
    $imgty =$_FILES['image']['type'];
    $imgsi =$_FILES['image']['size'];
    // $folder ="uploaded_files/";

    if($imgty == "image/png"  ||  $imgty =="image/jpg"  || $imgty =="image/jpeg"){
      if($imgsi <=100000) {
        //   $path =$folder .$image;

          $sql ="update  products set name='$name', price='$price', stock='$stock',image='$image' where id= '$abc'";
         $result =  mysqli_query($conn,$sql);
          header('location: product_details.php ');
    move_uploaded_file($imgtn,"uploaded_files/$image");
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




   <link rel="stylesheet" href="assets/css/style4.css">



   <section class="add-product">
    
    <h1 class="heading">add product</h1>
    <form action="#" method="post" enctype="multipart/form-data" >
    <?php




$results = "SELECT * FROM products where id ='$abc'";
$query_num =  mysqli_query($conn,$results);

if(mysqli_num_rows ($query_num) >0){

    foreach($query_num as $row){

?>
       <h3>product details</h3>
       <p>product name <span>*</span></p>
       <input type="text" name="name" value="<?php echo $row['name'] ?>" required maxlength="50" placeholder="enter product name" class="input">
       <p>product price <span>*</span></p>
       <input type="number" name="price"  value="<?php echo $row['price'] ?>" required maxlength="10" placeholder="enter product price" min="0" max="9999999999" class="input">
       <p>total stock <span>*</span></p>
       <input type="number" name="stock"  value="<?php echo $row['stock'] ?>" required maxlength="10" placeholder="total products available" min="0" max="9999999999" class="input">
       <p>product image <span>*</span></p>
       <input type="file" required name="image" accept="image/*" class="input">
       <input type="submit" value="add product" name="add_product" class="btn">
       <?php
}
}
?> 
</form>
 </section>

<!-- add product section ends -->
<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/alers.php'; ?>

