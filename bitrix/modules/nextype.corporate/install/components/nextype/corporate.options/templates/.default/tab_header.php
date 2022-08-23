<div class="nt-public-options-content-f">
    <div class="nt-public-options-content-f-label"><?=GetMessage('NT_OPTIONS_HEADER_CALLBACK_H_T')?></div>
    <div class="nt-public-options-switcher">
        <input type="hidden" name="HEADER_CALLBACK" value="<?=$arResult['CURRENT_OPTIONS']['HEADER_CALLBACK']?>" />
    </div>
</div>

<div class="nt-public-options-content-f column">
    <div class="nt-public-options-content-f-label"><?=GetMessage('NT_OPTIONS_HEADER_TYPE_H_T')?></div>
    
    <? $arHeaderType = Array (
        Array (
            'VALUE' => 'type1',
            'PREVIEW' => $templateFolder . "/images/headers/type1.jpg"
        ),
        Array (
            'VALUE' => 'type2',
            'PREVIEW' => $templateFolder . "/images/headers/type2.jpg"
        ),
        Array (
            'VALUE' => 'type3',
            'PREVIEW' => $templateFolder . "/images/headers/type3.jpg"
        ),
        Array (
            'VALUE' => 'type4',
            'PREVIEW' => $templateFolder . "/images/headers/type4.jpg"
        )
    ); ?>
    <div class="nt-public-options-select-preview">
        <? foreach ($arHeaderType as $key => $arType): ?>
        <a href="javascript:void(0);" <?if($arResult['CURRENT_OPTIONS']['HEADER_TYPE']==$arType['VALUE']):?>class="active"<?endif;?> data-value="<?=$arType['VALUE']?>">
            <span><?=$key+1?>.</span>
            <img src="<?=$arType['PREVIEW']?>" />
        </a>
        <? endforeach; ?>
        
        
        <input type="hidden" value="<?=$arResult['CURRENT_OPTIONS']['HEADER_TYPE']?>" name="HEADER_TYPE" />
    </div>
</div>