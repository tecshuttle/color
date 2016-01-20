<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class admin extends MY_Controller
{
    public function index()
    {
        $admin = false;
        if (isset($_SESSION['admin'])) {
            $admin = $_SESSION['admin'];
        } else if (isset($_COOKIE['admin'])) {
            $admin = $_COOKIE['admin'];
        }

        if (!$admin) {
            header('Location: /admin/login');
        }

        $data = array(
            'user' => $admin,
            'msg' => 'admin',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/extjs4/locale/ext-lang-zh_CN.js',
                '/js/admin/main/config.js',
                '/js/admin/main/config_user.js',
                '/js/admin/main/config_general.js',
                '/js/admin/main/config_user_general.js',
                '/js/extjs4/ux/TabCloseMenu.js',
                '/js/admin/common/utils.js',
                '/js/admin/main/main.js'
            )
        );

        $this->load->view('admin/home_header', $data);
        $this->load->view('admin/script', $data);
    }

    //显示登入页面
    public function login()
    {
        $data = array(
            'msg' => '后台登入',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'

            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/login_form.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    //登入验证
    public function login2()
    {
        $name = $_POST['name'];
        $password = md5(trim($_POST['password']));

        $this->load->model('admins_model');
        $admin = $this->admins_model->get(array('name' => $name));

        if ($admin) {
            if ($admin->password === $password) {
                $_SESSION['admin'] = $name;
                $expire = time() + 30 * 86400; // 30 day
                setcookie('admin', $name, $expire, '/');

                echo json_encode(array(
                    'success' => true
                ));
            } else {
                echo json_encode(array(
                    'success' => false,
                    'msg' => 'password incorrect'
                ));
            }
        } else {
            echo json_encode(array(
                'success' => false,
                'msg' => 'no user'
            ));
        }
    }

    public function logout()
    {
        unset($_SESSION['admin']);

        $expire = -1;
        setcookie('admin', '', $expire, '/');

        $this->login();
    }

    public function jobs_userFavorites()
    {
        $data = array(
            'msg' => 'admin-articles',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/extjs4/locale/ext-lang-zh_CN.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/ZeroClipboard/ZeroClipboard.min.js',
                '/js/admin/jobs/userFavorites.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    public function articles()
    {
        $data = array(
            'msg' => 'admin-articles',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'

            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/cms_add_form.js',
                '/js/admin/cms.js',
                '/js/admin/articles.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    //试驾基地
    public function bases()
    {
        $data = array(
            'msg' => 'admin-试驾基地',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/bases.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }
	
	public function cases()
    {
        $data = array(
            'msg' => 'admin-成功案例',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/cases.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }
	
	public function contact()
    {
        $data = array(
            'msg' => 'admin-越野器械',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/contact.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }
	
	public function product()
    {
        $data = array(
            'msg' => 'admin-企业版图',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/product.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }
	
	public function recruitment()
    {
        $data = array(
            'msg' => 'admin-人才招聘',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/recruitment.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }
	
	public function downcenter()
    {
        $data = array(
            'msg' => 'admin-下载中心',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/downcenter.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }
	
	public function questionanswer()
    {
        $data = array(
            'msg' => 'admin-Q&A',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/questionanswer.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }
	
	public function news()
    {
        $data = array(
            'msg' => 'admin-新闻中心',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/news.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    public function gallery()
    {
        $data = array(
            'msg' => 'Admin-Gallery',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'

            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/jquery.min.js',
                '/js/jQuery-File-Upload/jquery.ui.widget.js',
                '/js/jQuery-File-Upload/jquery.fileupload.js',
                '/js/admin/gallery_batch_panel.js',
                '/js/admin/gallery_form.js',
                '/js/admin/gallery_grid.js',
                '/js/admin/cms.js',
                '/js/admin/gallery.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    public function products()
    {
        $data = array(
            'msg' => 'admin-products',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/cms_add_form.js',
                '/js/admin/cms.js',
                '/js/admin/products.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    public function equipments()
    {
        $data = array(
            'msg' => 'admin-products',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/MyApp/build/MyApp-all.css'
            ),
            'js' => array(
                '/js/MyApp/ext-all.js',
                '/js/moment.js',
                '/js/admin/equipments.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    public function equipments__()
    {
        $data = array(
            'msg' => 'admin-products',
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/equipments.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    public function faqs()
    {
        $data = array(
            'msg' => 'admin-' . __FUNCTION__,
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/grid.js',
                '/js/admin/faqs.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    public function users()
    {
        $data = array(
            'msg' => 'admin-' . __FUNCTION__,
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/grid.js',
                '/js/admin/users.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    public function enquiries()
    {
        $data = array(
            'msg' => 'admin-' . __FUNCTION__,
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/grid.js',
                '/js/admin/enquiries.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    public function settings()
    {
        $data = array(
            'msg' => 'admin-' . __FUNCTION__,
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/grid.js',
                '/js/admin/grid_form.js',
                '/js/admin/settings.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }


    public function accounts()
    {
        $data = array(
            'msg' => 'admin-' . __FUNCTION__,
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/grid.js',
                '/js/admin/grid_account_form.js',
                '/js/admin/accounts.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    public function subscriptions()
    {
        $data = array(
            'msg' => 'admin-' . __FUNCTION__,
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/grid.js',
                '/js/admin/subscriptions.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    public function sample_request()
    {
        $data = array(
            'msg' => 'admin-' . __FUNCTION__,
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/grid.js',
                '/js/admin/sample_request.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    public function po_request()
    {
        $data = array(
            'msg' => 'admin-' . __FUNCTION__,
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/grid.js',
                '/js/admin/po_request.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    public function rfq_requirement()
    {
        $data = array(
            'msg' => 'admin-' . __FUNCTION__,
            'base_url' => $this->config->config['base_url'],
            'css' => array(
                '/js/extjs4/resources/css/ext-all.css',
                '/css/admin/themes/ijobs-v3/css/index.css',
                '/css/admin/themes/ijobs-v3/css/ijobs.css'
            ),
            'js' => array(
                '/js/extjs4/bootstrap.js',
                '/js/admin/common/common.js',
                '/js/admin/common/utils.js',
                '/js/admin/common/ux/LinkColumn.js',
                '/js/admin/grid.js',
                '/js/admin/rfq_requirement.js'
            )
        );

        $this->load->view('admin/header', $data);
        $this->load->view('admin/script', $data);
    }

    //根据module，返回相应grid数据
    public function getList()
    {
        $option = $_POST;
        $model = $option['module'] . '_model';

        $this->load->model($model);
        $data = $this->$model->getList($option);

        echo json_encode($data);
    }

    public function gridDelete()
    {
        $id = $_POST['id'];
        $option = $_POST;
        $model = $option['module'] . '_model';

        $this->load->model($model);
        $this->$model->deleteByID($id);

        echo json_encode(array(
            'success' => true
        ));
    }

    public function products_tree()
    {
        $menu = $this->get_tree('products');
        echo json_encode($menu);
    }

    public function articles_tree()
    {
        $menu = $this->get_tree('articles');
        echo json_encode($menu);
    }

    public function gallery_tree()
    {
        $menu = $this->get_tree('gallery');
        echo json_encode($menu);
    }

    private function get_tree($module)
    {
        $this->load->model('types_model');
        $data = $this->types_model->get_menu($module);

        $menu = array();

        //取根分类
        foreach ($data as $key => $row) {
            if ($row->belong == 0) {
                $id = $row->id;
                array_push($menu, array(
                    'text' => $row->name,
                    'id' => $id
                ));
            }
        }

        foreach ($menu as $i => $item) {
            $menu[$i] = $this->get_submenu($item, $data);
        }

        return $menu;
    }

    /**把英文版图库，原样复制一份到中文版
     * 目录仅2级适用。
     * 1、按目录结构复制目录
     * 2、按目录结构复制图片条目
     *
     * 后台切换到英文版下执行，否则取不到英文菜单。
     * 条目多，执行时间较长，请耐心等待。
     */
    public function cp_en_cn()
    {
        exit; //禁用，避免爬虫程序启动。
        $menu = $this->get_tree('gallery');

        //复制目录
        foreach ($menu as $sub) {
            if (isset($sub['children'])) {
                $parent_id = $this->cp_type($sub['id'], 0);
                $this->cp_item($sub['id'], $parent_id);

                $this->cp_children($sub['children'], $parent_id);
            } else {
                $type_id_cn = $this->cp_type($sub['id'], 0);
                $this->cp_item($sub['id'], $type_id_cn);
            }
        }
    }

    private function cp_children($children, $parent_id)
    {
        print_a($children);

        foreach ($children as $sub) {

            $type_id_cn = $this->cp_type($sub['id'], $parent_id);
            $this->cp_item($sub['id'], $type_id_cn);
        }
    }

    //复制分类
    private function cp_type($type_id, $belong)
    {
        $type = $this->types_model->getByID($type_id);

        echo $type->name . '<br/>'; //显示执行进度

        $type_cn = array(
            'module' => 3,
            'lang' => 'cn',
            'belong' => $belong,
            'name' => $type->name,
            'weight' => $type->weight,
            'desc' => $type->desc,
            'cover' => $type->cover,
            'content' => $type->content
        );

        $type_id_cn = $this->types_model->insert($type_cn);

        return $type_id_cn;
    }

    //复制条目
    private function cp_item($type_id, $type_id_cn)
    {
        $this->load->model('gallery_model');

        $query = $this->gallery_model->get(array(
            'type_id' => $type_id
        ));

        $items = $query['data'];

        foreach ($items as $item) {
            $item_cn = array(
                'type_id' => $type_id_cn,
                'name' => $item->name,
                'desc' => $item->desc,
                'cover' => $item->cover,
                'content' => $item->content,
                'download' => $item->download,
                'ctime' => $item->ctime,
                'mtime' => $item->mtime,
                'is_hot' => $item->is_hot,
                'keywords' => $item->keywords,
                'picture_gallery' => $item->picture_gallery
            );

            $this->gallery_model->insert($item_cn);
        }
    }

    //递归查询子分类
    public function get_submenu($item, $data)
    {
        $sub = array();
        foreach ($data as $j => $row) {
            if ($row->belong == $item['id']) {
                array_push($sub, array(
                    'text' => $row->name,
                    'id' => $row->id
                ));
            }
        }


        if (count($sub) == 0) {
            $item['leaf'] = true;
        } else {
            foreach ($sub as $j => $ob) {
                $sub[$j] = $this->get_submenu($ob, $data);
            }
            $item['children'] = $sub;
        }

        return $item;
    }


    public function getTypeInfo()
    {
        $this->load->model('types_model');

        $data = $this->types_model->getByID($_POST['id']);
        echo json_encode($data);
    }

    public function saveTypeInfo()
    {
        $this->load->model('types_model');
        $data = $this->types_model->saveTypeInfo($_POST);
    }

    public function addType()
    {
        $this->load->model('types_model');
        $this->types_model->addType($_POST);

        echo json_encode(array(
            'success' => true
        ));
    }

    public function deleteType()
    {
        $this->load->model('types_model');

        $this->types_model->deleteByID($_POST['id']);

        echo json_encode(array(
            'success' => true
        ));
    }
}

/* End of file */