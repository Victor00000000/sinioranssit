<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
        <img class ="logo-footer" src="<?php echo get_theme_file_uri('/images/sinioranssit_logo.png') ?>" alt="Sinioranssit logo">
        </div>

        
        <div class="site-footer__col-two-three-group">

          <div class="site-footer__col-three">
            <nav class="nav-list">
              <ul>
                <li><a href="<?php echo site_url('/ota-yhteytta') ?>">Ota yhteyttä</a></li>
              </ul>
            </nav>
            <div class="footer-contact-us">
                <p>info@sinioranssit.fi</p>
            </div>
          </div>
        </div>

        <div class="site-footer__col-four">
        <h3 class="headline headline--x-small">Seuraa meitä</h3>
          <nav>
            <ul class="min-list social-icons-list group">
              <li><a href="https://www.facebook.com/sinioranssit" class="social-color-facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/sinioranssit" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UC_UrA8bv5d7HDxNfQlsJsWA" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/sinioranssit_virallinen/" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer>

  <div class="search-overlay">
    <div class="search-overlay__top">
      <div class="container">
        <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
        <input type="text" class="search-term" placeholder="Etsi..." id="search-term">
        <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
      </div>
    </div>
    
    <div class="container">
      <div id="search-overlay__results"></div>
    </div>

  </div>

<?php wp_footer(); ?>
</body>
</html>