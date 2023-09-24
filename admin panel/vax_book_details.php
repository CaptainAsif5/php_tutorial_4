<?php
// include('topbar.php');
include 'config.php';
$results = "SELECT * FROM vax_book ";
$result =  mysqli_query($conn,$results)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
    <style>
  .table{
    border: 3px solid black;
    border-collapse: collapse;
    
  }

    </style>
</head>
<body class="bg bg">
 <h1 class="text-center"><a href="index.php">VAX BOOKING DETAILS </a> </h1>

<table class="table" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">Price</th>
      <th scope="col">Date</th>
      <th scope="col">DELETE</th>
      
      
    </tr>
  </thead>
  <?php while ($row = mysqli_fetch_array($result)) { ?>
  <tbody>
    <tr>
    <td> <?php echo $row['id']; ?> </td>
    <td> <?php echo $row['name']; ?></td>
    <td> <?php echo $row['price']; ?> </td>
    <td> <?php echo $row['date']; ?></td>
    <td> <a href="vax_delete.php?id=<?php echo $row['id']?>">Delete</td>
    </tr>
    
  </tbody>
  <?php } ?>
</table>
</body>
</html>

<!-- end -->