<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Welcome to Relish Group</title>
  <meta name="description" content="Purveyors of international hospitality casual dining concepts and brainchild of unique local culinary destinations.">
  <meta property="og:image" content="http://www.relish-group.com/images/relish-carousel-oo.jpg" />


  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900' rel='stylesheet' type='text/css'>

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

  	<nav class="nav-collapse" style="z-index:1001;">
  		<div id="menu-center" class="limit">
  			<a href="index.html"><img id="relish-logo" src="images/relish-logo.png" /></a>
  			<a href="#" id="pull" class="fa fa-bars fa-2x"></a>
			<ul class="navi__list">
			    <li class="navi__listItem"><a href="#about">About</a></li>
			    <li class="navi__listItem"><a class="brandsOn">Our Brands</a></li>
				<li class="navi__listItem"><a id="careersPull">Work With Us</a></li>
			    <li class="navi__listItem"><a id="contactPull">Contact Us</a></li>
			</ul>
		</div>
		<div class="popover" id="brand-bar" style="margin-top: 17px;">
			<div class="limit">
				<div class="container brand__row">
					<div class="two columns brand__item">
						<a href="/kumori"><img class="brand__logo" src="images/nav/brands-kumori-logo.png" width="100%"/></a>
					</div>
					<div class="two columns brand__item">
						<a href="/osakaohsho"><img class="brand__logo" src="osakaohsho/images/osaka-logo.png" width="100%"/></a>
					</div>
					<div class="two columns brand__item">
						<a href="/weenamkee"><img class="brand__logo brands-wnk-logo"src="images/nav/brands-wnk-logo.png"/></a>
					</div>
					<div class="two columns brand__item">
						<a href="/birdhouse"><img class="brand__logo"src="birdhouse/images/birdhouse-logo.png"/></a>
					</div>
					<div class="two columns brand__item">
						<a href="/rockseoul"><img class="brand__logo"src="rockseoul/images/rockseoul-logo-square.png"/></a>
					</div>
					<div class="two columns brand__item">
						<a href="/seoulstation"><img class="brand__logo"src="seoulstation/images/seoulstation-logo.png"/></a>
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
		<div class="popover" id="careers" style="margin-top: 32px;height:auto;padding-top: 25px;">
			<div class="limit">
				<h1 class="popover-title">WORK WITH US</h1>
				<div class="row">
					<div class="eight columns">
						<p class="popover-text">We're constantly on the lookout for individuals who are hardworking, talented and passionate about food, so join our rapidly growing team now! A rewarding career with opportunities of growth and advancement awaits you.</p>
					</div>
					<div class="four columns">
						<button>Click here to apply!</button>
					</div>
				</div>
			</div>
		</div>
		<div class="popover" id="contact" style="margin-top:32px;height:auto;padding-bottom:0px;padding-top: 25px;">
			<form method="post" action="" id="contactForm" name="contactForm">
				<div class="limit">
					<div class="row">
						<div class="ten columns">
							<h1 class="popover-title">CONTACT US</h1>
						</div>
						<div class="two columns">
							<input type="submit" value="Submit" id="contactBtn">
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
<div style="display:block; height:100vh; position:relative; z-index: -2000;" class="carousel__container">
	<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" style="height: 100vh;">
	  <!-- Indicators -->
	  <!-- <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol> -->

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active" style="background-image:url('images/relish-carousel-kum.jpg'); background-size:cover; background-position: center center; height:100vh;">
	      <div class="carousel-caption">
	      </div>
	    </div>
	    <div class="item" style="background-image:url('images/relish-carousel-wnk.jpg'); background-size:cover; background-position: center center; height:100vh;">
	      <div class="carousel-caption">
	      </div>
	    </div>
	    <div class="item" style="background-image:url('images/relish-carousel-oo.jpg');background-size:cover; background-position: center center; height:100vh;">
	      <div class="carousel-caption">
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

<div id="about">
	<div class="row limit">
		<div class="four columns">
			<h5>About The Relish Group</h5>
			<p class="popover-text">Purveyors of international hospitality casual dining concepts and brainchild of unique local culinary destinations.</p>
		</div>
		<div class="four columns">
			<h5>Mission</h5>
			<p class="popover-text">We commit to bring the flavors of the world to every FIlipino, and for our brands to become the top of mind choice in markets we operate.</p>
		</div>
		<div class="four columns">
			<h5>Vision</h5>
			<p class="popover-text">We value total customer satisfaction, from the great food that we serve up to the excellent customer service we provide.</p>
		</div>
	</div>
</div>

<footer>
	<div class="row limit">
		<div class="three columns">
			<img class="footer-details" src="images/relish-footer-logo.jpg" />
		</div>
		<div class="nine columns footer-details">
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
<script src="js/relish.js" charset="utf-8"></script>
</body>
</html>
