<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if(!defined("WIZARD_SITE_ID")) return;
if(!defined("WIZARD_SITE_DIR")) return;
if(!defined("WIZARD_SITE_PATH")) return;
if(!defined("WIZARD_TEMPLATE_ID")) return;
if(!defined("WIZARD_TEMPLATE_ABSOLUTE_PATH")) return;

include_once __DIR__ . "/../classes/autoload.php";
$wizard =& $this->GetWizard();
\Nextype\Wizard\CFiles::InstallTemplate();

$wizrdTemplateId = $wizard->GetVar("wizTemplateID");
\COption::SetOptionString("main", "wizard_template_id", $wizrdTemplateId, false, WIZARD_SITE_ID);

