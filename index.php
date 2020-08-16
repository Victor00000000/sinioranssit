<?php
get_header();
pageBanner(array(
  'title' => 'Uutiset',
  'subtitle' => ''
));
 ?>
 <!-- news post / uutinen -->
<div class="container container--narrow page-section">
<?php
  while(have_posts()) {
    the_post(); ?>
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <!-- info box for current news post -->
      <div class="metabox">
        <p>Kirjoittanut <?php the_author_posts_link(); ?> ajankohtana <?php the_time('j.m.Y'); ?> kategoriassa <?php echo get_the_category_list(', '); ?></p>
      </div>
      <!-- news post generic content -->
      <div class="generic-content">
        <?php the_excerpt(); ?>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Lue lisää &raquo;</a></p>
      </div>

    </div>
  <?php }
  echo paginate_links();
?>
</div>
<?php get_footer();
?>