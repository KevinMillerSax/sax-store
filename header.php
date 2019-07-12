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
        <h1><a href="<?php echo site_url()?>">Kenny G Saxophones</a></h1>
        <p>Site tagline will go right here, but what if the tagline is long?</p>
      </div>
      <nav class="main-navigation">
        <ul>
          <li><a href="#">Store</li> </a>
          <li><a href="<?php echo site_url('/about'); ?>">About</li> </a>
          <li><a href="<?php echo site_url('/contact'); ?>">Contact</li> </a>
          <li><a href="<?php echo site_url('/giveaways'); ?>">Giveaways</li> </a>
        </ul>
      </nav>
    </div>
  </header>

<body>
  
