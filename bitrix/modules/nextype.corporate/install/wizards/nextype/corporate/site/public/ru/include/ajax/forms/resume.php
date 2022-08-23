<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("");

if (! \Bitrix\Main\Loader::includeModule('nextype.corporate') )
    exit();
?><?$APPLICATION->IncludeComponent(
	"nextype:corporate.forms.pro",
	"popup",
	Array(
		"CAPTCHA" => "N",
		"FIELDS" => "#FORM_AJAX_RESUME_FIELDS#",
		"FORM_DESCRIPTION" => "",
		"FORM_TITLE" => "Отклик на вакансию",
		"MESSAGE_ERRORALL" => "",
		"MESSAGE_SUCCESS" => "Ваш отклик на вакансию успешно отправлен!",
		"NAME" => "Форма Отклик на вакансию",
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