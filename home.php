<?php get_header(); ?>



  <?php pageBanner(array('title' => 'Blog')); ?>

  <div class="content-container">
    <?php
      while(have_posts()) {
        the_post(); ?>
        <div class="blog-card">
          <div class="blog-card-header">
            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            <p>Posted by <?php the_author();?> on <?php the_date();?></p>
          </div>
          <?php the_excerpt();?>
          <p class="myButton blog-button"><a href="<?php the_permalink();?>">Continue Reading</a></p>
        </div>

     <?php }
     echo paginate_links();
    ?>

  </div>


<?php get_footer(); ?>
