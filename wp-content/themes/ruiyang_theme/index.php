<?php get_header(); ?>

<div id="content" class="content-bg">
  <?php while(have_posts()): the_post() ?>
    <h2><?php the_title() ?></h2>
    <?php the_content(__('Continue Reading')); ?>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
