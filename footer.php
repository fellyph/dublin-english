  <footer class="footer">
    <div class="footer__widget footer__address">
      <h3>Contact</h3>
      <p>Dublin, Ireland</p>
      <p>test@dublin.school</p>
      <p>99 999 9999</p>
    </div>
    Dublin English School
    <div class="footer__widget footer__links">
    <?php wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu_class' => 'top-bar__menu') ); ?>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>