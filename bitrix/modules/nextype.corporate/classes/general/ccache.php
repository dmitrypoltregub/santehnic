<?php

namespace Nextype\Corporate;

class CCache
{
    static $cachePrefix = "nt_corporate_";
    static $cacheTTL = 432000;
    static $cacheDir = "/nextype_corporate/";
    
    public static function getCacheId($arParams)
    {
        global $USER;
        $arParams['USER_GROUPS'] = $USER->GetUserGroupString();
        $strId = self::$cachePrefix . sha1(serialize($arParams));
        
        return $strId;
    }

    public static function CIBlockElement_GetList($arOrder = Array("SORT"=>"ASC"), $arFilter = Array(), $getProperties = false)
    {
        
        if (! \Bitrix\Main\Loader::includeModule('iblock') || empty($arFilter['IBLOCK_ID']))
            return false;

        
        $cacheId = self::getCacheId(array_merge($arOrder, $arFilter, Array('getProperties' => $getProperties)));
        $cacheDir = "/" . SITE_ID . self::$cacheDir . "/" . __FUNCTION__ . "/";
        $cacheTag = "iblock_id_" . $arFilter['IBLOCK_ID'];
        
        $arResult = Array ();
        $obCache = new \CPHPCache();
        
        if ($obCache->InitCache(self::$cacheTTL, $cacheId, $cacheDir))
        {
            $vars = $obCache->GetVars();
            $arResult = $vars['arResult'];
        }
        else
        {
            $rsItems = \CIBlockElement::GetList($arOrder, $arFilter);
            while ($arItem = $rsItems->GetNext())
            {
                if ($getProperties)
                {
                    $rsProps = \CIBlockElement::GetProperty($arItem['IBLOCK_ID'], $arItem['ID'], array("sort" => "asc"));
                    while ($arProp = $rsProps->fetch())
                        $arItem['PROPERTIES'][$arProp['CODE']] = $arProp;
                }

                $arResult[] = $arItem;
            }
            
            self::setCache($arResult, $cacheId, $cacheDir, $obCache, $cacheTag);
        }

        
        
        return $arResult;
    }


    
    public static function setCache($arResult, $cacheId, $cacheDir, $obCache, $cacheTag = false)
    {
        $obCache->StartDataCache(self::$cacheTTL, $cacheId, $cacheDir);
        
        if ($cacheTag)
        {
            global $CACHE_MANAGER;
            $CACHE_MANAGER->StartTagCache($cacheDir);
            $CACHE_MANAGER->RegisterTag($cacheTag);
            $CACHE_MANAGER->EndTagCache();
        }
        
        $obCache->EndDataCache(array("arResult" => $arResult));
        
    }
}