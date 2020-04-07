<?php
include('php\consultas\consultacliente.php');

?>

<!DOCTYPE html>
<html lang="en">
  

<head>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Perfil</title>
  <link rel="icon" type="image/png" href="img\Logo2.jpg" />
  <link type="text/css" href="css\styles.css" rel="stylesheet" />
 

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css" />
	
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>


  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  
    <link href="dist/css/style.min.css" rel="stylesheet">
 

   
</head>

<body id="page-top">

  <nav class="navbar navbar navbar-dark bg-dark static-top">
  
  <?php
  session_start();
   $id2=$_SESSION['User'];?>

    <a class="navbar-brand mr-1" href="perfil.php?id2=<?php echo "$id2" ?>">GremSystem</a>



    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
    </form>

    <?php 
    
     echo"<span style='color:WHITE'>Usuario ".$id2." </span>"; ?>
    <!-- Navbar -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
 
        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">


    <div id="content-wrapper">

      
</body>
<!--Modal-->
<div class="modal" id="exampleModal"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cerrar sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Desea cerrar su sesion?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a type="button" class="btn btn-primary" href="Logout.php" >Cerrar Seccion</a>
      </div>
    </div>
  </div>
</div>