<?php
namespace Nextype\Corporate;
\Bitrix\Main\Localization\Loc::loadMessages(__FILE__);

class CLocations
{
    public static function getCurrentLocation()
    {
        $arResult = false;
        $arDefaultItem = false;
        
        if (strpos($_SERVER['REQUEST_URI'], "/bitrix/admin/") !== false)
            return false;
        
        if (!empty($GLOBALS['CURRENT_LOCATION']))
            return $GLOBALS['CURRENT_LOCATION'];
        
        if (\Bitrix\Main\Config\Option::get("nextype.corporate", "SITE_INSTALLED", 'N', SITE_ID) == "N")
            return false;
        
        if (empty(\Nextype\Corporate\COptions::getIblockID('cities')))
            return false;
        
        if (defined('SITE_SERVER_NAME') === false || SITE_SERVER_NAME == "")
        {
            ShowError(GetMessage('EMPTY_PROPERTY_SITE_SERVER_NAME'));
            exit();
        }
        
        $httpHost = str_replace(":443", "", str_replace(":80", "", $_SERVER['HTTP_HOST']));
        
        if (SITE_SERVER_NAME != $httpHost)
        {
            $domain = str_replace("." . SITE_SERVER_NAME, "", $httpHost);
            $domain = preg_replace('(:+\d+)', '', $domain);
        }

        
        $arLocations = \Nextype\Corporate\CCache::CIBlockElement_GetList(Array('SORT' => 'ASC'), Array(
            'IBLOCK_ID' => \Nextype\Corporate\COptions::getIblockID('cities'),
            'ACTIVE' => 'Y'
        ), true);
        
        
        foreach ($arLocations as $arItem)
        {
            if (!$arDefaultItem && $arItem['PROPERTIES']['DEFAULT']['VALUE_XML_ID'] == "Y")
                $arDefaultItem = $arItem;
            
            if (SITE_SERVER_NAME == $httpHost && $arItem['PROPERTIES']['DEFAULT']['VALUE_XML_ID'] == "Y")
            {
                $arResult = $arItem;
                break;
            }
            elseif ($domain && $domain == strtolower($arItem['PROPERTIES']['SUBDOMAIN']['VALUE']))
            {
                $arResult = $arItem;
                break;
            }
        }
        
        if (!$arResult)
            $arResult = $arDefaultItem;
        
        $GLOBALS['CURRENT_LOCATION'] = $arResult;
        
        return $arResult;
    }
    
    
    
    public static function eventOnEndBufferContent(&$content)
    {
        
        if (strpos($_SERVER['REQUEST_URI'], "/bitrix/") !== false || strpos($_SERVER['REQUEST_URI'], "/include/ajax/") !== false || defined('PUBLIC_AJAX_MODE') == true )
            return false;
        
        if (! \Bitrix\Main\Loader::includeModule('nextype.corporate') )
            return true;
        
        
        if (\Nextype\Corporate\COptions::getOption('LOCATIONS', 'Y', SITE_ID) == "Y")
        {
            
            $arCurrentLocation = \Nextype\Corporate\CLocations::getCurrentLocation();
            
            if ($arCurrentLocation)
            {
                $content = str_replace("#LOCATION_NAME#", $arCurrentLocation['NAME'], $content);
                
                foreach ($arCurrentLocation['PROPERTIES'] as $arProperty)
                {
                    $content = str_replace("#LOCATION_".$arProperty['CODE']."#", $arProperty['VALUE'], $content);
                }
            }
            
            
        }
        
    }
}
