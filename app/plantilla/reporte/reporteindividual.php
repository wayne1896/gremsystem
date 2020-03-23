<?php

   function getPlantilla($cliente){
 
  $plantilla = '<body>
    <header class="clearfix">
      <div id="logo">
        <img src="img/logo.png">
      </div>
      <h1>REPORTE DE FACTURACION</h1>
      <div id="company" class="clearfix">
        <div>GremSystem Inc.. </div>
        <div>Bonao, Monseñol Nouel,<br /> CP 42000, RD</div>
        <div>(809)966-4550</div>
        <div><a href="mailto:company@example.com">pj.olivero12@gmail.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECTO</span> Gestor de Gremios o funerarias</div>
        <div><span>CLIENTE</span> Carlos Jose</div>
        <div><span>DIRECCION</span> </div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">'. $cliente["apellidoclien"].'</a></div>
        <div><span>FECHA</span> </div>
        <div><span>DUE DATE</span></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Id</th>
            <th class="desc">NOMBRE</th>
            <th>APELLIDO</th>
            <th>FECHA</th>
            <th>TOTAL A PAGAR</th>
          </tr>
        </thead>
        <tbody>';


  foreach($cliente as $cliente){


       $plantilla .=   '<tr>
            <td class="service">'. $cliente["id_clien"] .'</td>
            <td class="desc">'. $cliente["nombreclien"].' </td>
            <td class="unit">'. $cliente["apellidoclien"].'</td>
            <td class="qty">'. $cliente["fecha"].'</td>
            <td class="total">$'. $cliente["deuda"].'</td>
          </tr>
          
          ';

  }
  $plantilla .='<tr>
  <td colspan="4" class="grand total">TOTAL GENERAL</td>
  <td class="grand total">$'. $cliente["deuda"].'</td>
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