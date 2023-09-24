 <?php
include ('config.php');
// include('topbar.php');
$results = "SELECT * FROM products ";
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
 <h1 class="text-center"><a href="index.php">PRODUCT DETAILS </a> </h1>

<table class="table" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">PRICE</th>
      <th scope="col">STOCK</th>
      <th scope="col">IMAGE</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
      
      
    </tr>
  </thead>
  <?php while ($row = mysqli_fetch_array($result)) { ?>
  <tbody>
    <tr>
      <td> <?php echo $row['id']; ?> </td>
      <td> <?php echo $row['name']; ?></td>
      <td> <?php echo $row['price']; ?> </td>
      <td> <?php echo $row['stock']; ?> </td>
      <td><img src="uploaded_files/<?php echo $row ['image']?>" alt="" width='50' height='50'></td>
      <td> <a href="d.edit.php?id=<?php echo $row['id']?>">Edit</td>
      <td> <a href="d.delete.php?id=<?php echo $row['id']?>">Delete</td>
    </tr>
    
  </tbody>
  <?php } ?>
</table>
</body>
</html>


