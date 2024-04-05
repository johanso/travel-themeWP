<?php get_header(); ?>
  <div class="container post">
    <div class="container__inner">
      <div class="post__content">
        <?php get_template_part('template-parts/post'); ?>
      </div>
      <sidebar class="post__sidebar">
        <?php get_sidebar(); ?>
      </sidebar>
    </div>
  </div>
<?php get_footer(); ?>