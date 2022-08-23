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

function initItemsControl(params)
{
    if (params.data !== undefined && params.data != "") {
            window['items_parameter_' + params.propertyID] = new ItemsParameterControl(params);
    }
    
}

function ItemsParameterControl(params)
{
    var rand = BX.util.getRandomString(5);

    this.params = params || {};
    this.message = JSON.parse(params.propertyParams.JS_MESSAGES) || {};
    this.icons = JSON.parse(params.propertyParams.JS_ICONS) || [];
    
    this.selected = this.params.oInput.value || this.params.propertyParams.DEFAULT;
    this.id = 'items_container_' + this.params.propertyID + '_' + rand;
    
    BX.loadCSS(this.getPath() + '/style.css?' + rand);
    
    this.init();
}

ItemsParameterControl.prototype = {
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
            props: {id: this.id, className: 'nextype-block-items-list'},
        });
        
        var fieldsActions = BX.create('DIV', {
            props: {className: 'nextype-block-actions'},
            children: [
                BX.create('A', {
                    props: {href: 'javascript:void(0)', className: 'nextype-add-row'},
                    text: this.message.add_field,
                    events: {click: BX.proxy(this.addItem, this)}
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
                this.addItem();
            }
        } else {
            this.addItem();
        }
        
        
    },
    
    deleteItem: function (el) {
        var table = BX.findParent(BX(el.target), {"tag": "table", "class" : "nextype-block-item-table"});
        BX.remove(table);
        this.changeField();
    },
    
    addItem: function (el) {
        BX(this.id).appendChild(this.getItemNode());
    },
    
    changeField: function (el) {
        var data = this.prepareData();
        this.saveData(data);
    },
    
    getIconsSet: function (hiddenInput, selected) {
        
        
        if (typeof this.icons == 'object') {
            var childs = [];
            for (var key in this.icons) {
                var icon = BX.create('IMG', {
                    attrs: {'src': this.icons[key], 'data-key': key},
                    props: {className: 'nextype-block-icon'},
                    events: {click: BX.proxy(this.changeIcon, this)}
                });
                
                if (selected == key) {
                    BX.addClass(icon, 'active');
                    hiddenInput.value = key;
                }
                
                childs.push(icon);
            }
            
            childs.push(hiddenInput);
            
            var iconSet = BX.create('DIV', {
                props: {className: 'nextype-block-icon-set'},
                children: childs
            });
            
            return iconSet;
        }
    },
    
    changeIcon: function (el) {
        
        var target = BX(el.target);
        if (target !== undefined) {
            var parent = BX.findParent(target, {
                class: 'nextype-block-icon-set'
            }),
            childs = BX.findChild(parent, {
                class: 'nextype-block-icon'
            }, true, true);
            
            childs.forEach(function(img){
                BX.removeClass(img, 'active');
            });
            
            var input = BX.findChild(parent, {attribute: {'data-field': 'icon'} });
            if (input !== undefined)
                input.value = target.getAttribute('data-key');

            BX.addClass(target, 'active');
            
            this.changeField(el);
        }
    },
    
    getItemNode: function (obData) {
        
        obData = (obData) || false;
        var iconSelect = false;
        var rand = BX.util.getRandomString(5);
        var ids = {
            name: 'name_' + this.params.propertyID + '_' + rand,
            icon: 'icon_' + this.params.propertyID + '_' + rand,
            description: 'icon_' + this.params.propertyID + '_' + rand
        };
        
    
        var nameInput = BX.create('INPUT', {
            props: {id: ids.name, type: 'text'},
            attrs: {required: 'required', 'data-field': 'name'},
            events: {keyup: BX.proxy(this.changeField, this)}
        });
        
        var hiddenInput = BX.create('INPUT', {
            props: {id: ids.icon, type: 'hidden'},
            attrs: {'data-field': 'icon'}
        });
        

        var descriptionInput = BX.create('TEXTAREA', {
            props: {id: ids.values, className: 'nextype-block-item-textarea'},
            attrs: {'data-field': 'description'},
            events: {keyup: BX.proxy(this.changeField, this)}
        });
        
        
        
        if (typeof obData == 'object') {
            nameInput.value = obData.name;
            descriptionInput.value = obData.description;
            iconSelect = obData.icon;
        }
        
        var deleteRowButton = BX.create('A', {
            props: {href: 'javascript:void(0)', className: 'nextype-delete-row'},
            events: {click: BX.proxy(this.deleteItem, this)},
        });
        
        var node = BX.create('TABLE', {
            props: {className: 'nextype-block-item-table'},
            children: [
                deleteRowButton,
                
                BX.create('TR', {
                    children: [
                        BX.create('TD', {
                            props: {className: 'nextype-block-item-label'},
                            text: this.message.name
                        })
                    ]
                }),
                BX.create('TR', {
                    children: [
                        BX.create('TD', {
                            props: {className: 'nextype-block-item-input'},
                            children: [
                                nameInput
                            ]
                        })
                    ]
                }),
                
                BX.create('TR', {
                    children: [
                        BX.create('TD', {
                            props: {className: 'nextype-block-item-label'},
                            text: this.message.description
                        })
                    ]
                }),
                
                BX.create('TR', {
                    children: [
                        BX.create('TD', {
                            props: {className: 'nextype-block-item-input'},
                            children: [
                                descriptionInput
                            ]
                        })
                    ]
                }),
                
                BX.create('TR', {
                    children: [
                        BX.create('TD', {
                            props: {className: 'nextype-block-item-label'},
                            text: this.message.icon
                        })
                    ]
                }),
                
                BX.create('TR', {
                    children: [
                        BX.create('TD', {
                            props: {className: 'nextype-block-item-input'},
                            children: [
                                this.getIconsSet(hiddenInput, iconSelect)
                            ]
                        })
                    ]
                }),
                
            ]
        });
        
        if (typeof obData == 'object' && (obData.type == 'select' || obData.type == 'multiselect') ) {
            BX.addClass(BX.findChild(node, {
                    class: 'nextype-block-item-values'
            }, true), 'open');
        }
        
        BX.adminFormTools.modifyFormElements(node);
        
        return node;
    },

    prepareData: function () {
        var fields = BX.findChild(BX(this.id), {class: 'nextype-block-item-table'}, true, true);
        var arr = [];
        fields.forEach(function(parent){
            var name = BX.findChild(BX(parent), {attribute: {'data-field': 'name'} }, true);
                
            if (name.value != "") {   
                var icon = BX.findChild(BX(parent), {attribute: {'data-field': 'icon'} }, true),
                    description = BX.findChild(BX(parent), {attribute: {'data-field': 'description'} }, true);

                var data = {
                    name: name.value,
                    icon: icon.value,
                    description: description.value
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