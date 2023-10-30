<?php

// Comment these lines to hide errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'includes/config.php';
require 'includes/functions.php';

init();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        botonSalir {
            text-align: center;
            color-scheme: rebeccapurple;
        }
    </style>
</head>

<body>
    <button id="botonSalir" onclick="window.location.href = '../logout.php'"> Salir 👽 </button>
</body>

</html>