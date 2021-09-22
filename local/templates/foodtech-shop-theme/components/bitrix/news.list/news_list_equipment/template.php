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

//dump($arResult);
?>


    <div class="container interested-in appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
        <div class="col">
            <h2 class="font-weight-semibold">Вас может заинтересовать</h2>


            <div class="my-4 lightbox appear-animation" data-appear-animation="fadeInUpShorter"
                 data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                <div class="owl-carousel owl-theme pb-3"
                     data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">
                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?


                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="portfolio-item">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="img-fluid border-radius-0"
                                         alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3"><?= $arItem["NAME"] ?></span>
                                        <span class="thumb-info-type">
                                            <?= $arResult['NAME'] ?>
                                        </span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                        class="fas fa-link"></i></span>
                                        </a>
                                        <a href="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="lightbox-portfolio">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                        class="fas fa-search text-dark"></i></span>
                                        </a>
                                    </span>
                                </span>
                            </span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

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