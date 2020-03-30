<?php include'php\logcab2.php';
session_start();
  if(isset($_GET['id'])){
	$query=extraerusuariosUDT($_GET['id']);
	$row=$query->fetch_assoc();

  }

?>


	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	





<h1>Actualizar Contraseña</h1>

<div class="panel panel-default" style="margin-top: 10px">

    <div class="panel-body" style="margin-left: 60px">
    	<form action="php\usuarioregistro.php?accion=UDT" method="POST">
    		
		<div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Codigo<span style="color:red">*</span></label>
    				<input type="text" name="codigo" required="" placeholder="Nombre y Apellido" class="form-control" required=""
						readonly="" value="<?php echo $row['id_user'] ?>">
    				
    			</div>
    			</div>
         
    				
          <div class="row">
    			<div class="col-md-4 col-md-offset-2 col-sm-4
    			col-sm-offset-2 col-lg-4 col-Ig-offset-2 col-xs-12
    			col-xs-offset-0">
    			<div class="form-group">
    				<label class="control-label">Contraseña<span style="color:red">*</span></label>
					<input type="password" name="claveuser"required="" placeholder="Contraseña">
    				
    			</div>
    			</div>

    		    			<div class="col-md-4 col-md-offset-0 col-sm-4
	    			col-sm-offset-0 col-lg-4 col-Ig-offset-0 col-xs-12
	    			col-xs-offset-0">
    			  <div class="form-group">
				  <label class="control-label">Confirme Contraseña<span style="color:red">*</span></label>
				  <input type="password" name="claveuser" placeholder="Contraseña" required="">
    				
    		
    		<div class="row">
    			<div >
    		       <div >
    			      <a href="php\usuarioregistro.php" class="btn btn-danger">Atras</a>
    			      <input type="submit" value="Guardar" class="btn btn-success">  
    		      </div>
    		    </div>	
    		</div>
       </div>  
    </div>








<?php	
	include('php/ppie.php');		
?>