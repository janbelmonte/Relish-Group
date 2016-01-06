<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Kumori - A Relish Group Brand</title>
  <meta name="description" content="It's Japan Baked Daily">
  <meta property="og:image" content="http://www.relish-group.com/img/og-kumori.jpg" />

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/normalize.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/skeleton.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/relish.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/kumori.css">
  <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->


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

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

  	<nav class="nav-collapse">
  		<div id="menu-center" class="limit">
  			<a href="index.html"><img id="kumori-logo" src="<?php bloginfo('template_directory');?>/images/kumori/kumori-logo.jpg" /></a>
  			<a href="../index.php"><img id="relish-logo" src="<?php bloginfo('template_directory');?>/images/relish-logo.png" /></a>
  			<ul class="navi__list">
			 	<li class="navi__listItem"><a class="active" href="#kumori-desc">ABOUT</a></li>
			    <li class="navi__listItem"><a href="#breads">BREADS AND PASTRIES</a></li>
			    <li class="navi__listItem"><a href="#branches">STORES</a></li>
			</ul>
		</div>
	</nav>
