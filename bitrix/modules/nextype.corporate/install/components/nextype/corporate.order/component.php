<?
use Bitrix\Main\Application;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (! \Bitrix\Main\Loader::includeModule('iblock') )
    die();

if (! \Bitrix\Main\Loader::includeModule('nextype.corporate') )
    die();

$arResult['BASKET'] = \Nextype\Corporate\CBasket::getList();
$arResult['FIELDS'] = Array();
$arResult['ERRORS'] = false;

//get total price
if (count($arResult['BASKET']['ITEMS']) > 0)
{
    $arFilterIDs = array();
    foreach ($arResult['BASKET']['ITEMS'] as $arItem)
        $arFilterIDs[] = $arItem['ID'];
    
    $arOrder = array();
    $arFilter = array("IBLOCK_ID" => \Nextype\Corporate\COptions::getIblockID('catalog'), "=ID" => $arFilterIDs);
    $arProducts = \Nextype\Corporate\CCache::CIBlockElement_GetList($arOrder, $arFilter, true);
    $totalPrice = 0;
    
    foreach ($arProducts as $arProduct)
    {
        $productSum = intval($arProduct["PROPERTIES"][\Nextype\Corporate\CBasket::propPrice]["VALUE"]) * intval($arResult['BASKET']['ITEMS'][$arProduct['ID']]['QTY']);
        $arResult['BASKET']['ITEMS'][$arProduct['ID']]['SUM'] = $productSum;
        $arResult['BASKET']['ITEMS'][$arProduct['ID']]['PRICE'] = intval($arProduct["PROPERTIES"][\Nextype\Corporate\CBasket::propPrice]["VALUE"]);
        $totalPrice += $productSum;
    }
    
    $arResult['BASKET']['SUM'] = $totalPrice;
}

if (!empty($arParams['IBLOCK_ID']) && is_array($arParams['PROPERTY_CODE']) && count($arParams['PROPERTY_CODE']) > 0)
{
    
    if (!empty($_REQUEST['ORDER_ID']))
    {
        $arResult['ORDER_ID'] = intval($_REQUEST['ORDER_ID']);
        $arOrder = CIBlockElement::GetByID($arResult['ORDER_ID'])->fetch();
        if (empty($arOrder['ID']) && $arOrder['IBLOCK_ID'] != $arParams['IBLOCK_ID'])
            $arResult['ORDER_ID'] = false;
    }
    
    foreach ($arParams['PROPERTY_CODE'] as $code)
    {
        $arProperty = CIBlockProperty::GetByID($code, $arParams['IBLOCK_ID'])->fetch();
        if (!empty($arProperty))
        {
            $arField = Array(
                'ID' => $arProperty['ID'],
                'CODE' => $arProperty['CODE'],
                'NAME' => $arProperty['NAME'],
                'SORT' => $arProperty['SORT'],
                'IS_REQUIRED' => $arProperty['IS_REQUIRED'],
            );
            
            if ($arProperty['PROPERTY_TYPE'] == "S" && empty($arProperty['USER_TYPE']))
                $arField['TYPE'] = 'TEXT';
            elseif ($arProperty['PROPERTY_TYPE'] == "S" && $arProperty['USER_TYPE'] == "HTML")
                $arField['TYPE'] = 'TEXTAREA';
            elseif ($arProperty['PROPERTY_TYPE'] == "L")
            {
                $arField['TYPE'] = 'SELECT';
                $rsPropertyValues = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID" => $arParams['IBLOCK_ID'], "PROPERTY_ID" => $arProperty['ID']));
                while ($arPropertyValue = $rsPropertyValues->fetch())
                {
                    $arField['OPTIONS'][] = $arPropertyValue;
                }
            }
            
            if (!empty($arField['TYPE']))
                $arResult['FIELDS'][] = $arField;
        }
    }
    
    usort($arResult['FIELDS'], function ($a, $b) {
        if ($a['SORT'] == $b['SORT']) 
            return 0;
        
        return ($a['SORT'] < $b['SORT']) ? -1 : 1;
    });
    
    if ($_POST['SAVE_ORDER'] == "Y" && check_bitrix_sessid())
    {
        $arPostFields = Array(
            "IBLOCK_ID" => $arParams['IBLOCK_ID'],
            "NAME" => GetMessage('ELEMENT_ORDER_NAME', Array(
                '#ORDER_DATE#' => date("d.m.Y H:i"),
                '#ORDER_SUM#' => \Nextype\Corporate\CCorporate::formatPrice($arResult['BASKET']['SUM'])
            )),
            "ACTIVE" => "Y",
            "CREATED_BY" => $USER->GetID(),
            'PROPERTY_VALUES' => Array(),
            'DETAIL_TEXT' => base64_encode(serialize($arResult['BASKET']))
        );
        
        $arEventFields = Array();
        
        if (empty($arParams['PROPERTY_PRODUCTS_CODE']))
            $arResult['ERRORS'][] = GetMessage('EMPTY_PROPERTY_PRODUCTS_CODE');
        
        foreach ($arResult['FIELDS'] as $arField)
        {
            switch($arField['TYPE'])
            {
                case "TEXT":
                    
                    if ($arField['IS_REQUIRED'] == "Y" && empty($_POST['ORDER_PROPERTY_' . $arField['CODE']]))
                            $arResult['ERRORS'][] = GetMessage('EMPTY_PROPERTY_TEXT', Array('#FIELD_NAME#' => $arField['NAME']));
                    
                    $arPostFields['PROPERTY_VALUES'][$arField['ID']] = $_POST['ORDER_PROPERTY_' . $arField['CODE']];
                    $arEventFields["PROP_" . $arField['CODE']] = $_POST['ORDER_PROPERTY_' . $arField['CODE']];
                    
                    break;
                    
                case "TEXTAREA":
                    if ($arField['IS_REQUIRED'] == "Y" && empty($_POST['ORDER_PROPERTY_' . $arField['CODE']]))
                            $arResult['ERRORS'][] = GetMessage('EMPTY_PROPERTY_TEXT', Array('#FIELD_NAME#' => $arField['NAME']));
                    
                    $arPostFields['PROPERTY_VALUES'][$arField['ID']][0] = Array(
                        'VALUE' => Array (
                            "TEXT" => $_POST['ORDER_PROPERTY_' . $arField['CODE']],
                            "TYPE" => "text"
                        )
                    );
                    
                    $arEventFields["PROP_" . $arField['CODE']] = $_POST['ORDER_PROPERTY_' . $arField['CODE']];
                    
                    break;
                    
                case "SELECT":
                    if ($arField['IS_REQUIRED'] == "Y" && empty($_POST['ORDER_PROPERTY_' . $arField['CODE']]))
                            $arResult['ERRORS'][] = GetMessage('EMPTY_PROPERTY_SELECT', Array('#FIELD_NAME#' => $arField['NAME']));
                    
                    $arPostFields['PROPERTY_VALUES'][$arField['ID']] = Array(
                        "VALUE" => intval($_POST['ORDER_PROPERTY_' . $arField['CODE']])
                    );
                    
                    $arEventFields["PROP_" . $arField['CODE']] = implode(", ", $_POST['ORDER_PROPERTY_' . $arField['CODE']]);
                    
                    break;
            }
            
                    
        }
        
        if (!empty($arResult['BASKET']['ITEMS']) && !empty($arParams['PROPERTY_PRODUCTS_CODE']))
        {
            $arBasketTranscript[] = GetMessage('BASKET_TRANSCRIPT_HEADER');
            $arBasketTranscript[] = "--------------------";
            
            foreach ($arResult['BASKET']['ITEMS'] as $arBasketItem)
            {
                $arPostFields['PROPERTY_VALUES'][$arParams['PROPERTY_PRODUCTS_CODE']][] = $arBasketItem['ID'];
                
                $arBasketTranscript[] = GetMessage('BASKET_TRANSCRIPT_ROW', Array(
                    '#NAME#' => $arBasketItem['NAME'],
                    '#QUANTITY#' => $arBasketItem['QTY'],
                    '#PRICE#' => \Nextype\Corporate\CCorporate::formatPrice($arBasketItem['PRICE']),
                    '#SUM#' => \Nextype\Corporate\CCorporate::formatPrice($arBasketItem['SUM']),
                ));
                
            }
            
            $arBasketTranscript[] = "--------------------";
            $arBasketTranscript[] = GetMessage('BASKET_TRANSCRIPT_FOOTER', Array('#SUM#' => \Nextype\Corporate\CCorporate::formatPrice($arResult['BASKET']['SUM'])));
            
            $arPostFields['PREVIEW_TEXT'] = implode("\n", $arBasketTranscript);
        }
        
        
        
        if (empty($arResult['ERRORS']))
        {
            foreach(GetModuleEvents("nextype.corporate", "OnBeforeNewOrderSave", true) as $arEvent)
                ExecuteModuleEventEx($arEvent, Array(&$arPostFields));
            
            $obOrder = new CIBlockElement;
            if ($orderId = $obOrder->Add($arPostFields))
            {
                if (!empty($arEventFields))
                {
                    $arEventFields['ORDER_ID'] = $orderId;
                    $arEventFields['ORDER_DATE'] = date("d.m.Y H:i:s");
                    $arEventFields['ORDER'] = implode("\n", $arBasketTranscript);
                    $arEventFields['TOTAL_SUM'] = \Nextype\Corporate\CCorporate::formatPrice($arResult['BASKET']['SUM']);
                    
                    foreach (Array('NEXTYPE_CORPORATE_NEW_ORDER', 'NEXTYPE_CORPORATE_NEW_ORDER_ADMIN') as $event)
                        CEvent::Send($event, SITE_ID, $arEventFields);
                }
                
                foreach(GetModuleEvents("nextype.corporate", "OnAfterNewOrderSave", true) as $arEvent)
			ExecuteModuleEventEx($arEvent, Array(&$arResult));

                \Nextype\Corporate\CBasket::clear();
                LocalRedirect($APPLICATION->GetCurPageParam('ORDER_ID=' . $orderId, Array('ORDER_ID')));
            }
            else
                $arResult['ERRORS'][] = $obOrder->LAST_ERROR;
            
            
        }
    }
}
else
{
    $arResult['ERRORS'][] = GetMessage('EMPTY_PROPERTY_CODE');
}


$this->IncludeComponentTemplate();
