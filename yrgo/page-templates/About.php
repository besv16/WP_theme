<?php

/* Template Name: About */

get_header();

$args = array(
  'post_type'   => 'employee'
);

?>
<div class="row">
  <div class="column">

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>

          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>

          <?php
          $employees = get_posts($args);
          foreach ($employees as $employee) {
            ?>
            <ul>
              <li><a href="<?php the_permalink($employee); ?>"><?php echo $employee -> post_title; ?></a></li>
            </ul>
            <?php
          }
          endwhile;
          endif; ?>
  </div>
</div>
<?php get_footer(); ?>
