<?php
include 'conexion.php';

$email = $_POST['email'];
$passwd = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($passwd, $user['password'])) {
        header("Location: ../vista/inicio.php");
        exit();
    } else {
        header("Location: ../vista/login.php?mensaje=Datos Incorectos");
        exit();
    }
} else {
    header("Location: ../vista/login.php?mensaje=Datos Incorectos");
    exit();
}

$conexion->close();
?>
