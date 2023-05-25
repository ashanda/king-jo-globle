<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package king-joy-globle
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- fontAwsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Luckiest+Guy&family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles.css">

    <title>King-Jo-Global</title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="full-content">
        <div class="header-new">
            <!-- Start Header Section -->
            <div class="header-area">
                <!-- Nav Bar Start -->
                <nav class="navbar navbar-expand-lg first-navbar">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/inc/king-images/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="first-nav-items">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-1',
                                        'container' => false,
                                        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                                        'walker' => new WP_Bootstrap_Navwalker(),
                                        'fallback_cb' => false,
                                    )
                                );
                                ?>
                            </div>

                            <div class="middle-nav-items">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="mails"><i class="fas fa-envelope"></i><span>mail@company.com</span></li>
                                    <li>call us for any inquiry 0123 456 789</li>
                                </ul>
                            </div>

                            <div class="right-nav-items">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="shopping-items"><i class="fas fa-heart"></i></li>
                                    <li><i class="fas fa-shopping-bag"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Nav Bar End -->