<?php 
 include('php\pcabeza\pcabezaperfil.php');
 $id2 = $_GET['id2'];
 if(isset($_GET['id2'])){
	$query= extraersocio2UDT($_GET['id2']);
 $row=$query->fetch_assoc();}

 

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

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
    				<label class="control-label">Nombre</label>
    				<input type="text" readonly="" name="nombre" required="" placeholder="Nombre" class="form-control" value="<?php echo $row['nombreclien'] ?>">
					<input type="text" readonly="" name="codigo" hidden="true" required="" placeholder="Nombre" class="form-control" value="<?php echo $row['id_clien'] ?>">
					<?php $_SESSION['codigo']=$row['id_clien'];
					?>
    			</div>
				</div>
				
				
					<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Apellido</label>
						<input type="text" readonly="" id="apellido" name="apellido" required="" placeholder="Apellido" class="form-control"
						value="<?php echo $row['apellidoclien']?>">
					</div>
				</div>
				
				

				<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Direccion </label>
    				<input type="text" readonly="" name="direccion" required="" placeholder="Direccion" class="form-control"
                    value="<?php echo $row['direccionclien']?>">
    				
    			</div>
    			</div>
        
					<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Cedula</label>
						<input type="text" id="cedula" readonly="" name="cedula" required="" placeholder="Cedula de Identidad" class="form-control"
						value="<?php echo $row['cedulaclien']?>">

					</div>
				</div>
				</div>
		
				<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    		
    				<label class="control-label">Telefono </label>
    				<input type="telefono" name="telefono" readonly="" required="" placeholder="Telefono" class="form-control"
                    value="<?php echo $row['telefonoclien']?>">
    				
    			</div>
    			</div>
				

    			<div class="col-md-4 col-md-offset-0 col-sm-4
	    			col-sm-offset-0 col-lg-4 col-Ig-offset-0 col-xs-12
	    			col-xs-offset-0">
    			  <div class="form-group">
    				<label class="control-label">Fecha de nacimiento </label>
    				<input type="date" readonly="" name="fecha" required=""  class="form-control" 
                    value="<?php echo $row['fechaclien']?>">
    				
    			  </div>
    			</div>
				<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    		
    				<label class="control-label">Deuda Pendiente </label>
    				<input type="telefono" name="deuda" readonly="" required="" placeholder="Deuda Pendiente" class="form-control"
                    value="<?php echo $row['deuda']?>"><p><br>
					<a href="index2.php?deuda=<?php echo $row['deuda']?>" class="fab fa-cc-stripe fa-4x"style="margin-left: 240px"></a>
					</p>
    				
    			</div>
    			</div>
          </div>
		  <?php
		 echo "<a href='perfil_actualizar.php?id2=$id2' class='btn btn-primary'>Editar</a>";
		 echo "       "; 
			 $id=$row['id_clien'];
			 
		 echo "<a href='dependienteperfil.php?id=$id' class='btn btn-secondary'>Dependientes</a>";
		
			?>
    		</div>
    		</div>
                </div>
            </div>
            </div>

            <?php 
include('php/ppie_menu.php');	
?>