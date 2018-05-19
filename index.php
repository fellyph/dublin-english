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
      <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
              <div class="course__item">
                <h2 class="course__item_title"><?php the_title(); ?></h2>
                <div class="course__item__content"><?php the_content(); ?></div>
              </div>
          <?php endwhile; ?>
      <?php endif; ?>
  </div>
<?php get_footer(); ?>