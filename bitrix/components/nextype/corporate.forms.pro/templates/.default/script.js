window.RecaptchaID = [];

function NextypeFormsProComponentInit(parameters)
{
    if (parameters.formId !== undefined) {
        window[parameters.formId] = new NextypeFormsProComponent(parameters);
    }
}

function NextypeFormsProComponent(parameters)
{
    this.init(parameters);
}

NextypeFormsProComponent.prototype = {

    signedParamsString: '',
    params: {},
    siteId: '',
    ajaxUrl: '',
    templateFolder: '',
    formId: '',
    popupId: '',

    init: function (parameters)
    {
        this.params = parameters.params || {};
        this.signedParamsString = parameters.signedParamsString || '';
        this.siteId = parameters.siteID || '';
        this.ajaxUrl = parameters.ajaxUrl || '';
        this.templateFolder = parameters.templateFolder || '';
        this.formId = parameters.formId || '';
        this.popupId = parameters.popupId || '';
        this.obPopup = false;

        this.renderForm();
        this.bindEvents();

        return this;
    },

    renderForm: function () {
        if (this.params.CAPTCHA == "RECAPTCHA") {

            if (window.RecaptchaID.indexOf(this.params.RECAPTCHA_ID) == -1)
                window.RecaptchaID.push(this.params.RECAPTCHA_ID);

            window['timerRecaptcha'] = setTimeout(BX.proxy(function () {
                if (typeof window.grecaptcha.render == 'function') {
                    
                    for (var i = 0; i < window.RecaptchaID.length; i++) {
                        if (BX(window.RecaptchaID[i]).innerHTML == "") {
                            window.grecaptcha.render(window.RecaptchaID[i], {
                                'sitekey': this.params.RECAPTCHA_CODE
                            });
                        }
                    }
                    clearTimeout(window['timerRecaptcha']);
                }
            }, this), 200);

        }

    },

    bindEvents: function() {

        BX.bind(BX(this.formId), 'submit', BX.proxy(this.submitForm, this));
        
        if (this.params.VIEW_TYPE == "POPUP" && this.popupId != "") {
            this.obPopup = BX(this.popupId);

            var self = this;
            BX.findChild(document.body, {attribute: {'data-close-popup': this.popupId}}, true, true).forEach(function (target) {
                BX.bind(target, 'click', BX.proxy(self.popupClose, self));
            });

            BX.findChild(document.body, {attribute: {'data-open-popup': this.popupId}}, true, true).forEach(function (target) {
                BX.bind(target, 'click', BX.proxy(self.popupOpen, self));
            });

        }
    },

    submitForm: function (event) {

        var data = Object.assign(this.getAllFormData(), {
            SITE_ID: this.siteId,
            signedParamsString: this.signedParamsString
        });


        BX.ajax({
            url: this.ajaxUrl,
            method: 'POST',
            timeout: 60,
            data: data,
            onsuccess: BX.proxy(function (result) {
                BX.adjust(BX(this.formId), {
                    html: result
                });

                this.renderForm();

            }, this)
        });

        return BX.PreventDefault(event);
    },

    getAllFormData: function ()
    {
        var form = BX(this.formId),
                prepared = BX.ajax.prepareForm(form),
                i;

        for (i in prepared.data)
            if (prepared.data.hasOwnProperty(i) && i == '')
                delete prepared.data[i];

        return !!prepared && prepared.data ? prepared.data : {};
    },

    popupClose: function () {
        if (this.obPopup !== undefined) {
            BX.removeClass(this.obPopup, 'open');
        }
    },

    popupOpen: function () {
        BX.addClass(this.obPopup, 'open');
    }
};
