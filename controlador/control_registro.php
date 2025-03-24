<?php
include 'conexion.php';

$email = $_POST['ema'];
$password = $_POST['pwd'];

if (!empty($email) && !empty($password)) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuarios (email, password) VALUES ('$email', '$hashedPassword')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: ../vista/registro.php?mensaje=Registro exitoso");
        exit();
    } else {
        header("Location: ../vista/registro.php?mensaje=Error al registrar");
        exit();
    }
} else {
    header("Location: ../vista/registro.php?mensaje=Completa todos los campos");
    exit();
}

$conexion->close();
?>
