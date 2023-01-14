<?php
if(isset($_POST["usuario"]) && isset($_POST["password"])){
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    if($usuario == "admin" && $password == "cac"){
        session_start();
        $_SESSION["inicioSesion"] = "ok";
    }
}
header("location:../index.php");
die();
