<?php
$server = "mysql"; // Servidor de la base de datos
$user = "root"; // Usuario de MySQL (por defecto en XAMPP es "root")
$pass = "123456"; // Contraseña (en XAMPP usualmente está vacía)
$bd = "phplogin"; // Nombre de la base de datos

$conn = new mysqli($server, $user, $pass, $bd);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
