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
		$id_empleado=$_POST['id_empleado'];
		$id_plan=$_POST['idplan'];
		$id_deuda=$_POST['id_clien'];
		$clave=$_POST['clave'];
		$correo=$_POST['correo'];
		
		$sql="
		INSERT INTO `socio`( `nombreclien`, `apellidoclien`, `direccionclien`, `claveclien`, `cedulaclien`, 
		`fechaclien`,`telefonoclien`, `correoclient`, `estadoclien`, `id_plan`, `id_empleado`) 
		VALUES (
	   '$nombre',
	   '$apellido',
	   '$direccion',
	   '$clave',
	   '$cedula',
	   '$fecha',
	   '$telefono',
	   '$correo',
	   'A',
	   '$id_plan',
	   '$id_empleado'
		)";
		
		
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
		$clave=$_POST['clave'];
		$correo=$_POST['correo'];

		$sql="
		UPDATE `socio` SET 
		`nombreclien`='$nombre',
		`apellidoclien`='$apellido',
		`direccionclien`='$direccion',
		`cedulaclien`='$cedula',
		`fechaclien`='$fecha',
		`telefonoclien`='$telefono',
		`estadoclien`='$estado',
		`claveclien`='$clave',
		`correoclient`='$correo'
		
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