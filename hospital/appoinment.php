<?php
include('../admin panel/config.php');
include('nav.php');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `appointment`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');


if($insert){
    echo '<script>alert("Your Appoinment Is Successfully!")</script>';
    header('location:index.php');
}
else{
    echo "appointment failed!";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <title>VAX HEAVEN.COM</title>
</head>
<body>
    <!-- appointmenting section starts   -->

<section class="appointment" id="appointment">
<h1 class="heading"> <span>,,, </span>... </h1>    
<h1 class="heading"> <span>appointment</span> now </h1>    

<div class="row">

    <div class="image">
        <img src="image/appointment-img.svg" alt="">
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <?php
        if(isset($message)) {
            foreach($message as $message) {
            echo'<p class ="message">'.$message.'</p>';
        }
        }
    ?>
  
        <h3>make appointment</h3>
        <input type="text"name="name" required="" placeholder="your name" class="box">
        <input type="number"name="number"   required="" placeholder="your number" class="box">
        <input type="email"name="email"  required="" placeholder="your email" class="box">
        <input type="date"  required="" name="date" class="box">
        <input type="submit" name="submit" value="appointment now" class="btn">
    </form>

</div>

</section>

<!-- appointmenting section ends -->
</body>
</html>