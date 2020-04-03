<?php	
	include('php/pcabeza\pcabezaempleado.php');		

	$mensaje='';
	$color='';
	if (isset($_GET['s'])) {
		switch ($_GET['s']) {
			case 'success':
				$mensaje='Registro almacenado correctamente';
				$color='success';
				break;
			case 'error':
				$mensaje='Imposible almacenar el registro';
				$color='danger';
				break;
			case 'successudt':
				$mensaje='Registro actualizado correctamente';
				$color='success';
				break;
			case 'errorudt':
				$mensaje='Imposible actualizar el registro';
				$color='danger';
				break;
			case 'successdlt':
				$mensaje='Registro inhabilitado correctamente';
				$color='success';
				break;
			case 'errordlt':
				$mensaje='Imposible inhabilitar el registro';
				$color='danger';
				break;
		}
	}
	if (!empty($mensaje) and !empty($color)) {
		echo '<div class="alert alert-'.$color.'" role="alert">'.$mensaje.'</div>';
	}
?>
<head>
	<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

	 	<div class="panel panel-default" style="margin-top: 10px"> 		
			<div class="panel-heading">
		   		<h1 style="text-align:center;">Empleados</h1> 
				   			
			</div>
			<div class="panel-body"style="margin-left: 10px">
				<p>
					<a href="empleado_nuevo.php" class="fas fa-user-plus fa-3x"style="margin-left: 20px"></a>
				</p>	
				
			<div class="table-wrapper-scroll-y my-custom-scrollbar">
			<div class="limiter">
			<div class="container-table100">
			<div class="wrap-table100">
			<div class="table100 ver6 m-b-110">

			<table data-vertable="ver6" style="text-align: center;">
			 		<thead>
			 			<tr class="row100 head">
			 				<th class="column100 column1" data-column="column1">ID</th>
			 				<th class="column100 column2"data-column="column2">Nombre</th>
							 <th class="column100 column3"data-column="column3">Apellido</th>
			 				<th class="column100 column4"data-column="column4">Cedula</th>
							 <th class="column100 column5"data-column="column5">Fecha de Nacimiento</th>
							 <th class="column100 column6"data-column="column6">Cargo</th>
							 <th class="column100 column7"data-column="column7">Telefono</th>
			 				<th class="column100 column8"data-column="column8">Estado</th> 				
			 				<th  class="column100 column9" data-column="column9"></th>
			 			</tr>
			 		</thead>
					 
			 		<tbody>
			 			<?php
			 			$query=lista_cursos();
		 				while ( $row= $query->fetch_assoc() ) {
		 					echo" 
								<tr class='row100'>
					 				<td class='column100 column1'>".$row['id_empleado']."</td>
					 				<td class='column100 column2'>".$row['nombreemple']."</td>
					 				<td class='column100 column3'>".$row['apellidoemple']."</td>
									 <td class='column100 column4'>".$row['cedulaemple']."</td>
									 <td class='column100 column5'>".$row['nacimientoemple']."</td>
									 <td class='column100 column6'>".$row['posicionemple']."</td>
									 <td class='column100 column7'>".$row['telefonoemple']."</td>
									 <td class='column100 column8'>".$row['estadoemple']."</td>
					 				<td>
										 <a href='empleado_actualizar.php?id=".$row['id_empleado']."' class='fa fa-edit fa-2x'></a>
										 <a></a> <a></a>
					 					<a href='php/empleado_registro.php?accion=DLT&id=".$row['id_empleado']."' class='fas fa-user-times  fa-2x'></a>
					 				</td>
					 			</tr>
		 					";
		 				}
			 			?> 			
			 		</tbody>
				</table>

			</Div></Div>
	 			
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
			</div>
		</div>
			</Div>
	 			
			</div>
		</div>

<?php	
	include('php/ppie_menu.php');		
?>