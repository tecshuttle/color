<?php
class News extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }
	
	public function page($code)
    {
        $data = $this->get_article($code);

        $this->load->view('header', $data);
        $this->load->view('news/overview', $data);
        $this->load->view('footer');
    }

    private function get_article($code)
    {
        $this->load->model('articles_model');
		
        $article = $this->articles_model->select(array(
            'code' => $code
        ));
		
		$banner = $this->articles_model->select(array(
            'code' => 'newsbanner'
        ));

        $data = array(
            'title' => 'New news',
            'article' => $article,
            'banner' => $banner,
        );

        return $data;
    }
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
