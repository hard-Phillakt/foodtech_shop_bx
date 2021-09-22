<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<? if (!empty($arResult)): ?>
    <ul class="nav nav-pills" id="mainNav">

    <?
    $previousLevel = 0;
foreach ($arResult

    as $arItem): ?>

    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
    <? endif ?>

    <? if ($arItem["IS_PARENT"]): ?>

    <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
    <li class="dropdown">
        <a class="dropdown-item dropdown-toggle" href="<?= $arItem["LINK"] ?>">
            <?= $arItem["TEXT"] ?>
        </a>


    <ul class="dropdown-menu">
    <? else: ?>
    <li class="dropdown">
        <a class="dropdown-item dropdown-toggle" href="<?= $arItem["LINK"] ?>">
            <?= $arItem["TEXT"] ?>
        </a>

    <ul class="dropdown-menu">
    <? endif ?>

    <? else:?>

        <? if ($arItem["PERMISSION"] > "D"):?>

            <? if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="dropdown">
                    <a class="dropdown-item" href="<?= $arItem["LINK"] ?>">
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <? else:?>
                <li class="dropdown">
                    <a class="dropdown-item" href="<?= $arItem["LINK"] ?>">
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <? endif ?>

        <? else:?>

            <? if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="dropdown">
                    <a class="dropdown-item" href="<?= $arItem["LINK"] ?>">
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <? else:?>
                <li class="dropdown">
                    <a class="dropdown-item" href="<?= $arItem["LINK"] ?>">
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <? endif ?>

        <? endif ?>

    <? endif ?>

    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

<? endforeach ?>

    <? if ($previousLevel > 1)://close last item tags?>
        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
    <? endif ?>

    </ul>
<? endif ?>