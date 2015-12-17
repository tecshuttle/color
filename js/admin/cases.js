Ext.ns('Tomtalk.product');

Ext.define('Tomtalk.product.EditFormUI', {extend: 'Ext.form.Panel',
    constructor: function (config) {
        var me = this;
        config = Ext.apply({
            title: '成功案例',
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
                xtype: 'textfield',
                fieldLabel: '标题',
                allowBlank: false,
                anchor: '50%',
                name: 'name',
                emptyText: '请输入…'
            },
            {
                xtype: 'textfield',
                fieldLabel: '日期',
                anchor: '50%',
                name: 'dates',
                emptyText: '请输入…'
            },
			{
                xtype: 'textfield',
                fieldLabel: '类别',
                anchor: '50%',
                name: 'type',
                emptyText: '请输入…'
            },
			{
                xtype: 'textfield',
                fieldLabel: '内容',
                anchor: '50%',
                name: 'intro',
                emptyText: '请输入…'
            },
            {
                xtype: 'htmleditor',
                anchor: '100%',
                height: 500,
                fieldLabel: '图片',
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
        ];


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

        if (form.isValid()) {
            form.getForm().submit({
                url: '/cases/save',//后台处理的页面
                waitMsg: '正在保存数据...',
                submitEmptyText: false,
                success: function (fp, o) {
                    var result = Ext.decode(o.response.responseText);

                    if (result.success) {
                        me._return();
                    } else {
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


Tomtalk.IdcUI = Ext.extend(Ext.Viewport, {
    constructor: function (config) {
        var me = this;
        config = Ext.apply({
            border: false,
            style: 'padding:10px;background-color: white;',
            layout: 'border'
        }, config);

        me.COMPONENTS = {};

        me.lang = {
            products: '产品',
            articles: '文章',
            gallery: '图片'
        };

        Tomtalk.IdcUI.superclass.constructor.call(me, config);
    },

    initComponent: function () {
        var me = this;
        me.items = [
            me._centerPanel()
        ];

        Tomtalk.IdcUI.superclass.initComponent.call(me);
    },


    _centerPanel: function () {
        var me = this;
        var items = '';

        items = [
            this._gridList(),
            this._productForm()
        ];

        var center = Ext.create('Ext.panel.Panel', {
            region: 'center',
            autoScroll: true,
            border: false,
            items: items
        });

        return center;
    },

    _gridList: function () {
        var me = this;

        var store = Ext.create('Ext.data.Store', {
            pageSize: 20,
            autoLoad: true,
            fields: ['id', 'dates', 'name', 'type', 'intro', 'desc', 'cover', 'content', 'download', 'is_hot', 'ctime', 'keywords', 'picture_gallery'],
            proxy: {
                type: 'ajax',
                url: '/cases/getList',
                reader: {
                    type: 'json',
                    root: 'data',
                    totalProperty: 'total'
                }
            }
        });

        var grid = Ext.create('Ext.grid.GridPanel', {
            id: this.id + '_gridList',
            header: false,
            columnLines: true,
            store: store,
            columns: [
                {
                    header: "ID", dataIndex: 'id'
                },
                {
                    header: "名称", dataIndex: 'name'
                },
                {
                    header: "日期", dataIndex: 'dates'
                },
				{
                    header: "类别", dataIndex: 'type'
                },
                {
                    header: "建立时间", dataIndex: 'ctime',
                    renderer: function (v) {
                        return new Date(v * 1000).format('yyyy-MM-dd hh:mm:ss');
                    }
                },
                {
                    header: "操作",
                    dataIndex: 'id',
                    align: 'left',
                    xtype: 'linkcolumn',
                    name: 'opertation',
                    items: [
                        {
                            text: '编辑',
                            handler: function (grid, rowIndex, colIndex) {
                                var record = grid.getStore().getAt(rowIndex);
                                me._edit(record); //alert("Terminate " + rec.get('title'));
                            }
                        },
                        {
                            text: '克隆',
                            hidden: (me.module == 'products' ? false : true),
                            handler: function (grid, rowIndex, colIndex) {
                                var record = grid.getStore().getAt(rowIndex);
                                me._clone(record.get('id'));
                            }
                        },
                        {
                            text: '删除',
                            handler: function (grid, rowIndex, colIndex) {
                                var record = grid.getStore().getAt(rowIndex);
                                me._delete(record.get('id'));
                            }
                        }
                    ]
                }
            ],
            dockedItems: [
                {
                    xtype: 'toolbar',
                    items: [
                        {
                            text: '新增产品',
                            id: 'grid_add_btn'
                        }
                    ]
                }
            ],
            bbar: {
                xtype: 'pagingtoolbar',
                store: store,
                displayInfo: true,
                beforePageText: '页',
                afterPageText: '/ {0}',
                displayMsg: "显示第 {0} 条到 {1} 条记录，一共 {2} 条",
                emptyMsg: "没有记录"
            },
            forceFit: true,
            viewConfig: {
                stripeRows: true,
                enableRowBody: true,
                showPreview: true
            }
        });

        return grid;
    },


    _productForm: function () {
        var form = Ext.create('Tomtalk.product.EditForm', {
            module: this.module,
            hidden: true
        });

        this.COMPONENTS.productForm = form;

        return form;
    }
});

Tomtalk.IdcAction = Ext.extend(Tomtalk.IdcUI, {
    constructor: function (config) {
        Tomtalk.IdcAction.superclass.constructor.call(this, config);
    },

    initComponent: function () {
        Tomtalk.IdcAction.superclass.initComponent.call(this);

        Ext.apply(this.COMPONENTS, {
            grid: Ext.getCmp(this.id + '_gridList'),
            addBtn: Ext.getCmp('grid_add_btn'),
            //saveBtn: Ext.getCmp(this.id + '_save'),
            //btnProductForm: Ext.getCmp(this.id + '_btn_product_form'),
            //btnGalleryBatchAdd: Ext.getCmp(this.id + '_btn_gallery_batch_add'),
            //query: Ext.getCmp(this.id + '_btn_query'),
            //reset: Ext.getCmp(this.id + '_btn_reset')
        });
    },

    initEvents: function () {
        var me = this;
        var $c = this.COMPONENTS;

        Tomtalk.IdcAction.superclass.initEvents.call(me);

        $c.addBtn.on('click', me._showProductForm, me);
    },

    _afterrender: function () {
        var $c = this.COMPONENTS;
    },

    _showProductForm: function () {
        var me = this;

        var $c = this.COMPONENTS;

        $c.grid.hide();
        $c.productForm.show();
    },

    __showAddForm: function () {
        var $c = this.COMPONENTS;

        $c.addBtn.hide();
        $c.grid.hide();
        $c.typeInfoForm.hide();

        $c.addForm.show();
    },

    _returnGrid: function () {
        var $c = this.COMPONENTS;

        $c.grid.show();
        $c.typeInfoForm.show();
        $c.productForm.hide();
        if ($c.galleryBatch) {
            $c.galleryBatch.hide();
        }
    },

    _returnFrom: function () {
        var $c = this.COMPONENTS;

        $c.productForm.hide();
        $c.grid.show();
        $c.grid.getStore().reload();
    },

    _query: function () {
        var params = {
            id: this.COMPONENTS.id.getValue(),
            name: this.COMPONENTS.name.getValue()
        };

        var store = this.COMPONENTS.grid.getStore();
        var proxy = store.getProxy();

        Ext.apply(proxy.extraParams, params);

        store.load();
    },

    _reset: function () {
        this.COMPONENTS.addForm.getForm().reset();
    },

    _edit: function (record) {
        var me = this;
        var form = this.COMPONENTS.productForm.getForm();

        me._showProductForm();

        record.raw.ctime = new Date(record.raw.ctime * 1000);
        form.setValues(record.raw);
    },

    _delete: function (id) {
        var me = this;

        Ext.Ajax.request({
            url: '/cases/delete',
            params: {
                id: id
            },
            success: function (res) {
                var result = Ext.decode(res.responseText);
                me.COMPONENTS.grid.getStore().reload();
            }
        });
    },

    _clone: function (id) {
        var me = this;

        Ext.Ajax.request({
            url: '/' + me.module + '/clone_from_id',
            params: {
                id: id
            },
            success: function (res) {
                var result = Ext.decode(res.responseText);
                me.COMPONENTS.grid.getStore().reload();
            }
        });
    }
});

Tomtalk.Idc = Tomtalk.IdcAction;

Ext.onReady(function () {
    new Tomtalk.Idc({
        module: 'cases',
        renderTo: Ext.getBody()
    });
});

//end file