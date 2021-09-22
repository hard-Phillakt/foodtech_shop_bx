<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="<?= !CSite::InDir('/index.php') ? 'pb-2' : '' ?>">

    <?php if (0): ?>
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "news_list_equipment",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "0",
                "CACHE_TYPE" => "N",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "/equipment/#SECTION_CODE#/#ELEMENT_CODE#/",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "equipment",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "N",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "12",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "0",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        ); ?>
    <?php endif; ?>

    <?php if(!CSite::InDir('/index.php') && !CSite::InDir('/contacts/')): ?>
        <div class="container pt-5 pb-2">
            <div class="heading heading-border heading-middle-border">
                <h2 class="font-weight-normal">Популярные <strong class="font-weight-extra-bold">товары</strong></h2>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="my-4 lightbox appear-animation" data-appear-animation="fadeInUpShorter"
                         data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                        <div class="owl-carousel owl-theme pb-3"
                             data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">

                            <div class="portfolio-item">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/project.jpg" class="img-fluid border-radius-0"
                                         alt="">

                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
                                        <span class="thumb-info-type">Brand</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <a href="portfolio-single-wide-slider.html">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                        class="fas fa-link"></i></span>
                                        </a>
                                        <a href="img/projects/project.jpg" class="lightbox-portfolio">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                        class="fas fa-search text-dark"></i></span>
                                        </a>
                                    </span>
                                </span>
                            </span>
                            </div>

                            <div class="portfolio-item">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/project.jpg" class="img-fluid border-radius-0"
                                         alt="">

                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
                                        <span class="thumb-info-type">Brand</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <a href="portfolio-single-wide-slider.html">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                        class="fas fa-link"></i></span>
                                        </a>
                                        <a href="img/projects/project.jpg" class="lightbox-portfolio">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                        class="fas fa-search text-dark"></i></span>
                                        </a>
                                    </span>
                                </span>
                            </span>
                            </div>

                            <div class="portfolio-item">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/project.jpg" class="img-fluid border-radius-0"
                                         alt="">

                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
                                        <span class="thumb-info-type">Brand</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <a href="portfolio-single-wide-slider.html">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                        class="fas fa-link"></i></span>
                                        </a>
                                        <a href="img/projects/project.jpg" class="lightbox-portfolio">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                        class="fas fa-search text-dark"></i></span>
                                        </a>
                                    </span>
                                </span>
                            </span>
                            </div>

                            <div class="portfolio-item">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/project.jpg" class="img-fluid border-radius-0"
                                         alt="">

                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
                                        <span class="thumb-info-type">Brand</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <a href="portfolio-single-wide-slider.html">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                        class="fas fa-link"></i></span>
                                        </a>
                                        <a href="img/projects/project.jpg" class="lightbox-portfolio">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                        class="fas fa-search text-dark"></i></span>
                                        </a>
                                    </span>
                                </span>
                            </span>
                            </div>

                            <div class="portfolio-item">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/project.jpg" class="img-fluid border-radius-0"
                                         alt="">

                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
                                        <span class="thumb-info-type">Brand</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <a href="portfolio-single-wide-slider.html">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                        class="fas fa-link"></i></span>
                                        </a>
                                        <a href="img/projects/project.jpg" class="lightbox-portfolio">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                        class="fas fa-search text-dark"></i></span>
                                        </a>
                                    </span>
                                </span>
                            </span>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (0): ?>
        <div class="container mt-3 pt-2 pb-3">
            <div class="row">
                <div class="col-lg-12">

                    <h2 class="font-weight-bold">Как мы работаем</h2>

                    <div class="row process process-shapes process-shapes-always-animate">

                        <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation"
                             data-appear-animation="fadeInUpShorter"
                             data-appear-animation-delay="100">
                            <div class="card border-radius-0 bg-color-light border-0 box-shadow-1">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-4 font-weight-bold">шаг первый</h4>
                                    <h3 class="font-weight-semibold">ДЛЯ ЧЕГО?</h3>
                                    <p class="card-text">Изучаем поставленные задачи и цели на производстве</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation"
                             data-appear-animation="fadeInUpShorter"
                             data-appear-animation-delay="200">
                            <div class="card border-radius-0 bg-color-light border-0 box-shadow-1">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-4 font-weight-bold">шаг второй</h4>
                                    <h3 class="font-weight-semibold">КАК?</h3>
                                    <p class="card-text">Создаем проект индивидуального решения для Вашего
                                        производства</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation"
                             data-appear-animation="fadeInUpShorter"
                             data-appear-animation-delay="300">
                            <div class="card border-radius-0 bg-color-light border-0 box-shadow-1">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-4 font-weight-bold">шаг третий</h4>
                                    <h3 class="font-weight-semibold">ИНТЕГРАЦИЯ</h3>
                                    <p class="card-text">Реализация проекта. Внедрение и наладка оборудования</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation"
                             data-appear-animation="fadeInUpShorter"
                             data-appear-animation-delay="400">
                            <div class="card border-radius-0 bg-color-light border-0 box-shadow-1">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-4 font-weight-bold">шаг четвертый</h4>
                                    <h3 class="font-weight-semibold">СЕРВИС</h3>
                                    <p class="card-text">Обеспечение безупречной работы и сопровождение по
                                        эксплуатации</p>
                                </div>
                            </div>
                        </div>

                        <?php if (0): ?>

                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation"
                                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">01</strong>
                                            <p class="font-weight-bold text-color-primary text-4 mb-3">шаг первый</p>
                                            <h4 class="font-weight-semibold">ДЛЯ ЧЕГО?</h4>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5"
                                         style="background-image: url(<?= DEFAULT_TEMPLATE_PATH ?>/images/bg-why-my.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <p class="font-weight-light text-color-light">Изучаем поставленные
                                                задачи и цели на производстве</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation"
                                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">02</strong>
                                            <p class="font-weight-bold text-color-primary text-4 mb-3">шаг второй</p>
                                            <h4 class="font-weight-semibold">КАК?</h4>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5"
                                         style="background-image: url(<?= DEFAULT_TEMPLATE_PATH ?>/images/bg-why-my.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <p class="font-weight-light text-color-light">Создаем проект
                                                индивидуального решения для Вашего производства</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation"
                                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">03</strong>
                                            <p class="font-weight-bold text-color-primary text-4 mb-3">шаг третий</p>
                                            <h4 class="font-weight-semibold">ИНТЕГРАЦИЯ</h4>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5"
                                         style="background-image: url(<?= DEFAULT_TEMPLATE_PATH ?>/images/bg-why-my.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <p class="font-weight-light text-color-light">Реализация проекта.
                                                Внедрение и наладка оборудования</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation"
                                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">04</strong>
                                            <p class="font-weight-bold text-color-primary text-4 mb-3">шаг четвертый</p>
                                            <h4 class="font-weight-semibold">СЕРВИС</h4>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5"
                                         style="background-image: url(<?= DEFAULT_TEMPLATE_PATH ?>/images/bg-why-my.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <p class="font-weight-light text-color-light">Обеспечение безупречной
                                                работы и сопровождение на протяжении всего срока эксплуатации</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

</section>


<footer id="footer" class="mt-0">
    <div class="container">

        <div class="row py-5 my-4">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <h5 class="text-3 mb-3">Группа компаний «FOODTECH»</h5>
                <p class="pe-1">— это готовые решения в сфере интеграции оборудования для автоматизации производств.</p>
                <?php if (0): ?>
                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class="alert alert-danger d-none" id="newsletterError"></div>
                    <form id="newsletterForm" action="#!" method="POST" class="me-4 mb-3 mb-md-0">
                        <div class="input-group input-group-rounded">
                            <input class="form-control form-control-sm bg-light" placeholder="Оставьте свой адрес"
                                   name="newsletterEmail" id="newsletterEmail" type="text">
                            <button class="btn btn-light text-color-dark" type="submit"><strong>Отправить</strong>
                            </button>
                        </div>
                    </form>
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h5 class="text-3 mb-3">Обработка персональных данных</h5>
                <div>
                    <ul class="list list-icons list-primary">
                        <li>
                            <i class="fas fa-check"></i> <a target="_blank"
                                                            href="https://foodtech.su/img/politic/data_processing_policy_at_JSC_RUS-Industry.pdf">Политика
                                обработки персональных данных в АО РУС-Индустрия*</a>
                        </li>
                        <li>
                            <i class="fas fa-check"></i> <a target="_blank"
                                                            href="https://foodtech.su/img/politic/personal_data_processing_policy_at_FOOD-TECH_LLC.pdf">Политика
                                обработки персональных данных в ООО ТПК Центр-ЗиП*</a>
                        </li>
                        <li>
                            <i class="fas fa-check"></i> <a target="_blank"
                                                            href="https://foodtech.su/img/politic/personal_data_processing_policy_at_TPK_Center-ZiP_LLC.pdf">Политика
                                обработки персональных данных в ООО ФУД-ТЕХ*</a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-md-6 col-lg-3 offset-lg-1 mb-4 mb-md-0">
                <div class="contact-details">
                    <h5 class="text-3 mb-3">Контакты</h5>
                    <ul class="list list-icons list-icons-lg">
                        <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i>
                            <p class="m-0">308010, РФ, Белгородская область,
                                Белгородский район, пгт. Северный,
                                ул Березовая, дом 1/14</p></li>
                        <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i>
                            <p class="m-0"><a href="tel:+74722735050">+7 (4722) 73-50-50</a></p>
                        </li>
                        <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i>
                            <p class="m-0"><a href="tel:+79805251652">+7-980-525-16-52</a></p>
                        </li>
                        <li class="mb-1"><i class="far fa-envelope text-color-primary"></i>
                            <p class="m-0">
                                <a href="mailto:info@foodtech.su">
                                    info@foodtech.su
                                </a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <?php if (0): ?>
                <div class="col-md-6 col-lg-2">
                    <h5 class="text-3 mb-3">Соц.сети</h5>
                    <ul class="social-icons">
                        <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank"
                                                             title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank"
                                                            title="Twitter"><i
                                        class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank"
                                                             title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                    <p>© Copyright <?= date('Y'); ?>. Все данные принадлежат foodtech.su</p>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                    <nav id="sub-menu">
                        <ul>
                            <li><i class="fas fa-angle-right"></i><a href="/about/" class="ms-1 text-decoration-none">О
                                    компании</a></li>
                            <li><i class="fas fa-angle-right"></i><a href="/contacts/"
                                                                     class="ms-1 text-decoration-none">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>


</div>


</body>
</html>