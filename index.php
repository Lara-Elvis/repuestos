<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("Routes/head.php")?>
</head>
<body>
    <?php include("Routes/menu.php")?>

    <section id="acerca">
        <h2>Acerca de la Empresa</h2>
        <p>Texto de ejemplo sobre la empresa...</p>
    </section>

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

    <section id="mantenimientos">
        <h2>Mantenimientos</h2>
        <ul>
            <li><a href="#clientes">Clientes</a></li>
            <li><a href="#productos">Productos</a></li>
        </ul>
    </section>

    <section id="reportes">
        <h2>Reportes</h2>
        <ul>
            <li><a href="#reporte-clientes">Reporte de Clientes</a></li>
            <li><a href="#reporte-productos">Reporte de Productos</a></li>
        </ul>
    </section>

    <section id="procesos">
        <h2>Procesos o Movimientos</h2>
        <ul>
            <li><a href="#facturacion">Facturación</a></li>
        </ul>
    </section>
</body>
</html>
