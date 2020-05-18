<?php get_header(); ?>

<div class="container">
	<div class="ContentSingleCOntainer">
		<h2>
			<?php the_title(); ?>
		</h2>
		<div class="infoPost">
			<ul>
				<li class="author">
					<img src="">
					<?php the_author(); ?>
				</li>
				<li class="dateposted">
					<img src="">
					<?php the_date(); ?>
				</li>
			</ul>
		</div>
	</div>
</div>

<?php
get_footer();?>
