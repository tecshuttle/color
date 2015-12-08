<?php
class Contact extends CI_Controller{
	
	    public function __construct()
    {
        parent::__construct();
        $this->load->model('bases_model');
        $this->load->model('product_model');
        $this->load->helper('url_helper');
    }
	
	
	
	public function message_board()
	{
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
		
		$this->load->library('session');
		
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

         

				$this->db->insert('keyboard',$data);
				//$this->session->set_flashdata('contact_success','you good boy!');
				

				$this->load->view('formsuccess');	
				
				
				
				
				
				
				
				
			}
		
		
	}
		
		
	
	$this->load->view('templates/header');
	$this->load->view('contact/message_board');
	$this->load->view('templates/footer');
		
	}
	
	
	public function map()
	{
		$conditions = array();
        $id_conditions = array();
		
		$sync = isset($_GET['sync']);
		
		// 获取地区查询参数
        $province_id = (int)$this->uri->segment(4);
        $city_id = (int)$this->uri->segment(5);
        $province = $this->bases_model->get_region_name($province_id);
        $city = $this->bases_model->get_region_name($city_id); 
		
        
        // 内部使用的地区参数条件
        if ($province)
        {
            $conditions['province'] = $province;
        }
		
        if ($city)
        {
            $conditions['city'] = $city;
        }
		
		$all_sql = 'SELECT title,city FROM bases';
		$page_sql = 'SELECT * FROM `bases` '. $this->generate_where($conditions);
		
		if(!$province){
			$deviceWhere = ' where id = 1';
		}else{
			$deviceWhere = $this->generate_where($conditions);
		}
		
		$device_sql = 'SELECT s2.*, s1.name FROM bases s2
		  LEFT JOIN base_device s3   
			ON s2.id=s3.base_id  
			  LEFT JOIN device s1   
				ON s3.device_id = s1.id WHERE s2.id = 
					(SELECT id FROM bases'.$deviceWhere.')';
					
		//处理数据
		$allResult = $this->db->query($all_sql); 
        $result = $this->db->query($page_sql); 
		$deviceResult = $this->db->query($device_sql);
		
		$allCityBases = $allResult->result_array();
		/* foreach($allResult->result_array() as $allCityBase){
			$allCityBases[$allCityBase['city']] = $allCityBase['title'];
		} */
		
		$data['province_list'] = $this->bases_model->get_regions(1, 1);
		$data['city_list'] = $this->bases_model->get_regions(2, $province_id);
		$data['city_id'] = $city_id;
		$data['province_id'] = $province_id;
		$data['sync'] = $sync;
		$data['pagedata'] = $result->result_array();
		$data['deviceResult'] = $deviceResult->result_array();
		$data['has_data'] = count($data['pagedata']) > 0;
		$data['allCityBases'] = $allCityBases;
		
		$this->load->view('templates/header', $data);
		$this->load->view('contact/map');
		$this->load->view('templates/footer');
	}
	
	public function recruitment()
	{
	
    $this->load->view('templates/header');
	$this->load->view('contact/recruitment');
	$this->load->view('templates/footer');
		
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