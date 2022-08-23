<div class="nt-public-options-content-f column" style="padding-top: 0;">
    <div class="nt-public-options-content-f-label"><?=GetMessage('NT_OPTIONS_MAIN_COLOR_SHEME_H_T')?></div>
    
    <div class="nt-public-options-colors">
        <? foreach ($arDefaultSchemes as $scheme): ?>
        <a<?=($scheme['color1'] == $arResult['CURRENT_OPTIONS']['COLOR_SCHEME_1'] && $scheme['color2'] == $arResult['CURRENT_OPTIONS']['COLOR_SCHEME_2']) ? ' class="active"' : '' ?> data-color1="<?=$scheme['color1']?>" href="javascript:void(0);">
            <div style="background-color: <?=$scheme['color1']?>"></div>
        </a>
        <? endforeach; ?>
    </div>
</div>

<div class="nt-public-options-content-f column">
    <div class="nt-public-options-content-f-label"><?=GetMessage('NT_OPTIONS_MAIN_CUSTOM_COLOR_SHEME_H_T')?></div>
    
    <div class="nt-public-options-colors">
        <a href="javascript:void(0);" class="custom nt-public-options-colorpicker nt-public-options-custom-color1">
            <div style="background-color: <?=$arResult['CURRENT_OPTIONS']['COLOR_SCHEME_1']?>"></div>
            <input type="hidden" value="<?=$arResult['CURRENT_OPTIONS']['COLOR_SCHEME_1']?>" name="COLOR_SCHEME_1" />
        </a>
        
    </div>
</div>


<? $arSelectFields = Array (
    'FONT_FAMILY' => Array (
        'Gotham Pro' => 'Gotham Pro',
        'Ubuntu' => 'Ubuntu',
        'OpenSans' => 'OpenSans',
        'Arial' => 'Arial'
    ),
    
    'FONT_SIZE' => Array (
        "16px" => "16px",
        "15px" => "15px",
        "14px" => "14px",
    ),
    
    'SIDEBAR_TYPE' => Array (
        "FULL" => GetMessage('NT_OPTIONS_MAIN_SIDEBAR_TYPE_FULL'),
        "MENU" => GetMessage('NT_OPTIONS_MAIN_SIDEBAR_TYPE_ONLY_MENU'),
        "ASK" => GetMessage('NT_OPTIONS_MAIN_SIDEBAR_TYPE_ONLY_ASK'),
    )
); ?>

<? foreach ($arSelectFields as $code => $arOptions): ?>
<div class="nt-public-options-content-f">
    <div class="nt-public-options-content-f-label"><?=GetMessage('NT_OPTIONS_MAIN_'.$code.'_H_T')?></div>
    <div class="nt-public-options-select">
        <? foreach($arOptions as $key => $value): ?>
        <a href="javascript:void(0);" data-value="<?=$key?>" <?if($key == $arResult['CURRENT_OPTIONS'][$code]):?>class="active"<?endif;?>><?=$value?></a>
        <? endforeach; ?>
        <input name="<?=$code?>" type="hidden" value="<?=$arResult['CURRENT_OPTIONS'][$code]?>" />
    </div>
</div>
<? endforeach; ?>


<div class="nt-public-options-content-f">
    <div class="nt-public-options-content-f-label"><?=GetMessage('NT_OPTIONS_MAIN_SUBDOMAINS_H_T')?></div>
    <div class="nt-public-options-switcher">
        <input type="hidden" name="LOCATIONS" value="<?=$arResult['CURRENT_OPTIONS']['LOCATIONS']?>" />
    </div>
</div>

<div class="nt-public-options-content-f">
    <div class="nt-public-options-content-f-label"><?=GetMessage('NT_OPTIONS_MAIN_USE_BASKET_H_T')?></div>
    <div class="nt-public-options-switcher">
        <input type="hidden" name="USE_BASKET" value="<?=$arResult['CURRENT_OPTIONS']['USE_BASKET']?>" />
    </div>
</div>