<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>

<section class="catalog section">
    <div class="container">
        <div class="section-name">
            <h2 class="subtitle"><?=$arParams['BLOCK_TITLE']?></h2>

        </div>
        <? if (!empty($arParams['BLOCK_DESCRIPTION'])): ?>
            <div class="desc"><?= $arParams['BLOCK_DESCRIPTION'] ?></div>
        <? endif; ?>
            
        <div class="categories">
            <? foreach ($arResult['SECTIONS'] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                ?>
                <div class="category" id="<? echo $this->GetEditAreaId($arItem['ID']); ?>">
                    <a href="<?= $arItem['SECTION_PAGE_URL'] ?>" class="preview-image" <? if (!empty($arItem['PICTURE']['SRC'])): ?>style="background-image: url('<?= $arItem['PICTURE']['SRC'] ?>')"<? endif; ?> ></a>
                    <div class="text">
                        <div class="name">
                            <a href="<?= $arItem['SECTION_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a>
                        </div>
                        <? if (!empty($arItem['DETAIL_DESC'])): ?>
                            <div class="desc"><?= $arItem['DETAIL_DESC'] ?></div>
                        <? endif; ?>
                        <div class="detail"><a href="<?= $arItem['SECTION_PAGE_URL'] ?>">Подробнее</a></div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>

    </div>
</section>