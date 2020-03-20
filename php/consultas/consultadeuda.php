<?php
	function lista_cursos(){		
		include('php\conexion.php');	
		$sql="SELECT * FROM socio s JOIN deuda d ON (s.id_clien=d.id_clien)
		JOIN empleado e ON (s.id_empleado=e.id_empleado)";
		return $result=$mysqli->query($sql); 
	}
	
	function extraerempleadoUDT($id){
		include('php\conexion.php');	
		$sql="SELECT * FROM socio s JOIN deuda d ON (s.id_clien=d.id_clien)
		JOIN empleado e ON (s.id_empleado=e.id_empleado)='$id'";
		return $result=$mysqli->query($sql); 
	}	
?>
