<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$arUF = $GLOBALS["USER_FIELD_MANAGER"]->GetUserFields("IBLOCK_22_SECTION", $arResult['ID'],"UF_TOP_DESCRIPTION");
if($arUF["UF_PAGE_HEADER"]["VALUE"] != ""){

    $arResult['UF_TOP_DESCRIPTION'] = $arUF["UF_TOP_DESCRIPTION"];

}