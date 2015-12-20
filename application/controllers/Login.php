<?php
class Login extends CI_Controller {
    private $pass = '';
	
    public function __construct() {
        parent::__construct ();

        $this->load->helper ( array (
            'form',
            'url'
        ) );
        $this->load->library('session');
        $this->load->model('email_register_model');
    }


    public function index() {
		
		$this->load->library ( 'form_validation' );

        $this->form_validation->set_rules ( 'username', 'Username', 'required',
            array('required' => '用户名不可为空.')
        );

        $this->form_validation->set_rules ( 'password', 'Password', 'required',
            array('required' => '密码不可为空.')
        );
		
		if ($this->form_validation->run() == TRUE) {
				
                $data = array (
                    'username' => $_POST ['username'],
                    'password' => md5($_POST ['password'])
                );
				
				$phonedata = array (
                    'phoneuser' => $_POST ['username'],
                    'phonepassword' => md5($_POST ['password'])
                );
                
				$phonequery = $this->db->get_where ('phone_register', array(
                    'phoneuser' => $phonedata ['phoneuser']
                ), 1, 0 );
				
				$query = $this->db->get_where ('email_register', array(
                    'username' => $data ['username']
                ), 1, 0 );
				
				if($query->result() == NULL || $phonequery->result() == NULL){
					$this->form_validation->set_message('username', '用户名不存在.');
				}else{
					$this->input->set_cookie("userLogin", true, 660);
					
					redirect("downcenter");
				}
		}
		
		$this->load->view ( 'login/index' );
		
    }
}
