<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>VAX HEAVEN.COM</title>
</head>
<body>
    <!-- blogs section starts  -->

<section class="blogs" id="blogs">

<h1 class="heading"> our <span>blogs</span> </h1>

<div class="box-container">
<?php
include('../admin panel/config.php');
$fetch = "SELECT * FROM `blog`";
$res = mysqli_query($conn, $fetch);

 while ($row = mysqli_fetch_array($res)) 
 {

?>
    <div class="box">
    <img src="image/<?= $row['image']; ?>" alt="" class="image" style="   width: 260px;
    height: 260px;">
        <div class="content">
         
            <h3><?php echo $row['exp']?></h3>
            <p><?php echo $row['des']?></p>
            <a href="learn.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
    </div>

   <?php
 }
   ?>
</div>

</section>

<!-- blogs section ends -->
</body>
</html>