<?php 
class Device extends CI_Controller
{
	public function __construct() {
        parent::__construct ();
		$this->load->model('deviceboard_model');
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
   
    public function index()
	{
		if($_POST){
			$this->form_validation->set_rules('email', '邮箱', 'required',
				array('required' => '邮箱 不可为空.')
			);
			// $this->form_validation->set_rules('device', '您感兴趣的试驾器械', 'required',
				// array('required' => '请选择试驾器械.')
			// );
			// $this->form_validation->set_rules('base', '您感兴趣的试驾器械', 'required',
				// array('required' => '请选择试驾基地.')
			// );
			$this->form_validation->set_rules('datetime', '试驾时间', 'required',
				array('required' => '试驾时间 不可为空.')
			);
			$this->form_validation->set_rules('province', '省份', 'required',
				array('required' => '请选择 省份.')
			);
			$this->form_validation->set_rules('city', '城市', 'required',
				array('required' => '请选择 城市.')
			);
			$this->form_validation->set_rules('sex', '称谓', 'required',
				array('required' => '请勾选 称谓.')
			);
			$this->form_validation->set_rules('callFrom[]', '您希望的联系方式', 'required',
				array('required' => '请勾选 联系方式.')
			);
			
            if ($this->form_validation->run() == TRUE)
            {
				$province = $this->deviceboard_model->get_region_name($this->input ->post('province'));
				$city = $this->deviceboard_model->get_region_name($this->input ->post('city'));
				
				$name = $this -> input ->post('name');
				$phone = $this->input ->post('phone');
				$sex = $this->input ->post('sex');
				$callFrom = $this -> input ->post('callFrom');
				$address = $this->input ->post('address');
				$email = $this->input ->post('email');
				$zipCode = $this -> input ->post('zipCode');
				$device = $this->input ->post('device');
				$datetime = $this->input ->post('datetime');
				$base = $this->input ->post('base');

				$deviceData = array(
					'name'=>$name,
					'phone'=>$phone,
					'email'=>$email,
					'sex'=>$sex,
					'callFrom'=>$callFrom,
					'address'=>$address,
					'zipCode'=>$zipCode,
					'device'=>$device,
					'province'=>$province,
					'datetime'=>$datetime,
					'base'=>$base,
					'city'=>$city,
				);
         
				$this->db->insert('deviceboard',$deviceData);
				
				echo "___________提交成功！我们将会在第一时间内和您联系。";
			}
		}
		
		$data = array(
			'province_list' => $this->deviceboard_model->get_regions(1, 1),
		);
		
		$this->load->view('device/index',$data);
	}		

    public function region()
    {
        $html = '';
        $province_id = (int)$this->uri->segment(3);
        if ($province_id)
        {
            $rows = $this->deviceboard_model->get_regions(2, $province_id);
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
}