<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");

?>


    <div role="main" class="main home-page">

        <section class="section border-0 video overlay overlay-show overlay-op-8 m-0 mb-5"
                 data-video-path="<?= DEFAULT_TEMPLATE_PATH ?>/video/main-video_bg" data-plugin-video-background
                 data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}" style="height: 100vh;">
            <div class="container position-relative z-index-3 h-100">
                <div class="row align-items-center h-100">
                    <div class="col">
                        <div class="d-flex flex-column align-items-center justify-content-center h-100">
                            <h2 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation"
                                data-appear-animation="fadeInDownShorterPlus"
                                data-plugin-options="{'minWindowWidth': 0}">
                                <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                    <img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation"
                                         data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250"
                                         data-plugin-options="{'minWindowWidth': 0}" alt=""/>
                                </span>

                                Пора работать по <span class="position-relative">новому<span
                                            class="position-absolute left-50pct transform3dx-n50 top-0 mt-3">

                                <img src="img/slides/slide-blue-line.png" class="w-auto appear-animation"
                                     data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000"
                                     data-plugin-options="{'minWindowWidth': 0}" alt=""/></span></span>

                                <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                    <img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation"
                                         data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250"
                                         data-plugin-options="{'minWindowWidth': 0}" alt=""/>
                                </span>
                            </h2>
                            <h1 class="text-color-light font-weight-extra-bold text-12 line-height-1 mb-2 appear-animation"
                                data-appear-animation="blurIn" data-appear-animation-delay="1000"
                                data-plugin-options="{'minWindowWidth': 0}">
                                FOODTECH
                            </h1>
                            <p class="text-4 text-center text-color-light font-weight-light opacity-7 mb-0 appear-animation"
                                data-appear-animation="blurIn" data-appear-animation-delay="1250"
                                data-plugin-options="{'minWindowWidth': 0}">
                                Автоматизация производств с приминением <br> Робототехники и AI-технологий
                            </p>

                            <?php if(0): ?>
                                <p class="text-4 text-color-light font-weight-light opacity-7 mb-0"
                                   data-plugin-animated-letters
                                   data-plugin-options="{'startDelay': 350, 'minWindowWidth': 0}">
                                   Автоматизация производств с приминением Робототехники и AI-технологий
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <a href="#home-intro"
                   class="slider-scroll-button position-absolute bottom-10 left-50pct transform3dx-n50" data-hash
                   data-hash-offset="80">Sroll To Bottom</a>
                <div id="home-intro"></div>
            </div>
        </section>

        <section>
            <div class="container mt-5 mb-5">

                <div class="row">
                    <div class="col">
                        <div class="overflow-hidden mb-3">
                            <h2 class="font-weight-bold text-8 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" style="animation-delay: 100ms;">
                                Группа компаний «FOODTECH»
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-9">
                        <div class="overflow-hidden">
                            <p class="lead mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                — это готовые решения в сфере производства <br> и реализации спецодежды и СИЗ
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <a class="mt-1 mb-1 me-1 popup-youtube btn btn-modern btn-primary"
                           href="https://www.youtube.com/watch?v=1xbtI52SMgU">Видеопрезентация</a>
                    </div>
                </div>

            </div>

        </section>

        <section class="pt-5 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading heading-border heading-middle-border mt-5 mb-5">
                            <h2 class="font-weight-normal"><strong class="font-weight-extra-bold">Каталог</strong></h2>
                        </div>
                    </div>

                    <div class="section-equipment appear-animation"
                         data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="100">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "catalog_sections_img_list",
                        Array(
                            "ADD_SECTIONS_CHAIN" => "N",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "0",
                            "CACHE_TYPE" => "N",
                            "COMPONENT_TEMPLATE" => "catalog_sections_img_list",
                            "COUNT_ELEMENTS" => "Y",
                            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                            "FILTER_NAME" => "sectionsFilter",
                            "IBLOCK_ID" => "1",
                            "IBLOCK_TYPE" => "equipment",
                            "SECTION_CODE" => "",
                            "SECTION_FIELDS" => array(0 => "", 1 => "",),
                            "SECTION_ID" => $_REQUEST["SECTION_ID"],
                            "SECTION_URL" => "",
                            "SECTION_USER_FIELDS" => array(0 => "", 1 => "",),
                            "SHOW_PARENT_NAME" => "Y",
                            "TOP_DEPTH" => "2",
                            "VIEW_MODE" => "TILE"
                        )
                    ); ?>

                        <div class="col-md-6 offset-md-3">
                            <button type="button" class="btn btn-primary section-btn-view w-100 mb-5">Развернуть категории</button>
                        </div>

                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading heading-border heading-middle-border mt-5 mb-5">
                            <h2 class="font-weight-normal"><strong class="font-weight-extra-bold">Производство</strong></h2>
                        </div>
                    </div>

                    <div class="section-components appear-animation"
                         data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="100">
                        <? $APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "catalog_sections_img_list",
                        Array(
                            "ADD_SECTIONS_CHAIN" => "N",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "0",
                            "CACHE_TYPE" => "N",
                            "COUNT_ELEMENTS" => "Y",
                            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                            "FILTER_NAME" => "sectionsFilter",
                            "HIDE_SECTION_NAME" => "N",
                            "IBLOCK_ID" => "2",
                            "IBLOCK_TYPE" => "components",
                            "SECTION_CODE" => "",
                            "SECTION_FIELDS" => array("", ""),
                            "SECTION_ID" => $_REQUEST["SECTION_ID"],
                            "SECTION_URL" => "",
                            "SECTION_USER_FIELDS" => array("", ""),
                            "SHOW_PARENT_NAME" => "Y",
                            "TOP_DEPTH" => "2",
                            "VIEW_MODE" => "TILE"
                        )
                    ); ?>

                        <div class="col-md-6 offset-md-3">
                            <button type="button" class="btn btn-primary section-btn-view w-100 mb-4">Развернуть категории</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading heading-border heading-middle-border mt-5 mb-5">
                            <h2 class="font-weight-normal">Наша <strong class="font-weight-extra-bold">миссия</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row featured-boxes-full featured-boxes-full-scale">
                    <div class="col-lg-3 featured-box-full featured-box-full-primary">
                        <i class="icon-user-following icons"></i>
                        <h4>Клиентам</h4>
                        <p class="font-weight-light">
                            Помочь предприятиям пищевой промышленности стать ведущими поставщиками качественной
                            и
                            востребованной продукции, путём интеграции автоматизации и роботизации на
                            производстве.
                        </p>
                    </div>
                    <div class="col-lg-3 featured-box-full featured-box-full-primary">
                        <i class="icon-briefcase icons"></i>
                        <h4>Государству</h4>
                        <p class="font-weight-light">
                            Создать комфортные и достойно оплачиваемые рабочие места, поддерживать высокий
                            вклад в экономику страны, развивать долгосрочные и взаимовыгодные международные
                            торговые
                            отношения.
                        </p>
                    </div>
                    <div class="col-lg-3 featured-box-full featured-box-full-primary">
                        <i class="icon-pie-chart icons"></i>
                        <h4>Акционерам</h4>
                        <p class="font-weight-light">
                            Иметь материальные и психологические дивиденды от партнёрства с интегратором №1 в
                            России.
                        </p>
                    </div>
                    <div class="col-lg-3 featured-box-full featured-box-full-primary">
                        <i class="icon-people icons"></i>
                        <h4>Сотрудникам</h4>
                        <p class="font-weight-light">
                            Получать поддержку и достойную оценку своего вклада в развитие компании и своего
                            личностного роста от команды и руководства компании.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <?php if(0): ?>
            <section class="mission video overlay overlay-show overlay-op-8 mt-5"
                 data-video-path="<?= DEFAULT_TEMPLATE_PATH ?>/video/MG10_banner" data-plugin-video-background
                 data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}">
            <div class="container">
                <div class="row text-center pt-3">

                    <div class="col-gl-12 mb-4">
                        <h3 class="word-rotator slide text-8 mb-3 appear-animation"
                            data-appear-animation="fadeInUpShorter">
                            <span class="text-color-white">Наша миссия</span>
                        </h3>
                    </div>

                    <div class="col-lg-6">
                        <div class="card border-0 bg-color-white mb-4">
                            <div class="card-body">
                                <div class="appear-animation" data-appear-animation-delay="100"
                                     data-appear-animation="fadeInUpShorter">
                                    <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/mission/mission-icon-1.svg" alt="">
                                </div>
                                <h4 class="card-title mt-2 mb-1 text-4 font-weight-bold appear-animation"
                                    data-appear-animation-delay="100" data-appear-animation="fadeInUpShorter">
                                    Клиентам
                                </h4>
                                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter"
                                   data-appear-animation-delay="100">
                                    Помочь предприятиям пищевой промышленности стать ведущими поставщиками качественной и
                                    востребованной продукции, путём интеграции автоматизации и роботизации на
                                    производстве.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card border-0 bg-color-white mb-4">
                            <div class="card-body">
                                <div class="appear-animation" data-appear-animation-delay="100"
                                     data-appear-animation="fadeInUpShorter">
                                    <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/mission/mission-icon-2.svg" alt="">
                                </div>
                                <h4 class="card-title mt-2 mb-1 text-4 font-weight-bold appear-animation"
                                    data-appear-animation-delay="100" data-appear-animation="fadeInUpShorter">
                                    Государству
                                </h4>
                                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter"
                                   data-appear-animation-delay="100">
                                    Создать комфортные и достойно оплачиваемые рабочие места, поддерживать высокий
                                    вклад в экономику страны, развивать долгосрочные и взаимовыгодные международные
                                    торговые
                                    отношения.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card border-0 bg-color-white mb-4">
                            <div class="card-body">
                                <div class="appear-animation" data-appear-animation-delay="100"
                                     data-appear-animation="fadeInUpShorter">
                                    <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/mission/mission-icon-3.svg" alt="">
                                </div>
                                <h4 class="card-title mt-2 mb-1 text-4 font-weight-bold appear-animation"
                                    data-appear-animation-delay="100" data-appear-animation="fadeInUpShorter">
                                    Акционерам
                                </h4>
                                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter"
                                   data-appear-animation-delay="100">
                                    Иметь материальные и психологические дивиденды от партнёрства с интегратором №1 в
                                    России.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card border-0 bg-color-white">
                            <div class="card-body">
                                <div class="appear-animation" data-appear-animation-delay="100"
                                     data-appear-animation="fadeInUpShorter">
                                    <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/mission/mission-icon-4.svg" alt="">
                                </div>

                                <h4 class="card-title mt-2 mb-1 text-4 font-weight-bold appear-animation"
                                    data-appear-animation-delay="100" data-appear-animation="fadeInUpShorter">
                                    Сотрудникам
                                </h4>
                                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter"
                                   data-appear-animation-delay="100">
                                    Получать поддержку и достойную оценку своего вклада в развитие компании и своего
                                    личностного роста от команды и руководства компании.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10 mx-md-auto">
                        <div class="mt-5">
                            <h3 class="word-rotator slide text-8 mb-3 appear-animation"
                                data-appear-animation="fadeInUpShorter">
                                <span class="text-color-white">FOODTECH - пора работать по-новому!</span>
                            </h3>
                            <div class="col-md-12 text-center">
                                <a class="mt-1 mb-1 me-1 popup-youtube btn btn-modern btn-primary"
                                   href="https://www.youtube.com/watch?v=1xbtI52SMgU">Видеопрезентация</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <?php endif; ?>

    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>