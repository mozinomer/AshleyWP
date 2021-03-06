<?php
/**
* Template Name: Page Resturant
*/
 get_header(); 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>
<div class="bannerBg">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="BlogContainerTop">
					<div class="contentheading">
						<span class="NumberProfile">
							01
						</span>
						<h5>
							Local Favorites on main ST
						</h5>
						<h2>for Lunch & Dinner <span class="ResturantSpan"><span class="ResturantSpanInner">Nancy Tallman </span>December 11, 2012 0</span></h2>
						<p>
							<?php the_content(); ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<img src="<?php the_field('CovidImage'); ?>" class="blogImage">
			</div>
		</div>
		<div class="contentCovidPage">
			<div class="row">
				<div class="col-md-8">
					<?php 
						$classPark = 'ParkCity'
					 ?>
					<div class="contetnPageodi <?php if (is_page('park-city')) { echo $classPark; } ?>">
						<h2>
							<?php the_field('headingContent'); ?>
						</h2>
						<ul>
							<?php
								if (is_page('covid')) {
								   $i=1;
								}
								if( have_rows('COntentCovidPage') ):
								    while ( have_rows('COntentCovidPage') ) : the_row(); ?>
								        <li>
								        	<h6>
								        		<span>
								        			<?php if (is_page('covid')) {echo $i;} ?>
								        		</span>
								        		<?php the_sub_field('headingName'); ?>
								        	</h6>
								        	<p>
								        		<?php the_sub_field('contentListCvid'); ?>
								        	</p>
								        </li>
								    <?php $i++; endwhile;
								else :
								endif;
							?>
						</ul>
					</div>
					<div class="rightColumnCOntact">
						<h2>
							<span class="color">Share</span>  your Thoughts
						</h2>
						<div class="FormContainer">
							<?php echo do_shortcode('[contact-form-7 id="76" title="Contact form 1"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }

}

get_footer();?>

