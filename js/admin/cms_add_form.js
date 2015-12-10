Ext.ns('Tomtalk.product');

Ext.define('Tomtalk.product.EditFormUI', {extend: 'Ext.form.Panel',
    constructor: function (config) {
        var me = this;
        config = Ext.apply({
            title: (me.module == 'products' ? '产品编辑' : '文章编辑'),
            bodyStyle: 'padding:10px;',
            layout: 'anchor'
        }, config);

        me.COMPONENTS = {};

        Tomtalk.product.EditFormUI.superclass.constructor.call(me, config);
    },

    initComponent: function () {
        var me = this;

        me.items = [
            {
                xtype: 'hiddenfield',
                name: 'id',
                value: 0
            },
            {
                xtype: 'hiddenfield',
                name: 'type_id',
                value: 0
            },
            {
                xtype: 'textfield',
                fieldLabel: '标题',
                allowBlank: false,
                anchor: '50%',
                name: 'name',
                emptyText: '请输入…'
            },
            {
                xtype: 'textfield',
                fieldLabel: '代号',
                allowBlank: false,
                anchor: '50%',
                name: 'code',
                emptyText: '请输入…'
            },
            
            {
                xtype: 'datefield',
                fieldLabel: '生成时间',
                anchor: '50%',
                name: 'ctime',
                format: 'Y-m-d',
                value: new Date(),
                emptyText: '请输入…'
            },
            
            
           
           
            {
                xtype: 'textarea',
                fieldLabel: '产品比较参数',
                anchor: '50%',
                hidden: (me.module == 'products' ? false : true),
                name: 'params',
                emptyText: '请输入…'
            },
            {
                xtype: 'textarea',
                fieldLabel: '下载',
                anchor: '50%',
                hidden: (me.module == 'products' ? false : true),
                name: 'downloads',
                emptyText: '请输入…'
            },
            {
                xtype: 'textfield',
                fieldLabel: '相关产品',
                anchor: '50%',
                hidden: (me.module == 'products' ? false : true),
                name: 'relative_products',
                emptyText: '输入产品ID，之间用英文逗号隔开。例：34, 53, 5, 67'
            },
            {
                xtype: 'htmleditor',
                fieldLabel: '认证',
                anchor: '100%',
                height: 300,
                hidden: (me.module == 'products' ? false : true),
                name: 'cert',
                emptyText: '请输入…'
            },
            {
                xtype: 'htmleditor',
                fieldLabel: 'application',
                anchor: '100%',
                height: 300,
                hidden: (me.module == 'products' ? false : true),
                name: 'application',
                emptyText: '请输入…'
            },
            {
                xtype: 'htmleditor',
                anchor: '100%',
                height: 500,
                fieldLabel: '内容',
                name: 'content',
                allowBlank: false,
                emptyText: '请输入…'
            },
            {
                xtype: 'button',
                text: '保存',
                id: this.id + '_save',
                width: 100
            },
            {
                xtype: 'button',
                text: '返回',
                id: this.id + '_return',
                style: 'margin-left: 50px;',
                width: 100
            }
        ]
        ;

        Tomtalk.product.EditFormUI.superclass.initComponent.call(me);
    }
});

Ext.define('Tomtalk.product.EditFormAction', {extend: 'Tomtalk.product.EditFormUI',
    constructor: function (config) {
        Tomtalk.product.EditFormAction.superclass.constructor.call(this, config);
    },

    initComponent: function () {
        Tomtalk.product.EditFormAction.superclass.initComponent.call(this);

        Ext.apply(this.COMPONENTS, {
            saveBtn: Ext.getCmp(this.id + '_save'),
            returnBtn: Ext.getCmp(this.id + '_return')
        });
    },

    initEvents: function () {
        var me = this;
        var $c = this.COMPONENTS;

        Tomtalk.product.EditFormAction.superclass.initEvents.call(me);

        $c.saveBtn.on('click', me._save, me);
        $c.returnBtn.on('click', me._return, me);
    },

    _return: function () {
        this.getForm().reset();

        if (this.up().up()) {
            this.up().up()._returnFrom('productForm');
        }
    },

    _save: function () {
        var me = this;
        var form = me;

        var type_id = me.up().up().COMPONENTS.typeInfoForm.getValues().id;

        //从父组件取分类信息，没有则默认分类为0
        if (type_id === 0) {
            Ext.Msg.alert('error', '请选择' + (me.module == 'products' ? '产品' : '文章'), +'分类');
            return false;
        }

        me.down('hidden[name=type_id]').setValue(type_id);

        if (form.isValid()) {
            form.getForm().submit({
                url: '/' + me.up().up().module + '/save',//后台处理的页面
                waitMsg: 'Uploading your photo...',
                submitEmptyText: false,
                success: function (fp, o) {
                    //console.log(res);

                    var result = Ext.decode(o.response.responseText);

                    if (result.success) {
                        me._return();
                    } else {
                        alert('See error info by console.');
                        console.log(result);
                    }
                }
            });
        }
    },

    _getValue: function () {
        var me = this;
        var $c = this.COMPONENTS;
        var addForm = me.getForm();
        if (!addForm.isValid()) {
            return false;
        }

        return addForm.getValues();
    }
});

Tomtalk.product.EditForm = Tomtalk.product.EditFormAction;

//end file