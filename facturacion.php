<?php	
	include('php/pcabeza\pcabezadeuda.php');		

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
		   		<h1 style="text-align:center;">Pagos</h1> 
				   			
			</div>
			<div class="panel-body">
			
				<p>
					<a href="reporte.php" class="btn btn-info pull-left" target="_blank"style="margin-left: 10px">Reporte general</a>
					<form action="general_factura.php?accion=UDT" method="POST">
					<a  class="btn btn-primary pull-left" target="_blank"style="margin-left: 10px">General factura semanal</a>
					</form>
					
				</p>	

			
			
	 			<table class="table table-striped" style="text-align: center;">
			 		<thead>
			 			<tr>
			 				<th>ID</th>
			 				<th>Nombre</th>
							 <th>Apellido</th>
			 				<th>Deuda</th>
							 <th>Cobrador</th>
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
								<td>".$row['id_clien']."</td>
								<td>".$row['nombreclien']."</td>
								<td>".$row['apellidoclien']."</td>
								<td>$".$row['deuda']."</td>
								<td>".$row['nombreemple']."</td> 
								<td>".$row['estadoclien']."</td>
								<td>
					 					<a href='factura_actualizar.php?id=".$row['id_clien']."' class='btn btn-primary'>Facturar Deuda</a>
					 					<a href='factura_actualizar.php?id=".$row['id_clien']."' class='btn btn-info'>Reporte individual</a>
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