<?
$arTitles = Array(
    "advantages" => GetMessage('NT_OPTIONS_HOMEPAGE_ADVANTAGES'),
    "tizers" => GetMessage('NT_OPTIONS_HOMEPAGE_TIZERS'),
    "catalog" => GetMessage('NT_OPTIONS_HOMEPAGE_CATALOG'),
    "catalog_top" => GetMessage('NT_OPTIONS_HOMEPAGE_CATALOG_TOP'),
    "company" => GetMessage('NT_OPTIONS_HOMEPAGE_COMPANY'),
    "news" => GetMessage('NT_OPTIONS_HOMEPAGE_NEWS'),
    "brands" => GetMessage('NT_OPTIONS_HOMEPAGE_BRANDS'),
    "instagram" => GetMessage('NT_OPTIONS_HOMEPAGE_INSTAGRAM'),
);

$arHomepageBlocks = unserialize($arResult['CURRENT_OPTIONS']['HOMEPAGE_BLOCKS']);
?>

<div class="nt-public-options-content-h">
    <?=GetMessage('NT_OPTIONS_HOMEPAGE_BLOCKS_H_T')?>
</div>

<? $containerID = md5("homepage_blocks"); ?>
<ul id="<?=$containerID?>">
<? foreach ($arHomepageBlocks as $key => $arValues): ?>
<li class="nt-public-options-content-f drag">
    <div class="nt-public-options-content-f-label"><?=$arTitles[$key]?></div>
    <div class="nt-public-options-switcher">
        <input type="hidden" name="HOMEPAGE_BLOCKS[<?=$key?>][ACTIVE]" value="<?=$arValues['ACTIVE']?>" />
    </div>
</li>
<? endforeach; ?>
</ul>

<script>
$( function() {
    $("#<?=$containerID?>").sortable();
} );
</script>
