
<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}
$fetch = "SELECT * FROM `user_form` WHERE `id` = $user_id";
$res = mysqli_query($conn, $fetch);
$user = mysqli_fetch_array($res);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#index.php">
                        <span class="icon">
                        <box-icon name='donate-heart' ></box-icon>
                        </span>
                        <span class="title">VAX HEAVEN</span>
                    </a>
                </li>

        
                <li>
                    <a href="add_product.php">
                        <span class="icon">
                        <box-icon name='folder-plus' ></box-icon>
                        </span>
                        <span class="title">Add Product</span>
                    </a>
                </li>

             
                <li>
                    <a href="product_details.php">
                        <span class="icon">
                        <box-icon name='low-vision' ></box-icon>
                        </span>
                        <span class="title">Products Details</span>
                    </a>
                </li>
                <li>
                    <a href="child_details.php">
                        <span class="icon">
                        <box-icon type='solid' name='user-detail'></box-icon>                        </span>
                        <span class="title">Child Form Details</span>
                    </a>
                </li>
                <li>
                    <a href="appointment_details.php">
                        <span class="icon">
                        <box-icon name='detail' ></box-icon>
                        </span>
                        <span class="title">Appointment Form Details</span>
                    </a>
                </li>
                <li>
                    <a href="vax_book_details.php">
                        <span class="icon">
                        <box-icon name='bookmarks' ></box-icon>
                        </span>
                        <span class="title">Vaccine Booking Details</span>
                    </a>
                </li>
                <li>
                    <a href="vax_report_details.php">
                        <span class="icon">
                        <box-icon name='report' type='solid' ></box-icon>
                        </span>
                        <span class="title">Vaccine Report Details</span>
                    </a>
                </li>

             
                <li>
                    <a href="admin.approved.php">
                        <span class="icon">
                        <box-icon name='male-sign' ></box-icon>
                        </span>
                        <span class="title">Session Aproved Details</span>
                    </a>
                </li>

                <li>
                    <a href="add_doctor.php">
                        <span class="icon">
                        <box-icon name='log-out' ></box-icon>
                        </span>
                        <span class="title">Add Doctor</span>
                    </a>
                </li>
                <li>
                    <a href="doctor_details.php">
                        <span class="icon">
                        <box-icon name='log-out' ></box-icon>
                        </span>
                        <span class="title">Doctors Details</span>
                    </a>
                </li>
                <li>
                    <a href="add_blog.php">
                        <span class="icon">
                        <box-icon name='log-out' ></box-icon>
                        </span>
                        <span class="title">Add Blog </span>
                    </a>
                </li>
                <li>
                    <a href="blog_details.php">
                        <span class="icon">
                        <box-icon name='log-out' ></box-icon>
                        </span>
                        <span class="title">Blog Details</span>
                    </a>
                </li>
                <li>
                    <a href="add_client.php">
                        <span class="icon">
                        <box-icon name='log-out' ></box-icon>
                        </span>
                        <span class="title">Add Client</span>
                    </a>
                </li>
                <li>
                    <a href="client_detail.php">
                        <span class="icon">
                        <box-icon name='log-out' ></box-icon>
                        </span>
                        <span class="title">Client Details</span>
                    </a>
                </li>
           
                <li>
                    <a href="home.php?logout=<?php echo $user_id; ?>">
                        <span class="icon">
                        <box-icon name='log-out' ></box-icon>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon >
                </div>
                 <!-- new -->
   
                 <!-- new -->

                 <h3><?php echo $user['name']?></h3>
                <div class="user">
                    <img src="uploaded_img/<?php echo $user['image']?>">
                </div>
            </div>

             <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>