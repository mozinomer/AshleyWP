
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

<?php wp_footer(); ?>
</body>
</html>