<?php
class Messageboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('messageboard_model');
        $this->load->helper('url_helper');
        $this->load->library('pagination');
    }

    public function index($slug = NULL)
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
		
		if($_POST){
			$this->form_validation->set_rules('name', '姓名', 'required',
				array('required' => '姓名不可为空.')
			);
			$this->form_validation->set_rules('tel', '电话', 'required',
				array('required' => '电话不可为空.')
			);
			$this->form_validation->set_rules('email', '邮箱', 'required',
				array('required' => '邮箱不可为空.')
			);
			$this->form_validation->set_rules('company', '公司', 'required',
				array('required' => '公司不可为空.')
			);
			
			$this->form_validation->set_rules('message', '留言内容', 'required',
				array('required' => '留言板不可为空.')
			);
		

			if ($this->form_validation->run() == FALSE)
			{
			   //redirect($_SERVER['HTTP_REFERER']);
			}else{
					
				//$this->load->view('formsuccess');
				//如果通过验证，将获取的数据保存
				//获取过滤后的数据
					
				$name = $this -> input ->post('name');
				$tel = $this->input ->post('tel');
				$email = $this->input ->post('email');
				$company = $this->input ->post('company');
				$message = $this->input ->post('message');
				
				$data = array(
					'name'=>$name,
					'tel'=>$tel,
					'email'=>$email,
					'company'=>$company,
					'message'=>$message
				);

				$this->db->insert('messageboard',$data);
				//$this->session->set_flashdata('contact_success','you good boy!');
					
				$this->load->view('formsuccess');
			}
				
		}
		
		$this->load->view('header');
		$this->load->view('messageboard/index');
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
        $data['bases_item'] = $this->messageboard_model->get_bases($slug);
    
        if (empty($data['bases_item']))
        {
            show_404();
        }
    
        $data['title'] = $data['bases_item']['title'];
    
        //$this->load->view('templates/header', $data);
        $this->load->view('messageboard/view', $data);
        //$this->load->view('templates/footer');
    }
    
    // ajax获取地址下拉菜单
    public function region()
    {
        $html = '';
        $province_id = (int)$this->uri->segment(3);
        if ($province_id)
        {
            $rows = $this->messageboard_model->get_regions(2, $province_id);
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