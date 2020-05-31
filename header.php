<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<?php wp_head(); ?>
<body <?php echo body_class(); ?>>
<header id="Mainheader">
	<div class="container">
		<div class="containerRow displayFlex justifyB alignCenter">
			<div class="logoContainerHeader">
				<?php 
				   $custom_logo_id = get_theme_mod( 'custom_logo' );
				   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?>
				<a href="<?php bloginfo('url');?>">
					<img src="<?php echo $image[0]; ?>" alt="" id="Logomain">
				</a>
			</div>
			<div class="containerListadnCall">
				<div class="UpperDow">
					<p>
						Luxury Park City Real Estate
					</p>
					<div class="CallerId">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/CallerId.png">
						<h2>
							<span>Call us on</span>
							<a href="tel:+972 4542">+972 4542</a>
						</h2>
					</div>
				</div>
				<nav class="mainMenu">
					<?php 
						wp_nav_menu( array( 
					    'theme_location' => 'headerMenu', 
					    'container_class' => 'headerMenu' ) ); 
					?>
				</nav>
			</div>
		</div>
	</div>
</header>
<div class="bannerContainerHeader" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="container">
		<?php if (is_page( array( 'covid', 'blogs', 'mortgage', 'architect', 'new-development', 'park-city', 'restaurants' ) ) ) { ?>
			<h2>
				<?php the_title(); ?>
			</h2>
		<?php } ?>
	</div>
</div>
<div class="container">
<div class="breaCrumb">
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
	    <?php 
	    	if(function_exists('bcn_display')) {
		        bcn_display();
		    }
	    ?>
	</div>
</div>
</div>









































