<footer class="main-footer">
  <div class="container footer-container">
    <div>
      <h3>Pages</h3>
      <nav class="footer-nav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container' => false,
        ));
        ?>
      </nav>
    </div>
    <div>
      <h3>Services</h3>
      <nav class="footer-nav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'services-menu',
          'container' => false,
        ));
        ?>
      </nav>
    </div>

    <div class="subfooter">
      <div>
        <p> &copy; <?php echo date('Y'); ?> All Rights Reserved</p>
      </div>
      <div>
        <span>Powered By</span>
        <a href="https://www.revupdigital.com/" target="_blank" rel="noopener noreferrer">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/revup-logo.svg" alt="RevUp Digital Logo">
        </a>
      </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>

</html>