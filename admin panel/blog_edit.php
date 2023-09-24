<?php
include ('config.php');

?>
<?php
   $abc = $_GET['id'];
if(isset($_POST['add_blog'])){
   $exp = $_POST['exp'];
   $des = $_POST['des'];
    $image =$_FILES['image']['name'];
    $imgtn =$_FILES['image']['tmp_name'];
    $imgty =$_FILES['image']['type'];
    $imgsi =$_FILES['image']['size'];
    $folder ="../hospital/image/";

    if($imgty == "image/png"  ||  $imgty =="image/jpg"  || $imgty =="image/jpeg"){
      if($imgsi <=1000000) {
          $path =$folder .$image;

    
          $sql ="update  blog set exp='$exp',des='$des',image='$image' where id= '$abc'";
         $result =  mysqli_query($conn,$sql);
          header('location: blog_details.php ');
    move_uploaded_file($imgtn,$path);
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

   <h1 class="heading">add blog</h1>

   <form action="#" method="post" enctype="multipart/form-data">
   <?php




$results = "SELECT * FROM blog where id ='$abc'";
$query_num =  mysqli_query($conn,$results);

if(mysqli_num_rows ($query_num) >0){

    foreach($query_num as $row){

?>
      <h3>blog details</h3>
      <p>doctor experiance <span>*</span></p>
      <input type="text" name="exp" value="<?php echo $row['exp'] ?>"  required maxlength="100" placeholder="enter product name" class="input">
      <p>blog description <span>*</span></p>
      <input type="text" name="des" value="<?php echo $row['des'] ?>"  required maxlength = "100" placeholder="enter product name" class="input">
      <p> image <span>*</span></p>
      <input type="file" required name="image" accept="image/*" class="input">
      <input type="submit" value="add blog" name="add_blog" class="btn">
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
