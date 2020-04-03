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
		   		<h1 style="text-align:center;">Pagos</h1> 
				   			
			</div>
			<div class="panel-body">
			
				<p>
					<a href="app/index.php" class="btn btn-info pull-left" target="_blank"style="margin-left: 10px">Reporte general</a>
					<a href="general_factura.php" class="btn btn-primary pull-left" target="_blank"style="margin-left: 10px">General factura semanal</a>
				</p>	
			<div class="table-wrapper-scroll-y my-custom-scrollbar">
			<div class="limiter">
			<div class="container-table100">
			<div class="wrap-table100">
			<div class="table100 ver6 m-b-110">
			
	 			<table class="var6" style="text-align: center;">
			 		<thead>
			 			<tr>
			 							
			 				
							 <tr class="row100 head">
			 				<th class="column100 column1" data-column="column1">ID</th>
			 				<th class="column100 column2"data-column="column2">Nombre</th>
							 <th class="column100 column3"data-column="column3">Apellido</th>
			 				<th class="column100 column4"data-column="column4">Deuda</th>
							 <th class="column100 column5"data-column="column5">Cobrador</th>
							 <th class="column100 column6"data-column="column6">Estado</th>
							 <th  class="column100 column7" data-column="column7"></th>
										
			 				<th  class="column100 column7" data-column="column7"></th>
			 			</tr>
			 			</tr>
			 		</thead>
			 		<tbody>
			 			<?php
			 			$query=lista_cursos();
		 				while ( $row= $query->fetch_assoc() ) {
		 					echo" 
								<tr class='row100'>
								<td>".$row['id_clien']."</td>
								<td>".$row['nombreclien']."</td>
								<td>".$row['apellidoclien']."</td>
								<td>$".$row['deuda']."</td>
								<td>".$row['nombreemple']."</td> 
								<td>".$row['estadoclien']."</td>
								<td>
					 					<a href='factura_actualizar.php?id=".$row['id_clien']."' class='fas fa-money-check-alt fa-2x'></a>
					 					<a href='app/index2.php?id=".$row['id_clien']."' class='fas fa-file-invoice-dollar fa-2x'></a>
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
		</div>
</div>

<?php	
	include('php/ppie_menu.php');		
?>