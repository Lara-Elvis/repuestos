<?php
// Incluir el archivo de conexión a la base de datos
include("db_connect.php");

// Preparar la consulta SQL para obtener todos los usuarios con su tipo de usuario
$sql = "SELECT u.IdUsuario, u.Nombre, u.Correo, t.DesTipoUsuario 
        FROM Usuario u
        INNER JOIN TipoUsuario t ON u.IdUsuario = t.IdTipoUsuario";

// Ejecutar la consulta
$result = $conn->query($sql);

// Verificar si se obtuvieron resultados
if ($result->num_rows > 0) {
    // Mostrar los usuarios en una tabla
    echo "<h1>Lista de Usuarios</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Tipo de Usuario</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["IdUsuario"] . "</td>";
        echo "<td>" . $row["Nombre"] . "</td>";
        echo "<td>" . $row["Correo"] . "</td>";
        echo "<td>" . $row["DesTipoUsuario"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    // No se encontraron usuarios
    echo "No se encontraron usuarios";
}

// Cerrar la conexión
$conn->close();
?>
