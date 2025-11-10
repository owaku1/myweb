<?php
/** Header s logem, menu a funkčním hamburgerem pro mobily */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header" role="banner">
  <div class="container header-inner">
    <!-- Logo -->
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
      <?php
      if (has_custom_logo()) {
        the_custom_logo();
      } else {
        echo '<span class="site-title">'.esc_html(get_bloginfo('name')).'</span>';
      }
      ?>
    </a>

    <!-- Hamburger (viditelný jen na mobilu) -->
    <button class="nav-toggle" id="navToggle" aria-label="Otevřít menu" aria-controls="primary-nav" aria-expanded="false">
      <span class="nav-toggle-bar"></span>
      <span class="nav-toggle-bar"></span>
      <span class="nav-toggle-bar"></span>
    </button>

    <!-- Menu -->
    <nav class="main-nav" id="primary-nav" role="navigation" aria-label="Hlavní menu">
      <?php
      $menu_html = wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'menu',
        'fallback_cb'    => false,
        'echo'           => false,
      ]);

      if (empty($menu_html) || trim(strip_tags($menu_html)) === '') {
        echo '<ul class="menu">
                <li><a href="#o-nas">O nás</a></li>
                <li><a href="#sluzby">Služby</a></li>
                <li><a href="#galerie">Galerie</a></li>
                <li><a href="#kontakt">Kontakt</a></li>
              </ul>';
      } else {
        echo $menu_html;
      }
      ?>
    </nav>
  </div>
</header>
