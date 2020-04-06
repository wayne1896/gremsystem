<?php
	function lista_cursos($id){		
		include('php\conexion.php');	
		$sql="SELECT * FROM dependientesclien where id_clien='$id'";
		return $result=$mysqli->query($sql); 
	}
	function extraerdependienteUDT($id){
		include('php\conexion.php');	
		$sql="SELECT * FROM socio s JOIN dependientesclien d ON (s.id_clien=d.id_clien) where d.id_clien='$id'";
		return $result=$mysqli->query($sql); 
	}	
	
?>
