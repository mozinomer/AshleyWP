<?php
/**
* Template Name: Page Moortage
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
							Park City
						</h5>
						<h2><?php the_title(); ?></h2>
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
		<div class="row">
			<div class="col-md-8">
				<div class="contetnMortage">
					<h2>
						<?php the_field('headingMortage'); ?>
					</h2>
					<ul>
						<?php
							if( have_rows('box_') ):
							    while ( have_rows('box_') ) : the_row(); ?>
									<li>
										<?php the_sub_field('contetnMortage'); ?>
									</li>
							    <?php endwhile;
							else :
							endif;
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }

}

get_footer();?>

































<div class="row">
	<div class="col-md-6">
	     <div class="uk-grid uk-grid-collapse uk-child-width-expand uk-padding-small uk-width-auto width-top pr3 pl3 uk-visible@s uk-height-1-1 ">
	        <div class="uk-width-auto uk-flex uk-flex-top uk-text-center">
	            <span data-ukicon="mail|2" class="uk-margin-small-right color-brand"></span>
	        </div>
	        <div class="uk-width-auto">
	            <div class="mmb1"><span class="emailphone"><?php print_r(Themeton_Std::getopt('top_email_prefix')); ?></span></div>
	            <div><span class="numbers"><a class="number" href="tel:<?php print_r(Themeton_Std::getopt('top_email')); ?>"><?php print_r(Themeton_Std::getopt('top_email')); ?></a></span></div>
	        </div>
	    </div>
	    <div class="uk-grid uk-grid-collapse uk-child-width-expand uk-padding-small uk-width-auto width-top pr3 pl2 uk-visible@s uk-height-1-1 header-left-border">
	        <div class="uk-width-auto uk-flex uk-flex-top uk-flex-center" style="margin-top: 5px;">
	            <span data-ukicon="phone|2" class="uk-margin-small-right color-brand"></span>
	        </div>
	        <div class="uk-width-auto">
	            <div class="mmb1"><span class="emailphone uk-margin-right"><?php print_r(Themeton_Std::getopt('top_phone_prefix')); ?></span></div>
	            <div><span class="numbers"><a class="number" href="tel:<?php echo esc_attr( str_replace(' ', '', Themeton_Std::getopt('top_phone')) ); ?>"><?php print_r(Themeton_Std::getopt('top_phone')); ?></a></span>
	            </div>
	         </div>
	    </div>
	</div>
	<div class="col-md-6">
		<a href="linkedIn|https://www.linkedin.com/in/rebecca-winn-ab948529/"><i class="fa fa-LinkedIn"></i></a>
		<a href="facebook|https://www.facebook.com/winnthinking"><i class="fa fa-facebook"></i></a>
		<a href="twitter|https://twitter.com/winnthinking"><i class="fa fa-twitter"></i></a>
	</div>
</div>