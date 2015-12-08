Docs = {};
Docs.Menu = [
    {
        id: 'user',
        text: '内容管理',
        isMutilLevel: false,  //是否有多级子菜单，至多支持三级
        children: [
            {
                href: "/admin/gallery",
                text: "图库",
                leaf: true
            },
            {
                href: "/admin/articles",
                text: "文章管理",
                leaf: true
            },
            {
                href: "/admin/bases",
                text: "试驾基地",
                leaf: true
            },
            {
                href: "/admin/products",
                text: "产品管理",
                leaf: true
            }
        ]
    },
    {
        id: 'job',
        text: '用户管理',
        isMutilLevel: false,
        children: [
            {
                href: "/admin/users",
                text: "用户管理",
                leaf: true
            }
        ]
    },
    {
        id: 'data',
        text: '订单管理',
        isMutilLevel: false,
        children: [
            {
                href: "/admin/enquiries",
                text: "Enquiries",
                leaf: true
            },
            {
                href: "/admin/sample_request",
                text: "Sample Request",
                leaf: true
            },
            {
                href: "/admin/po_request",
                text: "PO Request",
                leaf: true
            },
            {
                href: "/admin/rfq_requirement",
                text: "RFQ Request",
                leaf: true
            }
        ]
    },
    {
        id: 'admin',
        text: '支持与服务',
        isMutilLevel: false,
        children: [
            {
                href: "/admin/faqs",
                text: "FAQ",
                leaf: true
            },
            {
                href: "/admin/subscriptions",
                text: "Subscriptions",
                leaf: true
            },
            {
                href: "/admin/settings",
                text: "全站设置",
                leaf: true
            },
            {
                href: "/admin/accounts",
                text: "管理员帐号",
                leaf: true
            }
        ]
    }
];

//end file