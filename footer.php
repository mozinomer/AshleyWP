<div class="HomeWorth">
	<div class="container">
		<h2>
			What is your home worth?
		</h2>
		<a href="#" class="CalltoAction">
			Find Out Now
		</a>
	</div>
</div>

<div class="SocialProfileSection">
	<div class="profileBgSocail">
		<div class="contentheading">
			<span class="NumberProfile">
				08
			</span>
			<h5>
				we are
			</h5>
			<h2>
				Social
			</h2>
		</div>
	</div>
	<div class="SocialIcons">
		<div class="displayFlex">
			<a class="IconCOntainer displayFlex alignCenter justifyC" href="<?php the_field('facebook', 'option') ?>">
				<i class="fa fa-facebook"></i>
			</a>
			<a class="IconCOntainer displayFlex alignCenter justifyC" href="<?php the_field('instagram', 'option') ?>">
				<i class="fa fa-instagram"></i>
			</a>
			<a class="IconCOntainer displayFlex alignCenter justifyC" href="<?php the_field('twitter', 'option') ?>">
				<i class="fa fa-twitter"></i>
			</a>
			<a class="IconCOntainer displayFlex alignCenter justifyC" href="<?php the_field('google_plus', 'option') ?>">
				<i class="fa fa-google-plus"></i>
			</a>
			<a class="IconCOntainer displayFlex alignCenter justifyC" href="<?php the_field('pinterest', 'option') ?>">
				<i class="fa fa-pinterest"></i>
			</a>
		</div>
	</div>
</div>
<footer id="mainFooter">
	<div class="minimumContainer">
		<?php if( get_field('footer_logo', 'option') ) { ?>
		    <img src="<?php the_field('footer_logo', 'option'); ?>" class="footerLogo" />
		<?php } else { ?>
			<h4 class="HeadingFooter">
				<?php the_field('alternate_text_heading', 'option'); ?>
			</h4>
		<?php } ?>
		<?php 
			wp_nav_menu( array( 
		    'theme_location' => 'footerMenu', 
		    'container_class' => 'footerMenu' ) ); 
		?>
		<ul class="Policies">
			<li>
				<a href="#">
					<?php the_field('privacy_policy_text', 'option'); ?>
				</a>
			</li>
			<li>
				<a href="#">
					 |  
					<?php the_field('terms_&_condition_text', 'option'); ?>
				</a>
			</li>
		</ul>
		<p class="copyRights">
			<?php the_field('copy_rights_text', 'option'); ?>
		</p>
	</div>
</footer>
<script type="text/javascript">
	 $('.slideLefter').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  rows: 0,
	  infinite: false,
	  fade: true,
	  asNavFor: '.slideRight'
	  centerMode: false,
	});
	$('.slideRight').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  rows: 0,
	  infinite: false,
	  asNavFor: '.slideLefter',
	  focusOnSelect: true
	  centerMode: false,
	});
</script>
<?php wp_footer(); ?>
</body>
</html>