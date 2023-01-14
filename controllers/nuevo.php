<?php
if($_POST){
    ob_start();
    set_error_handler("var_dump");
    require_once "../models/conexion.php";

    $nombreProyecto = $_POST["nombreProyecto"];
    $descripcionProyecto = $_POST["descripcionProyecto"];
    $imagenProyecto = $_FILES['imagenProyecto']['name'];
    $imagenTemporal=$_FILES['imagenProyecto']['tmp_name'];
    move_uploaded_file($imagenTemporal,"../views/pictures/".$imagenProyecto);
    $urlProyecto = $_POST["urlProyecto"];

    $conexion = new Conexion();
    $sql = "INSERT INTO `proyectos` (`id`,`nombre`,`imagen`,`descripcion`,`url`) VALUES (NULL,'$nombreProyecto','$imagenProyecto','$descripcionProyecto','$urlProyecto')";
    $respuesta = $conexion->ejecutar($sql);
    header("Location:../index.php#porfolio");
    die();
}