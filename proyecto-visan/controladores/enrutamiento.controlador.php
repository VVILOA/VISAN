<?php 

Class ControladorEnrutamiento {

	public function traerRuta() {
		$enlace = $_GET["ruta"];
		if ($enlace == "inicio" ||
			$enlace == "articulo" ||
			$enlace == "salir" ||
			$enlace == "movimiento-entrada" ||
			$enlace == "movimiento-salida" ||
			$enlace == "documento" ||
			$enlace == "finiquito" ||
			$enlace == "obra" ||
			$enlace == "proveedor" ||
			$enlace == "trabajador" ||
			$enlace == "usuario" ||
			$enlace == "tarjeta-movimiento" ||
			$enlace == "tarjeta-existencia" ||
			$enlace == "login" ) {
			include "vistas/modulos/".$enlace.".php";
		} else {
			include "vistas/modulos/error404.php";
		}

	}

}

?>