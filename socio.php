<?php	
	include('php/pcabeza\pcabezacliente.php');		

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
				case 'successact':
					$mensaje='Se Activo el cliente';
					$color='success';
					break;
				case 'erroract':
					$mensaje='El Cliente ya esta activado';
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


<!-- Latest minified bootstrap js -->

</head>


<div class="col-sm-7 col-sm-offset-2">
<div class="panel panel-default" style="width:120%;"  > 		
			<div class="panel-heading "style="background-color:#2F4F4F">
		   		<h1 style="text-align:center;color:White;font-size:60px;">Socio</h1> 
				  <p> <a href="socio_nuevo.php"  class="fas fa-user-plus fa-3x"style="margin-left: 20px"></a>	</p>		
			</div >

				<div class="table-wrapper-scroll-y my-custom-scrollbar">	
				<div class="limiter" style="background-color:#2F4F4F">
				<div class="container-table100" style="background-color:#2F4F4F"> 
				<div class="wrap-table100" style="background-color:#2F4F4F">
				<div class="table100 ver6 m-b-110">
					
	 			<table data-vertable="ver6" style="text-align: center;">
			 		<thead>
			 			<tr>
			
							 <tr class="row100 head">
			 				 <th class="column100 column1" data-column="column1">ID</th>
			 				 <th class="column100 column2"data-column="column2">Nombre</th>
							 <th class="column100 column3"data-column="column3">Apellido</th>
			 				<th class="column100 column4"data-column="column4">Cedula</th>
							 <th class="column100 column5"data-column="column5">Plan</th>
							 <th class="column100 column6"data-column="column6">Telefono</th>
							 <th class="column100 column7"data-column="column7">Fecha De Nacimiento</th>
			 				 <th class="column100 column8"data-column="column8">Direccion</th> 				
							  <th  class="column100 column9" data-column="column9">Estado</th>
							  <th  class="column100 column10" data-column="column10"></th>
			 	         	</tr>
						 
			 			</tr>
						 
			 		</thead>
			 		<tbody>
			 			<?php
						 $query=lista_cursos();
						 
		 				while ( $row= $query->fetch_assoc() ) {
		 					echo"
								<tr class='row100'>
								
					 				<td class='column100 column1'>".$row['id_clien']."</td>
					 				<td class='column100 column2'>".$row['nombreclien']."</td>
					 				<td class='column100 column3'>".$row['apellidoclien']."</td>
									 <td class='column100 column4'>".$row['cedulaclien']."</td>
									<td class='column100 column5'>".$row['nombre_plan']."</td>
									 <td class='column100 column6'>".$row['telefonoclien']."</td> 
									 <td class='column100 column7'>".$row['fechaclien']."</td> 
									 <td class='column100 column8'>".$row['direccionclien']."</td>
									 <td class='column100 column9'>".$row['estadoclien']."</td>
									 <td>
									 
									 <a href='socio_actualizar.php?id=".$row['id_clien']."' class='fa fa-edit fa-2x'></a>
									 <a href='dependiente.php?id=".$row['id_clien']."' class='fas fa-user-friends fa-2x'></a>
									 <a href='php\socio_registro.php?accion=DLT&id=".$row['id_clien']."' class='fas fa-user-times  fa-2x'></a>
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
		</div>

<?php	
	include('php/ppie_menu.php');		
?>