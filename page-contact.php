

<?php get_header(); ?>
<?php
while(have_posts()) {
  the_post(); ?>

  <?php pageBanner(); ?>

  <div class="content-container"> 
    <div class="giveaway-card">
      <?php the_content();?> 
    </div>
  </div>

<?php } ?>
<?php get_footer(); ?>