<footer>
  <div class="container">
    <nav>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container' => false,
      ));
      ?>
    </nav>
    <p>&copy; <?php echo date('Y'); ?> Dental Implants Theme</p>
    <?php wp_footer(); ?>
</footer>
</body>

</html>