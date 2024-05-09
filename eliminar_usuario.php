<?php
// Incluir el archivo de conexión a la base de datos
include("db_connect.php");

// Verificar si se recibió un ID de usuario para eliminar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["IdUsuario"])) {
    // Obtener el ID de usuario a eliminar
    $idUsuario = $_POST["IdUsuario"];

    // Preparar la consulta SQL para eliminar el usuario
    $sql = "DELETE FROM Usuario WHERE IdUsuario = ?";

    // Preparar la declaración
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros
    $stmt->bind_param("i", $idUsuario);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // La consulta se ejecutó con éxito
        echo "Usuario eliminado exitosamente";
    } else {
        // Error al ejecutar la consulta
        echo "Error al eliminar usuario: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
} else {
    // Si no se recibió un ID de usuario para eliminar, redirigir a alguna página de error
    header("Location: error.php");
    exit();
}
?>
