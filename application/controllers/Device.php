<?php 
class Device extends CI_Controller
{
	
	
    public function __construct()
	{
		parent::__construct();
			 
		$this->load->model('deviceboard_model');
        // $this->load->helper('url_helper');
        // $this->load->library('pagination');
	}

	public function index(){
		$this->load->view('device/index');
	}
   
    // public function index()
	// {
		// $this->load->helper(array('form', 'url'));
        // $this->load->library('form_validation');
		
		// $province_id = (int)$this->uri->segment(4);
		// $province = $this->deviceboard_model->get_region_name($province_id);
        // $city = $this->deviceboard_model->get_region_name($city_id);
		
		// var_dump($province);
		
		// if($_POST){
			// $this->form_validation->set_rules('name', '姓名', 'required',
				// array('required' => '姓名 不可为空.')
			// );
			// $this->form_validation->set_rules('phone', '手机号', 'required',
				// array('required' => '手机号 不可为空.')
			// );
			// $this->form_validation->set_rules('sex', '称谓', 'required',
				// array('required' => '称谓 不可为空.')
			// );
			// $this->form_validation->set_rules('email', '邮箱', 'required',
				// array('required' => '邮箱 不可为空.')
			// );
			// $this->form_validation->set_rules('callFrom', '您希望的联系方式', 'required',
				// array('required' => '您希望的联系方式 不可为空.')
			// );
			// $this->form_validation->set_rules('address', '您的地址', 'required',
				// array('required' => '您的地址 不可为空.')
			// );
			// $this->form_validation->set_rules('zipCode', '您的邮政编码', 'required',
				// array('required' => '您的邮政编码 不可为空.')
			// );
			// $this->form_validation->set_rules('product', '您感兴趣的试驾器械', 'required',
				// array('required' => '您感兴趣的试驾器械 不可为空.')
			// );
			// $this->form_validation->set_rules('datetime', '试驾时间', 'required',
				// array('required' => '试驾时间 不可为空.')
			// );
			// $this->form_validation->set_rules('base', '您希望联系的试驾基地', 'required',
				// array('required' => '您希望联系的试驾基地 不可为空.')
			// );
			// $this->form_validation->set_rules('city', '所在的城市', 'required',
				// array('required' => '所在的城市 不可为空.')
			// );

            // if ($this->form_validation->run() == FALSE)
            // {
               // redirect($_SERVER['HTTP_REFERER']);
            // }else{
				
				// $this->load->view('formsuccess');
				// 如果通过验证，将获取的数据保存
                // 获取过滤后的数据
				
				// $name = $this -> input ->post('name');
				// $phone = $this->input ->post('phone');
				// $sex = $this->input ->post('sex');
				// $callFrom = $this -> input ->post('callFrom');
				// $address = $this->input ->post('address');
				// $email = $this->input ->post('email');
				// $zipCode = $this -> input ->post('zipCode');
				// $product = $this->input ->post('product');
				// $datetime = $this->input ->post('datetime');
				// $base = $this->input ->post('base');
				// $city = $this->input ->post('city');

				// $data = array(
					// 'name'=>$name,
					// 'phone'=>$phone,
					// 'email'=>$email,
					// 'sex'=>$sex,
					// 'callFrom'=>$callFrom,
					// 'address'=>$address,
					// 'zipCode'=>$zipCode,
					// 'product'=>$product,
					// 'datetime'=>$datetime,
					// 'base'=>$base,
					// 'city'=>$city,
				// );
         
				// $this->db->insert('deviceboard',$data);
				// $this->session->set_flashdata('contact_success','you good boy!');
				
				// $this->load->view('formsuccess');	
			// }
		// }
		
		// $data = array(
			// 'province_id' => $province_id,
			// 'city_id' => $city_id,
			// 'city_list' => $this->deviceboard_model->get_regions(2, $province_id),
			// 'province_list' => $this->deviceboard_model->get_regions(1, 1),
		// );
		
		// $this->load->view('device/index',$data);
	// }		

	// ajax获取地址下拉菜单
    // public function region()
    // {
        // $html = '';
        // $province_id = (int)$this->uri->segment(3);
        // if ($province_id)
        // {
            // $rows = $this->deviceboard_model->get_regions(2, $province_id);
            // if ($rows)
            // {
                // foreach ($rows as $row)
                // {
                    // $html .= '<option value="'.$row['region_id'].'">'.$row['region_name'].'</option>';
                // }
            // }
        // }
        // exit($html);
    // }
}