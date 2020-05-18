<?php get_header(); ?>

<div class="container">
	<div class="ContentSingleCOntainer">
		<h2>
			<?php the_title(); ?>
		</h2>
		<div class="infoPost">
			<ul>
				<li class="author">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/author.png">
					<?php echo get_the_author(); ?>
				</li>
				<li class="dateposted">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/calender.png">
					<?php echo get_the_date(); ?>
				</li>
			</ul>
		</div>
	</div>
</div>

<?php
get_footer();?>
