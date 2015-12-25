<?php
class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
		$this->load->model('articles_model');
        $this->load->helper('url_helper');
    }

    public function page($code)
    {
        $data = $this->get_article($code);

        $this->load->view('header', $data);
        $this->load->view('about/overview', $data);
        $this->load->view('footer');
    }

    private function get_article($code)
    {
        $this->load->model('articles_model');
		
		$url = $this->uri->segment(2);

		
		
		$article = $this->articles_model->select(array(
            'code' => $code
        ));

		//banner图修改
        $overviewBanner = $this->articles_model->select(array(
            'code' => 'overviewBanner'
        ));
		
		$manageAddressBanner = $this->articles_model->select(array(
            'code' => 'manageAddressBanner'
        ));
		
		$frameworkBanner = $this->articles_model->select(array(
            'code' => 'frameworkBanner'
        ));
		
		$heretoforeBanner = $this->articles_model->select(array(
            'code' => 'heretoforeBanner'
        ));
		
		$cultureBanner = $this->articles_model->select(array(
            'code' => 'cultureBanner'
        ));
		
		$teamBanner = $this->articles_model->select(array(	
            'code' => 'teamBanner'
        ));

        $class = array(
            1957 => 'page-introduction',
            1976 => 'page-ceo-speech',
            1958 => 'page-organization',
            1979 => 'page-history',
            1980 => 'page-culture',
            1981 => 'page-team',
            3483 => 'page-culture',
        );

        $data = array(
            'title' => 'News archive',
            'article' => $article,
            'overviewBanner' => $overviewBanner,
            'manageAddressBanner' => $manageAddressBanner,
            'frameworkBanner' => $frameworkBanner,
            'heretoforeBanner' => $heretoforeBanner,
            'cultureBanner' => $cultureBanner,
            'teamBanner' => $teamBanner,
			'url' => $url
        );

        return $data;
    }
	
	 public function view()
    {
		$id = $this->uri->segment(3);
		
        $article = $this->articles_model->select(array(
            'code' => 'baseViewBanner'
        ));
		
        $result = $this->loadModel($id);
		
		$data = array(
			'row' => $result->row(),
			'article' => $article
		);
		
    
        $this->load->view('header', $data);
        $this->load->view('bases/view', $data);
        $this->load->view('footer', $data);
    }
	
	private function loadModel($id)
	{
		$sql = 'SELECT * FROM bases WHERE id ='. $id;
		$model = $this->db->query($sql);
		
		if ($model === null) {
            show_404();
        }
		
		return $model;
	}
}

//end file