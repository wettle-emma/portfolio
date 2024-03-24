
<!DOCTYPE html>
<html>
    <head <?php language_attributes(); ?>>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php the_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <?php wp_head(); ?>
        <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <header>
                <div class="header_link">
                    <div class="header_menu">
                        <?php wp_nav_menu ( array ('theme_location' => 'header-menu' ) ); ?>
                    </div>
                </header>
