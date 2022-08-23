<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$this->setFrameMode(false);

CJSCore::Init('jquery');
$APPLICATION->SetAdditionalCSS($templateFolder.'/css/colorpicker.css');
$APPLICATION->AddHeadScript($templateFolder.'/js/colorpicker.js');
$APPLICATION->AddHeadScript($templateFolder.'/js/cookie.js');
$APPLICATION->AddHeadScript($templateFolder.'/js/jquery-ui.min.js');

$arTemplateOptions = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/options.json"), true);
if (is_array($arTemplateOptions))
    $arDefaultSchemes = $arTemplateOptions['schemes'];

?>

<div class="nt-public-options-overflow<?=($_COOKIE['ntOptions'] == 'open') ? ' open' : ''?>"></div>
<div class="nt-public-options<?=($_COOKIE['ntOptions'] == 'open') ? ' open' : ''?>" <?=($_COOKIE['ntOptions'] == 'open') ? 'style="left:0"' : ''?>>
    
    <div class="nt-public-options-container">
        <form method="post">
        <div class="nt-public-options-header">
            <div class="nt-public-options-header-t">
                <?=GetMessage('NT_OPTIONS_HEADER_TITLE')?>
            </div>
            <button type="submit" name="NT_OPTIONS_RESET" class="nt-public-options-header-b" value="Y"><?=GetMessage('NT_OPTIONS_DEFAULT_OPTIONS')?></button>
            
        </div>
        <div class="nt-public-options-content-box">
            
            <div class="nt-public-options-content">
                
                <div id="nt-public-options-tab1" class="nt-public-options-tab active">
                    <? include(__DIR__ . "/tab_main.php"); ?>
                </div>
                
                <div id="nt-public-options-tab2" class="nt-public-options-tab">
                    <? include(__DIR__ . "/tab_header.php"); ?>
                </div>
                
                <div id="nt-public-options-tab3" class="nt-public-options-tab">
                    <? include(__DIR__ . "/tab_footer.php"); ?>
                </div>
                
                <div id="nt-public-options-tab4" class="nt-public-options-tab">
                    <? include(__DIR__ . "/tab_homepage.php"); ?>
                </div>
                
                <div id="nt-public-options-tab5" class="nt-public-options-tab">
                    <? include(__DIR__ . "/tab_catalog.php"); ?>
                </div>
                
                <div class="nt-public-options-actions">
                    <button type="submit" name="NT_OPTIONS_SAVE" value="Y"><?=GetMessage('NT_OPTIONS_SUBMIT')?></button>
                </div>
                
            </div>
            <div class="nt-public-options-mainmenu">
                <a href="javascript:void(0);" data-open-tab="nt-public-options-tab1" class="active"><?=GetMessage('NT_OPTIONS_MENU_TITLE_1')?></a>
                <a href="javascript:void(0);" data-open-tab="nt-public-options-tab2"><?=GetMessage('NT_OPTIONS_MENU_TITLE_2')?></a>
                <a href="javascript:void(0);" data-open-tab="nt-public-options-tab3"><?=GetMessage('NT_OPTIONS_MENU_TITLE_3')?></a>
                <a href="javascript:void(0);" data-open-tab="nt-public-options-tab4"><?=GetMessage('NT_OPTIONS_MENU_TITLE_4')?></a>
                <a href="javascript:void(0);" data-open-tab="nt-public-options-tab5"><?=GetMessage('NT_OPTIONS_MENU_TITLE_5')?></a>
                <a href="https://nextype.ru/docs/course/index.php?COURSE_ID=7&INDEX=Y" target="_blank"><?=GetMessage('NT_OPTIONS_MENU_TITLE_6')?></a>
            </div>
        </div>
            
        </form>
    </div>
    <div class="nt-public-options-icon"></div>
    
</div>
<style>
    .nt-public-options-icon,
    .nt-public-options-mainmenu a.active,
    .nt-public-options-select a.active,
    .nt-public-options-actions button[type=submit] {background-color: <?=$arResult['CURRENT_OPTIONS']['COLOR_SCHEME_1']?>;}
    
    .nt-public-options-select a.active, .nt-public-options-select-preview a.active {
        border-color: <?=$arResult['CURRENT_OPTIONS']['COLOR_SCHEME_1']?>;
    }
    
</style>
<script>
(function( $ ) {
    $().ready(function() {
        
        function setColorpicker (el) {
            $(el).spectrum({
                color: $(el).data('color'),
                preferredFormat: "hex",
                showInput: true,
                chooseText: "<?=GetMessage('COLORPICKER_CHOOSE')?>",
                cancelText: "<?=GetMessage('COLORPICKER_CANCEL')?>",
                change: function(color) {
                    $(this).find('div').css('backgroundColor', color.toHexString());
                    $(this).find('input').val(color.toHexString());
                    $(".nt-public-options-colors a").removeClass('active');
                    $(this).addClass('active');
                }
            });
        };
        
        $(".nt-public-options-switcher").each(function () {
            var val = $(this).find('input').val();
            if (val == "Y") $(this).addClass('active'); else $(this).removeClass('active');
        });
        
        $("body").on('click', '.nt-public-options-switcher', function () {
            var val = $(this).find('input').val();
            if (val == "Y") {
                $(this).removeClass('active');
                $(this).find('input').val('N');
            } else {
                $(this).addClass('active');
                $(this).find('input').val('Y');
            }
        });
        
        $("body").on('click', '.nt-public-options-mainmenu [data-open-tab]', function () {
            $(".nt-public-options-tab").removeClass('active');
            var tab = $(this).data('open-tab');
            $("#" + tab).addClass('active');
            $(this).parent().find('a').removeClass('active');
            $(this).addClass('active');
        });
        
        $("body").on('click', '.nt-public-options-colors a:not(.custom)', function () {
            $(this).parent().find('a').removeClass('active');
            $(".nt-public-options-colors a.custom").removeClass('active');
            $(this).addClass('active');
            
            var color1 = $(this).data('color1'), self = $(this).parents('form');
            self.find('input[name="COLOR_SCHEME_1"]').val(color1);
            self.find('.nt-public-options-custom-color1 div').css('background-color', color1);
        });
        
        $(".nt-public-options-colorpicker").each (function () {
            setColorpicker(this);
        });
        
        
        $("body").on('click', '.nt-public-options-icon', function (event) {
            event.preventDefault();
            if ($('.nt-public-options').hasClass('open'))
                $('.nt-public-options').trigger('close');
            else
                $('.nt-public-options').trigger('open');
            return false;
        });
        
        $(document).click(function(event) {
            if ($(event.target).closest(".nt-public-options").length) return;
            $(".nt-public-options.open").trigger('close');
            event.stopPropagation();
        });
        
        
        $("body").on('open', '.nt-public-options', function () {
            $(".nt-public-options-overflow").addClass('open');
            $(this).addClass('open').animate({left:'0px'}, 200);
            $("html, body").stop().animate({scrollTop:180}, 200, 'swing');
            $.cookie('ntOptions', 'open', {path: '/'});
        });

        $("body").on('close', '.nt-public-options', function () {
            $(this).addClass('open').animate({left:'-600px'}, 200, function () {
                $(this).removeClass('open');
                $(".nt-public-options-overflow").removeClass('open');
            });
            $.removeCookie('ntOptions', {path: '/'});
        });
        
        $("body").on('click', '.nt-public-options-select a', function () {
            $(this).parent().find('a').removeClass('active');
            $(this).addClass('active');
            var val = $(this).data('value');
            $(this).parent().find('input[type=hidden]').val(val);
        });
        
        $("body").on('click', '.nt-public-options-select-preview a', function () {
            $(this).parent().find('a').removeClass('active');
            $(this).addClass('active');
            var val = $(this).data('value');
            $(this).parent().find('input[type=hidden]').val(val);
        });
        
        
    });
})(jQuery);
</script>