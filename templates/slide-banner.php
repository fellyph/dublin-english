<section class="banner" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)" >
  <article <?php post_class('banner__item')?>>
    <div class="banner__info">
      <h2 class="banner__title"><?php the_title(); ?></h2>
      <div class="banner__content"><?php the_excerpt(); ?></div>
      <a href="/contact" class="btn">Get a quote</a>
    </div>
  </article>
</section>