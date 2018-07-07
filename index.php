<html>

<head>
	<title>Stripe Test</title>


	<link rel="shortcut icon" href="favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
	<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" href="./style.css"/>

</head>

<body>
<div class="container">
	<div class="col-12 offset-md-2 offset-lg-2">
		<form action="./charge.php" method="post" id="payment-form" class="center block"  autocomplete="off">
			<h2 class="formtitle"><i class="fas fa-credit-card"></i>  Stripe Payment</h2>
			<hr class="style11">
				<span><?php echo $err; ?></span>
				<div class="row">
					<div class="col-12">
						<input class="formInpt labelEffect" type="text" placeholder="" id="user" name="username" minlength="6" maxlength="24"  required><label>Name</label>
					</div>
					<div class="col-12">
						<input class="formInpt labelEffect" type="email" placeholder="" name="email" id="mail" style="color: white"  required><label>Email</label>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<input class="formInpt labelEffect" type="text" placeholder="" name="company"  id="cmp"><label>Company</label>
					</div>
					<div class="col-12">
						<input class="formInpt labelEffect" type="text" placeholder="" name="discount"  id="disCode"><label>Discount Code</label>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<label for="amnt"><input class="option-input radio" type="radio" id="amnt" name="amount" value=1000 required> 10€</label>
					</div>
					<div class="col-6">
						<label for="amnt"><input class="option-input radio" type="radio" name="amount" value=2000> 20€</label>
					</div>
				</div>
			 <br>
				<div class="form-row">
					<div id="card-element" class="form-control ">
						<!-- a Stripe Element will be inserted here. -->
					</div>
					<!-- Used to display form errors -->
					<br>
					<div id="card-errors"></div>
				</div>
				<button class="btn btn-outline-primary paybutton">Pay Now</button>

		</form>
	</div>
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="https://js.stripe.com/v3/"></script>
	<script src="./charge.js"></script>
</body>

</html>