<?php get_header(); ?>
  <div class="post">

    <div class="post__content">
      <?php $post = $wp_query->post;

        if ( in_category('gastronomia') ) {
          get_template_part('template-parts/post-recipes');
        } else {
          get_template_part('template-parts/post');
        }
      ?>
    </div>

    <div class="container">
      <div class="container__inner">
        <sidebar class="post__sidebar">
          <?php get_sidebar(); ?>
        </sidebar>
      </div>
    </div>

  </div>
<?php get_footer(); ?>