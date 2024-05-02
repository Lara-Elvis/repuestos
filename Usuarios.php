<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("Routes/head.php")?>
    <title>Usuarios</title>
</head>
<body>
    <?php include("Routes/menu.php")?>
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
</body>
</html>