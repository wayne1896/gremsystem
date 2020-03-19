<?php 
	include'conexion.php';	
	$i='';
	if(isset($_GET['accion'])){
		$i=$_GET['accion'];
	}

	if ($i=='INS') {
		$msj='';
		$descripcion=$_POST['descripcion'];
		$cantidad=$_POST['cantidad'];

		$sql="
		INSERT INTO `inventario`(`descripcion`, `cantida`, `estado`)
		 
		 VALUES (
		'$descripcion',
		'$cantidad',
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
		header("Location: ../inventario.php?s=".$msj);
	}
	if ($i=='UDT'){
		$msj='';
		$codigo=$_POST['codigo'];
		$descripcion=$_POST['descripcion'];
		$cantidad=$_POST['cantidad'];
		$estado=$_POST['estado'];
		
		$sql="
		UPDATE `inventario` SET 
		`descripcion`='$descripcion',
		`cantida`='$cantidad',
		`estado`='$estado'
		WHERE 
		id_inventario ='$codigo'
		";
		if ($mysqli->query($sql)){
			$msj='successudt';
		}
		else{
			$msj='errorudt';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../inventario.php?s=".$msj);

	}
	if ($i=='DLT'){
		$msj='';
		$codigo=$_GET['id'];
		
		$sql="
		UPDATE `inventario` SET 
	
		`estado`='I' 
		WHERE 
		id_inventario ='$codigo'
		";
		if ($mysqli->query($sql)){
			$msj='successdlt';
		}
		else{
			$msj='errordlt';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../inventario.php?s=".$msj);
	}
?>