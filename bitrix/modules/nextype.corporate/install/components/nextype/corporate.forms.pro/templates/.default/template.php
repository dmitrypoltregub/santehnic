<?
use Bitrix\Main;
use Bitrix\Main\Localization\Loc;

CJSCore::Init();

$jsParams = Array (
    'form_id' => 'form_' . $arResult['FORM_ID'],
    'popup_id' => 'popup_' . $arResult['FORM_ID'],
);
$message = Array (
    'SUBMIT_BUTTON_TEXT' => (!empty($arParams['SUBMIT_BUTTON_TEXT'])) ? $arParams['SUBMIT_BUTTON_TEXT'] : GetMessage('NT_FORMS_SEND')
);
$APPLICATION->AddHeadScript($this->GetFolder() ."/script.js");

if ($arParams['CAPTHCA'] == 'RECAPTCHA')
{
    $jsParams['recaptcha_id'] = "recaptcha_" . $arResult['FORM_ID'];
    $APPLICATION->AddHeadScript("//www.google.com/recaptcha/api.js?render=explicit");
}

?>
<? if ($arParams['VIEW_TYPE'] == "POPUP"): ?>
<div class="nextype-form-popup" id="<?=$jsParams['popup_id']?>">
    <div class="nextype-form-popup-content">
        <a href="javascript:void(0);" data-close-popup="<?=$jsParams['popup_id']?>" class="close-button"></a>
<? endif; ?>
<form method="post" enctype="multipart/form-data" id="<?=$jsParams['form_id']?>" class="nextype-form">
    <? if ($arParams['IS_AJAX'] == "Y") $APPLICATION->RestartBuffer(); ?>
    <? if (!empty($arParams['FORM_TITLE'])): ?>
    <div class="form-title">
        <?=$arParams['FORM_TITLE']?>
    </div>
    <? endif; ?>
    
    <? if (!empty($arParams['FORM_DESCRIPTION'])): ?>
    <div class="form-description">
        <?=$arParams['FORM_DESCRIPTION']?>
    </div>
    <? endif; ?>
    
    <?=bitrix_sessid_post(); ?>
    <? if ($arResult['SUCCESS']): ?>
        <div class="success-message">
            <?= $arResult['SUCCESS'] ?>
        </div>
    <? endif; ?>
    
    <? if ($arResult['ERROR']): ?>
        <div class="error-message">
            <? foreach ($arResult['ERROR'] as $arError): ?>
            <?=$arError['TEXT']?><br/>
            <? endforeach; ?>
        </div>
    <? endif; ?>
    
    <? foreach ($arResult['FIELDS'] as $arField): ?>
        <div class="row">
            <? if ($arField['type'] == 'checkbox'): ?>
                <label><?= $arField['html'] ?> <?= $arField['label'] ?></label>
            <? elseif ($arField['type'] == 'hidden'): ?>
                <?= $arField['html'] ?>
            <? else: ?>
                <label><?= $arField['label'] ?> <? if ($arField['required']): ?><span class="required">*</span><? endif; ?></label>
                <?= $arField['html'] ?>
                <? if ($arField['error']): ?>
                    <div class="error-tip"><?= $arField['error']['TEXT'] ?></div>
                <? endif; ?>
            <? endif; ?>
        </div>
    <? endforeach; ?>
    <? if ($arParams['CAPTHCA'] == 'RECAPTCHA'): ?>
        <div class="captcha row">
            <div id="<?= $jsParams['recaptcha_id'] ?>"></div>
            <? if ($arResult['ERROR']['CAPTCHA']): ?>
                <div class="error-tip"><?= $arResult['ERROR']['CAPTCHA']['TEXT'] ?></div>
            <? endif; ?>
        </div>
    <? endif; ?>

    <? if ($arParams['CAPTHCA'] == 'DEFAULT'): ?>
        <div class="captcha row">
            <label><?= GetMessage('NT_FORMS_CAPTCHA_LABEL') ?><span class="required">*</span></label>
            <div class="image">
                <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult['CAPTHCA_CODE']; ?>" alt="CAPTCHA" />
                <input type="hidden" name="<?= $arResult['FORM_ID'] ?>[captcha_sid]" value="<?= $arResult['CAPTHCA_CODE']; ?>" />
            </div>
            <input type="text" required="required" class="form-text" name="<?= $arResult['FORM_ID'] ?>[captcha_word]" value="" />
            <? if ($arResult['ERROR']['CAPTCHA']): ?>
                <div style="clear:both"></div>
                <div class="error-tip"><?= $arResult['ERROR']['CAPTCHA']['TEXT'] ?></div>
            <? endif; ?>
        </div>
    <? endif; ?>

    <div class="row submit">
        <button type="submit"><?= $message['SUBMIT_BUTTON_TEXT'] ?></button>
    </div>
    
    <? if ($arParams['IS_AJAX'] == "Y") { $APPLICATION->FinalActions(); die(); } ?>
</form>
<? if ($arParams['VIEW_TYPE'] == "POPUP"): ?>
    </div>
</div>

    <? if ($arParams['SHOW_POPUP_BUTTON']): ?>
    <a href="javascript:void(0)" class="nextype-form-open-popup-btn" data-open-popup="<?=$jsParams['popup_id']?>" ><?=$arParams['POPUP_BUTTON_TEXT']?></a>
    <? endif; ?>
    
<? endif; ?>

<?
$signer = new Main\Security\Sign\Signer;
$signedParams = $signer->sign(base64_encode(serialize($arParams)), 'nextype.forms.pro');
$messages = Loc::loadLanguageFile(__FILE__);
?>

<script>
        BX.message(<?=CUtil::PhpToJSObject($messages)?>);
        window['<?=CUtil::JSEscape($jsParams['form_id'])?>'] = new NextypeFormsProComponentInit({
            formId: '<?=CUtil::JSEscape($jsParams['form_id'])?>',
            popupId: '<?=CUtil::JSEscape($jsParams['popup_id'])?>',
            params: <?=CUtil::PhpToJSObject(Array (
                'CAPTCHA' => $arParams['CAPTCHA'],
                'MESSAGE_ERRORALL' => $arParams['MESSAGE_ERRORALL'],
                'MESSAGE_SUCCESS' => $arParams['MESSAGE_SUCCESS'],
                'RECAPTCHA_CODE' => $arParams['RECAPTCHA_CODE'],
                'RECAPTCHA_ID' => $jsParams['recaptcha_id'],
                'VIEW_TYPE' => $arParams['VIEW_TYPE']
            ))?>,
            signedParamsString: '<?=CUtil::JSEscape($signedParams)?>',
            siteID: '<?=CUtil::JSEscape($component->getSiteId())?>',
            ajaxUrl: '<?=CUtil::JSEscape($component->getPath().'/ajax.php')?>',
        });

        

</script>    
    
    

