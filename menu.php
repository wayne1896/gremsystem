<?php 
 include('php/pcabeza/pcabezamenu.php');	
?>
  
<script type="text/javascript">
		$(document).ready(function() {		
			$('.menu a').hover(function() {
				$(this).stop().animate({							
					opacity: 1
				}, 300);		
				}, function() {			
				$(this).stop().animate({							
					opacity: 0.7
				}, 300);		
			});	
		});	
	</script>
</head>

<body>

<div style="text-align:center;m-auto">
<h3>GremSystem</h3>

<div class="menu" class="col-lg-6 m-auto">
	<a class="yellow" href="empleados.php" ><img src="img/registro.png"  alt="logo"  width="120"height="150"></a>
	<a class="green" href="socio.php"> <img src="img/cliente.png"  alt="logo"  width="120"height="150"></a>
	<a class="blue" href="deceso.php"><img src="img/deceso.png"  alt="logo"  width="120"height="150"></a>
	<a class="purple" href="sucursal.php"><img src="img/sucursal.png"  alt="logo"  width="120"height="150"></a>
	<a class="orange" href="inventario.php"><img src="img/inventario.png"  alt="logo"  width="120"height="150"></a>
	<a class="pink" href="facturacion.php"><img src="img/facturacion.png"  alt="logo"  width="120"height="150"></a>
	<a class="yellow" href="empleados.php" ><img src="img/acerca.png"  alt="logo"  width="120"height="150"></a>
	<a class="green" href="dashboard.php"> <img src="img/Dashboard.png"  alt="logo"  width="120"height="150"></a>
</div>


<?php	
	include('php/ppie.php');		
?>