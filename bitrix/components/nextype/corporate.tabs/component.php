<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
if(!CModule::IncludeModule('iblock')) die();
if(!CModule::IncludeModule('nextype.corporate')) die();

if (is_array($arParams['IBLOCK_PROPERTY_TAGS']))
{
    
   
    $arFilter = Array (
        'IBLOCK_ID' => $arParams['IBLOCK_ID']
    );
    
    foreach ($arParams['IBLOCK_PROPERTY_TAGS'] as $code)
    {
        if (!empty($code))
        {
            $rsProperty = CIBlockProperty::GetList(Array(), Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'], "CODE" => $code));
            if ($arProperty = $rsProperty->fetch())
            {
                $arResult['TABS'][$arProperty['ID']] = Array (
                    'ID' => $arProperty['ID'],
                    'TITLE' => $arProperty['NAME'],
                    'IS_ACTIVE' => 'Y',
                    'VALUES' => Array ()
                );

                $arCurFilter = array_merge($arFilter, Array (
                    "!PROPERTY_" . $arProperty['CODE'] . "_VALUE" => false
                ));
                

                $rsElements = CIBlockElement::GetList(Array(), $arCurFilter, false, Array("nPageSize" => $arParams['ELEMENT_COUNT']), Array('ID', 'IBLOCK_ID', 'NAME'));
                while ($arElement = $rsElements->fetch())
                {
                    $arResult['TABS'][$arProperty['ID']]['VALUES'][] = $arElement;
                    
                }

            }
        }
    }
    
}

$this->IncludeComponentTemplate();

