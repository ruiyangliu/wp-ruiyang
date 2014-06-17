<?php
/*
Template Name: Blog Template
*/
?>
<?php get_header(); ?>

<div id="content" class="content-bg">
  <div id="blog">
    <?php if (have_posts()) : ?>
    <h2><?php single_cat_title(); ?></h2>
    <?php
    $current_category = single_cat_title("", false);
    $image = '/wp-content/uploads/images/' . strtolower(str_replace(' ', '-', $current_category)) . '.jpg';
    if (file_exists(ABSPATH . $image)) {
      echo '<img src="' . get_bloginfo('url') . $image . '" alt="' . $current_category . '" />';
    }
    ?>
    <ol>
    <?php while (have_posts()) : the_post(); ?>
    <li>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
    <?php the_title(); ?></a></li>
    <?php endwhile; ?>
    </ol>
    <?php endif; ?>
  </div>
  <div id="sidebar">
    <?php dynamic_sidebar('blog-sidebar'); ?>
  </div>

</div>

<?php get_footer(); ?>
