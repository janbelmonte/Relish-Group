<?php get_header( "osakaohsho" ); ?>

	<div id="carousel">
		<div class="limit">
			<div class="row">
				<div class="six columns">
					<div class="osaka-desc">
						<h1>The World's #1 Gyoza</h1>
						<p>Osaka Ohsho is Japan’s #1 restaurant specializing in Gyoza, together with a host of other staple Japanese dishes. Founded in 1969 as a humble dumpling shop, the concept has now expanded to more than 400 locations in its home country and beyond. With concepts present all throughout Asia, Osaka Ohsho has now found its way to the hearts of every Filipino.</p>
					</div>
				</div>
				<div class="six columns">
					<div class="css-carousel">
						<?php $carouselQuery = carousel_query('osakaohsho'); carousel_loop('osakaohsho', $carouselQuery); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="osaka-menu">
		<div id="red-strip"></div>
		<div class="osaka-food limit">
			<div class="row">
				<div class="three columns">
					<div class="osaka-section-title">
						<h1>OUR FOOD</h1>
						<p class="osaka-caption">Only the freshest and best quality ingredients are used in Osaka Ohsho. Our chefs undergo extensive training under our Japanese master chefs in order to deliver an experience that only Osaka Ohsho can offer.</p>
					</div>
				</div>
				<div class="nine columns">

					<div class="six columns padding-20">
						<div class="menu-spacer75"></div>
						<div class="osaka-menu-item">

							<table class="tg">
							  <tr>
							    <td class="tg-yw4l"><h5>Gyoza</h5></th>
							    <td class="tg-yw4l"></th>
							  </tr>
								<?php $gyozaQuery = menu_item_query('osakaohsho', 'gyoza'); menu_item_loop($gyozaQuery); ?>
							  <tr>
							    <td class="tg-yw4l"></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"><h5>Koshihikari Sets</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
								<?php $koshikariQuery = menu_item_query('osakaohsho','koshihikari'); menu_item_loop($koshikariQuery); ?>
							  <tr>
							    <td class="tg-yw4l"></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"><h5>Chahan Sets</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
								<?php $chahanQuery = menu_item_query('osakaohsho','chahan set'); menu_item_loop($chahanQuery);?>

							  <tr>
							    <td class="tg-yw4l">* Each Chahan Set comes with a serving of Chahan, 3 pieces of gyoza, miso soup, a fruit plate and unlimited premium steamed Japanese Koshihikari rice.</td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l">**Upgrade to Black Chahan by adding P10 to the set price.</td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"><h5>Fuwatoro Sets</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
								<?php $fuwatoroQuery = menu_item_query('osakaohsho','fuwatoro sets'); menu_item_loop($fuwatoroQuery); ?>
							  <tr>
							    <td class="tg-yw4l">*Each Fuwatoro Set comes with a serving of Fuwatoro Tenshin Han, two servings of miso soup and two servings of fruit.</td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"><h5>Japanese Curry Sets</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <?php $curryQuery = menu_item_query('osakaohsho','japanese curry sets'); menu_item_loop($curryQuery); ?>
							  <tr>
							    <td class="tg-yw4l">*Each Japanese Curry Set comes with 3 pieces of gyoza, miso soup, a fruit plate and unlimited premium steamed Japanese Koshihikari rice.</td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"><h5>Appetizers &amp; Salads</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							<?php $appetizerQuery = menu_item_query('osakaohsho', 'appetizers & salads'); menu_item_loop($appetizerQuery); ?>
							  <tr>
							    <td class="tg-yw4l"></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <tr>
							    <td class="tg-yw4l"><h5>Teppanyaki</h5></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							  <?php $teppanyakiQuery = menu_item_query('osakaohsho', 'teppanyaki'); menu_item_loop($teppanyakiQuery); ?>
							  <tr>
							    <td class="tg-yw4l"></td>
							    <td class="tg-yw4l"></td>
							  </tr>
							</table>
						</div>
					</div>
					<div class="six columns padding-20">
						<div class="menu-spacer150"></div>

						<div class="osaka-menu-item">
						<table class="tg">
						  <tr>
						    <td class="tg-yw4l"><h5>Stir Fry</h5></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <?php $stirfryQuery = menu_item_query('osakaohsho', 'stir fry'); menu_item_loop($stirfryQuery); ?>
						  <tr>
						    <td class="tg-yw4l"></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <tr>
						    <td class="tg-yw4l"><h5>Vegetables &amp; Tofu</h5></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <?php $vegetablesQuery = menu_item_query('osakaohsho', 'vegetables & tofu'); menu_item_loop($vegetablesQuery); ?>
						  <tr>
						    <td class="tg-yw4l"><h5>Agemono (Deep-fried)</h5></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <?php $agemonoQuery = menu_item_query('osakaohsho', 'agemono'); menu_item_loop($agemonoQuery); ?>
						  <tr>
						    <td class="tg-yw4l"></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <tr>
						    <td class="tg-yw4l"><h5>Rice &amp; Noodles</h5></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <?php $riceQuery = menu_item_query('osakaohsho', 'rice & noodles'); menu_item_loop($riceQuery); ?>
						  <tr>
						    <td class="tg-yw4l"><h5>Afternoon Sets</h5></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <tr>
						    <td class="tg-yw4l">Each set comes with miso soup and is available only from 2 to 5 p.m. daily</td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <tr>
						    <td class="tg-yw4l">Gyoza Afternoon Set</td>
						    <td class="tg-yw4l">220</td>
						  </tr>
						  <?php $gyozaAfternoonSetsQuery = menu_item_query('osakaohsho', 'gyoza afternoon sets'); menu_item_loop($gyozaAfternoonSetsQuery); ?>
						  <tr>
						    <td class="tg-yw4l"></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <tr>
						    <td class="tg-yw4l"><h5>Kiddie Sets</h5></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <tr>
						    <td class="tg-yw4l">Available only for children 10 years old or younger. Set includes rice, miso soup and a fruit plate.</td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <?php $kiddieQuery = menu_item_query('osakaohsho', 'kiddie sets'); menu_item_loop($kiddieQuery); ?>
						  <tr>
						    <td class="tg-yw4l"></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <tr>
						    <td class="tg-yw4l"><div class="kill-section"></div><h5>Desserts</h5></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <?php $dessertsQuery = menu_item_query('osakaohsho', 'desserts'); menu_item_loop($dessertsQuery); ?>
						  <tr>
						    <td class="tg-yw4l"><h5>Drinks</h5></td>
						    <td class="tg-yw4l"></td>
						  </tr>
						  <?php $drinksQuery = menu_item_query('osakaohsho', 'drinks'); menu_item_loop($drinksQuery); ?>
						</table>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div id="osaka-branches">
		<div class="osaka-branch-row padding-20">
			<div class="row limit">
				<div class="three columns">
					<h1>BRANCHES</h1>
				</div>
				<?php $branchQuery = branch_query('osakaohsho'); branch_loop($branchQuery); ?>
			</div>
		</div>

		<div class="osaka-map">
			<iframe src="https://mapsengine.google.com/map/u/0/embed?mid=zayvT_mm2YxQ.k8FWNnflnS6c" width="640" height="480" style="border:none;"></iframe>
		</div>
	</div>

	<div id="social">
		<div class="row limit padding-20">
			<div class="four columns">
				<h1>LATEST UPDATES</h1>
			</div>
			<div class="four columns">
				<iframe src="http://widget.websta.me/in/osakaohshoph?r=1&w=2&h=8&b=0&p=5" allowtransparency="true" frameborder="0" scrolling="yes" style="border:none;overflow:hidden;width:100%; min-height: 300px; height: auto; " ></iframe>
			</div>
			<div class="four columns">
				<div class="fb-page"
					data-href="https://www.facebook.com/osakaohshoph"
					data-tabs="timeline"
					data-width="500"
					data-height="300"
					data-small-header="false"
					data-adapt-container-width="true"
					data-hide-cover="false"
					data-show-facepile="true">
					<div class="fb-xfbml-parse-ignore">
						<blockquote cite="https://www.facebook.com/osakaohshoph">
							<a href="https://www.facebook.com/osakaohshoph">Osaka Ohsho Philippines</a>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer( "osakaohsho" ); ?>
