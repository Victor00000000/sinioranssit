<?php
  get_header();
  // displays post content
  while(have_posts()) {
    the_post();
    pageBanner();
     ?>
    <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo site_url('/ajankohtaista'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Takaisin </a> <span class="metabox__main">Kirjoittanut <?php the_author_posts_link(); ?> ajankohtana <?php the_time('j.m.Y'); ?> kategoriassa <?php echo get_the_category_list(', '); ?></span></p>
      </div>
      <div class="generic-content"><?php the_content(); ?></div>
    </div>
  <?php }
  get_footer();
?>