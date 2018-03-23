<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.prg/xfn/11">
  <title>Internal Docs</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

<div id='site-header'>
  <h1><?php bloginfo('title') ?></h1>
</div>

<?php get_sidebar() ?>

<div id='site-content'>