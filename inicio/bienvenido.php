<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restringida</title>
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

        a {
            background-color: #f44336;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 3px;
        }

        a:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

</head>

<body>
    <h2>Bienvenido.</h2>
    <p>¡Bienvenido.</p>
    <a href="logout.php">Salir</a>
</body>
</html>
