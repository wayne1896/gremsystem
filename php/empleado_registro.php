<?php 
	include'conexion.php';	
	$i='';
	if(isset($_GET['accion'])){
		$i=$_GET['accion'];
	}

	if ($i=='INS') {
		$msj='';
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$direccion=$_POST['direccion'];
		$cedula=$_POST['cedula'];
		$cargo=$_POST['cargo'];
		$fecha=$_POST['fecha'];
		$telefono=$_POST['telefono'];
		$sql="
		INSERT INTO `empleado`(`nombreemple`, `apellidoemple`, `direccionemple`, `cedulaemple`,
		 `posicionemple`, `nacimientoemple`, `telefonoemple`, `estadoemple`)
		 
		 VALUES (
		'$nombre',
		'$apellido',
		'$direccion',
		'$cedula',
		'$cargo',
		'$fecha',
		'$telefono',
		'A'
		
		)
		";
		
		if ($mysqli->query($sql)){
			$msj='success';
		}
		else{
			$msj='error';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../empleados.php?s=".$msj);
	}
	if ($i=='UDT'){
		$msj='';
		$codigo=$_POST['codigo'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$direccion=$_POST['direccion'];
		$cedula=$_POST['cedula'];
		$cargo=$_POST['cargo'];
		$fecha=$_POST['fecha'];
		$telefono=$_POST['telefono'];
		$estado=$_POST['estado'];
		$sql="
		UPDATE `empleado` SET 
		`nombreemple`=	'$nombre',
		`apellidoemple`='$apellido',
		`direccionemple`='$direccion',
		`cedulaemple`='$cedula',
		`posicionemple`='$cargo',
		`nacimientoemple`='$fecha',
		`telefonoemple`='$telefono',
		`estadoemple`='$estado'
		 WHERE 
		id_empleado='$codigo'
		";
		if ($mysqli->query($sql)){
			$msj='successudt';
		}
		else{
			$msj='errorudt';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../empleados.php?s=".$msj);

	}
	if ($i=='DLT'){
		$msj='';
		$codigo=$_GET['id'];
		
		$sql="
		UPDATE `empleado` SET 
	
		`estadoemple`='I' 
		WHERE 
		id_empleado='$codigo'
		";
		if ($mysqli->query($sql)){
			$msj='successdlt';
		}
		else{
			$msj='errordlt';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../empleados.php?s=".$msj);
	}
?>