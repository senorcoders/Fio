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
<?php wp_footer(); ?>
</body>
</html>