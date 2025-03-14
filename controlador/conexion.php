<?php
$conexion = new mysqli("localhost", "root", "", "");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} 
echo "Conexión exitosa";
?>
