<?php 
class Business extends CI_Controller{
	
	    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->helper('url_helper');
		$this->load->model('articles_model');
		
    }

	public function solution()
	{
		$banner = $this->articles_model->select(array(	
            'code' => 'solutionBanner'
        ));
		
	 	$this->load->model('articles_model');
		$article = $this->articles_model->select(array(
		   'id' => 3459
		));
		
		$data = array(
		    'title' => 'News archive',
		 	'article' => $article,
		 	'banner' => $banner,
		);
		
	    $this->load->view('header', $data);
	    $this->load->view('business/solution', $data);
	    $this->load->view('footer');
	}
         
	public function affiliates()
	{
		$banner = $this->articles_model->select(array(	
            'code' => 'affiliatesBanner'
        ));
		
		$this->load->model('articles_model');
		$article = $this->articles_model->select(array(
		   'id' => 3460
		));
		
		$data = array(
		    'title' => 'News archive',
		 	'article' => $article,
		 	'banner' => $banner,
		);
	  
	  $this->load->view('header',$data);
      $this->load->view('business/affiliates',$data);
      $this->load->view('footer');
			
	}
	
}