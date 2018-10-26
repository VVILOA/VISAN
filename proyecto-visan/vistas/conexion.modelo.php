<?php 

class Conexion {

	public function Conectar () {

		$link = new PDO("mysql:host=sql213.byetcluster.com;dbname=b16_22867148_visan ", 
			"b16_22867148",
			"g3r4ld1n3",
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);

		return $link;

	}

}
 

?>