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
        <form>
            <h1>Datos</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="ema" id="ema" required>
                <label for="ema">Email</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="pwd" id="pwd" required>
                <label for="pwd">Contraseña</label>
            </div>
            <button>Enviar</button>
            <div class="regresar">
                <a href="login.php">Regresar</a>
            </div>
        </form>
    </section>

    <script src="../js/scripts_registro.js"></script>
</body>
</html>
