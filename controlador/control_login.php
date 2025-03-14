<?php
include 'conexion.php';

// Obtener datos del formulario
$email = $_POST['email'];
$passwd = $_POST['password'];

// Consulta para verificar el usuario
$sql = "SELECT * FROM usuarios WHERE email='$email' AND password='$passwd'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Usuario encontrado, redirigir a inicio.html
    header("Location: inicio.html");
    exit();
} else {
    echo "Email o contraseña incorrectos";
}

$conexion->close();
?>
