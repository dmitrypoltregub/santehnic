<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if (!defined("WIZARD_SITE_ID") || !defined("WIZARD_SITE_DIR"))
	return;

include_once __DIR__ . "/../classes/autoload.php";

$wizard =& $this->GetWizard();

\Nextype\Wizard\CFiles::CopySiteFiles();
\Nextype\Wizard\CFiles::ReplaceContent($wizard->GetVars());
\Nextype\Wizard\CFiles::ReplaceContent(Array(
    "SITE_DIR" => WIZARD_SITE_DIR
));


