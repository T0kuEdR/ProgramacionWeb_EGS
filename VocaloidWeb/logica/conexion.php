<?php
$host_db = "127.0.0.1:3306";
$user_db = "huronmarron";
$pass_db = "123456789";
$db_name = "vocaloid";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    echo"<h1>No jalo</h1>";
}
?>