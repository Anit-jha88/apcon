    <!-- FOOTER START -->
    <footer>
        <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="footer-col">
                    <figure class="footer-logo"><img src="<?php echo get_template_directory_uri();?>/assets/images/apcon-white-logo.png" alt=""></figure>  
                    <div class="span-locations">
                       <p class="address"><?php echo get_field('faddress','option');?></p> 

                       <p class="phone"> <?php echo get_field('fphone','option');?></p> 
                       <p class="email"> <?php echo get_field('femail','option');?></p> 
                    </div>
                    <hr class="divider">

                    <div class="fb-social">
                        <div class="span-fb-social"><a href="<?php echo get_field('facebook_link','option');?>" target="_blank"><i class="fab fa-facebook-f"></i></a></div>
                        <div class="span-fb-social"><a href="<?php echo get_field('twitter_link','option');?>" target="_blank"><i class="fab fa-twitter"></i></a></div>
                        <div class="span-fb-social"><a href="<?php echo get_field('linklind_link','option');?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></div>
                        <div class="span-fb-social last-box"><a href="<?php echo get_field('instagram_link','option');?>" target="_blank"><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
              </div>
              <div class="col-lg-4">
                  <div class="footer-col footer-center-col">
                    <h4>Popular Sites</h4>
                    <div class="fl-left">
                      <ul>
                          <?php
                                               wp_nav_menu( array(
                                                   'menu_class'=>'menu',
                                                  'menu_id' => 'menu-useful-links',
                                                   'container' => 'ul',
                                                 'menu' => 'Footer menu', // Replace 'your-menu-slug' with the actual menu slug
                       
                                                ) );
                                               ?>
                      </ul>
                    </div>
                    <!--<div class="fl-right">-->
                    <!--  <ul>-->
                    <!--    <li><a href="#.">Our Team</a></li>  -->
                    <!--      <li><a href="#.">Blogs</a></li>  -->
                    <!--      <li><a href="#.">Contact Us</a></li>  -->
                    <!--      <li><a href="#.">FAQ</a></li> -->
                    <!--  </ul>-->
                    <!--</div>-->
                 
                  </div>
              </div>
              <div class="col-lg-4">
                <div class="footer-col">
                  <h4>Recent Posts</h4>
                  <div class="media-post">
                <?php echo get_field('fmap','option');?>
                  </div>
                  <hr class="divider">  
                 
               
                </div>
              </div>
            </div>
            <hr class="divider">
            <div class="footer-bottom">
                <div class="fb-copyright">
                    <p>© 2024 Apcon Wellness All rights reserved. | Developed By <a href="#.">MKS Technosoft</a></p>
                </div>
              
                <div class="fb-social termCo">
                    <div class="span-fb-social"><a href="#">Terms & Conditions </a></div>
                    <div class="span-fb-social"><a href="#">Privacy Policy</a></div>
                    <div class="span-fb-social"><a href="#">Sitemap</a></div>
                   
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->
    
    <!-- SCROLL TOP -->
    <a href="#0" class="cd-top">Top</a>

   
<?php wp_footer(); ?>
<script>
        $("#navigation1").fixed();
    </script>

   
     <script src="js/rev-slider.js"></script>
</body>
</html>
