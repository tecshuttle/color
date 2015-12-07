<?php
class About extends CI_Controller
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
        $this->load->view('about/overview', $data);
        $this->load->view('footer');
    }

    private function get_article($code)
    {
        $this->load->model('articles_model');

        $article = $this->articles_model->select(array(
            'code' => $code
        ));

        $class = array(
            1957 => 'page-introduction',
            1976 => 'page-ceo-speech',
            1958 => 'page-organization',
            1979 => '',
            1980 => '',
            1981 => '',
        );

        $data = array(
            'title' => 'News archive',
            'class' => (isset($class[$article->id]) ? $class[$article->id] : ''),
            'article' => $article
        );

        return $data;
    }
}

//end file