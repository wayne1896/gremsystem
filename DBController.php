<?php session_start();
 $id3=$_SESSION['User'];
include('php/conexion.php');
include('php/consultacliente.php');

if(isset($_GET[$id3])){
    $query= extraersocio2UDT($_GET[$id3]);
 $row=$query->fetch_assoc();}
 $i='UDT';
 $id=$_SESSION['codigo'];

      
 $date = new DateTime();
 $resulta = $date->format('Y-m-d');
              $monto=$_POST['monto']; 
              $deuda=$_POST['monto1'];
              $total=-$monto+$deuda;
            
         if($total>=0){   
        $sql="UPDATE `deuda` SET `deuda`='$total',
		`fecha`='$resulta'
         WHERE id_clien='$id'
         ";
         		if ($mysqli->query($sql)){
                    header("Location: perfil.php?id2=$id3");
                }
        
        header("Location: perfil.php?id2=$id3");
    }else{

    header("Location: perfil.php?id2=$id3");
    }
   
    

 ?>
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "gremsystem";
	private $conn;
	
    function __construct() {
        $this->conn = $this->connectDB();
    }	
   
    
   

	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
    
    function update($query, $param_type, $param_value_array) {
        $sql = $this->conn->prepare($query);
        $this->bindQueryParams($sql, $param_type, $param_value_array);
        $sql->execute();
    }
}
?>