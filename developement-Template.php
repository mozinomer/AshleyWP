<?php
/**
* Template Name: Development Template
*/
 get_header(); 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>
<div class="bannerBg">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="BlogContainerTop">
					<div class="contentheading">
						<span class="NumberProfile">
							01
						</span>
						<h5>
							see our
						</h5>
						<h2>
							<?php the_field('headingContent'); ?>
						</h2>
						<p>
							<?php the_content(); ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<img src="<?php the_field('CovidImage'); ?>" class="blogImage">
			</div>
		</div>
		<div class="contentCovidPage">
			<div class="row">
				<div class="col-md-8">
					<div class="contetnPageodi postContainerD">
						<h2>
							<?php the_field('headingContent'); ?>
						</h2>
						<?php $data_query =  new WP_Query(array('post_type' => 'development', 'order_by','Des', 'posts_per_page' => 3));?>
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
										<span class="priceIs">
											<?php the_field('price_d') ?>
										</span>
										<a href="<?php the_permalink(); ?>">
											View Detail
										</a>
									</div>
								</li>
							</ul>
						<?php endwhile?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }

}

get_footer();?>

