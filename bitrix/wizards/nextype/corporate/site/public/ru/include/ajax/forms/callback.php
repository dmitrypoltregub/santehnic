<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (! \Bitrix\Main\Loader::includeModule('nextype.corporate') )
    exit();
?>
<?$APPLICATION->IncludeComponent(
	"nextype:corporate.forms.pro",
	"popup",
	Array(
		"CAPTCHA" => "N",
		"FIELDS" => "#FORM_AJAX_CALLBACK_FIELDS#",
		"FORM_DESCRIPTION" => "",
		"FORM_TITLE" => "Заказ обратного звонка",
		"MESSAGE_ERRORALL" => "",
		"MESSAGE_SUCCESS" => "Ваше сообщение успешно отправлено!",
		"NAME" => "Форма заказа обратного звонка",
		"PERSONAL_PROCESSING" => "Y",
                "PERSONAL_PROCESSING_PAGE" => "#SITE_DIR#agreement/",
		"SEND_EMAIL_ADDRESS" => "",
		"SEND_EMAIL_ENABLED" => "Y",
		"SEND_EMAIL_EVENT_NAME" => "",
		"SEND_IBLOCK_ENABLED" => "N",
		"SUBMIT_BUTTON_TEXT" => "Отправить",
		"VIEW_TYPE" => ""
	)
);?>