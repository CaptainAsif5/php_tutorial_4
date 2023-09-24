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
    <!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">
    <?php
include('../admin panel/config.php');
$fetch = "SELECT * FROM `client`";
$res = mysqli_query($conn, $fetch);

 while ($row = mysqli_fetch_array($res)) 
 {

?>
 
        <div class="box">
        <img src="image/<?= $row['image']; ?>" alt="" class="image">
            <h3><?php echo $row['name']?></h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text"><?php echo $row['des']?></p>
        </div>

        <?php } ?>
    </div>
</section>


</body>
</html>