<!-- <?php

									if(isset($_POST["submit"]))
									 {
									$name = $_POST['name'];

										$email = $_POST['email'];
										$phone = $_POST['phone'];
                                	$zip = $_POST['zip'];
                                	$zip1 = $_POST['zip1'];
										$message = $_POST['message'];


									$myemail = '';

										if(empty($name))
									{
											echo "<script>alert('Username is required.');</script>";
									}
										elseif (empty($email))
										{
										echo "<script>alert('Email is required.');</script>";
										}
										elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",$email))
										{
										echo "<script>alert('Invalid email address.');</script>";
									}


										else
										{
											$to = $myemail;
											$email_subject = "$subject";
											$email_body = "You have received a new message. " . " Here are the details:\n Name: $name  \n Email: $email \n Phone: $phone \n From-zip code: $zip \n To-zip code: $zip1 \n message: $message \n ";

											$headers = "From: $email\n";
											$headers .= "Reply-To: $email";

 											mail($to,$email_subject,$email_body,$headers);

 											echo "<script>alert('Your message has been successfully sent. We will contact you very soon!.');</script>";
										}
									 }
								?> -->
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Head Start -->

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="It Services, Machine Learning, Artificial Intelligence, Web Design, Web Developement, GraphicDesign, PestControl, Vehicle Insurance" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>SkynetPrime</title>
<?php include("css.php"); ?>
</head>
<!-- Head End -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

	
<?php include("header.php"); ?>

<!--Hero Header-->
<header>
	<div id="hero-header" class="owl-carousel">
		<div class="mp-item slider-01" style="background-image: url(images/slider2.gif);">
			<div class="container">
				<div class="mp-hero-content wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
					<h1 class="title">We Care About Your Business</h1>
					<p class="slogan">Making Best Quality Work</p>
				</div>
			</div>
		</div>
		<div class="mp-item slider-01" style="background-image: url(images/slider2.gif);">
			<div class="container">
				<div class="mp-hero-content">
					<h1 class="title">We ready to your service</h1>
					<p class="slogan">We Provides IT and Other Services</p>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- /Hero Header-->
<!--Welcome to Movers-->
<section class="mp-section-with-col mp-movers">
	<div class="container">
		<div class="mp-section-heading text-center">
			<h2 class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s">Welcome to SkynetPrime</h2>
			<p class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".1s">We are SkynetPrime which is multi service platform, we provides best IT services and other commonon services like automotive and pest control services. Skynetprime also provide an online platform to list the different business at free of cost.</p>
		</div>
	</div>
</section>
<!-- /Welcome to Movers-->
<!--Get a Quick Quote-->
<!-- <section class="mp-get-quick-quote mp-section-with-col">
	<div class="container">
		<div class="mp-section-heading text-center header-light wow fadeInDown" data-wow-duration="2s" data-wow-delay=".1s">
			<h2>What we have done..</h2>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form action="" class="mp-quick-form" method="post">
					<div class="row mp-col-responsive">
						<fieldset class="form-group col-sm-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
							<input type="text" class="form-control require" placeholder="Full Name" required name="name">
						</fieldset>
						<fieldset class="form-group col-sm-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
							<input type="text" class="form-control require" placeholder="Contact Number" required name="phone">
						</fieldset>
						<fieldset class="form-group col-sm-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".4s">
							<input type="text" class="form-control require" placeholder="From - Zip Code" required name="zip">
						</fieldset>
						<fieldset class="form-group col-sm-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
							<input type="text" class="form-control require" placeholder="To - Zip Code" required name="zip1">
						</fieldset>
						<fieldset class="form-group col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
							<textarea rows="3" class="form-control require" placeholder="Your Message" required name="message"></textarea>
						</fieldset>
						<fieldset class="form-group col-sm-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">
							<input type="email" class="form-control" placeholder="Email Address" required name="email">
						</fieldset>
						<div class="col-sm-6">
							<button class="btn btn-lg btn-white btn-block wow fadeIn center" type="submit" name="submit" data-wow-duration="1s" data-wow-delay=".6s">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section> -->
<!-- /Get a Quick Quote-->
<!--Reasons of our best services-->
<section class="mp-best-service mp-get-quick-quote mp-section-with-col">
	<div class="container">
		<div class="mp-section-heading text-center">
			<h2 class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s">Reasons of our best services</h2>
			<!-- <p class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".1s">SkynetPrime, We have a customer oriented approach towards the varied needs of our clients. Our company situated in , is built on the strong principles of integrity and reliability.</p> -->
		</div>
		<div class="row">
			<div class="col-lg-4 mp-mover-img wow pulse" data-wow-duration="1.5s" data-wow-delay="2s"> <img src="https://c.tenor.com/ucfXyWYYpLMAAAAi/o2-bubl.gif" alt=""> </div>
			<div class="col-lg-8">
				<div class="services">
					<div class="row mp-col-responsive">
						<div class="col-sm-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".2s">
							<div class="mp-box">
								<div class="mp-item-img"> <img src="images/icon-lexible-affordable.png" alt=""> </div>
								<h3 style="padding-top:35px;">Flexible & Affordable</h3>
							</div>
						</div>
						<div class="col-sm-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
							<div class="mp-box">
								<div class="mp-item-img"> <img src="images/icon-easy-tracking.png" alt=""> </div>
								<h3 style="padding-top:35px;">Easy Working & Processing Steps</h3>
							</div>
						</div>
						<div class="col-sm-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".4s">
							<div class="mp-box">
								<div class="mp-item-img"> <img src="images/icon-delivery-on-time.png" alt=""> </div>
							<h3 style="padding-top:35px;">Best Quality Service</h3>
							</div>
						</div>
						<div class="col-sm-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".5s">
							<div class="mp-box">
								<div class="mp-item-img"> <img src="images/icon-save-and-secure-move.png" alt=""> </div>
								<h3 style="padding-top:35px;">Secure Deals</h3>
							</div>
						</div>
						<div class="col-sm-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".6s">
							<div class="mp-box">
								<div class="mp-item-img"> <img src="images/icon-support.png" alt=""> </div>
								<h3 style="padding-top:35px;">Friendly Support</h3>
							</div>
						</div>
						<div class="col-sm-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".7s">
							<div class="mp-box">
								<div class="mp-item-img"> <img src="images/icon-sms-emails-alert.png" alt=""> </div>
								<h3 style="padding-top:35px;">Direct Customer to Vendor Contact</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Latest Posts From our Blog-->
<!--Footer-->
<?php include("footer.php"); ?>
<!-- /Footer-->
<!--scroll to top-->
<a href="#" class="mp-scrollToTop"><i aria-hidden="true" class="fa fa-arrow-up"></i></a>
<!-- /scroll to top-->
<?php include("javascripts.php"); ?>
</body>
</html>
