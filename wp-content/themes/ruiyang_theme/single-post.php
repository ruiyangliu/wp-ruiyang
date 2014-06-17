<?php get_header(); ?>

<div id="content" class="content-bg">
  <div id="blog">
  <?php while(have_posts()): the_post() ?>
    <h2><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h2>
    <?php
      $categories = get_the_category();
      $separator = ', ';
      $output = '';
      if($categories){
        foreach($categories as $category) {
          $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
        }
      }
    ?>
    <p class="post-meta"><?php the_date(); ?>  <?php echo trim($output, $separator);?></p>
    <?php the_content(__('Continue Reading')); ?>
    
  <?php endwhile; ?>
  </div>
  <div id="sidebar">
    <?php dynamic_sidebar('blog-sidebar'); ?>
  </div>
</div>

<?php get_footer(); ?>
