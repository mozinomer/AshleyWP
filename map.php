<?php
/**
* Template Name: Map
*/
 get_header(); 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>
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
<div class="maxContainer">
	<div class="row">
		<?php
			if( have_rows('boxes') ):
			    while ( have_rows('boxes') ) : the_row(); ?>
					<div class="col-md-3">
						<div class="boxContainerbox">
							<img src="<?php the_sub_field('Images'); ?>">
							<h6>
								<?php the_sub_field('titleget'); ?>
							</h6>
							<p>
								<?php the_sub_field('contentp'); ?>
							</p>
							<p class="prices">
								<?php the_sub_field('pricesp'); ?>
							</p>
							<a href="#">
								view detail
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="boxContainerbox">
							<img src="<?php the_sub_field('Images'); ?>">
							<h6>
								<?php the_sub_field('titleget'); ?>
							</h6>
							<p>
								<?php the_sub_field('contentp'); ?>
							</p>
							<p class="prices">
								<?php the_sub_field('pricesp'); ?>
							</p>
							<a href="#">
								view detail
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="boxContainerbox">
							<img src="<?php the_sub_field('Images'); ?>">
							<h6>
								<?php the_sub_field('titleget'); ?>
							</h6>
							<p>
								<?php the_sub_field('contentp'); ?>
							</p>
							<p class="prices">
								<?php the_sub_field('pricesp'); ?>
							</p>
							<a href="#">
								view detail
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="boxContainerbox">
							<img src="<?php the_sub_field('Images'); ?>">
							<h6>
								<?php the_sub_field('titleget'); ?>
							</h6>
							<p>
								<?php the_sub_field('contentp'); ?>
							</p>
							<p class="prices">
								<?php the_sub_field('pricesp'); ?>
							</p>
							<a href="#">
								view detail
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="boxContainerbox">
							<img src="<?php the_sub_field('Images'); ?>">
							<h6>
								<?php the_sub_field('titleget'); ?>
							</h6>
							<p>
								<?php the_sub_field('contentp'); ?>
							</p>
							<p class="prices">
								<?php the_sub_field('pricesp'); ?>
							</p>
							<a href="#">
								view detail
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="boxContainerbox">
							<img src="<?php the_sub_field('Images'); ?>">
							<h6>
								<?php the_sub_field('titleget'); ?>
							</h6>
							<p>
								<?php the_sub_field('contentp'); ?>
							</p>
							<p class="prices">
								<?php the_sub_field('pricesp'); ?>
							</p>
							<a href="#">
								view detail
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="boxContainerbox">
							<img src="<?php the_sub_field('Images'); ?>">
							<h6>
								<?php the_sub_field('titleget'); ?>
							</h6>
							<p>
								<?php the_sub_field('contentp'); ?>
							</p>
							<p class="prices">
								<?php the_sub_field('pricesp'); ?>
							</p>
							<a href="#">
								view detail
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="boxContainerbox">
							<img src="<?php the_sub_field('Images'); ?>">
							<h6>
								<?php the_sub_field('titleget'); ?>
							</h6>
							<p>
								<?php the_sub_field('contentp'); ?>
							</p>
							<p class="prices">
								<?php the_sub_field('pricesp'); ?>
							</p>
							<a href="#">
								view detail
							</a>
						</div>
					</div>
			    <?php endwhile;
			else :
			endif;
		?>
	</div>
</div>

<?php }
}

get_footer();?>

