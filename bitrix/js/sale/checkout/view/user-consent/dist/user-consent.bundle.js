this.BX = this.BX || {};
this.BX.Sale = this.BX.Sale || {};
this.BX.Sale.Checkout = this.BX.Sale.Checkout || {};
(function (exports,ui_vue,main_core,sale_checkout_const) {
	'use strict';

	function _templateObject() {
	  var data = babelHelpers.taggedTemplateLiteral(["<div>", "</div>"]);

	  _templateObject = function _templateObject() {
	    return data;
	  };

	  return data;
	}
	ui_vue.BitrixVue.component('sale-checkout-view-user_consent', {
	  props: ['item'],
	  methods: {
	    getBlockHtml: function getBlockHtml() {
	      var _this = this;

	      var userConsent = {
	        id: this.item.id,
	        title: this.item.title,
	        isLoaded: this.item.isLoaded,
	        autoSave: this.item.autoSave,
	        isChecked: this.item.isChecked,
	        submitEventName: this.item.submitEventName,
	        fields: main_core.Type.isArrayFilled(this.item.params) ? JSON.stringify(this.item.params) : []
	      };
	      main_core.ajax.runComponentAction(sale_checkout_const.Component.bitrixSaleOrderCheckout, sale_checkout_const.RestMethod.saleEntityUserConsentRequest, {
	        data: {
	          fields: userConsent
	        }
	      }).then(function (response) {
	        if (BX.type.isPlainObject(response.data) && BX.type.isNotEmptyString(response.data.html)) {
	          var consent = response.data.html;

	          if (BX.UserConsent !== undefined) {
	            var wrapper = _this.$refs.consentDiv;
	            wrapper.appendChild(main_core.Tag.render(_templateObject(), consent));
	            var control = BX.UserConsent.load(wrapper);
	            BX.addCustomEvent(control, BX.UserConsent.events.accepted, function () {
	              return main_core.Event.EventEmitter.emit(sale_checkout_const.EventType.consent.accepted, {});
	            });
	            BX.addCustomEvent(control, BX.UserConsent.events.refused, function () {
	              return main_core.Event.EventEmitter.emit(sale_checkout_const.EventType.consent.refused, {});
	            });
	          }
	        }
	      });
	    }
	  },
	  mounted: function mounted() {
	    this.getBlockHtml();
	  },
	  // language=Vue
	  template: "\n\t  <div class=\"checkout-basket-section checkout-basket-section-consent\">\n\t\t<div ref=\"consentDiv\"/>\n      </div>\n\t"
	});

}((this.BX.Sale.Checkout.View = this.BX.Sale.Checkout.View || {}),BX,BX,BX.Sale.Checkout.Const));
//# sourceMappingURL=user-consent.bundle.js.map
