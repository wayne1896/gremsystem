<?php 
 include('php\pcabeza\pcabezaperfil.php');
 session_start();
 $id2 = $_GET['id2'];
 if(isset($_GET['id2'])){
	$query= extraersocio2UDT($_GET['id2']);
 $row=$query->fetch_assoc();}

 

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
    	
    
    		<div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Nombre<span style="color:red">*</span></label>
    				<input type="text" readonly="" name="nombre" required="" placeholder="Nombre" class="form-control" value="<?php echo $row['nombreclien'] ?>">
    				
    			</div>
				</div>
				
					<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Apellido<span style="color:red">*</span></label>
						<input type="text" readonly="" id="apellido" name="apellido" required="" placeholder="Apellido" class="form-control"
						value="<?php echo $row['apellidoclien']?>">
					</div>
				</div>
				
				

				<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Direccion <span style="color:red">*</span></label>
    				<input type="text" readonly="" name="direccion" required="" placeholder="Direccion" class="form-control"
                    value="<?php echo $row['direccionclien']?>">
    				
    			</div>
    			</div>
        
					<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Cedula<span style="color:red">*</span></label>
						<input type="text" id="cedula" readonly="" name="cedula" required="" placeholder="Cedula de Identidad" class="form-control"
						value="<?php echo $row['cedulaclien']?>">
					</div>
				</div>
				</div>
		
				<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    		
    				<label class="control-label">Telefono <span style="color:red">*</span></label>
    				<input type="telefono" name="telefono" readonly="" required="" placeholder="Telefono" class="form-control"
                    value="<?php echo $row['telefonoclien']?>">
    				
    			</div>
    			</div>
				

    			<div class="col-md-4 col-md-offset-0 col-sm-4
	    			col-sm-offset-0 col-lg-4 col-Ig-offset-0 col-xs-12
	    			col-xs-offset-0">
    			  <div class="form-group">
    				<label class="control-label">Fecha de nacimiento <span style="color:red">*</span></label>
    				<input type="date" readonly="" name="fecha" required=""  class="form-control" 
                    value="<?php echo $row['fechaclien']?>">
    				
    			  </div>
    			</div>
				<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    		
    				<label class="control-label">Deuda Pendiente <span style="color:red">*</span></label>
    				<input type="telefono" name="deuda" readonly="" required="" placeholder="Deuda Pendiente" class="form-control"
                    value=$<?php echo $row['deuda']?>>
    				
    			</div>
    			</div>
          </div>
		  <?php
		 echo "<a href='perfil_actualizar.php?id2=$id2' class='btn btn-primary'>Editar</a>";
			?>
    		</div>
    		</div>
                </div>
            </div>
            </div>

            <?php 
 include('php/ppie.php');	
?>