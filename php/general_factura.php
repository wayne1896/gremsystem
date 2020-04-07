<?php 
  session_start();
   include'conexion.php';	
   $i='';
   if(isset($_GET['accion'])){
	   $i=$_GET['accion'];
   }

	if ($i=='UDT'){

		include('listacliente.php');
		
		$query=listaclien();

		while ( $row= $query->fetch_assoc() ) {

		$codigo=$row['id_clien'];
		$id_plan=$row['id_plan'];
		$costo_plan=$row['costo_plan'];
		$date = new DateTime();
		$resulta = $date->format('Y-m-d');
		for ($y=0; $y<count($codigo);  $y++) {
			//echo $codigo[$y].'<br/>';
			if($id_plan==1)
			{	
				
				$deuda=$row['deuda']+$costo_plan;
				echo $costo1;
				$sql="
		UPDATE `deuda` SET 
		`deuda`='$deuda+$costo1',
		`fecha`='$resulta'
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
			}
			if($id_plan==2)
			{	$deuda=$row['deuda']+$costo_plan;
				$costo2=$costo_plan;
				$sql="
		UPDATE `deuda` SET 
		`deuda`='$deuda+$costo2',
		`fecha`='$resulta'
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
			}
			if($id_plan==3)
			{$deuda=$row['deuda']+$costo_plan;
				$deuda=$deudavieja;
				$costo3=$costo_plan;
				$sql="
		UPDATE `deuda` SET 
		`deuda`='$deuda+$costo3',
		`fecha`='$resulta'
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
			}
			}}
		
        
		header("Location: ../facturacion.php?s=".$msj);
		

	}
?>