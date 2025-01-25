<?php
/**
 * Template Name: Our Associates
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/asset/images/welcome-to-animation-production.png';
endif;

?>
      <?php
        
        
        if( have_rows('our_associates') ):
        while( have_rows('our_associates') ) : the_row();
        
        ?>
        <div class="container ptb-60">
            <div class="section-title2">
                <h2><?php echo get_sub_field('our_associates_title');?></h2>
               
            </div>
            <div class="team-carousel slider hover-effects image-hover">
                 <?php
        
        
        if( have_rows('our_associates_team') ):
        while( have_rows('our_associates_team') ) : the_row();
        
        ?>
              <div class="slide">
                 <div class="team-portrait">
                    <figure class="tp-headshot"><img src="<?php echo get_sub_field('team_imagessss1');?>" alt=""></figure> 
                    <div class="tp-caption">
                        <div class="inner-tp-caption">
                            <h3><?php echo get_sub_field('our_associates_team_name');?></h3>
                            <p><?php echo get_sub_field('team_designation1');?></p>
                        
                        </div>
                    </div>
                 </div>
              </div>
            <?php endwhile; endif;?>
            
            </div>
        </div>
         <?php endwhile; endif;?>
       
     
     
        
    </section> 
<?php get_footer(); ?>