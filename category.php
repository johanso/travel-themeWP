<?php get_header(); ?>
  <?php $category = get_queried_object(); ?>
  <div class="container">
    <h1 class="title-page">Más Sobre: <span><?php echo $category->name; ?></span></h1>
    <p><?php echo $category->description; ?></p>
    <div class="blog-container">
      <?php
        while( have_posts() ) : the_post();
        get_template_part('template-parts/blog-loop', 'loop');
        endwhile;
      ?>
    </div>
  </div>
<?php get_footer(); ?>