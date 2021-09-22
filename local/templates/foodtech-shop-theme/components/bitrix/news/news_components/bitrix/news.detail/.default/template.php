<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>
    <div class="col-lg-3 ">
        <aside class="sidebar">
            <h5 class="pt-3">Комплектующие</h5>

            <? $APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "catalog_equipment_list",
                Array(
                    "ADD_SECTIONS_CHAIN" => "N",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "0",
                    "CACHE_TYPE" => "N",
                    "COUNT_ELEMENTS" => "N",
                    "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                    "FILTER_NAME" => "sectionsFilter",
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "components",
                    "SECTION_CODE" => "",
                    "SECTION_FIELDS" => array("", ""),
                    "SECTION_ID" => $_REQUEST["SECTION_ID"],
                    "SECTION_URL" => "#SECTION_CODE#/",
                    "SECTION_USER_FIELDS" => array("", ""),
                    "SHOW_PARENT_NAME" => "Y",
                    "TOP_DEPTH" => "3",
                    "VIEW_MODE" => "TEXT"
                )
            ); ?>

            <?php if (0): ?>
                <ul class="nav nav-list flex-column">

                    <li class="nav-item">
                        <a class="nav-link" href="#!">Arts & Crafts</a>
                    </li>

                </ul>
            <? endif; ?>

            <?php if (0): ?>
                <h5 class="font-weight-semi-bold pt-5">Теги</h5>

                <div class="mb-3 pb-1">
                    <a href="#!">
                        <span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">Nike</span>
                    </a>
                </div>
            <? endif; ?>

            <?php if (0): ?>
                <div class="row mb-5">
                    <div class="col">
                        <h5 class="font-weight-semi-bold pt-5">Топ продаваемых</h5>
                        <div class="product row row-gutter-sm align-items-center mb-4">
                            <div class="col-5 col-lg-5">
                                <div class="product-thumb-info border-0">
                                    <a href="#!">
                                        <div class="product-thumb-info-image">
                                            <img alt="" class="img-fluid"
                                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/img/products/product-grey-6.jpg">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                                <a href="#!"
                                   class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">hat</a>
                                <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                    <a href="#!" class="text-color-dark text-color-hover-primary text-decoration-none">Blue
                                        Hat</a>
                                </h3>
                                <div title="Rated 5 out of 5">
                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                                           data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                                </div>
                                <p class="price text-4 mb-0">
                                    <span class="sale text-color-dark font-weight-semi-bold">$299,00</span>
                                    <span class="amount">$289,00</span>
                                </p>
                            </div>
                        </div>
                        <div class="product row row-gutter-sm align-items-center mb-4">
                            <div class="col-5 col-lg-5">
                                <div class="product-thumb-info border-0">
                                    <a href="#!">
                                        <div class="product-thumb-info-image">
                                            <img alt="" class="img-fluid"
                                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/img/products/product-grey-8.jpg">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                                <a href="#!"
                                   class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">accessories</a>
                                <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                    <a href="#!"
                                       class="text-color-dark text-color-hover-primary text-decoration-none">
                                        Adventurer Bag
                                    </a>
                                </h3>
                                <div title="Rated 5 out of 5">
                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                                           data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                                </div>
                                <p class="price text-4 mb-0">
                                    <span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
                                    <span class="amount">$79,00</span>
                                </p>
                            </div>
                        </div>
                        <div class="product row row-gutter-sm align-items-center mb-4">
                            <div class="col-5 col-lg-5">
                                <div class="product-thumb-info border-0">
                                    <a href="shop-product-sidebar-left.html">
                                        <div class="product-thumb-info-image">
                                            <img alt="" class="img-fluid"
                                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/img/products/product-grey-9.jpg">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                                <a href="shop-3-columns-sidebar-left.html#"
                                   class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">sports</a>
                                <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                    <a href="shop-product-sidebar-right.html"
                                       class="text-color-dark text-color-hover-primary text-decoration-none">
                                        Baseball Ball
                                    </a>
                                </h3>
                                <div title="Rated 5 out of 5">
                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                                           data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                                </div>
                                <p class="price text-4 mb-0">
                                    <span class="sale text-color-dark font-weight-semi-bold">$399,00</span>
                                    <span class="amount">$299,00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <? endif; ?>

        </aside>
    </div>

    <div class="col-lg-8 offset-md-1">

        <div class="row">
            <div class="col-lg-8 offset-md-2">

                <div class="thumb-gallery-wrapper mb-5">

                    <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>

                        <a class="lightbox" href="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="Project Image">
                        </a>

                    <? endif ?>

                </div>
            </div>

            <div class="col-lg-6">

                <div class="summary entry-summary position-relative">

                    <h1 class="mb-0 font-weight-bold text-7">
                        <?php if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]): ?>
                            <?php
                            mb_internal_encoding("UTF-8");
                            function mb_ucfirst($text) {
                                return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
                            }
                            echo mb_ucfirst($arResult["NAME"]);
                            ?>
                        <?php endif; ?>
                    </h1>

                    <div class="divider divider-small">
                        <hr class="bg-color-grey-scale-4">
                    </div>

                    <div class="text-3-5 mb-3">
                        <?= htmlspecialchars_decode($arResult["PREVIEW_TEXT"]) ?>
                    </div>

                    <?php if(0): ?>
                        <div class="d-flex align-items-center">
                        <ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark me-3 mb-0">
                            <!-- Facebook -->
                            <li class="social-icons-facebook">
                                <a href="https://www.facebook.com/sharer.php?u=https://www.okler.net" target="_blank"
                                   data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top"
                                   title="Share On Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <!-- Google+ -->
                            <li class="social-icons-googleplus">
                                <a href="https://plus.google.com/share?url=https://www.okler.net" target="_blank"
                                   data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top"
                                   title="Share On Google+">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <!-- Twitter -->
                            <li class="social-icons-twitter">
                                <a href="https://twitter.com/share?url=https://www.okler.net&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons"
                                   target="_blank" data-bs-toggle="tooltip" data-bs-animation="false"
                                   data-bs-placement="top" title="Share On Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <!-- Email -->
                            <li class="social-icons-email">
                                <a href="https://www.okler.net/cdn-cgi/l/email-protection#201f7355424a4543541d73484152450074484953007041474506414d501b624f44591d6905121053415705121054484953051210414e4405121054484f554748540512104f46051210594f55010512100048545450531a0f0f5757570e4f4b4c45520e4e4554"
                                   data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top"
                                   title="Share By Email">
                                    <i class="far fa-envelope"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col">

                <div id="description" class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2">
                    <ul class="nav nav-tabs justify-content-start">

                        <?php if (!empty($arResult["PROPERTIES"]['SPECIFICATIONS']['VALUE']['TEXT'])): ?>
                            <li class="nav-item">
                                <a class="nav-link active font-weight-bold text-3 text-uppercase py-2 px-3"
                                   href="#<?= $arResult["PROPERTIES"]['SPECIFICATIONS']['CODE'] ?>" data-bs-toggle="tab">
                                    <?= $arResult["PROPERTIES"]['SPECIFICATIONS']['NAME'] ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($arResult["PROPERTIES"]['CAPABILITIES']['VALUE']['TEXT'])): ?>
                            <li class="nav-item">
                                <a class="nav-link  font-weight-bold text-3 text-uppercase py-2 px-3" href="#<?= $arResult["PROPERTIES"]['CAPABILITIES']['CODE'] ?>" data-bs-toggle="tab">
                                    <?= $arResult["PROPERTIES"]['CAPABILITIES']['NAME'] ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($arResult["PROPERTIES"]['MODEL']['VALUE']['TEXT'])): ?>
                            <li class="nav-item">
                                <a class="nav-link  font-weight-bold text-3 text-uppercase py-2 px-3" href="#<?= $arResult["PROPERTIES"]['MODEL']['CODE'] ?>" data-bs-toggle="tab">
                                    <?= $arResult["PROPERTIES"]['MODEL']['NAME'] ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($arResult["PROPERTIES"]['ACCESSORIES']['VALUE']['TEXT'])): ?>
                            <li class="nav-item">
                                <a class="nav-link  font-weight-bold text-3 text-uppercase py-2 px-3" href="#<?= $arResult["PROPERTIES"]['ACCESSORIES']['CODE'] ?>" data-bs-toggle="tab">
                                    <?= $arResult["PROPERTIES"]['ACCESSORIES']['NAME'] ?>
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>

                    <div class="tab-content p-0">
                        <?php if (!empty($arResult["PROPERTIES"]['SPECIFICATIONS']['VALUE']['TEXT'])): ?>
                            <div class="tab-pane active px-0 py-3" id="<?= $arResult["PROPERTIES"]['SPECIFICATIONS']['CODE'] ?>">
                                <?= htmlspecialchars_decode($arResult["PROPERTIES"]['SPECIFICATIONS']['VALUE']['TEXT']) ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($arResult["PROPERTIES"]['CAPABILITIES']['VALUE']['TEXT'])): ?>
                            <div class="tab-pane px-0 py-3" id="<?= $arResult["PROPERTIES"]['CAPABILITIES']['CODE'] ?>">
                                <?= htmlspecialchars_decode($arResult["PROPERTIES"]['CAPABILITIES']['VALUE']['TEXT']) ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($arResult["PROPERTIES"]['MODEL']['VALUE']['TEXT'])): ?>
                            <div class="tab-pane px-0 py-3" id="<?= $arResult["PROPERTIES"]['MODEL']['CODE'] ?>">
                                <?= htmlspecialchars_decode($arResult["PROPERTIES"]['MODEL']['VALUE']['TEXT']) ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($arResult["PROPERTIES"]['ACCESSORIES']['VALUE']['TEXT'])): ?>
                            <div class="tab-pane px-0 py-3 " id="<?= $arResult["PROPERTIES"]['ACCESSORIES']['CODE'] ?>">
                                <?= htmlspecialchars_decode($arResult["PROPERTIES"]['ACCESSORIES']['VALUE']['TEXT']) ?>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>

            </div>
        </div>

        <hr class="solid my-5">

        <div>
            <a href="<?= $arParams['IBLOCK_URL'] ?><?= $arParams['SECTION_CODE'] ?>/">вернуться к товарам</a>
        </div>

        <?php if (0): ?>
            <h4 class="mb-3">Related <strong>Products</strong></h4>

            <div class="products row">
                <div class="col">
                    <div class="owl-carousel owl-theme show-nav-title nav-dark mb-0"
                         data-plugin-options="{'loop': false, 'autoplay': false,'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true}">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                                <div class="product-thumb-info-badges-wrapper">
                                    <span class="badge badge-ecommerce badge-success">NEW</span>
                                </div>
                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="ajax/shop-product-quick-view.html"
                                   class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-1.jpg">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="shop-product-sidebar-left.html#"
                                       class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">electronics</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                        <a href="shop-product-sidebar-right.html"
                                           class="text-color-dark text-color-hover-primary">Photo Camera</a></h3>
                                </div>
                                <a href="shop-product-sidebar-left.html#"
                                   class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                            class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                                       data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">$69,00</span>
                                <span class="amount">$59,00</span>
                            </p>
                        </div>
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                                <div class="product-thumb-info-badges-wrapper">
                                    <span class="badge badge-ecommerce badge-success">NEW</span>
                                    <span class="badge badge-ecommerce badge-danger">27% OFF</span>
                                </div>
                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="ajax/shop-product-quick-view.html"
                                   class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image product-thumb-info-image-effect">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-7.jpg">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-7-2.jpg">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="shop-product-sidebar-left.html#"
                                       class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                        <a href="shop-product-sidebar-right.html"
                                           class="text-color-dark text-color-hover-primary">Porto Headphone</a></h3>
                                </div>
                                <a href="shop-product-sidebar-left.html#"
                                   class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                            class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                                       data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">$199,00</span>
                                <span class="amount">$99,00</span>
                            </p>
                        </div>
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="ajax/shop-product-quick-view.html"
                                   class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-2.jpg">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="shop-product-sidebar-left.html#"
                                       class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                        <a href="shop-product-sidebar-right.html"
                                           class="text-color-dark text-color-hover-primary">Golf Bag</a></h3>
                                </div>
                                <a href="shop-product-sidebar-left.html#"
                                   class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                            class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                                       data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">$29,00</span>
                                <span class="amount">$19,00</span>
                            </p>
                        </div>
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                                <div class="product-thumb-info-badges-wrapper">

                                    <span class="badge badge-ecommerce badge-danger">27% OFF</span>
                                </div>
                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="ajax/shop-product-quick-view.html"
                                   class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-3.jpg">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="shop-product-sidebar-left.html#"
                                       class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                        <a href="shop-product-sidebar-right.html"
                                           class="text-color-dark text-color-hover-primary">Workout</a></h3>
                                </div>
                                <a href="shop-product-sidebar-left.html#"
                                   class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                            class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                                       data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">$40,00</span>
                                <span class="amount">$30,00</span>
                            </p>
                        </div>
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="ajax/shop-product-quick-view.html"
                                   class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-4.jpg">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="shop-product-sidebar-left.html#"
                                       class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                        <a href="shop-product-sidebar-right.html"
                                           class="text-color-dark text-color-hover-primary">Luxury Bag</a></h3>
                                </div>
                                <a href="shop-product-sidebar-left.html#"
                                   class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                            class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                                       data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
                                <span class="amount">$79,00</span>
                            </p>
                        </div>
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="ajax/shop-product-quick-view.html"
                                   class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-5.jpg">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="shop-product-sidebar-left.html#"
                                       class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                        <a href="shop-product-sidebar-right.html"
                                           class="text-color-dark text-color-hover-primary">Styled Bag</a></h3>
                                </div>
                                <a href="shop-product-sidebar-left.html#"
                                   class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                            class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                                       data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">$199,00</span>
                                <span class="amount">$119,00</span>
                            </p>
                        </div>
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="ajax/shop-product-quick-view.html"
                                   class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-6.jpg">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="shop-product-sidebar-left.html#"
                                       class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">hat</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                        <a href="shop-product-sidebar-right.html"
                                           class="text-color-dark text-color-hover-primary">Blue Hat</a></h3>
                                </div>
                                <a href="shop-product-sidebar-left.html#"
                                   class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                            class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                                       data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">$299,00</span>
                                <span class="amount">$289,00</span>
                            </p>
                        </div>
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="ajax/shop-product-quick-view.html"
                                   class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-8.jpg">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="shop-product-sidebar-left.html#"
                                       class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                        <a href="shop-product-sidebar-right.html"
                                           class="text-color-dark text-color-hover-primary">Adventurer Bag</a></h3>
                                </div>
                                <a href="shop-product-sidebar-left.html#"
                                   class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                            class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                                       data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
                                <span class="amount">$79,00</span>
                            </p>
                        </div>
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="ajax/shop-product-quick-view.html"
                                   class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-9.jpg">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="shop-product-sidebar-left.html#"
                                       class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                        <a href="shop-product-sidebar-right.html"
                                           class="text-color-dark text-color-hover-primary">Baseball Ball</a></h3>
                                </div>
                                <a href="shop-product-sidebar-left.html#"
                                   class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                            class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                                       data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">$399,00</span>
                                <span class="amount">$299,00</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
