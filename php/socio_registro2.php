<?php 
	include'conexion.php';	
    $id2 = $_GET['id2'];
    if(isset($_GET['id2'])){
        $query= extraersocio2UDT($_GET['id2']);
     $row=$query->fetch_assoc();}
   
	$i='';
	if(isset($_GET['accion'])){
		$i=$_GET['accion'];
	}

	if ($i=='UDT'){
		$msj='';
		$codigo=$_POST['codigo'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$direccion=$_POST['direccion'];
		$cedula=$_POST['cedula'];
		$fecha=$_POST['fecha'];
		$telefono=$_POST['telefono'];
		$estado=$_POST['estado'];
		$sql="
		UPDATE `socio` SET 
		`nombreclien`='$nombre',
		`apellidoclien`='$apellido',
		`direccionclien`='$direccion',
		`cedulaclien`='$cedula',
		`fechaclien`='$fecha',
		`telefonoclien`='$telefono',
		`estadoclien`='$estado'
		WHERE 
		id_clien ='$codigo'
		";
		if ($mysqli->query($sql)){
			
		}
		else{
			$msj='errorudt';
			echo "error:".mysqli_error($mysqli);
		}
		header("Location: ../perfil.php?id2=$cedula");

	}

?>