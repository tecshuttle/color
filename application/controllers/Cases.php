<?php
class Cases extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->helper('url_helper');
    }
	
	public function page($code)
    {
        $data = $this->get_article($code);

        $this->load->view('header', $data);
        $this->load->view('cases/overview', $data);
        $this->load->view('footer');
    }

    private function get_article($code)
    {
        $this->load->model('articles_model');
        $article = $this->articles_model->select(array(
            'code' => $code
        ));

        $data = array(
            'title' => 'New sdp',
            'article' => $article
        );

        return $data;
    }
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
