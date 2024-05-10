<?php
session_start();

// Incluir archivo de conexión a la base de datos
require_once 'db_connect.php';

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar las credenciales del usuario y obtener su tipo de usuario
$sql = "SELECT Usuario.*, TipoUsuario.DesTipoUsuario FROM Usuario
        INNER JOIN TipoUsuario ON Usuario.IdUsuario = TipoUsuario.IdTipoUsuario
        WHERE Usuario.Nombre = '$username' AND Usuario.Contraseña = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Usuario autenticado correctamente
    $user = $result->fetch_assoc();
    $_SESSION['username'] = $username;

    $_SESSION['username'] = $username;
$_SESSION['user'] = $user;
    
    // Redirigir según el tipo de usuario
    switch ($user['DesTipoUsuario']) {
        case 'Administrador':
            header("Location: inicio.php");
            break;
        case 'Contable':
            header("Location: inicio.php");
            break;
        case 'Técnico':
            header("Location: inicio.php");
            break;
        default:
            header("Location: dashboard.php");
    }
} else {
    // Usuario no encontrado o credenciales incorrectas
    echo "Usuario o contraseña incorrectos. <a href='index.html'>Volver</a>";
}
?>
