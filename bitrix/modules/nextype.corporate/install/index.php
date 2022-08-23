<?
global $MESS;

IncludeModuleLangFile(__FILE__);

if (file_exists($GLOBALS["DOCUMENT_ROOT"]."/local/modules/nextype.corporate/include.php"))
    require_once($GLOBALS["DOCUMENT_ROOT"]."/local/modules/nextype.corporate/include.php");
else
    require_once($GLOBALS["DOCUMENT_ROOT"]."/bitrix/modules/nextype.corporate/include.php");

if(!class_exists("CCorporate")) return;

Class nextype_corporate extends CModule
{

    var $MODULE_ID = 'nextype.corporate';
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $MODULE_GROUP_RIGHTS = 'Y';
    var $NEED_MAIN_VERSION = '16.0.0';
    var $NEED_MODULES = array('main', 'iblock');


    function nextype_corporate()
    {
        $arModuleVersion = array();

        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        include($path . "/version.php");

        if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
        {
            $this->MODULE_VERSION = $arModuleVersion["VERSION"];
            $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        }

        $this->PARTNER_URI = "https://nextype.ru";
        $this->PARTNER_NAME = GetMessage("NT_CORPORATE_PARTNER_NAME");
        $this->MODULE_NAME = GetMessage("NT_CORPORATE_INSTALL_NAME");
        $this->MODULE_DESCRIPTION = GetMessage("NT_CORPORATE_INSTALL_DESCRIPTION");
    }

    function DoInstall()
    {
        global $DOCUMENT_ROOT, $APPLICATION;

        if (is_array($this->NEED_MODULES) && !empty($this->NEED_MODULES))
            foreach ($this->NEED_MODULES as $module)
                if (!IsModuleInstalled($module))
                    $this->ShowForm('ERROR', GetMessage('NT_CORPORATE_NEED_MODULES', array('#MODULE#' => $module)));

        if (strlen($this->NEED_MAIN_VERSION) <= 0 || version_compare(SM_VERSION, $this->NEED_MAIN_VERSION) >= 0)
        {

            $this->InstallFiles();
            $this->InstallDB();
            $this->InstallEvents();

            $this->ShowForm('OK', GetMessage('NT_CORPORATE_INSTALL_OK'));
        }
        else
            $this->ShowForm('ERROR', GetMessage('NT_CORPORATE_NEED_RIGHT_VER', array('#NEED#' => $this->NEED_MAIN_VERSION)));
    }
    
    function InstallDB()
    {
        RegisterModule($this->MODULE_ID);
        
        return true;
    }
    
    function UnInstallDB()
    {
        UnRegisterModule($this->MODULE_ID);
        return true;
    }
    
    function InstallEvents()
    {
        RegisterModuleDependences("main", "OnEndBufferContent", "nextype.corporate", "\\Nextype\\Corporate\\CLocations", "eventOnEndBufferContent");
    }
    
    function RemoveEvents()
    {
        UnRegisterModuleDependences("main", "OnEndBufferContent", "nextype.corporate", "\\Nextype\\Corporate\\CLocations", "eventOnEndBufferContent");
    }

    function DoUninstall()
    {
        global $DOCUMENT_ROOT, $APPLICATION, $step;
        
            
        $this->UnInstallDB();
        $this->UnInstallFiles();
        $this->RemoveEvents();
        
        $APPLICATION->IncludeAdminFile(GetMessage("NT_CORPORATE_UNINSTALL_TITLE"), __DIR__ . "/unstep.php");

    }

    function InstallFiles()
    {
	CopyDirFiles(__DIR__.'/admin/', $_SERVER['DOCUMENT_ROOT'].'/bitrix/admin', true);
        CopyDirFiles(__DIR__.'/css/', $_SERVER['DOCUMENT_ROOT'].'/bitrix/css/'.$this->MODULE_ID, true, true);
        CopyDirFiles(__DIR__.'/js/', $_SERVER['DOCUMENT_ROOT'].'/bitrix/js/'.$this->MODULE_ID, true, true);
        CopyDirFiles(__DIR__.'/components', $_SERVER["DOCUMENT_ROOT"]."/bitrix/components", true, true);
	CopyDirFiles(__DIR__.'/wizards', $_SERVER["DOCUMENT_ROOT"]."/bitrix/wizards", true, true);
        
        CopyDirFiles(__DIR__.'/gadgets/', $_SERVER['DOCUMENT_ROOT'].'/bitrix/gadgets/', true, true);
        
        return true;
    }

    function UnInstallFiles()
    {
        
        DeleteDirFilesEx('/bitrix/wizards/nextype/corporate/');
        
        foreach (Array ("corporate.basket", "corporate.locations", "corporate.options", "corporate.order", "corporate.tabs", "landing.block") as $code)
            DeleteDirFilesEx('/bitrix/components/nextype/'.$code.'/');
        
        DeleteDirFilesEx('/bitrix/css/'.$this->MODULE_ID.'/');
        DeleteDirFilesEx('/bitrix/js/'.$this->MODULE_ID.'/');
        DeleteDirFiles(__DIR__.'/admin/', $_SERVER['DOCUMENT_ROOT'].'/bitrix/admin');
     
        return true;
    }

    private function ShowForm($type, $message, $buttonName = '')
    {
        $keys = array_keys($GLOBALS);

        for ($i = 0; $i < count($keys); $i++)
            if ($keys[$i] != 'i' && $keys[$i] != 'GLOBALS' && $keys[$i] != 'strTitle' && $keys[$i] != 'filepath')
                global ${$keys[$i]};

        $APPLICATION->SetTitle(GetMessage('NT_CORPORATE_INSTALL_NAME'));
        include($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_admin_after.php');

        echo CAdminMessage::ShowMessage(array('MESSAGE' => $message, 'TYPE' => $type));
        ?>
        <form action="<?= $APPLICATION->GetCurPage() ?>" method="get">
            <p>
                <input type="hidden" name="lang" value="<?= LANG ?>" />
                <input type="submit" value="<?= strlen($buttonName) ? $buttonName : GetMessage('MOD_BACK') ?>" />
            </p>
        </form>
        <?
        include($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_admin.php');
        die();
    }

}
?>