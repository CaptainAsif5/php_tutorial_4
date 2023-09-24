



<?php
include'nav.php';
include ('../admin panel/config.php');
$abc = $_GET['id'];
if(isset($_POST['subbtn'])){
    $name = $_POST['name'];
    $image =$_FILES['image']['name'];
    $imgtn =$_FILES['image']['tmp_name'];
    $imgty =$_FILES['image']['type'];
    $imgsi =$_FILES['image']['size'];
    // $folder ="image/";

    if($imgty == "image/png"  ||  $imgty =="image/jpg"  || $imgty =="image/jpeg"){
      if($imgsi <=1000000) {
        //   $path =$folder .$image;

    $sql ="update  tbl_users set username='$name',image='$image' where id= '$abc'";
    $result = mysqli_query($conn,$sql);
    header('location: index.php');
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
<h1 class="heading"> <span>... </span> ... </h1>    
<h1 class="heading"> <span>edit</span> profile </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="#" method="post"  enctype="multipart/form-data">
        <?php




$results = "SELECT * FROM tbl_users where id ='$abc'";
$query_num =  mysqli_query($conn,$results);

if(mysqli_num_rows ($query_num) >0){

    foreach($query_num as $row){

?>
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>EDIT PROFILE</h3>
            <input type="text"name="name"  value= "<?php echo $row['username'] ?>" placeholder="your name" class="box">
            <input type="file" name="image"  required="" class="box" accept="image/jpg, image/jpeg, image/png">
            <input type="submit"  required="" name="subbtn" value="edit profile" class="btn">
            <?php 
            
        }
    }
            ?>
        </form>

    </div>

</section>
</body>
</html>

<!-- appointmenting section ends -->
