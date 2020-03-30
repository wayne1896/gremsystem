<?php
	function lista_cursos(){		
		include('php\conexion.php');	
		$sql="SELECT * FROM socio s JOIN dependientesclien d ON (s.id_clien=d.id_clien)";
		return $result=$mysqli->query($sql); 
	}
	function extraerdependienteUDT($id){
		include('php\conexion.php');	
		$sql="SELECT * FROM socio s JOIN dependientesclien d ON (s.id_clien=d.id_clien) where d.id_socio='$id'";
		return $result=$mysqli->query($sql); 
	}	
?>
