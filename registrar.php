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
         <input type="text" name="nombreuser" placeholder="Nombre Completo">
         
         </div>
         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="user" placeholder="Usuario">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="correouser" placeholder="Correo Electronico">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="claveuser" placeholder="Contraseña">
       
         
         </div>

<legend>Preguntas De seguridad</legend>

<!-- Select Basic -->
<div class="form-group" >
  <label class="control-label" class="col-lg-6 " width="250" for="selectbasic">Pregunta de seguridad 1<span style="color:red">*</span></label>
  <div>
    <select id="pregunta1" name="menu" size="pregunta1" class="form-control" >
      <option value="1">Donde naciste?</option>
      <option value="2">Cual es tu apodo?</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class= for="textinput">Respuesta<span style="color:red">*</span></label>  
  <div>
  <input id="respuesta2"  name="respuesta2" type="tex" placeholder="Respuesta" class="form-control input-md">
   
  </div>
</div>

<div class="form-group">
  <label class= for="selectbasic">Pregunta de seguridad 2<span style="color:red">*</span></label>
  <div>
    <select id="pregunta2" name="pregunta2" size="1" class="form-control">
      <option value="1">Artista favorito?</option>
      <option value="2">Musica Favorita?</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class= for="textinput">Respuesta<span style="color:red">*</span></label>  
  <div>
  <input id="respuesta2"  name="respuesta2" type="tex" placeholder="Respuesta" class="form-control input-md">
   
  </div>
</div>

</fieldset>


<div class="form-group" >
  <label class="control-label" class="col-lg-6 " width="250" for="selectbasic">Cargo<span style="color:red">*</span></label>
  <div>
    <select id="pregunta1" name="menu" size="1" class="form-control" >
      <option value="1">Administrador</option>
      <option value="2">Jefe</option>
      <option value="2">Secretaria</option>
      <option value="2">Cobrador</option>
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
	include('php/ppie.php');		
?>