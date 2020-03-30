<?php include'logcab4.php'; 

?>



    

<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-4">
                    <div class="text-white mt-3">
                   
                        <h1 class="text-center py-3">Login Cliente </h1>
                        <div align="center"> <img src="../img/Logo1.jpeg"  alt="logo" class="col-lg-6 " width="250"
                         height="150"></div>
                       
                    </div>
 
                    <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-2"  style="margin-top:20px"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>
 
 
                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-2" style="margin-top:20px"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
 
                    <div class="card-body">
                        <form action="validacionclient.php" method="post">
                            <input type="text" name="usuario" placeholder=" Usuario" class="form-control mb-3">
                            <input type="password" name="clave" placeholder=" Contraseña" class="form-control mb-3">
                            <button class="btn btn-success mt-3 btn-lg btn-block" name="logincliente">Login</button>
                            <a>No tienes una cuenta?</a><a href="../socio_nuevopropio.php">Aqui</a>
                            

        
                            
                        </form>
                        <a>No tienes acceso a tu cuenta?</a><a href="../recuperar.php">Aqui</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 


<?php include'ppie.php';?>