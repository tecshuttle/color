Ext.onReady(function () {
    var fields = ['id', 'email', 'enquiry'];
    var columns = [
        {
            header: "ID", dataIndex: 'id'
        },
        {
            header: "Email", dataIndex: 'email'
        },
        {
            header: "产品列表", dataIndex: 'enquiry',
            renderer: function (v) {
                if (Ext.String.trim(v) == '') {
                    return '';
                }

                var data = JSON.parse(v);
                var html = '';

                Ext.each(data, function (id, idx) {
                    var p = data[idx];
                    html += '<a href="/products/detail?id=' + p.id + '" target="_blank">' + p.name + '</a><br />';
                    html += '芯数：' + p.pins + '<br />';
                    html += '接口防护类型：' + p.coding + '<br />';
                    html += '线材外被、长度：' + p.cable + '<br />';
                    html += '其它要求：' + p.other + '<br/><br/>';
                });

                return html;
            }
        }
    ];

    new Tomtalk.Idc({
        module: 'enquiries',
        fields: fields,
        columns: columns,
        renderTo: Ext.getBody()
    });
});