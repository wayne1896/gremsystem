<?php 
	include'conexion.php';	
	$i='';
	if(isset($_GET['accion'])){
		$i=$_GET['accion'];
	}

	if ($i=='INS') {
        $msj='';
        $codigo1=$_POST['codigo'];
        $codigo=$codigo1;
        $fecha=$_POST['fecha'];
	
		
		$sql="
		INSERT INTO `deuda`( `deuda`, `fecha`, `estado`, `id_clien`)
		 
		 VALUES (
		'0',
		'$fecha',
		'A',
		'$codigo'
		)
		";

		if ($mysqli->query($sql)){
			$msj='successact';
		}
		else{
			$msj='erroract';
			echo "erroract:".mysqli_error($mysqli);
		}
		header("Location: ../socio.php?s=".$msj);

	}
?>