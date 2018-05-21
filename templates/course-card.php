<article <?php post_class('courseCard')?>>
  <figure class="courseCard__thumbnail">
    <?php the_post_thumbnail('card-size'); ?>
  </figure>
  <div class="courseCard__info">
    <h2 class="courseCard__title"><?php the_title(); ?></h2>
    <a href="/contact" class="btn">Get a quote</a>
  </div>
</article>
