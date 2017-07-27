<?php // Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys

require_once('./config.php');
// Token is created using Stripe.js or Checkout!
// Get the payment token submitted by the form:
$total = $_POST["TOTAL"];
$token = $_POST['stripeToken'];

// Charge the user's card:
$charge = \Stripe\Charge::create(array(
  "amount" => $total*100,
  "currency" => "usd",
  "description" => "Example charge",
  "source" => $token,
));


 ?>
 <html>
	<head>
	<link rel="stylesheet" type="text/css" href="dist/style.min.css">
		
	</head>
	<body>
	<div class="textcenter">
		<?php echo '<h1>Thank you for your purchase! </h1>';
// echo '<p>Your Total order was $'. $total ;
  echo '<a href="index.php"><p>Back home</p> </a>'; ?>
  	</div>
	</body>
</html>



<!-- echo "im here ";
die(); -->