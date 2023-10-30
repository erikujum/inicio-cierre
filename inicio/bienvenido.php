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
</head>

<body>
    <h2>Esta es la página restringida 🚀</h2>
    <p>¡Bienvenido a esta página restringida! Puedes personalizar su contenido aquí.</p>
    <a href="logout.php">Salir</a>
</body>
</html>
