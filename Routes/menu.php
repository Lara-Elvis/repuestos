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
            <li><a href="Contenido.php<?php echo $user ? '?id=' . $user['IdUsuario'] : ''; ?>">Usuarios</a></li>
            <li><a href="ContenidoMantenimiento.php<?php echo $user ? '?id=' . $user['IdUsuario'] : ''; ?>">Mantenimientos</a></li>
            <li><a href="Evaluareporte.php<?php echo $user ? '?id=' . $user['IdUsuario'] : ''; ?>">Reportes</a></li>
            <li><a href="movimientosProcesos.php<?php echo $user ? '?id=' . $user['IdUsuario'] : ''; ?>">Procesos o Movimientos</a></li>
        </ul>
    </nav>
</div>
