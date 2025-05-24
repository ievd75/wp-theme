<?php get_header(); ?>

<header class="site-header">
  <h1 class="site-title"><?php bloginfo('name'); ?></h1>
</header>

<?php if (has_post_thumbnail()) : ?>
  <section class="home-photo">
    <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
  </section>
<?php endif; ?>

<nav class="main-nav">
  <?php
  wp_nav_menu([
    'theme_location' => 'primary',
    'menu_class' => 'menu',
  ]);
  ?>
</nav>

<main class="page-content">
  <?php
  while (have_posts()) : the_post();
      the_content();
  endwhile;
  ?>
</main>

<?php get_footer(); ?>