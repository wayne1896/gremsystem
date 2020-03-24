<?php 
require_once('consultas\consultalogin.php');
session_start();
$username=$_POST['usuario'];
$clave=$_POST['clave'];


    if(isset($_POST['logincliente']))
    {
       if(empty($_POST['usuario']) || empty($_POST['clave']))
       {
            header("location: logincliente.php?Empty= Por favor no deje en blanco");
       }
       else
       {
            $query="select * from socio where cedulaclien='".$_POST['usuario']."' and claveclien='".$_POST['clave']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $nombre = $_GET['nombreclien'];

                
                $_SESSION['User']=$_POST['usuario'];
                header("location: ../perfil.php");

            }
            else
            {
                header("location: logincliente.php?Invalid= Por favor introduzca la clave o usuario correcto ");
            }
       }
    }
    else
    {
        echo 'No funcionando';
    }

?>