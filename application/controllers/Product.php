<?php
class Product extends CI_Controller{
	
	
	    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->helper('url_helper');
    }
	
	
	  public function down_center()
	  
	  {
		
		$this->load->model('articles_model');
		$article = $this->articles_model->select(array(
		   'id' => 3456
		));
		
		$data = array(
		    'title' => 'News archive',
		 	'article' => $article
		);
		
		
		$this->load->view('header',$data);
		$this->load->view('product/down_center',$data);
		$this->load->view('footer');
		
		  
		  
		  
		  
	  }
	  
	  public function question_answer()
	  {
		  
		
		$this->load->view('header');
		$this->load->view('product/question_answer');
		$this->load->view('footer');
		  
		  
		  
		  
	  }
	  public function device()
	  {
		  
		$this->load->view('header');
		$this->load->view('product/device');
		$this->load->view('footer');
		  
		  
	  }
	  

	
	
	
	
	
	
	
	
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
