<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Blog do dev</title>
    <?php wp_head(); ?>
</head>
<body <?= body_class()?>>
<header>
    <?php
    if (has_nav_menu('primary')) {
        wp_nav_menu([
            'theme_location' => 'primary',
            'container' => 'nav',
            'container_class' => 'classe1 classe2'
        ]);
    }
    ?>
    <h1>blog</h1>
</header>