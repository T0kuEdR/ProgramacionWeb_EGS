<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./media/estilos2.css">
    <title>Registro</title>
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
    <header  >
        <h3>Registrar nuevo usuario</h3>
    </header>
    
    <div>
        <form action="./logica/nuevoUser.php" method="post">
            <hr>
            <div>
                <label for="correo">Ingresa tu correo:</label>
                <input type="mail" name="correo" required maxlength="100" placeholder="Ingresa tu correo">
                <br><br>
                <label for="nombreUser">Nombre de usuario:</label>
                <input type="text" name="nombreUser" required maxlength="100" placeholder="Nombre de usuario">
                <br><br>
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" required maxlength="12" placeholder="Ingresa tu telefono">
                <br><br>
                <label for="vocaFav">Tu vocaloid favorito:</label>
                <input type="text" name="vocaFav" required maxlength="100" placeholder="vocaloid favorito">
                <br><br>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" required maxlength="45" placeholder="Ingresa tu contraseña">
                <br><br>
            </div>
             <button type="submit" name="submit"  >Registrar</button>
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