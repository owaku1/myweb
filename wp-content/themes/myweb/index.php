<?php
get_header();

// Získání ID stránek ze Customizeru
$about_id   = absint(get_theme_mod('moje_about_page', 0));
$services_id= absint(get_theme_mod('moje_services_page', 0));
$gallery_id = absint(get_theme_mod('moje_gallery_page', 0));
$iframe_url = esc_url(get_theme_mod('moje_iframe_url', ''));

// Helper pro výpis obsahu z vybrané stránky
function moje_render_page_section($page_id, $section_id, $default_title){
    if (!$page_id) return;
    $post = get_post($page_id);
    if (!$post) return;

    echo '<section id="'.esc_attr($section_id).'" class="section">';
    echo '<div class="container">';
    echo '<h2>'.esc_html(get_the_title($post)).'</h2>';
    echo '<div class="content">';
    // bezpečný obsah stránky
    echo apply_filters('the_content', $post->post_content);
    echo '</div>';
    echo '</div>';
    echo '</section>';
}
?>

<main>
  <?php
    // O nás
    moje_render_page_section($about_id, 'o-nas', __('O nás','moje-onepage'));

    // Služby / Projekty
    moje_render_page_section($services_id, 'sluzby', __('Služby','moje-onepage'));

    // Galerie / Reference
    moje_render_page_section($gallery_id, 'galerie', __('Galerie','moje-onepage'));
  ?>

  <?php if ($iframe_url) : ?>
  <section id="mapa" class="section section-iframe">
    <div class="container">
      <h2><?php _e('Mapa / Iframe', 'moje-onepage'); ?></h2>
      <div class="iframe-wrap">
        <iframe src="<?php echo $iframe_url; ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
      </div>
      <p class="iframe-hint"><?php _e('URL tohoto iframe je spravováno v Přizpůsobit → OnePage obsah.', 'moje-onepage'); ?></p>
    </div>
  </section>
  <?php endif; ?>
</main>

<?php
get_footer();
