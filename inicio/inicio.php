<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            width: 300px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

</head>

<body>
    <h2>Inicio de sesión 📩</h2>
    <form action="procesar.php" method="POST">
        <p><label for="nickname">🙍Usuario🙍‍♀️: </label>
            <input type="text" name="nickname"><br>
        </p>

        <p><label for="password">Contraseña🪄: </label>
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