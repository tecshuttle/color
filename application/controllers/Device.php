<?php 
class Device extends CI_Controller
{
	
	
         public function __construct()
		 {
			 parent::__construct();
			 
			 $this->load->database();
			 $this->load->helper('url_helper');
			 
			 
			 
		 }

   
         public function index()
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

				
				$data = array(
				'name'=>$name,
				'tel'=>$tel,
				'email'=>$email,

				);

         

				$this->db->insert('device_board',$data);
				//$this->session->set_flashdata('contact_success','you good boy!');
				

				$this->load->view('formsuccess');	
				
				
				
				
				
				
				
				
			}
		
		
	}
		
			
			
			
			$this->load->view('device/index');
			
			 
			 
			 
		 }		 
}