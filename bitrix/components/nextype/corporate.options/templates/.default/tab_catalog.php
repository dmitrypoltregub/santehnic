<?
$arCatalogOptions = Array(
    Array(
        'TITLE' => GetMessage('NT_OPTIONS_CATALOG_SHOW_QTY'),
        'OPTION_NAME' => 'CATALOG_SHOW_QTY'
    ),
    Array(
        'TITLE' => GetMessage('NT_OPTIONS_CATALOG_SHOW_SHARED'),
        'OPTION_NAME' => 'CATALOG_SHOW_SHARED'
    ),
    Array(
        'TITLE' => GetMessage('NT_OPTIONS_CATALOG_SECTION_SHOW_SIDEBAR'),
        'OPTION_NAME' => 'CATALOG_SECTION_SHOW_SIDEBAR'
    ),
    Array(
        'TITLE' => GetMessage('NT_OPTIONS_CATALOG_ELEMENT_SHOW_SIDEBAR'),
        'OPTION_NAME' => 'CATALOG_ELEMENT_SHOW_SIDEBAR'
    ),
    Array(
        'TITLE' => GetMessage('NT_OPTIONS_CATALOG_SHOW_PRICE'),
        'OPTION_NAME' => 'CATALOG_SHOW_PRICE'
    ),
    Array(
        'TITLE' => GetMessage('NT_OPTIONS_CATALOG_SHORT_NAMES'),
        'OPTION_NAME' => 'CATALOG_SHORT_NAMES'
    ),
);
?>

<div class="nt-public-options-content-h">
    <?=GetMessage('NT_OPTIONS_HOMEPAGE_BLOCKS_H_T')?>
</div>

<? foreach ($arCatalogOptions as $arOption): ?>
<div class="nt-public-options-content-f">
    <div class="nt-public-options-content-f-label"><?=$arOption['TITLE']?></div>
    <div class="nt-public-options-switcher">
        <input type="hidden" name="<?=$arOption['OPTION_NAME']?>" value="<?=$arResult['CURRENT_OPTIONS'][$arOption['OPTION_NAME']]?>" />
    </div>
</div>
<? endforeach; ?>