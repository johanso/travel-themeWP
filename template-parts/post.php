<?php 
  while( have_posts() ) : the_post();
    the_title('<h1 class="post__title">', '</h1>'); ?>

    <div class="post__metas">
      <div class="post-author">
        <img src="<?php echo get_avatar_url(get_the_author_meta('ID')) ?>" alt="Author: <?php echo get_the_author_meta('display_name') ?>">
        <?php echo get_the_author_meta('display_name') ?>
      </div>
      <div class="post-date">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
        </svg>
        <?php the_time('F j, Y') ?>
      </div>
      <!--?php the_category(''); ?-->
    </div>
  
    <!-- <div class="post__excerpt">
      <!?php the_excerpt(); ?>
    </div> -->
      
    <?php if( has_post_thumbnail() ) { the_post_thumbnail('full', array('class' => 'post__image')); } ?>
    
    <?php the_content(); ?>
    <?php the_category(''); ?>

  <?php endwhile; ?>
  
  <?php do_action('wpra_lite_custom_display'); ?>

