<?php
	function lista_cursos(){		
		include('php\conexion.php');	
		$sql="SELECT * FROM empleado";
		return $result=$mysqli->query($sql); 
	}
	function extraerempleadoUDT($id){
		include('php\conexion.php');	
		$sql="SELECT * FROM empleado where id_empleado='$id'";
		return $result=$mysqli->query($sql); 
	}	
?>
