<?php
include('php\consultas\consultaempleado.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GremSystem</title>
  <link rel="icon" type="image/png" href="img\Logo2.jpg" />

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  
    <link href="dist/css/style.min.css" rel="stylesheet">
 

   
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">


    

    <!-- Navbar Search -->


    <!-- Navbar -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><font color="" size="4">GremSystem</font></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php echo $active_facturas;?>"><a href="menu.php"><i class='glyphicon glyphicon-home'></i><font color="" size="4"> Inicio </font></a></li>
        <li class="<?php echo $active_facturas;?>"><a href="facturacion.php"><i class='glyphicon glyphicon-align-justify'></i><font color="" size="4"> Facturas </font><span class="sr-only">(current)</span></a></li>
        <li class="<?php echo $active_productos;?>"><a href="inventario.php"><i class='glyphicon glyphicon-shopping-cart'></i><font color="" size="4"> Inventario</font></a></li>
		<li class="<?php echo $active_clientes;?>"><a href="socio.php"><i class='glyphicon glyphicon-user'></i><font color="" size="4"> Clientes</font></a></li>

    <li class="<?php echo $active_usuarios;?>"><a href="deceso.php"><i  class='glyphicon glyphicon-briefcase'></i><font color="" size="4"> Decesos</font></a></li>
    <li class="<?php echo $active_usuarios;?>"><a href="sucursal.php"><i  class='glyphicon glyphicon-phone-alt'></i><font color="" size="4"> Sucursal</font></a></li>
    <li class="<?php echo $active_usuarios;?>"><a href=""><i  class='glyphicon glyphicon-plus-sign'></i><font color="" size="4"> Acerca de</font></a></li>
       </ul>
      <ul class="nav navbar-nav navbar-right">
		<li><a href="php\login.php?logout"><i class='glyphicon glyphicon-off' ></i><font color="red" size="4"> Salir</font></a></li>
      </ul>
    </div>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
   

    <div id="content-wrapper">

      
</body>