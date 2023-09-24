<?php
// include('topbar.php');
include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
  <title>seasion approved</title>
  <style>
  .table{
    border: 3px solid black;
    border-collapse: collapse;
    
  }

    </style>
</head>
<body>
<table class="table">
<h1 class="text-center"><a href="index.php">ADMIN APPROVED </a> </h1>
  <thead>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">UserName</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Images</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
$query = "select * from tbl_users  order by id asc";
$result=mysqli_query($conn,$query);
while ($row = mysqli_fetch_array ($result )){ ?>
    <tr>
    <td><?php echo $row ['id']?></td>
    <td><?php echo $row ['username']?></td>
    <td><?php echo $row ['email']?></td>
    <td><?php echo $row ['password']?></td>
    <td><img src="../hospital/image/<?php echo $row ['image']?>" alt="" width='50' height='50'></td>
    <td><?php 
    if($row ['status']=="pending"){
      echo "Pending";
    }else if($row ['status']=="1"){
      echo "Approved";
      
    }else{
      echo "Rejected";

    }
    ?>
  </td>
    <form action="admin.approved.php" method= "post" >
      <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
     <td> <input type="submit" name="1" value="Approve">
     <input type="submit" name="0" value="Deny" >
    </td>
  </form>
    <td>
      </td>
    </tr>
    <?php
}
?>
</tbody>
</table>
</body>
</html>
   

  <?php
  if(isset($_POST['1'])){
    $id = $_POST['id'];
    $select ="update  tbl_users set status='1' where id= '$id'";
    $result =mysqli_query($conn,$select);

  }
  if(isset($_POST['0'])){
    $id = $_POST['id'];
    $select ="update  tbl_users set status='0' where id= '$id'";
    $result =mysqli_query($conn,$select);
 
  }
  
 
    
