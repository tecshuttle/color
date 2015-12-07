<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct($type = NULL)
    {
        parent::__construct();

        session_start();

        //用户没有选择语言，使用默认语言
        $_SESSION['lang'] = 'cn';

        if (ENVIRONMENT !== 'production') {
            //$this->output->enable_profiler(TRUE);
        }
    }
}

/* End of file Controller.php */