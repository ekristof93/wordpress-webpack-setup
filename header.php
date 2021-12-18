<!DOCTYPE html>
<html lang="<?php bloginfo( "language" ); ?>">
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo( "charset" ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class(  ); ?>>
    <header>
        <nav>
            <?php wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation',
                'fallback_cb' => false
            )); ?>
        </nav>
    </header>