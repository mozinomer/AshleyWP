<?php
/**
* Template Name: Page Covid
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
							<?php if (is_page('architect')) { ?>
								<h5>
									our
								</h5>
								<h2>
									<?php the_field('headingContent'); ?>
								</h2>
							<?php } elseif (is_page('park-city')) { ?>
								<h5>
									see about
								</h5>
								<h2>
									<?php the_field('headingContent'); ?>
								</h2>
							<?php } elseif (is_page('utility-companies')) { ?>
								<h5>
									park city
								</h5>
								<h2>
									<?php the_title(); ?>
								</h2>
							<?php } else { ?>
								<h5>
									Read about
								</h5>
								<h2>COVID-19 Virtual <br>Park City Real Estate</h2>
							<?php } ?>
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
					<?php 
						$classPark = 'ParkCity';
						$utilitycompanies = 'utility-companies';
					 ?>
					<div class="contetnPageodi <?php if (is_page('park-city')) { echo $classPark; } elseif(is_page('utility-companies')) { echo $utilitycompanies; } ?>">
						<h2>
							<?php the_field('headingContent'); ?>
						</h2>
						<ul>
							<?php
								if (is_page('covid')) {
								   $i=1;
								}
								if( have_rows('COntentCovidPage') ):
								    while ( have_rows('COntentCovidPage') ) : the_row(); ?>
								        <li>
								        	<h6>
								        		<span>
								        			<?php if (is_page('covid')) {echo $i;} ?>
								        		</span>
								        		<?php the_sub_field('headingName'); ?>
								        	</h6>
								        	<p>
								        		<?php the_sub_field('contentListCvid'); ?>
								        	</p>
								        </li>
								    <?php $i++; endwhile;
								else :
								endif;
							?>
						</ul>
					</div>
					<?php if(is_page('utility-companies')) { ?>
					<br>
					<br>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1539050.2473567717!2d-78.7257447206624!3d41.11361893228174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882d80261e32e589%3A0xc24621475022b43d!2sPennsylvania%2C%20USA!5e0!3m2!1sen!2s!4v1590948989436!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }

}

get_footer();?>

