<?php get_header(); ?>


  <?php pageBanner(); ?>
  <div class="content-container"> 
    <div class="giveaway-buttons">
      <a id="arrow" class="myButton" href="<?php echo site_url('giveaways');?>"><i class="fas fa-arrow-left"></i>  Back to All Giveaways</a>
    </div>

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

    <div class="giveaway-card">
      <div class="giveaway-title-date">
        <h3><?php the_title();?> </h3>
        <h4> End Date: <?php 
          $pastGiveawayDate = new DateTime(get_field('giveaway_date'));
          echo $pastGiveawayDate->format('M'); echo ' ';
          echo $pastGiveawayDate->format('d'); echo ', ';
          echo $pastGiveawayDate->format('Y');
        ?>
        </h4>
      </div>
        
        <?php if(has_excerpt()) {
          echo get_the_excerpt();
        } else {
          echo wp_trim_words(get_the_content(), 25); 
        }?>
    </div>
        
        <hr>

    <?php }
    ?>
  
  </div>
