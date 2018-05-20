<?php
/*
  Template Name: Home Dublin school
*/
get_header(); ?>
  <?php
    while ( have_posts() ) : the_post();
      get_template_part( 'templates/slide', 'banner' );
    endwhile;
  ?>
  <section class="courses">
    <h2 class="courses__title">Our Courses</h2>
    <div class="coursesList">
    <?php
      $args = array( 'post_type' => 'course', 'posts_per_page' => 10 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
        get_template_part( 'templates/course', 'card' );
      endwhile; ?>
    </div>
  </section>
<?php get_footer(); ?>