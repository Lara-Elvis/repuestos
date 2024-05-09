<?php
// Credenciales de la base de datos
$servername = "localhost";
$username = "root";
$password = "Conect890";
$dbname = "bd_repuestos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos";
?>
