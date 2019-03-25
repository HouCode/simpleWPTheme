<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header sticky-top">
  <nav class="navbar navbar-main-menu navbar-expand-lg">
    <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <?php /* Primary navigation */
    wp_nav_menu(array(
        'menu' => 'main-menu',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'nav',
  //Process nav menu using our custom nav walker
        'walker' => new wp_bootstrap_navwalker()
    ));
    ?>
  </div>
</nav>
    
</header>
