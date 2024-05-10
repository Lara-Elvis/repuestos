<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    // Redirigir al formulario de inicio de sesión si el usuario no está autenticado
    header("Location: index.php");
    exit;
}

// Obtener el tipo de usuario del usuario actual
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $tipo_usuario = $user['DesTipoUsuario'];
} else {
    // Si no hay información del usuario en la sesión, redirigir al formulario de inicio de sesión
    header("Location: index.php");
    exit;
}

// Verificar el tipo de usuario y mostrar contenido apropiado
if ($tipo_usuario === 'Administrador' || $tipo_usuario === 'Técnico') {
    // Si es Administrador, mostrar el contenido de la página Usuarios.php
    include("reportes.php");
} else {
    // Si es Contable o Técnico, mostrar un mensaje de acceso denegado
    echo "<p>No tienes acceso a esta área.</p>";
}
?>