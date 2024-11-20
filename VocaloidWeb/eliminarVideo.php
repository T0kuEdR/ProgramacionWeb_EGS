<?php
session_start();
$correo = $_SESSION['username'];

if(!isset($correo)){
    header('location: ./index.php');
} else {
echo'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="./media/estilos.css">
</head>

<body>
<header>
<nav class="navbar">
        <div class="container">
            <ul class="nav-links">
                <li><a href="./main.php">Inicio</a></li>
            </ul>
        </div>
    </nav>
</header>
<div class="row">
        <div   class="col s12 m5">
            <div>
    <h1 style=" text-align: center;" >Elimina Video</h1>
    <form style=" text-align: center;" method="POST" action="./logica/eliminar.php">

        <input  type="text" name="idvideos" placeholder="ID del video" />
        <br />
        <button type="submit">Eliminar</button>

    </form>
    </div>
        </div>
        
</div>
    
    <h1><a href="main.php">Inicio de listas</a></h1>

<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Pagina Vocaloid. Todos los derechos reservados.</p>
        <p>Desarrollado por EmilianoGS</p>
    </div>
</footer>
    </body>

</html>
';}
?>
