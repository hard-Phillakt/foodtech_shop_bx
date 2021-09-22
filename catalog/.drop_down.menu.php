<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    Array(
        "ID" => $_REQUEST["ID"],
        "IBLOCK_TYPE" => "components",
        "IBLOCK_ID" => "0",
        "SECTION_URL" => "",
        "DEPTH_LEVEL" => "2",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "0"
    )
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);

?>


