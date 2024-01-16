<?php 
    $amount = isset($_GET['amount']) ? urldecode($_GET['amount']) : 0;
   
    $card_number = "4444111122223333";
    $card_expiry = "12/25";
    $card_cvv = "123";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user_card_num = str_replace(' ', '', $_POST['card-num']);
        $user_card_expiry = strval($_POST['card-expiry']);
        $user_card_cvv = strval($_POST['card-cvv']);

        if($card_number == $user_card_num && $card_expiry == $user_card_expiry && $card_cvv == $user_card_cvv){
            echo '<script>alert("Payment successful!");</script>';
            header('Location: my-booking.php');
            exit();
        }
        else{
            echo '<script>alert("Invalid Card Details pls check!");</script>';
        }
    }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>

<title>Car Rental Portal | Car Listing</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>
<div class="container" style="margin-top:50px">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h2 class="text-center">Payment Details</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="card-number">Card Number</label>
          <input type="text" name="card-num" id="card-number" class="form-control" placeholder="4432 9909 1242 2323" maxlength="20" required >
        </div>
        <div class="form-group">
          <label for="expiry-date">Expiry Date</label>
          <input type="text" name="card-expiry" id="expiry-date" class="form-control" maxlength="5" placeholder="MM/YY" required>
        </div>
        <div class="form-group">
          <label for="cvv">CVV</label>
          <input type="password" name="card-cvv" id="cvv" class="form-control" maxlength="3" required>
        </div>
        <div class="form-group">
          <label for="card-holder">Card Holder Name</label>
          <input type="text" id="card-holder" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success btn-block">Make Payment</button>
      </form>
    </div>
    <div class="col-md-3" style="margin-top: 80px;">
        <div class="panel panel-default">
          <div class="panel-heading">Amount</div>
          <div class="panel-body">
            <h4>&#8377; <?php echo $amount ?></h4>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">Test Card</div>
          <div class="panel-body">
          <table class="table table-striped" id="card-details">
                <tr>
                    <td>Number - <b>4444111122223333</b></td>
                </tr>
                <tr>
                    <td>Expiry - <b>12/25</b></td>
                </tr>
                <tr>
                    <td>CVV - <b>123</b></td>
                </tr>
          </table>
          </div>
        </div>
      </div>

  </div>
</div>
<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>
<script>
    document.getElementById('expiry-date').addEventListener('input', function (event) {

        let inputValue = event.target.value;
      inputValue = inputValue.replace(/\D/g, '');
  
      if (inputValue.length > 2) {
        inputValue = inputValue.substring(0, 2) + '/' + inputValue.substring(2);
      }
        event.target.value = inputValue;
    });

    document.getElementById('card-number').addEventListener('input', function (event) {
        let inputValue = event.target.value;
        inputValue = inputValue.replace(/\D/g, '');

        inputValue = inputValue.replace(/(\d{4})/g, '$1 ');

        event.target.value = inputValue;
  });

  </script>
</body>
</html>
