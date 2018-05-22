<?php
function s_widgets() {
  register_sidebar( array(
      'name'          => __( 'Main Sidebar', 'custom' ),
      'id'            => 'custom_sidebar',
      'description'   => __( 'Sidebar for Custom Theme', 'custom' ),
      'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));
}
