<?php
// include('topbar.php');
include 'config.php';
$results = "SELECT * FROM signup ";
$result =  mysqli_query($conn,$results)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>SIGNUP DETAILS</title>
    <style>
  .table{
    border: 3px solid black;
    border-collapse: collapse;
    
  }

    </style>
</head>
<body class="bg bg-secondary">
 <h1 class="text-center"><a href="index.php">SIGNUP DETAILS </a> </h1>

<table class="table" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">ConfirmPassword</th>
      <th scope="col">ACCEPT</th>
      <th scope="col">REGECT</th>
      
      
    </tr>
  </thead>
  <?php while ($row = mysqli_fetch_array($result)) { ?>
  <tbody>
    <tr>
    <td> <?php echo $row['s_id']; ?> </td>
    <td> <?php echo $row['s_name']; ?></td>
    <td> <?php echo $row['s_email']; ?> </td>
    <td> <?php echo $row['s_password']; ?></td>
    <td> <?php echo $row['s_confirmpassword']; ?></td>
    <td>ACCEPT</td>
    <td><a href="signup_delete.php?id=<?php echo $row['id']?>">REGECT</td>
    </tr>
    
  </tbody>
  <?php } ?>
</table>
</body>
</html>

<!-- end -->