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
<div class="sliderContactpage">
	<div class="sliderContact">
		<div class="slideLefter">
			<div class="slidesLeft">
				<div class="contentheading">
					<span class="NumberProfile">
						08
					</span>
					<h5>
						why
					</h5>
					<h2>
						Client raves
					</h2>
				</div>
				<div class="contentSlider">
					<h5>
						a Wonderful Experience
					</h5>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
					</p>
					<span class="authorSlider">
						Sandra White
					</span>
				</div>
			</div>
			<div class="slidesLeft">
				<div class="contentheading">
					<span class="NumberProfile">
						08
					</span>
					<h5>
						why
					</h5>
					<h2>
						Client raves
					</h2>
				</div>
				<div class="contentSlider">
					<h5>
						a Wonderful Experience
					</h5>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
					</p>
					<span class="authorSlider">
						Sandra White
					</span>
				</div>
			</div>
		</div>
		<div class="slideRight">
			<div class="imageSlider">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.png">
			</div>
			<div class="imageSlider">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.png">
			</div>
		</div>
	</div>
</div>


<?php }

}

get_footer();?>

