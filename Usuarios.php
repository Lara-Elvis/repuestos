<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("Routes/head.php")?>
    <title>Usuarios</title>
</head>
<body>
    <?php include("Routes/menu.php")?>
    <div class="usuarios">
        <section id="crear-usuario">
            <h2>Crear Usuario y Contraseña</h2>
            <form action="crear_usuario.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" required>
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
                <button type="submit">Crear Usuario</button>
            </form>
        </section>
    </div>
    <div class="usuarios">
        <section>
            <h1>Eliminar usuario</h1>
            <form action="Eliminar usuario" method="POST">
                <label for="IdUsuario">Id:</label>
                <input type="text" id="IdUsuario" name="IdUsuario" required>
                <button type="submit">Eliminar</button>
            </form>
        </section>
    </div>
    <div class="usuarios">
        <section>
            <h1>Ver Usuarios</h1>
        </section>
    </div>

    <footer>
        <p class="copyriht">Copyright&#169 2024 Frnacisco Escalante</p>
    </footer>
</body>
</html>