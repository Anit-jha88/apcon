<?php
/**
 * Template Name: Contact
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/dealerBannerImg.png';
endif;

?>

 <section>
        <!-- CONTACT START -->
        <div class="container ptb-60">
            <div class="row">
              <div class="col-lg-6">
                <div class="contact-info">
                  
                    <h2>Get In Touch</h2> 
                   
                    <?php echo do_shortcode('[contact-form-7 id="f9867e4" title="Contact form 1" html_id="contact-form"]');?>
                   
                </div>  
              </div>
              <div class="col-lg-6 space-break">
                <div class="contact-info-right">
                 
                  <?php the_content();?>
                    <hr class="contact-divider">
                    <div class="box-contact">
                        <div class="bc-icon"><i class="fas fa-map-marker"></i></div>
                        <div class="bc-caption">
                            <p><?php echo get_field('address');?></p>
                        </div>
                    </div>
                    <hr class="contact-divider">
                    <div class="box-contact">
                        <div class="bc-icon phone-icon"><i class="fas fa-phone-volume"></i></div>
                        <div class="bc-caption">
                           <?php echo get_field('phone');?>
                        </div>
                    </div>
                    <hr class="contact-divider">
                    <div class="box-contact">
                        <div class="bc-icon phone-icon"><i class="fas fa-envelope"></i></div>
                        <div class="bc-caption">
                           <?php echo get_field('email');?>
                        </div>
                    </div>
                </div>  
              </div>
            </div>
        </div>
        <!-- CONTACT END -->
        
        <!-- MAP START -->
        <div class="bottom-map">
            <?php echo get_field('map');?>
        </div>
        <!-- MAP END -->
    </section>
    
   
<?php get_footer(); ?>