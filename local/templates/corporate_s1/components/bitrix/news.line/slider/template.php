<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$strId = randString(5);
?>

<div class="top-slider">
	<div class="owl-carousel" id="<?=$strId?>">
            <? foreach ($arResult['ITEMS'] as $arItem): ?>
            <? $position = ''; if ($arItem['TEXT_POSITION'] == "CENTER") $position = ' center'; elseif ($arItem['TEXT_POSITION'] == "RIGHT") $position = ' right'; ?> 
		<div class="item<?=$position?>" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>');">
			<div class="container">
                <div class="slider-text">
				    <h1 class="name"><?=$arItem['NAME']?></h1>
				    <div class="desc"><?=$arItem['PREVIEW_TEXT']?></div>
                </div>
                                <div class="actions">
                                <? if (!empty($arItem['BUTTON_PRIMARY_TEXT'])):?>
				<a title="Купить_<?=$arItem['NAME']?>_в Москве" href="<?=$arItem['BUTTON_PRIMARY_LINK']?>" class="btn big color"><?=$arItem['BUTTON_PRIMARY_TEXT']?></a>
                                <? endif; ?>
                                
                                <? if (!empty($arItem['BUTTON_SECOND_TEXT'])):?>
				<a title="Купить_<?=$arItem['NAME']?>_в Москве" href="<?=$arItem['BUTTON_SECOND_LINK']?>" class="btn big"><?=$arItem['BUTTON_SECOND_TEXT']?></a>
                                <? endif; ?>
                                </div>
			</div>
		</div>
		<? endforeach; ?>
	</div>
	<script>
		$('#<?=$strId?>').owlCarousel({
                    items: 1,
		    loop: false,
		    nav: false,
		    navText: ["<div class='prev icon icon-back'></div>", "<div class='next icon icon-forward'></div>"],
		    dots: true
		});
	</script>
</div>