<?php
$conexion = new mysqli("localhost", "biblioteca_user", "12345", "testdb");
if ($conexion->connect_error) {
	die("error de conexion: " . $conexion->connect_error);
}
echo "conexion exitosa a la base de datos";
?>
