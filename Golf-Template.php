<?php
/**
* Template Name: Page Golf
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
				<div class="BlogContainerTop golfPage">
					<div class="contentheading">
						<span class="NumberProfile">
							01
						</span>
						<h5>
							PARK CITY REAL ESTATE
						</h5>
						<h2>Park City's Golf</h2>
						<p>
							<?php the_content(); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="contentCovidPage">
			<div class="row">
				<div class="col-md-8">
					<div class="contetnPageodi">
						<h2>
							<?php the_field('headingContent'); ?>
						</h2>
						<ul>
							<?php
							   $i=1;
								if( have_rows('COntentCovidPage') ):
								    while ( have_rows('COntentCovidPage') ) : the_row(); ?>
								        <li>
								        	<h6>
								        		<span>
								        			<?php echo $i; ?>
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
				</div>
			</div>
		</div>
	</div>
</div>
<?php }

}

get_footer();?>

