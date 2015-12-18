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
        $this->load->model('bases_model');
        $this->load->model('product_model');
		$this->load->model('articles_model');
		
        $article = $this->articles_model->select(array(
            'code' => 'indexBanner'
        ));
		
		$nodus = "WHERE nodus='".$this->input->get('nodus')."'";
		$type = "WHERE type='".$this->input->get('type')."'";
		$newType = "WHERE type='".$this->input->get('newType')."'";
		$area = "WHERE area='".$this->input->get('area')."'";

        $about_menu = $this->articles_model->select(array(
            'type_id' => 246
        ));
		
		if($this->input->get('nodus') === NULL)
			$product_menu_sql = 'select * from product';
		else
			$product_menu_sql = 'select * from product '.$nodus;
		if($this->input->get('area') === NULL)
			$bases_menu_sql = 'select * from bases';
		else
			$bases_menu_sql = 'select * from bases '.$area;
		
		if($this->input->get('type') === NULL)
			$cases_menu_sql = 'select * from cases';
		else
			$cases_menu_sql = 'select * from cases '.$type;
		
		if($this->input->get('newType') === NULL)
			$news_menu_sql = 'select * from news';
		else
			$news_menu_sql = 'select * from news '.$newType;
		
		$bases_menu = $this->db->query($bases_menu_sql);
		$product_menu = $this->db->query($product_menu_sql);
		$cases_menu = $this->db->query($cases_menu_sql);
		$news_menu = $this->db->query($news_menu_sql);

        $data = array(
            'about_menu' => $about_menu['data'],
            'bases_menu' => $bases_menu->result_array(),
            'product_menu' => $product_menu->result_array(),
            'cases_menu' => $cases_menu->result_array(),
            'news_menu' => $news_menu->result_array(),
			'article' => $article
        );

        $this->load->view('home/index', $data);
        
    }
}


//end file