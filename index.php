<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Welcome to Relish Group</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/relish.css">

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.js"></script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  	
  	<nav class="nav-collapse">
  		<div class="limit">
  			<img id="relish-logo" src="images/relish-logo.png" />
  			<a href="#" id="pull" class="fa fa-bars fa-2x"></a>
			<ul class="navi__list">
			    <li class="navi__listItem"><a href="#">About</a></li>
			    <li class="navi__listItem"><a class="brandsOn">Our Brands</a></li>
				<li class="navi__listItem"><a id="careersPull">Work With Us</a></li>
			    <li class="navi__listItem"><a id="contactPull">Contact Us</a></li>
			</ul>
		</div>
		<div class="popover" id="brand-bar" style="margin-top: 17px;">
			<div class="limit">
				<div class="container brand__row">
					<div class="four columns brand__item">
						<a href="#"><img class="brand__logo" src="images/nav/brands-kumori-logo.png" width="100%"/></a>
					</div>
					<div class="four columns brand__item">
						<a href="#"><img class="brand__logo" src="images/osakaohsho/osaka-logo.png" width="100%"/></a>
					</div>
					<div class="four columns brand__item">
						<a href="/weenamkee.html"><img class="brand__logo brands-wnk-logo"src="images/nav/brands-wnk-logo.png"/></a>
					</div>
					<!-- <div class="two columns brand__item">
						<a href="#"><img class="brand__logo" src="images/relish-logo.png" width="100%"/></a>
					</div>
					<div class="two columns brand__item">
						<a href="#"><img class="brand__logo" src="images/relish-logo.png" width="100%"/></a>
					</div>
					<div class="two columns brand__item">
						<a href="#"><img class="brand__logo" src="images/relish-logo.png" width="100%"/></a>
					</div> -->
				</div>
			</div>
		</div>
		<div class="popover" id="careers" style="margin-top: 32px;height:auto;">
			<div class="limit">
				<h1 class="popover-title">WORK WITH US</h1>
				<div class="row">
					<div class="eight columns">
						<p class="popover-text">We're constantly on the lookout for individuals who are hardworking, talented and passionate about food, so join our rapidly growing team now! A rewarding career with opportunities of growth and advancement awaits you.</p>
					</div>
					<div class="four columns">
						<button>Click here to become part of Relish Group!</button>
					</div>
				</div>
			</div>
		</div>
		<div class="popover" id="contact" style="margin-top:32px;height:auto;padding-bottom:15px;">
			<form method="post" action="<?php echo htmlspecialchars('mailhandler.php'); ?>">
				<div class="limit">
					<div class="row">
						<div class="ten columns">
							<h1 class="popover-title">CONTACT US</h1>
						</div>
						<div class="two columns">
							<input type="submit" value="Send">
						</div>
					</div>
					<div class="row">
						<div class="five columns">
							<input type="text" id="fullname" name="fullname" placeholder="Full Name" style="width: 100%;"><br>
							<input type="email" id="email" name="email" placeholder="Email Address" style="width: 100%;">
						</div>
						<div class="seven columns">
							<textarea id="message" name="message" placeholder="Your Message" style="width: 100%; height: 100%;"></textarea>
						</div>
					</div>
				</div>
			</form>
		</div>
	</nav>

<!-- <div id="carousel" style="top: 300px;">
	<ul id="lightSlider">
		<li style="background-image: url('https://source.unsplash.com/category/people/1366x768'); background-size:cover; background-position: center center; height:inherit;"></li>
		<li><p style="background-image:url('images/img1.jpg)">2</p></li>
		<li><p style="background-image:url('images/img2.jpg)">3</p></li>
		<li><p style="background-image:url('images/relish-carousel.jpg)">1</p></li>
		<li><p style="background-image:url('images/img1.jpg)">2</p></li>
		<li><p style="background-image:url('images/img2.jpg)">3</p></li>
	</ul>
</div> -->
<div style="display:block; height:90vh; position:relative; z-index: -2000;" class="carousel__container">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height: 90vh;">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active" style="background-image:url('images/relish-carousel-kum.jpg'); background-size:cover; background-position: center center; height:90vh;">
	      <div class="carousel-caption">
	        ...
	      </div>
	    </div>
	    <div class="item" style="background-image:url('images/relish-carousel-wnk.jpg'); background-size:cover; background-position: center center; height:100vh;">
	      <div class="carousel-caption">
	        ...
	      </div>
	    </div>
	    <div class="item" style="background-image:url('images/relish-carousel-oo.jpg');background-size:cover; background-position: center center; height:100vh;">
	      <div class="carousel-caption">
	        ...
	      </div>
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>

<footer>
	<div class="row limit">
		<div class="three columns">
			<img class="footer-details" src="images/relish-footer-logo.jpg" />
		</div>
		<div id="footer-menu" class="two columns footer-details">
			<ul>
				<li><a href="#">Home</a></li>
		    	<li><a href="#">About</a></li>
		    	<li><a class="brandsOn">Our Brands</a></li>
		    	<li><a href="#">Careers</a></li>
		    </ul>
		</div>
		<div class="seven columns footer-details">
			<div class="row">
				<p class="brand-promise">The purveyors of international hospitality casual dining concepts and brainchild of unique local culinary destinations.</p>
			</div>
			<div class="row">
				<div class="five columns">
					<p class="caption">Office Address</p>
					<p class="detail">2486 Taft Avenue, Pasay City 1300</p>
				</div>
				<div class="three columns">
					<p class="caption">Contact Number</p>
					<p class="detail">(+63) 02 552 7536</p>
				</div>
				<div class="four columns">
					<p class="caption">Email Address</p>
					<p class="detail">marketing@relish-group.com</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="sub-footer">
	<div class="limit">
		<p class="detail">&copy; 2015 Relish Group</p>
	</div>
</div>

<script>

	// TOGGLE POPOVERS
	$(".brandsOn").click(function () {
	    $("#brand-bar").toggle();
	    	$("#careers").css("display", "none");
	    	$("#contact").css("display", "none");
	});
	$("#careersPull").click(function () {
		$("#careers").toggle();
	    	$("#brand-bar").css("display", "none");
	    	$("#contact").css("display", "none");
	});
	$("#contactPull").click(function () {
		$("#contact").toggle();
	    	$("#careers").css("display", "none");
	    	$("#brand-bar").css("display", "none");
	});
	$(function() {
	    var pull        = $('#pull');
	        menu        = $('nav ul');
	        menuHeight  = menu.height();
	 
	    $(pull).on('click', function(e) {
	        e.preventDefault();
	        menu.slideToggle();
	        var brandBar = $("#brand-bar");
	        if(brandBar.css("display") == "block") {
	        	brandBar.css("display", "none");
	        }
	    });
	});

	// NEXT
	window.onresize = function(){
		var nav = document.querySelector("nav ul");
		var mql = window.matchMedia("screen and (min-width: 500px)");

		if(mql.matches){
			nav.removeAttribute("style");
		}

		if (helper.checkForPull()){
			// console.log(document.getElementsByClassName("close"));
			if( document.getElementsByClassName("close").length == 0 ){
				console.log("hello")
				var closes = [];
				for(var i = 0; i < 3; i++){
					var close = document.createElement("a");
					close.setAttribute("class", "fa fa-close fa-2x close");
					closes.push(close);
				}
				var parent = document.getElementById("brand-bar");
				// console.log(parent);
				parent.appendChild(closes[0]);
				var careers = document.getElementById("careers");
				careers.appendChild(closes[1]);
				var contact = document.getElementById("contact");
				contact.appendChild(closes[2]);
			}
		} else {
			if( document.getElementsByClassName("close").length != 0 ){
				var close = document.getElementsByClassName("close");
				for( var c = 0; c < close.length; c++ ){
					var thisParent = close[c].parentNode;
					thisParent.removeChild(close[c]);
				}
			}
		}
		var close = document.getElementsByClassName("close");
		for( var c = 0; c < close.length; c++ ){
			var self = close[c];

			self.addEventListener("click", function(){
				event.preventDefault();
				var parent = this.parentNode;
				console.log(getComputedStyle(parent, null).display);
				if(getComputedStyle(parent, null).display == "block"){
					parent.style.display = "none";
				}
			});
		}
	}

	window.onload = function(){
		if (helper.checkForPull()){
			// console.log(document.getElementsByClassName("close"));
			if( document.getElementsByClassName("close").length == 0 ){
				console.log("hello")
				var closes = [];
				for(var i = 0; i < 3; i++){
					var close = document.createElement("a");
					close.setAttribute("class", "fa fa-close fa-2x close");
					closes.push(close);
				}
				var parent = document.getElementById("brand-bar");
				// console.log(parent);
				parent.appendChild(closes[0]);
				var careers = document.getElementById("careers");
				careers.appendChild(closes[1]);
				var contact = document.getElementById("contact");
				contact.appendChild(closes[2]);
			}
		} else {
			if( document.getElementsByClassName("close").length != 0 ){
				var close = document.getElementsByClassName("close");
				for( var c = 0; c < close.length; c++ ){
					var thisParent = close[c].parentNode;
					thisParent.removeChild(close[c]);
				}
			}
		}
		var close = document.getElementsByClassName("close");
		for( var c = 0; c < close.length; c++ ){
			var self = close[c];

			self.addEventListener("click", function(){
				event.preventDefault();
				var parent = this.parentNode;
				console.log(getComputedStyle(parent, null).display);
				if(getComputedStyle(parent, null).display == "block"){
					parent.style.display = "none";
				}
			});
		}
		
		
	}
	var helper = {
		checkForPull : function(){
			var pull = document.getElementById('pull');
			var pullDisplay = getComputedStyle(pull,null).display;
			var bool;
			if( pullDisplay == "block" ){
				return true;
			} else {
				return false;
			}
		}
	}
</script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>