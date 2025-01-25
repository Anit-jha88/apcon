<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
   <section>
      <div class="container ptb-60">
          <div class="row">    
            <!-- BLOG CONTENT START -->
            <div class="col-lg-8 col-xl-9 side-posts-right">
                <div class="blog-content">
                  <figure class="bg-post-img"><?php $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
                       <img src="<?php echo $image[0];?>" class="img-fluid" alt="medicate"></figure>
                  <h2><?php the_title();?></h2>
                  <div class="post-details">
                      <ul>
                        
                          <li><a href="#.">Admin</a></li>
                          <li class="date"><?php echo get_the_date('d M Y');?></li>
                          <li class="comments"><a href="#.">22 Comments</a></li>
                      </ul>
                  </div>
                   <?php the_content();?>
                  </div>
                
               
            </div>
            <!-- BLOG CONTENT END -->
              
            <!-- BLOG SIDEBAR START -->
            <div class="col-lg-4 col-xl-3 space-break">
                <aside>
                  <div class="form-group blog-search">
                       <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                      <span class="fa fa-search form-control-feedback"></span>
                      <input type="text" value="<?php echo get_search_query(); ?>" name="s" class="form-control" placeholder="Search">
                      </form>
                    </div>
                    <div class="aside-list-group">
                        <h4>Categorie</h4>
                      <ul class="list-group list-group-flush">
                          <?php
                                // Get parent categories
                                $parent_categories = get_categories(array(
                                'parent' => 0 ,
                                'hide_empty' => false
                                ));
                                
                                // Loop through parent categories
                                foreach ($parent_categories as $parent_category) {
                                // Query to count posts in the current category
                                $category_post_count = new WP_Query(array(
                                'category__in' => array($parent_category->term_id),
                                'posts_per_page' => -1, // Get all posts
                                'post_status' => 'publish' // Only count published posts
                                ));
                                
                                // Output category name and post count
                                echo '<li class="list-group-item"><a href="' . esc_url(get_category_link($parent_category->term_id)) . '">' . $parent_category->name . ' </a></li>';
                                
                                // Reset post data
                                wp_reset_postdata();
                                }
                                ?>
                      </ul>
                    </div>
                    <div class="aside-related-posts">
                      <h4>Related Posts</h4>
                      <div class="aside-related-posts">
                          <?php

                        $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID) ) );
                        foreach( $related as $post ) {
                            $image1=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
                        setup_postdata($post); 
                        ?>
                        <div class="media">
                            <a href="<?php the_permalink() ?>"><img src="<?php echo $image1[0];?>" class="mr-3" alt="..."></a> 
                            <div class="media-body">
                              <h5 class="mt-0"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                              <p><?php echo get_the_date('d M Y');?></p>
                            </div>
                        </div>
                      <?php } wp_reset_postdata(); ?>
                     </div>
                    </div>
                
                </aside>
            </div>
            <!-- BLOG SIDEBAR END -->
          </div>
      </div>

  </section>
   
   
    
  
<?php get_footer(); ?>
