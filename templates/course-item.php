<article <?php post_class('course__item')?>>
  <figure class="post__thumbnail">
    <?php the_post_thumbnail('card-size'); ?>
  </figure>
    <h2 class="post__title"><?php the_title(); ?></h2>
    <div class="post__content">
      <?php the_content(); ?>
    </div>
</article>
