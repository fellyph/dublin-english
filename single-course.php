<?php get_header(); ?>
  <section class="course container">
      <div class="course__content">
        <?php
          while ( have_posts() ) : the_post();
          get_template_part( 'templates/course','item');
          endwhile;
        ?>
      </div>
      <aside class="course__form">
          <?php echo do_shortcode('[contact-form-7 id="50" title="Get a quote"]') ?>
      </aside>
  </section>
<?php get_footer(); ?>