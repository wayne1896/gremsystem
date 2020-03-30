<?php
	include('php/pcabeza\pcabezadeceso.php');
  if(isset($_GET['id'])){
   	$query=extraerdecesoUDT($_GET['id']);
    $row=$query->fetch_assoc();
}
  
?>

  <div class="panel panel-default" style="margin-top: 10px">
  	<div class="panel-heading">
  		<h1 align="center">Actualizar Deceso</h1>
    </div>
    <div class="panel-body" style="margin-left: 60px">
    	<form action="php\deceso_registro.php?accion=UDT" method="POST">
    		<div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Codigo<span style="color:red">*</span></label>
    				<input type="text" name="codigo" required="" placeholder="Nombre y Apellido" class="form-control" required=""
						readonly="" value="<?php echo $row['id_deceso'] ?>">
    				
    			</div>
    			</div>


          </div>
    				
          <div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Nombre <span style="color:red">*</span></label>
    				<input type="text" name="nombre" required="" placeholder="Telefono" class="form-control"
                    value="<?php echo $row['nombre_deceso']?>">
    				
    			</div>
    			</div>

    			<div class="col-md-4 col-md-offset-0 col-sm-4
	    			col-sm-offset-0 col-lg-4 col-Ig-offset-0 col-xs-12
	    			col-xs-offset-0">
    			  <div class="form-group">
    				<label class="control-label">Fecha de Deceso <span style="color:red">*</span></label>
    				<input type="date" name="fecha" required=""  class="form-control" 
                    value="<?php echo $row['fecha_deceso']?>">
    				
    		
    		<div class="row">
    			<div class="col-md-8 col-md-offset-2 col-sm-8
	    			col-sm-offset-2 col-lg-8 col-Ig-offset-2 col-xs-12
	    			col-xs-offset-0">
    		       <div class="form-group">
    			      <a href="deceso.php" class="btn btn-danger">Atras</a>
    			      <input type="submit" value="Guardar" class="btn btn-success"> 
    		      </div>
    		    </div>	
    		</div>
       </div>  
    </div>
<?php  
include('php/ppie_menu.php');	
?>

    