<?
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\Web\Json;

if(!CModule::IncludeModule("iblock"))
	return;


CBitrixComponent::includeComponentClass($componentName);

$arTypesEx = CIBlockParameters::GetIBlockTypes();

$arIBlocks = Array();
$db_iblock = CIBlock::GetList(Array("SORT"=>"ASC"), Array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["SEND_IBLOCK_TYPE"]!="-"?$arCurrentValues["SEND_IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
{
    $arIBlocks[$arRes["ID"]] = $arRes["NAME"];
}


$arComponentParameters = Array(
    "GROUPS" => Array(
        "GROUP_BASE"    => Array (
            "NAME"      => GetMessage("NT_FORMS_PRO_GROUP_BASE"),
            "SORT"      => 0
        ),
        "SEND_EMAIL"    => Array (
            "NAME"      => GetMessage("NT_FORMS_PRO_GROUP_SEND_EMAIL"),
            "SORT"      => 1
        ),
        "SEND_IBLOCK"   => Array (
            "NAME"      => GetMessage("NT_FORMS_PRO_GROUP_SEND_IBLOCK"),
            "SORT"      => 2
        ),
        "FIELDS"   => Array (
            "NAME"      => GetMessage("NT_FORMS_PRO_GROUP_FIELDS"),
            "SORT"      => 3
        ),
        "MESSAGES"   => Array (
            "NAME"      => GetMessage("NT_FORMS_PRO_GROUP_MESSAGES"),
            "SORT"      => 4
        ),
        "OTHER"   => Array (
            "NAME"      => GetMessage("NT_FORMS_PRO_GROUP_OTHER"),
            "SORT"      => 5
        ),
    ),
    "PARAMETERS" => Array (
        
        "NAME" => Array (
            "PARENT"    => "GROUP_BASE",
            "NAME"      => GetMessage("NT_FORMS_PRO_BASE_FORM_NAME"),
            "TYPE"      => "STRING",  
            "DEFAULT"   => GetMessage("NT_FORMS_PRO_BASE_FORM_NAME_DEFAULT")
        ),
        
        "SEND_EMAIL_ENABLED" => Array (
            "PARENT"    => "SEND_EMAIL",
            "NAME"      => GetMessage("NT_FORMS_PRO_SEND_EMAIL_ENABLED"),
            "TYPE"      => "CHECKBOX",
            "DEFAULT"   => "Y",
        ),
        
        "SEND_EMAIL_ADDRESS" => Array (
            "PARENT"    => "SEND_EMAIL",
            "NAME"      => GetMessage("NT_FORMS_PRO_SEND_EMAIL_ADDRESS"),
            "TYPE"      => "STRING",
        ),
        
        "SEND_EMAIL_EVENT_NAME" => Array (
            "PARENT"    => "SEND_EMAIL",
            "NAME"      => GetMessage("NT_FORMS_PRO_SEND_EMAIL_EVENT_NAME"),
            "TYPE"      => "STRING",
        ),
        
        "SEND_IBLOCK_ENABLED"   => Array (
            "PARENT"    => "SEND_IBLOCK",
            "NAME"      => GetMessage("NT_FORMS_PRO_SEND_IBLOCK_ENABLED"),
            "TYPE"      => "CHECKBOX",
            "DEFAULT"   => "N",
            "REFRESH"   => "Y",
        ),

        "FIELDS" => array(
            "PARENT" => "FIELDS",
            "REFRESH" => "N",
            "NAME" => GetMessage("NT_FORMS_PRO_FIELDS"),
            "TYPE" => "CUSTOM",
            "JS_FILE" => NextypeFormsProComponent::getSettingsScript($componentPath, 'fields'),
            "JS_EVENT" => "initFieldsControl",
            "JS_DATA" => Json::encode(Array()),
            'JS_MESSAGES' => Json::encode(array(
		'name' => GetMessage('NT_FORMS_PRO_FIELD_NAME'),
		'type' => GetMessage('NT_FORMS_PRO_FIELD_TYPE'),
		'code' => GetMessage('NT_FORMS_PRO_FIELD_CODE'),
		'required' => GetMessage('NT_FORMS_PRO_FIELD_REQUIRED'),
                'placeholder' => GetMessage('NT_FORMS_PRO_FIELD_PLACEHOLDER'),
                'mask' => GetMessage('NT_FORMS_PRO_FIELD_MASK'),
                'default' => GetMessage('NT_FORMS_PRO_FIELD_DEFAULT'),
                'code' => GetMessage('NT_FORMS_PRO_FIELD_CODE'),
                'values' => GetMessage('NT_FORMS_PRO_FIELD_VALUES'),
                'placeholder' => GetMessage('NT_FORMS_PRO_FIELD_PLACEHOLDER'),
                'add_field' => GetMessage('NT_FORMS_PRO_ADD_FIELD'),
                'sort' => GetMessage('NT_FORMS_PRO_FIELD_SORT'),
            )),
            "JS_FIELD_TYPES" => Json::encode(array(
                'text' => GetMessage('NT_FORMS_PRO_FIELD_TYPE_TEXT'),
		'textarea' => GetMessage('NT_FORMS_PRO_FIELD_TYPE_TEXTAREA'),
                'email' => GetMessage('NT_FORMS_PRO_FIELD_TYPE_EMAIL'),
                'select' => GetMessage('NT_FORMS_PRO_FIELD_TYPE_SELECT'),
                'multiselect' => GetMessage('NT_FORMS_PRO_FIELD_TYPE_MULTISELECT'),
                'checkbox' => GetMessage('NT_FORMS_PRO_FIELD_TYPE_CHECKBOX'),
                'file' => GetMessage('NT_FORMS_PRO_FIELD_TYPE_FILE'),
                'hidden' => GetMessage('NT_FORMS_PRO_FIELD_TYPE_HIDDEN')
            )),
            "DEFAULT" => "",
        ),
        
        "MESSAGE_SUCCESS"   => Array (
            "PARENT"    => "MESSAGES",
            "NAME"      => GetMessage("NT_FORMS_PRO_MESSAGES_SUCCESS"),
            "TYPE"      => "STRING",
            "DEFAULT" => GetMessage("NT_FORMS_PRO_MESSAGE_SUCCESS_DEFAULT")
        ),
        
        "MESSAGE_ERRORALL"   => Array (
            "PARENT"    => "MESSAGES",
            "NAME"      => GetMessage("NT_FORMS_PRO_MESSAGES_ERRORALL"),
            "TYPE"      => "STRING",
        ),
        
        "FORM_TITLE"   => Array (
            "PARENT"    => "VISUAL",
            "NAME"      => GetMessage("NT_FORMS_PRO_FORM_TITLE"),
            "TYPE"      => "STRING",
        ),
        
        "FORM_DESCRIPTION"   => Array (
            "PARENT"    => "VISUAL",
            "NAME"      => GetMessage("NT_FORMS_PRO_FORM_DESCRIPTION"),
            "TYPE"      => "STRING",
        ),
        
        "CAPTCHA"   => Array (
            "PARENT"    => "OTHER",
            "NAME"      => GetMessage("NT_FORMS_PRO_OTHER_CAPTHCA"),
            "TYPE"      => "LIST",
            "REFRESH"   => "N",
            "VALUES"    => Array (
                'N' => GetMessage('NT_FORMS_PRO_OTHER_CAPTHCA_NO'),
                'DEFAULT' => GetMessage('NT_FORMS_PRO_OTHER_CAPTHCA_DEFAULT'),
            ),
        ),
    )
);

if ($arCurrentValues['SEND_IBLOCK_ENABLED'] == "Y")
{
    $arComponentParameters['PARAMETERS']["SEND_IBLOCK_TYPE"]   = Array (
            "PARENT"    => "SEND_IBLOCK",
            "NAME"      => GetMessage("NT_FORMS_PRO_SEND_IBLOCK_TYPE"),
            "TYPE"      => "LIST",
            "REFRESH"   => "Y",
            "VALUES"    => $arTypesEx,
    );
        
    $arComponentParameters['PARAMETERS']["SEND_IBLOCK_ID"] = Array (
            "PARENT"    => "SEND_IBLOCK",
            "NAME"      => GetMessage("NT_FORMS_PRO_SEND_IBLOCK_ID"),
            "TYPE"      => "LIST",
            "VALUES"    => $arIBlocks,
    );
}

$arComponentParameters['PARAMETERS']['PERSONAL_PROCESSING'] = Array (
        "PARENT"    => "OTHER",
        "NAME"      => GetMessage("NT_FORMS_PRO_OTHER_PERSONAL_PROCESSING"),
        "TYPE"      => "CHECKBOX",
        "DEFAULT"   => "N",
        "REFRESH"   => "Y",
);

if ($arCurrentValues['PERSONAL_PROCESSING'] == "Y") 
{
    $arComponentParameters['PARAMETERS']['PERSONAL_PROCESSING_PAGE'] = Array (
        "PARENT"    => "OTHER",
        "NAME"      => GetMessage("NT_FORMS_PRO_OTHER_PERSONAL_PROCESSING_PAGE"),
        "TYPE"      => "STRING"
    );
}


?>