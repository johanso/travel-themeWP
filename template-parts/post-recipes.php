<?php while( have_posts() ) : the_post(); ?>  

  <div class="container recipes">
    <div class="container__inner">
      <?php the_title('<h1 class="post__title">', '</h1>'); ?>

      <div class="post_header-breadcrumb">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="container__inner">
      <?php the_content(); ?>
      <?php the_category(''); ?>
    </div>
  </div>

  <?php endwhile; ?>

  <div class="container">
    <div class="container__inner">
      <?php do_action('wpra_lite_custom_display'); ?>
    </div>
  </div>

