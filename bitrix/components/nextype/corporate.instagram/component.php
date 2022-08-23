<?
use \Bitrix\Main;
use \Bitrix\Main\Loader;
use \Bitrix\Main\Error;
use \Bitrix\Main\Type\DateTime;
use \Bitrix\Main\Localization\Loc;
use \Bitrix\Iblock;
use \Bitrix\Iblock\Component\ElementList;
use \Nextype\Corporate\CCorporate;
use \Nextype\Corporate\CInstagram;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global CIntranetToolbar $INTRANET_TOOLBAR
 */

Loc::loadMessages(__FILE__);


if (! \Bitrix\Main\Loader::includeModule('nextype.corporate') && class_exists('CInstagram'))
    die('Module not installed');

//CSolution::getInstance(SITE_ID);



if (!empty(CCorporate::$options['INSTAGRAM_KEY']))
{
    
        $arResult['ITEMS'] = CInstagram::getImages(Array (
            'key' => CCorporate::$options['INSTAGRAM_KEY'],
            'count' => $arParams["IMAGES_COUNT"]
        ));
    
    
}
else
    $arResult['ERRORS'] = GetMessage('EMPTY_INSTAGRAM_KEY');


$this->IncludeComponentTemplate();
