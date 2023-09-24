<?php
    include('nav.php');
if(isset($_POST['subbtn'])){
    include('../admin panel/config.php');
    $name = $_POST['name'];
    $number = $_POST['number'];
    $age = $_POST['age'];
    $date = $_POST['date'];
    
   

    $sql= "INSERT INTO vax_report (name,number,age,date) values ('$name','$number', '$age','$date')";
    mysqli_query($conn,$sql);

    header('location: index.php ');
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

<h1 class="heading"> <span>.. </span> ... </h1>    
<h1 class="heading"> <span>vaccine </span> report </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="#" method="post"  enctype="multipart/form-data">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>VACCINE REPORT </h3>
            <input type="text"name="name" required="" placeholder="patient name" class="box">
            <input type="number"name="number"  required="" placeholder="patient number" class="box">
            <input type="number"name="age"  required="" placeholder="patient age" class="box">
            <input type="date"name="date"  required="" placeholder="patient vaccine date" class="box">
            <input type="submit" name="subbtn" value="vaccine report now" class="btn">
        </form>

    </div>

</section>
</body>
</html>

<!-- appointmenting section ends -->
