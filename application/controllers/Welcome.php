<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
		$this->load->helper('url_helper');
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

        
        $this->load->view('home/index', $data);
        
    }
}


//end file