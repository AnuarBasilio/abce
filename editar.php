<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$email=$_POST['email'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];

$sql="UPDATE usuario SET name='$name',lastname='$lastname', email='$email' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>