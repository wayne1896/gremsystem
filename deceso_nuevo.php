<?php 
 include('php\pcabeza\pcabezadeceso.php');	
?>
<div class="panel panel-default" style="margin-top: 10px"> 		
	<div class="panel-heading">
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		<h1 align="center">Nuevo Deceso</h1> 			
	</div>
	<div class="panel-body"style="margin-left: 60px">
		<form action="php\deceso_registro.php?accion=INS" method="POST">
			<div class="row">
				<div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-lg-5 col-lg-offset-2 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Nombre<span style="color:red">*</span></label>
						<input type="text" id="nombre" name="nombre" required="" placeholder="Nombre" class="form-control">
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Fecha de Nacimiento<span style="color:red">*</span></label>
						<input type="date" id="fecha" name="fecha" required="" class="form-control">
					</div>
				</div>
			
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<a href="deceso.php" class="btn btn-danger">Atras</a>
						<input type="submit" value="Guardar" class="btn btn-success">
					</div>
				</div>
			</div>

		</form>
	</div>
</div>
<?php	
	include('php/ppie.php');		
?>