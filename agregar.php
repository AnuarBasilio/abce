<?php
include("conexion.php");
$con=conectar();

$email=$_POST['email'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];


$sql="INSERT INTO usuario VALUES('$name','$lastname','$email')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>