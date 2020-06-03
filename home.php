<?php
/**
* Template Name: Home Covid
*/
 get_header(); 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>

<div class="bannerContainerHeader" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="container">
		<div class="buttonsHomeanner">
			<a href="#">
				buyer
			</a>
			<a href="#">
				silver
			</a>
			<a href="#">
				map & property search
			</a>
			<a href="#">
				Open Houses
			</a>
		</div>
	</div>
</div>
<div class="mapcontainer">
	<div class="containermapsearch">
		<div class="row">
			<div class="col">
				<input type="text" name="" placeholder="City, Neighborhood...">
			</div>
			<div class="col">
				<select>
					<option>
						price
					</option>
				</select>
			</div>
			<div class="col">
				<select>
					<option>
						type
					</option>
				</select>
			</div>
			<div class="col">
				<input type="text" name="" placeholder="more">
			</div>
			<div class="col">
				<input type="submit" name="" value="search">
			</div>
		</div>
	</div>
</div>
<div class="bglights">
	<div class="container">
		<div class="col-md-12 BlogContainerTop">
			<div class="contentheading">
				<span class="NumberProfile">
					01
				</span>
				<h5>
					What Our
				</h5>
				<h2 class="Biggr">
					<span>Luxury</span> Real Estate
				</h2>
			</div>
		</div>
	</div>
</div>






<?php }

}

get_footer();?>

