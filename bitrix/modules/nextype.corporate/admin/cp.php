<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

if (!CModule::IncludeModule("nextype.corporate"))
        return false;

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$APPLICATION->SetTitle(Loc::getMessage('NT_CORPORATE_CP_TITLE'));
CJSCore::Init(array("jquery"));
$cpAddress = \Nextype\Corporate\CAdmin::getControlPanelAddress();
?>

<style>
#cp_frame {
    width: 100%;
    max-width:100%;
    border:0;
    display: block;
    height: 1000px;
}
</style>

<iframe id="cp_frame" src="<?=$cpAddress?>"></iframe>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");