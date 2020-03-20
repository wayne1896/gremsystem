<?php 
	include'conexion.php';	
	$i='';
	if(isset($_GET['accion'])){
		$i=$_GET['accion'];
	}

	if ($i=='INS') {
		$msj='';
		$nombre=$_POST['nombre'];
		$costo=$_POST['costo'];
		
	

		$sql="
		INSERT INTO `gremio`( `nombre_plan`, `costo_plan`, `estado_plan`)
		 
		 VALUES (
		'$nombre',
		'$costo',
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
		header("Location: ../sucursal.php?s=".$msj);
	}
	if ($i=='UDT'){
		$msj='';
		$codigo=$_POST['codigo'];
		$nombre=$_POST['nombre'];
		$costo=$_POST['costo'];
		$estado=$_POST['estado'];
		
		$sql="
		UPDATE `gremio` SET 
		`nombre_plan`='$nombre',
		`costo_plan`='$costo',
		`estado_plan`='$estado'
		WHERE 
		id_plan ='$codigo'
		";
		if ($mysqli->query($sql)){
			$msj='successudt';
		}
		else{
			$msj='errorudt';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../sucursal.php?s=".$msj);

	}
	if ($i=='DLT'){
		$msj='';
		$codigo=$_GET['id'];
		
		$sql="
		UPDATE `gremio` SET 
	
		`estado_plan`='I' 
		WHERE 
		sucursal='$codigo'
		";
		if ($mysqli->query($sql)){
			$msj='successdlt';
		}
		else{
			$msj='errordlt';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../sucursal.php?s=".$msj);
	}
?>