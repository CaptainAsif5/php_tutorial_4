
<h1 class="heading"> our <span>doctors</span> </h1>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>VAX HEAVEN.COM</title>
</head>
<body>
    <!-- doctors section starts  -->

<section  class="doctors col-mg-3 " id="doctors">


<div class="box-container">
<?php
include('../admin panel/config.php');
$fetch = "SELECT * FROM `doctor`";
$res = mysqli_query($conn, $fetch);

 while ($row = mysqli_fetch_array($res)) 
 {

?>
    <div class="box">

    <img src="image/<?= $row['image']; ?>" alt="" class="image" >
        
        <h3><?php echo $row['name']?></h3>
        <span><?php echo $row['des']?></span>
        <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            
        </div>
    </div>
    <?php
 }
?>

   
</section>


<!-- doctors section ends -->

</body>
</html>
