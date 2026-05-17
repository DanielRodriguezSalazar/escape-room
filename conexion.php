<?php
$servidor = "localhost";
$usuario = "root";
$password = ""; // Cambiar si tu entorno local (XAMPP/MAMP) tiene contraseña
$base_datos = "escape_room";

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>