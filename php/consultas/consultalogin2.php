<?php
	function lista_cursos(){		
		include('php\conexion.php');	
		$sql="SELECT * FROM loginuser";
		return $result=$mysqli->query($sql); 
	}
	function extraerusuariosUDT($id){
		include('php\conexion.php');	
        $sql="SELECT * FROM loginuser where usuario='$id'";
        
		return $result=$mysqli->query($sql); 
	}	
?>
