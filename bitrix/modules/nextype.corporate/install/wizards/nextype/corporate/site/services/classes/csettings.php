<?php

namespace Nextype\Wizard;

class CSettings
{
    public static function setModuleOptions($arData)
    {
        foreach ($arData as $key => $value)
        {
            \COption::SetOptionString(\Nextype\Wizard\System::moduleId, $key, $value, false, WIZARD_SITE_ID);
        }
    }
    
    public static function setMainOptions($arData)
    {
        foreach ($arData as $key => $value)
        {
            \COption::SetOptionString('main', $key, $value, false, WIZARD_SITE_ID);
        }
    }
}