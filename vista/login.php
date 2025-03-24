<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_login.css">
    <title>Login</title>
</head>
<body>
    <section>
        <?php
        if (isset($_GET['mensaje'])) {
            echo "<div class='mensaje'>{$_GET['mensaje']}</div>";
        }
        ?>
        <form action="../controlador/control_login.php" method="POST">
            <h1>Login</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="email" id="email" required>
                <label for="email">Email</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
            </div>
            <button type="submit">Enviar</button>
            <div class="register">
                <p>Don't have an account? <a href="registro.php">Register</a></p>
            </div>
        </form>
    </section>
    <script src="../js/scripts_form.js"></script>
    <script src="../js/disable_navigation.js"></script>
</body>
</html>
