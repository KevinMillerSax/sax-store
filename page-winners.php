<?php get_header(); ?>

<?php while(have_posts()) {
  the_post();
?>

<?php pageBanner(); ?>


  <div class="content-container"> 
    <div class="giveaway-buttons">
      <a id="arrow" class="myButton" href="<?php echo site_url('giveaways');?>"><i class="fas fa-arrow-left"></i>  Back to All Giveaways</a>
    </div>
    <?php
    $relatedContestants = new WP_Query(array(
      'posts_per_page' => -1,
      'post_type' => 'contestant',
      'orderby' => 'title',
      'order' => 'ASC',
      'meta_query' => array(
        array(
          'key' =>'winner',
          'compare' => '=',
          'value' => 'Yes'
        )
      ),
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
    ?>


  </div>




  <?php } ?>
<?php get_footer(); ?>