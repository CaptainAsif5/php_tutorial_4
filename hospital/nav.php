<?php 
include('../admin panel/config.php');
session_start();
if(isset($_SESSION["hos_id"])){

	$id = $_SESSION["hos_id"];
	
	$fetch = "SELECT * FROM `tbl_users` WHERE `id` = $id";
	$res = mysqli_query($conn, $fetch);
	$user = mysqli_fetch_array($res);
}

if(isset($_GET['logout'])){
	$abc = $_GET['user_id'];
	session_destroy();
	header('location:login.php');
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VAX HEAVEN.COM	</title>
	<!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
	<style>


@media (max-width:768px){

    #menu-btn{
        display: initial;
    }

    .header .navbar{
        position: absolute;
        top:115%; right: 2rem;
        border-radius: .5rem;
        box-shadow: var(--box-shadow);
        width: 30rem;
        border: var(--border);
        background: #fff;
        transform: scale(0);
        opacity: 0;
        transform-origin: top right;
        transition: none;
    }

    .header .navbar.active{
        transform: scale(1);
        opacity: 1;
		height: 540%;
		display: block;
		padding: 2px;
        transition: .2s ease-out;
    }

    .header .navbar a{
        font-size: 2rem;
        display: block;
        margin:2.5rem;
    }

}

@media (max-width:450px){

    html{
        font-size: 50%;
    }

}
	</style>
</head>
<body>
	<!-- header section starts  -->

<header class="header">

<a href="index.php" class="logo"> <strong>VAX</strong>HEAVEN </a>

<nav class="navbar">
    <a href="index.php">home</a>
    <a href="#about">about</a>
    <a href="#contact">contact</a>
    <a href="#doctors">doctors</a>
	<a href="appoinment.php">appointment</a>
	<?php 
			if(!isset($_SESSION["hos_id"])){
	?>
    <a href="signup.php">signup</a>
    <a href="login.php">login</a>
<?php 
}
?>
 <div class="nav_right">
		
		<ul>
			<li class="nr_li dd_main">
				<?php 
			if(isset($_SESSION["hos_id"])){
				?>       
					<div class="user">
						<a href="#"><?php echo @$user['username']?></a>
                    <img src="image/<?php echo $user['image']?>" alt="profile-img" style="border-radius: 50%; width: 50px; height: 50px;">
                       </div>
					<?php 
				}
				?>
			
					<div class="dd_menu">
						<div class="dd_left"><br>
						
						</div>
						<div class="dd_right">
							<ul>
								<a href="child.php"><li>Child Form</li></a>
								<a href="appoinment.php"><li>Appointment_Form</li></a>
								<a href="vax_book.php"><li>Vaccine Book</li></a>
								<a href="vax_report.php"><li>VaccineReport</li></a>
						
								<a href="edit_profile.php?id=<?php echo $user['id']?>"><li>EditProfile</li></a>
								<a href="nav.php?logout=<?php echo $user['id']; ?>"><li>logout</li></a>
							</ul>
						</div>
					</div>
				</li>
			
			</ul>
		</div>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

<script>
	var dd_main = document.querySelector(".dd_main");

	dd_main.addEventListener("click", function(){
		this.classList.toggle("active");
	})
</script>
</header>


<!-- js file link  -->
<script src="js/script.js"></script>
</body>
</html>