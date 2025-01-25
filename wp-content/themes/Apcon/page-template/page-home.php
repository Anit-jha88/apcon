<?php
/**
 * Template Name: Home
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/dealerBannerImg.png';
endif;

?>

  <section>
    
      <!-- WIDE SECTION START -->
      <div class="container-fluid mt-0">
        <div class="row">
          <div class="col-lg-5 col-xl-6 ws-right">

          </div>

          <div class="col-lg-7 col-xl-6 ws-lefside">
            <div class="ws-content">
              <div class="panel-title">
                <h5><?php echo get_field('welcome_titlee');?></h5>
                <h2><?php echo get_field('welcome_description');?></h2>  
              </div>
                <?php the_content();?>
              <hr>
              <div class="ws-icons-list">
                <div class="block-one">
                    <figure class="b-icon"><img src="<?php echo get_template_directory_uri()?>/assets/images/land.svg" alt=""></figure>  
                    <h4><?php echo get_field('expert_team');?></h4>
                    <p><?php echo get_field('expert_team_content');?></p>
                </div> 
                <div class="block-two">
                    <figure class="b-icon"><img src="<?php echo get_template_directory_uri()?>/assets/images/lifesaver.svg" alt=""></figure>  
                    <h4><?php echo get_field('natural_care');?></h4>
                    <p><?php echo get_field('natural_care_content');?></p>
                </div>  
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- WIDE SECTION END -->

    <div class="container-fluid inner-color " style="margin-top: 0px;">
        <div class="container mt-4 mb-4">
        <div class="section-title home-v2">
            <h2><?php echo get_field('holistic_programmes_title');?></h2>
            <p><?php echo get_field('holistic_programmes_content');?></p>
        </div>
        <div class="text-center">
            <div class="row clear-problem">
                <!-- EACH FEATURE -->
                
                 <?php
        
        
        if( have_rows('holistic_s') ):
        while( have_rows('holistic_s') ) : the_row();
        
        ?>
                <div class="col-md-6 col-lg-4">
                    <div class="features-item">
                        <div class="features-icon">
                           <img src="<?php echo get_sub_field('holistic__image');?>" />
                        </div>
                        <div class="features-info">
                            <h4 class="title"><?php echo get_sub_field('holistic_name');?></h4>
                            <p><?php echo get_sub_field('holistic__content');?></p>
                        </div>
                    </div> <!-- //features-item -->
                </div> <!-- //.col-sm-6 col-md-4 -->

 <?php endwhile; endif;?>
              
            </div> <!-- //row -->
        </div>
    </div> <!-- //container -->
    </div>
    
 
 

    <div class="container-fluid inner-color bg1">
        <div class="container mt-4 mb-4">
        <div class="section-title ">
            <h2><?php echo get_field('diseases_treated_title');?></h2>
            <p><?php echo get_field('diseases_treated_content');?></p>
        </div>
        <div class="text-center">
            <div class="row">
             

            <?php
        
        
        if( have_rows('diseases_treated') ):
        while( have_rows('diseases_treated') ) : the_row();
        
        ?>

                <div class="col-md-6 col-lg-4">
                    <div class="box-layer active-layer holisBox">
                        <a href="#.">
                            <figure class="bl-icon-active"><img src="<?php echo get_sub_field('diseases_treated_image');?>" alt=""></figure> 
                            <div class="itmDet">
                                <h4 class="active"><?php echo get_sub_field('diseases_treated');?></h4> 
                            </div>
                        </a>
                    </div>
                </div>

                    <?php endwhile; endif;?>
             
            </div>
        </div>
    </div> <!-- //container -->
    </div>

     <!-- TEAM START -->
     <div class="container ptb-60">
        <div class="section-title">
            <h2><?php echo get_field('featured_packages_title');?></h2>
            <p><?php echo get_field('featured_packages_content');?></p>
        </div>
      <div class="row">
           <?php
        
        
        if( have_rows('featured_packages') ):
        while( have_rows('featured_packages') ) : the_row();
        
        ?>

        <div class="col-md-3">
            <div class="packagesBox">
                <img src="<?php echo get_sub_field('featured_packages_images');?>" />
                <p><?php echo get_sub_field('featured_packages_titless');?></p>
                <a href="#." class="btn btn1">Book Now</a>
            </div>
        </div>
 <?php endwhile; endif;?>
      </div>
    </div>
    <!-- TEAM END -->

   
    
    <!-- TESTIMONIALS START -->
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-xl-5 r-layer-bg-color">
              <div class="vertical"><h4><?php echo get_field('review_title');?></h4></div>
          </div>
          <div class="col-lg-8 col-xl-7 l-layer-bg-color">
              <div class="t-content">
                <div id="testimonial-slider" class="owl-carousel">
                     <?php
        
        
        if( have_rows('testimonial_copy') ):
        while( have_rows('testimonial_copy') ) : the_row();
        
        ?>
                    <div class="testimonial-box">
                        <div class="tc-left">
                            <figure class="tc-avatar"><img src="<?php echo get_sub_field('testimonia_image');?>" alt=""></figure>
                            <div class="tc-caption">
                                <h4><?php echo get_sub_field('testimonia_title');?></h4>
                                <p><?php echo get_sub_field('testimonia_deg');?></p>
                                <ul class="rating">
                                    <li><i class="fas fa-star"></i></li>  
                                    <li><i class="fas fa-star"></i></li>  
                                    <li><i class="fas fa-star"></i></li>  
                                    <li><i class="fas fa-star"></i></li>  
                                    <li><i class="fas fa-star"></i></li>  
                                </ul>
                            </div>
                        </div>
                        <div class="tc-right">
                          <div class="tc-comment">
                            <p><?php echo get_sub_field('testimonia_content');?></p>  
                            <figure class="quote-icon"><img src="<?php echo get_template_directory_uri();?>assets/images/quote.svg" alt=""></figure>
                          </div>
                        </div>
                    </div>
                   <?php endwhile; endif;?>
                </div>
              </div>
          </div>
        </div>
    </div>
    <!-- TESTIMONIALS END -->

       <!-- TEAM START -->
       <div class="container ptb-60">
        <div class="section-title">
            <h2><?php echo get_field('gallery_title_home');?></h2>
            <p><?php echo get_field('gallery_content_home');?></p>
        </div>
      <div class="row">
            <?php
                $query = new WP_Query( [
                'post_type'      => 'galleryes',
                'nopaging'       => true,
                'posts_per_page' => 4,
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