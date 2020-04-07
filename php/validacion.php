<?php 
require_once('consultas\consultalogin.php');
session_start();

    if(isset($_POST['login']))
    {
       if(empty($_POST['usuario']) || empty($_POST['clave']))
       {
            header("location: login.php?Empty= Por favor no deje en blanco");
       }
       else
       {
            $query="select * from loginuser where usuario='".$_POST['usuario']."' and claveuser='".$_POST['clave']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['usuario'];
                header("location: ../menu.php");
            }
            else
            {
                header("location: login.php?Invalid= Por favor introduzca la clave o usuario correcto ");
            }
       }
    }
    else
    {
        echo 'No funcionando';
    }

?>