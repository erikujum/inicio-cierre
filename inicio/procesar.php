<?php
if (!empty($_POST['nickname']) && !empty($_POST['password'])) {
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    if ($nickname == "deverok" && $password == "1234") {
        session_start();
        $_SESSION['usuario'] = $nickname;
        session_start();
        if (isset($_SESSION['usuario'])) {
            header("Location: bienvenido.php");
            exit();
        }
    } else {
        $error = "incorrecto";
        header("Location: index.php?error=$error");
    }
} else {
    $error = "vacio";
    header("Location: index.php?error=$error");
}
