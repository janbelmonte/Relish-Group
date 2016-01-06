<?php get_header(); ?>
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
      <?php $relishCarouselQuery = carousel_query('relish'); carousel_loop('relish',$relishCarouselQuery); ?>
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
<?php get_footer(); ?>
