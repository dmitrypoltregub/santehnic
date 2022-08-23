<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

include_once __DIR__ . "/../classes/autoload.php";
$wizard =& $this->GetWizard();

\Nextype\Wizard\CSettings::setModuleOptions(Array (
    'COLOR_SCHEME_1' => $wizard->GetVar("COLOR_SCHEME_1"),
    'LOGO' => $wizard->GetVar("SITE_LOGO"),
    'SITE_INSTALLED' => "Y"
));

// set SERVER_NAME and DOMAINS
$host = str_replace(":80", "", str_replace(":443", "", $_SERVER['HTTP_HOST']));
$obSite = new \CSite;
$obSite->Update(WIZARD_SITE_ID, Array('SERVER_NAME' => $host, 'DOMAINS' => $host));