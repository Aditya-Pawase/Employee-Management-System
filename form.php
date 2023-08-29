<?php
include 'database.php';
    $name = $_POST['name'];
    $number =$_POST['number'];
    $email =$_POST['email'];
    $id =  $_POST['id'];
        $query ="INSERT INTO management (name, number, email, id) VALUES (?, ?, ?, ?)";
     $stmt=mysqli_prepare($conn,$query);
     mysqli_stmt_bind_param($stmt,"sisi",$name,$number,$email,$id);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);
?>