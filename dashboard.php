<?php	
    include('php/pcabeza\pcabezacliente.php');	
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>	

 <script src="https://microsoft.github.io//PowerBI-JavaScript/demo/node_modules/jquery/dist/jquery.js"></script>  
 <script src="https://microsoft.github.io//PowerBI-JavaScript/demo/node_modules/powerbi-client/dist/powerbi.js"></script>

<script type="text/javascript">

window.onload = function () {
 
var embedConfiguration = {
    type: 'report',  
    accessToken: 'eyJ0eXAiOiYOUR-TOKEN-HERE-pgVRA',
    embedUrl: 'https://app.powerbi.com/reportEmbed?reportId=9f841c40-b361-490b-8f08-01dd2b8e6645'  
}; 

var $reportContainer = $('#reportContainer');
 
var report = powerbi.embed($reportContainer.get(0), embedConfiguration); 

} 

</script> 
<div id="reportContainer"></div>

<?php  

 include 'php/ppie.php';
?>
