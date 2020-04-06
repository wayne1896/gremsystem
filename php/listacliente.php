<?php
	
	function listaclien(){
		include('conexion.php');	
		$sql="SELECT * FROM socio s join deuda d On (s.id_clien=d.id_clien)
		JOIN gremio g ON (s.id_plan=g.id_plan) where estadoclien='A'";
		return $result=$mysqli->query($sql); 
	}	

?>
