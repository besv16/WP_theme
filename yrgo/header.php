<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- my css -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body>
  <div class="container">
    <div class="navbar">
      <?php

      foreach (get_pages() as $page): ?>
      <li class="nav-item <?php if (is_page($page)) { echo 'active'; } ?>">
        <a class="nav-link" href="<?php echo get_permalink($page); ?>">
          <?php echo $page->post_title; ?>
        </a><!-- /nav-link -->
      </li><!-- /nav-item -->
      <?php endforeach; ?>
    </div>
