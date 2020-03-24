<?php 
 include('php\pcabeza\pcabezaperfil.php');
 session_start();


?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


            <div class="container">    
                  <div class="row">
                      <div class="panel panel-default">
                      <div class="panel-heading">  <h4 >Perfil <?php echo $_SESSION['User'];?></h4></div>
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 

                      </div>
					  <div class="panel-body" style="margin-left: 60px">

					  <div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
					<label class="control-label">Codigo<span style="color:red">*</span></label>
					
    				<input type="text" name="codigo" required="" placeholder="Nombre y Apellido" class="form-control" required=""
						readonly="" value="<?php echo $nombre ?>">
    				
    			</div>
    			</div>
    
    		<div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Nombre<span style="color:red">*</span></label>
    				<input type="text" name="nombre" required="" placeholder="Nombre" class="form-control" value="<?php $nombre = $_GET['nombreclien'];

echo$nombre;?>">
    				
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
    			col-sm-offset-2 col-lg-5 col-Ig-offset-2 col-xs-12
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
    		</div>
                </div>
            </div>
            </div>

            <?php 
 include('php/ppie.php');	
?>