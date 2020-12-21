<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title();?></title>

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

    <div id="hero-image">
        <div
        <?php if(has_post_thumbnail()):?>
                <?php $hero_image_url = get_the_post_thumbnail_url(get_the_ID(),'blog-hero');?>
                style="background-image: url('<?php echo esc_url($hero_image_url);?>');" 
                class="single-thumbnail"
            <?php endif; ?>
        >
        </div>
    </div>

</header>