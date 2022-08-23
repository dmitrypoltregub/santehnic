<?php
use \Bitrix\Main;
use \Bitrix\Main\Loader;
use \Bitrix\Main\Error;
use \Bitrix\Main\Type\DateTime;
use \Bitrix\Main\Localization\Loc;
use \Bitrix\Iblock;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

class NextypeLandingBlocksComponent extends CBitrixComponent
{
    public static function getSettingsScript($componentPath, $settingsName)
    {
        $path = $componentPath.'/settings/'.$settingsName.'/script.js';
        return $path.'?'.time();
    }
    
    public static function getIconsList($componentPath)
    {
        $arItems = Array ();
        $optionsFile = __DIR__ . "/icons/list.json";
        
        if (file_exists($optionsFile))
        {
            $iconsList = json_decode(file_get_contents($optionsFile), true);

            if (is_array($iconsList))
            {
                print_r($iconsList);
                foreach ($iconsList as $arIcon)
                {
                    echo __DIR__ . "/icons/" . $arIcon['preview'] . "\n";
                    if (file_exists(__DIR__ . "/icons/" . $arIcon['preview']))
                    {
                        $arItems[$arIcon['class']] = $componentPath . "/icons/" . $arIcon['preview'];
                    }
                }
            }
        }

        return $arItems;
    }
    
    public function onPrepareComponentParams($arParams)
    {
        
        if (!empty($arParams['ITEMS']))
        {
            
            $arParams['ITEMS'] = @\Bitrix\Main\Web\Json::decode(base64_decode($arParams['ITEMS']), true);
            
            if (is_array($arParams['ITEMS']))
            {
                $this->arResult['ITEMS'] = $arParams['ITEMS'];
            }
        }
        
        return $arParams;
    }


    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}