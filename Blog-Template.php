<?php
/**
* Template Name: Blog Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/ 

?>
<?php get_header(); 

if ( have_posts() ) {

	while ( have_posts() ) {

		the_post(); 

?>

<div class="container">
	<div class="row">
		<div class="col-md-7">
			<div class="BlogContainerTop">
				<div class="contentheading">
					<span class="NumberProfile">
						01
					</span>
					<h5>
						Read
					</h5>
					<h2>Our blogs</h2>
					<p>
						<?php the_content(); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<img src="<?php the_field('BlogImage'); ?>" class="blogImage">
		</div>
	</div>
	<div class="row bLogContainerRow">
		<div class="col-md-8">
			<h2>
				blogs
			</h2>
			<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by','Des', 'posts_per_page' => 10));?>
			<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
				<ul id="PostContainerBlog">
					<li class="displayFlex alignCenter">
						<div class="imageContaineBLog">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
						<div class="contentBlogPage">
							<h4>
								<?php the_title(); ?>
							</h4>
							<p>
								<?php the_excerpt(); ?>
							</p>
							<a href="<?php the_permalink(); ?>">
								read More
							</a>
						</div>
					</li>
				</ul>
			<?php endwhile?>
		</div>
	</div>
</div>

<?php }

}

get_footer();?>
