<?php

$cliente = array();

$mysqli = new mysqli("localhost", "root", "", "gremsystem");

$mysqli->set_charset('utf8');
$statement = $mysqli->prepare("SELECT * FROM socio s JOIN deuda d ON (s.id_clien=d.id_clien)
JOIN empleado e ON (s.id_empleado=e.id_empleado)");
$statement->execute();
$resultado = $statement->get_result();
while($row = $resultado->fetch_assoc()) $cliente[] = $row;
$mysqli->close();