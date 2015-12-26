<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cases extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); // Call the Model constructor
        $this->load->model('cases_model');
		$this->load->model('articles_model');
		$this->load->helper('url_helper');
    }

	public function page($typeCode)
    {
		$type = "WHERE type='". $typeCode ."'";
		
		$page_sql = 'select * from `cases`' . $type;
        $result = $this->db->query($page_sql); //处理数据
		$data = $this->get_article($typeCode);
		
        $data['data'] = $result->result_array();

        $this->load->view('header', $data);
        $this->load->view('cases/overview', $data);
        $this->load->view('footer', $data);
    }
	
	private function get_article($typeCode)
	{
		$this->load->model('articles_model');
		
		$url = $this->uri->segment(2);
		
		$article = $this->articles_model->select(array(
            'code' => $typeCode
        ));
		
		//banner图修改
		$activityBanner = $this->articles_model->select(array(
            'code' => 'activityBanner'
        ));
		
		$displayBanner = $this->articles_model->select(array(
            'code' => 'displayBanner'
        ));
		
		$newcarBanner = $this->articles_model->select(array(
            'code' => 'newcarBanner'
        ));
		
		$joinBanner = $this->articles_model->select(array(
            'code' => 'joinBanner'
        ));
		
		

		
		$data = array(
		   
   		   'activityBanner'=> $activityBanner,
		   'displayBanner'=> $displayBanner,
		   'newcarBanner'=> $newcarBanner,
		   'joinBanner'=>$joinBanner,
		   'url'=> $url
		
		
		
		);
		
		return $data;
	}
	
	public function view()
    {
		$id = $this->uri->segment(3);
		
        $result = $this->loadModel($id);
		
		$article = $this->articles_model->select(array(
            'code' => 'casesViewBanner'
        ));
		
		$data = array(
			'row' => $result->row(),
			'article' => $article
		);
		
        $this->load->view('header', $data);
        $this->load->view('cases/view', $data);
        $this->load->view('footer', $data);
    }
	
	private function loadModel($id)
	{
		$sql = 'SELECT * FROM cases WHERE id ='. $id;
		$model = $this->db->query($sql);
		
		if ($model === null) {
            show_404();
        }
		
		return $model;
	}
	
}

/* End of file */