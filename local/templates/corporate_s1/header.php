<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();


use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
\Bitrix\Main\Localization\Loc::loadMessages(__FILE__);

if (! \Bitrix\Main\Loader::includeModule('nextype.corporate') )
    die();
$CCorporate = \Nextype\Corporate\CCorporate::getInstance(SITE_ID);
$MESS['CURRENT_PAGE'] = $APPLICATION->GetCurPage();
?>
<?
$CCorporate::start();
$headerType = \Nextype\Corporate\CCorporate::$options['HEADER_TYPE'];
$useBasket = (\Nextype\Corporate\CCorporate::$options['USE_BASKET'] == "N") ? ' disabled-basket' : '';
$hidePrices = (\Nextype\Corporate\CCorporate::$options['CATALOG_SHOW_PRICE'] == "N") ? ' hide-prices' : '';
$longNames = (\Nextype\Corporate\CCorporate::$options['CATALOG_SHORT_NAMES'] == "N") ? ' long-names' : '';
CJSCore::Init(array('ajax', 'window'));
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<meta name="yandex-verification" content="b55f0cc44a229a7b" />
        <? $APPLICATION->ShowMeta("viewport"); ?>
        <title><? $APPLICATION->ShowTitle() ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
                <meta name="format-detection" content="telephone=no">
                    <? echo '<meta http-equiv="Content-Type" content="text/html; charset='.LANG_CHARSET.'"'.(true? ' /':'').'>'."\n";
                    $APPLICATION->ShowMeta("robots");
                    $APPLICATION->ShowMeta("description");
                    ?><link rel="canonical" href="<? echo $APPLICATION->GetCurDir(); ?>" /><?
                    $APPLICATION->ShowCSS(true);
                    $APPLICATION->ShowHeadStrings();
                    $APPLICATION->ShowHeadScripts(); ?>
                    <? $APPLICATION->AddHeadString('<script>BX.message(' . CUtil::PhpToJSObject($MESS, false) . ')</script>', true); ?>
        <!-- calltouch -->
        <script type="text/javascript">
            (function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)},m=typeof Array.prototype.find === 'function',n=m?"init-min.js":"init.js";s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/"+n+"?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","67p46ttr");
        </script>
        <!-- calltouch -->
<meta name="yandex-verification" content="e58f2941595eec21" />
                    </head>
                    <body class="header-<?=$headerType.$useBasket.$hidePrices.$longNames?>">
                        
                        <? $APPLICATION->IncludeComponent("nextype:corporate.options", ".default", array(), false, array("HIDE_ICONS"=>"Y")); ?>
                        <div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
                        <div class="wrapper">
                        
                            <?
                            if (!empty($headerType) && file_exists(__DIR__ . "/headers/" . $headerType . ".php"))
                                include(__DIR__ . "/headers/" . $headerType . ".php");
                            else
                                include(__DIR__ . "/headers/type1.php");
                            ?>
                           
               <? if ($APPLICATION->GetCurDir() != SITE_DIR): ?>         
<div class="breadcrumbs">
	<div class="container">
		<?\Nextype\Corporate\CCorporate::IncludeFile(SITE_DIR."include/breadcrumbs.php", Array(), Array("MODE" => "html"));?>
		<h1 class="title"><? $APPLICATION->ShowTitle(false) ?></h1>
		
            <? $APPLICATION->ShowViewContent('top-desc');?>

	</div>
</div>
                            <? endif; ?>

<? if (!\Nextype\Corporate\CCorporate::isCustomPage()): ?>
<div class="about">
	<div class="container">
	
                <?\Nextype\Corporate\CCorporate::IncludeFile(SITE_DIR."include/sidebar.php", Array(), Array("MODE" => "html"));?>

            <main class="content">
<? endif; ?>