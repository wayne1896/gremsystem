<?php
	function lista_cursos(){		
		include('php\conexion.php');	
		$sql="SELECT * FROM gremio";
		return $result=$mysqli->query($sql); 
	}
	function extraergremioUDT($id){
		include('php\conexion.php');	
		$sql="SELECT * FROM gremio where sucursal='$id'";
		return $result=$mysqli->query($sql); 
	}	
?>
