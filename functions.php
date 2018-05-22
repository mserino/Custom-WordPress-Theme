<?php

// Setup


// Includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/widgets.php');

// Hooks
add_action('wp_enqueue_scripts', 'custom_enqueue');
add_action('after_setup_theme', 'custom_setup_theme');
add_action('widgets_init', 'custom_widgets');

// Shortcodes
