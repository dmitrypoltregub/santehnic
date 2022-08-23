<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();

if(!defined("WIZARD_DEFAULT_SITE_ID") && !empty($_REQUEST["wizardSiteID"])) 
	define("WIZARD_DEFAULT_SITE_ID", $_REQUEST["wizardSiteID"]); 

$arWizardDescription = Array(
	"NAME" => GetMessage("NT_CORPORATE_WIZARD_NAME"), 
	"DESCRIPTION" => GetMessage("NT_CORPORATE_WIZARD_DESCRIPTION"), 
	"VERSION" => "1.0.0",
	"START_TYPE" => "WINDOW",
	"WIZARD_TYPE" => "INSTALL",
	"IMAGE" => "/images/".LANGUAGE_ID."/module.png?1",
	"PARENT" => "wizard_sol",
	"TEMPLATES" => Array(
		Array("SCRIPT" => "wizard_sol")
	),
	"STEPS" => (defined("WIZARD_DEFAULT_SITE_ID") ? 
            Array ("SelectTemplateStep", "SelectThemeStep", "SiteSettingsStep", "DataInstallStep" ,"FinishStep") :
            Array ("SelectSiteStep", "SelectTemplateStep", "SelectThemeStep", "SiteSettingsStep", "DataInstallStep" ,"FinishStep")
        )
);

