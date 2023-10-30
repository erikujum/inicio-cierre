<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Inicio de sesión 📩</h2>
    <form action="procesar.php" method="POST">
        <p><label for="nickname">Usuario: </label>
            <input type="text" name="nickname"><br>
        </p>

        <p><label for="password">Contraseña: </label>
            <input type="password" name="password"><br>
        </p>

        <p><input type="submit" value="Acceder"></p>
    </form>

    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == "incorrecto") {
            echo "<h2>El usuario o contraseña son incorrectos</h2>";
        } else if ($error == "vacio") {
            echo "<h2>Campos vacíos</h2>";
        }
    }
    ?>
</body>

</html>