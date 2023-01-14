<?php
ob_start();
set_error_handler("var_dump");
session_start();

$conexion = new Conexion();

$proyectos= $conexion->consultar("SELECT * FROM `proyectos`");

?>

<!doctype html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Trabajo final del curso Full Stack con PHP">
    <meta name="author" content="Karina Mercado">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Portafolio</title>

    <!--=====================================
    PLUGINS DE CSS
    ======================================-->

    <!-- Bootstrap -->
    <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="views/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    <!-- Personales -->
    <link href="views/css/estilos.css" rel="stylesheet">
    <!-- Sweet Alert 2 -->
    <!-- <link rel="stylesheet" href="views/css/sweetalert2.min.css"> -->

    <!--=====================================
    PLUGINS DE JS
    ======================================-->

    <script src="views/js/jquery-3.6.3.min.js"></script>    
    <script src="views/js/bootstrap.bundle.min.js"></script>

  </head>
  
  <body>
    
    <?php

      /*=============================================
        MENU
      =============================================*/
      include "modulos/menu.php";

      echo "<main>";

      /*=============================================
        DESCRIPCION
      =============================================*/
      include "modulos/description.php";

      /*=============================================
        CUERPO/TARJETAS
      =============================================*/
      include "modulos/cards.php";

      /*=============================================
        CUERPO/TARJETAS
      =============================================*/
      include "modulos/contact.php";

      echo "</main>";

      /*=============================================
        FOOTER
      =============================================*/
      include "modulos/footer.php";

    ?>

    <script src="views/js/cards.js"></script>

  </body>
</html>
