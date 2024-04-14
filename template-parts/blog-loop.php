<article class="blog-card">
  
  <div class="blog-card__categories">
    <?php $category = get_the_category(); ?>
    <ul>
      <?php foreach($category as $cat) : ?>
        <li>
          <a href="<?php echo get_category_link($cat->term_id); ?>" class="blog-card__category <?php echo $cat->slug; ?>">
            <?php echo $cat->name; ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>    
  </div>
  
  <a href="<?php the_permalink(); ?>">
    <?php if( has_post_thumbnail() ) : ?>
      <div class="blog-card__image">
        
          <?php the_post_thumbnail(); ?>
        </a>
      </div>
    <?php endif; ?>

    <h2 class="blog-card__title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
  </a>
</article>