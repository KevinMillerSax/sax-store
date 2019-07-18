<?php

function pageBanner($args = NULL) {
  if (!$args['title']) {
    $args['title'] = get_the_title();
  }
  if (!$args['photo']) {
    if (get_field('page_banner_background_image')) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['page-banner'];
    } else {
      $args['photo'] = get_theme_file_uri('images/sax-banner3.jpg');
    }
  }
  ?>
  <div class="single-page-banner" style="background-image: url(<?php echo $args['photo'];?>);">
    <h1> <?php echo $args['title'];?> </h1>
  </div>
<?php }


function kenny_files() {
  wp_enqueue_script('kenny-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
  wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Barlow+Condensed&display=swap');
  wp_enqueue_style('google-font-two', '//fonts.googleapis.com/css?family=PT+Sans&display=swap');

  wp_enqueue_style('kenny_main_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'kenny_files');


function kenny_features() {
  //add_theme_support( 'woocommerce' );
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('contestant-photo', 400, 500, false);
  add_image_size('page-banner', 1500, 350, true);
}
add_action('after_setup_theme', 'kenny_features');

//Enqueue the Dashicons script
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
wp_enqueue_style( 'dashicons' );
}


?>