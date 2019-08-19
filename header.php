<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_enqueue_script("jquery"); ?> 
    <?php wp_head(); ?>  
</head>
  
<header class="navbar" >
    <div>
      <div id="logo-tagline">
        <h1><a href="<?php echo site_url()?>"><?php echo get_bloginfo('title');?></a></h1>
        <p><?php echo get_bloginfo('description'); ?></p>
      </div>
      <div class="search-nav">
        <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
        <nav class="main-navigation">
         
            <?php 
              wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation',
              ));
            ?>
         
          <!-- <ul> hard coded menu
            <li <?php if(is_page('shop')) echo 'class="active"'; ?>><a href="<?php echo site_url('/shop'); ?>">Store</li> </a>
            <li <?php if(is_page('about')) echo 'class="active"';?>><a href="<?php echo site_url('/about'); ?>">About</li> </a>
            <li <?php if(is_page('contact')) echo 'class="active"';?>><a href="<?php echo site_url('/contact'); ?>">Contact</li> </a>
            <li <?php if(is_page('giveaways') OR get_post_type()=='giveaway' OR is_page('winners') OR is_page('past-giveaways')) echo 'class="active"';?>><a href="<?php echo site_url('/giveaways'); ?>">Giveaways</li> </a>
            <li id="cart" <?php if(is_page('cart')) echo 'class="active"';?>><a href="<?php echo site_url('cart');?>">Cart</a></li> 
          </ul> -->
        </nav>
      </div>
    </div>
</header>

<header class="mobile-header">

  <h1><a href="<?php echo site_url()?>"><?php echo get_bloginfo('title');?></a></h1>
  <div class="mobile-search">
    <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
  </div>
  <i id="burger-nav" class="fas fa-bars fa-2x"></i>
    <div id="drop-menu" style="display:none">
      <?php 
        wp_nav_menu(array(
          'theme_location' => 'headerMenuLocation',
        ));
      ?>
    </div>
</header>

<body>
  
