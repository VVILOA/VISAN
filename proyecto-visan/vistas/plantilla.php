<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema-visanSPA</title>

    <!-- Bootstrap core CSS -->
    <link href="vistas/recursos/css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom styles for this template -->
    <link rel="stylesheet" href="vistas/recursos/css/business-frontpage.css">

   

  </head>

  <body>
  <?php
    //inicializa una sesión
    //$_SESSION["algo"] => Son variables GLOBALES para creación de sesiones.
    session_start();

    if ($_SESSION["autenticar"] = true) {
      echo '<div class="wrapper">';

      include "modulos/cabezera.php";
      #include "modulos/barra-lateral.php";
       // isset sirve para validar que una variable se encuentre inicializada
    
      if (isset($_GET["ruta"])) {

        $enrutamiento = new ControladorEnrutamiento();
        $enrutamiento -> traerRuta();

        


      } else {

        include "modulos/inicio.php";

      }
    
    include "modulos/pie-de-pagina.php";
    echo '<div>';

    } else {
     include "modulos/login.php";
    }  

  ?>
  
    <!-- Bootstrap core JavaScript -->
    <script src="vistas/recursos/jquery/jquery.min.js"></script>
    <script src="vistas/recursos/js/bootstrap.bundle.min.js"></script>
    <script src="vistas/recursos/js/bootstrap.js"></script>
  </body>

</html>
