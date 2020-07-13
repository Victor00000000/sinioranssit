<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Sini</strong>Oranssit</a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li <?php if (is_page('tietoa-meista') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/tietoa-meista') ?>">Tietoa meistä</a></li>
            <li <?php if (is_page('liity-jaseneksi')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/liity-jaseneksi') ?>">Liity jäseneksi</a></li>
            <li <?php if (is_page('tapahtumat')) echo 'class="current-menu-item"';  ?>><a href="<?php echo site_url('/tapahtumat') ?>">Tapahtumat</a></li>
            <li <?php if (is_page('kuvagalleria')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/kuvagalleria') ?>">Kuvagalleria</a></li>
            <li <?php if (is_page('ota-yhteytta')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/ota-yhteytta'); ?>">Ota yhteyttä!</a></li>
          </ul>
        </nav>
        
        <div class="site-header__util">
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div> 
      </div>
    </div>
  </header>