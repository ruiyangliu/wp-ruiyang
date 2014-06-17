<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function ruiyang_widgets_init() {

  register_sidebar( array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        ) );
}
add_action( 'widgets_init', 'ruiyang_widgets_init' );
?>
