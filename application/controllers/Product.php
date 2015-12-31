<?php
class product extends CI_Controller{
	
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
		$this->load->model('articles_model');
        $this->load->helper('url_helper');
    }
	
	public function device()
	{
		$id = $this->uri->segment(4);
		
		switch($id)
		{
			case '1': $name = '%爬坡能力%';break;
			case '2': $name = '%四驱动力%';break;
			case '3': $name = '%抓地力%';break;
			case '4': $name = '%通过能力%';break;
			case '5': $name = '%车身刚性';break;
			case '6': $name = '%稳定性';break;
			case '7': $name = '%悬挂系统%';break;
			case '8': $name = '%下坡辅助能力%';break;
			default: $name = NULL;
		}
		
		if($name === NULL){
			$productName = 'GROUP BY road_name';
		} else{
			$productName = "WHERE name LIKE '" .$name. "'";
		}
		
		$banner = $this->articles_model->select(array(	
            'code' => 'deviceBanner'
        ));
		
		// 分页
		$count_sql = "SELECT * FROM product ". $productName;
		$count_query = $this->db->query($count_sql);
        $count = $count_query->num_rows();
        
        $page_num = 4; //每页个数
        $total_page = ceil($count / $page_num); //获取总页数
        
        // 当前页
        $nowpage = $this->uri->segment(3);
		
		if ($nowpage <= 0)
        {
            // 无效页码
            $nowpage = 1;
        }
        if ($total_page > 0 && $nowpage > $total_page)
        {
            // 超过最大页
            $nowpage = $total_page;
        }
		
		$page_sql = "SELECT * FROM product ". $productName;

        $page_sql .= ' limit '.(($nowpage-1)*$page_num).','.$page_num;
		
        $result = $this->db->query($page_sql); //处理数据
		
		// 上下页链接
        $base_url = '/product/device';
        if($nowpage==1){
            $prevlink = '<li class="previous disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>';
        }else{
            $prevurl = $this->create_page_url($base_url, ($nowpage-1), array($id));
            $prevlink = '<li class="previous"><a href="'.$prevurl.'"><i class="fa fa-angle-left"></i></a></li>';
        }
        if($nowpage == $total_page){
            $nextlink = '<li class="next disabled"><a href="#"><i class="fa fa-angle-right"></i></a></li>';
        }else{
            $nexturl = $this->create_page_url($base_url, ($nowpage+1), array($id));
            $nextlink = '<li class="next"><a href="'.$nexturl.'"><i class="fa fa-angle-right"></i></a></li>';
        }
        
        //生成分页
        $pagelink = $prevlink.'<li class="page-number current"><span class="number-wrap"><b>'.$nowpage.'</b><i>'.$total_page.'</i></span></li>'.$nextlink;
		
		$data = array(
			'dataList' => $result->result_array(),
			'pagelink' => $pagelink,
			'nowpage' => $nowpage,
			'banner' => $banner,
			'id' => $id,
			'has_data' => count($result->result_array()) > 0,
            'css' => array(),
            'js' => array()
		);
		
		$this->load->view('header');
		$this->load->view('product/device', $data);
		$this->load->view('footer');
	}
	  
	// 创建分页url
    private function create_page_url($base_url, $page, $conditions=array())
    {
        $url = $base_url . '/' . $page;
        if (is_array($conditions))
        {
            foreach ($conditions as $value)
            {
                $url .= '/' . $value;
            }
        }
        return $url;
    }

    public function view()
    {
		$id = $this->uri->segment(3);
		
		$deviceViewBanner = $this->articles_model->select(array(
            'code' => 'deviceViewBanner'
        ));
		
        $result = $this->loadModel($id);
		
		$data['row'] = $result->row();
		$data['deviceViewBanner'] = $deviceViewBanner;
    
        $this->load->view('header', $data);
        $this->load->view('product/view', $data);
        $this->load->view('footer', $data);
    }
	
	private function loadModel($id)
	{
		$sql = 'SELECT * FROM product WHERE id ='. $id;
		$model = $this->db->query($sql);
		
		if ($model === null) {
            show_404();
        }
		
		return $model;
	}
    
    // ajax获取地址下拉菜单
    public function region()
    {
        $html = '';
        $province_id = (int)$this->uri->segment(3);
        if ($province_id)
        {
            $rows = $this->product_model->get_regions(2, $province_id);
            if ($rows)
            {
                foreach ($rows as $row)
                {
                    $html .= '<option value="'.$row['region_id'].'">'.$row['region_name'].'</option>';
                }
            }
        }
        exit($html);
    }
    
    // 生成sql的where字句
    private function generate_where($conditions)
    {
        $where = ' where 1 ';
        if (is_array($conditions))
        {
            foreach ($conditions as $column => $value)
            {
                $where .= " AND {$column} = '{$value}' ";
            }
        }
        return $where;
    }

    public function load_article()
    {
        $article = $_POST['article'];
        echo $this->load->view('about_us/' . $article, true);
    }


    public function loadByID()
    {
        $id = $_POST['id'];
        $article = $this->articles_model->loadByID($id);

        $gallery = '';
        if (trim($article->picture_gallery) != '') {
            $pictures = explode("\n", trim($article->picture_gallery));
            $gallery = $this->load->view('news/gallery', array('pictures' => $pictures), true);
        }

        echo $article->content . $gallery;
    }

    public function save()
    {
        foreach ($_POST as $key => $item) {
            if ($key === 'is_hot' || $key === 'desc' || $key === 'keywords') continue; //指定允许空值的字段

            if (empty($_POST[$key])) {
                unset($_POST[$key]);
            }
        }

        if (isset($_POST['id'])) {
            $_POST['mtime'] = time();
            $this->product_model->update($_POST);
        } else {
            $_POST['ctime'] = time();
            $_POST['mtime'] = time();
            $this->product_model->insert($_POST);
        }

        echo json_encode(array('success' => true));
    }

    private function upload_file($name)
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|txt|doc|pdf';
        $config['max_size'] = '9000000'; //9MB
        $config['max_width'] = '4096';
        $config['max_height'] = '4096';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($name)) {
            $error = array('error' => $this->upload->display_errors());
            return '';
        }

        $data = array('upload_data' => $this->upload->data());

        return $this->time_file_name($data['upload_data']['full_path']);
    }

    private function time_file_name($file_path)
    {
        $info = pathinfo($file_path);

        $new_file_name = (strval((int)round(microtime(true) * 10000))) . '.' . $info['extension'];

        $new_file_path = $info['dirname'] . '/' . $new_file_name;

        rename($file_path, $new_file_path);

        return $new_file_name;
    }

    public function getList()
    {
        $option = $_POST;
        $data = $this->product_model->get($option);
        echo json_encode($data);
    }

    public function getDownloadList()
    {
        $type_id = $_GET['type_id'];
        $page = $_GET['page'];

        $list = $this->articles_model->getDownloadList($_GET);

        $data = array(
            'list' => $list['data'],
            'pager' => $this->build_pagebar($list['total'], 10, $page, '/adf/__page__', $type_id)
        );

        echo $this->load->view('supports_services/download-center', $data, true);
    }

    public function getDownloadListSearch()
    {
        $keyword = $_POST['keyword'];

        $list = $this->articles_model->getDownloadListSearch($keyword);

        $data = array(
            'keyword' => $keyword,
            'list' => $list['data'],
            'pager' => ''
        );

        echo $this->load->view('supports_services/download-center', $data, true);
    }

    public function getListByType()
    {
        $type_id = $_POST['type_id'];

        $data = $this->articles_model->getListByType($type_id);

        echo json_encode($data);
    }

    public function loadNewsList()
    {
        $type_id = $_POST['type_id'];
        //$page = $_GET['page'];

        $list = $this->articles_model->getListByType($type_id);

        $this->load->model('types_model');

        $data = array(
            'type_info' => $this->types_model->getByID($type_id),
            'list' => $list,
            'pager' => '' //$this->build_pagebar($list['total'], 20, $page, '/adf/__page__', $type_id)
        );

        echo $this->load->view('news/news-list', $data, true);
    }

    public function loadSupportsServicesList()
    {
        $type_id = $_POST['type_id'];

        $list = $this->articles_model->getListByType($type_id);

        $this->load->model('types_model');

        $data = array(
            'type_info' => $this->types_model->getByID($type_id),
            'list' => $list,
            'pager' => ''
        );

        echo $this->load->view('supports_services/category-list', $data, true);
    }

    /**
     * 生成分页条
     *
     * @param integer $total 总记录数
     * @param integer $perpage 每页显示记录数
     * @param integer $page 当前页码
     * @param string $url 链接,其中的__page__将用页码替换
     *
     * @return string
     */
    function build_pagebar($total, $perpage, $page, $url, $type_id = 0)
    {
        $pages = ceil($total / $perpage);
        $page = $page <= 0 ? 1 : $page;

        $total = $total <= 0 ? 1 : $total;

        /*
        if (false === strpos($url, ".") && substr($url, -1) != '/')
        {
            $url .= '/';
        }
        */

        $html = '<div class="pagination"><ul class="clearfix">';

        if ($pages <= 11) {
            $start = 1;
            $end = $pages;
        } else if ($page > 6 && $page + 5 <= $pages) {
            $start = $page - 5;
            $end = $page + 5;
        } else if ($page + 5 > $pages) {
            $start = $pages - 10;
            $end = $pages;
        } else if ($page <= 6) {
            $start = 1;
            $end = 11;
        }

        //
        if ($page == 1) {
            $html .= "<li><a>Prev</a></li>";
        } else {
            //$html .= "<li><a href=\"" . str_replace("__page__", $page - 1, $url) . "\">Prev</a></li>";
            $html .= "<li><a href=\"javascript: getDownloadList(" . $type_id . ", " . ($page - 1) . ");\">Prev</a></li>";
        }

        if ($start > 1) {
            $html .= "<li><a href=\"" . str_replace("__page__", 1, $url) . "\">1</a></li>";
        }

        if ($start > 2) {
            $html .= "<li><a href=\"" . str_replace("__page__", 2, $url) . "\">2</a></li>";
        }

        if ($start > 3) {
            $html .= "<li><a>...</a></li>";
        }

        for ($i = $start; $i <= $end; $i++) {
            if ($page == $i) {
                $html .= "<li class=\"active\"><a href=\"javascript: void(0)\">$i</li>";
            } else {
                $html .= "<li><a href=\"javascript: getDownloadList(" . $type_id . ", " . $i . ");\">$i</a></li>";
            }
        }

        if ($end < $pages - 1) {
            $html .= "<li><a>...</a></li>";
        }

        if ($end < $pages) {
            $html .= "<li><a href=\"" . str_replace("__page__", $pages, $url) . "\">$pages</a></li>";
        }

        if ($page >= $pages) {
            $html .= "<li><a>Next</a></li>";
        } else {
            //$html .= "<li><a href=\"" . str_replace("__page__", $page + 1, $url) . "\">Next</a></li>";
            $html .= "<li><a href=\"javascript: getDownloadList(" . $type_id . ", " . ($page + 1) . ");\">Next</a></li>";
        }

        $html .= "</ul></div>";

        return $html;
    }


    public function delete()
    {
        $id = $_POST['id'];

        $this->product_model->deleteByID($id);

        echo json_encode(array(
            'success' => true
        ));
    }
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
