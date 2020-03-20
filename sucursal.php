<?php	
	include('php/pcabeza\pcabezagremio.php');		

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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

	 	<div class="panel panel-default" style="margin-top: 10px"> 		
			<div class="panel-heading">
		   		<h1 style="text-align:center;">Sucursal</h1> 
				   			
			</div>
			<div class="panel-body">
				<p>
					<a href="sucursal_nuevo.php" class="btn btn-success pull-left"style="margin-left: 10px">Nuevo</a>
				</p>	
				
			
	 			<table class="table table-striped" style="text-align: center;">
			 		<thead>
			 			<tr>
			 				<th>Sucursal</th>
			 				<th>Nombre</th>
							 <th>Direccion</th>
							 <th>Telefono</th>
			 				<th>Estado</th> 				
			 				<th></th>
			 			</tr>
			 		</thead>
			 		<tbody>
			 			<?php
			 			$query=lista_cursos();
		 				while ( $row= $query->fetch_assoc() ) {
		 					echo" 
								<tr>
					 				<td>".$row['sucursal']."</td>
									 <td>".$row['nombre_neg']."</td>
									 <td>".$row['direccion_neg']."</td>
					 				<td>".$row['numero_neg']."</td>
									 <td>".$row['estado_neg']."</td>
					 				<td>
					 					<a href='sucursal_actualizar.php?id=".$row['sucursal']."' class='btn btn-primary'>Editar</a>
					 					<a href='php\sucursal_registro.php?accion=DLT&id=".$row['sucursal']."' class='btn btn-danger'>Eliminar</a>
					 				</td>
					 			</tr>
		 					";
		 				}
			 			?> 			
			 		</tbody>
				</table>
			</div>
		</div>

<?php	
	include('php/ppie.php');		
?>