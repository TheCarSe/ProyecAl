<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_reg.css">
    <title>Registro</title>
</head>
<body>
    <section>
        <?php
        if (isset($_GET['mensaje'])) {
            echo "<div class='mensaje'>{$_GET['mensaje']}</div>";
        }
        ?>
        <form action="../controlador/control_registro.php" method="POST">
            <h1>Datos</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="ema" id="ema" aria-label="Email" required>
                <label for="ema">Email</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="pwd" id="pwd" required pattern=".{8,}" title="La contraseña debe tener al menos 8 caracteres" aria-label="Contraseña">
                <label for="pwd">Contraseña</label>
            </div>
            <button type="submit">Enviar</button>
            <div class="regresar">
                <a href="login.php">Regresar</a>
            </div>
        </form>
    </section>
    <script src="../js/scripts_registro.js"></script>
    <script src="../js/disable_navigation.js"></script>
</body>
</html>
