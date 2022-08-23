<?
use Bitrix\Main\Application;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (! \Bitrix\Main\Loader::includeModule('iblock') || ! \Bitrix\Main\Loader::includeModule('nextype.corporate') )
    die();


$request = Application::getInstance()->getContext()->getRequest(); 
$arOptions = \Nextype\Corporate\CCorporate::$options;

if ($arOptions['LOCATIONS'] != "Y")
    return;


$arResult['LOCATIONS'] = \Nextype\Corporate\CCache::CIBlockElement_GetList(Array('SORT' => 'ASC'), Array(
        'IBLOCK_ID' => \Nextype\Corporate\COptions::getIblockID('cities'),
        'ACTIVE' => 'Y'
), true);


if (count($arResult['LOCATIONS']) == 0)
    return;

$protocol = (\CMain::IsHTTPS()) ? "https://" : "http://";

foreach ($arResult['LOCATIONS'] as $key => $arItem)
{
    if (!empty($arItem['PROPERTIES']['SUBDOMAIN']['VALUE']) && $arItem['PROPERTIES']['SUBDOMAIN']['VALUE'] != "*")
    {
        $arResult['LOCATIONS'][$key]['URL'] = $protocol . $arItem['PROPERTIES']['SUBDOMAIN']['VALUE'] . "." . SITE_SERVER_NAME . $APPLICATION->GetCurPageParam();
    }
    elseif (!empty($arItem['PROPERTIES']['SUBDOMAIN']['VALUE']) && $arItem['PROPERTIES']['SUBDOMAIN']['VALUE'] == "*")
    {
        $arResult['LOCATIONS'][$key]['URL'] = $protocol . SITE_SERVER_NAME . $APPLICATION->GetCurPageParam();
    }
    else
    {
        unset($arResult['LOCATIONS'][$key]);
    }
}

$arResult['CURRENT_LOCATION'] = \Nextype\Corporate\CLocations::getCurrentLocation();

if (isset($_REQUEST['city-select']) && $_REQUEST['city-select'] == "Y")
{
    $APPLICATION->set_cookie("SET_CITY", "Y", time() + 60*60*24*5, SITE_DIR, "." . SITE_SERVER_NAME);
}

$this->IncludeComponentTemplate();
