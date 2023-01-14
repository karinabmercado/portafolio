<?php

if(isset($_POST["editarNombreProyecto"])){
    ob_start(); #esto evita los errores de envios de headers
    set_error_handler("var_dump");
    require_once "../models/conexion.php";

    $id = $_POST["idCard"];
    $nombreProyecto = $_POST["editarNombreProyecto"];
    $descripcionProyecto = $_POST["editarDescripcionProyecto"];
    // $nombreArchivoImagen = $_POST["editarNombreImagenProyecto"];
    $imagenProyecto = $_FILES['editarImagenProyecto']['name'];
    $imagenTemporal=$_FILES['editarImagenProyecto']['tmp_name'];
    move_uploaded_file($imagenTemporal,"../views/pictures/".$imagenProyecto);
    $urlProyecto = $_POST["editarUrlProyecto"];

    $conexion = new Conexion();
    if($imagenProyecto){
        $sql = "UPDATE `proyectos` SET `nombre`='$nombreProyecto',`descripcion`='$descripcionProyecto',`imagen`='$imagenProyecto',`url`='$urlProyecto' WHERE `proyectos`.`id` = '$id'";
    }else{
        $sql = "UPDATE `proyectos` SET `nombre`='$nombreProyecto',`descripcion`='$descripcionProyecto',`url`='$urlProyecto' WHERE `proyectos`.`id` = '$id'";
    }
    
    $respuesta = $conexion->ejecutar($sql);
    header("Location:../index.php#porfolio");
    die();

}