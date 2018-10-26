<?php 
    

// permite requerir un archivo para ser utilizado con toda su programación

//CONTROLADORES
require_once "controladores/plantilla.controlador.php";
require_once "controladores/enrutamiento.controlador.php";
require_once "controladores/sesion.controlador.php";
#require_once "controladores/tareas.controlador.php";
#require_once "controladores/usuarios.controlador.php";
#require_once "controladores/crud.tareas.controlador.php";
//MODELOS
require_once "modelos/sesion.modelo.php";
#require_once "modelos/tareas.modelo.php";
#require_once "modelos/usuarios.modelo.php";
#require_once "modelos/crud.usuarios.php";

//instanciar un objeto de la clase ControladorPlantilla y utilizar uno de sus métodos.
$plantilla = new ControladorPlantilla();
$plantilla -> traerPlantilla();
