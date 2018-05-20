<article <?php post_class('courseCard')?>>
  <figure>
    <?php the_post_thumbnail(); ?>
  </figure>
  <h2 class="courseCard_title"><?php the_title(); ?></h2>
  <div class="courseCard__content"><?php the_content(); ?></div>
</article>