<article <?php post_class('courseCard')?>>
  <figure class="courseCard__thumbnail">
    <?php the_post_thumbnail('card-size'); ?>
  </figure>
  <div class="courseCard__info">
    <h2 class="courseCard__title"><?php the_title(); ?></h2>
  </div>
  <footer class="courseCard__footer">
      <a href="/contact" class="btn">Get a quote</a>
      <button class="btn--share" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" data-text="<?php echo wp_strip_all_tags(get_the_excerpt()); ?>">share</button>
  </footer>
</article>
