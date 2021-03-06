<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Donate Beta</title>
    <link href="http://fonts.googleapis.com/css?family=Quicksand|Montserrat|Quattrocento+Sans:400,700|Varela+Round" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" charset="utf-8" async="" src="js/jquery.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="js/bootstrap.min.js"></script>




    


    


</head>

<body id="page-top" class="index">
<div class="container">
<div id="donate-amt">
<div class="col-md-6">
	<ul class="amounts">
		<li>
			<div id="100" class="col-md-6 price-box">
				<h4 class="price-caption">Medical Progress Exam</h4>
				<div id="100" class="price">$100</div>
			</div>
			<div class="col-md-6">
				<div id="100" class="price-explain">A donation of $100.00 can provide a medical progress examination for a working dog.</div>
			</div>
		</li>
		<li>
			<div id="150" class="col-md-6 price-box">
				<h4 class="price-caption">Blood Work</h4>
				<div id="150" class="price">$150</div>
			</div>
			<div class="col-md-6">
				<div id="150" class="price-explain">A donation of $150.00 provides the funding needed for blood work prior to surgery, or a full rehabilitation session with a veterinary therapist.</div>
			</div>
		</li>
		<li>
			<div  id="200" class="col-md-6 price-box">
				<h4 class="price-caption">Evaluation</h4>
				<div id="200" class="price">$200</div>
			</div>
			<div class="col-md-6">
				<div id="200" class="price-explain">A donation of $200.00 can cover the cost for a shelter animal to be evaluated by a board-certified veterinary specialist.</div>
			</div>
		</li>	
		<li>
			<div  id="500" class="col-md-6 price-box">
				<h4 class="price-caption">Advanced Diagnostics</h4>
				<div id="500" class="price">$500</div>
			</div>
			<div class="col-md-6">
				<div id="500" class="price-explain">A donation of $500.00 can provide advanced diagnostics to an animal in need.</div>
			</div>
		</li>
		<li>
			<div  id="2000" class="col-md-6 price-box">
				<h4 class="price-caption">24 Hour Nursing</h4>
				<div id="2000" class="price">$2000</div>
			</div>
			<div class="col-md-6">
				<div id="2000" class="price-explain">A donation of $2000.00 can provide quality 24-hour nursing care to an animal in need of hospitalization.</div>
			</div>
		</li>
		<li>
			<div  id="5000" class="col-md-6 price-box">
				<h4 class="price-caption">24 Hour Nursing</h4>
				<div id="5000" class="price">$5000</div>
			</div>
			<div class="col-md-6">
				<div id="5000" class="price-explain">A typical surgical cost for an orthopedic emergency, such as a fracture, can cost up to $5,000, not including critical care or emergency hospitalization.</div>
			</div>
		</li>			
	</ul>
	</div>
	<div class="col-md-3">
	<img id="100" class="img-repsonsive donate-icon" src="img/donateicons/100.png">
	<img id="150" class="img-repsonsive donate-icon" src="img/donateicons/150.png">
	<img id="200" class="img-repsonsive donate-icon" src="img/donateicons/200.png">
	<img id="500" class="img-repsonsive donate-icon" src="img/donateicons/500.png">
	<img id="2000" class="img-repsonsive donate-icon" src="img/donateicons/2000.png">
	<img id="5000" class="img-repsonsive donate-icon" src="img/donateicons/5000.png">
	<!-- <img id="100" class="img-repsonsive donate-icon" src="img/donateicons/100.png"> -->
	</div>
	<div class="col-md-3">
	<form id="give-money-donate-form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<!-- Identify your business so that you can collect the payments. -->
							<input type="hidden" name="business" value="info@saturdayplace.org">
							<!-- Specify a Donate button. -->
							<input type="hidden" name="cmd" value="_donations">
							<!-- Specify details about the contribution -->
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="/thank-you">
							<input type="hidden" name="cancel_return" value="#/get-involved">
							<label id="donate-amount-label" for="donate-amount">I Will Give</label>
							<input id="donate-amount" name="amount" type="number" value="25">
							<input id="donate-now" type="submit" value="Donate Now">
						</form>
						</div>
</div>
			</div>
			<script type="text/javascript" charset="utf-8" async="" src="js/donate.js"></script>
			</body>

</html>
