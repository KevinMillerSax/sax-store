<?php get_header(); ?>


  <?php pageBanner(); ?>
  <div class="content-container"> 
    

    <?php
    $today = date('Ymd');
    $giveaways = new WP_Query(array(
      'posts_per_page' => -1,
      'post_type' => 'giveaway',
      'meta_key' => 'giveaway_date',
      'orderby' => 'meta_value_num',
      'order' => 'ASC',
      'meta_query' => array(
        array(
          'key' =>'giveaway_date',
          'compare' => '>=',
          'value' => $today,
          'type' => 'numeric'
        )
      ),
    ));
    ?>

    <div class="giveaway-buttons">
        <a class="myButton" href="<?php echo site_url('winners');?>">Click Here to See Our Winners</a>
        <a class="myButton" href="<?php echo site_url('past-giveaways')?>"> Click Here to See Our Past Giveaways</a>
    </div>

    <?php
    while($giveaways->have_posts()) {
      $giveaways->the_post(); ?>
      
      <!-- format the html and data below -->
      <div class="giveaway-card">
        <div class="giveaway-title-date">
          <h2><?php the_title();?> </h2>
          <h4> End Date: <?php 
            $giveawayDate = new DateTime(get_field('giveaway_date'));
            echo $giveawayDate->format('M'); echo ' ';
            echo $giveawayDate->format('d'); echo ', ';
            echo $giveawayDate->format('Y');
          ?>
          </h4>
        </div>
        <div class="giveaway-excerpt-button">
          <?php if(has_excerpt()) {
            echo get_the_excerpt();
          } else {
            echo wp_trim_words(get_the_content(), 25); 
          }?>
            
          <a class="myButton" href="<?php the_permalink();?>"> More Info </a>
        </div>
      </div>
      <hr>

    <?php }
    wp_reset_postdata();
    ?>

<h2> Our Contestants: </h2>
    <?php
    $relatedContestants = new WP_Query(array(
      'paged' => get_query_var('paged', 1),
      'posts_per_page' => 8,
      'post_type' => 'contestant',
      'orderby' => 'title',
      'order' => 'date',
    ));
   
    while($relatedContestants->have_posts()) {
      $relatedContestants->the_post(); ?>
        <div class="contestant-card">
          <div class="contestant-card-header">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="contestant-image-content">
            <img class="contestant-image" src="<?php the_post_thumbnail_url('contestant-photo');?>">
            <p><?php the_content(); ?></p>
          </div>
        </div>
    <?php }
   echo paginate_links(array(
    'total' => $relatedContestants->max_num_pages
));
    ?>
    
  </div>


<?php get_footer(); ?>