<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<?php

// dump($arParams);
// dump($arResult);
?>

<div class="col-lg-3">
    <aside class="sidebar">
        <h5 class="pt-4">Категории</h5>

        <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "catalog_news_list",
            Array(
                "ADD_SECTIONS_CHAIN" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "0",
                "CACHE_TYPE" => "N",
                "COUNT_ELEMENTS" => "N",
                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                "FILTER_NAME" => "sectionsFilter",
                "IBLOCK_ID" => "3",
                "IBLOCK_TYPE" => "news",
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

    </aside>
</div>


<div class="col-lg-9">
    <div class="blog-posts single-post">


        <article class="post post-large blog-single-post border-0 m-0 p-0">
            <div class="post-image ms-0">
                <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
                    <img
                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                            border="0"
                            src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                            width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
                            height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
                            alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                            title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
                    />
                <?endif?>
            </div>

            <div class="post-date ms-0">
                <?php $date = explode(' ', $arResult["TIMESTAMP_X"]); ?>
                <span class="day"><?= $date[0] ?></span>
                <span class="month"><?= $date[1] ?></span>
            </div>

            <div class="post-content ms-0">

                <h2 class="font-weight-semi-bold">
                    <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
                        <?=$arResult["NAME"]?>
                    <?endif;?>
                </h2>

                <div class="post-meta">
                    <span><i class="far fa-user"></i> <a href="/">Foodtech</a></span>
                    <span><i class="far fa-folder"></i> <a href="<?= $arResult['SECTION_URL']; ?>">Из категории</a> </span>
                    <span><i class="far fa-comments"></i> <a href="<?= $arResult['LIST_PAGE_URL']; ?>">Новости</a></span>
                </div>
                <p>
                    <?= $arResult['DETAIL_TEXT'] ?>
                </p>
            </div>
        </article>

        <div>
            <a href="<?= $arResult['LIST_PAGE_URL']; ?>">вернуться к новостям</a>
        </div>

    </div>
</div>
