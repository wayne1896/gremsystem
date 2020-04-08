  <?php 
   session_start();
	include'conexion.php';	

	$i='';
	if(isset($_GET['accion'])){
		$i=$_GET['accion'];
	}

	if ($i=='INS') {
        $msj='';
        $codigo=$_POST['codigo'];
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