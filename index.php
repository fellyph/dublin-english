<?php get_header(); ?>
  <section class="posts container">
    <div class="post__list">
    <?php
      while ( have_posts() ) : the_post();
        get_template_part( 'templates/post','item');
      endwhile; ?>
    </div>
  </section>
<?php get_footer(); ?>