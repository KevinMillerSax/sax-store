<?php get_header(); ?>


  <?php pageBanner(); ?>
  <div class="content-container"> 

    <?php
  
  $today = date('Ymd');
    $pastGiveaways = new WP_Query(array(
      'posts_per_page' => 3,
      'post_type' => 'giveaway',
      'meta_key' => 'giveaway_date',
      'orderby' => 'meta_value_num',
      'order' => 'ASC',
      'meta_query' => array(
        array(
          'key' =>'giveaway_date',
          'compare' => '<=',
          'value' => $today,
          'type' => 'numeric'
        )
      ),
    ));
    
    while($pastGiveaways->have_posts()) {
      $pastGiveaways->the_post(); ?>

      <!-- format the html and data below -->
      <h3><?php the_title();?> </h3>
      <h4> End Date: <?php 
        $pastGiveawayDate = new DateTime(get_field('giveaway_date'));
        echo $pastGiveawayDate->format('M'); echo ' ';
        echo $pastGiveawayDate->format('d'); echo ', ';
        echo $pastGiveawayDate->format('Y');
      ?>
      </h4><?php if(has_excerpt()) {
        echo get_the_excerpt();
      } else {
        echo wp_trim_words(get_the_content(), 25); 
      }?>
      
      <hr>

    <?php }
    ?>
  
  </div>
