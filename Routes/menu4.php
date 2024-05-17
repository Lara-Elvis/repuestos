<?php
// Iniciar sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Obtener información del usuario si está disponible en la sesión
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
?>

<div class="textoSuperior">
    <header>
        <img class="imagenTitulo" src="imagenes/RepuestosSinFondo.png">
        <h1>Repuestos Escalante</h1>
        <?php if ($user) : ?>
            <p>Bienvenido <?php echo $user['Nombre']; ?><br><a href="logout.php">Cerrar sesión</a></p> <!-- Mostrar el nombre del usuario -->
        <?php endif; ?>
    </header>
    <nav>
        <ul>
            <li><a href="inicio.php<?php echo $user ? '?id=' . $user['IdUsuario'] : ''; ?>">Acerca de la Empresa</a></li>
            <li><a href="procesos.php<?php echo $user ? '?id=' . $user['IdUsuario'] : ''; ?>">Procesos o movimientos</a></li>
            <li><a href="facturacion.php<?php echo $user ? '?id=' . $user['IdUsuario'] : ''; ?>">Facturación</a></li>
        </ul>
    </nav>
</div>
