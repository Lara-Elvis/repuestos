<?php
// Iniciar la sesión
session_start();

// Incluir el archivo de conexión a la base de datos
include("db_connect.php");

// Verificar si se recibió el ID del usuario y el nuevo tipo de usuario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["IdUsuario"]) && isset($_POST["nuevo_tipo_usuario"])) {
    // Obtener los datos del formulario
    $idUsuario = $_POST["IdUsuario"];
    $nuevoTipoUsuario = $_POST["nuevo_tipo_usuario"];

    // Preparar la consulta SQL para actualizar el tipo de usuario en la tabla TipoUsuario
    $sql = "UPDATE TipoUsuario SET DesTipoUsuario = ? WHERE IdTipoUsuario = ?";

    // Preparar la declaración
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros
    $stmt->bind_param("si", $nuevoTipoUsuario, $idUsuario);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // La consulta se ejecutó con éxito
        echo "Tipo de usuario actualizado exitosamente";
    } else {
        // Error al ejecutar la consulta
        echo "Error al actualizar el tipo de usuario: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();

    // Redirigir de nuevo a la página de usuarios
    header("Location: Usuarios.php");
    exit();
} else {
    // Si no se recibieron los datos necesarios, redirigir a una página de error
    header("Location: error.php");
    exit();
}
?>
