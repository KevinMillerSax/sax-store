
<?php get_header(); ?>
<?php
while(have_posts()) {
  the_post(); ?>

  <?php pageBanner(); ?>

  <div class="content-container"> 
    <?php the_content(); ?>
  
  </div>

<?php } ?>
<?php get_footer(); ?>
