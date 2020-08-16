<?php
  get_header();
  //loads all posts/news and displays data from them
  while(have_posts()) {
    the_post();
    pageBanner();
     ?>
    <div class="container container--narrow page-section">
      <?php
        //if page has parent page then display metabox  
        $theParent = wp_get_post_parent_id(get_the_ID());
        if ($theParent) { ?>
          <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
          </div>
        <?php }
      ?>
      
      <!-- display content from post-->
      <div class="generic-content">
        <?php the_content(); ?>
      </div>
  </div>
  <?php }
  get_footer();
?>