<?php
	function lista_cursos(){		
		include('cone_reporte.php');	
		$sql="SELECT * FROM socio s JOIN empleado e ON (s.id_empleado=e.id_empleado)
		 JOIN gremio g ON (s.id_plan=g.id_plan)";
		
		return $result=$mysqli->query($sql); 
	}
	function extraersocioUDT($id){
		include('cone_reporte.php');	
		$sql="SELECT * FROM socio s JOIN deuda d ON (s.id_clien=d.id_clien)
		JOIN empleado e ON (s.id_empleado=e.id_empleado) where s.id_clien='$id'";
		return $result=$mysqli->query($sql); 
	}	

	function extraersocio2UDT($id2){
		include('php\conexion.php');	
		$sql="SELECT * FROM socio s JOIN deuda d ON (s.id_clien=d.id_clien)
		JOIN empleado e ON (s.id_empleado=e.id_empleado) where cedulaclien='$id2'";
		return $result=$mysqli->query($sql); 
	}	


?>
