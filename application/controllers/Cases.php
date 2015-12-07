<?php
class Cases extends CI_Controller{
	
	
	   public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('url_helper');
    }
	
	
	  public function activity()
	  
	  {
		$this->load->model('articles_model');
		$article = $this->articles_model->select(array(
		   'id' => 3472
		));
		
		$data = array(
		    'title' => 'News archive',
		 	'article' => $article
		);
		
		
		$this->load->view('header',$data);
		$this->load->view('cases/activity',$data);
		$this->load->view('footer');
		
	  }
	  
	  public function display()
	  {
		  		$this->load->model('articles_model');
		$article = $this->articles_model->select(array(
		   'id' => 3461
		));
		
		$data = array(
		    'title' => 'News archive',
		 	'article' => $article
		);
		
		$this->load->view('header',$data);
		$this->load->view('cases/display',$data);
		$this->load->view('footer');
		  
		  
		  
		  
	  }
	  public function new_car()
	  {
		
		$this->load->model('articles_model');
		$article = $this->articles_model->select(array(
		   'id' => 3470
		));
		
		$data = array(
		    'title' => 'News archive',
		 	'article' => $article
		);
		
		$this->load->view('header',$data);
		$this->load->view('cases/new_car',$data);
		$this->load->view('footer');
		  
		  
	  }
	  
      public function join()
	  {
	  		
	  	$this->load->model('articles_model');
		$article = $this->articles_model->select(array(
		   'id' => 3471
		));
		
		$data = array(
		    'title' => 'News archive',
		 	'article' => $article
		);
		  
		$this->load->view('header',$data);
		$this->load->view('cases/join',$data);
		$this->load->view('footer');
		  
		  
	  }
	
	
	
	
	
	
	
	
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
