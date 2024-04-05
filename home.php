<?php get_header(); ?>
  <div class="container">
    <h1 class="title-page">Conoce más de <span>San Andrés</span></h1>
    <div class="blog-container">
      <?php
        while( have_posts() ) : the_post();
        get_template_part('template-parts/blog-loop', 'loop');
        endwhile;
      ?>
    </div>
    <?php load_more_button() ?>
  </div>
<?php get_footer(); ?>