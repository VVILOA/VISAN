<?php 	

class InicioSesion {

	public function ctrIniciarSesion() {

		if ( isset($_POST["name_user"]) ) {
			$tabla = "user";
			$name_user = $_POST["name_user"];
			$password = $_POST["password"];

			$respuesta = SesionModelo::mdlInicioSesion($tabla, $name_user);

			//var_dump permite leer un arreglo de datos.
			
			
			if ($_SESSION["autenticar"] = true) {
				//DEFINIMOS TODAS LAS VARIABLES GLOBALES DE SESION
				//$_SESSION["autenticar"] = true;
				$_SESSION["nom_user"] = $respuesta["name"];
				$_SESSION["email_user"] = $respuesta["email"];



				echo '<script>
						window.location = "inicio"
					</script>
					';
			} else {
				echo '<br>
				<div class="alert alert-danger">
						<i class="fa fa-exclamation" aria-hidden="true"></i> Datos incorrectos. Inténtelo nuevamente.
					</div>';
			}
		}
		


	}

}

?>