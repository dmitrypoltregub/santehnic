<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
define("NO_KEEP_STATISTIC", true);

if (! \Bitrix\Main\Loader::includeModule('nextype.corporate') )
    exit();
?><?$APPLICATION->IncludeComponent(
	"nextype:corporate.forms.pro",
	"popup",
	Array(
		"CAPTCHA" => "N",
		"FIELDS" => "#FORM_AJAX_SERVICES_FIELDS#",
		"FORM_DESCRIPTION" => "",
		"FORM_TITLE" => "Заказать услугу",
		"MESSAGE_ERRORALL" => "",
		"MESSAGE_SUCCESS" => "Ваш заказ успешно отправлен!",
		"NAME" => "Форма заказа услуги",
		"PERSONAL_PROCESSING" => "Y",
		"PERSONAL_PROCESSING_PAGE" => "#SITE_DIR#agreement/",
		"SEND_EMAIL_ADDRESS" => "",
		"SEND_EMAIL_ENABLED" => "Y",
		"SEND_EMAIL_EVENT_NAME" => "",
		"SEND_IBLOCK_ENABLED" => "N",
		"SUBMIT_BUTTON_TEXT" => "Заказать",
		"VIEW_TYPE" => ""
	)
);?>

<? require $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"; ?>