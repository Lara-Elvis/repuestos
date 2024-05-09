<?php
// Incluir el archivo de conexión a la base de datos
include("db_connect.php");

// Verificar si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $tipo_usuario = $_POST["tipo_usuario"];

    // Preparar la consulta SQL para insertar un nuevo usuario
    $sql = "INSERT INTO Usuario (Nombre, Correo, Contraseña) VALUES (?, ?, ?)";

    // Preparar la declaración
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros
    $stmt->bind_param("sss", $nombre, $correo, $contrasena);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Obtener el ID del usuario recién insertado
        $idUsuario = $stmt->insert_id;

        // Preparar la consulta SQL para insertar el tipo de usuario
        $sql_tipo_usuario = "INSERT INTO TipoUsuario (IdTipoUsuario, DesTipoUsuario) VALUES (?, ?)";

        // Preparar la declaración
        $stmt_tipo_usuario = $conn->prepare($sql_tipo_usuario);

        // Definir el tipo de usuario según el valor seleccionado en el formulario
        switch ($tipo_usuario) {
            case 1:
                $des_tipo_usuario = "Administrador";
                break;
            case 2:
                $des_tipo_usuario = "Contable";
                break;
            case 3:
                $des_tipo_usuario = "Técnico";
                break;
            default:
                $des_tipo_usuario = "";
                break;
        }

        // Vincular los parámetros
        $stmt_tipo_usuario->bind_param("is", $idUsuario, $des_tipo_usuario);

        // Ejecutar la consulta
        $stmt_tipo_usuario->execute();

        // Cerrar la declaración
        $stmt_tipo_usuario->close();

        // La consulta se ejecutó con éxito
        echo "Usuario creado exitosamente";
    } else {
        // Error al ejecutar la consulta
        echo "Error al crear usuario: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
} else {
    // Si no se recibieron datos del formulario, redirigir a alguna página de error
    header("Location: error.php");
    exit();
}
?>