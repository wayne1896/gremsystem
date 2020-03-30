<?php 
 include('php\pcabeza\pcabezadependiente.php');	
?>
<div class="panel panel-default" style="margin-top: 10px"> 		
	<div class="panel-heading">
		<h1 align="center">Nuevo Dependiente</h1> 			
	</div>
	<div class="panel-body"style="margin-left: 60px">
		<form action="php\empleado_registro.php?accion=INS" method="POST">
			<div class="row">
				<div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-lg-5 col-lg-offset-2 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Nombre Completo<span style="color:red">*</span></label>
						<input type="text" id="nombre" name="nombre" required="" placeholder="Nombre" class="form-control">
					</div>
				</div>
				<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Parentesco<span style="color:red">*</span></label>
						<input type="text" id="parentesco" name="parentesco" required="" placeholder="Parentesco" class="form-control">
					</div>
				</div>
				<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Fecha de Nacimiento<span style="color:red">*</span></label>
						<input type="date" id="fecha" name="fecha" required="" class="form-control">
					</div>
				</div>
				<div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-lg-5 col-lg-offset-2 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Estado<span style="color:red">*</span></label>
						<input type="text" id="estado" name="estado" required="" placeholder="Estado de Dependiente" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<a href="empleados.php" class="btn btn-danger">Atras</a>
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