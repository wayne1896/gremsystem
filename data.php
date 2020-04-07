<?php
header('Content-Type: application/json');

$conn  = new mysqli("localhost", "root", "", "gremsystem");
if ($conn->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
}
// echo $mysqli->host_info . "\n";

$sqlQuery = "SELECT direccionclien,Count(id_clien)as id_clien FROM socio Group By direccionclien";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>