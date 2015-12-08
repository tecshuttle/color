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
                href: "/admin/devices",
                text: "越野器材",
                leaf: true
            },
            {
                href: "/admin/branch",
                text: "企业版图",
                leaf: true
            },
            {
                href: "/admin/jobs",
                text: "人才招聘",
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
        id: 'admin',
        text: '支持与服务',
        isMutilLevel: false,
        children: [
            {
                href: "/admin/accounts",
                text: "管理员帐号",
                leaf: true
            }
        ]
    }
];

//end file