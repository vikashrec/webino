<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from idealbrothers.thesoftking.com/html/webino/demo/index-1-ripple.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 15:48:47 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Webino - Webinar Landing Page HTML Template</title>

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/flaticon.css">
    <link rel="stylesheet" type="<?php echo esc_url( get_template_directory_uri() ); ?>/text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/main.css">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.png" type="image/x-icon">

</head>

<body class="dark-theme">
    <!--========== Preloader ==========-->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--========== Preloader ==========-->

    <!-- ======Header-Section Starts Here======= -->
    <header class="header-3 header-1">
        <div class="container-fluid p-0">
            <div class="header-area">
                <div class="logo">
                    <a href="<?=site_url();?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/logo-1.png" alt="logo">
                    </a>
                </div>
                <?php   wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'ul',
            'container_class'   => '',
            'container_id'      => '',
            'menu_class'        => 'menu',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'  => new WP_Bootstrap_Navwalker())
                   );
            ?>

                <div class="purchase-area ml-auto ml-lg-0">
                    <select class="select-bar">
                        <option value="en">en</option>
                        <option value="bn">bn</option>
                    </select>
                    <a href="apply-online" class="purchase-button">Apply Online</a>
                </div>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <!-- ======Header-Section Ends Here======= -->