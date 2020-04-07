<?php
$id= $_GET['id'];
$cliente = array();

$mysqli = new mysqli("localhost", "root", "", "gremsystem");

$mysqli->set_charset('utf8');
$statement = $mysqli->prepare("SELECT * FROM socio s JOIN deuda d ON (s.id_clien=d.id_clien)
JOIN gremio g ON (g.id_plan=s.id_plan) where s.id_clien='$id'");
$statement->execute();
$resultado = $statement->get_result();
while($row = $resultado->fetch_assoc()) $cliente['1'] = $row;
$mysqli->close();

