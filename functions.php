<?php
require_once get_template_directory().'/include/setup.php';


add_action('wp_enqueue_scripts', 'blog_themes_styles');
add_action('after_setup_theme', 'blog_setup');
add_action('widgets_init', 'blog_widget');