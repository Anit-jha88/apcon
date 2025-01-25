<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the site name.
	bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) ) {
	echo " | $site_description";
}

	// Add a page number if necessary:
if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
	/* translators: %s: Page number. */
	echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );
}

?>
	</title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	 <script src="js/modernizr-custom.js"></script> 
</head>

     
      <body>

    <!-- PRELOADER START -->
    <div id="loader-wrapper">
        <div class="loader">
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
           <div class="ball"></div>
        </div> 
    </div>
    <!-- PRELOADER END -->
    
<!-- HEADER START -->
  <header <?php if(!is_front_page()){ echo 'class="pages-header"'; } ?>>
    <!-- NAVBAR START -->
    <div class="container main-nav">
        <nav id="navigation1" class="navigation">
            <div class="nav-header">
                <a class="nav-logo" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/old-white-logo.png"  class="white-logo" alt="White logo">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/old-green-logo.png"  class="dark-logo" alt="Green Logo">
                </a>
                <div class="nav-toggle"></div>
            </div>
            <div class="nav-menus-wrapper">
                
                <ul class="nav-menu align-to-right">
                  	<?php
				  			if ( has_nav_menu( 'primary' ) ) {
				  				wp_nav_menu(
				  					array(
				  						'container'  => '',
				  						'items_wrap' => '%3$s',
				  						'theme_location' => 'primary',
				  					)
				  				);

				  			}
				  			?>
                </ul>
            </div>
        </nav>
    </div>
    <!-- NAVBAR END -->
 <?php if(is_front_page()){ ?>
 
  <div class="home-slider">
        <div id="carouselVideoExample" data-mdb-carousel-init class="carousel slide carousel-fade" data-mdb-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video class="img-fluid" autoplay loop muted id="myVideo">
                    <source src="https://www.nimba.in/nimba-banner-video-new.mp4" type="video/mp4" /></video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5> It Is All In The Roots</h5>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } else{ ?>
       <div class="sections">
            <div class="container">
                <div class="pages-title">
                  <h1>Welcome to APCON Wellness</h1>
                    <!-- Breadcrumbs -->
                
                </div>
            </div>
        </div>
  <?php } ?>

</header>

