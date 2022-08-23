<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if (!defined("WIZARD_SITE_ID") || !defined("WIZARD_SITE_DIR"))
	return;

if(!CModule::IncludeModule("iblock"))
	return;

include_once __DIR__ . "/../classes/autoload.php";

$wizard =& $this->GetWizard();


function ImportContentFromXML($dirs)
{
    $contentDir = __DIR__ . "/content/";
    
    foreach ($dirs as $dir)
    {
        $settingsFile = $contentDir . $dir . "/.settings.php";
        $xmlFile = $contentDir . $dir . "/xml/".LANGUAGE_ID."/import.xml";


        if (is_dir($contentDir . $dir) && file_exists($settingsFile) && file_exists($xmlFile))
        {
            $settings = include_once($settingsFile);
            $iblockID = \Nextype\Wizard\CIblock::ImportIblockFromXml($settings, $xmlFile);

            if (is_array($settings['RELATED_ELEMENTS']))
            {
                \Nextype\Wizard\CIblock::SetRelatedElements($iblockID, $settings);
            }
            
            
            if (!empty($iblockID))
                \Nextype\Wizard\CSettings::setModuleOptions(Array (
                    "IBLOCK_" . strtoupper($settings['SETTINGS_CODE']) => $iblockID
                ));

        }
    }
}