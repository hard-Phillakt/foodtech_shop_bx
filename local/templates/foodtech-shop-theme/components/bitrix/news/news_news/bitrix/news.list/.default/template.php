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
    <div class="blog-posts">

        <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
            <?= $arResult["NAV_STRING"] ?>
        <? endif; ?>

        <? foreach ($arResult["ITEMS"] as $arItem): ?>

        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <article class="post post-medium">
            <div class="row mb-3">
                <div class="col-lg-5">
                    <div class="post-image">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                 class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                 alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                 title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                            />
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="post-content">
                        <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"]; ?></a>
                        </h2>
                        <p class="mb-0">
                            <?= $arItem["PREVIEW_TEXT"]; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="post-meta">

                        <span><i class="far fa-calendar-alt"></i> <?= $arItem["TIMESTAMP_X"] ?> </span>
                        <span><i class="far fa-user"></i> <a href="/">Foodtech</a> </span>
                        <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0">
                            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="btn btn-xs btn-light text-1 text-uppercase">подробнее</a>
                        </span>

                    </div>
                </div>
            </div>
        </article>

        <? endforeach; ?>

        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <?= $arResult["NAV_STRING"] ?>
        <? endif; ?>

    </div>
</div>







<?php if (0): ?>

    <div class="news-list">
        <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
            <?= $arResult["NAV_STRING"] ?><br/>
        <? endif; ?>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
        <p class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img
                                class="preview_picture"
                                border="0"
                                src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
                                height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                                alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                                style="float:left"
                        /></a>
                <? else: ?>
                    <img
                            class="preview_picture"
                            border="0"
                            src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                            width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
                            height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                            alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                            title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                            style="float:left"
                    />
                <? endif; ?>
            <? endif ?>
            <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                <span class="news-date-time"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
            <? endif ?>
            <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                    <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><b><? echo $arItem["NAME"] ?></b></a><br/>
                <? else: ?>
                    <b><? echo $arItem["NAME"] ?></b><br/>
                <? endif; ?>
            <? endif; ?>
            <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                <? echo $arItem["PREVIEW_TEXT"]; ?>
            <? endif; ?>
            <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                <div style="clear:both"></div>
            <? endif ?>
            <? foreach ($arItem["FIELDS"] as $code => $value): ?>
                <small>
                    <?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?>
                </small><br/>
            <? endforeach; ?>
            <? foreach ($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
                <small>
                    <?= $arProperty["NAME"] ?>:&nbsp;
                    <? if (is_array($arProperty["DISPLAY_VALUE"])): ?>
                        <?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
                    <? else: ?>
                        <?= $arProperty["DISPLAY_VALUE"]; ?>
                    <? endif ?>
                </small><br/>
            <? endforeach; ?>
            </p>
        <? endforeach; ?>
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <br/><?= $arResult["NAV_STRING"] ?>
        <? endif; ?>
    </div>

<?php endif; ?>

