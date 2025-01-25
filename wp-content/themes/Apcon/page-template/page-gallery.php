<?php
/**
 * Template Name: Gallery
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/asset/images/welcome-to-animation-production.png';
endif;

?>
   <section>
        <!-- TEAM START -->
        <div class="container ptb-60">
            <div class="section-title">
                <h2><?php the_title();?></h2>
                <p><?php echo get_the_content();?></p>
            </div>
          <div class="row">
                <?php
                $query = new WP_Query( [
                'post_type'      => 'galleryes',
                'nopaging'       => true,
                'posts_per_page' => -1,
                ] );
                while ( $query->have_posts() ) : $query->the_post();
                
                ?>
            <div class="col-md-3">
                <div class="packagesBox">
                    <img src="<?php the_post_thumbnail_url(); ?>" />
                    <p><?php the_title();?> </p>
                    <a href="<?php the_permalink(); ?>" class="btn btn1">View More</a>
                </div>
            </div>
    
              <?php endwhile; ?>
          </div>
        </div>
        <!-- TEAM END -->
    </section>
<?php get_footer(); ?>
  