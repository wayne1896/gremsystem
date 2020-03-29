<?php 
require_once('php\consultas\consultalogin.php');
session_start();
$username=$_POST['usuario'];
    if(isset($_POST['confirmar']))
    {
       if(empty($_POST['usuario']))
       {
     
            header("location:recuperar.php?Empty= Por favor no deje en blanco");
       }
       else
       {
            $query="select * from loginuser where usuario='".$_POST['usuario']."' and preg1='".$_POST['preg1']."' and preg2='".$_POST['preg2']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['usuario'];
              
                             header("location: pre_recuperacion.php?id=$username");
            }
            else
            {
                header("location: recuperar.php?Invalid= Por favor introduzca la clave o usuario correcto ");
               
            
            }
       }
    }
    else
    {
        echo 'No funcionando';
    }

?>