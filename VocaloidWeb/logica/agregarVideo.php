<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');
$id=$_POST['idvideos'];

$buscarvideo="SELECT * FROM  videos WHERE idvideos ='$id'";

$resultado = $conexion -> query($buscarvideo);
$count =mysqli_num_rows($resultado);
if($count==1){
    echo"El video ya esta registrado";
    echo "<a href='../main'>Volver</a>";

}else{

    mysqli_query($conexion,"INSERT INTO videos(
        cancion,vocaloid,compositor,urlNico,urlYT)
        VALUES(
            '$_POST[cancion]',
            '$_POST[vocaloid]',
            '$_POST[compositor]',
            '$_POST[urlNico]',
            '$_POST[urlYT]'
        )");
        header('Location: ../main.php');
        echo '<br> <h1>Cancion agregada con exito</h1>';
        echo "<a href='../main.php'>Volver al inicio</a>";
}

?>