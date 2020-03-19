<?php
	function lista_cursos(){		
		include('php\conexion.php');	
		$sql="SELECT * FROM deceso";
		return $result=$mysqli->query($sql); 
	}
	function extraerdecesoUDT($id){
		include('php\conexion.php');	
		$sql="SELECT * FROM deceso where id_deceso='$id'";
		return $result=$mysqli->query($sql); 
	}	
?>
