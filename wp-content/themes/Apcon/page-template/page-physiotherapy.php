<?php
/**
 * Template Name: Our Physiotherapy
 
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
                <div class="col-lg-12 space-break">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist" >
                        <?php
                        
                        $n=1;
                        if( have_rows('physiotherapy_service') ):
                        while( have_rows('physiotherapy_service') ) : the_row();
                        
                        ?>
                        <li class="nav-item"><a class="nav-link <?php if($n==1){ echo 'active';}?>" href="#tab<?php echo $n;?>" role="tab" data-toggle="tab"><?php echo get_sub_field('service_title_s');?></a></li>
                      
                         <?php $n++; endwhile; endif;?>
                    </ul>
                
                    <!-- Tab panes -->
                    <div class="tab-content" style="display: none">
                         <?php
                        
                        $m=1;
                        if( have_rows('physiotherapy_service') ):
                        while( have_rows('physiotherapy_service') ) : the_row();
                        
                        ?>
                        <div role="tabpanel" class="tab-pane fade show <?php if($m==1){ echo 'active';}?>" id="tab<?php echo $m;?>">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="serviceImage">
                                        <img src="<?php echo get_sub_field('Service_Image_s');?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="serviceDetails">
                                        <h3><?php echo get_sub_field('service_title_s');?></h3>
                                        <p><?php echo get_sub_field('service_contebt');?></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                    <div class="serviceDetailsList">
                                        <ul>
                                             <?php
                        
                       
                        if( have_rows('service_tags') ):
                        while( have_rows('service_tags') ) : the_row();
                        
                        ?>
                                            <li><?php echo get_sub_field('tags_name');?></li>
                                             <?php  endwhile; endif;?>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <?php  $m++;endwhile; endif;?>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT SECTION END -->
        
     
     
        
    </section> 
<?php get_footer(); ?>