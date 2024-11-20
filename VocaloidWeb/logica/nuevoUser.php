<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');
$correo=$_POST['correo'];

$buscarusuario="SELECT * FROM  usuarios WHERE correo ='$correo'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
if($count==1){
    echo"El usuario ya esta registrado";
    echo "<a href='../index.php'>Volver</a>";

}else{

    mysqli_query($conexion,"INSERT INTO usuarios(
        correo,nombreUser,telefono,vocaFav,password)
        VALUES(
            '$_POST[correo]',
            '$_POST[nombreUser]',
            '$_POST[telefono]',
            '$_POST[vocaFav]',
            '$_POST[password]'
        )");
        header('Location: ../index.php');
}
 

?>