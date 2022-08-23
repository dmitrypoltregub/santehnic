<?php

namespace Nextype\Corporate;

\Bitrix\Main\Localization\Loc::loadMessages(__FILE__);

class CBasket
{
    const expiredTime = 259200;
    const cookieKey = 'USER_BASKET';
    const propPrice = 'PRICE';
    const propOldPrice = 'OLD_PRICE';  
    
    public static function getList()
    {
        return self::getData();
    }
    
    private static function setData(&$arData = false)
    {
        global $APPLICATION;
        if (is_array($arData))
        {
            $arData['CNT'] = 0;
            
            foreach ($arData['ITEMS'] as $arItem)
            {
                $arData['CNT'] += $arItem['QTY'];
            }

            $value = serialize($arData);
        }

        $host = "";
        if (!empty(SITE_SERVER_NAME))
            $host = SITE_SERVER_NAME;
        
        return setcookie(self::cookieKey, $value, time() + self::expiredTime, SITE_DIR, $host);

    }
    
    private static function getData()
    {
        $value = $_COOKIE[self::cookieKey];
        
        if (!empty($value))
            $value = unserialize ($value);
        else
            $value = self::getStructure();
        
        return $value;
    }
    
    private static function getStructure()
    {
        return Array (
            'ITEMS' => Array (),
            'CNT' => 0,
        );
    }

    public static function add($productId, $quantity = 1)
    {   
        if (! \Bitrix\Main\Loader::includeModule('iblock') )
            die('Iblock module not installed');
        
        if ($quantity < 1)
            $quantity = 1;
        
        $arData = self::getData();
        
        if (isset($arData['ITEMS'][$productId]))
            return self::update($productId, $quantity, 'plus');
        
        $arData['ITEMS'][$productId] = Array (
            'ID' => $productId,
            'QTY' => intval($quantity),
        );

        self::setData($arData);

        return true;
    }
    
   
    public static function update($productId, $quantity = 1, $action = false)
    {
        $arData = self::getData();
        
        if ($quantity < 1)
            return false;
        
        if (!isset($arData['ITEMS'][$productId]))
            return self::add ($productId, $quantity);
        
            
        switch ($action)
        {
            case 'plus':
                $arData['ITEMS'][$productId]['QTY'] += intval($quantity);
                break;
            
            case 'minus':
                
                if ($arData['ITEMS'][$productId]['QTY'] <= intval($quantity))
                    unset($arData['ITEMS'][$productId]);
                else
                {
                    $arData['ITEMS'][$productId]['QTY'] -= intval($quantity);
                }
                
                break;
            
            default:
                
                $arData['ITEMS'][$productId]['QTY'] = intval($quantity);
                break;
        }
        
        self::setData($arData);
        
        return $arData;
    }
    
    public static function delete($productId)
    {
        $arData = self::getData();
        
        if (!isset($arData['ITEMS'][$productId]))
            return false;
        
        unset($arData['ITEMS'][$productId]);
        
        self::setData($arData);
        
        return $arData;
        
    }
    
    public static function clear()
    {
        $arData = self::getStructure();
        self::setData($arData);
        
        return $arData;
    }

}