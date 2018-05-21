  <footer class="footer">
    <div class="footer__widget footer__address">
      <h3>Contact</h3>
      <p><a href="geo:53.3488143,-6.2630998?q=53.3488143,-6.2630998(Dublin English School)">Dublin, Ireland</a></p>
      <p><a href="mailto:test@dublin.school">test@dublin.school</a></p>
      <p><a href="tel:999999999">99 999 9999</a></p>
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