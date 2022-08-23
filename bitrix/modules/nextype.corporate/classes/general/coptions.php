<?php

namespace Nextype\Corporate;

IncludeModuleLangFile(__FILE__);

class COptions
{
    const moduleId = "nextype.corporate";
    
    public static function getOptionsList()
    {
        $arOptions = Array (
            
            "COLOR_SCHEME_1" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_COLOR_SCHEME_1"),
                "TYPE" => "TEXT",
                "TOOLS" => "COLORPICKER",
                "VALUES" => Array (),
                "DEFAULT" => "#1b9fc6" 
            ),
            
            "HEADER_TYPE" => Array (
                "LABEL" => "",
                "SKIP" => "Y",
                "TYPE" => "SELECT",
                "TOOLS" => "",
                "VALUES" => Array (
                    "type1" => "1",
                    "type2" => "2",
                    "type3" => "3",
                    "type4" => "4",
                ),
                "DEFAULT" => "type1"
            ),
            
            "FOOTER_TYPE" => Array (
                "LABEL" => "",
                "SKIP" => "Y",
                "TYPE" => "SELECT",
                "TOOLS" => "",
                "VALUES" => Array (
                    "type1" => "1",
                    "type2" => "2",
                    "type3" => "3",
                    "type4" => "4",
                    "type5" => "5",
                    "type6" => "6",
                ),
                "DEFAULT" => "type1"
            ),
            
            
            
            "FONT_FAMILY" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_FONT_FAMILY'),
                "TYPE" => "SELECT",
                "TOOLS" => "",
                "VALUES" => Array (
                    "Gotham Pro" => "Gotham Pro",
                    "Ubuntu" => "Ubuntu",
                    "OpenSans" => "OpenSans",
                    "Arial" => "Arial",
                ),
                "DEFAULT" => "Gotham Pro"
            ),
            
            "FONT_SIZE" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_FONT_SIZE'),
                "TYPE" => "SELECT",
                "TOOLS" => "",
                "VALUES" => Array (
                    "16px" => "16px",
                    "15px" => "15px",
                    "14px" => "14px",
                ),
                "DEFAULT" => "16px"
            ),
            
            "LOGO" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_LOGO"),
                "TYPE" => "FILE",
                "TOOLS" => "IMAGE",
                "VALUES" => Array (),
                "DEFAULT" => "",
                "PARAMS" => Array (
                    "WIDTH" => 200,
                    "HEIGHT" => 200
                )
            ),
            
            "FAVICON" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_FAVICON"),
                "TYPE" => "FILE",
                "TOOLS" => "IMAGE",
                "VALUES" => Array (),
                "DEFAULT" => "",
                "PARAMS" => Array (
                    "WIDTH" => 16,
                    "HEIGHT" => 16
                )
            ),
            
            "HEADER_CALLBACK" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_HEADER_CALLBACK"),
                "TYPE" => "CHECKBOX",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "Y"
            ),
            
            
            "HOMEPAGE_BLOCKS" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_HOMEPAGE_BLOCKS'),
                "TYPE" => "SORTABLEBLOCKS",
                "TOOLS" => "",
                "VALUES" => Array (
                    'advantages' => GetMessage('NT_OPTIONS_HOMEPAGE_BLOCK_ADVANTAGES'),
                    'tizers' => GetMessage('NT_OPTIONS_HOMEPAGE_BLOCK_TIZERS'),
                    'catalog' => GetMessage('NT_OPTIONS_HOMEPAGE_BLOCK_CATALOG'),
                    'catalog_top' => GetMessage('NT_OPTIONS_HOMEPAGE_BLOCK_CATALOG_TOP'),
                    'company' => GetMessage('NT_OPTIONS_HOMEPAGE_BLOCK_COMPANY'),
                    'news' => GetMessage('NT_OPTIONS_HOMEPAGE_BLOCK_NEWS'),
                    'brands' => GetMessage('NT_OPTIONS_HOMEPAGE_BLOCK_BRANDS'),
                    'instagram' => GetMessage('NT_OPTIONS_HOMEPAGE_BLOCK_INSTAGRAM'),
                ),
                "DEFAULT" => 'a:8:{s:10:"advantages";a:1:{s:6:"ACTIVE";s:1:"Y";}s:6:"tizers";a:1:{s:6:"ACTIVE";s:1:"Y";}s:7:"catalog";'
                . 'a:1:{s:6:"ACTIVE";s:1:"Y";}s:11:"catalog_top";a:1:{s:6:"ACTIVE";s:1:"Y";}s:7:"company";a:1:{s:6:"ACTIVE";s:1:"Y";}s:4:"news";'
                . 'a:1:{s:6:"ACTIVE";s:1:"Y";}s:6:"brands";a:1:{s:6:"ACTIVE";s:1:"Y";}s:9:"instagram";a:1:{s:6:"ACTIVE";s:1:"Y";}}'
            ),

            
            
            "CURRENCY" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_CURRENCY'),
                "TYPE" => "SELECT",
                "TOOLS" => "",
                "VALUES" => Array (
                    "RUB" => GetMessage('NT_OPTIONS_CURRENCY_RUB'),
                    "UAH" => GetMessage('NT_OPTIONS_CURRENCY_UAH'),
                    "EUR" => GetMessage('NT_OPTIONS_CURRENCY_EUR'),
                    "US" => GetMessage('NT_OPTIONS_CURRENCY_US'),
                ),
                "DEFAULT" => "RUB"
            ),
            
            "PHONE_MASK" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_PHONE_MASK"),
                "TYPE" => "TEXT",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "+7 (999) 999-99-99"
            ),
            
            "LOCATIONS" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_ENABLED_LOCATIONS"),
                "TYPE" => "CHECKBOX",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "Y"
            ),
            
            "USE_BASKET" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_USE_BASKET"),
                "TYPE" => "CHECKBOX",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "Y"
            ),
            
            "CATALOG_SEARCH" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_CATALOG_SEARCH"),
                "TYPE" => "CHECKBOX",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "Y"
            ),
            
            "SIDEBAR_TYPE" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_SIDEBAR_TYPE'),
                "TYPE" => "SELECT",
                "TOOLS" => "",
                "VALUES" => Array (
                    "FULL" => GetMessage('NT_OPTIONS_SIDEBAR_TYPE_FULL'),
                    "MENU" => GetMessage('NT_OPTIONS_SIDEBAR_TYPE_ONLY_MENU'),
                    "ASK" => GetMessage('NT_OPTIONS_SIDEBAR_TYPE_ONLY_ASK'),
                ),
                "DEFAULT" => "FULL"
            ),
            
            "CATALOG_SHOW_SHARED" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_CATALOG_SHOW_SHARED"),
                "TYPE" => "CHECKBOX",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "Y"
            ),
            
            "CATALOG_SHOW_QTY" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_CATALOG_SHOW_QTY"),
                "TYPE" => "CHECKBOX",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "Y"
            ),
            
            "CATALOG_SECTION_SHOW_SIDEBAR" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_CATALOG_SECTION_SHOW_SIDEBAR"),
                "TYPE" => "CHECKBOX",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "Y"
            ),
            
            "CATALOG_ELEMENT_SHOW_SIDEBAR" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_CATALOG_ELEMENT_SHOW_SIDEBAR"),
                "TYPE" => "CHECKBOX",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "Y"
            ),
            
            "CATALOG_SHOW_PRICE" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_SHOW_PRICE"),
                "TYPE" => "CHECKBOX",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "Y"
            ),
            
            "CATALOG_SHORT_NAMES" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_CATALOG_SHORT_NAMES"),
                "TYPE" => "CHECKBOX",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "Y"
            ),
            
            "IBLOCK_BRANDS" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_BRANDS'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_NEWS" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_NEWS'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_CITIES" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_CITIES'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_TIZERS" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_TIZERS'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_SLIDER" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_SLIDER'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_CATALOG" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_CATALOG'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_catalog",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_DOCUMENTS" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_DOCUMENTS'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_EMPLOYEES" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_EMPLOYEES'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_LICENSE" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_LICENSE'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_REVIEWS" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_REVIEWS'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_HISTORY" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_HISTORY'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_VACANCIES" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_VACANCIES'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_SERVICES" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_SERVICES'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_PROJECTS" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_PROJECTS'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_ACTIONS" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_ACTIONS'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_FAQ" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_FAQ'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_content",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            "IBLOCK_ORDERS" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_IBLOCK_ORDERS'),
                "TYPE" => "SELECT_IBLOCK",
                "IBLOCK_TYPE" => "nt_corporate_orders",
                "TOOLS" => "",
                "VALUES" => Array (),
                "NO_DEMO" => "Y",
                "DEFAULT" => ""
            ),
            
            
            
            "YANDEX_METRIKA_COUNTER" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_YANDEX_METRIKA_COUNTER'),
                "TYPE" => "TEXTAREA",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => ""
            ),
            
            "GOOGLE_ANALYTICS_COUNTER" => Array (
                "LABEL" => GetMessage('NT_OPTIONS_GOOGLE_ANALYTICS_COUNTER'),
                "TYPE" => "TEXTAREA",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => ""
            ),
            
            
            "SOCIAL_LINK_VK" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_SOCIAL_LINK_VK"),
                "TYPE" => "TEXT",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "https://vk.com" 
            ),
            
            "SOCIAL_LINK_FACEBOOK" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_SOCIAL_LINK_FACEBOOK"),
                "TYPE" => "TEXT",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "https://facebook.com" 
            ),
            
            "SOCIAL_LINK_TWITTER" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_SOCIAL_LINK_TWITTER"),
                "TYPE" => "TEXT",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "https://twitter.com" 
            ),
            
            "SOCIAL_LINK_INSTAGRAM" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_SOCIAL_LINK_INSTAGRAM"),
                "TYPE" => "TEXT",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "https://instagram.com" 
            ),
            
            "SOCIAL_LINK_GPLUS" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_SOCIAL_LINK_GPLUS"),
                "TYPE" => "TEXT",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "https://plus.google.com/?hl=ru" 
            ),

            "SOCIAL_LINK_YOUTUBE" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_SOCIAL_LINK_YOUTUBE"),
                "TYPE" => "TEXT",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "https://www.youtube.com/" 
            ),
            
            "GOOGLE_RECAPTCHA" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_GOOGLE_RECAPTCHA"),
                "TYPE" => "CHECKBOX",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "N"
            ),
            
            "GOOGLE_RECAPTCHA_CODE" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_GOOGLE_RECAPTCHA_CODE"),
                "TYPE" => "TEXT",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "" 
            ),
            
            "GOOGLE_RECAPTCHA_SECRET" => Array (
                "LABEL" => GetMessage("NT_OPTIONS_GOOGLE_RECAPTCHA_SECRET"),
                "TYPE" => "TEXT",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "" 
            ),
            
            "INSTAGRAM_KEY" => Array (
                    "LABEL" => GetMessage("NT_OPTIONS_INSTAGRAM_KEY"),
                "TYPE" => "TEXT",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => "" 
            ),
            
            "INSTAGRAM_LINK_MORE" => Array (
                    "LABEL" => GetMessage("NT_OPTIONS_INSTAGRAM_LINK_MORE"),
                "TYPE" => "TEXT",
                "TOOLS" => "",
                "VALUES" => Array (),
                "DEFAULT" => ""
            ),

        );
        
        return $arOptions;
    }
    
    public static function getIblockID($iblockCode)
    {
        $iblockId = CCorporate::$options['IBLOCK_' . strtoupper($iblockCode)];
        
        if (!empty($iblockId))
            return $iblockId;
        
        return 0;
        
    }
    
    public static function setOptions($arOptions = false, $siteId = false)
    {
        $arOptionsList = self::getOptionsList();
        
        $arFiles = Array ();
        if (is_array($_FILES[$siteId]))
        {
            foreach ($_FILES[$siteId]['name'] as $key => $name)
                $arFiles[$key] = Array (
                    'name' => $name,
                    'type' => $_FILES[$siteId]['type'][$key],
                    'tmp_name' => $_FILES[$siteId]['tmp_name'][$key],
                    'error' => $_FILES[$siteId]['error'][$key],
                    'size' => $_FILES[$siteId]['size'][$key],
                );
        }
        

        if (count($arOptions) > 0)
        {
            foreach ($arOptionsList as $option => $arParams)
            {
        
                if ($arParams['TYPE'] == 'FILE' && $_REQUEST[$siteId . "_del"][$option] == "Y")
                {
                    $fileID = '';
                    \CFile::Delete(self::getOption($option, '', $siteId));
                    self::setOption($option, $fileID, $siteId);
                    
                    if ($option == "FAVICON")
                        self::saveFavicon ($fileID, $siteId);
                    
                }
                elseif ($arParams['TYPE'] == 'FILE' && isset($arFiles[$option]))
                {
                    if($fileID = \CFile::SaveFile($arFiles[$option], self::moduleId))
                    {
                        self::setOption($option, $fileID, $siteId);
                        
                        if ($option == "FAVICON")
                            self::saveFavicon ($fileID, $siteId);
                    }
                }
                elseif ($arParams['TYPE'] == 'SORTABLEBLOCKS')
                {
                    $arDefaultValues = unserialize($arOptionsList[$option]['DEFAULT']);
                    $arValues = Array ();
                        
                    if (is_array($arOptions[$option]))
                    {
                        foreach ($arOptions[$option] as $key => $arValue)
                        {
                            if (!empty($key) && is_array($arValue))
                            {
                                $arValues[$key] = $arValue;
                                $arValues[$key]['ACTIVE'] = $arValue['ACTIVE'] == 'Y' ? 'Y' : 'N';
                            }
                        }
                    }

                        self::setOption($option, serialize($arValues), $siteId);
                }
                elseif (isset($arOptions[$option]))
                    self::setOption($option, $arOptions[$option], $siteId); 
                
                
                
            }
        }
    }
    
    public static function saveFavicon($fileId, $siteId = false)
    {
        $arSite = \CSite::GetByID($siteId)->Fetch();
        if ($arSite)
        {
            
            if (empty($fileId))
                @unlink($arSite['ABS_DOC_ROOT'].'/'.$arSite['DIR'].'/favicon.ico');
            else
            {
                $faviconPath = $_SERVER['DOCUMENT_ROOT'] . \CFile::GetPath($fileId);
                echo $faviconPath;
                @copy($faviconPath, $arSite['ABS_DOC_ROOT'] . '/' . $arSite['DIR'].'/favicon.ico');
            }
        }
        
    }
    
    public static function resetOptions($arOptions = false, $siteId = false)
    {
        $arOptionsList = self::getOptionsList();
        
        foreach ($arOptionsList as $option => $arParams)
        {
            if (isset($arOptions[$option]) && $arParams['NO_DEMO'] != "Y")
                self::setOption($option, $arParams['DEFAULT'], $siteId); 
        }
    }
    
    public static function getOption($option, $default, $siteId = false)
    {
        $arOptionsList = self::getOptionsList();
        $isDemo = \Bitrix\Main\Config\Option::get(self::moduleId, 'IS_DEMO', "N", $siteId);
        if ($arOptionsList[$option]['NO_DEMO'] == "Y")
            $isDemo = "N";
        
        if ($isDemo == "N")
            return \Bitrix\Main\Config\Option::get(self::moduleId, $option, $default, $siteId); 
        else
        {
            $optionKey = 'BX_OPTION_' . $option . "_" . $siteId;
            return (isset($_SESSION[$optionKey])) ? $_SESSION[$optionKey] : $default;
        }
    }
    
    public static function setOption($option, $value, $siteId)
    {
        $arOptionsList = self::getOptionsList();
        if ($arOptionsList[$option]['NO_DEMO'] == "Y" && strpos($_SERVER['REQUEST_URI'], "/bitrix/admin/") === false)
            return;
        
        $isDemo = \Bitrix\Main\Config\Option::get(self::moduleId, 'IS_DEMO', "N", $siteId);
        if ($arOptionsList[$option]['NO_DEMO'] == "Y")
            $isDemo = "N";
        
        
        if ($isDemo == "N")
            return \Bitrix\Main\Config\Option::set(self::moduleId, $option, $value, $siteId); 
        else
        {
            $optionKey = 'BX_OPTION_' . $option . "_" . $siteId;
            $_SESSION[$optionKey] = $value;
        }
        
        
    }
    
    public static function getAdminOptionsList()
    {
        $arSites = Array();
	$rsSites = \CSite::GetList($by = "id" , $sort = "asc" , Array("ACTIVE"=>"Y"));
        
	while($arSite = $rsSites->GetNext())
            $arSites[] = $arSite;
	
        foreach ($arSites as $key => $arSite)
        {
            if (\Bitrix\Main\Config\Option::get(self::moduleId, "SITE_INSTALLED", 'N', $arSite["ID"]) == "N")
            {
                unset($arSites[$key]);
            }
        }
        
        $arAdminOptions = Array ();
        $arOptions = self::getOptionsList();
        
        $arHeadings = Array (
            'COLOR_SCHEME_1' => GetMessage('NT_OPTIONS_THEME_HEADING'),
            'HOMEPAGE_BLOCKS' => GetMessage('NT_OPTIONS_HOMEPAGE_BLOCK_HEADING'),
            'CURRENCY' => GetMessage('NT_OPTIONS_OTHER_HEADING'),
            'CATALOG_SHOW_SHARED' => GetMessage('NT_OPTIONS_CATALOG_HEADING'),
            'IBLOCK_BRANDS' => GetMessage('NT_OPTIONS_IBLOCK_HEADING'),
            'YANDEX_METRIKA_COUNTER' => GetMessage('NT_OPTIONS_COUNTERS_HEADING'),
            'SOCIAL_LINK_VK' => GetMessage('NT_OPTIONS_SOCIALS_HEADING'),
            'GOOGLE_RECAPTCHA' => GetMessage('NT_OPTIONS_RECAPTCHA_HEADING'),
            'INSTAGRAM_KEY' => GetMessage('NT_OPTIONS_INSTAGRAM_HEADING')
        );
        
        foreach ($arOptions as $option => $arOption)
        {
            if ($arOption['SKIP'] == "Y") continue;
            
            $arOption['CODE'] = $option;
            if (isset($arHeadings[$option]))
                $arOption['BEFORE_HEADING'] = $arHeadings[$option];
            
            
            $arAdminOptions[$option] = $arOption;
            
        }
        
        
        
        
        $arTabs = array();
        foreach ($arSites as $key => $arSite)
        {
            $arAdminOptionsTab = $arAdminOptions;
            foreach ($arAdminOptionsTab as $optKey => $arOption)
            {
                if (isset($arOption['CODE']))
                    $arAdminOptionsTab[$optKey]['VALUE'] = self::getOption($arOption['CODE'], $arOption['DEFAULT'], $arSite["ID"]);
            }
            
           
            
            $arTabs[] = array(
                "DIV" => "edit" . ($key + 1),
                "TAB" => GetMessage("OPTIONS_TAB", array("#SITE_NAME#" => $arSite["NAME"], "#SITE_ID#" => $arSite["ID"])),
                "ICON" => "settings",
                "TITLE" => GetMessage("OPTIONS_TAB_TITLE"),
                "PAGE_TYPE" => "site_settings",
                "SITE_ID" => $arSite["ID"],
                "OPTIONS" => $arAdminOptionsTab,
            );
        }
        
        
        
        return Array (
            'TABS' => $arTabs
        );
    }

    public static function drawAdminHeadingRow($label)
    {
        ?>
            <tr class="heading"><td colspan="2"><?=$label?></td></tr>
        <?
    }

    public static function drawAdminRow($arOption, $siteId)
    {
        ?>
            <? if ($arOption['TYPE'] == "BLOCKS"): ?>
                <tr class="heading"><td colspan="2"><?=$arOption['LABEL']?></td></tr>
                <tr>
                    <td colspan="2">
                        <? COptionsType::Blocks($arOption, $siteId); ?>
                    </td>
                </tr>
            <? else: ?>
            <tr>
                <td width="40%" class="adm-detail-content-cell-l"><?=$arOption['LABEL']?>:</td>
                <td width="60%"> <?
                if ($arOption['TYPE'] == 'TEXT' && $arOption['TOOLS'] == '')
                    COptionsType::Text($arOption, $siteId);
                elseif ($arOption['TYPE'] == 'TEXT' && $arOption['TOOLS'] == 'COLORPICKER')
                    COptionsType::Colorpicker($arOption, $siteId);
                elseif ($arOption['TYPE'] == 'CHECKBOX')
                    COptionsType::Checkbox($arOption, $siteId);
                elseif ($arOption['TYPE'] == 'TEXTAREA')
                    COptionsType::Textarea($arOption, $siteId);
                elseif ($arOption['TYPE'] == 'SELECT')
                    COptionsType::Select($arOption, $siteId);
                elseif ($arOption['TYPE'] == 'SORTABLEBLOCKS')
                    COptionsType::SortableBlocks($arOption, $siteId);                
                elseif ($arOption['TYPE'] == 'SELECT_IBLOCK')
                    COptionsType::SelectIblock($arOption, $siteId);
                elseif ($arOption['TYPE'] == 'FILE' && $arOption['TOOLS'] == 'IMAGE')
                    COptionsType::UploadImage($arOption, $siteId);
                elseif ($arOption['TYPE'] == 'FILE' && $arOption['TOOLS'] == '')
                    COptionsType::UploadFile($arOption, $siteId);
                ?>
                </td>
            </tr>
            <? endif; ?>
        <?
    }
    
}