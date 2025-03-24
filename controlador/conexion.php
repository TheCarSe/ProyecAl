<?php
$conexion = new mysqli("localhost", "root", "12345678", "sistema_usuarios");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} 
echo "Conexión exitosa";
?>
