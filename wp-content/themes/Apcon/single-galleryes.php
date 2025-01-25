<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();


?>
  <section>
        <!-- PROJECT GRID START -->
        <div class="container ptb-60">
           
            <div class="grid" id="kehl-grid">
                <div class="grid-sizer"></div>    
                <?php
                $post_id = get_the_ID(); // Replace with your post ID
                $gallery = get_field('gallerrry', $post_id);
                foreach ($gallery as $image) {
                ?>

                <div class="grid-box ">
                    <a class="image-popup-vertical-fit" href="<?php echo esc_url($image); ?>">
                        <div class="image-mask"></div>
                        <img src="<?php echo esc_url($image); ?>" alt="" />
                        <h3>View</h3>
                    </a>
               </div>
            
           <?php   } ?>
              
               
              
              
            </div>
        </div>
        <!-- PROJECT GRID END -->
    </section>
    
  
<?php get_footer(); ?>
