<?php 
include php\conexion.php
if ($i=='UDT'){
    $msj='';
$q= '
SELECT costo FROM gremio WHERE id_plan ="1"
';

    UPDATE `deuda` SET de

    WHERE 
    id_deuda ='1'
    ";
    if ($mysqli->query($sql)){
        $msj='successudt';
    }
    else{
        $msj='errorudt';
        echo "error:".mysqli_error($mysqli);
    }
    header("Location: ../sucursal.php?s=".$msj);

}
?>