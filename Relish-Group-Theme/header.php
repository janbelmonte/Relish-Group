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
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/normalize.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/skeleton.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/relish.css">

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="<?php bloginfo('template_directory');?>/js/jquery-2.1.4.min.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/bootstrap.js"></script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/images/favicon.png">
  <?php wp_head(); ?>

</head>
<body>

  	<nav class="nav-collapse" style="z-index:1001;">
  		<div id="menu-center" class="limit">
  			<a href="index.html"><img id="relish-logo" src="<?php bloginfo('template_directory');?>/images/relish-logo.png" /></a>
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
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>kumori"><img class="brand__logo" src="<?php bloginfo('template_directory');?>/images/brands-kumori-logo.png" width="100%"/></a>
					</div>
					<div class="two columns brand__item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>osakaohsho"><img class="brand__logo" src="<?php bloginfo('template_directory');?>/images/osaka-logo.png" width="100%"/></a>
					</div>
					<div class="two columns brand__item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>weenamkee"><img class="brand__logo brands-wnk-logo"src="<?php bloginfo('template_directory');?>/images/brands-wnk-logo.png"/></a>
					</div>
					<div class="two columns brand__item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>birdhouse"><img class="brand__logo"src="birdhouse/images/birdhouse-logo.png"/></a>
					</div>
					<div class="two columns brand__item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>rockseoul"><img class="brand__logo"src="rockseoul/images/rockseoul-logo-square.png"/></a>
					</div>
					<div class="two columns brand__item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>seoulstation"><img class="brand__logo"src="seoulstation/images/seoulstation-logo.png"/></a>
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
