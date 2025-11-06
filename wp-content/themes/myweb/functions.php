<?php
// Základní podpora šablony
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    register_nav_menus([
        'primary' => __('Hlavní menu', 'moje-onepage')
    ]);
});

// Načtení stylů a skriptů
add_action('wp_enqueue_scripts', function () {
    // Hlavní CSS (do složky /style/main.css)
    wp_enqueue_style('moje-main', get_template_directory_uri() . '/style/main.css', [], '1.0');
    // Hladké skrolování a aktivní kotvy (do /script/main.js)
    wp_enqueue_script('moje-main', get_template_directory_uri() . '/script/main.js', [], '1.0', true);
});

// Customizer – výběr stránek pro sekce + URL iframe
add_action('customize_register', function ($wp_customize) {

    // Sekce OnePage
    $wp_customize->add_section('moje_onepage', [
        'title'       => __('OnePage obsah', 'moje-onepage'),
        'description' => __('Zvol stránky, které se načtou do jednotlivých sekcí, a nastav URL pro iframe.', 'moje-onepage'),
        'priority'    => 30,
    ]);

    // Helper pro přidání ovládacího prvku "vyber stránku"
    $add_page_setting = function($id, $label) use ($wp_customize) {
        $wp_customize->add_setting($id, [
            'default'           => 0,
            'sanitize_callback' => 'absint'
        ]);
        $wp_customize->add_control($id, [
            'label'   => $label,
            'section' => 'moje_onepage',
            'type'    => 'dropdown-pages'
        ]);
    };

    $add_page_setting('moje_about_page',   __('Stránka „O nás“', 'moje-onepage'));
    $add_page_setting('moje_services_page',__('Stránka „Služby/Projekty“', 'moje-onepage'));
    $add_page_setting('moje_gallery_page', __('Stránka „Galerie/Reference“', 'moje-onepage'));

    // Iframe URL (např. Google Mapy nebo jiný embed)
    $wp_customize->add_setting('moje_iframe_url', [
        'default'           => '',
        'sanitize_callback' => function($url){
            // Povolit jen bezpečné URL
            return esc_url_raw($url);
        }
    ]);
    $wp_customize->add_control('moje_iframe_url', [
        'label'       => __('URL pro iframe (mapa, apod.)', 'moje-onepage'),
        'description' => __('Vlož celou URL (např. Google Maps Embed URL).', 'moje-onepage'),
        'section'     => 'moje_onepage',
        'type'        => 'url'
    ]);
});
