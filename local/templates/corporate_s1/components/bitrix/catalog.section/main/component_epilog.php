<?php
global $APPLICATION;
if(!empty($arResult['UF_TOP_DESCRIPTION']))
{
    $APPLICATION->SetPageProperty('top_description', $arResult['UF_TOP_DESCRIPTION']['VALUE']);
}
