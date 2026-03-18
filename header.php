<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- NAVIGATION -->
  <nav class="nav">
    <div class="nav-inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
        <?php bloginfo('name'); ?>
      </a>
      <?php
        // This pulls the menu you create in WordPress admin
        // (Appearance > Menus). The 'container' and 'items_wrap'
        // settings make it output clean HTML that matches our CSS.
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'nav-links',
          'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
          'fallback_cb'    => false,
        ));
      ?>
    </div>
  </nav>
