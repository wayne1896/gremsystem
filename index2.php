
<?php 

use \PhpPot\Service\StripePayment;
$monto=$_GET['deuda'];
require_once "config.php";

if (!empty($_POST["token"])) {
    require_once 'StripePayment.php';
    $stripePayment = new StripePayment();
    
    $stripeResponse = $stripePayment->chargeAmountFromCard($_POST);
    
    require_once "DBController.php";
    $dbController = new DBController();
    
    $pago=$_POST['monto'];
    $date = new DateTime();
    $resulta = $date->format('Y-m-d');
 
    $query = "UPDATE `deuda` SET (deuda, fecha) values ($monto-$pago, $resulta)";
    $id = $dbController->insert($query,$pago,$monto);
    
    if ($query!=0){
        header("location perfil.php");
    }

}
?>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GremSystem</title>
  <link rel="icon" type="image/png" href="img\Logo2.jpg" />


<link href="style.css" rel="stylesheet" type="text/css"/ >
</head>
<body>
    <?php if(!empty($successMessage)) { ?>
    <div id="success-message"><?php echo $successMessage; ?></div>
    <?php  } ?>
    
    <div id="error-message"></div>
                
            <form id="frmStripePayment"  action="DBController.php?accion=UDT"
                method="POST">
                <div class="field-row">
                    <label font color="white">Nombre de Tarjeta</label> <span
                        id="card-holder-name-info" class="info"></span><br>
                    <input type="text" id="name" name="name" placeholder="Nombre que tiene la tarjeta"
                        class="demoInputBox">
                </div>
                <div class="field-row">
                    <label>Email</label> <span id="email-info"
                        class="info"></span><br> <input type="text" placeholder="ejemplo@ejemplo.com"
                        id="email" name="email" class="demoInputBox">
                </div>
                <div class="field-row">
                    <label>Numero de Tarjeta</label> <span
                        id="card-number-info" class="info"></span><br> <input
                        type="text" id="card-number" name="card-number" placeholder="0000-0000-0000-0000"
                        class="demoInputBox">
                </div>

                <div class="field-row">
                    <div class="contact-row column-right">
                        <label>Vencimiento Mes / Año</label> <span
                            id="userEmail-info" class="info"></span><br>
                        <select name="month" id="month"
                            class="demoSelectBox">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select> <select name="year" id="year"
                            class="demoSelectBox">
                            <option value="20">2020</option>
                            <option value="21">2021</option>
                            <option value="22">2022</option>
                            <option value="23">2023</option>
                            <option value="24">2024</option>
                            <option value="25">2025</option>
                            <option value="26">2026</option>
                            <option value="27">2027</option>
                            <option value="28">2028</option>
                            <option value="29">2029</option>
                            <option value="30">2030</option>
                            <option value="31">2031</option>
                            <option value="32">2032</option>
                            <option value="33">2033</option>
                            <option value="34">2034</option>
                            <option value="35">2035</option>
                            <option value="36">2036</option>
                            <option value="37">2037</option>
                            <option value="38">2038</option>
                            <option value="39">2039</option>
                            <option value="40">2040</option>
                    
                        </select>
                    </div>
                    <div class="contact-row cvv-box">
                        <label>CVC</label> <span id="cvv-info" 
                            class="info"></span><br> <input type="text" placeholder="123"
                            name="cvc" id="cvc"
                            class="demoInputBox cvv-input">
                    </div>
                    
                </div>
                <div class="field-row">
                    <label>Monto a Pagar</label> <span
                        id="card-number-info" class="info"></span><br> <input
                        type="text" id="monto" requiered='' name="monto" placeholder="<?php echo $monto;?>"
                        class="demoInputBox">
                </div>
                <div>
                <div class="field-row">
                    <label hidden="true">Monto a Pagar</label> <span
                        id="card-number-info" class="info"></span><br> <input
                        type="text" id="monto" hidden="true" name="monto1" value="<?php echo $monto;?>"
                        class="demoInputBox">
                </div>
                <div>
                    <input type="submit" name="pay_now" value="Submit"
                        id="submit-btn" class="btnAction"
                        onClick="stripePay(event);">

                    <div id="loader">
                        <img alt="loader" src="LoaderIcon.gif">
                    </div>
                </div>
                <input type='hidden' name='amount' value='0.5'> <input
                    type='hidden' name='currency_code' value='USD'> <input
                    type='hidden' name='item_name' value='Test Product'>
                <input type='hidden' name='item_number'
                    value='PHPPOTEG#1'>
            </form>
    
    </div>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"
        type="text/javascript"></script>
    <script>
function cardValidation () {
    var valid = true;
    var name = $('#name').val();
    var email = $('#email').val();
    var cardNumber = $('#card-number').val();
    var month = $('#month').val();
    var year = $('#year').val();
    var cvc = $('#cvc').val();

    $("#error-message").html("").hide();

    if (name.trim() == "") {
        valid = false;
    }
    if (email.trim() == "") {
    	   valid = false;
    }
    if (cardNumber.trim() == "") {
    	   valid = false;
    }

    if (month.trim() == "") {
    	    valid = false;
    }
    if (year.trim() == "") {
        valid = false;
    }
    if (cvc.trim() == "") {
        valid = false;
    }

    if(valid == false) {
        $("#error-message").html("Llene los campos").show();
    }

    return valid;
}
//set your publishable key
Stripe.setPublishableKey("<?php echo STRIPE_PUBLISHABLE_KEY; ?>");

//callback to handle the response from stripe
function stripeResponseHandler(status, response) {
    if (response.error) {
        //enable the submit button
        $("#submit-btn").show();
        $( "#loader" ).css("display", "none");
        //display the errors on the form
        $("#error-message").html(response.error.message).show();
    } else {
        //get token id
        var token = response['id'];
        //insert the token into the form
        $("#frmStripePayment").append("<input type='hidden' name='token' value='" + token + "' />");
        //submit form to the server
        $("#frmStripePayment").submit();
    }
}
function stripePay(e) {
    e.preventDefault();
    var valid = cardValidation();

    if(valid == true) {
        $("#submit-btn").hide();
        $( "#loader" ).css("display", "inline-block");
        Stripe.createToken({
            number: $('#card-number').val(),
            cvc: $('#cvc').val(),
            exp_month: $('#month').val(),
            exp_year: $('#year').val()
        }, stripeResponseHandler);

        //submit from callback
        return false;
    }
}
</script>
</body>
</html>