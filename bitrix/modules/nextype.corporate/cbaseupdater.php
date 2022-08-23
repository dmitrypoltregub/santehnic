<?php

IncludeModuleLangFile($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/iblock/classes/general/cml2.php");

class CNextypeBaseUpdater
{
    public $developer = "nextype";
    public $version = "";
    public $moduleId = "";

    protected $moduleDir = false;
    protected $templateCode = "";
    protected $wizardTemplatePath = false;
    protected $wizardPublicPath = false;
    protected $wizardServicePath = false;
    protected $eventNamespace = "";
    protected $arContentReplace = Array ();
    protected $arNeedModules = Array ('iblock');
    protected $arIgnorePublicFiles = Array ();
    protected $arIgnoreSystemFiles = Array ();
    protected $lang = 'ru';

    protected $arSites = false;
    protected $charset = false;
    protected $arCurrentSite = false;
    protected $arIblockNeedInstall = false;

    public function __construct($config = array ())
    {
        if (!$config['module'])
            return false;

        $this->moduleId = $this->developer . "." . $config['module'];
        $this->templateCode = $config['module'];

        if (!\IsModuleInstalled($this->moduleId))
            return false;

        if (is_dir($_SERVER['DOCUMENT_ROOT'] . "/local/modules/" . $this->moduleId))
            $this->moduleDir = $_SERVER['DOCUMENT_ROOT'] . "/local/modules/" . $this->moduleId;
        else
            $this->moduleDir = $_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/" . $this->moduleId;

        $wizardTemplatePath = "install/wizards/". $this->developer . "/" . $this->templateCode . "/site/templates/" . $this->templateCode;
        if (is_dir(__DIR__ . "/" . $wizardTemplatePath))
        {
            $this->wizardTemplatePath = $wizardTemplatePath;
        }

        $wizardPublicPath = "install/wizards/" . $this->developer . "/".$this->templateCode . "/site/public/" . $this->lang;
        if (is_dir(__DIR__ . "/" . $wizardPublicPath))
        {
            $this->wizardPublicPath = $wizardPublicPath;
        }

        $wizardServicePath = "install/wizards/" . $this->developer . "/" . $this->templateCode . "/site/services";
        if (is_dir(__DIR__ . "/" . $wizardServicePath))
        {
            $this->wizardServicePath = $wizardServicePath;
        }

        $this->eventNamespace = "\\" . ucfirst($this->developer) . "\\" . ucfirst($config['module']) . "\\CEvents";

        if (file_exists(__DIR__ . "/install/version.php"))
        {
            include(__DIR__ . "/install/version.php");
            if (is_array($arModuleVersion))
            {
                $this->version = $arModuleVersion['VERSION'];
            }
        }

        foreach ($config as $key => $value)
        {
            if (isset($this->{$key}))
            {
                $this->{$key} = $value;
            }
        }

        if (is_array($config['iblockNeedInstall']))
            $this->arIblockNeedInstall = $config['iblockNeedInstall'];
        
        if (is_array($this->arIgnorePublicFiles))
        {
            foreach ($this->arIgnorePublicFiles as $key => $path)
            {
                $this->arIgnorePublicFiles[$key] = str_replace("//", "/", __DIR__ . DIRECTORY_SEPARATOR . $this->wizardPublicPath . $path);
            }
        }

        foreach ($this->arNeedModules as $module)
            if (!\CModule::IncludeModule($module))
                return false;

        return true;
    }

    protected function writeToLog($data = Array ())
    {

    }

    public function isSiteInstalled()
    {
        $this->getSites();

        return !empty($this->arSites) ? true : false;
    }

    protected function getSites()
    {
        if (is_array($this->arSites))
            return $this->arSites;

        $this->arSites = Array ();

        $arSolutionIblocks = Array ();
        $iblockDir = $this->moduleDir . "/install/wizards/" . $this->developer . "/" . $this->templateCode . "/site/services/iblock/content/";


        if (is_dir($iblockDir))
        {
            $files = scandir($iblockDir);


            foreach($files as $key => $value)
            {
                $path = realpath($iblockDir . "/" . $value);

                if($value != "." && $value != ".." && is_dir($path) && file_exists($path . "/.settings.php"))
                {
                    $arSettings = include($path . "/.settings.php");
                    $arSolutionIblocks[] = Array (
                        'CODE_REPLACE' => $arSettings['CODE_REPLACE'],
                        'CODE' => $arSettings['CODE'],
                        'IBLOCK_TYPE_ID' => $arSettings['IBLOCK_TYPE_ID'],
                    );
                }
            }

        }



        $rsSites = \CSite::GetList($by="sort", $order="desc", Array("ACTIVE" => "Y"));
        while ($arSite = $rsSites->fetch())
        {
            $isInstall = \COption::GetOptionString($this->moduleId, "SITE_INSTALLED", "N", $arSite['ID']);
            if ($isInstall == "Y")
            {
                $templatePath = "/bitrix/templates/" . $this->templateCode . "_" . $arSite['ID'];
                $templateDir = $_SERVER['DOCUMENT_ROOT'] . $templatePath;

                $this->arSites[$arSite['ID']] = Array (
                    'SITE_ID' => $arSite['ID'],
                    'SITE_DIR' => $arSite['DIR'],
                    'TEMPLATE_DIR' => is_dir($templateDir) ? $templateDir : false,
                    'TEMPLATE_PATH' => is_dir($templateDir) ? $templatePath : false,
                    'SITE_IBLOCKS' => Array ()
                );

                foreach ($arSolutionIblocks as $arIblock)
                {
                    $oneIblock = \CIBlock::GetList(Array (), Array ('TYPE' => $arIblock['IBLOCK_TYPE_ID'], '?CODE' => "(" . $arIblock['CODE'] . "_" . $arSite['ID'] . " || " . $arIblock['CODE'] . ")"))->fetch();
                    if ($oneIblock)
                        $arIblock['ID'] = $oneIblock['ID'];

                    $this->arSites[$arSite['ID']]['SITE_IBLOCKS'][] = $arIblock;
                }
            }

        }

        return $this->arSites;
    }

    public function getCharset()
    {
        if ($this->charset)
            return $this->charset;

        $sql='SHOW VARIABLES LIKE "character_set_database";';

        if(method_exists('\Bitrix\Main\Application', 'getConnection'))
        {
                $db=\Bitrix\Main\Application::getConnection();
                $arResult = $db->query($sql)->fetch();
                $isUTF8 = $arResult['Value'] == 'utf8';
        }
        elseif(defined("BX_USE_MYSQLI") && BX_USE_MYSQLI === true)
        {
                if($result = @mysqli_query($sql)){
                        $arResult = mysql_fetch_row($result);
                        $isUTF8 = $arResult[1] == 'utf8';
                }
        }
        elseif($result = @mysql_query($sql))
        {
                $arResult = mysql_fetch_row($result);
                $isUTF8 = $arResult[1] == 'utf8';
        }

        $this->charset = $isUTF8 ? 'utf-8' : 'windows-1251';

        return $this->charset;
    }

    protected function getFiles($dir, &$results = array())
    {
        if (is_dir($dir))
        {
            $files = scandir($dir);

            foreach($files as $key => $value){
                $path = realpath($dir . DIRECTORY_SEPARATOR . $value);

                if(!is_dir($path))
                {
                    $results[] = $path;
                }
                else if($value != "." && $value != "..")
                {
                    $this->getFiles($path, $results);
                    $results[] = $path;
                }
            }
        }

        return $results;
    }

    protected function replaceFile($source, $destination)
    {
        $pathInfo = pathinfo($destination);
        if (empty($pathInfo['dirname']) || empty($pathInfo['basename']))
            return false;

        if (!is_dir($pathInfo['dirname']))
        {
            @mkdir($pathInfo['dirname'], BX_DIR_PERMISSIONS, true);
        }

        if(file_exists($destination))
        {
            if (!is_writable($destination))
                @chmod($destination, BX_FILE_PERMISSIONS);

            $backupFilename = "_" . $this->version . "_" . $pathInfo['basename'];
            @copy($destination, $pathInfo['dirname'] . "/" . $backupFilename);
        }

        @copy($source, $destination);

        if ($this->arCurrentSite)
        {
            // set SITE_DIR and other const
            $arReplace = array_merge(Array (
                "#SITE_DIR#" => $this->arCurrentSite['SITE_DIR'],
                "#SITE_ID#" => $this->arCurrentSite['SITE_ID'],
                "#WIZARD_SITE_DIR#" => $this->arCurrentSite['SITE_DIR'],
            ), $this->arContentReplace);
            
            $content = file_get_contents($destination);

            foreach ($arReplace as $key => $value)
            {
                $content = str_replace($key, $value, $content);
            }

            if (!empty($this->arCurrentSite['SITE_IBLOCKS']))
            {
                foreach ($this->arCurrentSite['SITE_IBLOCKS'] as $arIblock)
                {
                    if (!empty($arIblock['CODE_REPLACE']) && !empty($arIblock['ID']))
                    {
                        $content = str_replace("#" . $arIblock['CODE_REPLACE'] . "#", $arIblock['ID'], $content);
                    }
                }
            }

            file_put_contents($destination, $content);
        }

        return true;
    }

    protected function setUserElementForm($iblockID, $arOptions)
    {
        $optionString = "";

        $dbProperty = \CIBlockProperty::GetList(array(), array("IBLOCK_ID" => $iblockID));
	while($arProp = $dbProperty->Fetch())
            $arProperty[$arProp["CODE"]] = $arProp["ID"];

        foreach ($arOptions as $key => $tab)
        {
            $tab['TITLE'] = ($this->charset == 'utf-8' ? iconv('windows-1251', 'UTF-8', $tab['TITLE']) : $tab['TITLE']);
            $tab['NAME'] = ($this->charset == 'utf-8' ? iconv('windows-1251', 'UTF-8', $tab['NAME']) : $tab['NAME']);

            $optionString .= "cedit" . ($key + 1) . "--#--".$tab['TITLE']."--,";
            foreach ($tab['ITEMS'] as $itemKey => $arItem)
            {
                if (strpos($arItem['CODE'], "PROPERTY_") !== false)
                {
                    $propCode = str_replace("PROPERTY_", "", $arItem['CODE']);
                    if (isset($arProperty[$propCode]))
                    {
                        $arItem['CODE'] = "PROPERTY_" . $arProperty[$propCode];
                    }
                }

                $arItem['NAME'] = ($this->charset == 'utf-8' ? iconv('windows-1251', 'UTF-8', $arItem['NAME']) : $arItem['NAME']);

                $required = ($arItem['REQUIRED'] == "Y") ? "*" : "";
                $optionString .= "--".$arItem['CODE']."--#--".$required.$arItem['NAME']."--";
                if ($itemKey+1 < count($tab['ITEMS']))
                    $optionString .= ",";
            }

            $optionString .= ";--";
        }

        \CUserOptions::SetOption("form", "form_element_" . $iblockID, array("tabs" =>$optionString) );
    }

    protected function setUserListColumns($iblockID, $iblockType, $arColumns)
    {
        $dbProperty = \CIBlockProperty::GetList(array(), array("IBLOCK_ID" => $iblockID));
	while($arProp = $dbProperty->Fetch())
            $arProperty[$arProp["CODE"]] = $arProp["ID"];

        foreach ($arColumns as $key => $prop)
        {
            if (strpos($prop, "PROPERTY_") !== false)
            {
                $prop = str_replace("PROPERTY_", "", $prop);
                $arColumns[$key] = "PROPERTY_" . $arProperty[$prop];
            }
        }

        \CUserOptions::SetOption("list", "tbl_iblock_list_".md5($iblockType.".".$iblockID), array(
		'columns' => implode(",", $arColumns), 'by' => 'sort', 'order' => 'asc', 'page_size' => '20',
	));
    }

    protected function importIblockFromXml($arParams)
    {
        global $APPLICATION;

        if (!$this->arCurrentSite || empty($arParams['XML']) || !file_exists($arParams['XML']))
            return false;

        require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/iblock/classes/".strtolower($GLOBALS["DB"]->type)."/cml2.php");

        $iblockCode = $arParams['CODE'] . "_" . $this->arCurrentSite['SITE_ID'];

        $xmlFile = $arParams['XML'];

        if (file_exists($xmlFile.".back"))
            @copy($xmlFile.".back", $xmlFile);

        @copy($xmlFile, $xmlFile.".back");

        $xmlFileContent = file_get_contents($xmlFile);
        foreach (Array(
                    "#XML_IBLOCK_CODE#" => $iblockCode,
                    "#XML_SITE_ID#" => $this->arCurrentSite['SITE_ID'],
                    "#XML_SITE_DIR#" => $this->arCurrentSite['SITE_DIR']
        ) as $key => $value)
        {
            $xmlFileContent = str_replace($key, $value, $xmlFileContent);
        }

        file_put_contents($xmlFile, $xmlFileContent);

        $xmlFilePath = str_replace($_SERVER['DOCUMENT_ROOT'], "", $xmlFile);

        //\ImportXMLFile($xmlFilePath, $arParams['IBLOCK_TYPE_ID'], Array ($this->arCurrentSite['SITE_ID']), "N", "N");

        $iblockID = \ImportXMLFile(
            $xmlFilePath,
            $arParams['IBLOCK_TYPE_ID'],
            Array ($this->arCurrentSite['SITE_ID']),
            $section_action = "N",
            $element_action = "N",
            $use_crc = false,
            $preview = false,
            $sync = false,
            $return_last_error = false,
            $return_iblock_id = true
        );

        if ((!is_integer($iblockID)) || ($iblockID <= 0))
        {
            $arIBlock = \CIBlock::GetList(array(), array("CODE" => $iblockCode, "TYPE" => $arParams['IBLOCK_TYPE_ID']))->fetch();
            if (!$arIBlock['ID'])
                return false;
            else
                $iblockID = $arIBlock['ID'];
        }

        if (empty($iblockID))
            return false;

        if (empty($permissions))
            $permissions = Array(1 => "X", 2 => "R");

        \CIBlock::SetPermission($iblockID, $permissions);


        $arFields = Array (
            "CODE" => $iblockCode,
            "XML_ID" => $iblockCode
        );

        $arFields = array_merge($arParams, $arFields);

        $obIblock = new \CIBlock;
        $obIblock->Update($iblockID, $arFields);

        if (!empty($arParams['USER_FORM_ELEMENT']))
            $this->setUserElementForm($iblockID, $arParams['USER_FORM_ELEMENT']);

        if (!empty($arParams['USER_LIST_COLUMNS']))
            $this->setUserListColumns($iblockID, $arParams['IBLOCK_TYPE_ID'], $arParams['USER_LIST_COLUMNS']);



        return $iblockID;

    }

    protected function importIblockPropertiesFromXml($arIblock, $arParams)
    {

        if (!$this->arCurrentSite || empty($arParams['XML']) || !file_exists($arParams['XML']))
            return false;

        //require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/iblock/classes/".strtolower($GLOBALS["DB"]->type)."/cml2.php");
        require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/classes/general/xml.php');

        $obXml = new \CDataXML();
        $convertedXml = file_get_contents($arParams['XML']);

        if (!defined('LANG_CHARSET') || LANG_CHARSET != "windows-1251")
        {
            $convertedXml = str_replace('encoding="windows-1251"', 'encoding="utf-8"', $convertedXml);
            $convertedXml = mb_convert_encoding($convertedXml, 'utf-8', 'windows-1251');
        }

        $obXml->LoadString($convertedXml);

        $arProperties = Array ();
        $arXml = $obXml->GetArray();

        if ($obXml && $arXml = $obXml->GetArray())
        {


            $arXmlProperties = $arXml[GetMessage('IBLOCK_XML2_COMMERCE_INFO')]['#'][GetMessage('IBLOCK_XML2_METADATA')][0]['#'][GetMessage('IBLOCK_XML2_PROPERTIES')][0]['#'][GetMessage('IBLOCK_XML2_PROPERTY')];
            if (!empty($arXmlProperties))
            {

                foreach ($arXmlProperties as $arXmlProp)
                {

                    if (isset($arXmlProp['#']) && is_array($arXmlProp['#']))
                    {
                        $arProp = Array ();
                        foreach ($arXmlProp['#'] as $valueKey => $arXmlPropValue)
                        {
                            if (!empty($valueKey) && $arXmlPropValue['0']['#'])
                            {
                                if (is_array($arXmlPropValue['0']['#']) && is_array($arXmlPropValue['0']['#'][GetMessage('IBLOCK_XML2_CHOICE')]))
                                {
                                    foreach ($arXmlPropValue['0']['#'][GetMessage('IBLOCK_XML2_CHOICE')] as $arXmlEnum)
                                    {
                                        if (is_array($arXmlEnum['#']))
                                        {
                                            $arEnum = Array ();
                                            foreach ($arXmlEnum['#'] as $keyEnum => $arXmlEnumValue)
                                            {
                                                if (isset($arXmlEnumValue[0]['#']))
                                                {
                                                    $arEnum[$keyEnum] = $arXmlEnumValue[0]['#'];
                                                }
                                            }

                                            $arProp[$valueKey][] = $arEnum;
                                        }
                                    }
                                }
                                else
                                {
                                    $arProp[$valueKey] = (string)$arXmlPropValue['0']['#'];
                                }
                            }
                        }
                        $arProperties[] = $arProp;
                    }
                }
            }

            //print_r($arProperties);
        }

        if (!empty($arProperties))
        {
            $obIblockProperty = new \CIBlockProperty;

            foreach ($arProperties as $arProp)
            {
                if (!empty($arProp[GetMessage('IBLOCK_XML2_BX_CODE')]))
                {
                    $arOneProp = \CIBlockProperty::GetList(Array (), Array ('CODE' => $arProp[GetMessage('IBLOCK_XML2_BX_CODE')], 'IBLOCK_ID' => $arIblock['ID']))->fetch();
                    if (!$arOneProp)
                    {
                        $arFields = Array (
                            'CODE' => $arProp[GetMessage('IBLOCK_XML2_BX_CODE')],
                            'IBLOCK_ID' => $arIblock['ID'],
                            'ACTIVE' => 'Y',
                            'NAME' => $arProp[GetMessage('IBLOCK_XML2_NAME')],
                            'MULTIPLE' => $arProp[GetMessage('IBLOCK_XML2_MULTIPLE')] != "false" ? "Y" : "N",
                            'SORT' => intval($arProp[GetMessage('IBLOCK_XML2_BX_SORT')]),
                            'PROPERTY_TYPE' => $arProp[GetMessage('IBLOCK_XML2_BX_PROPERTY_TYPE')],
                            'ROW_COUNT' => intval($arProp[GetMessage('IBLOCK_XML2_BX_ROWS')]),
                            'COL_COUNT' => intval($arProp[GetMessage('IBLOCK_XML2_BX_COLUMNS')]),
                            'LIST_TYPE' => $arProp[GetMessage('IBLOCK_XML2_BX_LIST_TYPE')],
                            'SEARCHABLE' => $arProp[GetMessage('IBLOCK_XML2_BX_SEARCH')]  != "false" ? "Y" : "N",
                            'FILTRABLE' => $arProp[GetMessage('IBLOCK_XML2_BX_FILTER')] != "false" ? "Y" : "N",
                            'IS_REQUIRED' => $arProp[GetMessage('IBLOCK_XML2_BX_IS_REQUIRED')] != "false" ? "Y" : "N",
                            'USER_TYPE' => !empty($arProp[GetMessage('IBLOCK_XML2_BX_USER_TYPE')]) ? $arProp[GetMessage('IBLOCK_XML2_BX_USER_TYPE')] : "",
                            'USER_TYPE_SETTINGS' => isset($arProp[GetMessage('IBLOCK_XML2_BX_USER_TYPE_SETTINGS')]) && !empty($arProp[GetMessage('IBLOCK_XML2_BX_USER_TYPE_SETTINGS')]) ? unserialize($arProp[GetMessage('IBLOCK_XML2_BX_USER_TYPE_SETTINGS')]) : Array (),
                        );

                        if (!empty($arProp[GetMessage('IBLOCK_XML2_CHOICE_VALUES')]) && is_array($arProp[GetMessage('IBLOCK_XML2_CHOICE_VALUES')]))
                        {
                            $arFields['VALUES'] = Array ();
                            foreach ($arProp[GetMessage('IBLOCK_XML2_CHOICE_VALUES')] as $arEnum)
                            {
                                $arFields['VALUES'][] = Array (
                                    'XML_ID' => $arEnum[GetMessage('IBLOCK_XML2_ID')],
                                    'VALUE' => $arEnum[GetMessage('IBLOCK_XML2_VALUE')],
                                    'DEF' => $arEnum[GetMessage('IBLOCK_XML2_BY_DEFAULT')] == "true" ? "Y" : "N",
                                    'SORT' => intval($arEnum[GetMessage('IBLOCK_XML2_SORT')]),
                                );
                            }
                        }

                        $obIblockProperty->Add($arFields);
                    }
                }
            }
        }

    }

    protected function installIblocks()
    {

        if (!$this->wizardServicePath || empty($this->arSites))
            return;

        $arSolutionIblocks = Array ();
        $iblockDir = __DIR__ . "/" . $this->wizardServicePath . "/iblock/content/";

        if (is_dir($iblockDir))
        {
            $files = $this->arIblockNeedInstall ? $this->arIblockNeedInstall : scandir($iblockDir);

            foreach($files as $key => $value)
            {
                $path = realpath($iblockDir . "/" . $value);

                if($value != "." && $value != ".." && is_dir($path) && file_exists($path . "/.settings.php") && file_exists($path . "/xml/".$this->lang."/import.xml"))
                {
                    $arSettings = include($path . "/.settings.php");
                    $arSettings['XML'] = $path . "/xml/".$this->lang."/import.xml";

                    $arSolutionIblocks[] = $arSettings;
                }
            }

        }


        if (!empty($arSolutionIblocks))
        {
            foreach ($this->arSites as $arSite)
            {
                $this->arCurrentSite = $arSite;
                foreach ($arSolutionIblocks as $arIblock)
                {
                    $iblockCode = $arIblock['CODE'] . "_" . $arSite['SITE_ID'];
                    $oneIblock = \CIBlock::GetList(Array (), Array ('TYPE' => $arIblock['IBLOCK_TYPE_ID'], 'CODE' => $iblockCode))->fetch();
                    if (!$oneIblock)
                    {
                        // install iblock

                        $iblockId = $this->importIblockFromXml($arIblock);

                        if (!empty($iblockId))
                        {
                            $this->arSites[$arSite['SITE_ID']]['SITE_IBLOCKS'][] = Array (
                                'ID' => $iblockId,
                                'CODE_REPLACE' => $arIblock['CODE_REPLACE'],
                                'CODE' => $arIblock['CODE'],
                                'IBLOCK_TYPE_ID' => $arIblock['IBLOCK_TYPE_ID'],
                            );
                        }
                    }
                    else
                    {
                        // update properties
                        $this->importIblockPropertiesFromXml($oneIblock, $arIblock);
                    }
                }
            }
        }

        $this->arCurrentSite = false;

        return true;
    }

    protected function templateFiles($arFiles = false)
    {

        if (!$this->wizardTemplatePath || empty($this->arSites))
            return;

        if (!$arFiles)
            $arFiles = $this->getFiles(__DIR__ . DIRECTORY_SEPARATOR . $this->wizardTemplatePath);

        if (!empty($arFiles))
        {
            foreach ($arFiles as $source)
            {
                if (!file_exists($source))
                    continue;

                foreach ($this->arSites as $arSite)
                {
                    $this->arCurrentSite = $arSite;

                    if ($arSite['TEMPLATE_DIR'])
                    {
                        $destination = $arSite['TEMPLATE_DIR'] . str_replace(__DIR__ . DIRECTORY_SEPARATOR . $this->wizardTemplatePath, "", $source);
                        $this->replaceFile($source, $destination);
                    }
                }

                $this->arCurrentSite = false;

            }
        }

        return true;
    }

    protected function publicFiles()
    {
        if (!$this->wizardPublicPath || empty($this->arSites))
            return;

        if (!$arFiles)
            $arFiles = $this->getFiles(__DIR__ . DIRECTORY_SEPARATOR . $this->wizardPublicPath);

        
        if (!empty($arFiles))
        {
            foreach ($arFiles as $source)
            {
                if (!file_exists($source) || in_array($source, $this->arIgnorePublicFiles))
                    continue;

                foreach ($this->arSites as $arSite)
                {
                    $this->arCurrentSite = $arSite;

                    if ($arSite['SITE_DIR'])
                    {
                        $destination = $_SERVER['DOCUMENT_ROOT'] . str_replace("//", "/", $arSite['SITE_DIR'] . str_replace(__DIR__ . DIRECTORY_SEPARATOR . $this->wizardPublicPath, "", $source));
                        $this->replaceFile($source, $destination);
                    }
                }

                $this->arCurrentSite = false;

            }
        }

        return true;
    }

    protected function copyFile($source, $destination)
    {
        $pathInfo = pathinfo($destination);
        if (empty($pathInfo['dirname']) || empty($pathInfo['basename']))
        {
            $this->writeToLog([
                'action' => __FUNCTION__,
                'status' => 'error',
                'file' => $destination
            ]);

            return;
        }

        if (!is_dir($pathInfo['dirname']))
        {
            @mkdir($pathInfo['dirname'], BX_DIR_PERMISSIONS, true);
        }

        if (file_exists($destination))
        {
            if (!is_writable($destination))
                @chmod($destination, BX_FILE_PERMISSIONS);
        }

        @copy($source, $destination);
    }

    protected function copySystemFiles()
    {
        $dir = __DIR__;

        if (is_dir($dir))
        {
            // copy all module files
            $files = scandir($dir);
            foreach($files as $key => $value)
            {
                $path = realpath($dir . DIRECTORY_SEPARATOR . $value);

                if ($value != "." && $value != ".." && is_dir($path) && !in_array($value, Array ('cbaseupdater.php')))
                {
                    $dirFiles = $this->getFiles($path);

                    foreach ($dirFiles as $source)
                    {
                        if (is_file($source))
                        {
                            $destination = str_replace("//", "/", $this->moduleDir . "/" . str_replace(__DIR__, "", $source));
                            $this->copyFile($source, $destination);
                        }
                    }
                }
            }

            // copy other dirs
            $arDirsMap = Array (
                // source => destination
                "/install/components" => "/bitrix/components",
                "/install/admin" => "/bitrix/admin",
                "/install/gadgets" => "/bitrix/gadgets",
                "/install/css" => "/bitrix/css/" . $this->moduleId,
                "/install/js" => "/bitrix/js/" . $this->moduleId,
                "/install/tools" => "/bitrix/tools",
            );

            foreach ($arDirsMap as $sourceDir => $destinationDir)
            {
                $path = realpath($dir . DIRECTORY_SEPARATOR . $sourceDir);

                if (is_dir($path))
                {
                    $dirFiles = $this->getFiles($path);
                    foreach ($dirFiles as $source)
                    {
                        $destination = str_replace("//", "/", $_SERVER['DOCUMENT_ROOT'] . $destinationDir . "/" . str_replace(__DIR__ . $sourceDir, "", $source));
                        $this->copyFile($source, $destination);
                    }
                }
            }
        }


    }

    public function setOrderProp($arFields)
    {
        if (!\CModule::IncludeModule('sale'))
            return false;

        $this->getSites();

        if (!empty($this->arSites))
        {
            foreach ($this->arSites as $arSite)
            {
                $rsPersonTypes = \CSalePersonType::GetList(Array(), Array("LID" => $arSite['SITE_ID']));
                while ($arPersonType = $rsPersonTypes->fetch())
                {
                    $arProp = \CSaleOrderProps::GetList(Array (), Array ('PERSON_TYPE_ID' => $arPersonType['ID'], 'CODE' => $arFields['CODE']))->fetch();
                    if (!$arProp)
                    {
                        $arPropFields = array_merge($arFields, Array (
                            'PERSON_TYPE_ID' => $arPersonType['ID'],
                        ));

                        $arPropFields['NAME'] = $this->getCharset() == 'utf-8' ? iconv('windows-1251', 'UTF-8', $arPropFields['NAME']) : $arPropFields['NAME'];

                        $id = \CSaleOrderProps::Add($arPropFields);
                        if ($id <= 0)
                            die('Failed add order property');
                    }
                }
            }
        }

    }

    public function createForm($arParams)
    {
        if (\CModule::IncludeModule("form"))
        {
            if (!empty($this->arSites))
            {

                $arFormParams = $arParams['FORM'];

                foreach ($this->arSites as $arSite)
                {
                    $arFormParams['arSITE'][] = $arSite['SITE_ID'];
                }

                $formID = false;
                $arForm = \CForm::GetBySID($arFormParams['SID'])->fetch();
                if (!$arForm)
                {
                    if (is_array($arParams['MAIL_TEMPLATE']))
                    {
                        $arEventType = \CEventType::GetList(array("TYPE_ID" => $arParams['MAIL_TEMPLATE']['EVENT_NAME']))->fetch();
                        if (!$arEventType)
                        {
                            $oEventType = new \CEventType();
                            $eventTypeID = $oEventType->Add(Array(
                                'LID' => WIZARD_SITE_ID,
                                'EVENT_NAME' => $arParams['MAIL_TEMPLATE']['EVENT_NAME'],
                            ));
                        }

                        $oEventMessage = new \CEventMessage();
                        $arEventMessageFields = array_merge(Array(
                            'ACTIVE' => 'Y',
                            'LID' => Array(0 => WIZARD_SITE_ID),
                            'EMAIL_FROM' => "#DEFAULT_EMAIL_FROM#",
                            'EMAIL_TO' => "#DEFAULT_EMAIL_FROM#",
                                ), $arParams['MAIL_TEMPLATE']);

                        $by = "id";
                        $order = "asc";
                        $arEventMessage = \CEventMessage::GetList($by, $order, array("TYPE_ID" => $arParams['MAIL_TEMPLATE']['EVENT_NAME'], "SITE_ID" => array(SITE_ID)))->fetch();
                        if ($arEventMessage)
                        {
                            $oEventMessage->Update($arEventMessage["ID"], $arEventMessageFields);
                        }
                        else
                        {
                            $oEventMessage->Add($arEventMessageFields);
                        }

                        $arEventMessageIDs = array();
                        if ($db_res = \CEventMessage::GetList($by, $order, array("TYPE_ID" => $arParams['MAIL_TEMPLATE']['EVENT_NAME'])))
                        {
                            while ($res = $db_res->GetNext())
                            {
                                $arFormParams['arMAIL_TEMPLATE'][] = $res["ID"];
                            }
                        }
                    }

                    if (($formID = \CForm::Set($arFormParams)) <= 0)
                    {
                        return $GLOBALS['strError'];
                    }
                }
                else
                {
                    $arFormSites = $arFormParams['arSITE'];

                    $rsFormSites = $GLOBALS['DB']->Query("SELECT FORM_ID, SITE_ID FROM b_form_2_site WHERE FORM_ID='" . $arForm['ID'] . "'", false, $err_mess . __LINE__);
                    while ($arFormSite = $rsFormSites->fetch())
                    {
                        if (!in_array($arFormSite['SITE_ID'], $arFormSites))
                            $arFormSites[] = $arFormSite['SITE_ID'];
                    }

                    \CForm::Set(Array(
                        'arSITE' => $arFormSites
                            ), $arForm['ID']);

                    $formID = $arForm['ID'];
                }


                if ($formID !== false)
                {
                    foreach ($arParams['FIELDS'] as $arField)
                    {
                        $arFieldParams = array_merge(Array(
                            'FORM_ID' => $formID,
                            'FILTER_TITLE' => $arField['TITLE'],
                            'RESULTS_TABLE_TITLE' => $arField['TITLE'],
                                ), $arField);



                        $fieldID = false;
                        $arField = \CFormField::GetBySID($arField['SID'])->fetch();
                        if (!$arField)
                            $fieldID = $arField['ID'];

                        \CFormField::Set($arFieldParams, $fieldID);
                    }

                    $arStatusFields = array(
                        "FORM_ID" => $formID,
                        "C_SORT" => 100,
                        "ACTIVE" => "Y",
                        "TITLE" => "DEFAULT",
                        "DEFAULT_VALUE" => "Y",
                        "arPERMISSION_VIEW" => array(2),
                        "arPERMISSION_MOVE" => array(2),
                        "arPERMISSION_EDIT" => array(2),
                        "arPERMISSION_DELETE" => array(2)
                    );
                    \CFormStatus::Set($arStatusFields);
                }

                return $formID;
            }

        }

        return false;
    }

    public function setUrlRewrite($arRules)
    {
        if (!empty($this->arSites))
        {

            foreach ($this->arSites as $arSite)
            {
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . $arSite['SITE_DIR'] . "urlrewrite.php"))
                {
                    include($_SERVER['DOCUMENT_ROOT'] . $arSite['SITE_DIR'] . "urlrewrite.php");
                }
                
                foreach ($arRules as $arUrl)
                {
                    if (!in_array($arUrl, $arUrlRewrite))
                    {
                        foreach ($arUrl as $key => $value)
                        {
                            if (is_string($value))
                                $arUrl[$key] = str_replace("{{SITE_DIR}}", $arSite['SITE_DIR'], $value);
                        }
                        
                        \CUrlRewriter::Add($arUrl);
                    }
                }
                
                unset($arUrlRewrite);
            }
        }
    }

    public function update()
    {
        $this->getCharset();
        $this->getSites();

        $this->installIblocks();
        $this->templateFiles();
        $this->publicFiles();

        $this->copySystemFiles();
    }
}