<?php
require './conexion.php';
session_start();

$correo = $_POST['correo'];
$password = $_POST['password'];

$q = "SELECT COUNT(*) AS conteo from usuarios where correo = '$correo' and password = '$password'";

$consulta = mysqli_query($conexion, $q);

$array = mysqli_fetch_array($consulta);

if($array['conteo' == 1]){
    $_SESSION['username'] =  $correo;

    header('location: ../main.php');
}else{
    header('location: ../errorMain.php');
}

?>