
<?php get_header(); ?>
<?php
while(have_posts()) {
  the_post(); ?>


  <div class="single-page-banner" style="background-image: url(<?php echo get_theme_file_uri('images/sax-banner3.jpg');?>)">
    <h1> <?php echo get_the_title();?> </h1>
  </div>
  <div class="content-container"> <?php the_content(); ?></div>

<?php } ?>
<?php get_footer(); ?>
