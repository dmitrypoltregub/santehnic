<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arParams["POPUP_POSITION"] = (isset($arParams["POPUP_POSITION"]) && in_array($arParams["POPUP_POSITION"], array("left", "right"))) ? $arParams["POPUP_POSITION"] : "left";

foreach($arResult["ITEMS"] as $key=>$item)
{
	if(empty($arParams['FILTER_PROPERTY_CODE_DISALLOW']))
	{
		if(!in_array($item['CODE'], $arParams['ALLOWED_PROPS']))
			unset($arResult["ITEMS"][$key]);
	}else{
		if(in_array($item['CODE'], $arParams['FILTER_PROPERTY_CODE_DISALLOW']))
			unset($arResult["ITEMS"][$key]);

	}
}