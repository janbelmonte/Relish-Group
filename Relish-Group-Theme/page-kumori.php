<?php get_header( 'kumori' ); ?>

	<div class="carousel__container">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top: 30px;">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
			<?php $carouselQuery = carousel_query('kumori'); carousel_loop('kumori', $carouselQuery); ?>
	    <!-- <div class="item active" style="background-image:url('images/kumori-carousel-1.jpg'); background-size:cover; background-position: center center; height:100vh;">
	      <div class="carousel-caption">
	        ...
	      </div>
	    </div>
	    <div class="item" style="background-image:url('images/kumori-carousel-2.jpg'); background-size:cover; background-position: center center; height:100vh;">
	      <div class="carousel-caption">
	        ...
	      </div>
	    </div>
	    <div class="item" style="background-image:url('images/kumori-carousel-3.jpg');background-size:cover; background-position: center center; height:100vh;">
	      <div class="carousel-caption">
	        ...
	      </div>
	    </div>
	  </div> -->

	  <!-- Controls -->
	  <a class="left carousel-control" data-target="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" data-target="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>

	<div id="kumori-desc">

		<div class="row limit">
			<div class="eight columns">
				<p class="menu-item-name">KUMORI means cloudy in Japanese. But instead of grey and gloom, it represents all the sunshine and positivity that comes after the rain. Likewise, what we create at KUMORI brings calm and comfort through an authentic variety of Japanese breads and pastries. A careful approach to baking rains freshness on every creation, bringing ancient recipes to the contemporary palate. It's the kind of dedication that delights the tastebuds and fills the soul.</p>
				<p class="menu-item-name">First it comes from the heart. Then it goes onto your tray.<br/>Only at KUMORI.</p>
			</div>
			<div class="four columns">
				<h1 class="its-japan">It's Japan<br/>Baked Daily</h1>
			</div>
		</div>

	</div>

	<div class="title-bar" id="breads" style="height:50px;"><p class="title-bar">BREADS AND PASTRIES</div>

	<div class="kumori-menu">
		<?php kumori_loop(); ?>
	</div>

	<div class="title-bar" id="branches" style="height:80px"><p class="title-bar" style="margin-top: 15px;">STORES</p></div>
	<div class="kumori-branches">
		<div class="row limit">
			<?php $kumoriBranchQuery = branch_query('kumori'); branch_loop('kumori', $kumoriBranchQuery); ?>
		</div>
		<div class="kumori-map">
			<iframe src="https://mapsengine.google.com/map/u/0/embed?mid=zayvT_mm2YxQ.kg-pV0Hiz3sU" width="100%" height="100%" style="border:none;"></iframe>
		</div>
	</div>

	<div class="title-bar" id="branches" style="height:70px"><p class="title-bar">LATEST UPDATES</p></div>
	<div id="social">
		<div class="row limit padding-20">
			<div class="six columns">
				<iframe src="http://widget.websta.me/in/kumoriph?r=1&w=3&h=2&b=0&p=5" allowtransparency="true" frameborder="0" scrolling="yes" style="border:none;overflow:hidden;width:100%; min-height: 300px; height: auto; " ></iframe>
			</div>
			<div class="six columns">
				<div class="fb-page"
					data-href="https://www.facebook.com/kumoriph"
					data-tabs="timeline"
					data-width="600"
					data-height="300"
					data-small-header="false"
					data-adapt-container-width="true"
					data-hide-cover="false"
					data-show-facepile="true">
					<div class="fb-xfbml-parse-ignore">
						<blockquote cite="https://www.facebook.com/kumoriph">
							<a href="https://www.facebook.com/kumoriph">Kumori Philippines</a>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>




<?php get_footer( 'kumori' ); ?>
