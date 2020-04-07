<?php
	function lista_cursos($id2){		
		include('php\conexion.php');	
		$sql="SELECT * FROM dependientesclien where id_clien='$id2'";
		return $result=$mysqli->query($sql); 
	}
	function extraerdependienteUDT($id){
		include('php\conexion.php');	
		$sql="SELECT * FROM dependientesclien where id_socio='$id'";
		return $result=$mysqli->query($sql); 
	}	
	
?>
