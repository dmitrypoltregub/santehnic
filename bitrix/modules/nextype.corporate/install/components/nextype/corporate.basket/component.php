<?
use Bitrix\Main\Application;
    //Nextype\Corporate\CBasket,
    //Nextype\Corporate\CCorporate;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (! \Bitrix\Main\Loader::includeModule('iblock') )
    die();

if (! \Bitrix\Main\Loader::includeModule('nextype.corporate') )
    die();

$arProducts = \Nextype\Corporate\CBasket::getList();

if (count($arProducts['ITEMS']) > 0)
{
    /* get products IDs for getList filter */
    $arFilterIDs = array();
    foreach ($arProducts['ITEMS'] as $arProduct)
        $arFilterIDs[] = $arProduct["ID"];
    
    /* get props from database */
    $arOrder = array();
    $arFilter = array("IBLOCK_ID" => \Nextype\Corporate\COptions::getIblockID('catalog'), "=ID" => $arFilterIDs);
    $arResult = \Nextype\Corporate\CCache::CIBlockElement_GetList($arOrder, $arFilter, true);
    
    $totalPrice = 0;
    foreach ($arResult as $key => $arItem)
    {
        $arResult[$key]['PRINT_PRICE'] = \Nextype\Corporate\CCorporate::formatPrice($arItem["PROPERTIES"][\Nextype\Corporate\CBasket::propPrice]["VALUE"]);
        $arResult[$key]['PRINT_OLD_PRICE'] = \Nextype\Corporate\CCorporate::formatPrice($arItem["PROPERTIES"][\Nextype\Corporate\CBasket::propOldPrice]["VALUE"]);
        $arResult[$key]["QUANTITY"] = $arProducts['ITEMS'][$arItem["ID"]]["QTY"];
        $productSum = intval($arItem["PROPERTIES"][\Nextype\Corporate\CBasket::propPrice]["VALUE"]) * intval($arResult[$key]["QUANTITY"]);
        $totalPrice += $productSum;
        $arResult[$key]['PRINT_SUM'] = \Nextype\Corporate\CCorporate::formatPrice($productSum);
        
        /*$arProduct = \Nextype\Corporate\CCache::CIBlockElement_GetList(Array('SORT' => 'ASC'), Array(
                'IBLOCK_ID' => \Nextype\Corporate\COptions::getIblockID('catalog'),
                'ID' => $arItem['PRODUCT_ID'],
        ), true);*/
        
        //$arResult['ITEMS'][$key]['PRODUCT'] = $arProduct[0];

    }
    
    $arResult['TOTAL_PRICE'] = \Nextype\Corporate\CCorporate::formatPrice($totalPrice);
    
    if (in_array($_REQUEST['action'], array ('clear', 'delete', 'update')))
    {
        switch ($_REQUEST['action'])
        {
            case 'delete':
                if (!empty($_REQUEST['id']))
                {
                    $arBasket = \Nextype\Corporate\CBasket::delete(intval($_REQUEST['id']));
                    $jsonResult = 'ok';
                    
                    if (count($arBasket['ITEMS']) == 0)
                        $jsonResult = 'basket_empty';
                    
                    $APPLICATION->RestartBuffer();
                    exit(json_encode(Array(
                        'result' => $jsonResult
                    )));
                }
                
                break;
                
            case 'update':
                if (!empty($_REQUEST['id']) && isset($_REQUEST['qty']))
                {
                    $arBasket = \Nextype\Corporate\CBasket::update(intval($_REQUEST['id']), intval($_REQUEST['qty']));
                    $jsonResult = 'ok';
                    
                    if (count($arBasket['ITEMS']) == 0)
                        $jsonResult = 'basket_empty';
                    
                    $APPLICATION->RestartBuffer();
                    exit(json_encode(Array(
                        'result' => $jsonResult
                    )));
                }
                break;
                
            case 'clear':
                \Nextype\Corporate\CBasket::clear();
                $APPLICATION->RestartBuffer();
                    exit(json_encode(Array(
                        'result' => 'ok'
                    )));
                break;
        }
        
        $APPLICATION->RestartBuffer();
        exit(json_encode(Array(
            'result' => 'error'
        )));
    }
}


$this->IncludeComponentTemplate();
