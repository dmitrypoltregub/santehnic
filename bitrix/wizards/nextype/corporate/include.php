<?php

class CWizardTools
{
    const moduleId = "nextype.corporate";
    
    static public function ShowError($obj, $message)
    {
        if (isset($obj->content))
        {
            $obj->content .= "<div style='color:red'>".$message."</div>";
            $obj->content .= '<script type="text/javascript">$(document).ready(function() {$(".wizard-next-button").remove();});</script>';
        }
    }
    
    static public function IncludeAssets($obj)
    {
        $obj->content .= '<style>';
        $obj->content .= file_get_contents(__DIR__ . "/css/styles.css");
        $obj->content .= '</style>';
        
        $obj->content .= '<script type="text/javascript">';
        $obj->content .= file_get_contents(__DIR__ . "/js/jquery.min.js");
        $obj->content .= '</script>';
    }
}

class SelectSiteStep extends CSelectSiteWizardStep
{
	function InitStep()
	{
		parent::InitStep();

		$wizard =& $this->GetWizard();
		$wizard->solutionName = "nextype_corporate";
	}
        
        function ShowStep()
        {
            parent::ShowStep();
            CWizardTools::IncludeAssets($this);
        }
}

class SelectTemplateStep extends CSelectTemplateWizardStep
{
	function InitStep()
	{
		$wizard =& $this->GetWizard();

		$this->SetStepID("select_template");
		$this->SetTitle(GetMessage("SELECT_TEMPLATE_TITLE"));
		$this->SetSubTitle(GetMessage("SELECT_TEMPLATE_SUBTITLE"));

		if(!defined("WIZARD_DEFAULT_SITE_ID")){
			$this->SetPrevStep("select_site");
			$this->SetPrevCaption(GetMessage("PREVIOUS_BUTTON"));
		}
		else{
			$wizard =& $this->GetWizard();
			$wizard->SetVar("siteID", WIZARD_DEFAULT_SITE_ID);
		}

		$this->SetNextStep("select_theme");
		$this->SetNextCaption(GetMessage("NEXT_BUTTON"));
		$wizard->SetDefaultVars(Array("templateID" => "corporate"));
	}
        
        function ShowStep()
        {
            
            if(!CModule::IncludeModule(CWizardTools::moduleId))
            {
                CWizardTools::ShowError($this, GetMessage('WIZ_NO_MODULE'));
            }
            else
            {
                $wizard =& $this->GetWizard();
                CWizardTools::IncludeAssets($this);

		$templatesPath = WizardServices::GetTemplatesPath($wizard->GetPath()."/site");
		$arTemplates = WizardServices::GetTemplates($templatesPath);
                
                if (empty($arTemplates))
                {
                    CWizardTools::ShowError($this, GetMessage('WIZ_NO_TEMPLATES'));
                    return;
                }
                
                $templateID = $wizard->GetVar("templateID");
		if(isset($templateID) && array_key_exists($templateID, $arTemplates)){

                    $defaultTemplateID = $templateID;
                    $wizard->SetDefaultVar("templateID", $templateID);

                }
                else
                {

                    $defaultTemplateID = COption::GetOptionString("main", "wizard_template_id", "", $wizard->GetVar("siteID"));
                    if (!(strlen($defaultTemplateID) > 0 && array_key_exists($defaultTemplateID, $arTemplates)))
                    {
                        if (strlen($defaultTemplateID) > 0 && array_key_exists($defaultTemplateID, $arTemplates))
                            $wizard->SetDefaultVar("templateID", $defaultTemplateID);
			else
                            $defaultTemplateID = "";
			}
		}
                
                global $SHOWIMAGEFIRST;
		$SHOWIMAGEFIRST = true;

		$this->content .= '<div id="solutions-container" class="inst-template-list-block">';
		foreach ($arTemplates as $templateID => $arTemplate)
		{
                    if ($defaultTemplateID == "")
                    {
                        $defaultTemplateID = $templateID;
			$wizard->SetDefaultVar("templateID", $defaultTemplateID);
                    }

                    $this->content .= '<div class="inst-template-description">';
                    $this->content .= $this->ShowRadioField("templateID", $templateID, Array("id" => $templateID, "class" => "inst-template-list-inp"));
                    if ($arTemplate["SCREENSHOT"] && $arTemplate["PREVIEW"])
                        $this->content .= CFile::Show2Images($arTemplate["PREVIEW"], $arTemplate["SCREENSHOT"], 150, 150, ' class="inst-template-list-img"');
                    else
                        $this->content .= CFile::ShowImage($arTemplate["SCREENSHOT"], 150, 150, ' class="inst-template-list-img"', "", true);

                    $this->content .= '<label for="'.$templateID.'" class="inst-template-list-label">'.$arTemplate["NAME"].'<p style="font-size:14px; color: #999; font-weight: normal">'.$arTemplate["DESCRIPTION"].'</p></label>';
                    $this->content .= "</div>";

		}

		$this->content .= '</div>';
                
            }
        }
}

class SelectThemeStep extends CSelectThemeWizardStep
{
    function InitStep()
    {
        $wizard =& $this->GetWizard();
        
        $this->SetStepID("select_theme");
	$this->SetTitle(GetMessage("SELECT_THEME_TITLE"));
	$this->SetPrevStep("select_template");
	$this->SetPrevCaption(GetMessage("PREVIOUS_BUTTON"));
        
        $this->SetNextStep("site_settings");
	$this->SetNextCaption(GetMessage("NEXT_BUTTON"));
    }
    
    function OnPostForm()
    {
        $wizard =& $this->GetWizard();
    }
    
    function ShowStep()
    {
            if(!CModule::IncludeModule(CWizardTools::moduleId))
            {
                CWizardTools::ShowError($this, GetMessage('WIZ_NO_MODULE'));
            }
            else
            {
                $wizard =& $this->GetWizard();
                CWizardTools::IncludeAssets($this);
                
                $templatesPath = WizardServices::GetTemplatesPath($wizard->GetPath()."/site");
                $templateID = $wizard->GetVar("templateID");
		$siteID = $wizard->GetVar("siteID");
                
                $templateOptionsFile = $_SERVER['DOCUMENT_ROOT'] . $templatesPath."/".$templateID . "/options.json";
                if (!file_exists($templateOptionsFile))
                {
                    CWizardTools::ShowError($this, GetMessage('WIZ_NO_THEMES'));
                    return;
                }
                
                $templateOptions = json_decode(file_get_contents($templateOptionsFile), true);
                $arThemes = $templateOptions['schemes'];
                
                if(empty($arThemes))
                {
                    CWizardTools::ShowError($this, GetMessage('WIZ_NO_THEMES'));
                    return;
		}
                
                $defaultTheme = $arThemes[0];
                $themeColor1 = $defaultTheme['color1'];
                
                if(!empty($themeColor1))
                {
                    $wizard->SetDefaultVar("COLOR_SCHEME_1", $themeColor1);
		}
                
                $this->content .= '<div class="theme-container">';
                $this->content .= '<div class="themes-list">';
                
                foreach ($arThemes as $arTheme)
                {
                    $isActive = ($themeColor1 == $arTheme['color1'] && $themeColor2 == $arTheme['color2']) ? 'active' : '';
                    if ($isActive)
                        $activeScreen = $templatesPath."/".$templateID . $arTheme['images']['big'];
                    
                    $this->content .= '<div class="theme '.$isActive.'" data-screenshot="'.$templatesPath."/".$templateID . $arTheme['images']['big'].'" data-color1="'.$arTheme['color1'].'">';
                        $this->content .= '<div class="img"><img src="'.$templatesPath."/".$templateID . $arTheme['images']['preview'].'" /></div>';
                    $this->content .= '</div>';
                }
                
                
                
                $this->content .= '</div>';
                
                    $this->content .= '<div class="full-screen">';
                        $this->content .= '<img src="'.$activeScreen.'" />';
                    $this->content .= '</div>';
                
                $this->content .= '</div>';
                
                $this->content .= $this->ShowHiddenField("COLOR_SCHEME_1", $themeColor1, array("id" => "COLOR_SCHEME_1"));
                $this->content .= $this->ShowHiddenField("installDemoData", "Y");
                
                $this->content .= '
                <script>
                    $(".themes-list .theme").on("click", function () {
                        
                        $(".theme-container .full-screen img").attr("src", $(this).data("screenshot"));
                        $("input#COLOR_SCHEME_1").val($(this).data("color1"));
                        
                        $(".themes-list .theme").removeClass("active");
                        $(this).addClass("active");
                    });
                </script>    
                ';
                
                
                
            }
    }
}

class SiteSettingsStep extends CSiteSettingsWizardStep
{
    function InitStep()
    {
        $wizard =& $this->GetWizard();
        
        parent::InitStep();
        
        $this->SetStepID("site_settings");
	$this->SetTitle(GetMessage("SITE_SETTINGS_TITLE"));
	$this->SetPrevStep("select_theme");
	$this->SetPrevCaption(GetMessage("PREVIOUS_BUTTON"));
        
        $this->SetNextStep("data_install");
	$this->SetNextCaption(GetMessage("NEXT_BUTTON"));
        
        $siteID = $wizard->GetVar("siteID");
        $templatesPath = WizardServices::GetTemplatesPath($wizard->GetPath()."/site");
        $templateID = $wizard->GetVar("templateID");
        
        $obSite = new CSite;
	$arSite = $obSite->GetByID($siteID)->Fetch();
        
        
                
        $arSite['SERVER_NAME'] = (!empty($arSite['SERVER_NAME'])) ? $arSite['SERVER_NAME'] : 'site.ru';
        $wizard->SetDefaultVars(Array (
            'SITE_NAME' => (strlen($arSite["SITE_NAME"]) ? $arSite["SITE_NAME"] : (strlen($arSite["NAME"]) ? $arSite["NAME"] : GetMessage("DEFAULT_SITE_NAME"))),
            'SITE_PHONE' => GetMessage("DEFAULT_SITE_PHONE"),
            'SITE_EMAIL' => (strlen($arSite['EMAIL'])) ? $arSite['EMAIL'] : GetMessage("DEFAULT_SITE_EMAIL", Array ("#DOMAIN#" => $arSite['SERVER_NAME'])),
            'SITE_SLOGAN' => GetMessage("DEFAULT_SITE_SLOGAN"),
            'SITE_WORKTIME' => GetMessage("DEFAULT_SITE_WORK_TIME"),
            'SITE_ADDRESS' => GetMessage("DEFAULT_SITE_ADDRESS"),
            'SITE_LOGO' => $templatesPath."/".$templateID."/images/logo.png",
        ));
    }
    
    function ShowStep()
    {
            if(!CModule::IncludeModule("nextype.corporate"))
            {
                CWizardTools::ShowError($this, GetMessage('WIZ_NO_MODULE'));
            }
            else
            {
                $wizard =& $this->GetWizard();
                
                $siteID = $wizard->GetVar("siteID");
                $siteLogo = $wizard->GetVar("SITE_LOGO", true);
                
                $this->content .= '<div class="wizard-input-form-block">
					<label for="siteName" class="wizard-input-title">'.GetMessage("WIZ_SITE_NAME").':</label><br />'
					.$this->ShowInputField('text', 'SITE_NAME', array("class"=>"wizard-field", "id" => "SITE_NAME")).'
				</div>';
                
                $this->content .= '<div class="wizard-input-form-block">
					<label for="SITE_LOGO" class="wizard-input-title">'.GetMessage("WIZ_SITE_LOGO").':</label><br />'
					.CFile::ShowImage($siteLogo, 240, 60, "border=0 vspace=15") . '<br>' .
					$this->ShowFileField("SITE_LOGO", Array("show_file_info" => "N", "id" => "SITE_LOGO")).'
				</div>';
                
                $this->content .= '<div class="wizard-input-form-block">
					<label for="siteSlogan" class="wizard-input-title">'.GetMessage("WIZ_SITE_SLOGAN").':</label><br />'
					.$this->ShowInputField('text', 'SITE_SLOGAN', array("class"=>"wizard-field", "id" => "SITE_SLOGAN")).'
				</div>';
                
                $this->content .= '<div class="wizard-input-form-block">
					<label for="sitePhone" class="wizard-input-title">'.GetMessage("WIZ_SITE_PHONE").':</label><br />'
					.$this->ShowInputField('text', 'SITE_PHONE', array("class"=>"wizard-field", "id" => "SITE_PHONE")).'
				</div>';
                
                $this->content .= '<div class="wizard-input-form-block">
					<label for="siteEmail" class="wizard-input-title">'.GetMessage("WIZ_SITE_EMAIL").':</label><br />'
					.$this->ShowInputField('text', 'SITE_EMAIL', array("class"=>"wizard-field", "id" => "SITE_EMAIL")).'
				</div>';
                
                $this->content .= '<div class="wizard-input-form-block">
					<label for="siteWorkTime" class="wizard-input-title">'.GetMessage("WIZ_SITE_WORK_TIME").':</label><br />'
					.$this->ShowInputField('text', 'SITE_WORKTIME', array("class"=>"wizard-field", "id" => "SITE_WORKTIME")).'
				</div>';
                
                $this->content .= '<div class="wizard-input-form-block">
					<label for="siteAddress" class="wizard-input-title">'.GetMessage("WIZ_SITE_ADDRESS").':</label><br />'
					.$this->ShowInputField('text', 'SITE_ADDRESS', array("class"=>"wizard-field", "id" => "SITE_ADDRESS")).'
				</div>';
               
                
                
                $this->content .= '<div id="bx_metadata" style="display:block">';
                $this->content .= '<div class="wizard-input-form-block">
                                        <div class="wizard-metadata-title">'.GetMessage('WIZ_SITE_META_TITLE').'</div>
					<label for="siteMetaDescription" class="wizard-input-title">'.GetMessage("WIZ_SITE_META_DESCRIPTION").':</label><br />'
					.$this->ShowInputField('textarea', 'SITE_META_DESCRIPTION', array("class"=>"wizard-field", "id" => "SITE_META_DESCRIPTION", "style" => "width:100%", "rows"=>"3")).'
				</div>';
                
                $this->content .= '<div class="wizard-input-form-block">
					<label for="siteMetaKeywords" class="wizard-input-title">'.GetMessage("WIZ_SITE_META_KEYWORDS").':</label><br />'
					.$this->ShowInputField('text', 'SITE_META_KEYWORDS', array("class"=>"wizard-field", "id" => "SITE_META_KEYWORDS", "style" => "width:100%", "rows"=>"3")).'
				</div>';
                $this->content .= '</div>';
            }
        
    }
    
    function OnPostForm()
    {
        $wizard =& $this->GetWizard();

        $res = $this->SaveFile("SITE_LOGO", Array("extensions" => "gif,jpg,jpeg,png", "max_width" => 600,  "max_height" => 600, "make_preview" => "Y"));
	if(file_exists(WIZARD_SITE_PATH."include/logo.jpg")) {
            $wizard->SetVar("SITE_LOGO_SET", true);
	}
    }
}

class DataInstallStep extends CDataInstallWizardStep
{
	function CorrectServices(&$arServices)
	{
		$this->repeatCurrentService = false;

		$wizard =& $this->GetWizard();
		if($wizard->GetVar("installDemoData") != "Y")
		{
		}
	}
}

class FinishStep extends CFinishWizardStep
{
	function InitStep()
	{
		$this->SetStepID("finish");
		$this->SetNextStep("finish");
		$this->SetTitle(GetMessage("FINISH_STEP_TITLE"));
		$this->SetNextCaption(GetMessage("wiz_go"));  
	}

	function ShowStep()
	{
		$wizard =& $this->GetWizard();		   
		if ($wizard->GetVar("proactive") == "Y")
			COption::SetOptionString("statistic", "DEFENCE_ON", "Y");
		
		$siteID = WizardServices::GetCurrentSiteID($wizard->GetVar("siteID"));
		$rsSites = CSite::GetByID($siteID);
		$siteDir = "/"; 
		if ($arSite = $rsSites->Fetch())
			$siteDir = $arSite["DIR"]; 

		$wizard->SetFormActionScript(str_replace("//", "/", $siteDir."/?finish"));

		$this->CreateNewIndex();
		
		COption::SetOptionString("main", "wizard_solution", $wizard->solutionName, false, $siteID);

		$this->content .=
			'<table class="wizard-completion-table">
				<tr>
					<td class="wizard-completion-cell">'
						.GetMessage("FINISH_STEP_CONTENT").
					'</td>
				</tr>
			</table>';
	//	$this->content .= "<br clear=\"all\"><a href=\"/bitrix/admin/wizard_install.php?lang=".LANGUAGE_ID."&site_id=".$siteID."&wizardName=bitrix:eshop.mobile&".bitrix_sessid_get()."\" class=\"button-next\"><span id=\"next-button-caption\">".GetMessage("wizard_store_mobile")."</span></a><br>";
		
		if ($wizard->GetVar("installDemoData") == "Y")
			$this->content .= GetMessage("FINISH_STEP_REINDEX");		
			
		
	}

}