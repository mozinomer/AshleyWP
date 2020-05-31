<?php
    /**
    * Template Name: winnthinks Blog Template
    */
?>
<?php get_header(); ?>
<div class="container" id="BlogId">
	<div class="row" id="singlePost">
		<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by','Des', 'posts_per_page' => 1));?>
		<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="SingleImage">
			</div>
			<div class="col-md-6">
				<h2>
					<?php the_title(); ?>
				</h2>
				<p>
					<?php the_excerpt(); ?>
				</p>
				<a href="<?php the_permalink(); ?>">Read post</a>
			</div>
		</div>
		<?php endwhile?>
	</div>
</div>

<div class="row" id="PostsBlogTemplate">
	<div class="row">
	<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by','Des', 'posts_per_page' => -1));?>
	<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
		<div class="col-md-4">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="SingleImage">
				<h4>
					<?php the_title(); ?>
				</h4>
				<p>
					<?php the_excerpt(); ?>
				</p>
				<p class="catAndDateCOntainer">
					<?php the_date(); ?>
				</p>
			</a>
		</div>
	<?php endwhile?>
	</div>
</div>
<?php get_footer();?>