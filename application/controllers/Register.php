<?php
class Register extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array(
            'form',
            'url'
        ));
        $this->load->model('email_register_model');
    }


    public function index()
    {
        $this->load->library('form_validation');

        $which = $this->input->post('which');

        if ($_POST) {
            if ($which === 'phone') {
                $this->phone_register();
            } else {
                $this->email_register();
            }
        }

        $data = array(
            'which' => ($which ? $which: 'email')
        );

        $this->load->view('register/index', $data);
    }
	
	public function service()
	{
		
		
		$this->load->view('register/service');
		
		
	}

    private function email_register()
    {
        $this->form_validation->set_rules('email', '邮箱', 'required',
            array('required' => '邮箱 不可为空.')
        );

        $this->form_validation->set_rules('username', '用户名', 'trim|required|min_length[3]|max_length[16]',
            array('required' => '用户名 不可为空.')
        );

        $this->form_validation->set_rules('password', '密码', 'trim|required|min_length[6]|max_length[16]',
            array('required' => '密码 不可为空.')
        );

        $this->form_validation->set_rules('passconf', '重复密码', 'trim|required|matches[password]',
            array('required' => '重复密码 不可为空.')
        );
		$this->form_validation->set_rules('assent', '同意条款', 'required',
            array('required' => '请勾选 同意条款.')
        );
		
		

        if ($this->form_validation->run() == FALSE) {
            //redirect($_SERVER['HTTP_REFERER']);
        } else {
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $passconf = $this->input->post('passconf');

			$phonequery = $this->db->get_where ('phone_register', array(
                'phoneuser' => $username
            ), 1, 0 );
				
			$emailquery = $this->db->get_where ('email_register', array(
				'username' => $username
			), 1, 0 );
			
			if($phonequery->result() != NULL || $emailquery->result() != NULL){
				echo "<script>
					alert('用户名已存在');
				</script>";
				return;
			}
			
			
            $data = array(
                'email' => $email,
                'username' => $username,
                'password' => md5($password),
                'passconf' => $passconf,
            );

            $this->db->insert('email_register', $data);
            $this->load->view('/formsuccess');
			echo "<script>
					alert('注册成功');
					window.location.href='http://www.sunyathe.com';
				</script>";
        }
    }

    private function phone_register()
    {
        $this->form_validation->set_rules('phoneuser', '用户名', 'trim|required|min_length[3]|max_length[16]',
            array('required' => '用户名不可为空.')
        );

        $this->form_validation->set_rules('phonepassword', '密码', 'trim|required|min_length[3]|max_length[16]',
            array('required' => '密码不可为空.')
        );

        $this->form_validation->set_rules('tel', '手机号', 'trim|required|exact_length[11]',
            array('required' => '手机号不可为空.')
        );
		$this->form_validation->set_rules('consent', '同意条款', 'required',
            array('required' => '请勾选 同意条款.')
        );

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $phoneuser = $this->input->post('phoneuser');
            $phonepassword = $this->input->post('phonepassword');
            $tel = $this->input->post('tel');

			$phonequery = $this->db->get_where ('phone_register', array(
                'phoneuser' => $phoneuser
            ), 1, 0 );
				
			$emailquery = $this->db->get_where ('email_register', array(
				'username' => $phoneuser
			), 1, 0 );
			
			if($phonequery->result() != NULL || $emailquery->result() != NULL){
				echo "<script>
					alert('用户名已存在');
				</script>";
				return;
			}
			
            $data = array(
                'phoneuser' => $phoneuser,
                'phonepassword' => md5($phonepassword),
                'tel' => $tel,
            );

            $this->db->insert('phone_register', $data);
			echo "
				<script>
					alert('注册成功');
					window.location.href='http://www.sunyathe.com';
				</script>";
        }
    }
}

//end file