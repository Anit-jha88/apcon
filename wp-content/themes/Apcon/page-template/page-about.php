<?php
/**
 * Template Name: About
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/dealerBannerImg.png';
endif;

?>
<?php
/**
 * Template Name: Project
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/asset/images/welcome-to-animation-production.png';
endif;

?>
 <section>
        <div class="container-fluid inner-color " style="margin-top: 0px;">
            <div class="container mt-4 mb-4">
                <div class="section-title home-v1">
                    <h2>Welcome to apcon Wellness</h2>
                </div>
                <div class="text-center">
                    <div class="row clear-problem">
                    
                        <div class="col-md-12 col-lg-12">
                           <?php the_content();?>
                        </div> 
                    </div> 
                </div>
            </div> 
        </div>

        <!-- ABOUT SECTION START -->
        <div class="container ptb-60">
            <div class="row">
              <div class="col-lg-6">
                <figure class="about-pic"><img src="<?php echo get_field('good_health_image');?>" alt=""></figure>
              </div>
              <div class="col-lg-6 space-break">
                <div class="about-info">
                    <h2><?php echo get_field('good_health_title');?></h2>  
                    <p><?php echo get_field('good_health_content');?></p>

                    <div class="ab-contact">
                        <p>Call Us for Service/Product</p>
                        <h3><?php echo get_field('call_us_for_service');?></h3>
                    </div>
                  
                </div>  
              </div>
            </div>
        </div>
        <!-- ABOUT SECTION END -->
        
     
        <!-- WIDE SECTION START -->
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-5 col-xl-6 ws-right">

              </div>

              <div class="col-lg-7 col-xl-6 ws-lefside">
                <div class="ws-content">
                  <div class="panel-title">
                    <h5><?php echo get_field('why_choose_us_title');?></h5>
                    <h2><?php echo get_field('why_choose_us_heading');?></h2>  
                  </div>
                 <?php echo get_field('why_choose_us_content');?>
               
                </div>
              </div>
            </div>
        </div>
        <!-- WIDE SECTION END -->
        
     
        
        <!-- TEAM START -->
        <div class="container ptb-60">
            <div class="section-title">
                <h2><?php echo get_field('our_team_t');?></h2>
                <p><?php echo get_field('our_team_content');?></p>
            </div>
            <div class="team-carousel slider hover-effects image-hover">
                <?php
        
        
        if( have_rows('our_team') ):
        while( have_rows('our_team') ) : the_row();
        
        ?>
              <div class="slide">
                 <div class="team-portrait">
                    <figure class="tp-headshot"><img src="<?php echo get_sub_field('team_image');?>" alt=""></figure> 
                    <div class="tp-caption">
                        <div class="inner-tp-caption">
                            <h3><?php echo get_sub_field('team_name');?></h3>
                            <p><?php echo get_sub_field('team_designation');?></p>
                            <div class="tp-social">
                                <div class="social-icon"><p><a href="<?php echo get_sub_field('fb_link');?>" target="_blank"><i class="fab fa-facebook-f"></i></a></p></div>
                                <div class="social-icon"><p><a href="<?php echo get_sub_field('Tw_Link');?>" target="_blank"><i class="fab fa-twitter"></i></a></p></div>
                                <div class="social-icon"><p><a href="<?php echo get_sub_field('ld_link');?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></p></div>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
             <?php endwhile; endif;?>
            </div>
        </div>
        <!-- TEAM END -->
     
     
        
    </section> 
<?php get_footer(); ?>