<?php get_header( 'weenamkee' ); ?>

	<div id="carousel">
		<div class="row limit">
			<div class="eight columns ten columns header">
				<h1>A continuing tradition<br>of serving the best<br>Hainanese Chicken Rice.</h1>
				<div class="eight columns no-margin">
					<p>Wee Nam Kee Hainanese Chicken Rice is Singapore’s #1 Chicken Rice concept. Starting as a humble dine and dash restaurant at the heart of Singapore’s Novena district in 1989, the concept established its first international location in the Philippines in 2010. Opening to much fanfare at the Ayala Triangle Gardens in Makati City, the concept has now grown to several locations domestically.</p>
					<div class="kill-logo"></div>
				</div>
			</div>
		</div>
		<div class="css-carousel">
			<?php $wnkCarousel = carousel_query('weenamkee'); carousel_loop('weenamkee', $wnkCarousel); ?>
		</div>
	</div>
	<div id="sticky-anchor"></div>
	<nav class="wnk-nav">
		<div class="limit">
			<img class="wnk-logo" src="<?php bloginfo('template_directory'); ?>/images/weenamkee/wnk-logo.png" />
			<ul class="navi__list">
			 	<li class="navi__listItem"><a class="active" href="#carousel">Home</a></li>
			    <li class="navi__listItem"><a href="#wnk-menu">Menu</a></li>
			    <li class="navi__listItem"><a href="#wnk-branches">Branches</a></li>
			</ul>
		</div>
	</nav>
	<div id="wnk-menu-ghost" class="ghost-120"></div>
	<div id="wnk-menu">
		<div class="row limit">
			<div class="menu-title">
				<h1>Menu</h1>
			</div>
			<div class="row">
				<div class="four columns">

						<table class="tg">
						  <tr>
						    <th class="tg-yw4l"><h5>Signature Dishes</h5></th>
						    <th class="tg-yw4l"></th>
						  </tr>
						  <?php $sigDishQuery = menu_item_query('weenamkee', 'signature dishes'); menu_item_loop($sigDishQuery); ?>
						  <tr>
						    <td class="tg-yw4l"></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <tr>
						    <td class="tg-yw4l"><h5>Tofu</h5></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <?php $tofuQuery = menu_item_query('weenamkee', 'tofu'); menu_item_loop('weenamkee', $tofuQuery); ?>
						  <tr>
						    <td class="tg-yw4l"></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <tr>
						    <td class="tg-yw4l"><h5>Appetizers</h5></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <?php $appetizersQuery = menu_item_query('weenamkee', 'appetizers'); menu_item_loop('weenamkee', $appetizersQuery); ?>
						  <tr>
						    <td class="tg-yw4l"><h5>Soups</h5></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <?php $soupsQuery = menu_item_query('weenamkee', 'soups'); menu_item_loop('weenamkee', $soupsQuery); ?>
						  <tr>
						    <td class="tg-yw4l"></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <tr>
						    <td class="tg-yw4l"><h5>Noodles in Soup</h5></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <?php $noodlesInSoupQuery = menu_item_query('weenamkee', 'noodles in soup'); menu_item_loop('weenamkee', $noodlesInSoupQuery); ?>
						  <tr>
						    <td class="tg-yw4l"></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <tr>
						    <td class="tg-yw4l"><h5>Rice</h5></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <?php $riceQuery = menu_item_query('weenamkee', 'rice'); menu_item_loop('weenamkee', $riceQuery); ?>
						</table>
				</div>
				<div class="four columns">
							<table class="tg">
							<tr>
							    <td class="tg-yw4l"><h5>Vegetables</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
								<?php $vegetableQuery = menu_item_query('weenamkee', 'vegetable'); menu_item_loop('weenamkee', $vegetableQuery); ?>
							  <tr>
							    <td class="tg-yw4l"></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"><h5>Poultry</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <?php $poultryQuery = menu_item_query('weenamkee', 'poultry'); menu_item_loop('weenamkee', $poultryQuery); ?>
							  <tr>
							    <td class="tg-yw4l"></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"><h5>Pork</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <?php $porkQuery = menu_item_query('weenamkee', 'pork'); menu_item_loop('weenamkee', $porkQuery); ?>
							  <tr>
							    <td class="tg-yw4l"></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"><h5>Seafood</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <?php $seafoodQuery = menu_item_query('weenamkee', 'seafood'); menu_item_loop('weenamkee', $seafoodQuery); ?>
						 </table>

				</div>
				<div class="four columns">
							<table class="tg">
							  <tr>
							    <td class="tg-yw4l"><h5>Beef</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
								<?php $beefQuery = menu_item_query('weenamkee', 'beef'); menu_item_loop('weenamkee', $beefQuery); ?>
							  <tr>
							    <td class="tg-yw4l"></td>
							    <td class="tg-yw4l"></td>
							  </tr>
								<tr>
							    <td class="tg-yw4l"><h5>Rice Toppings</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <?php $ricetoppingsQuery = menu_item_query('weenamkee', 'rice toppings'); menu_item_loop('weenamkee', $ricetoppingsQuery); ?>
							  <tr>
							    <td class="tg-yw4l"></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"><h5>Noodles</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <?php $noodlesQuery = menu_item_query('weenamkee', 'noodles'); menu_item_loop('weenamkee', $noodlesQuery); ?>
							  <tr>
							    <td class="tg-yw4l"></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"><h5>Desserts</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <?php $dessertsQuery = menu_item_query('weenamkee', 'desserts'); menu_item_loop('weenamkee', $dessertsQuery); ?>
							  <tr>
							    <td class="tg-yw4l"></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"><h5>Beverages</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <?php $beveragesQuery = menu_item_query('weenamkee', 'beverages'); menu_item_loop('weenamkee', $beveragseQuery); ?>
							</table>

				</div>
			</div>
		</div>
	</div>

	<div id="wnk-branches">
		<div class="row">
			<div class="four columns std-padding-left">
				<div class="menu-title">
					<h1 style="color: #40817e">Branches</h1>
				</div>
				<?php $wnkBranches = branch_query('weenamkee'); branch_loop('weenamkee', $wnkBranches); ?>
			</div>
			<div class="eight columns">
				<div class="wnk-map">
					<iframe src="https://mapsengine.google.com/map/embed?mid=zayvT_mm2YxQ.k75HdhciAqjM" width="100%" height="100%" style="border:none; "></iframe>
				</div>
			</div>
		</div>
	</div>

	<div id="social" style="background: #002524; padding-bottom: 20px;">
		<div class="row limit">
			<div class="twelve columns">
				<div class="menu-title">
					<h1 style="color: #40817e">Latest Updates</h1>
				</div>
			</div>
		</div>
		<div class="row limit">
			<div class="six columns">
				<iframe src="http://widget.websta.me/in/weenamkeeph?r=1&w=3&h=2&b=0&p=5" allowtransparency="true" frameborder="0" scrolling="yes" style="border:none;overflow:hidden;width:100%; min-height: 300px; height: auto; " ></iframe>
			</div>
			<div class="six columns">
				<div class="fb-page"
					data-href="https://www.facebook.com/weenamkeeph"
					data-tabs="timeline"
					data-width="600"
					data-height="300"
					data-small-header="false"
					data-adapt-container-width="true"
					data-hide-cover="false"
					data-show-facepile="true">
					<div class="fb-xfbml-parse-ignore">
						<blockquote cite="https://www.facebook.com/weenamkeeph">
							<a href="https://www.facebook.com/weenamkeeph">Wee Nam Kee Philippines</a>
						</blockquote>
					</div>
				</div>
			</div>

		</div>
	</div>

<?php get_footer( 'weenamkee' ); ?>
