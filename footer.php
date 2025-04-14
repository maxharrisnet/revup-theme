<footer class="main-footer">
  <div class="container footer-container">
    <div>
      <h3>Pages</h3>
      <nav class="footer-subnav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container' => false,
        ));
        ?>
      </nav>
    </div>
    <h3>Services</h3>
    <div class="footer-subnav-column-container">
      <div class="footer-subnav-column">
        <h4>General Dentistry</h4>
        <nav class="footer-subnav">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'services-menu-01',
            'container' => false,
          ));
          ?>
        </nav>
      </div>
      <div class="footer-subnav-column">
        <h4>Cosmetic Dentistry</h4>
        <nav class="footer-subnav">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'services-menu-02',
            'container' => false,
          ));
          ?>
        </nav>
      </div>
      <div class="footer-subnav-column">
        <h4>Children’s Dentistry</h4>
        <nav class="footer-subnav">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'services-menu-03',
            'container' => false,
          ));
          ?>
        </nav>
      </div>
      <div class="footer-subnav-column">
        <h4>Additional Services</h4>
        <nav class="footer-subnav">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'services-menu-04',
            'container' => false,
          ));
          ?>
        </nav>
      </div>
    </div>
    <div class="footer-mobile-nav">
      <nav class="footer-subnav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'services-menu-mobile',
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