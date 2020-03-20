<?php
  include('php\pcabeza\pcabezacliente.php');
  if(isset($_GET['id'])){
   	$query=extraersocioUDT($_GET['id']);
    $row=$query->fetch_assoc();
}
  
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

  <div class="panel panel-default" style="margin-top: 10px">
  	<div class="panel-heading">
  		<h1 align="center">Actualizar Empleado</h1>
    </div>
    <div class="panel-body" style="margin-left: 60px">
    	<form action="php\socio_registro.php?accion=UDT" method="POST">
    		<div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Codigo<span style="color:red">*</span></label>
    				<input type="text" name="codigo" required="" placeholder="Nombre y Apellido" class="form-control" required=""
						readonly="" value="<?php echo $row['id_clien'] ?>">
    				
    			</div>
    			</div>

    			<div class="col-md-4 col-md-offset-0 col-sm-4
    			col-sm-offset-0 col-lg-4 col-Ig-offset-0 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Estado <span style="color:red">*</span></label>
    				<select class="form-control" name="estado">
                       <option value="A" <?php if($row['estadoclien']=='A'){echo  "selected";}  ?>>Activo</option>
                       <option value="I" <?php if($row['estadoclien']=='I'){echo  "selected";} ?>>Inactivo</option>



    				 </select>
    				
    			</div>
    			</div>
          </div>
    		<div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Nombre<span style="color:red">*</span></label>
    				<input type="text" name="nombre" required="" placeholder="Nombre" class="form-control" value="<?php echo $row['nombreclien'] ?>">
    				
    			</div>
    			</div>
					<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Apellido<span style="color:red">*</span></label>
						<input type="text" id="apellido" name="apellido" required="" placeholder="Apellido" class="form-control"
						value="<?php echo $row['apellidoclien']?>">
					</div>
				</div>
				
				

				<div class="col-md-5 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Direccion <span style="color:red">*</span></label>
    				<input type="text" name="direccion" required="" placeholder="Direccion" class="form-control"
                    value="<?php echo $row['direccionclien']?>">
    				
    			</div>
    			</div>
        
					<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Cedula<span style="color:red">*</span></label>
						<input type="text" id="cedula" name="cedula" required="" placeholder="Cedula de Identidad" class="form-control"
						value="<?php echo $row['cedulaclien']?>">
					</div>
				</div>
				</div>
		
          <div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Telefono <span style="color:red">*</span></label>
    				<input type="telefono" name="telefono" required="" placeholder="Telefono" class="form-control"
                    value="<?php echo $row['telefonoclien']?>">
    				
    			</div>
    			</div>

    			<div class="col-md-4 col-md-offset-0 col-sm-4
	    			col-sm-offset-0 col-lg-4 col-Ig-offset-0 col-xs-12
	    			col-xs-offset-0">
    			  <div class="form-group">
    				<label class="control-label">Fecha de nacimiento <span style="color:red">*</span></label>
    				<input type="date" name="fecha" required=""  class="form-control" 
                    value="<?php echo $row['fechaclien']?>">
    				
    			  </div>
    			</div>
          </div>

    		</div>
    		<div class="row">
    			<div class="col-md-8 col-md-offset-2 col-sm-8
	    			col-sm-offset-2 col-lg-8 col-Ig-offset-2 col-xs-12
	    			col-xs-offset-0">
    		       <div class="form-group">
    			      <a href="propietario_mant.php" class="btn btn-danger">Atras</a>
    			      <input type="submit" value="Guardar" class="btn btn-success"> 
    		      </div>
    		    </div>	
    		</div>
       </div>  
    </div>
<?php  

include('php/ppie_menu.php');
?>

    