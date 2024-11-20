<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicion Sesion</title>
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
    <h1>Error al iniciar sesion</h1>
                <form   method="POST"  action="logica/sesion.php">
                    <input type="text" name="correo" placeholder="Correo" />
                        <br />
                    <input type="text" name="password" placeholder="Contraseña" />
                        <br />
                    <button type="submit">Inicar Sesion</button>
                </form> 
                <a href="./crearUser.php">Crear cuenta</a>
</div>
</div>
</div>
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Pagina Vocaloid. Todos los derechos reservados.</p>
        <p>Desarrollado por EmilianoGS</p>
    </div>
</footer>
</body>
</html>
