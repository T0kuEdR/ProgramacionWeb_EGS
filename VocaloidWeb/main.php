<?php
session_start();
$correo = $_SESSION['username'];

if (!isset($correo)) {
    header('location: ./index.php');
} else {
    require "./logica/conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    // Generar el query
    $consulta_sql = "SELECT * FROM videos";
    $resultado = $conexion->query($consulta_sql);
    $count = mysqli_num_rows($resultado); 
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestión de Videos</title>
        <link rel="stylesheet" href="./media/estilos3.css">
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

        <div class="logout">
            <a href='logica/cerrarSesion.php' class="logout-btn">Salir</a>
        </div>

        <div class="content">
            <?php if ($count > 0): ?>
                <table class="video-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Canción</th>
                            <th>Vocaloid</th>
                            <th>Compositor</th>
                            <th>NicoVideo</th>
                            <th>YouTube</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
                            <tr>
                                <td><?= $row['idvideos'] ?></td>
                                <td><?= $row['cancion'] ?></td>
                                <td><?= $row['vocaloid'] ?></td>
                                <td><?= $row['compositor'] ?></td>
                                <td><a href="<?= $row['urlNico'] ?>" target="_blank">Ver en NicoVideo</a></td>
                                <td><a href="<?= $row['urlYT'] ?>" target="_blank">Ver en YouTube</a></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <h1 class="error-message">Sin videos</h1>
            <?php endif; ?>
        </div>

        <div class="actions">
            <h1><a href='eliminarVideo.php' class="action-btn">Eliminar Canción</a></h1>
            <h1><a href='nuevoVideo.php' class="action-btn">Subir</a></h1>
        </div>

        <footer class="footer">
            <div class="container">
                <p>&copy; 2024 Página Vocaloid. Todos los derechos reservados.</p>
                <p>Desarrollado por EmilianoGS</p>
            </div>
        </footer>
    </body>
    </html>

    <?php
}
?>
