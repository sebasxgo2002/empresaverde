<?php
$servidor = "localhost"; // La dirección del servidor de la base de datos (en este caso, localhost)
$usuario = "root"; // El nombre de usuario de la base de datos (por defecto en XAMPP es "root")
$password = ""; // La contraseña de la base de datos (por defecto en XAMPP es "")
$basedatos = "turismo_verde"; // El nombre de la base de datos que has creado

// Crear la conexión
$conexion = new mysqli($servidor, $usuario, $password, $basedatos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
