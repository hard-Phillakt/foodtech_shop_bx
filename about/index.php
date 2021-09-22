<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");

?>

    <div role="main" class="main">

        <div id="particles-bg"></div>

        <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}"
                 data-image-src="<?= DEFAULT_TEMPLATE_PATH ?>/images/bg/bg-about.webp">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1>Группа компаний <strong>«FOODTECH»</strong></h1>
                        <span class="sub-title">готовые решения в сфере интеграции оборудования для автоматизации производств.</span>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb breadcrumb-light d-block text-md-right">
                            <li><a href="/">Главная</a></li>
                            <li class="active">О компании</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row">
                <div class="col">

                    <div class="row text-center pb-5 mb-5">
                        <div class="col-md-9 mx-md-auto">
                            <div class="overflow-hidden mb-3">
                                <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                                    <span>О компании</span>
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-5">
                                <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                                    Наша команда уже более 16 лет занимается модернизацией существующего производства и автоматизацией новых производств, а благодаря нашему гарантийному и постгарантийному обслуживанию, эти предприятия
                                    успешно продолжают свою работу и находятся в списке лидеров производителей своей отрасли.
                                </p>
                            </div>
                            <iframe width="100%" height="500" src="https://www.youtube.com/embed/1xbtI52SMgU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php
                            // Кнопка вызова модалки с видео
                            if(0): ?>
                                <div class="col-md-12 text-center">
                                    <a class="mt-1 mb-1 me-1 popup-youtube btn btn-modern btn-primary" href="https://www.youtube.com/watch?v=1xbtI52SMgU">Видеопрезентация</a>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>


                    <div class="row text-center">
                        <div class="overflow-hidden mb-3">
                            <h2 class="text-6 mb-2" data-appear-animation="maskUp" data-appear-animation-delay="200">
                                В группу компаний <strong>«FOODTECH»</strong> входят:
                            </h2>
                        </div>
                    </div>

                    <div class="row mt-3 mb-5">
                        <div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                            <h3 class="font-weight-bold text-4 mb-2">АО "РУС-Индустрия"</h3>
                            <p>АО "Рус-Индустрия" <br> ИНН 3102040544 <br> ОГРН 1173123023017</p>
                        </div>
                        <div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                            <h3 class="font-weight-bold text-4 mb-2">ООО "ТПК-Центр ЗИП"</h3>
                            <p>ООО ТПК "Центр-Зип" <br> ИНН 3123376785 <br> ОГРН 1153123018421</p>
                        </div>
                        <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                            <h3 class="font-weight-bold text-4 mb-2">ООО "ФУДТЕХ"</h3>
                            <p>ООО "Фудтех" <br> ИНН 9731019042 <br> ОГРН 5187746000690</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
            <div class="container">
                <div class="row counters counters-sm pb-4 pt-3">
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <i class="icons icon-user text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="323" data-append="+">0</strong>
                            <label class="text-4 mt-1 text-color-light">Клиентов</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <i class="icons icon-badge text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="16">0</strong>
                            <label class="text-4 mt-1 text-color-light">лет на рынке</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                        <div class="counter">
                            <i class="icons icon-graph text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="112">0</strong>
                            <label class="text-4 mt-1 text-color-light">Автоматизаций новых производств</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <i class="icon-basket icons text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="1152">0</strong>
                            <label class="text-4 mt-1 text-color-light">Проданного оборудавания</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-height-5 p-5 pb-5 m-0 border-0">
            <div class="container">
                <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                    <div class="col-md-5 mb-4 mb-md-0">
                        <img class="img-fluid scale-2 pe-5 pe-md-0 my-4" src="<?= DEFAULT_TEMPLATE_PATH ?>/images/team-exhibition.webp" alt="Направления нашей деятельности" />
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Направления</strong> нашей деятельности:</h2>
                        <p class="text-4">- Автоматизация и роботизация производств, путём поставки и установки собственного оборудования и из Европы;</p>
                        <p class="text-4">- Интеграция оборудования в производство, его ремонт, сервисное обслуживание и снабжение запасными частями;</p>
                        <p class="text-4">- Разработка и внедрение IT-решений для автоматизации процессов MES уровня;</p>
                        <p class="text-4">- Реализация таких упаковочных материалов как пищевые лотки, термо- и стрейч-плёнка, а также производство термоэтикеток;</p>
                        <p class="text-4">- Производство одежды однократного применения, хлопчатобумажных перчаток и средств индивидуальной защиты.</p>
                    </div>
                </div>
            </div>
        </section>
<!--        class="section section-height-3 bg-color-grey-scale-1 m-0 border-0"-->
        <section
                 class="video section section-text-light section-video section-overlay-opacity section-overlay-opacity-scale-8 pb-5"
                 data-video-path="<?= DEFAULT_TEMPLATE_PATH ?>/video/areas" data-plugin-video-background
                 data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}"
        >
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
                        <h2 class="text-color-white font-weight-normal text-6 mb-2">Наша <strong class="font-weight-extra-bold"> миссия:</strong></h2>
                    </div>
                </div>

                <div class="row mt-3 mb-5">
                    <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="100">
                        <p class="lead"><strong class="text-color-white">Клиентам</strong> - помочь предприятиям пищевой промышленности стать ведущими поставщиками качественной и востребованной продукции, путём интеграции автоматизации и роботизации на
                            производстве.</p>
                    </div>
                    <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                        <p class="lead"><strong class="text-color-white">Сотрудникам</strong> – получать поддержку и достойную оценку своего вклада в развитие компании и своего личностного роста от команды и руководства компании.</p>

                    </div>
                    <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                        <p class="lead"><strong class="text-color-white">Акционерам</strong> – иметь материальные и психологические дивиденды от партнёрства с интегратором # 1 в России.</p>

                    </div>
                    <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                        <p class="lead"><strong class="text-color-white">Государству</strong> – создать комфортные и достойно оплачиваемые рабочие места, поддерживать высокий вклад в экономику страны, развивать долгосрочные и взаимовыгодные международные торговые
                            отношения.</p>
                    </div>
                </div>
            </div>
        </section>


    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>