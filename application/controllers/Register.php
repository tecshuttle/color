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
        $this->load->library('session');
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

        if ($this->form_validation->run() == FALSE) {
            //redirect($_SERVER['HTTP_REFERER']);
        } else {
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $passconf = $this->input->post('passconf');

            $data = array(
                'email' => $email,
                'username' => $username,
                'password' => md5($password),
                'passconf' => $passconf,
            );

            $this->db->insert('email_register', $data);
            $this->load->view('formsuccess');
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

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $phoneuser = $this->input->post('phoneuser');
            $phonepassword = $this->input->post('phonepassword');
            $tel = $this->input->post('tel');

            $data = array(
                'phoneuser' => $phoneuser,
                'phonepassword' => md5($phonepassword),
                'tel' => $tel,
            );

            $this->db->insert('phone_register', $data);
            $this->load->view('formsuccess');
        }
    }
}

//end file