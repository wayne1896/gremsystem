<?php	
	include('php/pcabeza\pcabezadeceso.php');	


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
		   		<h1 style="text-align:center;"style="margin-left: 10px">Decesos</h1> 
				   			
			</div>
			<div class="panel-body">
				<p>
					<a href="deceso_nuevo.php" class="btn btn-success pull-left">Nuevo</a>
				</p>	
				
			
	 			<table class="table table-striped" style="text-align: center;">
			 		<thead>
			 			<tr>
			 				<th>ID</th>
			 				<th>Nombre</th>
							 <th>Fecha de Fallecimiento</th>		
			 				<th></th>
			 			</tr>
			 		</thead>
			 		<tbody>
			 			<?php
			 			$query=lista_cursos();
		 				while ( $row= $query->fetch_assoc() ) {
		 					echo" 
								<tr>
					 				<td>".$row['id_deceso']."</td>
					 				<td>".$row['nombre_deceso']."</td>
					 				<td>".$row['fecha_deceso']."</td>

					 				<td>
					 					<a href='deceso_actualizar.php?id=".$row['id_deceso']."' class='btn btn-primary'>Editar</a>
					 				
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