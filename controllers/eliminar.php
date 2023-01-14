<?php
if($_GET){

   if(isset($_GET['id'])){
        ob_start(); 
        set_error_handler("var_dump");
        require_once "../models/conexion.php";

        $id = $_GET['id'];
        $conexion = new Conexion();

        #recuperamos la imagen de la base antes de borrar 
        $imagenProyecto = $conexion->consultar("SELECT imagen FROM  `proyectos` where id=".$id);
        #la borramos de la carpeta 
        unlink("../views/pictures/".$imagenProyecto[0]['imagen']);

        #borramos el registro de la base 
        $sql ="DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id; 
        $respuesta = $conexion->ejecutar($sql);

        #para que no intente borrar muchas veces
        header("Location:../index.php#porfolio");
        die();
    }
}