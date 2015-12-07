<?php
class Contact extends CI_Controller{
	
	    public function __construct()
    {
        parent::__construct();
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
		
		
	
	$this->load->view('header');
	$this->load->view('contact/message_board');
	$this->load->view('footer');
		
	}
	
	
	public function map()
	{
	
    $this->load->view('header');
	$this->load->view('contact/map');
	$this->load->view('footer');
		
	}
	
	public function recruitment()
	{
	
    $this->load->view('header');
	$this->load->view('contact/recruitment');
	$this->load->view('footer');
		
	}
	

	
	
	
	
	
	
	
	
}