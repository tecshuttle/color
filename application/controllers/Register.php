<?php
class Register extends CI_Controller {




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

        $this->load->library('form_validation');


        //邮箱注册
        if($_POST){
            if($this ->input->post('phoneType') === null){
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


                if ($this->form_validation->run() == FALSE)
                {
                    //redirect($_SERVER['HTTP_REFERER']);
                }else{

                    //$this->load->view('formsuccess');
                    //如果通过验证，将获取的数据保存
                    //获取过滤后的数据

                    $email =  $this ->input->post('email');
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    $passconf = $this->input->post('passconf');


                    $data = array(

                        'email' =>$email,
                        'username'=>$username,
                        'password'=>$password,
                        'passconf'=>$passconf,

                    );


                    $this->db->insert('email_register',$data);
                    //$this->session->set_flashdata('contact_success','you good boy!');

                    $this->load->view('formsuccess');

                }}else{
                //手机注册
                if($_POST){

                    $this->form_validation->set_rules('phoneuser', '用户名', 'required',
                        array('required' => '用户名不可为空.')
                    );
                    $this->form_validation->set_rules('phonepassword', '密码', 'trim|required|min_length[3]|max_length[16]',
                        array('required' => '密码不可为空.')
                    );
                    $this->form_validation->set_rules('tel', '手机号', 'trim|required|min_length[11]',
                        array('required' => '手机号不可为空.')
                    );


                    if ($this->form_validation->run() == FALSE)
                    {
                    	
						redirect('/register/index', 'refresh');
                        //redirect($_SERVER['HTTP_REFERER']);
                    }else{



                        $phoneuser = $this->input->post('phoneuser');
                        $phonepassword = $this->input->post('phonepassword');
                        $tel       = $this->input->post('tel');


                        $data = array(


                            'phoneuser'=>$phoneuser,
                            'phonepassword'=>$phonepassword,
                            'tel'=>$tel,


                        );

                        $this->db->insert('phone_register',$data);

                        $this->load->view('formsuccess');



                    }
                }
            }


        }
        $this->load->view('register/index');
    }
}