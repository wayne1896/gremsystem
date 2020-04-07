<?php 
session_start();
	include'conexion.php';	
	$i='';
	if(isset($_GET['accion'])){
		$i=$_GET['accion'];
	}

	if ($i=='INS') {
		$msj='';
		$nombre=$_POST['nombre'];
		$parentesco=$_POST['parentesco'];
		$fecha=$_POST['fecha'];
		$estado=$_POST['estado'];
		$sql="
		INSERT INTO `dependientesclien`(`nombredependien`, `parentesco`,`fechanacimientodepen`, `estadodependien`) 
		 
		 VALUES (
		'$nombre',
		'$parentesco',
		'$fecha',
		'$estado'
		)
		";
		if ($mysqli->query($sql)){
			$msj='success';
		}
		else{
			$msj='error';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../dependiente.php?s=".$msj);
	}
	if ($i=='UDT'){
		$msj='';
		$codigo=$_POST['codigo'];
		$nombre=$_POST['nombre'];
		$parentesco=$_POST['parentesco'];
		$fecha=$_POST['fecha'];
		$estado=$_POST['estado'];
		$sql="
		UPDATE `dependientesclien` SET 
		`nombredependien`='$nombre',
		`parentesco`='$parentesco',
		`fechanacimientodepen`='$fecha',
		`estadodependien`='$estado'
		WHERE 
		id_socio ='$codigo'
		";
		if ($mysqli->query($sql)){
			$msj='successudt';
		}
		else{
			$msj='errorudt';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../dependiente.php?s=".$msj);

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
		header("Location: ../dependiente.php?s=".$msj);
	}
?>