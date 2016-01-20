
<?php

/*class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
		
		$this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('tel', 'Tel', 'required',
            array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('contact/message_board');
        }
        else
        {
            $this->load->view('formsuccess');
        }
    }
}*/