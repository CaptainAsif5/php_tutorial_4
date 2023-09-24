<?php
// include('topbar.php');
include 'config.php';

$results = "SELECT * FROM child ";
$result =  mysqli_query($conn,$results)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>child details</title>
    <style>
  .table{
    border: 3px solid black;
    border-collapse: collapse;
    
  }

    </style>
</head>
<body class="bg bg">
 <h1 class="text-center"><a href="index.php">CHILD DETAILS </a> </h1>

 <table class="table" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">Number</th>
      <th scope="col">Email</th>
      <th scope="col">IMAGES</th>
      <th scope="col">DELETE</th>
    
      
      
    </tr>
  </thead>
  <?php while ($row = mysqli_fetch_array($result)) { ?>
  <tbody>
    <tr>
    <td> <?php echo $row['c_id']; ?> </td>
    <td> <?php echo $row['c_name']; ?></td>
    <td> <?php echo $row['c_number']; ?></td>
    <td> <?php echo $row['c_email']; ?></td>
    <td> <img src="../hospital/image/<?php echo $row ['c_image']?>" alt="" width='50' height='50'></td>
    <td> <a href="c_delete.php?id=<?php echo $row['c_id']?>">Delete</a></td>
    
    </tr>
    
  </tbody>
  <?php } ?>
</table>
</body>
</html>

<!-- end -->