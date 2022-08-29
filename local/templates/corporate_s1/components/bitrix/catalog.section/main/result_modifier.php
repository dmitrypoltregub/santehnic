<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$rsResult = CIBlockSection::GetList(array("SORT" => "ASC"), array("IBLOCK_ID" => "22", "ID" => $arResult['ID']), false, $arSelect = array("UF_*"));
if($secResult = $rsResult -> GetNext()){

    $arResult['UF_TOP_DESCRIPTION'] = $secResult["UF_TOP_DESCRIPTION"];
	$this->SetViewTarget('top-desc');
    if($arResult['UF_TOP_DESCRIPTION'])
        echo(htmlspecialcharsBack('<div class="top-desc">'.$arResult['UF_TOP_DESCRIPTION']).'</div>' );
    $this->EndViewTarget();

}
