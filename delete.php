<?php
include 'connect.php';
if (isset($_GET['deleteId'])){
    $id=$_GET['deleteId'];
    $sql="DELETE from users where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>