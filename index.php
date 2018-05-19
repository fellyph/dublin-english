<?php get_header(); ?>
  <section>
    <h2>Welcome to Dublin English</h2>
    <h3>Maximum 4 students per class</h3>
  </section>

  <div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
      <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
              <div class="mdc-layout-grid__cell">
                <h2><?php the_title(); ?></h2>
                <div class="content"><?php the_content(); ?></div>
              </div>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

<!-- Elysian Education : modeltheme -->
<?php get_footer(); ?>