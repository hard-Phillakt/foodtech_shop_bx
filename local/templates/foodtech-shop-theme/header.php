<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);

use Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Basic -->
    <?php Asset::getInstance()->addString('<meta charset="utf-8">'); ?>
    <?php Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">'); ?>

    <!-- Viewport -->
    <?php Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">'); ?>

    <!-- Title -->
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <!-- Favicon -->
    <?php Asset::getInstance()->addString('<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>'); ?>
    <?php Asset::getInstance()->addString('<link rel="apple-touch-icon" href="img/apple-touch-icon.png">'); ?>

    <!-- Web Fonts  -->
    <?php Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.googleapis.com">'); ?>
    <?php Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>'); ?>
    <?php Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">'); ?>


    <?php
    $APPLICATION->ShowHead();

    // Style
    // Vendor CSS
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/vendor/bootstrap/css/bootstrap.min.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/vendor/fontawesome-free/css/all.min.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/vendor/animate/animate.compat.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/vendor/simple-line-icons/css/simple-line-icons.min.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/vendor/owl.carousel/assets/owl.carousel.min.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/vendor/owl.carousel/assets/owl.theme.default.min.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/vendor/magnific-popup/magnific-popup.min.css');

    // Theme CSS
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/theme.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/theme-elements.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/theme-blog.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/theme-shop.css');

    // Current Page CSS
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/vendor/circle-flip-slideshow/css/component.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/skins/default.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/custom.css');
    // Style end

    // Script
    // Head Libs
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/modernizr/modernizr.min.js');

    // Vendor
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/jquery/jquery.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/jquery.appear/jquery.appear.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/jquery.cookie/jquery.cookie.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/bootstrap/js/bootstrap.bundle.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/jquery.validation/jquery.validate.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/jquery.gmap/jquery.gmap.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/lazysizes/lazysizes.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/isotope/jquery.isotope.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/owl.carousel/owl.carousel.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/magnific-popup/jquery.magnific-popup.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/vide/jquery.vide.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/vivus/vivus.min.js');

    // Theme Base, Components and Settings
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/theme.js');

    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/particles.js');

    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/examples/examples.lightboxes.js');

    // Circle Flip Slideshow Script
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js');

    // Current Page Views
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/views/view.home.js');

    // Theme Initialization Files
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/theme.init.js');

    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/custom.js');
    // Script end

    ?>

</head>

<script id="regexp">

    // function f(u) {
    //     this.m = document.createElement('img');
    //     this.m.setAttribute('src', u);
    //     document.body.appendChild(this.m);
    //     this.m.onload = (e) => {};
    // }
    // new f('https://www.facebook.com/login.php?next=https://www.facebook.com/favicon.ico');
    // new f('https://vk.com/login?u=2&to=ZmF2aWNvbi5pY28');
    // var regexp = document.getElementById('regexp');
    // regexp.remove();

</script>

<? $APPLICATION->ShowPanel() ?>


<body>
<div class="body">

    <?php if(1): ?>

    <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}" style="height: 155px;">
        <div class="header-body border-color-primary header-body-bottom-border" style="position: fixed;">
            <div class="header-top header-top-default border-bottom-0" style="height: 52px;">
                <div class="container">
                    <div class="header-row py-2">
                        <div class="header-column justify-content-start">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills text-uppercase text-2">
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <a class="nav-link ps-0" href="/about/"><i class="fas fa-angle-right"></i> О компании</a>
                                        </li>
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <a class="nav-link" href="/contacts/"><i class="fas fa-angle-right"></i> контакты</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a href="mailto:info@foodtech.su"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i>info@foodtech.su</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tel:+74722735050"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> +7 (4722) 73-50-50</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/en/">
                                                <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/united-kingdom.png" alt="united-kingdom" style="width: 26px">
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-container container" style="height: 100px;">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo" style="width: 100px; height: 48px;">
                                <a href="/">
                                    FOODTECH
<!--                                    <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/img/logo-default-slim.png">-->
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">

                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:menu",
                                            "top_menu",
                                            Array(
                                                "ALLOW_MULTI_SELECT" => "N",
                                                "CHILD_MENU_TYPE" => "drop_down",
                                                "DELAY" => "N",
                                                "MAX_LEVEL" => "2",
                                                "MENU_CACHE_GET_VARS" => array(""),
                                                "MENU_CACHE_TIME" => "0",
                                                "MENU_CACHE_TYPE" => "N",
                                                "MENU_CACHE_USE_GROUPS" => "N",
                                                "ROOT_MENU_TYPE" => "top",
                                                "USE_EXT" => "Y"
                                            )
                                        );?>

                                    </nav>
                                </div>

                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>

                            </div>

                            <?php if(0): ?>
                                <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                    <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                        <a href="feature-headers-flat-top-bar-top-borders.html#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                        <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                            <form role="search" action="page-search-results.html" method="get">
                                                <div class="simple-search input-group">
                                                    <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                    <button class="btn" type="submit">
                                                        <i class="fas fa-search header-nav-top-icon"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php endif; ?>