<?
$arResult = Nextype\Corporate\CBasket::getList();
?>

<a href="<?=SITE_DIR?>basket/" class="basket">
    <div class="icon-cart"></div>
    <div class="name"><?=GetMessage('BASKET_BUTTON_TEXT')?></div>
    <div class="counter"><span><?=$arResult['CNT']?></span></div>
</a>