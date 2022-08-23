<?  require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
    require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

if (!CModule::IncludeModule("fileman"))
        return false;

if (!CModule::IncludeModule("nextype.corporate"))
        return false;

IncludeModuleLangFile(__FILE__);
$module_id = "nextype.corporate";
$wizard_id = "nextype:corporate";
$moduleDir = '/bitrix/modules/'.$module_id;

if (file_exists($GLOBALS["DOCUMENT_ROOT"]."/local/modules/".$module_id."/include.php"))
    $moduleDir = '/local/modules/'.$module_id;

require_once($GLOBALS["DOCUMENT_ROOT"] . $moduleDir . '/include.php');

CJSCore::Init(array("jquery"));
CAjax::Init();
CModule::Includemodule('iblock');

$APPLICATION->AddHeadScript("/bitrix/js/".$module_id."/jquery.colorpicker.js");
$APPLICATION->AddHeadScript("/bitrix/js/" . $module_id . "/jquery-ui.min.js");
$APPLICATION->SetAdditionalCSS("/bitrix/css/".$module_id."/colorpicker.css");
$APPLICATION->SetAdditionalCSS("/bitrix/css/".$module_id."/options.css");
$moduleRight = $APPLICATION->GetGroupRight($module_id);
$cpAddress = \Nextype\Corporate\CAdmin::getControlPanelAddress();
?>

<? if($moduleRight >= "W" && true): ?>

    <style>
    #cp_frame {
        width: 100%;
        max-width:100%;
        border:0;
        display: block;
        height: 430px;
    }
    </style>

    <iframe id="cp_frame" src="<?=$cpAddress?>"></iframe>

    <?
    $arAdminOptions = \Nextype\Corporate\COptions::getAdminOptionsList();
    $tabControl = new CAdminTabControl("tabControl", $arAdminOptions['TABS']);
    
    if ($REQUEST_METHOD == "POST" && isset($_POST['Apply']))
    {
        foreach($arAdminOptions['TABS'] as $key => $arTab)
        {
            if (is_array($_POST[$arTab['SITE_ID']]))
            {
                \Nextype\Corporate\COptions::setOptions($_POST[$arTab['SITE_ID']], $arTab['SITE_ID']);
                \Nextype\Corporate\CCorporate::clearTemplateCache($arTab['SITE_ID']);
            }
        }
        
        LocalRedirect($APPLICATION->GetCurPageParam());   
    }
    ?>
    
    <?if(count($arAdminOptions['TABS']) > 0):?>
        <?$tabControl->Begin();?>
        <form method="post" action="<?=$APPLICATION->GetCurPageParam('lang=' . LANGUAGE_ID)?>" class="nt_options" ENCTYPE="multipart/form-data">
	<?=bitrix_sessid_post();?>
            <? foreach($arAdminOptions['TABS'] as $key => $arTab): ?>
                <? $tabControl->BeginNextTab(); ?>
                <? foreach ($arTab['OPTIONS'] as $arOption): ?>
                    <? if ($arOption['BEFORE_HEADING'])
                        \Nextype\Corporate\COptions::drawAdminHeadingRow($arOption['BEFORE_HEADING']);
                    ?>
                    <? \Nextype\Corporate\COptions::drawAdminRow($arOption, $arTab['SITE_ID']); ?>
                <? endforeach; ?>
            <? endforeach; ?>
            <?$tabControl->Buttons();?>
            <input <?if($moduleRight < "W") echo "disabled"?> type="submit" name="Apply" class="submit-btn" value="<?=GetMessage("NT_BUTTON_APPLY")?>" title="<?=GetMessage("NT_BUTTON_APPLY")?>">
                    <? if (strlen($_REQUEST["back_url_settings"]) > 0): ?>
                        <input type="button" name="Cancel" value="<?= GetMessage("NT_BUTTON_CANCEL") ?>" title="<?= GetMessage("NT_BUTTON_CANCEL") ?>" onclick="window.location='<?= htmlspecialcharsbx(CUtil::addslashes($_REQUEST["back_url_settings"])) ?>'">
                        <input type="hidden" name="back_url_settings" value="<?= htmlspecialcharsbx($_REQUEST["back_url_settings"]) ?>">
                    <? endif; ?>
        </form>
        <?$tabControl->End();?>
    <? else: ?>
        <div class="adm-info-message-wrap adm-info-message-red">
            <div class="adm-info-message">
                <div class="adm-info-message-title"><?= GetMessage("NO_SITE_INSTALLED", array("#LINK_INSTALL#" => "/bitrix/admin/wizard_install.php?wizardName=".$wizard_id."&" . bitrix_sessid_get())) ?></div>
                <div class="adm-info-message-icon"></div>
            </div>
        </div>
    <? endif; ?>
<? endif; ?>
<?// require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_admin_after.php'); ?>