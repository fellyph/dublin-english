<?php get_header(); ?>
  <section class="banner">
    <div class="banner__column">
      <h2 class="banner__title">Welcome to Dublin English</h2>
      <h3 class="banner_subtitle">Maximum 4 students per class</h3>
    </div>
    <div>
      <form>
      </form>
    </div>
  </section>

  <div class="courses">
  <?php
    $args = array( 'post_type' => 'course', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
      get_template_part( 'templates/course', 'card' );
    endwhile; ?>
  </div>
<?php get_footer(); ?>