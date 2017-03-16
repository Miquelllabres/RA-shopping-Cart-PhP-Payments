<?php
$total = $_POST['TOTAL'];
?>	

<html>
	<head>
		
	</head>
	<body>
		<form action="paymentform.php" method="POST" id="payment-form">
				  <span class="payment-errors"></span>
							 
							  <div class="row">
							    <label>
							      <span>Card Number</span>
							      <input type="text" data-stripe="number" class="Cnumber" 
							      value="4242424242424242">
							    </label>
							 
							 
							 
							    <label>
							      <span>CVC</span>
							      <input type="text" data-stripe="cvc" class="cvc"
							      value="123">
							    </label>
							 
							 
							  
							    <label>
							      <span>Exp(MM/YYYY)</span>
							      <input type="text" data-stripe="exp-month" class="exp"
							      value="12">
							      <input type="text" data-stripe="exp-year" class="exp"
							      value="2018">
							    </label>
							    
							  </div>
							 <input type="hidden" size="6" name="total" value=<?php echo $total?>>
							  <button type="submit" id="buy" class="remove">Buy Now</button>
		</form>
	</body>
</html>