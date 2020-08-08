<?php get_header(); ?>

  <div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/testi.png') ?>);"></div>
    <div class="page-banner__content container t-center c-white">
      <h1 class="headline headline--large">Tervetuloa</h1>
      <h2 class="headline headline--medium">Sinioranssien virallisille sivuille.</h2>
      <h3 class="headline headline--small">Liity kannattajaseuran jäseneksi saadaksesi loistavat edut!</h3>
        <a href="<?php echo site_url('/liity-jaseneksi'); ?>" class="btn btn--large btn--orange front-page-btn">Liity jäseneksi</a>
    </div>
  </div>
  <div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Tulevat tapahtumat</h2>
            <?php 
                dynamic_sidebar( 'widget1' )
            ?>

            <p class="t-center no-margin"><a href="<?php echo site_url('/tapahtumat') ?>" class="btn btn--blue">Katso kaikki tapahtumat</a></p>

      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Uutiset</h2>
        <?php
          $homepagePosts = new WP_Query(array(
            'orderby' => 'title',
          'order' => 'ASC',
            'posts_per_page' => 2
          ));

          while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
            <div class="event-summary">
              <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month"><?php the_time('M'); ?></span>
                <span class="event-summary__day"><?php the_time('d'); ?></span>  
              </a>
              <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                  } else {
                    echo wp_trim_words(get_the_content(), 18);
                    } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Lue lisää</a></p>
              </div>
            </div>
          <?php } wp_reset_postdata();
        ?> 

        
        
        <p class="t-center no-margin"><a href="<?php echo site_url('/ajankohtaista'); ?>" class="btn btn--yellow">Katso kaikki uutiset</a></p>
      </div>
    </div>
  </div>

  <div class="hero-slider">
    <div data-glide-el="track" class="glide__track">
    <div class="glide__slides">
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/hero-slider-1.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Yhteistyökumppani 1</h2>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Lue lisää</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/hero-slider-2.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Yhteistyökumppani 2</h2>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Lue lisää</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/hero-slider-3.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Yhteistyökumppani 3</h2>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Lue lisää</a></p>
      </div>
    </div>
  </div>
    </div>
      <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]">
      </div>
    </div>
  </div>
  
  <div class="">
  <?php
          $partneriPosts = new WP_Query(array(
            'post_type' => 'partneri',
            'orderby' => 'title',
            'order' => 'ASC',
          ));

          while ($partneriPosts->have_posts()) {
            $partneriPosts->the_post(); ?>

            <div class="event-summary">
              <div class="event-summary__content">
              <div>
              <a href="<?php echo '//www.' . wp_strip_all_tags(get_the_content()); ?>"> <?php the_post_thumbnail('partneriLandscape'); ?></a>
              </div>
              
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              </div>
            </div>
          <?php }
        ?>
  </div>
  <?php get_footer();

?>