<?php
class Bases extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('bases_model');
        $this->load->helper('url_helper');
        $this->load->library('pagination');
    }

    public function index($slug = NULL)
    {
        // 获取地区查询参数
        $province_id = (int)$this->uri->segment(4);
        $city_id = (int)$this->uri->segment(5);
        $province = $this->bases_model->get_region_name($province_id);
        $city = $this->bases_model->get_region_name($city_id);
        
        // 内部使用的地区参数条件
        $conditions = array();
        $id_conditions = array();
        if ($province)
        {
            $conditions['province'] = $province;
            $id_conditions[] = $province_id;
        }
        if ($city)
        {
            $conditions['city'] = $city;
            $id_conditions[] = $city_id;
        }
        
        // 是否ajax请求
        $sync = isset($_GET['sync']);
        
        /*$count = $this->db->count_all_results('bases'); //查找数据总数
        //分页类
        $config['base_url'] = 'http://localhost/index.php/bases/index/';
        $config['total_rows'] = 20;
        $config['per_page'] = 4;
        $config['first_link'] = FALSE; //不显示'首页'链接
        $config['last_link'] = FALSE; //不显示'最后一页'链接
        $config['next_tag_open'] = '<li class="next">';
        $config['next_link'] = '<i class="fa fa-angle-right"></i>'; //下一页连接
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="previous">';
        $config['prev_link'] = '<i class="fa fa-angle-left"></i>';	//下一页连接
        $config['prev_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();*/
        
        //数据总数
        $count_sql = 'select * from `bases` ' . $this->generate_where($conditions);
        $count_query = $this->db->query($count_sql);
        $count = $count_query->num_rows();
        
        $page_num = 1; //每页个数
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
		
		$page_sql = 'select * from  `bases` ' . $this->generate_where($conditions);
        $page_sql .= ' limit '.(($nowpage-1)*$page_num).','.$page_num;
        $result = $this->db->query($page_sql); //处理数据
        
        // 上下页链接
        $base_url = site_url('bases/index');
        if($nowpage==1){
            $prevlink = '<li class="previous disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>';
        }else{
            $prevurl = $this->create_page_url($base_url, ($nowpage-1), $id_conditions);
            $prevlink = '<li class="previous"><a href="'.$prevurl.'"><i class="fa fa-angle-left"></i></a></li>';
        }
        if($nowpage == $total_page){
            $nextlink = '<li class="next disabled"><a href="#"><i class="fa fa-angle-right"></i></a></li>';
        }else{
            $nexturl = $this->create_page_url($base_url, ($nowpage+1), $id_conditions);
            $nextlink = '<li class="next"><a href="'.$nexturl.'"><i class="fa fa-angle-right"></i></a></li>';
        }
        
        //生成分页
        $pagelink = $prevlink.'<li class="page-number current"><span class="number-wrap"><b>'.$nowpage.'</b><i>'.$total_page.'</i></span></li>'.$nextlink;
        $data['pagelink'] = $pagelink;
        $data['nowpage'] = $nowpage;
        $data['pagedata'] = $result->result_array();
        $data['has_data'] = count($data['pagedata']) > 0;
        $data['province_list'] = $this->bases_model->get_regions(1, 1);
        $data['city_list'] = $this->bases_model->get_regions(2, $province_id);
        $data['province_id'] = $province_id;
        $data['city_id'] = $city_id;
        $data['sync'] = $sync;
        $data['title'] = 'News archive';
        
        $this->load->view('header', $data);
        $this->load->view('bases/index', $data);
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

    public function view($slug = NULL)
    {
        $data['bases_item'] = $this->bases_model->get_bases($slug);
    
        if (empty($data['bases_item']))
        {
            show_404();
        }
    
        $data['title'] = $data['bases_item']['title'];
    
        $this->load->view('bases/view', $data);
    }
    
    // ajax获取地址下拉菜单
    public function region()
    {
        $html = '';
        $province_id = (int)$this->uri->segment(3);
        if ($province_id)
        {
            $rows = $this->bases_model->get_regions(2, $province_id);
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
}