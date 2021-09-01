<!-- <?php

									if(isset($_POST["submit"]))
									 {
									$name = $_POST['name'];

										$email = $_POST['email'];
										$phone = $_POST['phone'];
                                	$subject = $_POST['subject'];
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

										elseif (empty($subject))
 										{
											echo "<script>alert('Subject is required.');</script>";
										}
										else
										{
											$to = $myemail;
											$email_subject = "$subject";
											$email_body = "You have received a new message. " . " Here are the details:\n Name: $name  \n Email: $email \n Subject: $subject \n message: $message \n ";

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
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>SkynetPrime Contact</title>
<!-- favicon links -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<!-- Main css -->
<?php include("css.php"); ?>
</head>
<!-- Head End -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!--Navigation-->
<?php include("header.php"); ?>
<!-- /Navigation -->
<!--Hero Header-->
<header class="mp-inner-hero-header" style="background-image: url(images/giphy.gif);">
	<div class="container">
		<div class="mp-section-heading text-center header-light wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
			<h1 class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">Contact</h1>
			<p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">Ask us your queries</p>
		</div>
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Contact</li>
		</ol>
	</div>
</header>
<!-- /Hero Header-->
<!--Page Content-->
<section class="mp-inner-page-content mp-contactus">
	<div class="container">
		<div class="mp-google-map" id="mp-map"></div>
		<div class="row text-center">
			<div class="col-md-12">
				<div class="mp-contact-details">
					<div class="mp-section-heading wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s" >
						<h2 class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s">Admin Contact</h2> 
						<p class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".1s">Contact to admin if you have any questions or inquiries</p>
					</div>
					<!-- <ul class="mp-list-none">
					<li class="mp-icon-left"><a href="tel:+918447630009"><i aria-hidden="true" class="fa fa-phone fa-3x"></i> </a></li> 
						<li class="mp-icon-left"><a href="https://api.whatsapp.com/send?phone=+918898137210&amp;text=Hi!%20I%20want%20to%20know%20more%20about%20SkynetPrime%20Services,%20kindly%20share%20the%20details.%20Thanks" target="_blank"><i aria-hidden="true" class="fa fa-whatsapp fa-3x"></i></a></li>
						<li class="mp-icon-left"><a href="mailto:skynetprimeindia@gmail.com"><i aria-hidden="true" class="fa fa-envelope-o fa-3x"></i></a> </li>
						<li class="mp-icon-left"><i aria-hidden="true" class="icon fa fa-map-marker"></i> </li>Shop No 147, Gali No 4, <br> Near Shiv Mandir, Krishna Chowk Gurugram
					</ul> -->

					<div class="mp-icon-left wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
						<a href="tel:+918447630009" target="_blank"><i aria-hidden="true" class="mp-icon-left fa fa-phone fa-4x" ></i> </a> 
							<a href="https://api.whatsapp.com/send?phone=+918898137210&amp;text=Hi!%20I%20want%20to%20know%20more%20about%20SkynetPrime%20Services,%20kindly%20share%20the%20details.%20Thanks" target="_blank"><i aria-hidden="true" class="mp-icon-left fa fa-whatsapp fa-4x"></i></a>
							<a href="mailto:skynetprimeindia@gmail.com" target="_blank"><i aria-hidden="true" class="mp-icon-left fa fa-envelope-o fa-4x"></i></a>
							<a href="https://www.instagram.com/skynetprime/" target="_blank"><i aria-hidden="true" class="mp-icon-left fa fa-instagram fa-4x"></i></a>
							<a href="https://www.facebook.com/SkynetPrimeIndia" target="_blank"><i aria-hidden="true" class="mp-icon-left fa fa-facebook fa-4x"></i></a> 
							<a href="https://www.youtube.com/channel/UCwx7LqQTNFGrHv0_MZeAogw" target="_blank"><i aria-hidden="true" class="mp-icon-left fa fa-youtube-play fa-4x"></i></a> 
					</div>
				</div>
			</div>
			
			<!-- <div class="col-md-8">
				<form method="post" action="">
					<div class="row mp-col-responsive">
						<fieldset class="form-group col-md-6">
							<input type="text" class="form-control require" placeholder="Name" required name="name"> </fieldset>
						<fieldset class="form-group col-md-6">
							<input type="text" class="form-control require" placeholder="Phone Number" required name="phone"> </fieldset>
						<fieldset class="form-group col-md-6">
							<input type="email" class="form-control require" placeholder="Email" required name="email" data-valid="email" data-error="Email should be valid."> </fieldset>
						<fieldset class="form-group col-md-6">
							<input type="text" class="form-control require" placeholder="Subject" required name="subject"> </fieldset>
						<fieldset class="form-group col-md-12">
							<textarea rows="3" class="form-control require" placeholder="Your Message" required name="message"></textarea>
						</fieldset>
					</div>
					<div class="response"></div>
					<button type="submit" name="submit" value="submit" class="btn btn-yellow btn-lg submitForm" form-type="contact">Submit</button>
				</form>
			</div>
		</div>
	</div> -->
</section>
<!-- /Page Content-->
<!--Footer-->
<?php include("footer.php"); ?>
<!-- /Footer-->
<!--scroll to top-->
<a href="#" class="mp-scrollToTop"><i aria-hidden="true" class="fa fa-arrow-up"></i></a>
<!-- /scroll to top-->
<!--Main js file Start-->
<?php include("javascripts.php"); ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA46Q_0Kfate6HF_0GdZyLSQwJ8Y_4Wck4&amp;sensor=true"></script>
<script type="text/javascript">
	// When the window has finished loading create our google map below
	google.maps.event.addDomListener(window, 'load', init);

	function init() {
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			scrollwheel: false, // Making true zooming will work
			zoom: 15, // The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(18.9894, 73.1175),
			// How you would like to style the map.
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{
				"featureType": "landscape"
				, "stylers": [{
					"hue": "#FFBB00"
		}, {
					"saturation": 43.400000000000006
		}, {
					"lightness": 37.599999999999994
		}, {
					"gamma": 1
		}]
	}, {
				"featureType": "road.highway"
				, "stylers": [{
					"hue": "#FFC200"
		}, {
					"saturation": -61.8
		}, {
					"lightness": 45.599999999999994
		}, {
					"gamma": 1
		}]
	}, {
				"featureType": "road.arterial"
				, "stylers": [{
					"hue": "#FF0300"
		}, {
					"saturation": -100
		}, {
					"lightness": 51.19999999999999
		}, {
					"gamma": 1
		}]
	}, {
				"featureType": "road.local"
				, "stylers": [{
					"hue": "#FF0300"
		}, {
					"saturation": -100
		}, {
					"lightness": 52
		}, {
					"gamma": 1
		}]
	}, {
				"featureType": "water"
				, "stylers": [{
					"hue": "#0078FF"
		}, {
					"saturation": -13.200000000000003
		}, {
					"lightness": 2.4000000000000057
		}, {
					"gamma": 1
		}]
	}, {
				"featureType": "poi"
				, "stylers": [{
					"hue": "#00FF6A"
		}, {
					"saturation": -1.0989010989011234
		}, {
					"lightness": 11.200000000000017
		}, {
					"gamma": 1
		}]
	}]
		};
		// Get the HTML DOM element that will contain your map
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('mp-map');
		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);
		// Let's also add a marker while we're at it
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(18.9894, 73.1175)
			, map: map
			, title: 'Panvel, Raigad, Maharastra, India'
		});
	}
</script>
<!--Main js file End-->
</body>
</html>
