<?php
session_start();
$user = $_SESSION['user']; // Obtener la información del usuario de la variable de sesión
?>

<div class="textoSuperior">
    <header>
        <img class="imagenTitulo" src="imagenes/RepuestosSinFondo.png">
        <h1>Repuestos Escalante</h1>
        <p><?php echo $user['Nombre']; ?></p> <!-- Mostrar el nombre del usuario -->
    </header>
    <nav>
        <ul>
            <li><a href="tecnico.php?id=<?php echo $user['IdUsuario']; ?>">Acerca de la Empresa</a></li>
            <li><a href="Usuarios.php?id<?php echo $user['IdUsuario'];?>">Usuarios</a></li>
            <li><a href="tecnicomantenimientos.php?id=<?php echo $user['IdUsuario']; ?>">Mantenimientos</a></li>
            <li><a href="reportes.php?id=<?php echo $user['IdUsuario']; ?>">Reportes</a></li>
            <li><a href="Procesos.php?id=<?php echo $user['IdUsuario']; ?>">Procesos o Movimientos</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </nav>
</div>
