<?php get_header(); ?>
<main class="page-wrap">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <div class="meta">
          <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
          · <?php the_category(', '); ?>
        </div>
        <div class="content"><?php the_content(); ?></div>
      </article>
    <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
