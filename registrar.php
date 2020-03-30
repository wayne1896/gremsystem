<?php include'php\logcab2.php';
?>


	<meta charset="UTF-8">
	<title>Registro de Usuario</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	




<div align="right"> <img src="img/Logo1.jpeg"  alt="logo" class="col-lg-4 col-sm-offset-4" width="20" height="200"></div>
<form action="php\usuarioregistro.php?accion=INS" method="POST" class="formulario" >
<h1>Registrate</h1>
    
     <div class="contenedor" class="col-lg-6 " width="25">
     
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" required="" name="nombreuser" placeholder="Nombre Completo">
         
         </div>
         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="user" required="" placeholder="Usuario">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="correouser" required="" placeholder="Correo Electronico">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="claveuser" required="" placeholder="Contraseña">
       
         
         </div>

         <div class="input-contenedor">
        <i class="fas fa-question icon"></i>
         <input type="text" name="respuesta1" required="" placeholder="¿Donde naciste?">
       
         
         </div>

         <div class="input-contenedor">
        <i class="fas fa-question  icon"></i>
         <input type="text" name="respuesta2" required="" placeholder="¿Equipo favorito">
       
         
         </div>




<div class="form-group" >
  <label class="control-label" class="col-lg-6 " width="250" for="selectbasic">Cargo<span style="color:red">*</span></label>
  <div>
    <select id="privilegio" name="privilegio" size="1" class="form-control" >
      <option value="Admin">Administrador</option>
      <option value="Jefe">Jefe</option>
      <option value="Secretaria">Secretaria</option>
      <option value="Cobrador">Cobrador</option>
    </select>
  </div>
</div>
     
<input type="submit" class="btn btn-success mt-3 btn-lg btn-block"  value="Enviar formulario">
         <h1></h1>
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="php\login.php">Iniciar Sesion</a></p>
         
     </div>
    </form>

   <?php	
	include('php/ppie_menu.php');			
?>