<?php	
    include('php/pcabeza\pcabezacliente.php');	
   
    
    ?>
    <Head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link href="./main.css" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->	
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
</head>

<body class="grey lighten-3">

 
      <!-- Heading -->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">

              <canvas id="graphCanvas"></canvas>

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-4">

          <!--Card-->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header text-center">
              Deudas por Pagar
            </div>

            <!--Card content-->
            <div class="card-body">
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gremsystem";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sqll4 = "SELECT  Sum(deuda) from deuda ";
if (mysqli_query($conn, $sqll4))
{
echo "";
}
else
{
echo "Error: " . $sqll4 . "<br>" . mysqli_error($conn);
}
$result = mysqli_query($conn, $sqll4);
if (mysqli_num_rows($result) > 0)
{
// output data of each row
while($row = mysqli_fetch_assoc($result))
{
?>

            <div class="col-md-8 col-xl-8">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Cobro faltante</div>
                                            <div class="widget-subheading">Total Deudas por Cobrar</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>$<?php echo $row['Sum(deuda)']; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

            </div>
            <?php
}
}
else
{
echo '0 results';
}
?>


          </div>
          <!--/.Card-->

          <!--Card-->
          <div class="card mb-4">

            <!--Card content-->
            <div class="card-body">

              <!-- List group links -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gremsystem";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sqll = "SELECT  Count(id_deceso) from deceso ";
if (mysqli_query($conn, $sqll))
{
echo "";
}
else
{
echo "Error: " . $sqll . "<br>" . mysqli_error($conn);
}
$result = mysqli_query($conn, $sqll);
if (mysqli_num_rows($result) > 0)
{
// output data of each row
while($row = mysqli_fetch_assoc($result))
{
?>


              <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action waves-effect">Deceso
                  <span class="badge badge-danger badge-pill pull-right"><?php echo $row['Count(id_deceso)']; ?>
                    <i class="fas fa-arrow-up ml-1"></i>
                  </span>
                </a>
                <?php
}
}
else
{
echo '0 results';
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gremsystem";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sqll1 = "SELECT  Count(id_clien) from socio ";
if (mysqli_query($conn, $sqll1))
{
echo "";
}
else
{
echo "Error: " . $sqll1 . "<br>" . mysqli_error($conn);
}
$result = mysqli_query($conn, $sqll1);
if (mysqli_num_rows($result) > 0)
{
// output data of each row
while($row = mysqli_fetch_assoc($result))
{
?>
                <a class="list-group-item list-group-item-action waves-effect">Socios Registrados
                  <span class="badge badge-success badge-pill pull-right"><?php echo $row['Count(id_clien)']; ?>
                    <i class="fas fa-arrow-up ml-1"></i>
                  </span>
                </a>
                <?php
}
}
else
{
echo '0 results';
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gremsystem";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sqll2 = "SELECT  Count(id_empleado) from empleado ";
if (mysqli_query($conn, $sqll2))
{
echo "";
}
else
{
echo "Error: " . $sqll2 . "<br>" . mysqli_error($conn);
}
$result = mysqli_query($conn, $sqll2);
if (mysqli_num_rows($result) > 0)
{
// output data of each row
while($row = mysqli_fetch_assoc($result))
{
?>
                <a class="list-group-item list-group-item-action waves-effect">Empleados
                  <span class="badge badge-primary badge-pill pull-right"><?php echo $row['Count(id_empleado)']; ?></span>
                </a>
                <?php
}
}
else
{
echo '0 results';
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gremsystem";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sqll3 = "SELECT  Sum(cantida) from inventario ";
if (mysqli_query($conn, $sqll3))
{
echo "";
}
else
{
echo "Error: " . $sqll3 . "<br>" . mysqli_error($conn);
}
$result = mysqli_query($conn, $sqll3);
if (mysqli_num_rows($result) > 0)
{
// output data of each row
while($row = mysqli_fetch_assoc($result))
{
?>
                <a class="list-group-item list-group-item-action waves-effect">Total de Inventario
                  <span class="badge badge-primary badge-pill pull-right"><?php echo $row['Sum(cantida)']; ?></span>
                </a>
                <?php
}
}
else
{
echo '0 results';
}
?>
                
              </div>
              <!-- List group links -->

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


 
        <!--Grid column-->

        
       
  
       

                  

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <!-- Charts -->
  <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var marks = [];



                    for (var i in data) {
                        name.push(data[i].direccionclien);
                        marks.push(data[i].id_clien);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Direcciones de Socios',
                                backgroundColor: ["Red", "Green", "Yellow", "Grey",  "Blue"],
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: ["Red", "Green", "Yellow", "Grey", "Blue"],
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'pie',
                        data: chartdata
                    });
                });
            }
        }
        </script>
        <script>

    //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true,
        legend: false
      }
    });


   

  
  </script>

 

</body>
<?php  

include('php/ppie_menu.php');
?>
