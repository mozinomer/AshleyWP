<?php
/**
* Template Name: Contact Page
*/
 get_header(); 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>
<div class="containerContactForm">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="leftCOntainerContact">
					<h2>
						<span class="color">Contact</span> Info
					</h2>
					<a href="mailto:info@ashleyarchibald.com">
						<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png"></span>
						<span>info@ashleyarchibald.com</span>
					</a>
					<a href="tel:+925558758829">
						<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/call.png"></span>
						<span>+925 5587 58829</span>
					</a>
				</div>
			</div>
			<div class="col-md-7 rightColumnCOntact">
				<h2>
					<span class="color">Get</span> In Touch
				</h2>
				<div class="FormContainer">
					<?php echo do_shortcode('[contact-form-7 id="76" title="Contact form 1"]'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="containerTextCOntactPage">
	<div class="container">
		<div class="contentCOntact">
			<div class="displayFlex alignBottom justifyB">
				<div class="contentheading">
					<span class="NumberProfile">
						08
					</span>
					<h5>
						meet
					</h5>
					<h2>
						Ashley Archibald
					</h2>
					<p>
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut .
					</p>
				</div>
				<div class="ladyContainer">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/lady.png">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="slideImageContact">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row alignCenter">
					<div class="col-md-12">
						<div class="BlogContainerTop">
							<div class="contentheading">
								<span class="NumberProfile">
									06
								</span>
								<h5>
									Why
								</h5>
								<h2 style="font-size: 70px;">
									Client raves
								</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="slider">
					<?php
						if( have_rows('reviews', 'option') ):
						    while ( have_rows('reviews', 'option') ) : the_row(); ?>
								<div class="slidesLeft">
									<div class="contentSlider">
										<h5>
											<?php the_sub_field('headingr', 'option') ?>
										</h5>
										<p>
											<?php the_sub_field('contentr', 'option'); ?>
										</p>
									</div>
								</div>
						  <?php   endwhile;
						else :
						endif;
					?>
				</div>
			</div>
			<div class="col-md-4 positionInherit">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.png" class="sliderImage">
			</div>
		</div>
	</div>
</div>


<?php }

}

get_footer();?>

