<a <?=($APPLICATION->GetCurPage() != "/") ? 'href="/"' : '';?>">
<? $arLogo = \Nextype\Corporate\CCorporate::getSiteLogo(); ?>
<? if (!empty($arLogo['SRC'])): ?>
    <img itemprop="logo" src="<?=$arLogo['SRC']?>" alt="<?=$arLogo['ALT']?>" title="<?=$arLogo['TITLE']?>">
<? else: ?>
    <? include($arLogo['DEFAULT']) ?>
<? endif; ?>
</a>