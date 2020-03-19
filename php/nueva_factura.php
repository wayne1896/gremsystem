
<?php

session_start();
if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
	header("location: login.php");
	exit;
	}
$active_facturas="active";
$active_productos="";
$active_clientes="";
$active_usuarios="";	
$title="Nueva Factura | Simple Invoice";

require_once ("config/db.php");
require_once ("config/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("php/pcabeza\pcabezacliente.php");?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>


body{



}


</style>


<body>

<div class="container">
<div class="panel panel">
	<div class="panel-heading">
		<h4><i class='glyphicon glyphicon-plus'></i> Agregar Factura</h4>
	</div>
	<div class="panel-body">
	<?php 
		include("modal/buscar_productos.php");
		include("modal/registro_clientes.php");
		include("modal/registro_productos.php");
	?>
		<form class="form-horizontal" role="form" id="datos_factura">
		<div class="form-group row">
						<label for="cliente" class="col-md-1 control-label">Cliente</label>
						<div class="col-md-3">
							<select class="form-control input-sm" style="height:3em;"  id="id_cliente">
								<?php
									$sql_cliente=mysqli_query($con,"select * from socio order by id_clien");
									while ($rw=mysqli_fetch_array($sql_cliente)){
										$id_cliente=$rw["id_clien"];
										$nombre_cliente=$rw["nombreclien"]." ".$rw["apellidoclien"];
										if ($id_cliente==$_SESSION['id_clien']){
											$selected="selected";
										} else {
											$selected="";
										}
										?>
										<option value="<?php echo $id_cliente?>" <?php echo $selected;?>><?php echo $nombre_cliente?></option>
										<?php
									
									}
								?>
							</select>
						</div>
			  
					
				<label for="mail" class="col-md-1 control-label">Deuda</label>
						<div class="col-md-3">
							<input type="text" class="form-control input-sm" style="height:3em;" id="deuda" placeholder="deuda" >
						</div>
			 </div>
					<div class="form-group row">
						<label for="empresa" class="col-md-1 control-label">Vendedor</label>
						<div class="col-md-3">
							<select class="form-control input-sm" style="height:3em;" id="id_empleado">
								<?php
									$sql_vendedor=mysqli_query($con,"select * from empleado order by nombreemple");
									while ($rw=mysqli_fetch_array($sql_vendedor)){
										$id_vendedor=$rw["id_empleado"];
										$nombre_vendedor=$rw["nombreemple"]." ".$rw["apellidoemple"];
										if ($id_vendedor==$_SESSION['id_empleado']){
											$selected="selected";
										} else {
											$selected="";
										}
										?>
										<option value="<?php echo $id_vendedor?>" <?php echo $selected;?>><?php echo $nombre_vendedor?></option>
										<?php
									}
								?>
							</select>
						</div>
						<label for="tel2" class="col-md-1 control-label">Fecha</label>
						<div class="col-md-2">
							<input type="text" class="form-control input-sm" id="fecha" style="height:3em;" value="<?php echo date("d/m/Y");?>" readonly>
						</div>
					
					</div>
			
			
			<div class="col-md-12">
				<div class="pull-right">
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoProducto">
					 <span class="glyphicon glyphicon-plus"></span> Nuevo producto
					</button>
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoCliente">
					 <span class="glyphicon glyphicon-user"></span> Nuevo cliente
					</button>
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
					 <span class="glyphicon glyphicon-search"></span> Agregar productos
					</button>
					<button type="button" class="btn btn-default" href="facturacion_imprimir.php" data-toggle="facturacion_imprimir.php" data-target="facturacion_imprimir.php">
					 <span class="glyphicon glyphicon-print"></span> Imprimir
					</button>
					
				</div>	
			</div>
		</form>	
		
	<div id="resultados" class='col-md-12' style="margin-top:10px"></div><!-- Carga los datos ajax -->			
	</div>
</div>		
	  <div class="row-fluid">
		<div class="col-md-12">
		


		
		</div>	
	 </div>
</div>
<hr>
<?php
include("php\ppie.php");
?>
<script type="text/javascript" src="js/VentanaCentrada.js"></script>
<script type="text/javascript" src="js/nueva_factura.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
	$(function() {
					$("#nombreclien").autocomplete({
						source: "./ajax\autocomplete\clientes.php",
						minLength: 2,
						select: function(event, ui) {
							event.preventDefault();
							$('#id_cliente').val(ui.item.id_cliente);
							$('#nombreclien').val(ui.item.nombreclien);
							$('#telefono_cliente').val(ui.item.telefonoclien);
							$('#deuda').val(ui.item.deuda);
															
							
						 }
					});
					 
					
				});
				
$("#nombreclien" ).on( "keydown", function( event ) {
					if (event.keyCode== $.ui.keyCode.LEFT || event.keyCode== $.ui.keyCode.RIGHT || event.keyCode== $.ui.keyCode.UP || event.keyCode== $.ui.keyCode.DOWN || event.keyCode== $.ui.keyCode.DELETE || event.keyCode== $.ui.keyCode.BACKSPACE )
					{
						$("#id_cliente" ).val("");
						$("#telefono_cliente" ).val("");
						$("#deuda" ).val("");
										
					}
					if (event.keyCode==$.ui.keyCode.DELETE){
						$("#nombreclien" ).val("");
						$("#id_cliente" ).val("");
						$("#telefono_cliente" ).val("");
						$("#deuda" ).val("");
					}
		});	
</script>

</body>
</html>