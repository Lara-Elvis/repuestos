<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Routes/indexcss.css">
    <link rel="icon" type="image/png" href="imagenes/RepuestosSinFondo.png">
    <title>Módulo de Seguridad</title>
</head>
<body>
<div class="login-container">
        <h2>Iniciar sesión</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
