<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>  
</head>
  
<header>
    <div>
      <div id="logo-tagline">
        <h1><a href="<?php echo site_url()?>"><?php echo get_bloginfo('title');?></a></h1>
        <p><?php echo get_bloginfo('description'); ?></p>
      </div>
      <nav class="main-navigation">
        <ul>
          <li><a href="#">Store</li> </a>
          <li <?php if(is_page('about')) echo 'class="active"';?>><a href="<?php echo site_url('/about'); ?>">About</li> </a>
          <li <?php if(is_page('contact')) echo 'class="active"';?>><a href="<?php echo site_url('/contact'); ?>">Contact</li> </a>
          <li <?php if(is_page('giveaways') OR get_post_type()=='giveaway' OR is_page('winners') OR is_page('past-giveaways')) echo 'class="active"';?>><a href="<?php echo site_url('/giveaways'); ?>">Giveaways</li> </a>
        </ul>
      </nav>
    </div>
  </header>

<body>
  
