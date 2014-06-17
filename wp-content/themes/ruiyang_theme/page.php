<?php get_header(); ?>

<div id="content" class="content-bg">
  <?php while(have_posts()): the_post() ?>
    <h2><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h2>
    <?php the_excerpt(); ?>
    
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
