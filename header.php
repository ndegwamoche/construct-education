<?php

/**
 * Header
 * 
 * @link hhttps://github.com/ndegwamoche/construct-education
 *
 * @package construct-education
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm pt-4 pb-4" id="mainNav">
        <div class="container-fluid px-5">

            <!-- Check if logo is set if not load the theme logo in assets/img -->
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

            if (has_custom_logo()) {
                echo '<a class="navbar-brand fw-bold" href="' . home_url('/') . '"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
            } else {
                echo '<a class="navbar-brand fw-bold" href="' . home_url('/') . '"><img src="' . esc_url(get_theme_file_uri('/assets/img/logo.png')) . '" alt="' . get_bloginfo('name') . '"></a>';
            }
            ?>

            <!-- Mobile Menu -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <div class="d-flex flex-column flex-lg-row justify-content-center w-100">
                    <?php
                    wp_nav_menu(
                        array(
                            'container' => FALSE,
                            'menu_class' => 'navbar-nav ms-auto me-4 my-3 my-lg-0 mr-5',
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                    ?>
                    <button class="btn btn-primary px-5 mb-2 mb-lg-0 ms-auto" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Button</span>
                        </span>
                    </button>
                </div>
            </div>
    </nav>