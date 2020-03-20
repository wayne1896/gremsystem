<?php
	function lista_cursos(){		
		include('php\conexion.php');	
		$sql="SELECT * FROM loginuser";
		return $result=$mysqli->query($sql); 
	}
	function extraerusuariosUDT($id_user){
		include('php\conexion.php');	
        $sql="SELECT * FROM loginuser where id_user=1";
        
		return $result=$mysqli->query($sql); 
	}	
?>
