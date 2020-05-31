<?php
/**
* Template Name: Page Testimonial
*/
 get_header(); 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>


<div class="singlePage">
	<div class="searcher">
		<i class="fa fa-search">
			
		</i>
	</div>
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
					clients say
				</h2>
			</div>
		</div>
		<div class="row">
			<?php
				if( have_rows('testimonial') ):
				    while ( have_rows('testimonial') ) : the_row(); ?>
						<div class="col-md-6 contetnTest">
							<div class="ContentTestimonial">
								<h2><?php the_sub_field('TitleHeading') ?></h2>
								<p><?php the_sub_field('ParaHeading') ?></p>
							</div>
						</div>
				    <?php  endwhile;
				else :
				endif;
			?>
		</div>
	</div>
</div>



<?php }

}

get_footer();?>


