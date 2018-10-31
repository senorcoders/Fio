<?php get_header(); ?>
<div class="container" style="padding: 60px 15px;">
      <div class="row">
        <div class="col-md-12">
            <?php if (have_posts()) : ?>
           <?php while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
                      
           <?php endwhile; ?>
         <?php else : ?>
                <h6 class="center">Not Found</h6>
                <p class="center">Sorry, but you are looking for something that isn't here.</p>
          <?php endif; ?>
        </div>
      </div>
  </div>
<?php get_footer(); ?>