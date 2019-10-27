    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-4 col-lg-5">
            <h3><a href="<?php bloginfo('url'); ?>/contact" class="wave">Say hi <span>✌️</span></a></h3>
          </div>
          <div class="menu col-12 col-sm-8 col-lg-7">
            <?php wp_nav_menu( array(
              'container' => false,
              'menu_class' => '',
              'items_wrap' => '<ul>%3$s</ul>',
              'theme_location' => 'menu-footer'
            )); ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="social col-12 col-lg-4 order-1 order-lg-2">
            <ul>
              <li><a a href="https://www.instagram.com/espacioenblan.co/" target="_blank"><span class="icon-instagram"></span></a></li>
              <li><a href="https://www.facebook.com/espacioenblandotco/" target="_blank"><span class="icon-facebook"></span></a></li>
              <li><a a href="https://github.com/espacioenblancoo" target="_blank"><span class="icon-github"></span></a></li>
              <li><a a href="https://dribbble.com/espacioenblandotco" target="_blank"><span class="icon-dribbble"></span></a></li>
              <li><a a href="https://www.linkedin.com/company/espacioenblanco" target="_blank"><span class="icon-linkedin2"></span></a></li>
            </ul>
          </div>
          <div class="copyright text-center col-12 col-lg-4 order-2 order-lg-1">
            <p>© 2018 _.co</p>
          </div>
          <div class="legal text-center col-12 col-lg-4 order-3">
            <a href="<?php bloginfo('url'); ?>/privacy">Privacy & cookies policy</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.0.4/lazysizes.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.0.4/plugins/bgset/ls.bgset.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/headroom.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/master.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
