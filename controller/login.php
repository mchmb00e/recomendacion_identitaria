<?php

include("../module/component.php");
include("../module/database.php");

// Comprueba si el usuario y la contraseña son correctos
if (login($_POST["user_name"], $_POST["user_pass"])) {
    session_start();
    $_SESSION["msg"] = alert("success", "Bienvenido " . $_POST["user_name"]);
    $_SESSION["user_name"] = $_POST["user_name"];
    header("Location: ../dashboard.php");
} else {
    // Si no son correctos, redirige al login con un mensaje de error
    session_start();
    $_SESSION["msg"] = alert("danger", "Usuario o contraseña incorrectos");
    header("Location: ../admin.php");
}


?>