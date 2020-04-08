<?php
  include('php\pcabeza\pcabezaperfildependiente.php');
			$id= $_GET['id'];
			if(isset($_GET['id'])){
				$query=extraerdependienteUDT($_GET['id']);
			 $row=$query->fetch_assoc();
			}
?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <div class="panel panel-default" style="margin-top: 10px">
  	<div class="panel-heading">
  		<h1 align="center">Actualizar Dependiente</h1>
    </div>
    <div class="panel-body" style="margin-left: 60px">
    	<form action="php\dependiente_registroperfil.php?accion=UDT" method="POST">
    		<div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Codigo<span style="color:red">*</span></label>
    				<input type="text" name="codigo" required="" placeholder="Nombre y Apellido" class="form-control" required=""
						readonly="" value="<?php echo $row['id_socio'] ?>">
    				
    			</div>
    			</div>

    			<div class="col-md-4 col-md-offset-0 col-sm-4
    			col-sm-offset-0 col-lg-4 col-Ig-offset-0 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Estado <span style="color:red">*</span></label>
    				<select class="form-control" name="estado">
                       <option value="Vivo" <?php if($row['estadodependien']=='Vivo'){echo  "selected";}  ?>>Vivo</option>
                       <option value="Muerto" <?php if($row['estadodependien']=='Muerto'){echo  "selected";} ?>>Muerto</option>



    				 </select>
    				
    			</div>
    			</div>
          </div>
    		<div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Nombre Completo<span style="color:red">*</span></label>
    				<input type="text" name="nombre" required="" placeholder="Nombre" class="form-control" value="<?php echo $row['nombredependien'] ?>">
    				
    			</div>
    			</div>
					
					<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label">Parentesco<span style="color:red">*</span></label>
    				<select class="form-control" name="parentesco">
                       <option value="Padre">Padre</option>
                       <option value="Madre">Madre</option>
					   <option value="Hijo">Hijo</option>
                       <option value="Hija">Hija</option>
                       <option value="conyuge">Cónyuge</option>


    				 </select>
					</div>
				</div>
  
    			

    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    				<label class="control-label">Fecha de nacimiento <span style="color:red">*</span></label>
    				<input type="date" name="fecha" required=""  class="form-control" 
                    value="<?php echo $row['fechanacimientodepen']?>">
    				
    			  </div>
    			</div>
          </div></div>
          <div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-lg-5 col-lg-offset-2 col-xs-12 col-xs-offset-0">
					<div class="form-group">
						<label class="control-label" hidden='True'>Estado<span style="color:red">*</span></label>
						<input type="text" name='codigoclien' Hidden="true" value="<?php echo $row['id_clien'];?>" placeholder="Estado de Dependiente" class="form-control">
					</div>
				</div>
          	<?php	$id2=$row['id_clien']
			  ?>
    		<div class="row">
    			<div class="col-md-8 col-md-offset-2 col-sm-8
	    			col-sm-offset-2 col-lg-8 col-Ig-offset-2 col-xs-12
	    			col-xs-offset-0">
    		       <div class="form-group">
				   <a href="dependienteperfil.php?id=<?php echo $id2; ?>" class="btn btn-danger">Atras</a>
    			      <input type="submit" value="Guardar" class="btn btn-success"> 
    		      </div>
    		    </div>	
    		</div>
       </div>  
    </div>
<?php  
include('php/ppie_menu.php');
?>

    