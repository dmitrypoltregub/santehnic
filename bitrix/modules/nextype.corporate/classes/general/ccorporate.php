<?php
namespace Nextype\Corporate;
\Bitrix\Main\Localization\Loc::loadMessages(__FILE__);

if (!class_exists('Less_Parser'))
    require_once __DIR__ . '/../less/Less.php';

class CCorporate
{
    private static $instance;
    public static $moduleId = "nextype.corporate";
    public static $siteId = false;
    public static $rootFolder = false;
    public static $templateOptions = false;
    public static $lessOptions = false;
    public static $options = false;
    
    public static $customDirs = Array (
        'catalog/',
        'services/',
        'projects/',
        'news/',
        'actions/',
        'search/'
    );
    
    public static $customPages = Array (
        'company/contacts/index.php',
        'faq/index.php',
    );


    public function __construct($siteId = false)
    {
        self::$siteId = $siteId;
        
        $context = \Bitrix\Main\Application::getInstance()->getContext();
        self::$rootFolder = $context->getServer()->getDocumentRoot();
        
        if (!self::$templateOptions)
        {
            $optionsFile = self::$rootFolder . SITE_TEMPLATE_PATH . "/options.json";
            if (file_exists($optionsFile))
            {
                self::$templateOptions = json_decode(file_get_contents($optionsFile), true);
            }
            
        }
        
        if (!self::$lessOptions)
        {
            self::$lessOptions = Array (
                'cache_dir' => self::$rootFolder . '/bitrix/cache/less_cache/' . self::$siteId,
                'compress' => true,
                'sourceMap' => false,
                'sourceRoot' => '/',
                'output' => self::$rootFolder . SITE_TEMPLATE_PATH . '/less_compile/template_styles_'.self::$siteId.'.css',
                'outputPath' => SITE_TEMPLATE_PATH . '/less_compile/template_styles_'.self::$siteId.'.css',
                'indentation' => "\t",
                'relativeUrls' => false
            );

            $isDemo = \Bitrix\Main\Config\Option::get(self::$moduleId, 'IS_DEMO', "N", self::$siteId);
            if ($isDemo == "Y")
            {
                self::$lessOptions['output'] = self::$rootFolder . SITE_TEMPLATE_PATH . '/less_compile/template_styles_'.bitrix_sessid() . "_" .self::$siteId.'.css';
                self::$lessOptions['outputPath'] = SITE_TEMPLATE_PATH . '/less_compile/template_styles_'.bitrix_sessid() . "_" .self::$siteId.'.css';
            }
            
            if (!is_dir(self::$lessOptions['cache_dir']))
                \Bitrix\Main\IO\Directory::createDirectory(self::$lessOptions['cache_dir']);
            
            if (!is_dir(self::$rootFolder . SITE_TEMPLATE_PATH . '/less_compile/'))
                \Bitrix\Main\IO\Directory::createDirectory(self::$rootFolder . SITE_TEMPLATE_PATH . '/less_compile/');
        }
        
        if (!self::$options)
        {
            $arOptions = \Nextype\Corporate\COptions::getOptionsList();
            
            if (is_array($arOptions))
            {
                foreach ($arOptions as $option => $arOptionParams)
                {
                    self::$options[$option] = \Nextype\Corporate\COptions::getOption($option, $arOptionParams['DEFAULT'], self::$siteId); 
                    
                }
            }
            
            
            $arSite = \CSite::GetByID(self::$siteId)->Fetch();
            if ($arSite)
            {
                self::$options['SITE_NAME'] = $arSite['SITE_NAME'];
                self::$options['EMAIL_DEFAULT'] = $arSite['EMAIL'];
            }
        }
        

    }
    
    public static function getInstance($siteId = false)
    {
        if (is_null(self::$instance))
        {
            self::$instance = new self($siteId);
        }
        return self::$instance;
    }
    
    public static function IncludeFile($path, $params, $function_params)
    {
        global $APPLICATION;
        
        if (self::$options['LOCATIONS'] == "Y" && !empty($GLOBALS['CURRENT_LOCATION']) && $GLOBALS['CURRENT_LOCATION']['PROPERTIES']['DEFAULT']['VALUE_XML_ID'] != "Y")
        {
            $subdomain = strtolower($GLOBALS['CURRENT_LOCATION']['PROPERTIES']['SUBDOMAIN']['VALUE']);
            if (!empty($subdomain))
            {
                $pathInfo = pathinfo($path);
                $dirname = $pathInfo['dirname'];
                if ($dirname != "/")
                    $dirname .= "/" . $subdomain;
                
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . $dirname . "/" . $pathInfo['basename']))
                    $path = $dirname . "/" . $pathInfo['basename'];
            }
            
        }
        
        
        $APPLICATION->IncludeFile($path, $params, $function_params);
    }
    
    public static function renderHomepage()
    {
        $arPageBlocks = (!empty(CCorporate::$options['HOMEPAGE_BLOCKS'])) ? unserialize(CCorporate::$options['HOMEPAGE_BLOCKS']) : Array ();

        foreach ($arPageBlocks as $file => $arBlock)
        {
            if ($arBlock["ACTIVE"] === 'Y')
            {   
                if (file_exists(self::$rootFolder . SITE_DIR . "include/homepage/" . $file . ".php"))
                {
                    self::IncludeFile(SITE_DIR . "include/homepage/" . $file . ".php", Array(), Array ("MODE" => "html"));
                }
            }
        }
    }
    
    public static function clearTemplateCache($siteId)
    {
        $context = \Bitrix\Main\Application::getInstance()->getContext();
        $rootFolder = $context->getServer()->getDocumentRoot();
        
        \Bitrix\Main\IO\Directory::deleteDirectory($rootFolder . '/bitrix/cache/less_cache/');
        \Bitrix\Main\IO\Directory::deleteDirectory($rootFolder . '/bitrix/cache/iblock/');
        \Bitrix\Main\IO\Directory::deleteDirectory($rootFolder . '/bitrix/cache/' . $siteId . "/");
    }
    
    public static function isCustomPage()
    {
        global $APPLICATION;
        
        if (IS_CUSTOM_PAGE == "Y")
            return true;
        
        $curDir = $APPLICATION->GetCurDir();
        $curPage = $APPLICATION->GetCurPage(true);
        
        if ($curDir == SITE_DIR)
            return true;

        foreach (self::$customDirs as $dir)
        {
            $dir = SITE_DIR . $dir;
            if (strpos($curDir, $dir) !== false)
                return true;
        }

        foreach (self::$customPages as $page)
        {
            $page = SITE_DIR . $page;
            
            if ($page == $curPage)
                return true;
        }
        
        return false;
    }

    public static function start()
    {
        if (is_array(self::$templateOptions['assets']['css']))
            foreach (self::$templateOptions['assets']['css'] as $file)
                \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . $file);
        
        if (is_array(self::$templateOptions['assets']['js']))
            foreach (self::$templateOptions['assets']['js'] as $file)
                \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . $file);
        
        if (self::$options['GOOGLE_RECAPTCHA'] == "Y" && !empty(self::$options['GOOGLE_RECAPTCHA_CODE']) && !empty(self::$options['GOOGLE_RECAPTCHA_SECRET']))
            \Bitrix\Main\Page\Asset::getInstance()->addJs('//www.google.com/recaptcha/api.js?render=explicit');
        
        $url = (\CMain::IsHTTPS()) ? 'https://' . $_SERVER["HTTP_HOST"] : 'http://' . $_SERVER["HTTP_HOST"];
        $favicon = (!empty(self::$options['FAVICON'])) ? $siteId . "/favicon.ico?" . self::$options['FAVICON'] : '';
        if (!empty($favicon))
            \Bitrix\Main\Page\Asset::getInstance()->addString('<link rel="shortcut icon" href="'.$favicon.'" type="image/x-icon" />');
        else
            \Bitrix\Main\Page\Asset::getInstance()->addString('<link rel="shortcut icon" href="'.SITE_TEMPLATE_PATH .'/favicon.ico" type="image/x-icon" />');
        
        if (!empty(self::$options['OPEN_GRAPH_TITLE']))
            \Bitrix\Main\Page\Asset::getInstance()->addString('<meta property="og:title" content="'.self::$options['OPEN_GRAPH_TITLE'].'" />');
        
        if (!empty(self::$options['OPEN_GRAPH_DESCRIPTION']))
            \Bitrix\Main\Page\Asset::getInstance()->addString('<meta property="og:description" content="'.self::$options['OPEN_GRAPH_DESCRIPTION'].'" />');
        
        if (!empty(self::$options['OPEN_GRAPH_IMAGE']))
            \Bitrix\Main\Page\Asset::getInstance()->addString('<meta property="og:image" content="'.$url . \CFile::GetPath(self::$options['OPEN_GRAPH_IMAGE']).'" />');
        
        
        if (is_array(self::$templateOptions['assets']['less']))
        {
            $lessFiles = Array ();
            foreach (self::$templateOptions['assets']['less'] as $file)
            {
                $lessFile = self::$rootFolder . SITE_TEMPLATE_PATH . $file;
                if (file_exists($lessFile))
                {
                    $lessFiles[$lessFile] = SITE_TEMPLATE_PATH . '/less_compile';
                }
            }
            
            try
            {
                $color1_rgb = self::hex2rgb(self::$options['COLOR_SCHEME_1']);
                $lessVariables = Array (
                    'color__1' => self::$options['COLOR_SCHEME_1'],
                    'color__1_red' => $color1_rgb[0],
                    'color__1_green' => $color1_rgb[1],
                    'color__1_blue' => $color1_rgb[2],
                    'font__family' => self::$options['FONT_FAMILY'],
                    'font__size' => self::$options['FONT_SIZE'],
                );
                
                if (in_array(self::$options['FONT_FAMILY'], Array("OpenSans", "Gotham Pro", "Ubuntu")))
                {
                    $fontPath = SITE_TEMPLATE_PATH . "/vendor/fonts/" . strtolower(trim(str_replace(" ", "", self::$options['FONT_FAMILY']))) . ".css";
                    \Bitrix\Main\Page\Asset::getInstance()->addCss($fontPath);
                }

                
                if (!empty($lessFiles))
                    $filePath = \Less_Cache::Get($lessFiles, self::$lessOptions, $lessVariables);
                
                $error = false;
            }
            catch (\Exception $e)
            {
                $filePath = false;
                $error = $e->getMessage();
            }

            if (!$error)
                \Bitrix\Main\Page\Asset::getInstance()->addCss(self::$lessOptions['outputPath']);
            else
                die($error);

        }
    }
    
    public static function hex2rgb($hex)
    {
        $hex = str_replace("#", "", $hex);

        if (strlen($hex) == 3)
        {
            $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
            $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
            $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
        }
        else
        {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }
        $rgb = array($r, $g, $b);
        return $rgb;
    }

    public static function formatPrice($price)
    {
        $format = "";
        
        if (!empty($price))
        {
            $format = number_format(floatval($price), 0, '', ' ');
            
            switch (self::$options['CURRENCY'])
            {
                case 'RUB':
                    $format .= " " . GetMessage('CURRENCY_RUB');
                    break;
                
                case 'UAH':
                    $format .= " " . GetMessage('CURRENCY_UAH');
                    break;
                
                case 'EUR':
                    $format = "&euro;" . $format;
                    break;
                
                case 'US':
                    $format = "$" . $format;
                    break;
            }
        }
        
        return $format;

    }
    
    public static function phone2int($value)
    {
        foreach (Array(" ", "+", "(", ")", "-") as $char)
            $value = str_replace($char, "", $value);
        
        $value = trim($value);
        
        return $value;
    }


    public static function getSiteLogo()
    {
        $arResult = Array (
            'ALT' => self::$options['SITE_NAME'],
            'TITLE' => self::$options['SITE_NAME'],
            'DEFAULT' => $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/images/logo.svg'
        );
        
        
        if (!empty(self::$options['LOGO']))
        {
            $arFile = \CFile::ResizeImageGet(self::$options['LOGO'], Array ('width' => 300, 'height' => 300), BX_RESIZE_IMAGE_PROPORTIONAL_ALT);
            if (!empty($arFile['src']))
                $arResult['SRC'] = $arFile['src'];
        }
        
        return $arResult;
    }
    
    public function GetMenuMultilevel($arItems, $currentDepth = 0, &$currentKey = 0)
    {
        if (is_array($arItems))
        {
                
            $arResult = Array ();
            for($key = $currentKey; $key < count($arItems); $key++)
            {
                $arItem = $arItems[$key];
                if($currentDepth > $arItem['DEPTH_LEVEL'] - 1)
                    break;

                if (!empty($arItem['IS_PARENT']))
                {
                    $key++;
                    $arItem['SUB'] = $this->GetMenuMultilevel($arItems, $currentDepth + 1, $key);
                    $key--;
                }

                $arResult[] = $arItem;
            }

            $currentKey = $key;

            return $arResult;
        }

        return false;
    }
    
    public static function getSections($arParams, $arVariables)
    {
        if (!\Bitrix\Main\Loader::includeModule('iblock'))
            return false;
        
        $arFilter = Array(
            'IBLOCK_ID' => $arParams['IBLOCK_ID'],
            'ACTIVE' => "Y",
            'SECTION_ID' => false
        );
        
        $arResult = Array ();
        
        if (!empty($arVariables['SECTION_CODE']))
        {
            $arCurrentSection = \CIBlockSection::GetList(array(), array(
                'IBLOCK_ID' => $arParams['IBLOCK_ID'],
                'CODE' => $arVariables['SECTION_CODE']
            ), false, Array ('ID'), array ('nPageSize' => 1))->fetch();
            if (!empty($arCurrentSection['ID']))
                $arFilter['SECTION_ID'] = $arCurrentSection['ID'];
        }
        
        if (!empty($arVariables['SECTION_ID']))
        {
            $arFilter['SECTION_ID'] = $arVariables['SECTION_ID'];
        }
        
        $rsSections = \CIBlockSection::GetList(array('SORT' => 'ASC'), $arFilter);
        
        while ($arSection = $rsSections->GetNext())
        {
            $arResult[] = $arSection;
        }
        
        return $arResult;
    }
    
    public static function getCatalogSection($arParams, $arVariables)
    {
        if (!\Bitrix\Main\Loader::includeModule('iblock'))
            return false;
        
        if (empty($arVariables['SECTION_CODE']) && empty($arVariables['SECTION_ID']))
            return false;
        
        $arFilter = Array(
            'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        );
        
        if (!empty($arVariables['SECTION_CODE']))
            $arFilter['CODE'] = $arVariables['SECTION_CODE'];
        else
            $arFilter['SECTION_ID'] = $arVariables['SECTION_ID'];
        
        $arCurrentSection = \CIBlockSection::GetList(array(), $arFilter, false, Array (), array ('nPageSize' => 1))->fetch();
        
        if (!empty($arCurrentSection['ID']))
            return $arCurrentSection;
        
        return false;
    }
    
    public static function setPagePropertiesBySection($arParams, $arVariables)
    {
        global $APPLICATION;
        
        if (!\Bitrix\Main\Loader::includeModule('iblock'))
            return false;

        if (empty($arVariables['SECTION_CODE']) && empty($arVariables['SECTION_ID']))
            return false;
        
        if (!empty($arVariables['SECTION_CODE']))
            $arFilter['CODE'] = $arVariables['SECTION_CODE'];
        else
            $arFilter['SECTION_ID'] = $arVariables['SECTION_ID'];
        
        $arCurrentSection = \CIBlockSection::GetList(array(), $arFilter, false, Array (), array ('nPageSize' => 1))->GetNext();
        
        if (!empty($arCurrentSection['ID']))
        {
            
            $ipropValues = new \Bitrix\Iblock\InheritedProperty\SectionValues($arCurrentSection["IBLOCK_ID"], $arCurrentSection["ID"]);
            $arCurrentSection["IPROPERTY_VALUES"] = $ipropValues->getValues();
            
            $arValues = Array (
                'title' => (!empty($arCurrentSection['IPROPERTY_VALUES']['SECTION_PAGE_TITLE'])) ? $arCurrentSection['IPROPERTY_VALUES']['SECTION_PAGE_TITLE'] : $arCurrentSection['NAME'],
                'meta_title' => (!empty($arCurrentSection['IPROPERTY_VALUES']['SECTION_META_TITLE'])) ? $arCurrentSection['IPROPERTY_VALUES']['SECTION_META_TITLE'] : $arCurrentSection['NAME'],
            );
            $APPLICATION->SetTitle($arValues['title']);
            $APPLICATION->SetPageProperty("title", $arValues['meta_title']);
            
            if ($arParams['ADD_SECTIONS_CHAIN'] == "Y")
                $APPLICATION->AddChainItem($arValues['title'], $arCurrentSection['SECTION_PAGE_URL']);
            
            if (!empty($arCurrentSection['IPROPERTY_VALUES']['SECTION_META_DESCRIPTION']))
                $APPLICATION->SetPageProperty("description", $arCurrentSection['IPROPERTY_VALUES']['SECTION_META_DESCRIPTION']);
            
            if (!empty($arCurrentSection['IPROPERTY_VALUES']['SECTION_META_KEYWORDS']))
                $APPLICATION->SetPageProperty("keywords", $arCurrentSection['IPROPERTY_VALUES']['SECTION_META_KEYWORDS']);

        }
    }
    
    
}