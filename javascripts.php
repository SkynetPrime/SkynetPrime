<!--Main js file Start-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/dropdowns-enhancement.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/canvas.js"></script>
<script>
	window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop >50 || document.documentElement.scrollTop > 50) {
		document.getElementById("navbar-example").classList.remove("navbar-custom");
	  document.getElementById("navbar-example").classList.add("navbar-custom2");
	}
	else{
		document.getElementById("navbar-example").classList.remove("navbar-custom2");
	  document.getElementById("navbar-example").classList.add("navbar-custom");
	//   alert(document.getElementById("navbar-example").className);
	}
}
	</script>

<!--Main js file End-->