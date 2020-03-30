<?php 
	include'conexion.php';	
	$i='';
	if(isset($_GET['accion'])){
		$i=$_GET['accion'];
	}

	if ($i=='INS') {
		$msj='';
        $nombre=$_POST['nombreuser'];
		$usuario=$_POST['user'];
		$correo=$_POST['correouser'];
		$clave=$_POST['claveuser'];
		$respuesta1=$_POST['respuesta1'];
		$respuesta2=$_POST['respuesta2'];
		$privilegio=$_POST['privilegio'];


		$sql="
        INSERT INTO `loginuser`(`nombreuser`, `usuario`, `correouser`, `claveuser`, `privilegio`, `preg1`, `preg2`)
		 VALUES (
		'$nombre',
		'$usuario',
		'$correo',
        '$clave',
		'$privilegio',
		'$respuesta1',
		'$respuesta2'

		)
		";
		if ($mysqli->query($sql)){
			$msj='success';
		}
		else{
			$msj='error';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../login.php?s=".$msj);
	}
	if ($i=='UDT'){
		$msj='';
		$codigo=$_POST['codigo'];
		$nombre=$_POST['nombreuser'];
		$clave=$_POST['claveuser'];
		
		$sql="
		UPDATE `loginuser` SET 
		
		`claveuser`='$clave'
	
		WHERE 
		id_user ='$codigo'
		";
		if ($mysqli->query($sql)){
			$msj='successudt';
		}
		else{
			$msj='errorudt';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../login.php?s=".$msj);

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
		header("Location:../registrar.php?s=".$msj);
	}
?>