<?php
/**
* Template Name: Home Covid
*/
 get_header(); 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>

<div class="bannerContainerHeader" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="container">
		<div class="buttonsHomeanner">
			<a href="#">
				buyer
			</a>
			<a href="#">
				silver
			</a>
			<a href="#">
				map & property search
			</a>
			<a href="#">
				Open Houses
			</a>
		</div>
	</div>
</div>
<div class="mapcontainer">
	<div class="containermapsearch">
		<div class="row">
			<div class="col">
				<input type="text" name="" placeholder="City, Neighborhood...">
			</div>
			<div class="col">
				<select>
					<option>
						price
					</option>
				</select>
			</div>
			<div class="col">
				<select>
					<option>
						type
					</option>
				</select>
			</div>
			<div class="col">
				<input type="text" name="" placeholder="more">
			</div>
			<div class="col">
				<input type="submit" name="" value="search">
			</div>
		</div>
	</div>
</div>
<div class="bglights headingss">
	<div class="container">
		<div class="col-md-12 BlogContainerTop">
			<div class="contentheading">
				<span class="NumberProfile">
					01
				</span>
				<h5>
					What Our
				</h5>
				<h2 class="Biggr">
					<span>Luxury</span> Real Estate
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<a href="#">$100,000 - $500,000</a>
			</div>
			<div class="col-md-4">
				<a href="#">$100,000 - $500,000</a>
			</div>
			<div class="col-md-4">
				<a href="#">$100,000 - $500,000</a>
			</div>
			<div class="col-md-4">
				<a href="#">$100,000 - $500,000</a>
			</div>
			<div class="col-md-4">
				<a href="#">$100,000 - $500,000</a>
			</div>
			<div class="col-md-4">
				<a href="#">$100,000 - $500,000</a>
			</div>
		</div>
		<a href="#" class="viewall">
			view all
		</a>
	</div>
</div>
<div class="propertysometigng headingss">
	<div class="container"> 
		<div class="col-md-12 BlogContainerTop">
			<div class="contentheading">
				<span class="NumberProfile">
					02
				</span>
				<h5>
					specialized
				</h5>
				<h2 class="Biggr">
					property search
				</h2>
			</div>
		</div>
	</div>
	<div class="row boxContainerRow">
			<div class="col-md-4">
				<div class="boxContainer">
					<img src="http://localhost/ashley/wp-content/uploads/2020/05/golf_02_03.png">
					<h2>
						Ski Homes							</h2>
				</div>
			</div>
							<div class="col-md-4">
				<div class="boxContainer">
					<img src="http://localhost/ashley/wp-content/uploads/2020/05/golf_02_05.png">
					<h2>
						Ski Condos
							</h2>
				</div>
			</div>
							<div class="col-md-4">
				<div class="boxContainer">
					<img src="http://localhost/ashley/wp-content/uploads/2020/05/golf_02_07.png">
					<h2>
						Golf properties
							</h2>
				</div>
			</div>
							<div class="col-md-4">
				<div class="boxContainer">
					<img src="http://localhost/ashley/wp-content/uploads/2020/05/golf_02_13.png">
					<h2>
						Gelnwild						</h2>
				</div>
			</div>
							<div class="col-md-4">
				<div class="boxContainer">
					<img src="http://localhost/ashley/wp-content/uploads/2020/05/golf_02_15.png">
					<h2>
						Promontory							</h2>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxContainer">
					<img src="http://localhost/ashley/wp-content/uploads/2020/05/golf_02_16.png">
					<h2>
						Tuhaye							</h2>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxContainer">
					<img src="http://localhost/ashley/wp-content/uploads/2020/05/golf_02_16.png">
					<h2>
						red ledgeas							</h2>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxContainer">
					<img src="http://localhost/ashley/wp-content/uploads/2020/05/golf_02_16.png">
					<h2>
						victory ranch							</h2>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxContainer">
					<img src="http://localhost/ashley/wp-content/uploads/2020/05/golf_02_16.png">
					<h2>
						Park Meadows							</h2>
				</div>
			</div>
	</div>
</div>

<div class="listings">
	<div class="container"> 
		<div class="col-md-12 BlogContainerTop">
			<div class="contentheading">
				<span class="NumberProfile">
					02
				</span>
				<h5>
					See Newest
				</h5>
				<h2 class="Biggr">
					Listings
				</h2>
			</div>
		</div>
	</div>
	<div class="maxContainer">
		<div class="row">
			<?php
				if( have_rows('boxes', 187) ):
				    while ( have_rows('boxes', 187) ) : the_row(); ?>
						<div class="col-md-3">
							<div class="boxContainerbox">
								<img src="<?php the_sub_field('Images', 187); ?>">
								<h6>
									<?php the_sub_field('titleget', 187); ?>
								</h6>
								<p>
									<?php the_sub_field('contentp', 187); ?>
								</p>
								<p class="prices">
									<?php the_sub_field('pricesp', 187); ?>
								</p>
								<a href="#">
									view detail
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="boxContainerbox">
								<img src="<?php the_sub_field('Images', 187); ?>">
								<h6>
									<?php the_sub_field('titleget', 187); ?>
								</h6>
								<p>
									<?php the_sub_field('contentp', 187); ?>
								</p>
								<p class="prices">
									<?php the_sub_field('pricesp', 187); ?>
								</p>
								<a href="#">
									view detail
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="boxContainerbox">
								<img src="<?php the_sub_field('Images', 187); ?>">
								<h6>
									<?php the_sub_field('titleget', 187); ?>
								</h6>
								<p>
									<?php the_sub_field('contentp', 187); ?>
								</p>
								<p class="prices">
									<?php the_sub_field('pricesp', 187); ?>
								</p>
								<a href="#">
									view detail
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="boxContainerbox">
								<img src="<?php the_sub_field('Images', 187); ?>">
								<h6>
									<?php the_sub_field('titleget', 187); ?>
								</h6>
								<p>
									<?php the_sub_field('contentp', 187); ?>
								</p>
								<p class="prices">
									<?php the_sub_field('pricesp', 187); ?>
								</p>
								<a href="#">
									view detail
								</a>
							</div>
						</div>
				    <?php endwhile;
				else :
				endif;
			?>
		</div>
	</div>
</div>
<div class="meet">
	<div class="containerTextCOntactPage">
		<div class="container">
			<div class="contentCOntact">
				<div class="displayFlex alignBottom justifyB">
					<div class="ladyContainer">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/lady2.jpg">
					</div>
					<div class="contentheading">
						<span class="NumberProfile">
							08
						</span>
						<h5>
							meet
						</h5>
						<h2>
							Ashley Archibald
						</h2>
						<p>
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut .
						</p>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sign.jpg">
						<a href="<?php echo site_url(); ?>/contact" class="allblog">
							Learn More
						</a>
					</div>
					<div class="ladyContainer">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/lady3.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="covidsection">
	<div class="container">
		<div class="row alignCenter">
			<div class="col-md-7">
				<div class="BlogContainerTop">
					<div class="contentheading">
						<span class="NumberProfile">
							05
						</span>
						<h5>
							Why
						</h5>
						<h2 style="font-size: 70px;">
							<?php the_field('headingContent'); ?>
						</h2>
						<p>
							<?php the_content(); ?>
						</p>
						<a href="#" class="learnMore">
							learn more
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<img src="<?php the_field('CovidImage'); ?>" class="blogImage">
			</div>
		</div>
	</div>
</div>

<div class="slideImageContact">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row alignCenter">
					<div class="col-md-12">
						<div class="BlogContainerTop">
							<div class="contentheading">
								<span class="NumberProfile">
									06
								</span>
								<h5>
									Why
								</h5>
								<h2 style="font-size: 70px;">
									Client raves
								</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="slider">
					<?php
						if( have_rows('reviews', 'option') ):
						    while ( have_rows('reviews', 'option') ) : the_row(); ?>
								<div class="slidesLeft">
									<div class="contentSlider">
										<h5>
											<?php the_sub_field('headingr', 'option') ?>
										</h5>
										<p>
											<?php the_sub_field('contentr', 'option'); ?>
										</p>
									</div>
								</div>
						  <?php   endwhile;
						else :
						endif;
					?>
				</div>
			</div>
			<div class="col-md-4 positionInherit">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider.png" class="sliderImage">
			</div>
		</div>
	</div>
</div>
<div class="blogrow">
	<div class="row">
		<div class="col-md-5 blogis">
			<div class="row alignCenter">
				<div class="col-md-12">
					<div class="BlogContainerTop">
						<div class="contentheading">
							<span class="NumberProfile">
								07
							</span>
							<h2 style="font-size: 70px;">
								our blog
							</h2>
							<p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7">
			<div class="row">
				<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by','Des', 'posts_per_page' =>2));?>
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
				<a href="<?php echo site_url(); ?>/blog" class="allblog">
					View All Blogs
				</a>
		</div>
	</div>
</div>
<?php }

}

get_footer();?>

