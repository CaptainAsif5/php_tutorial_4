<?php
include('nav.php');
include('../admin panel/config.php');

?>


	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAX HEAVEN.COM</title>
     
     
     
     
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="../admin panel/assets/css/style4.css">
</head>
<body>
    
<!-- header section starts  -->



<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="appoinment.php" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>
<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>We are the Care Quality Commission (CQC), the independent regulator of health and adult social care in England. We make sure health and social care services provide people with safe, effective, compassionate, high-quality care and we encourage care services to improve.</p>
            <p>Quality of care is the degree to which health services for individuals and populations increase the likelihood of desired health outcomes</p>
            <a href="learn.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Regular health check-ups can identify any early signs of health issues. Finding problems early means that your chances for effective treatment are increased . doctor Abdul Latif Khan ad vax heaven hospital the great doctor.</p>
            <a href="learn.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Our 24/7 Ambulance Service in Pakistan has ACLS/BLS trained emergency technicians, <br> nurses and our Ambulances are equipped with advanced life-saving equipments  vax heaven hospital the great doctor.</p>
            <a href="learn.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Nam Tran is an associate clinical professor in the Department of Pathology and Laboratory Medicine who oversees COVID-19 testing efforts at UC Davis Health . doctor Abdul Latif Khan ad vax heaven hospital the great doctor.</p>
            <a href="learn.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>10-Mar-2022 — Paxlovid is an oral antiviral pill used to treat COVID-19. Yale Medicine provides 13 things to know about this COVID-19 treatment. doctor Abdul Latif Khan ad vax heaven hospital the great doctor</p>
            <a href="learn.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>A hospital bed or hospital cot is a bed specially designed for hospitalized patients or others in need of some form of health care. These beds have special features both for the comfort and well-being of the patient.</p>
            <a href="learn.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Total patient care is a nursing model where one nurse provides total care to a single patient or a group of patients during his/her shift. During that shift, all the patient needs are addressed by the nurse.</p>
            <a href="learn.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->


<!-- DOCTOR START -->

<?php
include('view_doctor.php');
?>
<!-- DOCTOR END -->

<!-- CLIENT START -->
<?php
include('view_client.php');
?>
<!-- CLIENT END -->

<!-- BLOG START -->
<?php
include('view_blog.php');
?>
<!-- BLOG END -->
<?php 
if(isset($_SESSION["hos_id"])){
include("view_product.php");
?>
				
<?php
}
?>

<!-- CONTACT START -->
<?php
include('contact.php');
?>
<!-- CONTACT END -->

<!-- footer section starts  -->
<?php
include('footer.php');
?>
<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>
</body>
</html>

