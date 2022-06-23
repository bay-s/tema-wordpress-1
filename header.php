<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN WORDPRESS</title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?> >

<header class="header-top">
<nav class="nav-top">
<div class="header-title">
    <?php if(function_exists('the_custom_logo')) : ?> 
            <?php 
				 $custom_logo_id = get_theme_mod('custom_logo');
				 $logo = wp_get_attachment_image_src($custom_logo_id);		  
			?>
      <a href="<?php bloginfo('url'); ?>">
	    <img class="my-logo" src="<?php echo $logo[0] ?>"  alt="logo" >
      </a>
	  <?php endif ; ?> 
<!-- END IMAGE CHECK -->
<div class="header-top-title">
<h2 class="title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h2>
<p class="site-description"><?php bloginfo('description') ?></p>
</div>
    </div>
</nav>
</header>

<header class="header"  id="my-header" >
<nav class="navbar is-align-items-center is-transparent">
<div class="navbar-brand  is-align-items-center">
<div class="my-dropdown">
<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
<div class="search-left">
<?php get_search_form(); ?>
</div>
</div>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <div class="navbar-dropdown">
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </div>
      </div>
    </div>

    <div class="navbar-end">
    <?php get_search_form(); ?>
    </div>
  </div>
  <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
</nav>
</header>




<?php

/*
<header class="header"  id="my-header" >
<nav class="navbar is-align-items-center is-transparent">
       <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
       <?php get_search_form(); ?>
</nav>
</header>