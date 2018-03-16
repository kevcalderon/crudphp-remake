<?php
	$dbhost="localhost";
	$dbNombre="Practicephp";
	$dbUsuario="root";
	$dbPassword="";

	$conexion=mysqli_connect($dbhost,$dbUsuario,$dbPassword,$dbNombre);
	if (mysqli_connect_errno()) {
		echo "Fallo en la conexion DB";
		exit();
	}

?>