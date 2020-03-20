<?php include'php\logcab2.php';?>
<meta charset="UTF-8">
	<title>Buscar Usuario</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	




<div align="right"> <img src="img/Logo1.jpeg"  alt="logo" class="col-lg-4 col-sm-offset-4" width="20" height="200"></div>




<div class="text-center col-lg-4 col-sm-offset-4"><div class="panel-heading">
		   		<h1 style="text-align:center;">Recuperar Contraseña</h1> 
</div>
                                          <form action="validacion.php" method="post">
                            <input type="text" name="usuario" placeholder=" Usuario" class="form-control mb-3">
                            <input type="text" name="preg1" placeholder=" Pregunta 1" class="form-control mb-3">
                            <input type="text" name="preg2" placeholder=" Pregunta 2" class="form-control mb-3">

							<button class="btn btn-success mt-3 btn-lg btn-block" name="confirmar">Confirmar</button>
                            
                            

        
                            
                            
                            <div align="center"><a>No tienes una cuenta?</a><a href="registrar.php">Aqui</a></div>
        
                            
                        </form>
        
                    </div>





      
         <?php include'php\ppie.php';?>