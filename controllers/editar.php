<?php

include "../models/conexion.php";

if(isset($_POST["idCard"])){
    $conexion = new conexion();
    $idCard = $_POST["idCard"];
    $sql = "SELECT * FROM `proyectos` WHERE `proyectos`.`id`=".$idCard;
    $respuesta = $conexion->consultar1($sql);

    echo json_encode($respuesta);    
}
