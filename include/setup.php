<?php
function blog_themes_styles() {
    wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');

    wp_enqueue_script(
        'theme_js',
        get_template_directory_uri().'/assets/js/script.js',
        ['jquery'],
        '',
        true
    );
}

function blog_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', __('Primary Menu', 'blog'));
}

function blog_widget() {
    register_sidebar([
        'name' => __('Conteúdo lateral'),
        'id' => 'blog_sidebar',
        'description' => __('Conteúdo da parte lateral da página'),
        'before_title' => '<h3 class="titulo-teste">',
        'after_title' => '</h3>',
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>'
    ]);
}