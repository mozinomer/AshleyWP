<?php get_header(); 

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
		<?php the_content(); ?>
	</div>
	<div class="ShareLinks">
		<div class="LInksSocial displayFlex alignCenter">
			<span class="share_text_mobile">Share Article</span>
			<span>
				<a href="<?php echo "https://www.facebook.com/sharer/sharer.php?u=" . urlencode( get_the_permalink() ); ?>">
					<i class="fa fa-facebook class_class facebook_class"></i>
				</a>
			</span>
			<span>
				<a href="<?php echo "https://twitter.com/intent/tweet?text=" . urlencode(get_the_permalink()); ?>">
					<i class="fa fa-twitter class_class twitter_class"></i>
				</a>
			</span>
			<span>
				<a href="<?php echo "https://www.linkedin.com/sharing/share-offsite/?url=" . urlencode(get_the_permalink()); ?>">
					<i class="fa fa-linkedin class_class linkdin_class"></i>
				</a>
			</span>
			<span>
				<?php
					$postpermalink = urlencode( get_permalink() );
					$imageurl = urlencode( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) );
				?>
				<a target="blank" href="http://pinterest.com/pin/create/button/?url=<?php echo $postpermalink ?>&media=<?php echo $imageurl ?>" title="Pin This Post">
					<i class="fa fa-pinterest class_class pinterest_class"></i>
				</a>
			</span>
		</div>
		<div class="NextAndPrevPost">
			<?php next_post_link(); ?>
			<?php previous_post_link(); ?>

		</div>
	</div>
	<div class="RelatedPost BlogContainerTop">
		<div class="contentheading">
			<span class="NumberProfile">
				01
			</span>
			<h5>
				See
			</h5>
			<h2>Our blogs</h2>
		</div>
		<div class="row">
			<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by','Des', 'posts_per_page' =>3));?>
			<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
				<div class="col-md-4">
					<a href="<?php the_permalink(); ?>" class="backgroundImageCOntainer" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
						<div class="contentsi">
							<span class="datePostedRelated">
								<?php echo get_the_date(); ?>
							</span>
							<h5>
								<?php the_title(); ?>
							</h5>
						</div>
					</a>
				</div>
			<?php endwhile?>
		</div>
	</div>
</div>
</div>



<?php }

}

get_footer();?>

