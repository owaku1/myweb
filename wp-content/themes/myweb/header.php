<?php
/**
 * Hlavička šablony
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container header-inner">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
      <?php
      // Pokud je nastaveno logo přes „Vzhled > Přizpůsobit > Identita webu“
      if (function_exists('the_custom_logo') && has_custom_logo()) {
          the_custom_logo();
      } else {
          bloginfo('name');
      }
      ?>
    </a>

    <nav class="main-nav">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'menu',
        'fallback_cb'    => function () {
            echo '<ul class="menu">
                    <li><a href="#o-nas">O nás</a></li>
                    <li><a href="#sluzby">Služby</a></li>
                    <li><a href="#galerie">Galerie</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>
                  </ul>';
        }
      ]);
      ?>
    </nav>
  </div>
</header>
