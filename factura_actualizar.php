<?php
  include('php/pcabeza/pcabezacliente.php');
  if(isset($_GET['id'])){
   	$query=extraersocioUDT3($_GET['id']);
    $row=$query->fetch_assoc();
}
  
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <div class="panel panel-default" style="margin-top: 10px">
  	<div class="panel-heading">
  		<h1 align="center">Facturacion</h1>
    </div>
    <div class="panel-body" style="margin-left: 60px">
    	<form action="php\factura_registro.php?accion=UDT" method="POST">
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

    			
          </div>
    		<div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Nombre<span style="color:red">*</span></label>
    				<input type="text" name="nombre" required="" placeholder="Nombre" class="form-control" readonly="" value="<?php echo $row['nombreclien'] ?>">
    				
    			</div>
    			</div>
					<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Apellido<span style="color:red">*</span></label>
						<input type="text" id="apellido" name="apellido" required=""  readonly="" placeholder="Apellido" class="form-control"
						value="<?php echo $row['apellidoclien']?>">
					</div>
				</div>
				
				

				<div class="col-md-5 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-5 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Deudas <span style="color:red">*</span></label>
    				<input type="text" name="deudas" required="" placeholder="Pago" class="form-control"
                    value="<?php echo $row['deuda']?>">
    				
    			</div>
    			</div>
        
    			<div class="col-md-4 col-md-offset-0 col-sm-4
	    			col-sm-offset-0 col-lg-4 col-Ig-offset-0 col-xs-12
	    			col-xs-offset-0">
    			  <div class="form-group">
    				<label class="control-label">Fecha de Factura <span style="color:red">*</span></label>
    				<input type="date" name="fechapago"  class="form-control" 
                    value="<?php echo $row['fecha']?>">
    				
    			  </div>
    			</div>
          </div>
          
    		</div>
    		<div class="row">
    			<div class="col-md-8 col-md-offset-2 col-sm-8
	    			col-sm-offset-2 col-lg-8 col-Ig-offset-2 col-xs-12
	    			col-xs-offset-0">
    		       <div class="form-group">
    			      <a href="facturacion.php" class="btn btn-danger">Atras</a>
    			      <input type="submit" value="Guardar" class="btn btn-success"> 
    		      </div>
    		    </div>	
    		</div>
       </div>  
    </div>
<?php  

include('php/ppie_menu.php');
?>

    