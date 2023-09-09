<?php 
$contrasena = "admin123";
$usuario = "admin";
$nombre_bd = "crud";
$url_db = "awsdb.coc1tvi2xdlk.us-east-1.rds.amazonaws.com";
//mysql:host=$host;dbname=$dbname
try {
	$bd = new PDO (
		"mysql:host=$url_db;dbname=$nombre_bd",
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>