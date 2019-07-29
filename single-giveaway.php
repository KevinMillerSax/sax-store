

<?php get_header(); ?>

<?php while(have_posts()) {
  the_post();
?>

<?php $eventDate = get_field("giveaway_date", false, false);
  $eventDate = new DateTime($eventDate);

  $image = get_field("giveaway_picture");
    $url = $image['url'];
    $title = $image['title'];
    $alt = $image['alt'];
    $caption = $image['caption'];

    // thumbnail
    $size = 'large';
    $thumb = $image['sizes'][ $size ];
    $width = $image['sizes'][ $size . '-width' ];
    $height = $image['sizes'][ $size . '-height' ];

?>


  <?php pageBanner(); ?>
  
  <div class="content-container"> 
    <h2>Giveaway Ends On: <?php echo $eventDate->format('M j, Y'); ?> </h2> 
    <div class="giveaway-image-content">
      <?php if(!empty($image)){ ?>
        <img class="giveaway-image" src="<?php echo $url;;?>" alt="image" width="30%"/>
        <div class="giveaway-content-email">
          <?php the_content(); ?>
          <h2> Send photo to: rheuben.akge@gmail.com </h2>
        </div>
      <?php } else { ?>
        <div class="giveaway-content-email">
          <?php the_content(); ?>
          <h2> Send photo to: rheuben.akge@gmail.com </h2>
        </div>
      <?php }; ?>
    </div>
    
    <h2> Our Contestants: </h2>
    <?php
    $relatedContestants = new WP_Query(array(
      'posts_per_page' => -1,
      'post_type' => 'contestant',
      'orderby' => 'title',
      'order' => 'ASC',
      'meta_query' => array(
        array(
          'key' =>'related_giveaway',
          'compare' => 'LIKE',
          'value' => '"' . get_the_ID() . '"'
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
<?php get_footer();?>