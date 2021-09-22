<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("contacts");
?>

    <div role="main" class="main">

        <div id="particles-bg"></div>

        <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}"
                 data-image-src="<?= DEFAULT_TEMPLATE_PATH ?>/images/bg/bg-contacts.webp">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1>Вы можете связаться с <strong>нами</strong></h1>
                        <span class="sub-title">по указанным ниже контактам</span>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb breadcrumb-light d-block text-md-right">
                            <li><a href="/">Главная</a></li>
                            <li class="active">Контакты</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="testimonial testimonial-style-4">
                        <blockquote>
                            <h5 class="mb-2">Уважаемые клиенты, партнёры, коллеги!</h5>
                            <p class="mb-0">При возникновении вопросов, пожеланий или для того, чтобы оставить отзыв о нас воспользуйтесь данной формой. Ваше письмо получит лично я и
                                руководители соответствующих подразделений. Если Вы хотите получить обратную связь, укажите свою электронную почту или номер телефона.</p>
                        </blockquote>
                        <div class="testimonial-arrow-down"></div>
                        <div class="testimonial-author pb-3">
                            <div class="testimonial-author-thumbnail">
                                <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p><strong class="font-weight-extra-bold">Лебедев Олег Александрович</strong><span>Генеральный директор</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="overflow-hidden mb-1">

                        <h4 class="text-primary mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Город <strong>«Белгород»</strong></h4>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">
                            308010, РФ, Белгородская область, <br>
                            Белгородский район, пгт. Северный,
                            ул Березовая, дом 1/14.
                        </p>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">
                            пн-пт: 8.00-17.00,
                            сб-вс: выходной,
                            перерыв: 12.00-13.00
                        </p>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">

                        <ul class="list list-icons list-icons-style-3 mt-2">

                            <?php if(0): ?>
                             <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Адрес:</strong> ул Березовая, дом 1/14</li>
                            <?php endif; ?>

                            <li><i class="fas fa-phone top-6"></i>
                                <strong>Основной телефон:</strong>
                                <a href="tel:+74952492429"> <br> +7 (495) 249-24-29</a>
                            </li>

                            <li><i class="fas fa-phone top-6"></i>
                                <strong>Отдел продаж оборудования:</strong>
                                <a href="tel:+74722735050"> <br> +7 (4722) 73-50-50, доб. 41</a>
                            </li>

                            <li><i class="fas fa-phone top-6"></i>
                                <strong>Отдел продаж оборудования:</strong>
                                <a href="tel:+79805251652"> <br> +7-980-525-16-52</a>
                            </li>

                            <li><i class="fas fa-phone top-6"></i>
                                <strong>Отдел продаж комплектующих:</strong>
                                <a href="tel:+74722735050"> <br> +7 (4722) 73-50-50, доб. 40</a>
                            </li>

                            <li><i class="fas fa-phone top-6"></i>
                                <strong>Отдел сервисного обслуживания:</strong>
                                <a href="tel:+74722735050"> <br> +7 (4722) 73-50-50, доб. 50</a>
                            </li>

                            <li><i class="fas fa-phone top-6"></i>
                                <strong>Внедрение IT-решений:</strong>
                                <a href="tel:+79192223838"> <br> +7-919-222-38-38</a>
                            </li>

                            <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong>
                                <a href="mailto:info@foodtech.su">
                                    info@foodtech.su
                                </a>
                            </li>
                        </ul>


                        <h4 class="text-primary pt-5">Рабочие часы</h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i>Пн-Пт: 8.00-17.00,</li>
                            <li><i class="far fa-clock top-6"></i>Сб-Вс: выходной,</li>
                            <li><i class="far fa-clock top-6"></i>Перерыв: 12.00-13.00</li>
                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 offset-1">

                    <div class="overflow-hidden mb-1">
                        <h4 class="text-primary mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Город <strong>«Москва»</strong></h4>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">
                            115516, РФ, г.Москва, <br>
                            ул Промышленная, д.11, стр.2, оф. 675
                        </p>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">
                            пн-пт: 9.00-18.00,
                            сб-вс: выходной,
                            перерыв: 13.00-14.00
                        </p>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">

                        <ul class="list list-icons list-icons-style-3 mt-2">

                            <?php if(0): ?>
                                <li><i class="fas fa-map-marker-alt top-6"></i>
                                    <strong>Адрес:</strong>
                                    ул Промышленная, д.11, стр.2, оф. 675
                                </li>
                            <?php endif; ?>

                            <li><i class="fas fa-phone top-6"></i>
                                <strong>Основной телефон:</strong>
                                <a href="tel:+74952492429"> <br> +7 (495) 249-24-29</a>
                            </li>

                            <li><i class="fas fa-phone top-6"></i>
                                <strong>Отдел продаж оборудования:</strong>
                                <a href="tel:+74952492429"> <br> +7 (495) 249-24-29, доб. 1</a>
                            </li>

                            <li><i class="fas fa-phone top-6"></i>
                                <strong>Отдел продаж комплектующих:</strong>
                                <a href="tel:+74952492429"> <br> +7 (495) 249-24-29, доб. 2</a>
                            </li>

                            <li><i class="fas fa-phone top-6"></i>
                                <strong>Отдел продаж СИЗ:</strong>
                                <a href="tel:+74952492429"> <br> +7 (495) 249-24-29, доб. 3</a>
                            </li>

                            <li><i class="fas fa-phone top-6"></i>
                                <strong>Отдел сервисного обслуживания:</strong>
                                <a href="tel:+74952492429"> <br> +7 (495) 249-24-29, доб. 4</a>
                            </li>

                            <li><i class="fas fa-phone top-6"></i>
                                <strong>Внедрение IT-решений:</strong>
                                <a href="tel:+79192223838"> <br> +7-919-222-38-38</a>
                            </li>

                            <li><i class="fas fa-envelope top-6"></i>
                                <strong>Email:</strong>
                                <a href="mailto:info@foodtech.su">
                                    info@foodtech.su
                                </a>
                            </li>
                        </ul>

                        <h4 class="text-primary pt-5">Рабочие часы</h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> Пн-Пт: 9.00-18.00</li>
                            <li><i class="far fa-clock top-6"></i>Сб-Вс: выходной,</li>
                            <li><i class="far fa-clock top-6"></i>Перерыв: 13.00-14.00</li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>