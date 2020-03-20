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
		$fecha=$_POST['fecha'];
		$telefono=$_POST['telefono'];
		$sql="
		INSERT INTO `dependientesclien`(`nombredependien`, `parentesco`,`fechanacimientodepen`, `esadodependien`) 
		 
		 VALUES (
		'$nombre',
		'$apellido',
		'$direccion',
		'$cedula',
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
		header("Location: ../socio.php?s=".$msj);
	}
	if ($i=='UDT'){
		$msj='';
		$codigo=$_POST['codigo'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$direccion=$_POST['direccion'];
		$cedula=$_POST['cedula'];
		$fecha=$_POST['fecha'];
		$telefono=$_POST['telefono'];
		$estado=$_POST['estado'];
		$sql="
		UPDATE `socio` SET 
		`nombreclien`='$nombre',
		`apellidoclien`='$apellido',
		`direccionclien`='$direccion',
		`cedulaclien`='$cedula',
		`fechaclien`='$fecha',
		`telefonoclien`='$telefono',
		`estadoclien`='$estado'
		WHERE 
		id_clien ='$codigo'
		";
		if ($mysqli->query($sql)){
			$msj='successudt';
		}
		else{
			$msj='errorudt';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../socio.php?s=".$msj);

	}
	if ($i=='DLT'){
		$msj='';
		$codigo=$_GET['id'];
		
		$sql="
		UPDATE `socio` SET 
	
		`estadoclien`='I' 
		WHERE 
		id_clien='$codigo'
		";
		if ($mysqli->query($sql)){
			$msj='successdlt';
		}
		else{
			$msj='errordlt';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../socio.php?s=".$msj);
	}
?>