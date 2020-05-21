<?php
/**
* Template Name: Page Golf
*/
 get_header(); 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>
<div class="bannerBg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="BlogContainerTop golfPage">
					<div class="contentheading">
						<span class="NumberProfile">
							01
						</span>
						<h5>
							PARK CITY REAL ESTATE
						</h5>
						<h2>Park City's Golf</h2>
						<p>
							<?php the_content(); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row boxContainerRow">
		<?php
			if( have_rows('box_') ):
			    while ( have_rows('box_') ) : the_row(); ?>
					<div class="col-md-4">
						<div class="boxContainer">
							<img src="<?php the_sub_field('boxImage'); ?>">
							<h2>
								<?php the_sub_field('the_heading'); ?>
							</h2>
						</div>
					</div>
			    <?php endwhile;
			else :
			endif;
		?>
	</div>
	<div class="container checklistContainer">
		<div class="row">
			<div class="col-md-7">
				<h2>
					<?php the_field('HeadingCheckLIst'); ?>
				</h2>
				<ul>
					<?php
						if( have_rows('cehck_list') ):
						    while ( have_rows('cehck_list') ) : the_row(); ?>
								<li>
									<?php the_sub_field('checkLIstContent'); ?>
								</li>
						    <?php endwhile;
						else :
						endif;
					?>
				</ul>
			</div>
			<div class="col-md-5">
				<img src="<?php the_field('ImageRightGolf'); ?>">
			</div>
		</div>
	</div>
</div>
<?php }

}

get_footer();?>

