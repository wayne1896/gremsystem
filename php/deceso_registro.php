<?php 
	include'conexion.php';	
	$i='';
	if(isset($_GET['accion'])){
		$i=$_GET['accion'];
	}

	if ($i=='INS') {
		$msj='';
		$nombre=$_POST['nombre'];
		$fecha=$_POST['fecha'];

		$sql="
		INSERT INTO `deceso`(`nombre_deceso`, `fecha_deceso`) 
		 
		 VALUES (
		'$nombre',
		'$fecha'
		)
		";
		if ($mysqli->query($sql)){
			$msj='success';
		}
		else{
			$msj='error';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../deceso.php?s=".$msj);
	}
	if ($i=='UDT'){
		$msj='';
		$codigo=$_POST['codigo'];
		$nombre=$_POST['nombre'];
		$fecha=$_POST['fecha'];
		$sql="
		UPDATE `deceso` SET 
		`nombre_deceso`='$nombre',
		`fecha_deceso`='$fecha'
		WHERE 
		id_deceso ='$codigo'
		";
		if ($mysqli->query($sql)){
			$msj='successudt';
		}
		else{
			$msj='errorudt';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../deceso.php?s=".$msj);

	}
	
?>