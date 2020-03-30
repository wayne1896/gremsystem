<?php
	include('php\pcabeza\pcabezagremio.php');
  if(isset($_GET['id'])){
   	$query=extraergremioUDT($_GET['id']);
    $row=$query->fetch_assoc();
}
  
?>

  <div class="panel panel-default" style="margin-top: 10px">
  	<div class="panel-heading">
  		<h1 align="center">Actualizar Sucursal</h1>
    </div>
    <div class="panel-body" style="margin-left: 60px">
    	<form action="php\sucursal_registro.php?accion=UDT" method="POST">
    		<div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Codigo<span style="color:red">*</span></label>
    				<input type="text" name="codigo" required="" placeholder="Nombre y Apellido" class="form-control" required=""
						readonly="" value="<?php echo $row['id_plan'] ?>">
    				
    			</div>
    			</div>


          </div>
          <div class="col-md-4 col-md-offset-0 col-sm-4
    			col-sm-offset-0 col-lg-4 col-Ig-offset-0 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Estado <span style="color:red">*</span></label>
    				<select class="form-control" name="estado">
                       <option value="A" <?php if($row['estado_plan']=='A'){echo  "selected";}  ?>>Activo</option>
                       <option value="I" <?php if($row['estado_plan']=='I'){echo  "selected";} ?>>Inactivo</option>



    				 </select>
    				
    			</div>
    			</div>
          </div>
    				
          <div class="row">
				<div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-lg-5 col-lg-offset-2 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Nombre del Plan<span style="color:red">*</span></label>
						<input type="text" id="nombre" name="nombre" required="" placeholder="Nombre" class="form-control"
                        value="<?php echo $row['nombre_plan']?>">
					</div>
				</div>
			
				<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Costo del Plan<span style="color:red">*</span></label>
						<input type="text" id="costo" name="costo" required="" placeholder="direccion del negocio" class="form-control"
                        value="<?php echo $row['costo_plan']?>">
					</div>
				</div>
				</div>
	
    				
    		
    		<div class="row">
    			<div class="col-md-8 col-md-offset-2 col-sm-8
	    			col-sm-offset-2 col-lg-8 col-Ig-offset-2 col-xs-12
	    			col-xs-offset-0">
    		       <div class="form-group">
    			      <a href="sucursal.php" class="btn btn-danger">Atras</a>
    			      <input type="submit" value="Guardar" class="btn btn-success">  
    		      </div>
    		    </div>	
    		</div>
       </div>  
    </div>
<?php  

include('php/ppie_menu.php');
?>

    