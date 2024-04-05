<article class="blog-card">
  
  <div class="blog-card__categories">
    <?php the_category(''); ?>
  </div>
  
  <a href="<?php the_permalink(); ?>">
    <?php if( has_post_thumbnail() ) : ?>
      <div class="blog-card__image">
        
          <?php the_post_thumbnail(); ?>
        </a>
      </div>
    <?php endif; ?>

    <h2 class="blog-card__title">
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
        </svg>
      </a>
    </h2>
  </a>
</article>