<?php 	

require_once "conexion.modelo.php";

class SesionModelo {

	static public function mdlInicioSesion($tabla, $name_user) {
		//la preparación de la consulta.
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE name = '$name_user'");

		//ejecutar la consulta.
		if ( $sql->execute() ) {
			return $sql->fetch();	
		} else {
			return "error";
		}

		

	}

}

?>