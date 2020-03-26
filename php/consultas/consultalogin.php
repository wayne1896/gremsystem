<?php
 $con = new mysqli("localhost", "root", "", "gremsystem");
 
 if(!$con)
 {
	 die(' Fallo al conectar a MySQL'.mysqli_error($con));
 }

 
?>
