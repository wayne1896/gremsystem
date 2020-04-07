	<?php
			include('php\pcabeza\pcabezaperfildependiente.php');
	

			$id= $_GET['id'];
			if(isset($_GET['id'])){
				$query=extraerdependienteUDT($_GET['id']);
			 $row=$query->fetch_assoc();
			}
			

	$mensaje='';
	$color='';

	if (isset($_GET['id'])) {
		switch ($_GET['id']) {
			case 'success':
				$mensaje='Registro almacenado correctamente';
				$color='success';
				break;
			case 'error':
				$mensaje='Imposible almacenar el registro';
				$color='danger';
				break;
			case 'successudt':
				$mensaje=$_GET['id2'];;
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
<link href="css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->


<!-- Latest minified bootstrap js -->

</head>
<div class="panel panel-default" style="margin-top: 10px"> 		
			<div class="panel-heading">
		   		<h1 style="text-align:center;">Dependientes</h1> 
			</div>  <?php 
			$id3=$id;
			

			?> 
							
				 		
			<div class="panel-body"style="margin-left: 10px">
					
			<p>
			<a href="dependiente_nuevoperfil.php?id=<?php echo "$id3" ?>" class="fas fa-user-plus fa-3x"style="margin-left: 20px"></a>
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
			 				<th class="column100 column2" data-column="column2">Nombre</th>
							 <th class="column100 column3" data-column="column3">Parentesco</th>
							 <th class="column100 column4" data-column="column4">Fecha de Nacimiento</th> 
			 				<th class="column100 column5" data-column="column5">Estado</th> 				
			 				<th class="column100 column6" data-column="column6"></th>
			 			</tr>
			 		</thead>
			 		<tbody>
			 			<?php
						 $c=1;
			 			$query=lista_cursos($id);
		 				while ( $row= $query->fetch_assoc() ) {
							echo" 
							<tr class='row100'>
								 <td class='column100 column1'>".$c."</td>
								 <td class='column100 column2'>".$row['nombredependien']."</td>
								 <td class='column100 column3'>".$row['parentesco']."</td>
								 <td class='column100 column4'>".$row['fechanacimientodepen']."</td> 
								 <td class='column100 column5'>".$row['estadodependien']."</td>
								 <td class='column100 column6'>
									 <a href='dependiente_actualizarperfil.php?id=".$row['id_socio']."' class='btn btn-primary'>Editar</a>
									
									 <a href='php\socio_registro.php?accion=DLT&id=".$row['id_clien']."' class='btn btn-danger'>Eliminar</a>
								 </td>
							 </tr>
						 ";
						 $c++;
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