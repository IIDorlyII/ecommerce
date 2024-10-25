<?php
// Conexión a la base de datos
$host = "localhost";
$user = "tu_usuario";
$password = "tu_contraseña";
$database = "ecommerce";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>