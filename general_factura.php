<?php 
include('php\\consultas\consultacliente.php');
$query=listaclien();
?>
<table class="table table-striped" style="text-align: center;">
			 		<thead>
			 			<tr>
			 				<th>ID</th>
			 				<th>Nombre</th>
							 <th>Apellido</th>
							 <th>Deuda</th> 
			 				<th>Id Plan</th> 	
                             <th>Costo Plan</th> 	
                             <th>estado</th> 			
			 				<th></th>
			 			</tr>
			 		</thead>
			 		<tbody>
<?php
while ( $row= $query->fetch_assoc() ) {

    
    echo" 
       <tr>
       <td>".$row['id_clien']."</td>
       <td>".$row['nombreclien']."</td>
       <td>".$row['apellidoclien']."</td>
       <td>$".$row['deuda']."</td>
       <td>".$row['id_plan']."</td> 
       <td>".$row['costo_plan']."</td> 
       <td>".$row['estadoclien']."</td>
      
      
        
        </tr>
    ";
}
?> 			
