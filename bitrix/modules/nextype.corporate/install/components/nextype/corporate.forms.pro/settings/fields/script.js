var Base64 = {


    _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",


    encode: function(input) {
        var output = "";
        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
        var i = 0;

        input = Base64._utf8_encode(input);

        while (i < input.length) {

            chr1 = input.charCodeAt(i++);
            chr2 = input.charCodeAt(i++);
            chr3 = input.charCodeAt(i++);

            enc1 = chr1 >> 2;
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            enc4 = chr3 & 63;

            if (isNaN(chr2)) {
                enc3 = enc4 = 64;
            } else if (isNaN(chr3)) {
                enc4 = 64;
            }

            output = output + this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) + this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);

        }

        return output;
    },


    decode: function(input) {
        var output = "";
        var chr1, chr2, chr3;
        var enc1, enc2, enc3, enc4;
        var i = 0;

        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

        while (i < input.length) {

            enc1 = this._keyStr.indexOf(input.charAt(i++));
            enc2 = this._keyStr.indexOf(input.charAt(i++));
            enc3 = this._keyStr.indexOf(input.charAt(i++));
            enc4 = this._keyStr.indexOf(input.charAt(i++));

            chr1 = (enc1 << 2) | (enc2 >> 4);
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            chr3 = ((enc3 & 3) << 6) | enc4;

            output = output + String.fromCharCode(chr1);

            if (enc3 != 64) {
                output = output + String.fromCharCode(chr2);
            }
            if (enc4 != 64) {
                output = output + String.fromCharCode(chr3);
            }

        }

        output = Base64._utf8_decode(output);

        return output;

    },

    _utf8_encode: function(string) {
        string = string.replace(/\r\n/g, "\n");
        var utftext = "";

        for (var n = 0; n < string.length; n++) {

            var c = string.charCodeAt(n);

            if (c < 128) {
                utftext += String.fromCharCode(c);
            }
            else if ((c > 127) && (c < 2048)) {
                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);
            }
            else {
                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);
            }

        }

        return utftext;
    },

    _utf8_decode: function(utftext) {
        var string = "";
        var i = 0;
        var c = c1 = c2 = 0;

        while (i < utftext.length) {

            c = utftext.charCodeAt(i);

            if (c < 128) {
                string += String.fromCharCode(c);
                i++;
            }
            else if ((c > 191) && (c < 224)) {
                c2 = utftext.charCodeAt(i + 1);
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            }
            else {
                c2 = utftext.charCodeAt(i + 1);
                c3 = utftext.charCodeAt(i + 2);
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }

        }

        return string;
    }

};

function initFieldsControl(params)
{
    if (params.data !== undefined && params.data != "") {
            window['fields_parameter_' + params.propertyID] = new FieldsParameterControl(params);
    }
    
}

function FieldsParameterControl(params)
{
    var rand = BX.util.getRandomString(5);

    this.params = params || {};
    this.message = JSON.parse(params.propertyParams.JS_MESSAGES) || {};
    this.fieldTypes = JSON.parse(params.propertyParams.JS_FIELD_TYPES) || {};

    this.selected = this.params.oInput.value || this.params.propertyParams.DEFAULT;
    this.id = 'fields_container_' + this.params.propertyID + '_' + rand;
    
    BX.loadCSS(this.getPath() + '/style.css?' + rand);
    
    this.init();
}

FieldsParameterControl.prototype = {
    getPath: function ()
    {
        var path = this.params.propertyParams.JS_FILE.split('/');

        path.pop();

        return path.join('/');
    },
    
    init: function ()
    {
        if (BX.isNodeInDom(this.params.oCont))
        {
            this.buildNodes();
        } else
        {
            setTimeout(BX.delegate(this.init, this), 50);
        }
    },

    buildNodes: function ()
    {
        var propertyTr = BX.findParent(this.params.oCont, {className: 'bxcompprop-prop-tr'}),
            propertyTds = BX.findChildren(propertyTr, {tagName: 'td'});

        if (propertyTds.length)
        {
            propertyTds[0].remove();
            propertyTds[1].setAttribute('colspan', 2);
        }
        
        var fieldsList = BX.create('DIV', {
            props: {id: this.id, className: 'nextype-form-fields-list'},
        });
        
        var fieldsActions = BX.create('DIV', {
            props: {className: 'nextype-form-actions'},
            children: [
                BX.create('A', {
                    props: {href: 'javascript:void(0)', className: 'nextype-add-row'},
                    text: this.message.add_field,
                    events: {click: BX.proxy(this.addField, this)}
                })
            ]
        });
        
        this.params.oCont.appendChild(fieldsList);
        this.params.oCont.appendChild(fieldsActions);
        
        if (this.params.oInput.value != "") {
            var ob = JSON.parse(Base64.decode(this.params.oInput.value));
            if (typeof ob == 'object') {
                for (key in ob) {
                    BX(this.id).appendChild(this.getItemNode(ob[key]));
                }
            } else {
                this.addField();
            }
        } else {
            this.addField();
        }
        
        
    },
    
    deleteField: function (el) {
        var table = BX.findParent(BX(el.target), {"tag": "table", "class" : "nextype-form-field-table"});
        BX.remove(table);
        
        var data = this.prepareData();
        this.saveData(data);
    },
    
    addField: function (el) {
        BX(this.id).appendChild(this.getItemNode());
    },
    
    toggleParams: function (el) {
        var table = BX.findParent(BX(el.target), {"tag": "table", "class" : "nextype-form-field-table"});
        BX.toggleClass(table, 'open-params');
    },
    
    changeField: function (el) {
        var target = BX(el.target);
        if (target !== undefined) {
            if (target.getAttribute('data-field') == 'type') {
                var values = BX.findChild(BX.findParent(target, {
                    class: 'nextype-form-field-table'
                }, true), {
                    class: 'nextype-form-field-values'
                }, true);

                if (target.value == 'multiselect' || target.value == 'select') {
                    BX.addClass(values, "open");
                } else {
                    BX.removeClass(values, "open");
                }
            }
        }
        var data = this.prepareData();
        this.saveData(data);
    },
    
    changeCodeField: function (el) {
        var target = BX(el.target);
        if (target !== undefined) {
            target.value = target.value.replace(/[^a-z]/gi,'');
        }
        this.changeField(el);
    },
    
    getItemNode: function (obData) {
        
        obData = (obData) || false;
        var rand = BX.util.getRandomString(5);
        var ids = {
            name: 'name_' + this.params.propertyID + '_' + rand,
            type: 'type_' + this.params.propertyID + '_' + rand,
            required: 'required_' + this.params.propertyID + '_' + rand,
            mask: 'mask_' + this.params.propertyID + '_' + rand,
            default: 'default_' + this.params.propertyID + '_' + rand,
            values: 'values_' + this.params.propertyID + '_' + rand,
            code: 'code_' + this.params.propertyID + '_' + rand,
            placeholder: 'placeholder_' + this.params.propertyID + '_' + rand,
            sort: 'sort_' + this.params.propertyID + '_' + rand
        };
        var typesOptions = "";
        
        if (typeof this.fieldTypes == 'object') {
            for (var key in this.fieldTypes) {
                var selected = "";
                if (typeof obData == 'object' && obData.type == key) {
                    selected = ' selected="selected"';
                }
                typesOptions += '<option'+selected+' value="'+key+'">'+this.fieldTypes[key]+'</option>';
            }
        }
        
    
        var nameInput = BX.create('INPUT', {
            props: {id: ids.name, type: 'text'},
            attrs: {required: 'required', 'data-field': 'name'},
            events: {keyup: BX.proxy(this.changeField, this)}
        });
        
        var placeholderInput = BX.create('INPUT', {
            props: {id: ids.placeholder, type: 'text'},
            attrs: {'data-field': 'placeholder'},
            events: {keyup: BX.proxy(this.changeField, this)}
        });

        var typeSelect = BX.create('SELECT', {
            props: {id: ids.type},
            attrs: {required: 'required', 'data-field': 'type'},
            html: typesOptions,
            events: {change: BX.proxy(this.changeField, this)}
        });
        
        var requiredCheckbox = BX.create('INPUT', {
            props: {id: ids.required, type: 'checkbox'},
            attrs: {'data-field': 'required', value: 'Y'},
            events: {change: BX.proxy(this.changeField, this)}
        });
        
        var maskInput = BX.create('INPUT', {
            props: {id: ids.mask, type: 'text'},
            attrs: {'data-field': 'mask', placeholder: '+7 (###) ###-##-##'},
            events: {keyup: BX.proxy(this.changeField, this)}
        });
        
        var codeInput = BX.create('INPUT', {
            props: {id: ids.code, type: 'text'},
            attrs: {required: 'required', 'data-field': 'code'},
            events: {keyup: BX.proxy(this.changeCodeField, this)}
        });
        
        var defaultInput = BX.create('INPUT', {
            props: {id: ids.default, type: 'text'},
            attrs: {'data-field': 'default'},
            events: {keyup: BX.proxy(this.changeField, this)}
        });
        
        var sortInput = BX.create('INPUT', {
            props: {id: ids.sort, type: 'text'},
            attrs: {'data-field': 'sort'},
            events: {keyup: BX.proxy(this.changeField, this)}
        });
        
        var valuesInput = BX.create('TEXTAREA', {
            props: {id: ids.values, className: 'nextype-form-field-textarea'},
            attrs: {'data-field': 'values'},
            events: {keyup: BX.proxy(this.changeField, this)}
        });
        
        if (typeof obData == 'object') {
            nameInput.value = (obData.label) || '';
            codeInput.value = (obData.name) || '';
            defaultInput.value = (obData.default) || '';
            valuesInput.value = (obData.values) || '';
            maskInput.value = (obData.mask) || '';
            placeholderInput.value = (obData.placeholder) || '';
            sortInput.value = (obData.sort) || '500';
            
            if (obData.required == 'Y')
                requiredCheckbox.setAttribute('checked', 'checked');
        }
        
        var deleteRowButton = BX.create('A', {
            props: {href: 'javascript:void(0)', className: 'nextype-delete-row'},
            events: {click: BX.proxy(this.deleteField, this)},
        });
        
        var toggleParamsButton = BX.create('A', {
            props: {href: 'javascript:void(0)', className: 'nextype-default-button'},
            events: {click: BX.proxy(this.toggleParams, this)},
            text: '...',
        });
        
        var node = BX.create('TABLE', {
            props: {className: 'nextype-form-field-table'},
            children: [
                deleteRowButton,
                
                BX.create('TR', {
                    children: [
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-label'},
                            text: this.message.name
                        }),
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-label'},
                            text: this.message.code
                        }),
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-label'},
                            text: this.message.type
                        }),
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-label'},
                            text: this.message.required
                        }),
                        BX.create('TD', {
                            text: ''
                        })
                    ]
                }),
                BX.create('TR', {
                    children: [
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-input'},
                            children: [
                                nameInput
                            ]
                        }),
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-input'},
                            children: [
                                codeInput
                            ]
                        }),
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-input'},
                            children: [
                                typeSelect
                            ]
                        }),
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-input'},
                            children: [
                                requiredCheckbox
                            ]
                        }),
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-input'},
                            children: [
                                toggleParamsButton
                            ]
                        }),
                    ]
                }),
                BX.create('TR', {
                    props: {className: 'nextype-form-props-row'},
                    children: [
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-label'},
                            text: this.message.mask
                        }),
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-label'},
                            text: this.message.default
                        }),
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-label'},
                            text: this.message.placeholder
                        }),
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-label'},
                            text: this.message.sort
                        }),
                        BX.create('TD', {
                            text: ''
                        })
                    ]
                }),
                BX.create('TR', {
                    props: {className: 'nextype-form-props-row'},
                    children: [
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-input'},
                            children: [
                                maskInput
                            ]
                        }),
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-input'},
                            children: [
                                defaultInput
                            ]
                        }),
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-input'},
                            children: [
                                placeholderInput
                            ]
                        }),
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-input'},
                            children: [
                                sortInput
                            ]
                        }),
                        BX.create('TD', {
                            text: ''
                        })
                    ]
                }),
                BX.create('TR', {
                    props: {className: 'nextype-form-props-row'},
                    children: [
                        BX.create('TD', {
                            props: {className: 'nextype-form-field-values'},
                            attrs: { colspan: 5 },
                            children: [
                                BX.create('P', {
                                    text: this.message.values
                                }),
                                valuesInput
                            ]
                        })
                    ]
                }),
            ]
        });
        
        if (typeof obData == 'object' && (obData.type == 'select' || obData.type == 'multiselect') ) {
            BX.addClass(BX.findChild(node, {
                    class: 'nextype-form-field-values'
            }, true), 'open');
        }
        
        BX.adminFormTools.modifyFormElements(node);
        
        return node;
    },

    prepareData: function () {
        var fields = BX.findChild(BX(this.id), {class: 'nextype-form-field-table'}, true, true);
        var arr = [];
        fields.forEach(function(parent){
            var name = BX.findChild(BX(parent), {attribute: {'data-field': 'name'} }, true),
                code = BX.findChild(BX(parent), {attribute: {'data-field': 'code'} }, true);
                
            if (name.value != "" && code.value != "") {   
                var type = BX.findChild(BX(parent), {attribute: {'data-field': 'type'} }, true),
                    required = BX.findChild(BX(parent), {attribute: {'data-field': 'required'} }, true),
                    mask = BX.findChild(BX(parent), {attribute: {'data-field': 'mask'} }, true),
                    placeholder = BX.findChild(BX(parent), {attribute: {'data-field': 'placeholder'} }, true),
                    sort = BX.findChild(BX(parent), {attribute: {'data-field': 'sort'} }, true),
                    default_ = BX.findChild(BX(parent), {attribute: {'data-field': 'default'} }, true),
                    values = BX.findChild(BX(parent), {attribute: {'data-field': 'values'} }, true);
                    
                var data = {
                    label: name.value,
                    name: code.value,
                    placeholder: placeholder.value,
                    type: type.value,
                    required: (required.checked) ? 'Y' : 'N',
                    'default': default_.value,
                    values: values.value,
                    sort: sort.value,
                    mask: mask.value
                };

                arr.push(data);
            }
            
        });
        
        return arr;
    },

    saveData: function (data)
    {
        if (typeof data == 'object') {
            var json = JSON.stringify(data);
            this.params.oInput.value = Base64.encode(json);
        }
        
    }
};