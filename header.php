<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brian Burkard</title>

    <?php wp_head(); ?>

</head>
<body>

<header>
    <div class="header-wrap frame-inner">

        <div class="logo">
            <h2><a href="/">Brian Burkard</a></h2>
        </div>

        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'top-nav',
                    'menu_class' => 'top-nav'
                )
            );
        ?>

        <button class="hamburger-wrapper">
        </button>

    </div>

      <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'mobile-nav',
                            'menu_class' => 'mobile-nav'
                        )
                    );
        ?>

</header>