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
    <link rel="stylesheet" href="./media/estilos2.css">
    <title>Subir video</title>
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
<header>
        <h3>Agregar nuevo video</h3>
    </header>
    
    <div>
        <form action="./logica/agregarVideo.php" method="post">
            <hr>
            <div>
                <label for="cancion">Ingresa la cancion:</label>
                <input type="text" name="cancion" required maxlength="100" placeholder="Nueva cancion">
                <br><br>
                <label for="vocaloid">Vocaloid:</label>
                <input type="text" name="vocaloid" required maxlength="100" placeholder="Vocaloid">
                <br><br>
                <label for="compositor">Compositor:</label>
                <input type="text" name="compositor" required maxlength="12" placeholder="Ingresa el compositor">
                <br><br>
                <label for="urlNico">URL NicoVideo:</label>
                <input type="text" name="urlNico" required maxlength="100" placeholder="URL">
                <br><br>
                <label for="urlYT">URL YouTube:</label>
                <input type="text" name="urlYT" required maxlength="45" placeholder="URL">
                <br><br>
            </div>
             <button type="submit" name="submit"  >Agregar</button> 
        </form>
    </div>
      <footer class="footer">
    <div class="container">
        <p>&copy; 2024 Pagina Vocaloid. Todos los derechos reservados.</p>
        <p>Desarrollado por EmilianoGS</p>
    </div>
</footer>
</body>
</html>
';
}
?>