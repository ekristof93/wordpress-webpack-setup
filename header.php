<!DOCTYPE html>
<html <?php language_attributes(  ); ?>>
<head>
    <?php wp_head(  ); ?>
    <meta charset="<?php bloginfo( "charset" ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class(  ); ?>>
    <header>
        <?php if (has_nav_menu( 'headerMenuLocation' )) { ?>
            <nav>
                <?php wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation',
                    'fallback_cb' => false
                )); ?>
            </nav>
        <?php }; ?>
    </header>