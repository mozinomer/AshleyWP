<?php
/**
* Template Name: House property
*/
 get_header(); 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>
<div class="bannerBg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="BlogContainerTop">
					<div class="contentheading">
						<span class="NumberProfile">
							01
						</span>
						<h5>
							know about
						</h5>
						<h2 class="HorseProperty"><?php the_title(); ?></h2>
						<p>
							<?php the_content(); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<br>
<br>
<br>
<br>
<br>
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
</div>
<?php }

}

get_footer();?>

