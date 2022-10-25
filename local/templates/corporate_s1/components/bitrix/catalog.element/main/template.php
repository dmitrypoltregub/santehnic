<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

$this->setFrameMode(true);

$mainId = $this->GetEditAreaId($arResult['ID']);
$arMessages = Array (
    'MESS_BTN_ADD_TO_BASKET' => (!empty($arParams['MESS_BTN_ADD_TO_BASKET'])) ? $arParams['MESS_BTN_ADD_TO_BASKET'] : GetMessage('TO_BASKET')
);
$currentUri = CMain::IsHTTPS() ? "https://" : "http://";
$currentUri .= $_SERVER["HTTP_HOST"] . $APPLICATION->GetCurUri();
?>

<div class="product" itemscope itemtype="http://schema.org/Product">
    <meta itemprop="name" content="<?=$arResult['NAME']?>">
    
    <? if (!empty($arResult['TAGS'])): ?>
        <div class="product-tags">
            <? foreach ($arResult['TAGS'] as $arTag):?>
            <div class="label <?= strtolower($arTag['CODE'])?>"><span><?=$arTag['NAME']?></span></div>
            <? endforeach; ?>
        </div>
        <? endif; ?>
    <div class="images">
        
        <a itemprop="image" href="<?=$arResult['PICTURES'][0]['DETAIL']?>" data-lightbox="product-main-img" id="product-main-img" class="main-img">
            <img src="<?=$arResult['PICTURES'][0]['PREVIEW']?>" alt="<?=$arResult['PICTURES'][0]['ALT']?>" title="<?=$arResult['PICTURES'][0]['TITLE']?>">
        </a>
        <? if (count($arResult['PICTURES']) > 1): ?>
        <div class="thumbnails">
            <? foreach ($arResult['PICTURES'] as $key => $arPicture): ?>
            <a href="javascript:void(0);" class="thumb<?=$key==0 ? ' active' : ''?>" data-alt="<?=$arPicture['ALT']?>" data-title="<?=$arPicture['TITLE']?>" data-preview="<?=$arPicture['PREVIEW']?>" data-detail="<?=$arPicture['PREVIEW']?>">
                <img src="<?=$arPicture['THUMB']?>" alt="<?=$arPicture['ALT']?>">
            </a>
            <? endforeach; ?>
        </div>
        <? endif; ?>
    </div>
    <div class="information">
        <div class="info">
            <? if (is_array($arResult['STOCK'])): ?>
            <?
            $cssClass = "ready";
            if ($arResult['STOCK']['TYPE'] == "O") $cssClass = "for-order";
            if ($arResult['STOCK']['TYPE'] == "N") $cssClass = "disable";
            ?>
            <div class="label <?=$cssClass?>"><?=$arResult['STOCK']['TEXT']?></div>
            <? endif; ?>
            
            <? if (!empty($arResult['DISPLAY_PROPERTIES']['ARTICLE']['VALUE'])): ?>
            <div class="code"><?=GetMessage('PROPERTY_ARTICLE')?> <?=$arResult['DISPLAY_PROPERTIES']['ARTICLE']['VALUE']?></div>
            <? endif; ?>
        </div>
        <? if (!empty($arResult['PREVIEW_TEXT'])): ?>
        <div class="desc" itemprop="description">
            <?=$arResult['PREVIEW_TEXT']?>
        </div>
        <? endif; ?>
        <div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <? if (!empty($arResult['PRICE']['VALUE'])): ?>
                <div class="new"><?=$arResult['PRICE']['PRINT_VALUE']?></div>
                <? if (!empty($arResult['PRICE']['VALUE'])): ?>
                <div class="old"><?=$arResult['PRICE']['PRINT_DISCOUNT_VALUE']?></div>
                <? endif; ?>
                <meta itemprop="price" content="<?=$arResult['PRICE']['VALUE']?>">
            <? else: ?>
                <div class="disabled"><?=GetMessage('PRICE_ON_REQUEST')?></div>
                <meta itemprop="price" content="0">
            <? endif; ?>
                <meta itemprop="priceCurrency" content="<?=\Nextype\Corporate\CCorporate::$options['CURRENCY']?>">
                <? if (!in_array($arResult['STOCK']['TYPE'], Array ("O", "N"))): ?>
                <link itemprop="availability" href="http://schema.org/InStock">
                <? endif; ?>
        </div>
        <div class="buttons" id="catalog-use-basket">
            <div class="quantity quantity-selector" id="catalog-quantity-selector">
                <input type="text" value="1" id="basket-quantity">
                <div class="counters">
                    <span class="count icon plus"></span>
                    <span class="count icon minus"></span>
                </div>
            </div>

            <a href='javascript::void(0)' data-quantity="<?=$arResult['CATALOG_QUANTITY']?>" data-product="<?=$arResult['ID']?>" data-name="<?=$arResult['NAME']?>" data-price="<?=$arResult['PRICE']['VALUE']?>"  class="btn order-button-popup-btn color product-purchase__button"><i class="simple-cart-icon product-purchase__icon" data-product="<?=$arResult['ID']?>" data-name="<?=$arResult['NAME']?>" data-price="<?=$arResult['PRICE']['VALUE']?>"  data-quantity="<?=$arResult['CATALOG_QUANTITY']?>" rel="nofollow"></i>Добавить в корзину</a>
        </div>
        <div class="order-buttons" id="catalog-disabled-basket">
            <a href="javascript:void(0)" class="btn order-button-popup-btn color"><?=GetMessage('ORDER_BUTTON')?></a>
            <a href='javascript::void(0)' data-quantity="<?=$arResult['STORE'][$DEFAULT_STORE_ID]['AMOUNT']?>" data-product="<?=$arResult['ID']?>" data-name="<?=$arResult['NAME']?>" data-price="<?=$price?>"  class="btn order-button-popup-btn color product-purchase__button"><i class="simple-cart-icon product-purchase__icon" data-product="<?=$arResult['ID']?>" data-name="<?=$arResult['NAME']?>" data-price="<?=$price?>"  data-quantity="<?=$arResult['STORE'][$DEFAULT_STORE_ID]['AMOUNT']?>" rel="nofollow"></i>Добавить в корзину</a>
        </div>
        <div class="share" id="catalog-share">
            <div class="text"><?=GetMessage('SHARE')?></div>
            <div class="social">
                <a href="https://vk.com/share.php?url=<?=$currentUri?>&description=<?=$arResult['NAME']?>" target="_blank" rel="nofollow" class="link icon vk"></a>
                <a href="https://twitter.com/intent/tweet?url=<?=$currentUri + ' ' + $arResult['NAME']?>" target="_blank" rel="nofollow" class="link icon twitter"></a>
                <a href="https://plus.google.com/share?url=<?=$currentUri?>" rel="nofollow" target="_blank" class="link icon gplus"></a>
            </div>
        </div>
    </div>
</div>
<div class="tabs">
    <? if (count($arResult['ACTIVE_PROPERTIES']) > 0): ?>
        <a href="javascript:void(0);" onclick="CCorporate.openCatalogTab(this, 'tab-product-characteristics');" class="tab tab-characteristics active"><?=GetMessage('CHARACTERISTICS');?></a>
    <? endif; ?>
    <? if(!empty($arResult['DETAIL_TEXT'])): ?>
    <a href="javascript:void(0);" onclick="CCorporate.openCatalogTab(this, 'tab-product-description');" class="tab tab-description"><?=GetMessage('DESCRIPTION');?></a>
    <? endif; ?>

    
    <? if (!empty($arResult['DISPLAY_PROPERTIES']['FILES']['VALUE'])): ?>
    <a href="javascript:void(0);" onclick="CCorporate.openCatalogTab(this, 'tab-product-documents');" class="tab tab-documents"><?=GetMessage('DOCUMENTS');?></a>
    <? endif; ?>
    
    <? if (!empty($arResult['DISPLAY_PROPERTIES']['VIDEO']['VALUE'])): ?>
    <a href="javascript:void(0);" onclick="CCorporate.openCatalogTab(this, 'tab-product-videos');" class="tab tab-videos"><?=GetMessage('VIDEOS');?></a>
    <? endif; ?>
</div>
<div class="tabs-content">
    <? if (count($arResult['ACTIVE_PROPERTIES']) > 0): ?>
		<div class="tab-content active" id="tab-product-characteristics">
            <div class="features">
                <? foreach ($arResult['ACTIVE_PROPERTIES'] as $arProperty): ?>
                    <div class="feature">
                        <div class="name"><?=$arProperty['NAME']?></div>
                        <div class="value">
                            <? if (is_array($arProperty['VALUE'])): ?>
                                <?=implode(", ", $arProperty['VALUE'])?>
                            <? else: ?>
                                <?=$arProperty['VALUE']?>
                            <? endif; ?>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    <? endif; ?>
    <? if (!empty($arResult['DETAIL_TEXT'])): ?>
    <div class="tab-content active" id="tab-product-description">
        <div class="text">
            <?=$arResult['DETAIL_TEXT']?>
        </div>
    </div>
    <? endif; ?>

    
    <? if (!empty($arResult['DISPLAY_PROPERTIES']['FILES']['VALUE'])): ?>
    <div class="tab-content" id="tab-product-documents">
        <div class="documents">
            <? foreach ($arResult['DISPLAY_PROPERTIES']['FILES']['VALUE'] as $arFile): ?>
            <div class="doc icon-custom file">
                <a href="<?=$arFile['SRC']?>" target="_blank" class="link"><?=(!empty($arFile['DESCRIPTION'])) ? $arFile['DESCRIPTION'] : $arFile['ORIGINAL_NAME']?></a>
                <span class="size">(<?=$arFile['FILE_SIZE']?>)</span>
            </div>
            <? endforeach; ?>
            
        </div>
    </div>
    <? endif; ?>
    
    <? if (!empty($arResult['DISPLAY_PROPERTIES']['VIDEO']['VALUE'])): ?>
    <div class="tab-content" id="tab-product-videos">
        <div class="video">
            
            <? if (!empty($arResult['DISPLAY_PROPERTIES']['VIDEO']['VALUE']['TEXT'])): ?>
            <?=$arResult['DISPLAY_PROPERTIES']['VIDEO']['~VALUE']['TEXT']?>
            <? else: ?>
            <?=$arResult['DISPLAY_PROPERTIES']['VIDEO']['VALUE']?>
            <? endif; ?>
        </div>
    </div>
    <? endif; ?>


            <div class="tabs-content">
                <div class="tab-content active">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog.section",
                        "slider",
                        Array(
                            "ACTION_VARIABLE" => "action",
                            "ADD_PICT_PROP" => "-",
                            "BLOCK_TITLE"=>"Похожие товары",
                            "ADD_PROPERTIES_TO_BASKET" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "ADD_TO_BASKET_ACTION" => '',
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "BACKGROUND_IMAGE" => "-",
                            "BASKET_URL" => "/basket/",
                            "BROWSER_TITLE" => "-",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "COMPATIBLE_MODE" => "Y",
                            "CONVERT_CURRENCY" => "N",
                            "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                            "DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                            "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_COMPARE" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "ELEMENT_SORT_FIELD" => "sort",
                            "ELEMENT_SORT_FIELD2" => "id",
                            "ELEMENT_SORT_ORDER" => "asc",
                            "ELEMENT_SORT_ORDER2" => "desc",
                            "ENLARGE_PRODUCT" => "STRICT",
                            "FILTER_NAME" => "arrFilter",
                            "HIDE_NOT_AVAILABLE" => "N",
                            "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                            "IBLOCK_ID" => "22",
                            "IBLOCK_TYPE" => "nt_corporate_catalog",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "LABEL_PROP" => array(),
                            "LAZY_LOAD" => "N",
                            "LINE_ELEMENT_COUNT" => "6",
                            "LOAD_ON_SCROLL" => "N",
                            "MESSAGE_404" => "",
                            "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                            "MESS_BTN_BUY" => "Купить",
                            "MESS_BTN_DETAIL" => "Подробнее",
                            "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                            "MESS_BTN_SUBSCRIBE" => "Подписаться",
                            "MESS_NOT_AVAILABLE" => "Нет в наличии",
                            "META_DESCRIPTION" => "-",
                            "META_KEYWORDS" => "-",
                            "OFFERS_LIMIT" => "5",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Товары",
                            "PAGE_ELEMENT_COUNT" => "10",
                            "PARTIAL_PRODUCT_PROPERTIES" => "N",
                            "PRICE_CODE" => array(),
                            "PRICE_VAT_INCLUDE" => "Y",
                            "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                            "PRODUCT_ID_VARIABLE" => "id",
                            "PRODUCT_PROPS_VARIABLE" => "prop",
                            "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                            "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                            "PRODUCT_SUBSCRIPTION" => "Y",
                            "PROPERTY_CODE_MOBILE" => array(),
                            "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                            "RCM_TYPE" => "personal",
                            "SECTION_CODE" => "",
                            "SECTION_ID" => $arResult['IBLOCK_SECTION_ID'],
                            "SECTION_ID_VARIABLE" => "SECTION_ID",
                            "SECTION_URL" => "",
                            "SECTION_USER_FIELDS" => array("UF_DETALE_DESC",""),
                            "SEF_MODE" => "Y",
                            "SEF_RULE" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "Y",
                            "SHOW_404" => "N",
                            "SHOW_ALL_WO_SECTION" => "N",
                            "SHOW_CLOSE_POPUP" => "N",
                            "SHOW_DISCOUNT_PERCENT" => "N",
                            "SHOW_FROM_SECTION" => "N",
                            "SHOW_MAX_QUANTITY" => "N",
                            "SHOW_OLD_PRICE" => "N",
                            "SHOW_PRICE_COUNT" => "1",
                            "SHOW_SLIDER" => "Y",
                            "SLIDER_INTERVAL" => "3000",
                            "SLIDER_PROGRESS" => "Y",
                            "TEMPLATE_THEME" => "blue",
                            "USE_ENHANCED_ECOMMERCE" => "N",
                            "USE_MAIN_ELEMENT_SECTION" => "N",
                            "USE_PRICE_COUNT" => "N",
                            "USE_PRODUCT_QUANTITY" => "N"
                        )
                    );?>
                </div>

            </div>
        </div>
