<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class News extends MY_Controller
{
    function __construct()
    {
        parent::__construct(); // Call the Model constructor
        $this->load->model('news_model');
		$this->load->model('articles_model');
    }

	public function page($typeCode)
    {
		$article = $this->articles_model->select(array(	
            'code' => 'newsBanner'
        ));
		
		$type = "WHERE type='". $typeCode ."'";
		
		$page_sql = 'select * from `news`' . $type;
        $result = $this->db->query($page_sql); //处理数据
		
        $data = array(
			'data' => $result->result_array(),
			'article' => $article,
            'css' => array(),
            'js' => array()
        );

        $this->load->view('header', $data);
        $this->load->view('news/overview', $data);
        $this->load->view('footer', $data);
    }
	
	public function view()
    {
		$id = $this->uri->segment(3);
		
        $result = $this->loadModel($id);
		
		$article = $this->articles_model->select(array(
            'code' => 'newsViewBanner'
        ));
		
		$data = array(
			'row' => $result->row(),
			'article' => $article
		);
		
        $this->load->view('header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('footer', $data);
    }
	
	private function loadModel($id)
	{
		$sql = 'SELECT * FROM news WHERE id ='. $id;
		$model = $this->db->query($sql);
		
		if ($model === null) {
            show_404();
        }
		
		return $model;
	}
}

/* End of file */