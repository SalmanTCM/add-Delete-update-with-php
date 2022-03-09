<?php
 include 'connect.php';
 if (isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
     $password=$_POST['password'];
     $sql="INSERT INTO users(name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')";
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
    <input type="text" class="form-control" id="" placeholder="Enter Your Name" name="name"  autocomplete="off">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input type="text" class="form-control" id="" placeholder="Enter Your Email" name="email"  autocomplete="off">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Mobile Number</label>
    <input type="text" class="form-control" id="" placeholder="Enter Your Number" name="mobile" autocomplete="off">
  </div>


  <div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input type="password" class="form-control" id="" placeholder="Password" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>

  </body>
</html>