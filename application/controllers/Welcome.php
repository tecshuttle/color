<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('articles_model');

        $about_menu = $this->articles_model->select(array(
            'type_id' => 246
        ));

        $data = array(
            'about_menu' => $about_menu['data']
        );

        $this->load->view('header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('footer', $data);
    }
}


//end file