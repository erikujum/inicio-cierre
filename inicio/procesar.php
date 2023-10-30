<?php

if (!empty($_POST['nickname']) && !empty($_POST['password'])) {
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    if ($nickname == "deverok" && $password == "1234") {
        $error = "OK"; 
        echo 'Bienvenido';
    } else {
        $error = "incorrecto";
        header("Location: inicio.php?error=$error");
    }
} else {
    $error = "vacio";
    header("Location: inicio.php?error=$error");
}