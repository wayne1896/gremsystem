<?php
	function lista_cursos(){		
		include('php\conexion.php');	
		$sql="SELECT * FROM inventario";
		return $result=$mysqli->query($sql); 
	}
	function extraerinventarioUDT($id){
		include('php\conexion.php');	
		$sql="SELECT * FROM inventario where id_inventario='$id'";
		return $result=$mysqli->query($sql); 
	}	
?>
