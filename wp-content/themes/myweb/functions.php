<?php
// Aktivace loga a menu
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('custom-logo', [
    'height'      => 80,
    'width'       => 200,
    'flex-width'  => true,
    'flex-height' => true,
  ]);
  register_nav_menus([
    'primary' => __('Hlavní menu', 'moje-onepage'),
  ]);
});

// Načtení stylů a skriptů
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('moje-main', get_template_directory_uri() . '/style/main.css', [], filemtime(get_template_directory() . '/style/main.css'));
  wp_enqueue_script('moje-main', get_template_directory_uri() . '/script/main.js', [], filemtime(get_template_directory() . '/script/main.js'), true);
});
