<?php get_header(); ?>
  <section>
    <h2>Welcome to Dublin English</h2>
    <h3>Maximum 4 students per class</h3>
  </section>
  <section>
    <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <div class="content"><?php the_content(); ?></div>
        <?php endwhile; ?>
    <?php endif; ?>
  </section>
<!-- Elysian Education : modeltheme -->
<?php get_footer(); ?>