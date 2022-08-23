<?php
namespace Nextype\Corporate;

class CAdmin
{
    const moduleId = "corporate";
    const partnerId = "nextype";

    public static function getControlPanelAddress()
    {
        global $APPLICATION;
        
        if(file_exists($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/classes/general/update_client.php')
           && file_exists($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/classes/general/update_client_partner.php'))
        {

            include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/classes/general/update_client.php');
            include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/classes/general/update_client_partner.php');
            $arClientData = Array ();
            $key = base64_encode(\CUpdateClient::GetLicenseKey());
            
            $stableVersionsOnly = \COption::GetOptionString('main', 'stable_versions_only', 'Y');
            $arUpdateList = \CUpdateClient::GetUpdatesList($errors, LANG, $stableVersionsOnly);
            
            if (is_array($arUpdateList) && !empty($arUpdateList['CLIENT'][0]['@']))
            {
                $arClient = $arUpdateList['CLIENT'][0]['@'];
                $arClientData['CMS']['LICENSE'] = urlencode($arClient['LICENSE']);
                $arClientData['CMS']['EXPIRE_DATE'] = date("d.m.Y", strtotime($arClient['DATE_TO_SOURCE']));
                $arClientData['CMS']['VERSION'] = $arUpdateList['UPDATE_SYSTEM'][0]['@']['VERSION'];
                $arClientData['CLIENT']['NAME'] = urlencode($arClient['NAME']);
                $arClientData['CLIENT']['EMAIL'] = $arClient['SUBSCR_EMAIL'];
                $arClientData['CLIENT']['PARTNER_ID'] = $arClient['PARTNER_ID'];
            }
            
            $arUpdateList = \CUpdateClientPartner::GetUpdatesList($errors, LANG, $stableVersionsOnly, Array (self::partnerId . "." .self::moduleId), array('fullmoduleinfo' => 'Y'));
            
            if (is_array($arUpdateList['MODULE']))
            {
                foreach ($arUpdateList['MODULE'] as $arModule)
                {
                    if ($arModule['@']['ID'] == self::partnerId . "." .self::moduleId)
                    {
                        $arClientData['MODULE']['ID'] = $arModule['@']['ID'];
                        $arClientData['MODULE']['PARTNER_NAME'] = $arModule['@']['PARTNER_NAME'];
                        $arClientData['MODULE']['UPDATE_END'] = $arModule['@']['UPDATE_END'];
                        $arClientData['MODULE']['DATE_TO'] = $arModule['@']['DATE_TO'];
                        break;
                    }
                }
            }
            
            $strClientData = serialize($arClientData);
            
            if (isset($_REQUEST['check']))
            {
                $APPLICATION->RestartBuffer();
                
                echo "OK:".base64_encode(serialize(Array ('key' => $key, 'data' => $arClientData)));
                exit();
            }

            return 'https://nextype.ru/solutions/?solution=corporate&product_key=' . urlencode($key) . "&data=" . base64_encode($strClientData);
        }
    }
}