<?php

function pageBanner($args = NULL) {
  

  if (!$args['title']) {
    $args['title'] = get_the_title();
  }
 

  if (!$args['subtitle']) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }


  if (!$args['photo']) {
    if (get_field('page_banner_background_image')) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/images/sinioranssit_1.jpg');
    }
  }

  ?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
        <div>
            <p class="page-banner__intro"><?php echo $args['subtitle']; ?></p>
        </div>
    </div>
</div>
<?php }

function university_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');


  if (strstr($_SERVER['SERVER_NAME'], 'sinioranssit.local')) {
    wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.custom.js'), NULL, '1.0', true);
    wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.custom.js'), NULL, '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.custom.css'));
  }
}

add_action('wp_enqueue_scripts', 'university_files');

function sinioranssit_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('pageBanner', 1500, 350, true); /* Image Cropping blugin: page Banner image size */
}

add_action('after_setup_theme', 'sinioranssit_features');

function sinioranssit_adjust_queries($query) {
  if (!is_admin() AND is_post_type_archive('campus') AND is_main_query()) {
    $query->set('posts_per_page', -1);
  }

  if (!is_admin() AND is_post_type_archive('program') AND is_main_query()) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);
  }

  if (!is_admin() AND is_post_type_archive('event') AND is_main_query()) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            ));
  }
}

add_action('pre_get_posts', 'sinioranssit_adjust_queries');

/* Facebook widget */
function addWidgetsArea() {
  register_sidebar( array(
    'name' => 'Facebook Feed',
    'id' => 'widget1'
  ) );
}

add_action( 'widgets_init', 'addWidgetsArea' );

/**
 * Turn off the email suggestion.
 *
 * @link  https://wpforms.com/developers/how-to-disable-the-email-suggestion-on-the-email-form-field/
 * 
 */
 
// Disable email suggestion on Email form field
add_filter( 'wpforms_mailcheck_enabled', '__return_false' );