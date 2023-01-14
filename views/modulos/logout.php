<?php
session_start();
session_destroy();
// $_SESSION["inicioSesion"] = "no";
unset($_SESSION["inicioSesion"]);
header("location:../../index.php");
die();
