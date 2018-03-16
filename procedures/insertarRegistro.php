<?php
	require '../class/conexiondb.php';
	
	$nombreU=$_POST["nombreUsuario"];
	$edadU=$_POST["edadUsuario"];
	$paisU=$_POST["paisUsuario"];
	
		$query="CALL AddUser('$nombreU', $edadU, '$paisU')";
		$resultado=mysqli_query($conexion, $query);
		if($resultado == false){
			echo "Error en la consulta";
		} else {
			header ("Location: ../index.php");
		}

?>
