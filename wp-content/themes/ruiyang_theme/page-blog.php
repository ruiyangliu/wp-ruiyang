<?php
/*
Template Name: Blog Template
*/
?>
<?php get_header(); ?>

<div id="content" class="content-bg">
  <div id="blog">
    <?php
    $myposts = get_posts('');
    foreach($myposts as $post) :
      setup_postdata($post);
      ?>
      <div class="post-item">
        <div class="post-info">
          <h2 class="post-title">
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
          <?php the_title(); ?>
          </a>
          </h2>
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
        </div>
        <div class="post-content">
          <?php the_excerpt(); ?>
          <a class="read-more-link" href="<?php echo get_permalink(); ?>"> Read More...</a>
        </div>
      </div>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  <div id="sidebar">
    <?php dynamic_sidebar('blog-sidebar'); ?>
  </div>

</div>

<?php get_footer(); ?>
