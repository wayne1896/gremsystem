<?php
$id=1;
   function getPlantilla($cliente){

require 'cone_reporte.php';
include('consultacliente.php');
if(isset($_GET['id'])){
  $query=extraersocioUDT($_GET['id']);
 $row=$query->fetch_assoc();
 $time = time();
}
 
  $plantilla = '<body>
    <header class="clearfix">
      <div class="icon" >
      
        <img src="C:\xampp\htdocs\Gremsystem-cj\app\plantilla\img\Logo2.jpg"  >
      
      </div> 
      <div class="nombre">
          GremSystem
      </div>
      <h1>REPORTE DE FACTURACION</h1>
      <div id="company" class="clearfix">
        <div>GremSystem Inc.. </div>
        <div>Bonao, Monseñol Nouel,<br /> CP 42000, RD</div>
        <div>(809)966-4550</div>
        <div><a href="mailto:company@example.com">gremsystem@gmail.com</a></div>
      </div>
      <div id="project">

      
        <div><span>PROJECTO</span> Gestor de Gremios o funerarias</div>
        <div><span>CLIENTE</span> '.$row["nombreclien"] .' '.$row["apellidoclien"] .'</div>
        <div><span>DIRECCION</span> '.$row["direccionclien"] .' </div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">'.$row["correoclient"] .'</a></div>
        <div><span>FECHA</span> '.$row["fecha"] .'</div>
      
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Id</th>
            <th class="desc">NOMBRE</th>
           <th>COSTO</th>
            <th>DEUDA ANTERIOR</th>
          </tr>
        </thead>
        <tbody>';


  foreach($cliente as $cliente){


       $plantilla .=   '<tr>
            <td class="service">'. $cliente["id_plan"] .'</td>
            <td class="desc">Plan '. $cliente["nombre_plan"].' </td>
            <td class="total">$'. $cliente["costo_plan"].'</td> 
            <td class="total">$'. $cliente["deuda"].'</td>
          </tr>
          
          ';

  }
  $valor=$cliente["deuda"];
  $total=$cliente["costo_plan"]+$valor;
  $plantilla .='<tr>
  
  <td colspan="4" class="grand total">TOTAL GENERAL</td>
  <td class="grand total">$'.$total.'</td>
</tr>';



      $plantilla .=  '</tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Por favor pagar antes de la fecha limite (15 dias), para evitar cargos extras.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
    </body>';

  return $plantilla;

}