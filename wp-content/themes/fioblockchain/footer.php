<footer>
  <div class="container white-bg">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="purple-title"><i class="fa fa-caret-right" aria-hidden="true"></i> Latest FIO News</h3>
      </div>
      <?php  $args = array(
                    'post_type'   => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,

                   );
       $news = new WP_Query( $args );
                   if( $news->have_posts() ) :
                     while( $news->have_posts() ) :
                     $news->the_post();
      ?>
      <div class="col-lg-4">
        <div class="news-box">
          <a href="<?php the_permalink(); ?>">
            <?php if(get_the_post_thumbnail()): ?>
            <div class="blog-single-bg" style="background: url(<?php the_post_thumbnail_url(); ?>);"></div>
            <?php else: ?>
            <div class="blog-single-bg"></div>
            <?php endif; ?>
            <div class="blog-single-content">
              <h5 class="cyan-title"><?php the_title(); ?></h5>
              <div class="title-decorator"></div>
              <p><?php 
                            $string = get_the_content();
                            if (strlen($string) > 200) {
                            $string = substr($string, 0, 200) . "..."; 
                            echo strip_tags($string); }else{
                                echo strip_tags($string);
                            } ?></p>
            </div>
          </a>
        </div>
      </div>
      <?php
                    endwhile;
                    wp_reset_postdata();
                     endif;
          ?>
     
    </div>
   
  </div>
  

</footer>
<div class="sub-footer-section">
  <div class="container">
     <div class="row sub-footer">
      <div class="col-lg-4">
                <?php  $url = home_url(); ?>
          <a class="navbar-brand" href="<?php echo $url; ?>">
           <?php  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                  if ( has_custom_logo() ) {
                          echo '<img  alt="Logo" src="'. esc_url( $logo[0] ) .'">';
                  } else {
                          echo  get_bloginfo( 'name' );
                  } ?>
           </a>
        <p><i class="fa fa-location-arrow" aria-hidden="true"></i> 123 Anycity, USA</p>
      </div>
       
       <div class="col-lg-4">
                      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> false,  'menu_class' => 'footer-nav' ) ); ?>

       </div>
       
       <div class="col-lg-4">
         <ul class="social-footer list-inline text-center">
  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
  <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
  <li class="list-inline-item"><a href="#"><i class="fa fa-medium" aria-hidden="true"></i></a></li>
  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fa fa-reddit" aria-hidden="true"></i></a></li>
      <li class="list-inline-item"><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
</ul>
       </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>