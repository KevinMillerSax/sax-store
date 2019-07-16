<?php get_header(); ?>

<?php while(have_posts()) {
  the_post();
?>

<div class="single-page-banner" style="background-image: url(<?php echo get_theme_file_uri('images/sax-banner3.jpg');?>)">
    <h1> <?php echo get_the_title();?> </h1>
</div>


  <div class="content-container"> 

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
          <h3><?php the_title(); ?></h3>
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