<?php 
	include'conexion.php';	
	$i='';
	if(isset($_GET['accion'])){
		$i=$_GET['accion'];
	}

	if ($i=='INS') {
		$msj='';
		$nombre=$_POST['nombre'];
		$direccion=$_POST['direccion'];
		$telefono=$_POST['telefono'];
	

		$sql="
		INSERT INTO `gremio`( `nombre_neg`, `numero_neg`, `estado_neg`, `direccion_neg`)
		 
		 VALUES (
		'$nombre',
		'$telefono',
		'A',
		'$direccion'
		
		
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
		$telefono=$_POST['telefono'];
		$direccion=$_POST['direccion'];
		$estado=$_POST['estado'];
		
		$sql="
		UPDATE `gremio` SET 
		`nombre_neg`='$nombre',
		`direccion_neg`='$direccion',
		`numero_neg`='$telefono',
		`estado_neg`='$estado'
		WHERE 
		sucursal ='$codigo'
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
	
		`estado_neg`='I' 
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