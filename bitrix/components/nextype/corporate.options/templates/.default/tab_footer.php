<div class="nt-public-options-content-f column">
    <div class="nt-public-options-content-f-label"><?=GetMessage('NT_OPTIONS_FOOTER_TYPE_H_T')?></div>
    
    <? $arHeaderType = Array (
        Array (
            'VALUE' => 'type1',
            'PREVIEW' => $templateFolder . "/images/footers/type1.jpg"
        ),
        Array (
            'VALUE' => 'type2',
            'PREVIEW' => $templateFolder . "/images/footers/type2.jpg"
        ),
        Array (
            'VALUE' => 'type3',
            'PREVIEW' => $templateFolder . "/images/footers/type3.jpg"
        ),
        Array (
            'VALUE' => 'type4',
            'PREVIEW' => $templateFolder . "/images/footers/type4.jpg"
        ),
        Array (
            'VALUE' => 'type5',
            'PREVIEW' => $templateFolder . "/images/footers/type5.jpg"
        ),
        Array (
            'VALUE' => 'type6',
            'PREVIEW' => $templateFolder . "/images/footers/type6.jpg"
        )
    ); ?>
    <div class="nt-public-options-select-preview">
        <? foreach ($arHeaderType as $key => $arType): ?>
        <a href="javascript:void(0);" <?if($arResult['CURRENT_OPTIONS']['FOOTER_TYPE']==$arType['VALUE']):?>class="active"<?endif;?> data-value="<?=$arType['VALUE']?>">
            <span><?=$key+1?>.</span>
            <img src="<?=$arType['PREVIEW']?>" />
        </a>
        <? endforeach; ?>
        
        
        <input type="hidden" value="<?=$arResult['CURRENT_OPTIONS']['FOOTER_TYPE']?>" name="FOOTER_TYPE" />
    </div>
</div>