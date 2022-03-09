<?php
include 'connect.php';
$id=$_GET['updateId'];
$sql="SELECT * from users WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];
if (isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="UPDATE users set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       //  echo "data insert into database";
       header('location:display.php');
    }else{
       die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>users</title>
  </head>
  <body>
  <div class="container my-5">
  <form method="post">
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" class="form-control" id="" placeholder="Enter Your Name" name="name"  autocomplete="off" value=<?php echo $name?>>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input type="text" class="form-control" id="" placeholder="Enter Your Email" name="email"  autocomplete="off" value=<?php echo $email?>>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Mobile Number</label>
    <input type="text" class="form-control" id="" placeholder="Enter Your Number" name="mobile" autocomplete="off" value=<?php echo $mobile?>>
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input type="password" class="form-control" id="" placeholder="Password" name="password" value=<?php echo $password?>>
  </div>
 
  <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
  </div>

  </body>
</html>