<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light">Add User</a> </button>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Password</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        
        <tbody>
        <?php
            $sql="SELECT * from users";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $name=$row['name'];
                    $email=$row['email'];
                    $mobile=$row['mobile'];
                    $password=$row['password'];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    <td>
                     <button class="btn btn-primary"><a class="text-light" href="update.php? updateId='.$id.'">Update</a></button>
                    <button class="btn btn-danger"><a class="text-light" href="delete.php? deleteId='.$id.'">Delete</a></button>
                    </td>
                    </tr>'
                    ;
                }
              
            }
        
        ?>
            
        </tbody>
        </table>
    </div>
</body>
</html>